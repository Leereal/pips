<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Settings;
use App\Models\Admin;
use App\Models\User;
use App\Mail\NewNotification;
use App\Mail\Twofa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class TwoFactorVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        $logg = Auth::guard('admin')->user();
        $user = Admin::where('email',$logg->email)->first();
        $useremail = $user->email;

        if($user->enable_2fa == "enabled" && $user->token_2fa_expiry < \Carbon\Carbon::now() &&             ($user->pass_2fa == "false" || $user->pass_2fa == NULL)){
            return redirect('/admin/2fa');  
        }
        else{
            return $next($request);
        }

        
    }
}