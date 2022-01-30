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
use App\Models\Activity;
use App\Models\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CPTrait;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class SubscriptionController extends Controller
{
    public function confirmsub($id){
        //get the sub details
        $sub = Mt4Details::where('id',$id)->first();
        //get user
        $user = User::where('id',$sub->client_id)->first();
    
        if($sub->duration == 'Monthly'){
          $end_at = \Carbon\Carbon::now()->addMonths(1)->toDateTimeString();
        }elseif($sub->duration == 'Quaterly'){
          $end_at = \Carbon\Carbon::now()->addMonths(4)->toDateTimeString();
        }elseif($sub->duration == 'Yearly'){
          $end_at = \Carbon\Carbon::now()->addYears(1)->toDateTimeString();
        }
        
        Mt4Details::where('id',$id)->update([
          'start_date' => \Carbon\Carbon::now(),
          'end_date' => $end_at,
          'status' => "Active",
        ]);
    
        $settings = Settings::where('id', '=', '1')->first();
        //notify the client via email
        $objDemo = new \stdClass();
        $objDemo->message = "$user->name, This is to inform you that your trading account management
        request has been reviewed and processed. Thank you for trusting $settings->site_name";
        $objDemo->sender = "$settings->site_name";
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "Managed Account Started!";
            
        Mail::bcc($user->email)->send(new NewNotification($objDemo));
    
        return redirect()->back()->with('success', 'Subscription Sucessfully started!');
    }
    
    public function delsub($id){
        Mt4Details::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Subscription Sucessfully Deleted');
    }
}
