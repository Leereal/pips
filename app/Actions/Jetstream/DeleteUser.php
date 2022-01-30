<?php

namespace App\Actions\Jetstream;
use Laravel\Jetstream\Contracts\DeletesUsers;
use App\Models\User;
use App\Models\Settings;
use App\Models\Agent;
use App\Models\User_plans;
use App\Models\Deposit;
use App\Models\Withdrawal;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {    
        $deposits=Deposit::where('user',$user->id)->get();
        if(!empty($deposits)){
            foreach($deposits as $deposit){
                Deposit::where('id', $deposit->id)->delete();
            }
        }
        $withdrawals=Withdrawal::where('user',$user->id)->get();
        if(!empty($withdrawals)){
            foreach($withdrawals as $withdrawals){
                Withdrawal::where('id', $withdrawals->id)->delete();
            }
        }
        //delete the user plans
        $userp=User_plans::where('user',$user->id)->get();
        if(!empty($userp)){
            foreach($userp as $p){
                //delete plans that their owner does not exist 
            User_plans::where('id',$p->id)->delete();
            }
        }
        //delete the user from agent model if exists
         $agent=Agent::where('agent',$user->id)->first();
        if(!empty($agent)){
            Agent::where('id', $agent->id)->delete();
        }
        
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
    }
}
