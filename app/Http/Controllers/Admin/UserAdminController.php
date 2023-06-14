<?php
  
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;

class UserAdminController extends Controller
{

    public function index()
    {
        return view('admin.User.User');
    }

    public function edituser($id)
    {
        $data = User::where('id',$id)->first();

        return view('admin.User.EditUser',compact('data'));
    }

    public function change(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['same:password'],
        ]);

        $data =  User::updateOrCreate(['email' => $request-> email,
        ],[
            'password' => Hash::make($request -> password),
        ]);

       return redirect('admin/user')->with('successful_message', 'Password Changed Successfully! ('.$data['email'].')');
    }

    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();

        return back()->with('successful_message','User deleted Successfully');
    }

    public function restore($id)
    {
        $user=User::withTrashed()->find($id)->restore();

        return back()->with('successful_message','User Restored Successfully');
    }

    public function activate($id)
    {
        $user = User::where('id',$id)->first();
        $user -> email_verified_at = now();
        
        $user -> update();

        return back()->with('successful_message' , 'User Verified Successfully!');
    }

    public function addnewuser()
    {
        return view('admin.User.Addnew');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['same:password'],
        ]);

        $email = $request -> email;
        $check_user = User::where('email',$email)->first();
        if(empty($check_user)){
            
             $user = array( "first_name" => $request->first_name,
                            "last_name" => $request->last_name,
                            "email" => $email,
                            'password' => Hash::make($request['password']),
                            "created_at"=> Carbon::now(),
                            "updated_at"=> now(),
                            'email_verified_at' => now());
                
                    DB::table('users')->insert($user);

        return redirect('admin/user')->with('successful_message', 'User Added Successfully!');
        }
        return redirect('admin/user')->with('error_message', 'User Already Exist!');

    }

}