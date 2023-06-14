<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\billing;
use Auth;
use Hash;
use DB;

class SettingController extends Controller
{
    public function settings()
    {
        $id = Auth::user()->id;

        $data = billing::where('user_id',$id)
            ->leftjoin('package','billing.package_id','package.id')
            ->get();
        $package=DB::table('package')->where('id',Auth::user()->package_id)->first();
        $c_name = DB::table('countries')->where('sortname',Auth::user()->country)->first();
        $users = DB::table('countries')->get();

        return view('AuthPages.Settings.settings',compact('data','package','c_name','users'));
    }

    public function profilepost(Request $request)
    {
        $data = User::where('id', Auth::user()->id)->first();
        $data -> first_name=$request->first_name;
        $data -> last_name=$request->last_name;
        $data -> company=$request->company;
        $data -> country=$request->country;
        $data -> state=$request->state;
        $data -> city=$request->city;
        $data -> address=$request->address;
        $data -> zip=$request->zip;
        $data -> phone=$request->phone;

        $data -> save();

        return redirect()->back()->with('successful_message','Profile Updated Successfully');
    }

    public function viewinvoice($id, $uniqid)
    {
        $data = billing::where('unique_id',$uniqid)->first();
        $add = DB::table('address')->first();

        return view('AuthPages.Settings.invoice',compact('data','uniqid','add'));
    }

    public function update_profile(Request $request)
    {
        $data = $request->except('_token');
        $user = Auth::user();
        if ($data['old_password']) {
            if (Hash::check($data['old_password'], $user->password)) {
                if (isset($data['email']) && $data['email'] != '') {
                    if ($data['email'] != $user->email) {
                        $this->validate($request, [
                            'email' => ['string', 'email', 'max:255', 'unique:users'],
                        ]);
                        $user->email = $data['email'];

                        $user->save();
                        Auth::guard('web')->logout();

                        return redirect('/')->with('successful_message' , 'Email updated successfully');
                    }
                }
            }
            else {
                $status = 0;
                // return $this->sendError($status, 'Old password is incorrect');
                return back()->with('error_message' , 'Password is incorrect');
            }
        }

        // if (isset($data['editname']) && $data['editname'] != '') {
        //     $user->name = $data['editname'];
        // }
        // if (isset($data['gender']) && $data['gender'] != '') {
        //     $user->gender = $data['gender'];
        // }
        // if (isset($data['description']) && $data['description'] != '') {
        //     $user->description = $data['description'];
        // }
        // $target_dir = storage_path('app/public/user_image');
        // $file = $request->file('user_image');
        // if (isset($file) && $file != '') {
        //     $file_name = 'image' . time() . '.' . $file->getClientOriginalExtension();
        //     $file->move($target_dir, $file_name);
        //     $user->image = $file_name;
        // }
        // if (isset($data['remove_img']) && $data['remove_img'] == 1) {
        //     $user->image = Null;
        // }
        // if (isset($data['dob']) && $data['dob'] != '') {
        //     $user->date_of_birth = $data['dob'];
        // }
        
        // $user->save();

        // return  back()->with('success', 'Profile Updated successfully!');
    }

    public function update_password(Request $request)
    {
        $data = $request->except('_token');
        $user = Auth::user();
        if ($data['old_password']) {
            if (Hash::check($data['old_password'], $user->password)) {
                $this->validate($request, [
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
                ]);
                $user->password = Hash::make($data['password']);
                if ($user->save()) {
                    $status = 1;
                    // return $this->sendResponse($status, 'Password updated successfully.');
                    return back()->with('successful_message' , 'Password updated successfully');
                }
            } else {
                $status = 0;
                // return $this->sendError($status, 'Old password is incorrect');
                return back()->with('error_message' , 'Old password is incorrect');
            }
        }
    }
}
