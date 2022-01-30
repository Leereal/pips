<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
// use App\Models\hisplans;
use App\Models\Agent;
//use App\Models\confirmations;
use App\Models\User_plans;
//use App\Models\fees;
use App\Models\Admin;
use App\Models\Faq;
//use App\Models\Task;
use App\Models\Images;
use App\Models\Testimony;
use App\Models\Content;
use App\Models\Asset;
//use App\Models\markets;
use App\Models\Mt4Details;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Models\Tp_Transaction;
use App\Models\Notification;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Traits\CPTrait;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

class LogicController extends Controller
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, CPTrait;


    public function delagent(Request $request, $id){
        //delete the user from agent model if exists
         $agent=Agent::where('id',$id)->first();
         
        if(!empty($agent)){
            Agent::where('id', $agent->id)->delete();
        }
        return redirect()->back()
        ->with('message', "Action successful!.");
    }

   
    
    
    //Add agent
  public function addagent(Request $request){
    
    //get agent if exists
   $ag = Agent::where('agent',$request['user'])->first();
          //check if the agent already exists
          if(count($ag)>0){
            //update the agent info
            Agent::where('id',$ag->id)->increment('total_refered', $request['referred_users']);
          }
          else{
            //add the referee to the agents model

          $agent_id = DB::table('agents')->insertGetId(
            [
              'agent' => $request['user'],
              'created_at' => \Carbon\Carbon::now(),
              'updated_at' => \Carbon\Carbon::now(),
            ]
           );
          //increment refered clients by 1
          Agent::where('id',$agent_id)->increment('total_refered', $request['referred_users']);
            }
    
    return redirect()->route('agents')
    ->with('success', 'Action successful!');
  }
   //Return view agent route
   public function viewagent($agent)
   {
     return view('admin.viewagent')
       ->with(array(
          'title'=>'Agent record',
          'agent'=> User::where('id',$agent)->first(),
          'ag_r' => User::where('ref_by',$agent)->get(),
       ));
   }
   
}
