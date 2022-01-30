<?php

namespace App\Http\Controllers\Admin;

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
use App\Models\Mt4Details;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Models\Tp_Transaction;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CPTrait;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class ManageDepositController extends Controller
{
    //Delete deposit
    public function deldeposit($id){
        Deposit::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Deposit history has been deleted!');
    }

    //process deposits
    public function pdeposit($id){
    
        //confirm the users plan
        $deposit=Deposit::where('id',$id)->first();
        $user=User::where('id',$deposit->user)->first();

        if($deposit->user==$user->id){
            //add funds to user's account
            User::where('id',$user->id)
            ->update([
                'account_bal' => $user->account_bal + $deposit->amount,
            ]);
            
            //get settings 
            $settings=Settings::where('id', '=', '1')->first();
            $earnings=$settings->referral_commission*$deposit->amount/100;

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
        
                //create history
                Tp_Transaction::create([
                    'user' => $user->ref_by,
                    'plan' => "Credit",
                    'amount'=>$earnings,
                    'type'=>"Ref_bonus",
                ]);
        
                //credit commission to ancestors
                $deposit_amount = $deposit->amount;
                $array=User::all();
                $parent=$user->id;
                $this->getAncestors($array, $deposit_amount, $parent);
            }

            //send email notification
            $objDemo = new \stdClass();
            $objDemo->message = "$user->name, This is to inform you that your deposit of $settings->currency$deposit->amount has been received and confirmed.";
            $objDemo->sender = "$settings->site_name";
            $objDemo->date = \Carbon\Carbon::Now();
            $objDemo->subject = "Deposit processed!";
            
            Mail::bcc($user->email)->send(new NewNotification($objDemo));
    
        }

        //update deposits
        Deposit::where('id',$id)
            ->update([
            'status' => 'Processed',
        ]);
        return redirect()->back()->with('success', 'Action Sucessful!');
    }

    public function viewdepositimage($id){
        return view('admin.Deposits.depositimg',[
            'deposit' => Deposit::where('id',$id)->first(),
            'title'=>'View Deposit Screenshot',
            'settings' => Settings::where('id', '=', '1')->first(),
        ]);
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
  
    // for front end content management
    function RandomStringGenerator($n){ 
        $generated_string = ""; 
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
        $len = strlen($domain); 
        for ($i = 0; $i < $n; $i++){ 
            $index = rand(0, $len - 1); 
            $generated_string = $generated_string . $domain[$index]; 
        } 
        // Return the random generated string 
        return $generated_string; 
    } 
   
}
