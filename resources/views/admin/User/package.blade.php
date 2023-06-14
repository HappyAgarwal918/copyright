@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')

<div class="row m-2">
  <div class="col-md-12 text">
    <h3>Users Subscription</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <table id="restu_table" class="table table-striped restu_table" style="width:100%">
                    <thead>
                        <tr>
                            <th class="col-md-1" scope="col">ID</th>
                            <th class="col-md-5" scope="col">Email ID</th>
                            <th class="col-md-2" scope="col">Current Plan</th>
                            <th class="col-md-3" scope="col">Expiry Date</th>
                            <th class="col-md-1" scope="col">Package</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->userid }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->name }}/{{ $user->plan }}</td>
                            <td>{{ $user->package_expiry }}</td>
                            <td><a href="{{route('editpackage',$user->userid)}}" class="btn btn-primary btn-sm">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection