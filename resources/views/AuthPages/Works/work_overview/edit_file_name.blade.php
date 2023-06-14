@extends('layouts.master')
@section('content')
@php $id = Request::segment(4); @endphp
<div class="header-lower">
	<div class="container">
		<div class="row">
			<div class="col-ms-12">
				<h1>Edit file</h1>
			</div>
		</div>
	</div>
</div>
<section id="container">
	<div class="container">
		<div class="row">
			<section id="content" class="col-ms-12">				
				<section class="plugin-copyrights app register files file">
					<form action="{{ route('savenewfilename',[$data->id,$id])}}" method="post">
						@csrf
						<fieldset>
							<div class="control" id="control_edit_wizard_name">
								<label for="input_edit_wizard_name">File name</label>
								<div class="field">					
									<input class="text input-md" id="input_edit_wizard_name" maxlength="200" type="text" name="file_name" value="{{ $data->file_name }}">
								</div>
							</div>
							<div class="control actions">
								<input class="button submit " type="submit" name="submit" value="Save">
								<a class="cancel" href="{{ route('fileview',[$data->id,$id])}}">Back</a>
							</div>
						</fieldset>
						<input type="hidden" name="do_wizard" value="1">
					</form>
				</section>	
			</section>
		</div>
	</div>
</section>
@endsection