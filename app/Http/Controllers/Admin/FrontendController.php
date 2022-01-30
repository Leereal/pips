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
use App\Models\TermsPrivacy;
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

class FrontendController extends Controller
{
    public function savefaq(Request $request){
        $String = $this->RandomStringGenerator(6);
        $faq=new Faq();
        $faq->ref_key = $String;
        $faq->question= $request['question'];
        $faq->answer= $request['answer'];
        $faq->save();
        return redirect()->back()->with('success', 'Faq Added Sucessfully!');
      }
  
    public function savetestimony(Request $request){
        $String = $this->RandomStringGenerator(6);
        $tes=new Testimony();
        $tes->name= $request['testifier'];
        $tes->ref_key = $String;
        $tes->position= $request['position'];
        $tes->what_is_said= $request['said'];
        $tes->picture= $request['picture'];
        $tes->save();
        return redirect()->back()->with('success', 'Testimony Added Sucessfully!');
    }
  
  
    public function saveimg(Request $request){
        $settings = Settings::where('id', '=', '1')->first();
        $String = $this->RandomStringGenerator(6);
  
        $this->validate($request, [
          'image' => 'required|mimes:jpg,jpeg,png|image',
        ]);
        
        if($request->hasfile('image'))
        {
            $filef = $request->file('image');
            $namef = $String . $filef->getClientOriginalName();
            // save to storage/app/uploads as the new $filename
            $path = $filef->storeAs('public/photos', $namef);
        }
  
        $img=new Images();
        $img->title= $request['img_title'];
        $img->ref_key = $String;
        $img->description= $request['img_desc'];
        $img->img_path= $namef;
        $img->save();
        return redirect()->back()->with('success', 'Image Added Sucessfully!');
    }
  
  
    public function savecontents(Request $request){
        $String = $this->RandomStringGenerator(6);
        $cont=new Content();
        $cont->title= $request['title'];
        $cont->ref_key = $String;
        $cont->description= $request['content'];
        $cont->save();
        return redirect()->back()->with('success', 'Contents Added Sucessfully!');
    }
  
    public function updatefaq(Request $request){
        Faq::where('id', $request['id'])
        ->update([
            'question' => $request['question'],
            'answer' => $request['answer'],
        ]);
        return redirect()->back()->with('success', 'Faq Update Sucessful!');
    }
  
    public function updatetestimony(Request $request){
        Testimony::where('id', $request['id'])
        ->update([
            'name'=>$request['testifier'],
            'position'=> $request['position'],
            'what_is_said'=> $request['said'],
            'picture'=> $request['picture'],
        ]);
        return redirect()->back()->with('success', 'Testimony Update Sucessful!');
    }
  
    public function updatecontents(Request $request){
        Content::where('id', $request['id'])
        ->update([
            'title'=> $request['title'],
            'description'=> $request['content'],
        ]);
        return redirect()->back()->with('success', 'Content Update Sucessful!');
    }
  
    public function updateimg(Request $request){
        $settings = Settings::where('id', '=', '1')->first();
        $this->validate($request, [
            'image' => 'mimes:jpg,jpeg,png|image',
        ]);
    
        $imgs = Images::where('id', '=', $request->id)->first();
        $String = $this->RandomStringGenerator(6);

        if(empty($request->file('image'))){
            $filePathf=$imgs->img_path;
        }else{
            if($request->hasfile('image')){
                $filef = $request->file('image');
                $namef = $String . $filef->getClientOriginalName() . time();
                // save to storage/app/uploads as the new $filename
                $path = $filef->storeAs('public/photos', $namef);
            }
        }

        Images::where('id', $request['id'])
        ->update([
            'title'=> $request['img_title'],
            'description'=> $request['img_desc'],
            'img_path'=> $namef,
        ]);
        return redirect()->back()->with('success', 'Image Updated Sucessfully!');
    }
  
    public function delfaq($id){
        Faq::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Faq Sucessfully Deleted');
    }
  
    public function deltest($id){
        Testimony::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Testimonial Sucessfully Deleted');
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

    public function termspolicy(){
        
        return view('admin.Settings.FrontendSettings.privacy', [
            'title' => "Privacy Policy",
            'terms' => TermsPrivacy::find(1),
        ]);
    }

    public function savetermspolicy(Request $request){
        $terms = TermsPrivacy::find(1);

        // $editor_content= $request->termsprivacy;
        // $dom = new \DomDocument('1.0', 'UTF-8');
        // libxml_use_internal_errors(true);
        // $dom->loadHtml($editor_content);
        // $editor_content_save= utf8_decode($dom->saveHTML($dom));

        // TermsPrivacy::where('id',1)->update([
        //     'description' => $editor_content_save,
        //     'useterms' => $request->terms
        // ]);

        $terms->description = $request->termsprivacy;
        $terms->useterms = $request->terms;
        $terms->save();
        return redirect()->back()
        ->with('success', 'Terms and Privacy Policy Updated Successfully!');
    }










}
