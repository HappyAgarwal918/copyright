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
    <h3>Takedown Package</h3>
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
                            <th class="" scope="col">Email</th>
                            <th class="" scope="col">Price</th>
                            <th class="" scope="col">Purchase date</th>
                            <th class="" scope="col">PDF</th>
                            <th class="" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $invoice)
                        <tr>
                            <td>{{ $invoice->invoice_id}}</td>
                            <td>{{ $invoice->email }}</td>
                            <td>{{ $invoice->price }}</td>
                            <td>{{ Carbon\Carbon::parse($invoice->created_at)->format('Y-m-d') }}</td>
                            <td><a href="{{ $invoice->invoice_path }}" download="invoice.pdf">Download file</a></td>
                            <td>
                                <form action="{{ route('statuspaid',$invoice->unique_id)}}" method="post">
                                    @csrf
                                    <select name="payment_status">
                                        <option @if($invoice->payment_status == 'Awaiting payment') selected @endif value="Awaiting payment">Awaiting payment</option>
                                        <option @if($invoice->payment_status == 'Paid') selected @endif value="Paid">Paid</option>
                                    </select>
                                    <input type="submit" value="Change" class="btn btn-sm btn-outline-primary" />
                                </form>
                            </td>                
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection