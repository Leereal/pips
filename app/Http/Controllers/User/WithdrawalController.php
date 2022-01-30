<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\Agent;
use App\Models\User_plans;
use App\Models\Admin;
use App\Models\Faq;
use App\Models\Images;
use App\Models\Testimony;
use App\Models\Content;
use App\Models\Asset;
use App\Models\Mt4Dtails;
use App\Models\Deposit;
use App\Models\Notification;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Models\Tp_Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Mail\NewNotification;
use App\Mail\UserUpload;
use App\Mail\KycUpload;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\CPTrait;
class WithdrawalController extends Controller
{
    use CPTrait;
    //
    public function withdrawamount(Request $request){
        $request->session()->put('paymentmethod', $request->method);
        return redirect()->route('withdrawfunds');
    }

    //Return withdrawals route
    public function withdrawfunds()
    {
        $paymethod = session('paymentmethod');
        $checkmethod =  Wdmethod::where('name',$paymethod)->first();
        if($checkmethod->defaultpay == "yes"){
            $default = true;
        }else {
            $default = false;
        }

        if($checkmethod->methodtype == "crypto"){
            $methodtype = 'crypto';
        }else {
            $methodtype = 'currency';
        }

        return view('user.withdraw',[
            'title'=>'Complete Withdrawal Request',
            'payment_mode' => $paymethod,
            'default' => $default,
            'methodtype' => $methodtype,
        ]);
    }

    public function getotp(){
        $code = $this->RandomStringGenerator(5);

        $user = Auth::user();
        User::where('id', $user->id)->update([
            'withdrawotp' => $code,
        ]);

        $objDemo = new \stdClass();
        $objDemo->message = "You have initiated a withdrawal request, use the OTP below to complete your request.";
        $objDemo->sender = $settings->site_name;
        $objDemo->otpcode = $code;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject ="OTP Request";
        Mail::bcc(Auth::user()->email)->send(new NewNotification($objDemo));
        return redirect()->back()
            ->with('success', 'Action Sucessful! OTP have been sent to your email');
    }

    public function completewithdrawal(Request $request){

        if (Auth::user()->sendotpemail == "Yes") {
            if ($request->otpcode != Auth::user()->withdrawotp) {
                return redirect()->back()->with('message','OTP is incorrect, please recheck the code');
            }
        } 
        
        $settings=Settings::where('id','1')->first();
        if($settings->enable_kyc =="yes"){
            if(Auth::user()->account_verify != "Verified"){
                return redirect()->back()->with('message','Your account must be verified before you can make withdrawal.');
            }
        }
    
        $method=Wdmethod::where('name', $request->method)->first();
        if ($method->charges_type == 'percentage') {
            $charges = $request['amount'] * $method->charges_amount/100;
        } else {
            $charges = $method->charges_amount;
        }
        
        $to_withdraw = $request['amount'] + $charges;
        //return if amount is lesser than method minimum withdrawal amount
    
        if(Auth::user()->account_bal < $to_withdraw){
            return redirect()->back()
            ->with('message', 'Sorry, your account balance is insufficient for this request.'); 
        }
         
        if($request['amount'] < $method->minimum){
            return redirect()->back()
            ->with("message", "Sorry, The minimum amount you can withdraw is $settings->currency$method->minimum, please try another payment method."); 
        }

        //get user last investment package
        $last_user_plan=User_plans::where('user',Auth::user()->id)
            ->where('active','yes')
            ->orderBy('activated_at', 'asc')->first();

        //get user
        $user=User::where('id',Auth::user()->id)->first();

        if($request->method =='Bitcoin'){
            if(empty($user->btc_address)){
                return redirect()->route('profile')
                ->with('message', 'Please Setup your Bitcoin Wallet Address');
            }
            $coin="BTC"; 
            $wallet=$user->btc_address;
        }elseif($request->method  =='Ethereum'){
            if(empty($user->eth_address)){
                return redirect()->route('profile')
                ->with('message', 'Please Setup your Ethereum Wallet Address');
            }
            $coin="ETH"; 
            $wallet=$user->eth_address;
        }elseif($request->method  =='Litecoin'){
            if(empty($user->ltc_address)){
                return redirect()->route('profile')
                ->with('message', 'Please Setup your Litecoin Wallet Address');
            }
            $coin="LTC";  
            $wallet=$user->ltc_address;
        }elseif($request->method  =='Bank Transfer'){
            if(empty($user->account_name) or empty($user->bank_name) or empty($user->account_number)){
                return redirect()->route('acountdetails')
                ->with('message', 'Please Setup your Bank Account Details');
            }
        }

        //debit user
        User::where('id',$user->id)->update([
            'account_bal' => $user->account_bal-$to_withdraw,
            'withdrawotp' => NULL,
        ]);

        $amount= $request['amount'];
        $ui = $user->id;

        if($settings->withdrawal_option =="auto" and ($request->method =='Bitcoin' or $request->method  =='Litecoin' or $request->method  =='Ethereum')){
            return $this->cpwithdraw($amount, $coin, $wallet, $ui, $to_withdraw);
        }

        //send notification to admin
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you that you a user have made a withdrawal request of $settings->currency$amount, kindly login to your account and review and take neccesary action.";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject ="Withdrawal Request";
        Mail::bcc($settings->contact_email)->send(new NewNotification($objDemo));

        //send notification to user
        $objDemouser = new \stdClass();
        $objDemouser->message = "Your withdrawal request of $settings->currency$amount was successful, kindly wait while we process your transaction";
        $objDemouser->sender = $settings->site_name;
        $objDemouser->date = \Carbon\Carbon::Now();
        $objDemouser->subject ="Successful Withdrawal Request";
        Mail::bcc($user->email)->send(new NewNotification($objDemouser));

        //save withdrawal info
        $dp=new Withdrawal();         
        $dp->amount= $amount;
        $dp->to_deduct= $to_withdraw;
        $dp->payment_mode = $request->method;
        $dp->status= 'Pending';
        $dp->paydetails= $request->details;
        $dp->user= $user->id;
        $dp->save();  
        
        return redirect()->route('withdrawalsdeposits')
            ->with('success', 'Action Sucessful! Please wait while we process your request.');

    }


    // for front end content management
    function RandomStringGenerator($n) 
    { 
        $generated_string = ""; 
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
        $len = strlen($domain); 
        for ($i = 0; $i < $n; $i++) 
        { 
            $index = rand(0, $len - 1); 
            $generated_string = $generated_string . $domain[$index]; 
        } 
        // Return the random generated string 
        return $generated_string; 
    } 









}
