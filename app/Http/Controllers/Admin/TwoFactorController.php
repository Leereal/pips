<?php

namespace App\Http\Controllers\Admin;

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

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Traits\CPTrait;

use App\Mail\NewNotification;
use App\Mail\Twofa;
use App\Mail\newroi;
use App\Mail\endplan;
use Illuminate\Support\Facades\Mail;

class TwoFactorController extends Controller
{
 
       public function verifyTwoFactor(Request $request)
    {
        $request->validate([
            'twofa' => 'required',
        ]);

        // $code = Auth::guard('admin')->user()->token_2fa;
        //  dd($code);

        if($request->twofa == Auth(admin)->user()->token_2fa){  

            $user = Auth('admin')->User();

            Admin::where('id', $user->id)
            ->update([
                'token_2fa_expiry' => \Carbon\Carbon::now()->addMinutes(config('session.lifetime')),
                'pass_2fa' => 'true',
            ]);   

            $settings = Settings::where('id','1')->first();
            
            //send email notification
            $objDemo = new \stdClass();
            $objDemo->message = "This is a successful login notification on your admin account. If this was not you, kindly take action by changing your account password.";
            $objDemo->sender = $settings->site_name;
            $objDemo->date = \Carbon\Carbon::Now();
            $objDemo->subject ="Successful login";
                
            Mail::bcc($user->email)->send(new NewNotification($objDemo));
            $request->session()->forget('twofa');
            return redirect('/admin/dashboard');
        } else {
            return redirect()->back()->with('message', 'Incorrect code.');
        }
    }

    public function showTwoFactorForm()
    {
        return view('auth.two_factor',[
            'title'=>'Admin Two Factor Authentication',
            'settings' => Settings::where('id', '=', '1')->first(),
        ]);
    } 

}

