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
    <h3>Edit Takedown Package</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form action="{{ route('takedownpriceedited',$price->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label for="plan">Plan:</label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-control" for="plan" style="background: #f6f9fc;">{{ $price->plan }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="name">Name:</label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-control" for="name" style="background: #f6f9fc;">{{ $price->name }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="regular_price">Regular Price:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" id="regular_price" name="regular_price" value="{{ $price->regular_price }}">
                        </div>
                    </div>
                    <div class="row" style="display:none;">
                        <div class="col-md-3">
                            <label for="discount">Discount:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" id="discount" name="discount" value="{{ $price->discount }}">
                        </div>
                    </div>
                    <div class="row" style="display:none;">
                        <div class="col-md-3">
                            <label for="price">Price:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" id="price" name="price" value="{{ $price->price }}">
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