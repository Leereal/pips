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
use App\Models\Mt4Dtails;
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
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //Updating Profile Route
    public function updateprofile(Request $request){
        User::where('id', Auth::user()->id)
        ->update([
            'name'=> $request->name,
            'dob'=> $request->dob,
            'phone'=> $request->phone,
            'address'=> $request->address,
        ]);
        return response()->json(['status'=>200, 'success'=>'Profile Information Updated Sucessfully!']);
        // return redirect()->back()
        // ->with('success', 'Profile Information Updated Sucessfully!');
    }

    //update account and contact info
    public function updateacct(Request $request){
        User::where('id', Auth::user()->id)
        ->update([
            'bank_name' => $request['bank_name'],
            'account_name' =>$request['account_name'], 
            'account_number' =>$request['account_no'], 
            'swift_code' =>$request['swiftcode'], 
            'btc_address' =>$request['btc_address'], 
            'eth_address' =>$request['eth_address'], 
            'ltc_address' =>$request['ltc_address'], 
        ]);
        return response()->json(['status'=>200, 'success'=>'Withdrawal Info updated Sucessfully']);
    }

    //Update Password
    public function updatepass(Request $request){

        $request->validate([
          'current_password' => 'required',
          'password' => 'required|string|min:6|confirmed',
          'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('message', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('success', 'Current password does not match!');
    } 

    // Update email preference logic
    public function updateemail(Request $request){

        $user = Auth::user();
        $user->sendotpemail = $request->otpsend;
        $user->sendroiemail = $request->roiemail;
        // $user->sendpromoemail = $request->promotoionl;
        $user->sendinvplanemail = $request->invplanemail;
        $user->save();
        return response()->json(['status'=>200, 'success'=>'Email Preference updated']);
    } 

















}
