<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\WebsitePages;
use DB;
use Validator;
use Auth;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class WebsitesController extends Controller
{
    public function index()
    {
    	return view('AuthPages.Website.websites-1');
    }

    public function saveurl(Request $request, $uniqid)
    {
        $website = Website::where('user_id',Auth::user()->id)->get();

        $count = DB::table('users')->where('users.id',Auth::user()->id)
        ->leftjoin('package','users.package_id','package.id')
        ->leftjoin('website','website.user_id','users.id')
        ->first();
         
        if (isset($count->protected_websites) && count($website) < $count->protected_websites && $count->package_expiry > now())
        {
            $validator = Validator::make($request->all(), [
                'Url' => 'required|unique:website',
            ]);
            if ($validator->fails()) {
               return back()->with('error_message', 'You already registered this website URL');
            }
            $data = Website::firstOrCreate([
            'Url' => str_replace(['http://','https://'],['',''], $request->Url),
            'method' => $request->method,
            'status' => "Not verified",
            'user_id' => Auth::user()->id
            ]);
            $url = $data->Url;
            // print_r($url);die;
        	return view('AuthPages.Website.websites-2',compact('url','uniqid'));
        }
        elseif (isset($count->protected_websites) && count($website) >= $count->protected_websites && $count->package_expiry > now())
        {
           return back()->with('error_message', 'You have reached the limit of '.count($website).' works. Please upgrade your account if you would like to add more.'); 
        }
        else
        {
            return back()->with('error_message', "You  don't have any active plans and reached the limit of websites. Please upgrade your account if you would like to add more.");
        }
    }

    public function metapage($uniqid)
    {
        // echo "<pre>";print_r($uniqid);die();

        $url = Website::where('method',$uniqid)->first();
        return view('AuthPages.Website.websites-2',compact('url','uniqid'));
    }

    public function verify(Request $request, $uniqid)
    {
        $url = Website::where('method',$uniqid)->first();
        $url_ = "https://"."$url->Url";
        $metas = get_meta_tags($url_);

        $client = new Client();

        $crawler = $client->request('GET', $url_);

        // Get the latest post in this category and display the titles
        $title = $crawler->filter('title')->text();
        // print_r($title);die();
        
        if(isset($metas['copyright-site-verification']) && $uniqid == $metas['copyright-site-verification']){
            $url->status = 'Verified';
            $url->title = $title;
            $url->save();
            return view('AuthPages.Website.website_overview.website-overview',compact('url','uniqid'));
        }
        else{
           return back()->with('error','The verification HTML tag was not found or is incorrect. Make sure you have added it correctly and try again.');
        }            
    }

    public function websiteoverview($uniqid)
    {
        $url = Website::where('method',$uniqid)->first();
        // echo "<pre>";print_r($url);die;

        return view('AuthPages.Website.website_overview.website-overview',compact('url','uniqid'));
    }

    public function websitebadge($uniqid)
    {
        $url = Website::where('method',$uniqid)->first();

        return view('AuthPages.Website.website_overview.website-badges',compact('url','uniqid'));
    }

    public function websitepages($uniqid)
    {
        $url = Website::where('method',$uniqid)->first();

        return view('AuthPages.Website.website_overview.website-pages',compact('url','uniqid'));
    }

    public function submitpages($uniqid)
    {
        $url = Website::where('method',$uniqid)->first();
        
        return view('AuthPages.Website.website_overview.submit-pages',compact('url','uniqid'));
    }

    public function pageadded(Request $request, $uniqid)
    {
        $url = Website::where('method',$uniqid)->first();

        
            $data = WebsitePages::firstOrCreate([
                'name' => str_replace(['http://','https://',$url->Url],['','',''], $request->page_url),
                'page_url' => str_replace(['http://','https://'],['',''], $request->page_url),
                'unique_id' => uniqid(),
                'website_method' => $uniqid,
                'user_id' => Auth::user()->id
                ]);
        

        return back()->with('successful_message','Your page has been successfully submitted. Please allow our system a few minutes to process it.');
    }

    public function viewpage($uniqid, $pageid)
    {
        $url = WebsitePages::where('unique_id',$pageid)
        ->leftjoin('website','website_registered_pages.website_method','website.method')->first();
        // echo "<pre>";print_r($pagedetail);die();

        return view('AuthPages.Website.website_overview.page_details',compact('url','uniqid'));
    }

    public function destroypage($uniqid, $pageid)
    {
        $data= WebsitePages::where('unique_id',$pageid)->delete();
        // echo "<pre>";print_r($data);die();

        return redirect('websites/pages/manage/'.$uniqid)->with('successful_message','Page deleted Successfully');
    }

    public function destroywebsite($uniqid)
    {
        $data=Website::where('method',$uniqid)->first();
        $data->delete();

        return redirect('websites/manage')->with('successful_message','Website deleted Successfully');
    }

    public function selectwebsitebadge(Request $request)
    {
        $id = $request->id;
        $data = DB::table('badges')->where('id',$id)->first();

        return response()->json($data);
    }
}
