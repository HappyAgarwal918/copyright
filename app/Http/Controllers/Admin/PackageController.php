<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\billing;
use DB;

class PackageController extends Controller
{
    public function subscription()
    {
        $users = DB::table('users')
            ->select('users.*','users.id as userid','package.*','package.id as packageid')
            ->where('admin' , 0)->whereNotNull('email_verified_at')
            ->leftjoin('package','users.package_id','package.id')
            ->orderBy('package_expiry','asc')
            ->get();

        return view('admin.User.package',compact('users'));
    }

    public function editpackage($id)
    {
        $data = User::where('id',$id)->first();
        // echo "<pre>";print_r($data);die;

        $invoices = billing::where('user_id',$id)
        ->leftjoin('users','users.id','billing.user_id')
        ->where('billing.package_id', '!=' ,'7')
        ->get();

        return view('admin.User.packageEdit',compact('data','invoices','id'));
    }

    public function activatepackage(Request $request, $id)
    {
        $data = User::where('id',$id)->first();
        
        $data -> package_id = $request->package_id;
        $data -> package_expiry = $request->package_expiry;
        // echo "<pre>";print_r($data);die();
        $data -> update();

        return redirect('admin/package/user/'.$id)->with('successful_message','User Plan Updated Successfully');
    }

    public function packagepaid(Request $request, $id)
    {
        $data = billing::where('unique_id',$id)->first();
        $data -> payment_status = $request->payment_status;
        $data -> update();

        return redirect('admin/package/user/'.$data->user_id);
    }
}
