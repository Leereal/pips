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

class ManageWithdrawalController extends Controller
{
    //process withdrawals
    public function pwithdrawal(Request $request){
  
        $withdrawal=Withdrawal::where('id',$request->id)->first();
        $user=User::where('id',$withdrawal->user)->first();

        // if($withdrawal->user==$user->id){
            
        //     User::where('id',$user->id)
        //     ->update([
        //         'account_bal' => $user->account_bal-$withdrawal->to_deduct,
        //     ]);
        // }

        if ($request->action == "Paid") {
            Withdrawal::where('id',$request->id)
            ->update([
                'status' => 'Processed',
            ]);

            $settings=Settings::where('id', '=', '1')->first();
            //send email notification
            $objDemo = new \stdClass();
            $objDemo->message = "This is to inform you that your withdrawal request of $settings->currency$withdrawal->amount have approved and funds have been sent to your selected account";
            $objDemo->sender = $settings->site_name;
            $objDemo->subject ="Successful Withdrawal";
            $objDemo->date = \Carbon\Carbon::Now();
            Mail::bcc($user->email)->send(new NewNotification($objDemo));
        }else {

            if($withdrawal->user==$user->id){
                User::where('id',$user->id)
                ->update([
                    'account_bal' => $user->account_bal+$withdrawal->to_deduct,
                ]); 
                Withdrawal::where('id',$request->id)->delete();

                if ($request->emailsend == "true") {
                    $settings=Settings::where('id', '=', '1')->first();
                    //send email notification
                    $objDemos = new \stdClass();
                    $objDemos->message = "$request->reason";
                    $objDemos->sender = $settings->site_name;
                    $objDemos->subject =$request->subject;
                    $objDemos->date = \Carbon\Carbon::Now();
                        
                    Mail::to($user->email)->send(new NewNotification($objDemos));
                }
                
              }
            
        }

        return redirect()->route('mwithdrawals')->with('success', 'Action Sucessful!');
    }

    
    public function processwithdraw($id){
         $with = Withdrawal::where('id',$id)->first();
         $method = Wdmethod::where('name', $with->payment_mode)->first();
         $user = User::where('id', $with->user)->first();
        return view('admin.Withdrawals.pwithrdawal',[
            'withdrawal' => $with,
            'method' => $method,
            'user' => $user,
            'title'=>'Process withdrawal Request',
            'settings' => Settings::where('id', '=', '1')->first(),
        ]);
    }




}
