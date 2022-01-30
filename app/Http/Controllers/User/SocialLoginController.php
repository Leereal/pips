<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Jenssegers\Agent\Agent;
use App\Models\Settings;
use App\Models\CryptoAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\NewRegistration;
use Illuminate\Support\Facades\Mail;

class SocialLoginController extends Controller
{
    //
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }
 
    /**
 
     * Obtain the user information from Social Logged in.
 
     * @param $social
 
     * @return Response
 
     */
 
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

    public function authenticate(Request $request, $social)
    {
        $settings = settings::where('id','1')->first();
        $userSocial = Socialite::driver($social)->user();
        $user = User::where(['email' => $userSocial->getEmail()])->first();
        $agent = new Agent();

        if($user){
            Auth::login($user);
            DB::table('activities')->insert([
                'user' => $user->id,
                'ip_address' => $request->ip(),
                'device'=> $agent->device(),
                'browser'=> $agent->browser(),
                'os'=> $agent->platform(),
            ]);
            return redirect()->route('dashboard');
        }else{
            
            if(session('ref_by')) {
                $ref_by = session('ref_by');
                $user= User::where('username', $ref_by)->first();
                $ref_by_id = $user->id;
                
            }else {
                $ref_by_id = NULL;
            }
            $password = $this->RandomStringGenerator(8);
            $username = str_replace(' ', '', $userSocial->getName()).time();

            $newUser = User::create([
                'name' => $userSocial->getName(),
                'email' => $userSocial->getEmail(),
                'email_verified_at' => \Carbon\Carbon::now(),
                'status' =>'active',
                'ref_by' => $ref_by_id,
                'username' => $username,
                'password' => Hash::make($password),
            ]);
            $cryptoaccnt = new CryptoAccount();
            $cryptoaccnt->user_id = $user->id;
            $cryptoaccnt->save();

            Auth::login($newUser);
            $objDemo = new \stdClass();
            $objDemo->password = $password;
            $objDemo->sender = "$settings->site_name";
            $objDemo->contact_email = $settings->contact_email;
            Mail::to($userSocial->getEmail())->send(new NewRegistration($objDemo));

            $request->session()->forget('ref_by');
            return redirect()->route('dashboard');
        }
 
    }
}
