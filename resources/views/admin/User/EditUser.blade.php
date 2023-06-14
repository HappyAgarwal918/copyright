@extends('admin.layout')
@section('title') Legal Policies @endsection

@section('admincontent')
@if(Session::has('successful_message'))
<div class="alert alert-success">
{{ Session::get('successful_message') }}
</div>
@endif
<div class="row m-2">
  <div class="col-sm-12 text">
    <h3>{{ $data->email }}</h3>
  </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-body">
                <h3><b>Change Password</b></h3>
                <form method="POST" action="{{ route('useredited')}}">
                @csrf
                  <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label col-form-label-lg">{{ __('E-Mail Address') }}</label>
                    <div class="col-sm-9">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label col-form-label-lg">{{ __('New Password') }}</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password_confirmation" class="col-sm-3 col-form-label col-form-label-lg">{{ __('Confirm Password') }}</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                    <div class="form-group row  offset-md-3">
                        <input class="ybtn ybtn-accent-color submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection