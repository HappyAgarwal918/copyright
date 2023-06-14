@extends('layouts.master')
@section('content')

<div id="header-holder" class="inner-header">
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Completion and publication</div>
                </div>
            </div>
        </div>
    </div>
</div>
@php $id = Request::segment(4); 
$data = DB::table('works')->where('unique_id',$id)->first(); @endphp
<div id="contact-info" class="container-fluid">
	<div class="container pb-5">
		<div class="progress" style="height: 25px;">
		  	<div class="progress-bar progress-bar-striped bg-primary progress-bar-animated" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
		</div>
	</div>
  	<div class="container">
    	<div class="panel-group">
      		<div class="panel panel-primary">
        		<form action="{{ route('limitation',$id)}}" method="post">
          		@csrf            
            		<div class="panel-body">
            			<input type="hidden" name="id" value="{{ $id }}">
            			<div class="form-group form_part">
	                		<label class="control-form-label col-sm-12 pb-2" for="completion_year">In what year was the work completed? <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<select class="form-control form_font" id="" name="completion_year">
									<option value="" selected="selected">Year</option>
									@php $years = DB::table('year')->orderBy('id','desc')->get() @endphp
									@foreach ($years as $year)
										<option value="{{ $year->year }}">{{ $year->year }}</option>
									@endforeach
								</select>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part">
                			<label class="control-form-label col-sm-12 pb-2" for="first_publication">Has this work been already published? <span class="required">*</span></label>
                			<div class="col-sm-12">
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="first_publication" id="first_publication1" value="1">
                    				<label class="form-check-label form_font" for="first_publication1">Yes, this work has been already distributed to the public.</label>
                  				</div>
                  				<div class="form-check">
                    				<input class="form-check-input" type="radio" name="first_publication" id="first_publication2" value="0">
                    				<label class="form-check-label form_font" for="first_publication2">No, this work has not yet been published.</label>
                  				</div>
                			</div>
              			</div>
              			<div class="form-group form_part first_publication1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="completion_year">When was this work first published? <span class="required">*</span></label>
	                		<div class="col-sm-6 d-flex">
	                			<select class="form-control form_font" id="" name="publication_month">
									<option value="" selected="selected">Month</option>
									@php $months = DB::table('month')->get() @endphp
									@foreach ($months as $month)
										<option value="{{ $month->id }}">{{ $month->months }}</option>
									@endforeach
								</select>
								<select class="form-control form_font" id="" name="publication_date">
									<option value="" selected="selected">Day</option>
									<option value="01">1</option>
									<option value="02">2</option>
									<option value="03">3</option>
									<option value="04">4</option>
									<option value="05">5</option>
									<option value="06">6</option>
									<option value="07">7</option>
									<option value="08">8</option>
									<option value="09">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
	                			<select class="form-control form_font" id="" name="publication_year">
									<option value="" selected="selected">Year</option>
									@foreach ($years as $year)
										<option value="{{ $year->year }}">{{ $year->year }}</option>
									@endforeach
								</select>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
	              		<div class="form-group form_part first_publication1-1 hidden">
	                		<label class="control-form-label col-sm-12 pb-2" for="first_publication_country">Where was this work published? <span class="required">*</span></label>
	                		<div class="col-sm-6">
	                			<select class="form-control form_font" id="" name="first_publication_country">
									<option value="" selected="selected">Select</option>
									@php $countries = DB::table('countries')->get() @endphp
									@foreach ($countries as $country)
									<option value="{{ $country->sortname }}">{{ $country->name }}</option>
									@endforeach
								</select>
	                		</div>
	                		@if(Session::has('error_message'))
							<div class="alert alert-danger">
							{{ Session::get('error_message') }}
							</div>
							@endif
	              		</div>
						<div class="control actions">
							<input class="ybtn ybtn-accent-color" type="submit" name="submit" value="Next">
							@if(isset($data->status) && $data->status == 'Incomplete')
								@if(isset($data->type) && $data->type == 'Digital-Content')
									<a class="button" href="{{ route('digital-content',$id)}}">Back</a>
								@elseif(isset($data->type) && $data->type == 'Literary-Works')
									<a class="button" href="{{ route('literary-works',$id)}}">Back</a>
								@elseif(isset($data->type) && $data->type == 'Motion-Pictures')
									<a class="button" href="{{ route('motion-pictures',$id)}}">Back</a>
								@elseif(isset($data->type) && $data->type == 'Performing-Arts')
									<a class="button" href="{{ route('performing-arts',$id)}}">Back</a>
								@elseif(isset($data->type) && $data->type == 'Photographs')
									<a class="button" href="{{ route('photographs',$id)}}">Back</a>
								@elseif(isset($data->type) && $data->type == 'Visual-Arts')
									<a class="button" href="{{ route('visual-arts',$id)}}">Back</a>
								@endif
							@else
							<a class="button" href="{{ route('overviewdetail',$id)}}">Back</a>
							@endif
						</div>
	            	</div>
	          	</form>
	      	</div>
	  	</div>
	</div>
</div>
@endsection