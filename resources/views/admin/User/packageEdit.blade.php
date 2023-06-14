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
    <h3>Package Edit</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="" scope="col">Price</th>
                            <th class="" scope="col">Name</th>
                            <th class="" scope="col">Purchase date</th>
                            <th class="" scope="col">Status</th>
                            <th class="" scope="col">PDF</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->invoice_id}}</td>
                            <td>{{ $invoice->price }}</td>
                            <td>{{ $invoice->package_name }}</td>
                            <td>{{ Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</td>
                            <td>
                                <form action="{{ route('packagepaid',$invoice->unique_id)}}" method="post">
                                    @csrf
                                    <select name="payment_status">
                                        <option @if($invoice->payment_status == 'Awaiting payment') selected @endif value="Awaiting payment">Awaiting payment</option>
                                        <option @if($invoice->payment_status == 'Paid') selected @endif value="Paid">Paid</option>
                                    </select>
                                    <input type="submit" value="Submit" />
                                </form>
                            </td>
                            <td><a href="{{ $invoice->invoice_path }}" download="invoice.pdf">Download file</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <form action="{{ route('activatepackage',$id)}}" method="post">
                    @csrf
                    <div class="row pb-3">
                    	<div class="col-md-3">
                            <label for="name">Plans:</label>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" name="package_id" id="package_id">
                                <option>Select package</option>
                              <option @if($data->package_id == '3') selected @endif value="3">Basic/monthly</option>
                              <option @if($data->package_id == '1') selected @endif value="1" value="1">Business/Monthly</option>
                              <option @if($data->package_id == '2') selected @endif value="2" value="2">Professional/Monthly</option>
                              <option @if($data->package_id == '6') selected @endif value="6" value="6">Basic/Yearly</option>
                              <option @if($data->package_id == '4') selected @endif value="4" value="4">Business/Yearly</option>
                              <option @if($data->package_id == '5') selected @endif value="5" value="5">Professional/Yearly</option>
                          </select>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-3">
                            <label for="discount">Expiry Date:</label>
                        </div>
                        <div class="col-md-6">
        					<input type="date" class="form-control" id="package_expiry" name="package_expiry" value="{{ $data->package_expiry }}">
                        </div>
                    </div>
                    <div class=" offset-md-3">
                        <input class="ybtn ybtn-accent-color submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
