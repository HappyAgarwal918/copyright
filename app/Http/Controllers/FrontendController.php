<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    //
    public function protect()
    {
        return view('frontend.protect-websites');
    }

    public function copyright()
    {
        return view('frontend.copyright-works');
    }

    public function takedown()
    {
        $data = DB::table('package')->where('id','7')->first();
        return view('frontend.professional-takedowns',compact('data'));
    }

    public function affiliates()
    {
        return view('frontend.affiliates');
    }

    public function refund()
    {
        return view('frontend.refund');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

}
