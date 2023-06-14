@extends('layouts.master')
@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}" />


<section id="container" style="min-height:70vh">
	<div class="box">
       <h1>Thank You</h1>
       <p>Our support team will contact you for more information</p><br>
       <p><a href="https://mail.google.com/">Check your e-mail for more details</a></p><br>
       <p>{{ $bill->invoice_id }} is your invoice ID Save this for future reference</p>
       <div class="pyro">
         <div class="before"></div>
         <div class="after"></div>
       </div>
    </div>
</section>

@endsection