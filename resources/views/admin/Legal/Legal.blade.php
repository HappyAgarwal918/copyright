@extends('admin.Dashboard.Dashboard')

@section('admincontent')

<?php $users = DB::table('legal')->where('id' , 1)->first(); ?>

<div class="dashboard_txt1">
    <h3>Legal</h3>
</div>
 
<div class="dashboard_txt2">
    <h1></h1>
    <p><?php echo $users->legal; ?></p>
</div>
<a href="{{ url('/editlegal'.'?id='.$users->id) }}" class="btn btn-success btn-sm">Edit</a>
@endsection