<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Takedown;
use Auth;
use DB;

class TakedownsController extends Controller
{
    public function manage()
    {
        $id = uniqid();
        $data = Takedown::where('user_id',Auth::user()->id)->get();

        return view('AuthPages.Takedowns.my-takedowns',compact('data','id'));
    }

    public function index($id)
    {
        $data = Takedown::where('takedown_id',$id)->first();

        return view('AuthPages.Takedowns.takedown-1',compact('data','id'));
    }

    public function savedetails(Request $request, $id)
    {   
        $datatarget = array();
        foreach ($request->target as $key => $value) {
            $datatarget[] = str_replace(['http://','https://'],['',''], $value);
        }

        // echo "<pre>";print_r($datatarget);die;
        $data = Takedown::updateOrCreate(['takedown_id' => $id,
        ],[
            'source_online' => $request->source_online,
            'website_url' => $request->website_url,
            'website_name' => $request->website_name,
            'target' => json_encode($datatarget),
            'status' => 'Incomplete',
            'link' => url('').'/takedowns/request/details/'.$id,
            'takedown_id' => $id,
            'user_id' => Auth::user()->id
            ]);

        return view('AuthPages.Takedowns.takedown-2',compact('data','id'));
    }

    public function details($id)
    {
        $data = Takedown::where('takedown_id',$id)->first();

        return view('AuthPages.Takedowns.takedown-2',compact('data','id'));
    }

    public function savereview(Request $request, $id)
    {
        $data = Takedown::updateOrCreate(['takedown_id' => $id,
        ],[
            'source_comments' => $request->source_comments,
            'target_comments' => $request->target_comments,
            'extra_comments' => $request->extra_comments,
            'link' => url('').'/takedowns/request/review/'.$id

            ]);

        return view('AuthPages.Takedowns.takedown-3',compact('data','id'));
    }

    public function review(Request $request, $id)
    {
        $data = Takedown::where('takedown_id',$id)->first();

        return view('AuthPages.Takedowns.takedown-3',compact('data','id'));
    }

    public function takedownview($id)
    {
        $data = Takedown::where('takedown_id',$id)->first();

        return view('AuthPages.Takedowns.takedown-overview',compact('data','id'));
    }

    public function destroytakedown($id)
    {
        $data = Takedown::where('takedown_id',$id)->first();
        // echo "<pre>";print_r($data);die();
        $data->delete();

        return redirect('/takedowns/manage')->with('successful_message','Takedown request has been successfully deleted.');
    }

}
