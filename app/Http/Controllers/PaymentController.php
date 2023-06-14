<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaymentController extends Controller
{
    public function purchase($id)
    {
        $subscription=DB::table('product_package')->where('id',$id)->first();
        $user= auth()->user()->createSetupIntent();

        return view('purchase',compact('subscription','user'));
    }

    public function payment(Request $request){
        $user = $request->user();
        if($user->stripe_id === null)
        {
            $user->createAsStripeCustomer();
        }
        // echo "<pre>";print_r($user);die;
        $paymentMethod = $request->input('payment_method');
         // echo "here";die;print_r($paymentMethod);
        $user->updateDefaultPaymentMethod($paymentMethod);
         $user->newSubscription('main',$request->prod_id)->create($request->token);
        if ($user->subscribed('main')) {
            return redirect('/pricing')->with('message', 'Subscription purchased successfully!');
        }
    }
}
