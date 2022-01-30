<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\Validator;
use App\Models\Mt4Details;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Models\TermsPrivacy;
use App\Models\Tp_Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index(){
        $settings=Settings::where('id', '=', '1')->first();
        //sum total deposited
        $total_deposits = DB::table('deposits')->select(DB::raw("SUM(amount) as total"))->
        where('status','Processed')->get();
        
        //sum total withdrawals
        $total_withdrawals = DB::table('withdrawals')->select(DB::raw("SUM(amount) as total"))->
        where('status','Processed')->get();
        
      
        return view('home.index')->with(array(
            'settings' => $settings,
            'total_users' => User::count(),
            'plans' => Plans::all(),
            'total_deposits' => $total_deposits,
            'total_withdrawals' => $total_withdrawals,
            'faqs'=> Faq::orderby('id', 'desc')->get(),
            'test'=> Testimony::orderby('id', 'desc')->get(),
            'withdrawals' => Withdrawal::orderby('id','DESC')->take(7)->get(),
            'deposits' => Deposit::orderby('id','DESC')->take(7)->get(),
            'title' => $settings->site_title,
            'mplans' => Plans::where('type','Main')->get(),
            'pplans' => Plans::where('type','Promo')->get(),
        ));
    }

    //Licensing and registration route
    public function licensing(){
        
        return view('home.licensing')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
            'pplans' => Plans::where('type','Promo')->get(),
            'title' => 'Licensing, regulation and registration',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //Terms of service route
    public function terms(){
        
        return view('home.terms')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
            'title' => 'Terms of Service',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //Privacy policy route
    public function privacy(){
        $terms = TermsPrivacy::find(1);
        if ($terms->useterms == 'no') {
           return redirect()->back();
        }
        return view('home.privacy')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
            'title' => 'Privacy Policy',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //FAQ route
    public function faq(){
        
        return view('home.faq')
        ->with(array(
            'title' => 'FAQs',
            'faqs'=> Faq::orderby('id', 'desc')->get(),
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //about route
    public function about(){
        
        return view('home.about')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
                
            'title' => 'About',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    //Contact route
    public function contact(){
        return view('home.contact')
        ->with(array(
            'mplans' => Plans::where('type','Main')->get(),
                'pplans' => Plans::where('type','Promo')->get(),
                
            'title' => 'Contact',
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

  

    //send contact message to admin email
    public function sendcontact(Request $request){

        $settings=Settings::where('id','1')->first();
        $objDemo = new \stdClass();
        $objDemo->message = substr(wordwrap($request['message'],70),0,350);
        $objDemo->sender = "$settings->site_name";
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "$request->subject,  my email $request->email";
        Mail::bcc($settings->contact_email)->send(new NewNotification($objDemo));
        return redirect()->back()
        ->with('success', ' Your message was sent successfully!');
    }
}
