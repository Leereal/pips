<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Settings;
use Illuminate\Support\Facades\Auth;

class SomeController extends Controller
{
    //

    //accept KYC route
    public function changetheme(Request $request)
    {
        if(isset($request['style']) and $request['style']=='true'){
            $dashboard_style="dark";
        }else{
            $dashboard_style="light";
        }
        //change dashboard style
        User::where('id', Auth::user()->id)
        ->update([
            'dashboard_style' => $dashboard_style,
        ]);
        return response()->json(['success'=>'Changed']);
        
    }
}
