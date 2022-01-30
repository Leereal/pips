<?php

namespace App\Http\Controllers\Admin\Settings;

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

class ReferralSettings extends Controller
{
    // Return view
    public function referralview(Request $request){
        return view('admin.Settings.ReferralSettings.show',[
            'title'=>'Referral settings',
            'settings' => Settings::where('id', '=', '1')->first(),
        ]);
    }

    public function updaterefbonus(Request $request){
        Settings::where('id', $request['id'])
        ->update([
            'referral_commission'=>$request['ref_commission'],
            'referral_commission1'=>$request['ref_commission1'],
            'referral_commission2'=>$request['ref_commission2'],
            'referral_commission3'=>$request['ref_commission3'],
            'referral_commission4'=>$request['ref_commission4'],
            'referral_commission5'=>$request['ref_commission5'],
            'signup_bonus'=>$request['signup_bonus'],
        ]);
        return response()->json(['status' => 200, 'success' => 'Bonus Settings Saved successfully']);
    }






}
