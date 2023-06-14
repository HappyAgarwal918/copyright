<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\works;
use App\Models\WorkAuthor;
use App\Models\WorkOwner;
use App\Models\WorkFiles;
use Illuminate\Support\Facades\Auth;
use DB;

class WorksOverviewController extends Controller
{
    public function overviewbadge($id)
    {
        $data = DB::table('works')->where('unique_id',$id)->first();
        return view('AuthPages.Works.work_overview.badges',compact('data','id'));
    }

    public function overviewdetail($id)
    {
        $data = DB::table('works')
                ->where('unique_id',$id)
                ->leftjoin('users','works.user_id','users.id')
                ->leftjoin('countries','works.first_publication_country','countries.sortname')
                ->first();
                // echo "<pre>";print_r($data);die();
        return view('AuthPages.Works.work_overview.details',compact('data','id'));
    }

    public function overviewfiles($id)
    {
        $data = DB::table('works')->where('unique_id',$id)
                ->leftjoin('users','works.user_id','users.id')
                ->leftjoin('package','users.package_id','package.id')
                ->first();

        return view('AuthPages.Works.work_overview.files',compact('data','id'));
    }

    public function fileview($pid, $id)
    {
        $data = WorkFiles::where('id',$pid)->first();
        // echo "<pre>";print_r($data);die;

        return view('AuthPages.Works.work_overview.fileview',compact('data','id'));
    }

    public function destroyfiles($pid, $id)
    {
        $data = WorkFiles::where('id',$pid)->first();
        // echo "<pre>";print_r($data);die();
        $data->delete();

        return redirect('/works/files/manage/'.$data->unique_id)->with('successful_message','File deleted Successfully');
    }

    public function editfilename($pid, $id)
    {
        $data = WorkFiles::where('id',$pid)->first();

        return view('AuthPages.Works.work_overview.edit_file_name',compact('data','id'));
    }

    public function savenewfilename(Request $request, $pid, $id)
    {
        $data = WorkFiles::where('id',$pid)->update([
            'file_name' => $request->file_name,
        ]);

        return redirect('/works/files/manage/'.$id)->with('successful_message','File renamed Successfully');
    }

    public function destroy($id)
    {
        $data=works::where('unique_id',$id)->first();
        // echo "<pre>";print_r($data);die();
        $data->delete();

        return redirect('works/manage')->with('successful_message','Work deleted Successfully');
    }

    public function editwork($id)
    {
        $data = works::where('unique_id',$id)->first();

        return view('AuthPages.Works.editwork',compact('data','id'));
    }

    public function workedited(Request $request, $id)
    {
        $data = works::where('unique_id',$id)->update([
            'type' => $request->category_id,
            'title' => $request->title,
            'alt_titles' => $request->alt_titles,
            'description'=> $request->description,
        ]);

        return redirect('works/view/details/'.$id)->with('successful_message','File renamed Successfully');
    }

    public function selectworkbadge(Request $request)
    {
        $id = $request->id;
        $data = DB::table('badges')->where('id',$id)->first();

        return response()->json($data);
    }

}
