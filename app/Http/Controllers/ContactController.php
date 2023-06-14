<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Validator;
use Session;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
 
    public function send_contact(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        if ($validator->passes()){
            ContactUs::create($input);
            return back()->with('successful_message', 'Contact Information Submitted successfully');
        }

        return redirect()->back()->withErrors($validator)->withInput();
    }
}