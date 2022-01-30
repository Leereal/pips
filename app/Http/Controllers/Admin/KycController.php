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

class KycController extends Controller
{
    
   //accept KYC route
   public function acceptkyc($id)
    {
        $user = User::where('id', $id)->first();
        
        //update user
        User::where('id',$id)
        ->update([
            'account_verify' => 'Verified',
        ]);

        //send notification
        $settings=Settings::where('id', '=', '1')->first();
        //send email notification
        $objDemo = new \stdClass();
        $objDemo->message = "This is to inform you that you that your account have been successfully verified, you can now procced to withdraw your funds.";
        $objDemo->sender = $settings->site_name;
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject ="Account Verification Status";
        Mail::bcc($user->email)->send(new NewNotification($objDemo));
    
        return redirect()->back()->with('message', 'Action Sucessful!');
    }
   
    //accept KYC route
    public function rejectkyc($id){
        //update user
        User::where('id',$id)
        ->update([
            'account_verify' => 'Rejected',
            'id_card'=> NULL,
            'passport' => NULL,
        ]);
    
        return redirect()->back()->with('message', 'Action Sucessful!');
    }
 
}
