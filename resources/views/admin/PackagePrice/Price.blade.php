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
                            <th class="" scope="col">Plan</th>
                            <th class="" scope="col">Name</th>
                            <th class="" scope="col">Price</th>
                            <th class="" scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($price as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->plan }}</td>
                            <td>{{ $a->name }}</td>
                            @if($a->id == '7')
                            <td>{{ $a->regular_price }}</td>
                            @else
                            <td>{{ $a->price }}</td>
                            @endif
                            <td><a href="{{ route('editpricepage',$a->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        @endforeach                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection