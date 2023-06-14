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
                <form action="{{ route('logoupload')}}" method="POST" enctype="multipart/form-data">
                    @csrf                   
                    <div>
                        <label for="featured_image"><b>Change Logo</b></label>
                        <input type="file" id="featured_image" name="featured_image" class="form-control" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="ybtn ybtn-accent-color">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <h5><b>Address</b></h5>
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="" scope="col">ID</th>
                            <th class="" scope="col">Company Name</th>
                            <th class="" scope="col">Address</th>
                            <th class="" scope="col">Zip</th>
                            <th class="" scope="col">Country</th>
                            <th class="" scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $address = DB::table('address')
                            ->where('id', 1)->first();
                        @endphp
                        <tr>
                            <td>{{ $address->id }}</td>
                            <td>{{ $address->seller_company_name }}</td>
                            <td>{{ $address->seller_address }}</td>
                            <td>{{ $address->seller_zip }}</td>
                            <td>{{ $address->seller_country }}</td>
                            <td><a href="{{ route('comp_address') }}" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection