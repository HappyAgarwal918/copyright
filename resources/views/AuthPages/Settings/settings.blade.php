@extends('layouts.master')
@section('css')
    <style type="text/css">
		.input-md {
		    width: 100% !important;
		    border-radius: 2px;
		    -moz-border-radius: 2px;
		    -webkit-border-radius: 2px;
		    transition: border-color 0.2s ease-in-out;
		    -moz-transition: border-color 0.2s ease-in-out;
		    -ms-transition: border-color 0.2s ease-in-out;
		    -webkit-transition: border-color 0.2s ease-in-out;
		    -o-transition: border-color 0.2s ease-in-out;
		    background-color: #fff;
		    border: 1px solid #ccc;
		    float: none;
		    height: 2.5rem;
		    line-height: 1.5rem;
		    padding: 0.5rem 0.5rem;
		}

		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 10%; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}
		.modalpass {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 10%; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  background-color: #fefefe;
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 80%;
		}

		/* The Close Button */
		.close {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		.closepass {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.closepass:hover,
		.closepass:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		a#myBtn {
		    cursor: pointer;
		    color: #0d6efd;
		}
		a#myBtnpass {
		    cursor: pointer;
		    color: #0d6efd;
		}
    </style>
@endsection
@section('content')

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Settings</div>
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
@if(Session::has('error_message'))
<div class="alert alert-danger">
{{ Session::get('error_message') }}
</div>
@endif
<div id="contact-info" class="container-fluid">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link active" href="#home"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
            </li>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link" href="#profile"><i class='fas fa-file-invoice-dollar'></i> Profile</a>
            </li>
            <li class="nav-item">
                <a data-toggle="tab" class="nav-link" href="#invoice"><i class='fas fa-file-invoice-dollar'></i> Invoices</a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active py-3" id="home">
                <div class="row pb-3">
                    <div class="col-lg-2">
                        <label for="email" class="col-form-label">Email</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" id="email" class="form-control" aria-describedby="passwordHelpInline" value="{{ Auth::user()->email }}" readonly>
						<span class="help"><a id="myBtn">Change email</a> - <a id="myBtnpass">Change password</a></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <label for="subscription" class="col-form-label">Subscription</label>
                    </div>
                    <div class="col-lg-4">
                        @if(is_null(Auth::user()->package_id))
							<h5>No membership plan</h5>
						@else
							<h5>{{ $package->name }} membership</h5>	
							<span class="help"><a href="">Details</a></span>
						@endif
                    </div>
                </div>
            </div>
            <div class="tab-pane fade py-3" id="profile">
                <div class="row">
                    <form action="{{ route('profile')}}" method="post">
						@csrf
						<fieldset class="grid">
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="first_name" class="col-form-label">First name <span class="required">*</span></label>
			                    </div>
			                    <div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_fname" maxlength="50" type="text" name="first_name" value="{{ Auth::user()->first_name}}">
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="last_name" class="col-form-label">Last name <span class="required">*</span></label>
			                    </div>
		                    	<div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_lname" maxlength="20" type="text" name="last_name" value="{{ Auth::user()->last_name}}">
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="company" class="col-form-label">Company name</label>
			                    </div>
			                    <div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_company" maxlength="50" type="text" name="company" value="{{ Auth::user()->company}}">
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="country" class="col-form-label">Country<span class="required">*</span></label>
			                    </div>
			                    <div class="col-lg-4">
									<select class="select input-md" id="input_edit_wizard_first_publication_country" name="country" value="">
										@if (is_null(Auth::user()->country))
										<option value="" selected="selected"></option>
										@else
										<option value="{{ Auth::user()->country}}" selected="selected">{{ $c_name->name }}</option>
										@endif
										@foreach ($users as $user)
										<option value="{{ $user->sortname }}">{{ $user->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="state" class="col-form-label">State/Province</label>
			                    </div>
			                    <div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_state" maxlength="50" type="text" name="state" value="{{ Auth::user()->state}}">
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="city" class="col-form-label">City</label>
			                    </div>
			                    <div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_city" maxlength="50" type="text" name="city" value="{{ Auth::user()->city}}">
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="address" class="col-form-label">Address</label>
			                    </div>
			                    <div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_address" maxlength="100" type="text" name="address" value="{{ Auth::user()->address}}">
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="zip" class="col-form-label">Zip/Postal code</label>
			                    </div>
			                    <div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_zip" maxlength="15" type="text" name="zip" value="{{ Auth::user()->zip}}">
								</div>
							</div>
							<div class="row pb-3">
								<div class="col-lg-2">
			                        <label for="phone" class="col-form-label">Phone</label>
			                    </div>
			                    <div class="col-lg-4">
									<input class="text input-md" id="input_edit_user_data_phone" maxlength="20" type="text" name="phone" value="{{ Auth::user()->phone}}">
								</div>
							</div>
							<div class="control actions offset-lg-2">
								<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Update">
							</div>
						</fieldset>
					</form>
                </div>                
            </div>
            <div class="tab-pane py-3" id="invoice">
            	<table id="restu_table" class="table dataTable table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="sorting" scope="col">Name</th>
                            <th class="sorting" scope="col">Status</th>
                            <th class="sorting" scope="col">Date</th>
                            <th class="sorting" scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>                                
                    	@foreach ($data as $value)
                        <tr>
                            <td><a href="{{ route('viewinvoice',[$value->id,$value->unique_id]) }}">{{ $value->name }} membership</a></td>
                            <td>@if( $value->payment_status == 'Paid')
							<span class="label paid">{{ $value->payment_status }}</span>
							@elseif( $value->payment_status == 'Awaiting payment')
							<span class="label">{{ $value->payment_status }}</span>
							@endif</td>
                            <td>{{ Carbon\Carbon::parse($value->created_at)->format('Y-m-d') }}</td>
                            <td>{{ $value->price }}</td>
                        </tr>
                    	@endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content email -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form action="{{route('emailupdate')}}" method="post">
		@csrf
		<fieldset class="grid">
			<div class="control" id="input_row_user_account_email">
				<label for="input_edit_user_account_email">	
					New email <span class="required">*</span>
				</label>
				<div class="field">
					<input class="text input-md" id="input_edit_user_account_email" maxlength="255" type="text" name="email" value="">
				</div>
			</div>
			<div class="control" id="input_row_user_account_password">
				<label for="input_edit_user_account_password">
					Confirm current password <span class="required">*</span>
				</label>
				<div class="field">
					<input class="text input-md" id="input_edit_user_account_password" max_length="128" type="password" name="old_password" value="">
				</div>
			</div>
			<div class="control actions">
				<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Save">
				<a class="cancel" href="{{ route('settings') }}">Cancel</a>
			</div>
		</fieldset>
		<input type="hidden" name="do_save_email" value="1">
	</form>
  </div>
</div>
<!-- The Modal -->
<div id="myModalpass" class="modalpass">
<!-- Modal content email -->
  	<div class="modal-content">
	  	<span class="closepass">&times;</span>
	  	<form action="{{ route('passwordupdate') }}" method="post">
			@csrf
			<fieldset class="grid">
				<div class="control" id="input_row_user_account_password">
					<label for="input_edit_user_account_password">
						New password <span class="required">*</span>
					</label>
					<div class="field">
						<input class="text input-md" id="input_edit_user_account_password" max_length="128" type="password" name="password" value="">
					</div>
				</div>
				<div class="control" id="input_row_user_account_password2">
					<label for="input_edit_user_account_password2">
						Confirm new password <span class="required">*</span>
					</label>
					<div class="field">
						<input class="text input-md" id="input_edit_user_account_password2" max_length="128" type="password" name="password_confirmation" value="">
					</div>
				</div>
				<div class="control" id="input_row_user_account_old_password">
					<label for="input_edit_user_account_old_password">
						Confirm current password <span class="required">*</span>
					</label>
					<div class="field">
						<input class="text input-md" id="input_edit_user_account_old_password" max_length="128" type="password" name="old_password" value="">
					</div>
				</div>			
				<div class="control actions">
					<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Save">
					<a class="cancel" href="{{ route('settings') }}">Cancel</a>
				</div>
			</fieldset>
			<input type="hidden" name="do_save_password" value="1">
		</form>
	</div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modalpass = document.getElementById("myModalpass");

// Get the button that opens the modal
var btn = document.getElementById("myBtnpass");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closepass")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modalpass.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modalpass.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalpass) {
    modalpass.style.display = "none";
  }
}
</script>
@endsection