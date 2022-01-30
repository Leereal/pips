<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CPTrait;
use App\Mail\NewNotification;
use App\Mail\NewRoi;
use App\Mail\endplan;
use Illuminate\Support\Facades\Mail;

class AutoTopup extends Command
{
    use CPTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auto:topup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is used to credit ROI to users on specific time and dates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //calculate top up earnings and
        //auto increment earnings after the increment time
          
        //get user plans
        $plans=User_plans::where('active','yes')->get();
        foreach($plans as $plan){
            //get plan
            $dplan=Plans::where('id',$plan->plan)->first();
            //get user
            $user=User::where('id',$plan->user)->first();
            //get settings
            $settings=Settings::where('id','1')->first();
              
              //check if trade mode is on
            if($settings->trade_mode=='on'){
                  //get plan expected return
                  $to_receive=$dplan->expected_return;
                  //know the plan increment interval
                  if($dplan->increment_interval=="Monthly"){
                  $togrow=\Carbon\Carbon::now()->subMonths(1)->toDateTimeString();
                  $dtme = $plan->last_growth->diffInMonths();
                }elseif($dplan->increment_interval=="Weekly"){
                  $togrow=\Carbon\Carbon::now()->subWeeks(1)->toDateTimeString();
                  $dtme = $plan->last_growth->diffInWeeks();
                }elseif($dplan->increment_interval=="Daily"){
                  $togrow=\Carbon\Carbon::now()->subDays(1)->toDateTimeString();
                  $dtme = $plan->last_growth->diffInDays();
                }elseif($dplan->increment_interval=="Hourly"){
                  $togrow=\Carbon\Carbon::now()->subHours(1)->toDateTimeString();
                  $dtme = $plan->last_growth->diffInHours();
                }
                
                //expiration
                if($plan->inv_duration=="One week"){
                  $condition=$plan->activated_at->diffInDays() < 7 && $user->trade_mode=="on";
                  $condition2=$plan->activated_at->diffInDays() >= 7;
                }elseif($plan->inv_duration=="One month"){
                  $condition=$plan->activated_at->diffInDays() < 30 && $user->trade_mode=="on";
                  $condition2=$plan->activated_at->diffInDays() >= 30;
                }elseif($plan->inv_duration=="Three months"){
                  $condition=$plan->activated_at->diffInDays() < 90 && $user->trade_mode=="on";
                  $condition2=$plan->activated_at->diffInDays() >= 90;
                }elseif($plan->inv_duration=="Six months"){
                  $condition=$plan->activated_at->diffInDays() < 180 && $user->trade_mode=="on";
                  $condition2=$plan->activated_at->diffInDays() >= 180;
                }
                elseif($plan->inv_duration=="One year"){
                  $condition=$plan->activated_at->diffInDays() < 360 && $user->trade_mode=="on";
                  $condition2=$plan->activated_at->diffInDays() >= 360;
                }
                
                 //calculate increment
                if($dplan->increment_type=="Percentage"){
                  $increment=($plan->amount*$dplan->increment_amount)/100;
                }else{
                  $increment=$dplan->increment_amount;
                }
                
                if($condition){
    
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
        //do auto confirm payments
        return $this->cpaywithcp();
    }
}
