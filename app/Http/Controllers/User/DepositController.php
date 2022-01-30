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

class DepositController extends Controller
{
    public function getmethod($id){
       $methodname =  Wdmethod::where('id', $id)->first();
        return response()->json($methodname->name);
    }

    //Return payment page
    public function newdeposit(Request $request){

        $settings = Settings::where('id', '1')->first();
        $methodname =  Wdmethod::where('name', $request->payment_method)->first();

        if ($methodname->name == "Stripe") {
            $secretkey = $settings->s_s_k;
            $publickey = $settings->s_p_k;
            $zero = '00';
            $amt = $request->amount.$zero;

            \Stripe\Stripe::setApiKey($secretkey);
            $paymentIntent  = \Stripe\PaymentIntent::create([
                'amount' => $amt,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
                'description' => 'Funding My Investment Account',
                'shipping' => [
                    'name' => Auth::user()->name,
                    'address' => [
                      'line1' => 'No Address',
                      'postal_code' => '000000',
                      'city' => 'No City',
                      'state' => 'CA',
                      'country' => 'US',
                    ],
                  ],
                'metadata' => ['integration_check' => 'accept_a_payment'],
            ]);
            
            $output = [
                'publishableKey' => $publickey,
                'clientSecret' => $paymentIntent->client_secret,
            ];

            //return $client_secret;
            $client_secret = $paymentIntent->client_secret;
        }
        
        
        //store payment info in session
        $request->session()->put('amount', $request['amount']);
        $request->session()->put('payment_mode', $methodname->name);
        $request->session()->put('intent', $client_secret);
        return redirect()->route('payment');
    }

