@extends('layouts.master')
@section('css')
<style type="text/css">
@media(min-width: 540px){
    .position{
        position: absolute !important;
    }   
}
.position{
    z-index: 99;
    width: 178px;
}
</style>
@endsection
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">My takedowns</div>
                </div>
            </div>
        </div>
    </div>
</div>
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
            @if(count($data) == 0)
            <div class="plugin-copyrights app manage works-files-manage">
                <h2>No registered Takedown yet</h2>
                <div class="over_view_underline"></div>
                <div class="mt-3"><p>Looks like you didn't add any Takedown yet.<a href="{{route('takedownindex',$id)}}">Register your Takedown</a> now to get started or <a href="{{route('professional-takedowns')}}">learn more</a> about how it works.</p></div>
            </div>
            @else
            <a href="{{route('takedownindex',$id)}}" class="ybtn ybtn-accent-color position">New takedown</a>
            <table id="restu_table" class="display">
                <thead>
                    <tr>
                        <th>Case number</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $takedown)
                    <tr>
                        <td>
                            <span class="name"><a href="{{ route('takedownview',$takedown->takedown_id)}}">Case #{{ $takedown->takedown_id }}</a><br></span>
                            @if($takedown->source_online == 'Yes')
                            <span class="url">{{ $takedown->website_url }}</span>
                            @elseif($takedown->source_online == 'No')
                            <span class="url">{{ $takedown->website_name }}</span>
                            @endif
                        </td>
                        <td><span class="takedown status">{{ $takedown->status }}</span></td>
                        <td><span>{{ Carbon\Carbon::parse($takedown->created_at)->format('Y-m-d') }}</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection
    