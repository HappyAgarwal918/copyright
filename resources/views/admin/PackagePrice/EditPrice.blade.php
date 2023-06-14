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
    <h3>Edit Package</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form action="{{ route('priceedited',$price->id)}}" method="post">
                    @csrf
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="plan">Plan:</label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-control" for="plan" style="background: #f6f9fc;">{{ $price->plan }}</label>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="name">Name:</label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-control" for="name" style="background: #f6f9fc;">{{ $price->name }}</label>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="regular_price">Regular Price:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" id="regular_price" name="regular_price" value="{{ $price->regular_price }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="discount">Discount:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" id="discount" name="discount" value="{{ $price->discount }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="price">Price:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" id="price" name="price" value="{{ $price->price }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="registered_works">Registered Works:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" min="1" id="" name="registered_works" value="{{ $price->registered_works }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="file_per_work">File Per Work:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" min="1" id="file_per_work" name="file_per_work" value="{{ $price->file_per_work }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="protected_websites">Protected Websites:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" min="1" id="protected_websites" name="protected_websites" value="{{ $price->protected_websites }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="protected_pages">Protected Pages:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" min="1" id="protected_pages" name="protected_pages" value="{{ $price->protected_pages }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="backup_storage">Backup Storage (In GB):</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="number" min="1" id="backup_storage" name="backup_storage" value="{{ $price->backup_storage }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="takedown_discount">Takedown Discount:</label>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" id="takedown_discount" name="takedown_discount" value="{{ $price->takedown_discount }}">
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="https_delievery">Https Delievery:</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="https_delievery" id="https_delievery">
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                          </select>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="website_spy">Website Spy:</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="website_spy" id="website_spy">
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                          </select>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="verified_status">Verified Status:</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="verified_status" id="verified_status">
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                          </select>
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