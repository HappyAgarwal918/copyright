 @php
 $data = DB::table('billing')
 ->where('user_id',Auth::user()->id)
 ->leftjoin('package','billing.package_id','package.id')
 ->orderBy('billing.id','desc')
 ->first();
 $currentplan = DB::table('users')->where('users.id',Auth::user()->id)
 ->leftjoin('package','users.package_id','package.id')
 ->first();
 @endphp
<div class="row py-2 font-weight-bold">
    <span>Hello there,</span>
  </div>
  <div class="row py-2 font-weight-bold">
      <h4>Your request to upgrade your subscription has been received. You will be contacted by our staff team to complete your payment.</h4>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>Current Subscription : {{ $currentplan->name }}/{{ $currentplan->plan }} @if($currentplan->package_expiry < now()) (Plan Expired) @endif</p>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>New Subscription : {{ $data->name }}/{{ $data->plan }}</p>
  </div>
  <div class="row py-2 font-weight-bold">
      <p>Amount to pay : {{ $data->currency.' '.$data->price }}</p>
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
  <!-- <a target="_blank" style="text-decoration:none; color: black;" href="@php echo url('') @endphp"><p><u>www.copyright.us.org</u></p></a> -->