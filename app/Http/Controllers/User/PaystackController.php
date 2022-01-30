<?php

namespace App\Http\Controllers\User;

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
use App\Models\Mt4dDtails;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use Illuminate\Support\Facades\DB;
use App\Models\Tp_Transaction;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Paystack;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

use App\Http\Traits\CPTrait;

class PaystackController extends Controller
{
    
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            //dd($e);
            return redirect()->back()->with('message', 'The paystack token has expired or the website currency is not supported. Please refresh the page and try again.');
        }        
    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        //dd($paymentDetails);
        $payamount = $paymentDetails['data']['amount'];
        $txn_ref = $paymentDetails['data']['reference'];
        $amount = $payamount/100;
        
        $user=User::where('id',Auth::user()->id)->first();
       
        //save and confirm the deposit
          $dp=new Deposit();
          $dp->amount= $amount;
          $dp->txn_id= $txn_ref;
          $dp->payment_mode= "Paystack";
          $dp->status= 'Processed';
          $dp->proof= "Paystack";
          $dp->plan= "0";
          $dp->user= $user->id;
          $dp->save();
      
        //add funds to user's account
        User::where('id',$user->id)
        ->update([
            'account_bal' => $user->account_bal + $amount,
        ]);

        //get settings 
        $settings=Settings::where('id', '=', '1')->first();
        $earnings=$settings->referral_commission*$amount/100;

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
          $deposit_amount = $amount;
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
        
         //send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "$user->name, This is to inform you that your deposit of $settings->currency$amount has been received and confirmed.";
        $objDemo->sender = "$settings->site_name";
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "Deposit processed!";
       Mail::bcc($user->email)->send(new NewNotification($objDemo));
        return redirect()->route('deposits')->with('success', 'Payment Successful');
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
