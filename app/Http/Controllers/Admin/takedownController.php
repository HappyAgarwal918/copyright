<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\billing;
use App\Models\Takedown;
use DB;

class takedownController extends Controller
{
    public function takedownpackages()
    {
        $data = billing::where('billing.package_id','7')
        ->leftjoin('users','users.id','billing.user_id')
        ->where('users.admin','0')
        ->orderBy('billing.created_at','desc')
        ->get();

        return view('admin.User.takedown-packages',compact('data'));
    }
    
    public function statuspaid(Request $request, $id)
    {
        $data = billing::where('unique_id',$id)->first();
        $data -> payment_status = $request->payment_status;
        $data -> update();

        if($data->package_id == 7){
            $user = takedown::where('takedown_id',$id)->first();
            $user -> status = $request->payment_status;
            $user -> update();
        }

        return back()->with('successful_message','Status has been successfully updated.');
    }
}
