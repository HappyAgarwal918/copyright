@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Dashboard</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form action="{{ route('comp_address_edited')}}" method="POST">
                    @csrf
                    <h5><b>Address</b></h5>
                    <div class="row pb-3">
                        <div class="col-md-3"><label>Company Name:</label></div>
                        <div class="col-md-6">
                            <input type="text" name="company_name" value="{{ $address->seller_company_name }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3"><label>Address:</label></div>
                        <div class="col-md-6">
                            <input type="text" name="address" value="{{ $address->seller_address }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3"><label>Zip:</label></div>
                        <div class="col-md-6">
                            <input type="text" name="zip" value="{{ $address->seller_zip }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3"><label>Country:</label></div>
                        <div class="col-md-6">
                            <input type="text" name="country" value="{{ $address->seller_country }}">
                        </div>
                    </div>
                    <div class="offset-md-3">
                        <input class="ybtn ybtn-accent-color submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection