<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\billing;
use DB;
use App\Models\User;
use PDF;
use Mail;

class PricingController extends Controller
{
    //
    public function pricing()
    {
        $pricing = DB::table('package')->get();

        if (Auth::user()) {

            $user = Auth::user();

            return view('AuthPages.billing.pricing',compact('user','pricing'));
        }
        else {
            return view('frontend.pricing', compact('pricing'));
        }
    }

    public function billing(Request $request, $id, $uniqid)
    {
        $data= DB::table('package')->where('id',$id)->first();

        return view('AuthPages.billing.billing',compact('data','uniqid'));
    }

    public function takedownbilling(Request $request, $id, $uniqid)
    {
        $data= DB::table('package')->where('id',$id)->first();
        // echo "<pre>";print_r($data);die;

        $user= DB::table('takedown')->where('takedown_id',$uniqid)->update([
            'status' => 'Awaiting payment',
            'link' => url('').'/billing/payments/invoice/'.$id.'/'.$uniqid,
        ]);
        // echo"<pre>";print_r($user);die;

        return view('AuthPages.billing.billing',compact('data','uniqid'));
    }

    public function confirm(Request $request)
    {
        $request->validate([
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            ]);
            
        $bill = billing::updateOrCreate([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'address' => $request->address,
            'city' => $request->city,
            'zip' => $request->zip,
            'country' => $request->country,
            'state' => $request->state,
            'user_id' => Auth::user()->id,
            'package_id' => $request->package_id,
            'price' => $request->price,
            'unique_id' => $request->invoice_id,
            'invoice_id' => '#'.$request->invoice_id,
            'bill_email' => $request->bill_email,
            'phone' => $request->phone,
            'package_name' => $request->package_name,
            'payment_status' => $request->payment_status,
            'invoice_path' => url('').'/invoices/'.$request->invoice_id.'_invoice.pdf',
            ]);

        $datamail["email"]=Auth::user()->email;
        $datamail["client_name"]=$request->first_name;
        $datamail["bill_mail"]=$request->bill_email;
        $datamail["subject"]='We have received your request';

        $pdf = PDF::loadView('AuthPages.billing.invoice', $datamail);

        $filename = $bill->unique_id.'_invoice.pdf';

        $pdf->save(public_path('invoices/'.$filename));

        if ($request->package_id >= 1 && $request->package_id <= 6) {
            try{
                Mail::send('AuthPages.billing.invoicemail', $datamail, function($message)use($datamail,$pdf) {
                $message->to($datamail["email"], $datamail["client_name"])->bcc('admin@adaiqas.com')
                ->subject($datamail["subject"]);
                // ->attachData($pdf->output(), "invoice.pdf");
                });
            }catch(JWTException $exception){
                $this->serverstatuscode = "0";
                $this->serverstatusdes = $exception->getMessage();
            }
            if (Mail::failures()) {
                 $this->statusdesc  =   "Error sending mail";
                 $this->statuscode  =   "0";
     
            }else{
     
               $this->statusdesc  =   "Message sent Succesfully";
               $this->statuscode  =   "1";
            }
        }
        else{
            try{
                Mail::send('AuthPages.billing.takedowninvoicemail', $datamail, function($message)use($datamail,$pdf) {
                $message->to($datamail["email"], $datamail["client_name"])->bcc('admin@adaiqas.com')
                ->subject($datamail["subject"]);
                // ->attachData($pdf->output(), "invoice.pdf");
                });
            }catch(JWTException $exception){
                $this->serverstatuscode = "0";
                $this->serverstatusdes = $exception->getMessage();
            }
            if (Mail::failures()) {
                 $this->statusdesc  =   "Error sending mail";
                 $this->statuscode  =   "0";
     
            }else{
     
               $this->statusdesc  =   "Message sent Succesfully";
               $this->statuscode  =   "1";
            }
        }

        return view('AuthPages.billing.thankyou',compact('bill'));
    }
}
