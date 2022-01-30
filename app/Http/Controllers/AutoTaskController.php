<?php

namespace App\Http\Controllers;

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
use App\Models\Activity;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CPTrait;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AutoTaskController extends Controller
{
    use CPTrait;
    /*
        Automatic toup
        calculate top up earnings and
        auto increment earnings after the increment time
    */

    public function autotopup(){
        
        //get user plans
        $plans=User_plans::where('active','yes')->get();
        //get settings
        $settings=Settings::where('id','1')->first();

        foreach($plans as $plan){
            //get plan
            $dplan=Plans::where('id',$plan->plan)->first();
            //get user
            $user=User::where('id',$plan->user)->first();
            
            //check if trade mode is on
            if($settings->trade_mode=='on'){
                //get plan expected return
                $to_receive=$dplan->expected_return;

                //know the plan increment interval
                if($dplan->increment_interval=="Monthly"){
                    $togrow= Carbon::now()->subMonths(1)->toDateTimeString();
                    $dtme = $plan->last_growth->diffInMonths();
                }elseif($dplan->increment_interval=="Weekly"){
                    $togrow= Carbon::now()->subWeeks(1)->toDateTimeString();
                    $dtme = $plan->last_growth->diffInWeeks();
                }elseif($dplan->increment_interval=="Daily"){
                    $togrow= Carbon::now()->subDays(1)->toDateTimeString();
                    $dtme = $plan->last_growth->diffInDays();
                }elseif($dplan->increment_interval=="Hourly"){
                    $togrow= Carbon::now()->subHours(1)->toDateTimeString();
                    $dtme = $plan->last_growth->diffInHours();
                }else {
                    $togrow= Carbon::now()->subMinutes(30)->toDateTimeString();
                    $dtme = $plan->last_growth->diffInMinutes();
                }
               
                //expiration
                $expiration = explode(" ", $plan->inv_duration);
                $digit = $expiration[0];
                $frame = $expiration[1];
                $toexpire =  "diffIn". $frame;
                //return $toexpire;
                
                $condition=$plan->activated_at->$toexpire() < $digit && $user->trade_mode=="on";
                $condition2=$plan->activated_at->$toexpire() >= $digit;

               
                //calculate increment
                if($dplan->increment_type=="Percentage"){
                    $increment=($plan->amount*$dplan->increment_amount)/100;
                }else{
                    $increment=$dplan->increment_amount;
                }
               
               if($condition){
                    if ($settings->weekend_trade =='true') {
                        if($plan->last_growth <= $togrow){
                            $amt = intval($dtme/1);
                            User::where('id', $plan->user)
                            ->update([
                                'roi' => $user->roi + $increment,
                                'account_bal' => $user->account_bal + $increment,
                            ]);
                        
                            //save to transactions history
                            $th = new Tp_Transaction();
                            $th->plan = $dplan->name;
                            $th->user = $user->id;
                            $th->amount = $increment;
                            $th->type = "ROI";
                            $th->save();
                        
                            User_plans::where('id', $plan->id)
                                ->update([
                                'last_growth' => Carbon::now()
                            ]);
                            
                            if ($user->sendroiemail == 'Yes') {
                                //send email notification
                                $objDemo = new \stdClass();
                                $objDemo->receiver_email = $user->email;
                                $objDemo->receiver_plan = $dplan->name;
                                $objDemo->received_amount = "$settings->currency$increment";
                                $objDemo->sender = $settings->site_name;
                                $objDemo->receiver_name = $user->name;
                                $objDemo->date = Carbon::Now();
                                Mail::to($user->email)->send(new NewRoi($objDemo));  
                            }
                        
                        }

                    }else {

                        $dt = Carbon::Now();
                        if ($dt->isWeekday()) {

                            if($plan->last_growth <= $togrow){
                                $amt = intval($dtme/1);
                            
                                User::where('id', $plan->user)
                                ->update([
                                    'roi' => $user->roi + $increment,
                                    'account_bal' => $user->account_bal + $increment,
                                ]);
                          
                                //save to transactions history
                                $th = new Tp_Transaction();
                                $th->plan = $dplan->name;
                                $th->user = $user->id;
                                $th->amount = $increment;
                                $th->type = "ROI";
                                $th->save();
                          
                                User_plans::where('id', $plan->id)
                                    ->update([
                                    'last_growth' => \Carbon\Carbon::now()
                                ]);
                          
                                if ($user->sendroiemail == 'Yes') {
                                     //send email notification
                                    $objDemo = new \stdClass();
                                    $objDemo->receiver_email = $user->email;
                                    $objDemo->receiver_plan = $dplan->name;
                                    $objDemo->received_amount = "$settings->currency$increment";
                                    $objDemo->sender = $settings->site_name;
                                    $objDemo->receiver_name = $user->name;
                                    $objDemo->date = \Carbon\Carbon::Now();
                                
                                    Mail::to($user->email)->send(new NewRoi($objDemo)); 
                                }
                            }
                        } elseif ($dt->isWeekend()) {
                      
                        } else{

                        }

                    }
                  
                }
               
               //release capital
                if($condition2){
                    User::where('id', $plan->user)
                        ->update([
                        'account_bal' => $user->account_bal + $plan->amount,
                    ]);
                   
                   //plan expired
                    User_plans::where('id', $plan->id)
                    ->update([
                        'active' => "expired",
                    ]);
                   
                    //save to transactions history
                    $th = new Tp_transaction();
                    
                    $th->plan = $dplan->name;
                    $th->user = $plan->user;
                    $th->amount = $plan->amount;
                    $th->type = "Investment capital";
                    $th->save();
                   
                    if ($user->sendinvplanemail == "Yes") {
                        //send email notification
                        $objDemo = new \stdClass();
                        $objDemo->receiver_email = $user->email;
                        $objDemo->receiver_plan = $dplan->name;
                        $objDemo->received_amount = "$settings->currency$plan->amount";
                        $objDemo->sender = $settings->site_name;
                        $objDemo->receiver_name = $user->name;
                        $objDemo->date = \Carbon\Carbon::Now();
                        $objDemo->subject = "Investment plan closed";
                        Mail::to($user->email)->send(new endplan($objDemo));
                    }
                  
                }
                
            }
              
        }
        //do auto confirm payments
        return $this->cpaywithcp();
    }

}
