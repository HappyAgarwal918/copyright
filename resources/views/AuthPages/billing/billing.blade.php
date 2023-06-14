@extends('layouts.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/billing.css')}}">
@endsection
@section('content')
<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Billing</div>
                </div>
            </div>
        </div>
    </div>
</div>
@php
    $user_data = DB::table('users')->where('users.id',Auth::user()->id)
 	->leftjoin('package','users.package_id','package.id')
 	->first();
 	if(isset($user_data->package_id) && $user_data->package_id >= '1' && $user_data->package_expiry > now() && $data->id == '7')
 	{
 		$sell_price = $data->regular_price - ($data->regular_price * ($user_data->takedown_discount/100));
 	}
	$monthlyexpire=date('Y-m-d', strtotime('+1 month')); 	
	$expirydate=date('Y-m-d', strtotime('+1 year'));
	$c_name = DB::table('countries')->where('sortname',Auth::user()->country)->first(); 
@endphp

<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="mb-4">
            <h2>Billing information</h2>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('thankyou')}}" method="post">
                    @csrf
                    <div class="card p-3">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="first_name" class="form-control" maxlength="40" required="required" value="{{ Auth::user()->first_name}}">
                                    <span>First name</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="last_name" class="form-control" maxlength="40" required="required" value="{{ Auth::user()->last_name}}">
                                    <span>Last name</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inputbox mt-3">
                                    <input type="text" name="company" class="form-control" maxlength="100" required="required" value="{{ Auth::user()->company}}">
                                    <span>Company name</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inputbox mt-3">
                                    <input type="text" name="address" class="form-control" maxlength="255" required="required" value="{{ Auth::user()->address}}">
                                    <span>Address</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="city" class="form-control" maxlength="40" required="required" value="{{ Auth::user()->city}}">
                                    <span>City</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="zip" class="form-control" maxlength="20" required="required" value="{{ Auth::user()->zip}}">
                                    <span>Zip / Postal code</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <select class="form-control" id="country" name="country">
                                    	@if (is_null(Auth::user()->country))
										<option value="" selected="selected">Country</option>
										@else
										<option value="{{ Auth::user()->country }}" selected="selected">{{ $c_name->name }}</option>
										@endif
										@php $countries = DB::table('countries')->get() @endphp
										@foreach ($countries as $country)
										<option value="{{ $country->sortname }}">{{ $country->name }}</option>
										@endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 d-none">
                                <div class="inputbox mt-3">
                                    <input type="text" name="state" value="{{ Auth::user()->state}}" class="form-control" maxlength="50" required="required">
                                    <span>State / Province</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="bill_email" class="form-control" maxlength="200" required="required" value="{{ Auth::user()->email }}" readonly="readonly">
                                    <span>E-mail</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="phone" class="form-control" maxlength="20" value="{{ Auth::user()->phone}}">
                                    <span>Phone number</span>
                                </div>
                                @error('phone')
								    <span style="color:red;">{{ $message }}</span>
								@enderror
                            </div>
                        </div>
                        <div class="row d-none">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="invoice_id" class="form-control" maxlength="40"  value="{{ $uniqid }}" required="required">
                                    <span>Invoice ID</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="price" class="form-control" maxlength="40"  value="@if(empty($sell_price) && $data->id == '7'){{ $data->currency.$data->regular_price }}@elseif(!empty($sell_price) && $data->id == '7'){{ $data->currency.$sell_price }}@else{{ $data->currency.$data->price }}@endif">
                                    <span>Price</span>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="package_id" class="form-control" maxlength="40"  value="{{ $data->id }}">
                                    <span>Package ID</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="package_name" class="form-control" maxlength="40"  value="{{ $data->name }}/{{ $data->plan }}">
                                    <span>Package Name</span>
                                </div>
                            </div>
                        </div>
                        <div class="row d-none">
                            <div class="col-md-6">
                                <div class="inputbox mt-3">
                                    <input type="text" name="payment_status" class="form-control" maxlength="40"  value="Awaiting payment">
                                    <span>Payment Status</span>
                                </div>
                            </div>
						</div>
                    </div>
                    <div class="mt-4 mb-4 d-flex justify-content-end">
                        <button type="submit" class="ybtn ybtn-accent-color px-3">Proceed</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card card-green p-3 text-white mb-3">
                    <h3 class="mb-0">{{ $data->name }} membership</h3>
                    <hr class="mb-3">
                    <span>You have to pay --</span>
                    <div class="flex-row align-items-end my-3">
                    	<h3>
							@if (!is_null($data->regular_price))
							<strike style="color:black">{{ $data->currency.$data->regular_price }}</strike>@endif @if(empty($sell_price) && $data->id == '7'){{ $data->currency.$data->regular_price }}@elseif(!empty($sell_price) && $data->id == '7'){{ $data->currency.$sell_price }}@else{{ $data->currency.$data->price }}@endif
						</h3>
						<hr>
						@if(!is_null($data->regular_price))
							<span>Discount:	@if($data->id == '7'){{$user_data->takedown_discount}}@else{{ $data->discount }}@endif%</span>
						@endif
						<hr>
                        <h1 class="mb-0">Total: @if(empty($sell_price) && $data->id == '7'){{ $data->currency.$data->regular_price }}@elseif(!empty($sell_price) && $data->id == '7'){{ $data->currency.$sell_price }}@else{{ $data->currency.$data->price }}@endif</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection