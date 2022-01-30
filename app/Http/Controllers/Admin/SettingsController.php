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
use App\Models\Mt4dDtails;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Models\Tp_Transaction;
use DB;
use Illuminate\Support\Facades\Storage;
//use App\account;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Traits\CPTrait;

use App\Mail\NewNotification;
use App\Mail\newroi;
use App\Mail\endplan;
use Illuminate\Support\Facades\Mail;

class SettingsController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, CPTrait;

    
    

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



public function updatemark(Request $request){

    markets::where('id', $request->id)
      ->update([
        'market'=> $request->mktcatgy,
        'base_curr'=> $request->base_currency,
        'quote_curr'=> $request->quote_currency,
        // 'commission_type'=> $request->commission_type,
        // 'commission_fee'=> $request->commission_fee,
      ]);
        return redirect()->back()
        ->with('message', 'Market Sucessfully Updated');
}

  public function updateasst(Request $request){
    Asset::where('id', $request->id)
    ->update([
        'name'=> $request->assname,
        'symbol'=> $request->assym,
        'category'=> $request->ascat,
        // 'commission_type'=> $request->commission_type,
        // 'commission_fee'=> $request->commission_fee,
    ]);
        return redirect()->back()
        ->with('message', 'Asset Sucessfully Updated');
    }

  public function updateasset(Request $request){

    $assets = new assets;
    $assets->category=$request['asset_catgy'];
    $assets->name=$request['asset_name'];
    $assets->symbol=$request['asset_symbol'];
    //$assets->commission_type=$request['coom_type'];
    //$assets->commission_fee=$request['com_fee'];
    $assets->save();

    return redirect()->back()
    ->with('message', 'Action Sucessful');
}

public function updatemarket(Request $request){
  $market = new markets;
  $market->market=$request['mktcatgy'];
  $market->base_curr=$request['base_currency'];
  $market->quote_curr=$request['quote_currency'];
 // $market->commission_type=$request['commfee_type'];
  //$market->commission_fee=$request['live_com_fee'];
  $market->save();
  return redirect()->back()
    ->with('message', 'Action Sucessful');
}

public function updatefee(Request $request){

Settings::where('id', $request->id)
  ->update([
    'commission_type'=> $request->commission_type,
    'commission_fee'=> $request->commission_fee,
  ]);
return redirect()->back()
  ->with('message', 'Action Sucessful');
}

public function delmarket($id){
markets::where('id',$id)->delete();
return redirect()->back()
        ->with('message', 'Market Sucessfully Deleted');
}

public function delassets($id){
Asset::where('id',$id)->delete();
return redirect()->back()
        ->with('message', 'Asset Sucessfully Deleted');
}




}
