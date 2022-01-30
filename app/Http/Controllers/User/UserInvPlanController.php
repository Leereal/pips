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
use App\Models\Mt4Details;
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
use Carbon\Carbon;

class UserInvPlanController extends Controller
{
    
    //Buy and Investment Plan
    public function joinplan(Request $request){
        //get user
        $user=User::where('id',Auth::user()->id)->first();
        //get plan
        $plan=Plans::where('id',$request['id'])->first();
        
        if(isset($request['iamount']) && $request['iamount']>0){
            $plan_price=$request['iamount'];
        }else{
            $plan_price = $plan->price;
        }

        //check if the user account balance can buy this plan
        if($user->account_bal < $plan_price){
            //redirect to make deposit
            return redirect()->route('deposits')
          ->with('message', 'Your account is insufficient to purchase this plan. Please make a deposit.');
            
        }
      
        $expiration = explode(" ", $plan->expiration);
        $digit = $expiration[0];
        $frame = $expiration[1];
        $toexpire =  "add". $frame;
        $end_at = Carbon::now()->$toexpire($digit)->toDateTimeString();
       // return $end_at;


        //    Credit user the plan bonus
        if($plan->gift > 0){
            
            User::where('id', $user->id)
               ->update([
               'bonus'=>$user->bonus+$plan->gift,
               'account_bal'=>$user->account_bal + $plan->gift,
             ]);
   
            //create history
            Tp_Transaction::create([
                'user' => $user->id,
                'plan' => $plan->name,
                'amount'=>$plan->gift,
                'type'=>"Gift Bonus",
            ]);
        }

        //debit user
        User::where('id', $user->id)
        ->update([
            'account_bal'=>$user->account_bal-$plan_price,
        ]);

        //create history
        Tp_Transaction::create([
            'user' => $user->id,
            'plan' => $plan->name,
            'amount'=>$plan_price,
            'type'=>"Plan purchase",
        ]);

        //save user plan
        $userplanid = DB::table('user_plans')->insertGetId([
            'plan' => $plan->id,
            'user' => Auth::user()->id,
            'amount' => $plan_price,
            'active' => 'yes',
            'inv_duration'=>$request['duration'],
            'expire_date' => $end_at,
            'activated_at' => \Carbon\Carbon::now(),
            'last_growth' => \Carbon\Carbon::now(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        User::where('id',Auth::user()->id)
        ->update([
          'plan'=>$plan->id,
          'user_plan' => $userplanid,
          'entered_at'=>\Carbon\Carbon::now(),
        ]);

         
        return redirect()->back()
          ->with('success', 'You successfully purchased a plan and your plan is now active.');
    }
    
}
