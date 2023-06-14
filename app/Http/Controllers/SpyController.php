<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpyModel;
use Auth;
use Iodev\Whois\Factory;

class SpyController extends Controller
{
    //
    public function spy()
    {
        return view('AuthPages.Spy.web-spy');
    }

    public function spylookup()
    {
        return view('AuthPages.Spy.spymanage');
    }

    public function domaindetail(Request $request)
    {
        $user = Auth::user();
        // echo "<pre>";print_r($user);die();

        if ($user->package_expiry > now()) {

            // $input = $request->all();
            $data = SpyModel::firstOrCreate([
            'domain' => str_replace(['http://','https://'],['',''], $request->domain),
            'user_id' => Auth::user()->id,
            ]);
            $domain = $data['domain'];

            // Creating default configured client
            $whois = Factory::get()->createWhois();

            $info = (array) $whois->loadDomainInfo($domain);
            $info_domain = '';
            foreach($info as $key => $domain_data){
                foreach((array)$domain_data as $key => $domain_){
                    $domain_all_data = (array)$domain_;
                    if(isset($domain_all_data['text']) && $domain_all_data['text']){
                        $info_domain = $domain_all_data['text'];
                    }
                }
            }

            return view('AuthPages.Spy.spy-2',compact('domain','info_domain'));
        }
        else{
            return back()->with('error_message','This feature is available only to our paying subscribers. Upgrade now to be able to use it and enjoy many other benefits.');
        }
    }

    // public function index3(Request $request)
    // {
    //     return view('AuthPages.Spy.spy-2',compact('domain'));
    // }

    public function index2(Request $request)
    {
        $data = SpyModel::where('domain',$request->url)->first();
        $domain = $data['domain'];

        $whois = Factory::get()->createWhois();

        $info = (array) $whois->loadDomainInfo($domain);
            $info_domain = '';
            foreach($info as $key => $domain_data){
                foreach((array)$domain_data as $key => $domain_){
                    $domain_all_data = (array)$domain_;
                    if(isset($domain_all_data['text']) && $domain_all_data['text']){
                        $info_domain = $domain_all_data['text'];
                    }
                }
            }

        return view('AuthPages.Spy.spy-2',compact('domain','info_domain'));
    }
}
