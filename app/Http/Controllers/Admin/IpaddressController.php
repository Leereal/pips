<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ipaddress;
use App\Models\Settings;
use Illuminate\Support\Facades\DB;

class IpaddressController extends Controller
{
    //
    public function index(){
        return view('admin.Settings.Ipaddress.ipaddress',[
            'title'=>'Blacklist IP Address',
            'settings' => Settings::where('id', '=', '1')->first(),
        ]);
    }


    public function getaddress(){

        $addresses =  DB::table('ipaddresses')->orderByDesc('id')->get();
        $allddress = '';

        if (count($addresses)<1) {
            $allddress = "
            <tr> 
                <td colspan='3' class='text-danger'>No Record Added</td>
            </tr> 
            ";
        }else {
            foreach ($addresses as $key => $address) {
                $allddress.= "
                <tr> 
                    <td>$address->ipaddress</td> 
                    <td>".\Carbon\Carbon::parse($address->created_at)->toDayDateTimeString()."</td> 
                    <td>
                        <a class='btn btn-danger btn-sm' href='javascript:void(0)' id='$address->id' onclick='deleteip(this.id)' role='button'>
                            Delete
                        </a>
                    </td> 
                </tr> 
                ";
            }
        }
        
        return response()->json(['status'=>200, 'data'=>$allddress, 'message'=>'Action successful!']);
    }
    public function addipaddress(Request $request){
        $addip = new Ipaddress();
        $addip->ipaddress = $request->ipaddress;
        $addip->save();
        return response()->json(['status' => 200, 'success' => "IP Address: $request->ipaddress blacklisted"]);
    }

    public function deleteip($id){
        Ipaddress::where('id', $id)->delete();
        return response()->json(['status' => 200, 'success' => "IP Address deleted"]);
    }
}
