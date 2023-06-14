<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CertificateController extends Controller
{
    //
    public function certificate($id)
    {
        $data = DB::table('works')->where('unique_id',$id)->first();
        $files = DB::table('work_files')->where('unique_id',$id)->get();

        return view('AuthPages.Certificate.certificate',compact('data','id','files'));
    }

    public function websitecertificate($id)
    {
        $data = DB::table('website')->where('method',$id)->first();
        $pages = DB::table('website_registered_pages')->where('unique_id',$id)->get();
        // echo "<pre>";print_r($data);die;

        return view('AuthPages.Certificate.websitecertificate',compact('data','id','pages'));
    }
}