    //payment route
    public function payment(Request $request){
        // if ($request->session()->exists('amount')) {
        //     return redirect()->route('deposits')->with('message', 'Please Select a payment method and amount');
        // }
        $methodname =  Wdmethod::where('name',$request->session()->get('payment_mode'))->first();
        return view('user.payment')
        ->with(array(
            'amount'=>$request->session()->get('amount'),
            'payment_mode'=>$methodname,
            // 'pay_type' => $request->session()->get('pay_type'),
            // 'plan_id' => $request->session()->get('plan_id'),
            'intent' => $request->session()->get('intent'),
            'title' => 'Make Payment',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    public function savestripepayment(Request $request)
    {
        $user=User::where('id',Auth::user()->id)->first();
        //save and confirm the deposit
        $dp=new Deposit();
        $dp->amount= $request->amount;
        $dp->payment_mode= "Stripe";
        $dp->status= 'Processed';
        $dp->proof= "Stripe";
        $dp->plan= 0;
        $dp->user= $user->id;
        $dp->save();
    
        //add funds to user's account
        User::where('id',$user->id)
        ->update([
            'account_bal' => $user->account_bal + $request->amount,
        ]);

        //get settings 
        $settings=Settings::where('id', '=', '1')->first();
        $earnings=$settings->referral_commission*$request->amount/100;

        if(!empty($user->ref_by)){
            //increment the user's referee total clients activated by 1
            Agent::where('agent',$user->ref_by)->increment('total_activated', 1);
            Agent::where('agent',$user->ref_by)->increment('earnings', $earnings);
            
            //add earnings to agent balance
            //get agent
            $agent=User::where('id',$user->ref_by)->first();
            User::where('id',$user->ref_by)
            ->update([
                'account_bal' => $agent->account_bal + $earnings,
                'ref_bonus' => $agent->ref_bonus + $earnings,
            ]);
            
            //credit commission to ancestors
            $deposit_amount = $request->amount;
            $array=User::all();
            $parent=$user->id;
            $this->getAncestors($array, $deposit_amount, $parent);
            
            Tp_Transaction::create([
                'user' => $user->ref_by,
                'plan' => "Credit",
                'amount'=>$earnings,
                'type'=>"Ref_bonus",
            ]);
        }
      
        //send notification
        $settings=Settings::where('id', '=', '1')->first();
        //send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you that you have successfully deposited $settings->currency$request->amount.";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject ="Successful Deposit";
            
        Mail::bcc($user->email)->send(new NewNotification($objDemo));

        // Kill the session variables
        $request->session()->forget('payment_mode');
        $request->session()->forget('amount');
        $request->session()->forget('intent');

        return response()->json(['success'=>'Payment Completed, redirecting']);
    }

    //Save deposit requests
    public function savedeposit(Request $request){

        //dd($request['paymethd_method']);
        $this->validate($request, [
            'proof' => 'image|mimes:jpg,jpeg,png|max:1000',
        ]);
        
        $settings = Settings::where('id', '=', '1')->first();
        $strtxt = $this->RandomStringGenerator(6);

        if($request->hasfile('proof'))
        {
            $file = $request->file('proof');
            $name = $file->getClientOriginalName();

            $ext = array_pop(explode(".", $name));
            $whitelist = array('pdf','doc','jpeg','jpg','png');
                
            if (in_array($ext, $whitelist)) {

                if ($settings->location  == "Email") {
                    $proofname = $strtxt . $name . time();
                    $data = [
                        'document' => $file
                    ];
                    Mail::to($settings->contact_email)->send(new UserUpload($data));
        
                }elseif ($settings->location  == "Local") {
                    $proofname = $strtxt . $name . time();
                    // save to storage/app/uploads as the new $filename
                    $path = $file->storeAs('public/photos', $proofname);
                }else {
                    $filePath = 'storage/' . $name;
                    Storage::disk('s3')->put($filePath, file_get_contents($file));
                }

            } else {
                return redirect()->back()
                    ->with('message', 'Unaccepted Image Uploaded');
            }

        }


        $dp=new Deposit();
        $dp->amount= $request['amount'];
        $dp->payment_mode= $request['paymethd_method'];
        $dp->status= 'Pending';
        $dp->proof = $proofname;
        $dp->user= Auth::user()->id;
        $dp->save();

        //get user
        $user=User::where('id',Auth::user()->id)->first();
    
        //send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you of a successfull Deposit of $settings->currency $request->amount, that just occured on your system. please login to process this deposit";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject ="Successful Deposit";
        Mail::bcc($settings->contact_email)->send(new NewNotification($objDemo));

        $objDemou = new \stdClass();
        $objDemou->message = "This is to inform you of a successfull deposit of $settings->currency $request->amount, that just occured on your account. please wait while we process this transaction, you will receive a notification of your transaction status.";
        $objDemou->sender = $settings->site_name;
        $objDemou->date = \Carbon\Carbon::Now();
        $objDemou->subject ="Successful Deposit";
        Mail::bcc($user->email)->send(new NewNotification($objDemou));

        // Kill the session variables
        $request->session()->forget('payment_mode');
        $request->session()->forget('amount');

        return redirect()->route('deposits')
        ->with('success', 'Account Fund Sucessful! Please wait for system to validate this transaction.');
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

    //Get uplines
    function getAncestors($array, $deposit_amount, $parent = 0, $level = 0) {
        $referedMembers = '';
        $parent=User::where('id',$parent)->first();

        foreach ($array as $entry) {
            if ($entry->id == $parent->ref_by) {
                //get settings 
                $settings=Settings::where('id', '=', '1')->first();
                        
                if($level == 1){
                    $earnings=$settings->referral_commission1*$deposit_amount/100;
                    //add earnings to ancestor balance
                    User::where('id',$entry->id)
                    ->update([
                        'account_bal' => $entry->account_bal + $earnings,
                        'ref_bonus' => $entry->ref_bonus + $earnings,
                    ]);
                
                    //create history
                    Tp_Transaction::create([
                        'user' => $entry->id,
                        'plan' => "Credit",
                        'amount'=>$earnings,
                        'type'=>"Ref_bonus",
                    ]);
                
                }elseif($level == 2){
                    $earnings=$settings->referral_commission2*$deposit_amount/100;
                    //add earnings to ancestor balance
                    User::where('id',$entry->id)
                    ->update([
                        'account_bal' => $entry->account_bal + $earnings,
                        'ref_bonus' => $entry->ref_bonus + $earnings,
                    ]);
                
                    //create history
                    Tp_Transaction::create([
                        'user' => $entry->id,
                        'plan' => "Credit",
                        'amount'=>$earnings,
                        'type'=>"Ref_bonus",
                    ]);
                
                }elseif($level == 3){
                    $earnings=$settings->referral_commission3*$deposit_amount/100;
                    //add earnings to ancestor balance
                    User::where('id',$entry->id)
                    ->update([
                        'account_bal' => $entry->account_bal + $earnings,
                        'ref_bonus' => $entry->ref_bonus + $earnings,
                    ]);
                
                    //create history
                    Tp_Transaction::create([
                        'user' => $entry->id,
                        'plan' => "Credit",
                        'amount'=>$earnings,
                        'type'=>"Ref_bonus",
                    ]);
                
                }elseif($level == 4){
                    $earnings=$settings->referral_commission4*$deposit_amount/100;
                    //add earnings to ancestor balance
                    User::where('id',$entry->id)
                    ->update([
                        'account_bal' => $entry->account_bal + $earnings,
                        'ref_bonus' => $entry->ref_bonus + $earnings,
                    ]);
                
                    //create history
                    Tp_Transaction::create([
                        'user' => $entry->id,
                        'plan' => "Credit",
                        'amount'=>$earnings,
                        'type'=>"Ref_bonus",
                    ]);
                
                }elseif($level == 5){
                    $earnings=$settings->referral_commission5*$deposit_amount/100;
                    //add earnings to ancestor balance
                    User::where('id',$entry->id)
                    ->update([
                        'account_bal' => $entry->account_bal + $earnings,
                        'ref_bonus' => $entry->ref_bonus + $earnings,
                    ]);
                
                    //create history
                    Tp_Transaction::create([
                        'user' => $entry->id,
                        'plan' => "Credit",
                        'amount'=>$earnings,
                        'type'=>"Ref_bonus",
                    ]);
            
                }
    
                if($level == 6){
                    break;
                }
                
                //$referedMembers .= '- ' . $entry->name . '- Level: '. $level. '- Commission: '.$earnings.'<br/>';
                $referedMembers .= $this->getAncestors($array, $deposit_amount, $entry->id, $level+1);
            
            }
        }
        return $referedMembers;
    }
    
}
