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

class SubscriptionSettings extends Controller
{
     // Return view
     public function index(Request $request){
        return view('admin.Settings.SubscriptionSettings.show',[
            'title'=>'Subscription settings',
            'settings' => Settings::where('id', '=', '1')->first(),
        ]);
    }

    
    //Update Subscription Fees
    public function updatesubfee(Request $request){
        
        Settings::where('id', $request['id'])
        ->update([
            'monthlyfee'=>$request['monthlyfee'],
            'quarterlyfee'=>$request['quaterlyfee'],
            'yearlyfee'=>$request['yearlyfee'],
            'subscription_service'=>$request['subscription_service'],
        ]);
        return response()->json(['status' => 200, 'success' => 'Subscription Settings Saved successfully']);
    }
}
