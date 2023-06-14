@extends('layouts.master')
@section('css')
<style>
    .invoice_border {
        border-bottom: 5px solid #43989d;
    }
    span.activee {
        background: #28b66e;
        color: white;
        padding: 5px;
        font-size: 0.875rem;
        font-weight: bold;
    }
    span.unpaid {
        background: #f0ad4e;
        color: white;
        padding: 5px;   
        font-size: 0.875rem;
        font-weight: bold;
    }
</style>
@endsection
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">View invoice</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="container">
        <a href="{{ route('settings')}}" class="ybtn ybtn-accent-color">Back to Invoice</a>
    </div>
</div>
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row my-2">
            <div class="row">
                <div class="col-md-12">
                    <h3>Invoice</h3>
                    <span></span>
                </div>  
                <div class="col-md-6  border-bottom ">
                    <h4 class="invoice_border py-2">Seller</h4>
                    <p>{{ $add->seller_company_name }}</p>
                    <p>{{ $add->seller_address }}</p>
                    <p>{{ $add->seller_country.' '. $add->seller_zip }}</p>
                </div>    
                <div class="col-md-6  border-bottom">
                    <h4 class="invoice_border py-2">Purchaser</h4>
                    <p>{{ $data->first_name.' '. $data->last_name }}</p>
                    <p>{{ $data->address.', '. $data->city }}</p>
                    <p>{{ $data->state.', '. $data->country.', '. $data->zip }}</p>
                </div>
            </div>

            <div class="row my-2"><h3 class="my-2">Product details</h3></div>    
            <div class="row invoice_border">
                <div class="col-md-6"><h4>Description</h4></div>
                <div class="col-md-2 d-none d-md-block"><h4>Status</h4></div>
                <div class="col-md-2 d-none d-md-block"><h4>Date</h4></div>
                <div class="col-md-2 d-none d-md-block"><h4>Amount</h4></div>
            </div>
            <div class="row  my-2 border-bottom ">
                <div class="col-md-6"><p>Professional membership</p></div>
                <div class="col-md-2">@if( $data->payment_status == 'Paid')
									<span class="label paid">{{ $data->payment_status }}</span>
									@else
									<span class="label">{{ $data->payment_status }}</span>
									@endif</div>
                <div class="col-md-2"><p>{{ Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</p></div>
                <div class="col-md-2 text-md-end"><p>{{ $data->price }}</p></div>
            </div>
            <div class="col-md-12 border-bottom text-md-end"><p>Total: {{ $data->price }}</p></div>
            <div class="row">
                <div class="col-md-12"><h2>Transactions</h2></div>
            </div>
            <div class="row invoice_border my-2">
                <div class="col-md-6 d-none d-md-block"><h4>Receipt ID </h4></div>
                <div class="col-md-2 d-none d-md-block"><h4>Currency</h4></div>
                <div class="col-md-2 d-none d-md-block"><h4>Date</h4></div>
                <div class="col-md-2 d-none d-md-block"><h4>Amount</h4>
                </div>
            </div>
            <div class="row  my-2 border-bottom ">
                <div class="col-md-6"><p>{{ $data->invoice_id }}</p></div>
                <div class="col-md-2"><p>Cash</p></div>
                <div class="col-md-2"><p>{{ Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</p></div>
                <div class="col-md-2 text-md-end"><p>{{ $data->price }}</p></div>
            </div>   
        </div>
    </div>
</div>

@endsection