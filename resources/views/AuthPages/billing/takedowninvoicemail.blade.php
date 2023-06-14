@php
 $data = DB::table('billing')
 ->where('user_id',Auth::user()->id)
 ->orderBy('billing.id','desc')
 ->first();
 @endphp
<a target="_blank" style="text-decoration:none; color: black;" href="http://copyright.us.org/"><p><u>www.copyright.us.org</u></p></a>
<div class="row py-2 font-weight-bold">
  <h4>Hello there,</h4>
  </div>
  <div class="row py-2 font-weight-bold">
      <h4>Your takedown request has been received. You will be contacted by our staff team to complete your payment.</h4>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>Case : {{ $data->invoice_id }}</p>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>Amount to pay : {{ $data->price }}</p>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>Reference Number : {{ $data->invoice_id }}</p>
  </div>
  
  <div class="row py-2 font-weight-bold">
      <h4>If you have any questions or need any help, feel free to reply to this email.</h4>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>Best Regards,</p>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>Copyright Staff Team</p>
  </div>