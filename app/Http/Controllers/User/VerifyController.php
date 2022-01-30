<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\NewNotification;
use App\Mail\UserUpload;
use App\Mail\KycUpload;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\CPTrait;
use Illuminate\Support\Facades\Auth;
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

class VerifyController extends Controller
{
    //
    public function verifyaccount(Request $request){

        $this->validate($request, [
            'idcard' => 'mimes:jpg,jpeg,png|max:4000|image',
            'passport' => 'mimes:jpg,jpeg,png|max:4000|image',
        ]);
        
        $settings = Settings::where('id', '=', '1')->first();
        $strtxt = $this->RandomStringGenerator(6);
  
        if($request->hasfile('idcard')){

            $document1 = $request->file('idcard');
            $filename1 = $document1->getClientOriginalName();
            $ext = array_pop(explode(".", $filename1));
            $whitelist = array('pdf','doc','jpeg','jpg','png');
  
            if (in_array($ext, $whitelist)) {
  
              if ($settings->location  == "Email") {
                $cardname = $strtxt . $filename1 . time();
  
               }elseif ($settings->location  == "Local") {
                  $cardname = $strtxt . $filename1 . time();
                  // save to storage/app/uploads as the new $filename
                  $path = $document1->storeAs('public/photos', $cardname);
               }else {
                  $cardname = $strtxt . $filename1 . time();
                  $filePath = 'storage/' . $cardname;
                  Storage::disk('s3')->put($filePath, file_get_contents($file));
               }
  
            } else {
              return redirect()->back()
              ->with('message', 'Unaccepted ID Card Image Uploaded, try renaming the image file');
            }
              
        } 
  
  
        if($request->hasfile('passport')){
            $document2 = $request->file('passport');
            $filename2 = $document2->getClientOriginalName();
  
            $ext = array_pop(explode(".", $filename2));
            $whitelist = array('pdf','doc','jpeg','jpg','png');
  
            if (in_array($ext, $whitelist)) {
  
              if ($settings->location  == "Email") {
                $passname = $strtxt . $filename2 . time();
               }elseif ($settings->location  == "Local") {
                  $passname = $strtxt . $filename2 . time();
                  // save to storage/app/uploads as the new $filename
                  $path = $document2->storeAs('public/photos', $passname);
               }else {
                  $passname = $strtxt . $filename2 . time();
                  $filePaths = 'storage/' . $passname;
                  Storage::disk('s3')->put($filePaths, file_get_contents($file));
               }
  
            } else {
              return redirect()->back()
              ->with('message', 'Unaccepted Passport Image Uploaded, try renaming the image file');
            }
        } 
  
        if ($settings->location  == "Email") {
            $data = [
              'document' => $document1,
              'document1' => $document2,
            ];
            Mail::to($settings->contact_email)->send(new KycUpload($data));
        }else {
            //send email notification
            $objDemo = new \stdClass();
            $objDemo->message = "This is to inform you of a successfull KYC Document Upload that just occured on your system., please login to review documents.";
            $objDemo->sender = $settings->site_name;
            $objDemo->date = \Carbon\Carbon::Now();
            $objDemo->subject ="KYC Verification";
            Mail::bcc($settings->contact_email)->send(new NewNotification($objDemo));
        }
  
  
        //update user
        User::where('id',Auth::user()->id)
        ->update([
            'id_card' => $cardname,
            'passport' => $passname,
            'account_verify' => 'Under review',
        ]);
  
        return redirect()->back()
            ->with('success', 'Action Sucessful! Please wait for system to validate your submission.');
    }


    // for front end content management
    function RandomStringGenerator($n) 
    { 
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
}
