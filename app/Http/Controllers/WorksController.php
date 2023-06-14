<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\works;
use App\Models\WorkAuthor;
use App\Models\WorkOwner;
use App\Models\WorkFiles;
use Illuminate\Support\Facades\Auth;
use DB;

class WorksController extends Controller
{
    public function dc(Request $request, $id)
    {
        $data = new works;
        $data ->unique_id=$request->unique_id;
        $data ->type="Digital-Content";
        $data->save();

        return view('AuthPages.Works.digital-content',compact('id'));
    }

    public function lw(Request $request, $id)
    {
        $data = new works;
        $data ->unique_id=$request->unique_id;
        $data ->type="Literary-Works";
        $data->save();

        return view('AuthPages.Works.literary-works',compact('id'));
    }

    public function mp(Request $request, $id)
    {
        $data = new works;
        $data ->unique_id=$request->unique_id;
        $data ->type="Motion-Pictures";
        $data->save();

        return view('AuthPages.Works.motion-pictures',compact('id'));
    }

    public function pa(Request $request, $id)
    {
        $data = new works;
        $data ->unique_id=$request->unique_id;
        $data ->type="Performing-Arts";
        $data->save();

        return view('AuthPages.Works.performing-arts',compact('id'));
    }

    public function photo(Request $request, $id)
    {
        
        $data = new works;
        $data ->unique_id=$request->unique_id;
        $data ->type="Photographs";
        $data->save();

        return view('AuthPages.Works.photographs',compact('id'));
    }

    public function va(Request $request, $id)
    {
        $data = new works;
        $data ->unique_id=$request->unique_id;
        $data ->type="Visual-Arts";
        $data->save();

        return view('AuthPages.Works.visual-arts',compact('id'));
    }

    public function register(Request $request, $id)
    {
        $works = works::where('user_id',Auth::user()->id)->get();

        $count = DB::table('users')->where('users.id',Auth::user()->id)
        ->leftjoin('package','users.package_id','package.id')
        ->leftjoin('works','works.user_id','users.id')
        ->first();

        if ((isset($count->registered_works) && count($works) < $count->registered_works) && $count->package_expiry > now())
        {
            $data = works::where('unique_id',$id)->update([
                'title' => $request->title,
                'alt_titles' => $request->alt_titles,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'status' => 'Incomplete',
                'link' => url('').'/works/registration/publication/'.$id
            ]);

            return view('AuthPages.Works.publication',compact('id'));
        }
        elseif ((isset($count->registered_works) && count($works) >= $count->registered_works) && $count->package_expiry > now()) {
            return back()->with('error_message', 'You have reached the limit of '.count($works).' works. Please upgrade your account if you would like to add more.');
        }
        else
        {
            return back()->with('error_message',"You  don't have any active plans and reached the limit of works. Please upgrade your account if you would like to add more.");
        }
    }

    public function savepublication(Request $request, $id)
    {
        if($request->first_publication == 1){
            $date = $request->publication_date.'-'.$request->publication_month.'-'.$request->publication_year;
        }else{
            $date = Null;
        }
        $data = works::where('unique_id',$id)->update([
            'completion_year' => $request->completion_year,
            'first_publication' => $request->first_publication,
            'publication_date' => $date,
            'first_publication_country' => $request->first_publication_country,
            'link' => url('').'/works/registration/limitation/'.$id
        ]);
        // echo "<pre>";print_r($id);die();
        $work = works::where('unique_id',$id)->first();

        if($work->status == 'Incomplete')
        {
            return view('AuthPages.Works.limitation',compact('id'));
        }
        else
        {
            return redirect('/works/view/details/'.$id)->with('successful_message','Updated Successfully');
        }
    }

    public function savelimitation(Request $request, $id)
    {    
        $data = works::where('unique_id',$id)->update([
            'derivative' => $request->derivative,
            'derivative_old' => $request->derivative_old,
            'derivative_new' => $request->derivative_new,
            'compilation' => $request->compilation,
            'compilation_data' => $request->compilation_data,
            'link' => url('').'/works/registration/authors/'.$id
        ]);

        $work = works::where('unique_id',$id)->first();

        if($work->status == 'Incomplete')
        {
            return view('AuthPages.Works.authors',compact('id'));
        }
        else
        {
           return redirect('/works/view/details/'.$id)->with('successful_message','Updated Successfully');
        }
    }

