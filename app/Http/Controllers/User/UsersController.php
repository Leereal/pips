<?php

namespace App\Http\Controllers\User;

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
use App\Models\Mt4dDtails;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Models\Tp_Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{ 
    
  public function verifyemail(){
    return view('auth.verify-email', [
      'title' => 'Verify Your email address',
    ]);
  }
      public function addusername(Request $request){
          Validator::make($request, [
            'username'=> ['required', 'unique:users,username'],
          ])->validate();

          User::where('id', Auth::user()->id)->update([
            'username' => $request['username'],
          ]);
          return redirect()->route('dashboard');
      }

      //send contact message to admin email
    public function sendcontact(Request $request){

        $settings=Settings::where('id','1')->first();
        
        $objDemo = new \stdClass();
        $objDemo->message = substr(wordwrap($request['message'],70),0,350);
        $objDemo->sender = "$settings->site_name";
        $objDemo->date = \Carbon\Carbon::Now();
        $objDemo->subject = "Inquiry from $request->name with email $request->email";
          
        Mail::bcc($settings->contact_email)->send(new NewNotification($objDemo));

        return redirect()->back()
        ->with('success', ' Your message was sent successfully!');
    
    }
  

      //Get downlines level
      public function getdownlines($array, $parent = 0, $level = 0) {
          $referedMembers = '';
          foreach ($array as $entry) {
              if ($entry->ref_by == $parent) {
            
            if($level==0){
              $levelQuote= "Direct referral";
            }else{
              $levelQuote= "Indirect referral level $level";
            }

              $referedMembers .= "
              <tr>
              <td> $entry->name $entry->l_name </td> 
              <td> $levelQuote </td>".
              '<td>'. $this->getUserParent($entry->id).'</td>'.
              '<td>'. $this->getUserStatus($entry->id).'</td>
              <td>'. $this->getUserRegDate($entry->id).'</td>
              </tr>';

              $referedMembers .= $this->getdownlines($array, $entry->id, $level+1);
          }

          if($level == 6){
          break;
          }
      }
      return $referedMembers;
    }

    //Get user Parent
    function getUserParent($id) {
      $user = User::where('id',$id)->first();
      $parent = User::where('id',$user->ref_by)->first();
      if($parent){
        return "$parent->name $parent->l_name";
      }else{
      return "null";
      }
    }

    //Get user status
    function getUserStatus($id) {
      $user = User::where('id',$id)->first();

      return $user->status;
    }

    //Get User Registration Date
    function getUserRegDate($id) {
      $user = User::where('id',$id)->first();

      return $user->created_at;
    }


}
