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

class AppSettingsController extends Controller
{
    
    // Return view
    public function appsettingshow(Request $request){
        $live_timezones = timezone_identifiers_list();
        include'currencies.php';
        return view('admin.Settings.AppSettings.show',[
            'title'=>'Website information settings',
            'timezones' => $live_timezones,
            'currencies' => $currencies,
            //'timezone' => config('mail.mailers.smtp.port'),
            'settings' => Settings::where('id', '=', '1')->first(),
        ]);
    }

    // for front end content management
  function RandomStringGenerator($n){ 
        $generated_string = ""; 
        $domain = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"; 
        $len = strlen($domain); 
        for ($i = 0; $i < $n; $i++) 
        { 
            $index = rand(0, $len - 1); 
            $generated_string = $generated_string . $domain[$index]; 
        } 
        // Return the random generated string 
        return $generated_string; 
    } 


    // update wensite information
    public function updatewebinfo(Request $request){
    
        $this->validate($request, [
          'logo' => 'mimes:jpg,jpeg,png|max:500|image',
          'favicon' => 'mimes:jpg,jpeg,png|max:500|image',
        ]);
  
        $settings = Settings::where('id', '=', '1')->first();
        $strtxt = $this->RandomStringGenerator(6);
  
        if($request->hasfile('logo'))
           {
            $file = $request->file('logo');
            $logoname = $strtxt . $file->getClientOriginalName() . time();
            $path = $file->storeAs('public/photos', $logoname);
        } else {
            $logoname = $settings->logo;
        }
  
        if($request->hasfile('favicon'))
           {
            $favfile = $request->file('favicon');
            $favname = $strtxt . $favfile->getClientOriginalName() . time();
            // save to storage/app/uploads as the new $filename
            $pathfav = $favfile->storeAs('public/photos', $favname);
        }else {
          $favname = $settings->favicon;
        }

        Settings::where('id', '1')
        ->update([
            'newupdate'=>$request['update'],
            'site_name'=>$request['site_name'],
            'description'=>$request['description'],
            'keywords'=>$request['keywords'],
            'timezone'=> $request['timezone'],
            'site_title'=>$request['site_title'],
            'logo'=>$logoname,
            'favicon'=>$favname,
            'tawk_to'=>strip_tags($request['tawk_to']),
            'site_address'=>$request['site_address'],
        ]);

        //return response()->json(['status' => 200, 'success' => 'Settings Saved successfully']);
       return redirect()->back()->with('success', 'Settings Saved successfully');
    }


    
    public function updatepreference(Request $request){

        Settings::where('id', $request['id'])
            ->update([
            'contact_email'=>$request['contact_email'],
            'currency'=>$request['currency'],
            's_currency'=>$request['s_currency'],
            'weekend_trade'=>$request['weekend_trade'],
            'location'=> $request['location'],
            'trade_mode'=>$request['trade_mode'],
            'enable_verification'=>$request['enail_verify'],
            'google_translate'=>$request['googlet'],
            'enable_kyc' =>$request['enable_kyc'],
            'captcha' => $request['captcha'],
            'enable_with' => $request['withdraw'],
            'enable_social_login' => $request['social'],
            'enable_annoc'=>$request['annouc'],
        ]);
        return response()->json(['status' => 200, 'success' => 'Settings Saved successfully']);
            //return redirect()->back()->with('message', 'Action Sucessful');
    }

    // Update email preference
    public function updateemail(Request $request){
        Settings::where('id',' 1')
        ->update([
            'mail_server'=>$request['server'],
            'emailfrom'=>$request['emailfrom'],
            'emailfromname'=>$request['emailfromname'],
            'smtp_host'=>$request['smtp_host'],
            'smtp_port'=>$request['smtp_port'],
            'smtp_encrypt'=> $request['smtp_encrypt'],
            'smtp_user'=>$request['smtp_user'],
            'smtp_password'=>$request['smtp_password'],
            'google_id'=> $request['google_id'],
            'google_secret'=>$request['google_secret'],
            'google_redirect'=>$request['google_redirect'],
            'capt_secret'=>$request['capt_secret'],
            'capt_sitekey'=>$request['capt_sitekey'],
        ]);
        return response()->json(['status' => 200, 'success' => 'Settings Saved successfully']);
        //return redirect()->back()->with('message', 'Action Sucessful');
    }










    
}