    public function saveauthors(Request $request, $id)
    {
        // echo "<pre>";print_r($id);die();     
        $data = works::where('unique_id',$id)->update([
            'self_author' => $request->self_author,
            'link' => url('').'/works/registration/owners/'.$id
        ]);

        $work = works::where('unique_id',$id)->first();

        if($work->status == 'Incomplete')
        {
            return view('AuthPages.Works.owners',compact('id'));
        }
        else
        {
           return redirect('/works/view/details/'.$id)->with('successful_message','Updated Successfully');
        }
    }

    public function addauthor($id)
    {
        $data = works::where('unique_id',$id)->update([
            'self_author' => '0'
        ]);
        return view('AuthPages.Works.add-author',compact('data'));
    }

    public function saveworkauthor(Request $request)
    {
        $data = $request->except('_token');
        $author = WorkAuthor::create($data);
        return redirect('works/registration/authors/'.$data['unique_id']);
    }

    public function destroyauthor($id)
    {
        // $id = $_GET['id'];
        $data=WorkAuthor::where('id',$id)->first();
        // echo "<pre>";print_r($data);die();
        $data->delete();
        return back()->with('successful_message','Author deleted Successfully');
    }

    public function saveowners(Request $request, $id)
    {
        $data = works::where('unique_id',$id)->update([
            'self_owner' => $request->self_owner,
            'link' => url('').'/works/registration/files/'.$id
        ]);

        $work = works::where('unique_id',$id)->first();

        if($work->status == 'Incomplete')
        {
            return view('AuthPages.Works.files',compact('id'));
        }
        else
        {
           return redirect('/works/view/details/'.$id)->with('successful_message','Updated Successfully');
        }
    }

    public function addowner($id)
    {
        $data = works::where('unique_id',$id)->update([
            'self_owner' => '0'
        ]);
        return view('AuthPages.Works.add-owner',compact('data'));
    }

    public function saveworkowner(Request $request)
    {
        $data = $request->except('_token');
        $owner = WorkOwner::create($data);
        return redirect('works/registration/owners/'.$data['unique_id']);
    }

    public function destroyowner($id)
    {
        $data=WorkOwner::where('id',$id)->first();
        // echo "<pre>";print_r($data);die();
        $data->delete();
        return back()->with('successful_message','Owner deleted Successfully');
    }

    public function savefiles(Request $request, $id)
    {
        // echo "<pre>";print_r($id);die();     
        $data = works::where('unique_id',$id)->update([
            'upload_files_now' => $request->upload_files_now,
            'status' => 'Completed',
            'link' => url('').'/works/view/'.$id
        ]);        
        return view('AuthPages.Works.work_overview.work-overview',compact('data','id'));
    }

    public function uploadfiles($id)
    {
        $data = works::where('unique_id',$id)->update([
            'upload_files_now' => '1'
        ]);
        return view('AuthPages.Works.upload-files',compact('data','id'));
    }

    public function saveworkfiles(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'file' => 'required'
        ]);

        $fileModel = new WorkFiles;

        if($request->file()) {
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->move(public_path('files'), $fileName);
            $filesize = $filePath->getSize();

            $fileModel->file_name = $request->file->getClientOriginalName();
            $fileModel->file_path = url('').'/files/'.$fileName;
            $fileModel->unique_id = $request->unique_id;
            $fileModel->file_size = $filesize;
            $fileModel->save();

            return back()
            ->with('successful_message', $fileName.' has been uploaded Successfully.');
        }
    }

    public function complete($id)
    {
        $data = DB::table('works')->where('unique_id',$id)->first();
        return view('AuthPages.Works.work_overview.work-overview',compact('data','id'));
    }

    public function incomplete($id)
    {
        $data = DB::table('works')->where('unique_id',$id)->first();
        // print_r($data);die();
        return view('AuthPages.Works.work_overview.overview-incomplete',compact('data','id'));
    }
}
