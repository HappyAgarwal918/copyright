<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Logo;
use App\Models\Admin\address;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.Dashboard.logo');
    }

    public function logoupload(Request $request)
    {
        if($request->hasFile('featured_image'))
        {
            $originName = $request->file('featured_image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('featured_image')->move(public_path('asset/images/logo'), $fileName);
   
            $url = asset('asset/images/logo/'.$fileName);   
        }

        $logo = Logo::where('id', 1)->first();
        $logo -> featured_image = $url;

        $logo -> save();

        return redirect('admin/dashboard')->with('successful_message','Logo Changed Successfully');
    }

    public function edit()
    {
        $address = address::where('id', 1)->first();

        return view('admin.Dashboard.EditAddress',compact('address'));
    }

    public function editaddress(Request $request)
    {
        $address = address::where('id', 1)->first();
        $address -> seller_company_name = $request -> company_name;
        $address -> seller_address = $request -> address;
        $address -> seller_zip = $request -> zip;
        $address -> seller_country = $request -> country;

        $address -> save();

        return redirect('admin/dashboard')->with('successful_message','Address Changed Successfully');
    }

}
