@extends('layouts.master')
@section('content')

@php
	$url = DB::table('website')->where('method', $uniqid)->first();
	$badge = DB::table('badges')->get();
@endphp

<div id="header-holder" class="inner-header">
	<div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Website Badges - {{ $url->Url }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
	<div class="container">
		<ul class="nav nav-tabs">
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websites-view',$url->method)}}"><i class="fa fa-cog" aria-hidden="true"></i> Website overview</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link active" href="{{ route('websitebadge',$url->method)}}"><i class="fas fa-certificate"></i> Badge</a>
	        </li>
	        <li class="nav-item">
	            <a class="nav-link" href="{{ route('websitepages',$url->method)}}"><i class='fas fa-file-invoice-dollar'></i> Pages</a>
	        </li>
	    </ul>
	</div>
	<div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Badge installation instructions</h3>
                <div class="line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                <ol>
                    <li>Select your preferred badge image .</li>
                    <li> Copy the html code .</li>
                    <li>Paste ths code onto your website to display your RPM badge ( Registered , Protected , Monitored
                        ) .
                    </li>
                    <li>Click on your badge to verify that it works and view registration certificate .</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Protection badge</h3>
                <div class="line"></div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row text-center">
            	@foreach($badge as $badges)
                <div class="col-lg-3 col-md-6 col-xs-12 p-3 border">
                	<div class="img curr_img" data-id="{{$badges->id}}" id="img_{{$badges->id}}">
						<img srcset="{{ $badges->badge }}" src="{{ $badges->badge }}">
					</div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 badge-data">
            	<div>
                	<p>Badge preview</p>
                	<p><img src="{{ $badges->badge }}" alt=""></p>
                </div>
                <p>Copy this code to your website to display the badge</p>
                <div class="field code mt-3 p-3" style="width: 100%; background-color: #f2f2fd; border: 1px solid">
                <pre class="tag scrollable no-break"><code>&lt;a class="copyright-badge" title="@php echo url('') @endphp Registered &amp;amp; Protected" target="_blank" href="@php echo url('') @endphp"&gt;&lt;img alt="@php echo url('') @endphp Registered &amp;amp; Protected" border="0" width="125" height="25" srcset="{{ $badges->badge }} 2x" src="{{ $badges->badge }}" /&gt;&lt;/a&gt;</code></pre>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <h3>Why should i display the badge ?</h3>
                <div class="line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <p>You should provide evidence of your copyright on all public displays of your original creations so that nobody can claim they thought your creation was part of the public domain.The public domain consists of original creations available "copyright free" to the whole public. Copyright infringers often claim the public domain defense, and can be let off the hook if no public display was with your original creations defining your copyright.</p>
				<p>By displaying the RPM badge which points to your registration certificate you provide evidence of your copyright.The badge helps prevent copyright infringement as it shows that you have taken steps to protect your creations.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
	$(document).on('click','.curr_img',function(){
		$(".img").removeClass("selected");
		var id = $(this).attr('data-id');
		$("#img_"+id).addClass("selected");
		// console.log(id);
		$.ajax({
			url: "{{ route('selectwebsitebadge')}}",
			method: "GET",
			data: {id: id},success(data){
				var html = '<p>Badge preview</p>\n\
							<div class="field preview">\n\
								<p><img src="'+data.badge+'" alt=""></p>\n\
							</div>\n\
							<label>Copy this code to your website to display the badge</label>\n\
							<div class="field code mt-3 p-3 col-12" style="width: 100%; background-color: #f2f2fd; border: 1px solid">\n\
								<pre class="tag scrollable no-break"><code>&lt;a class="copyright-badge" title="@php echo url('') @endphp Registered &amp;amp; Protected" target="_blank" href="@php echo url('') @endphp"&gt;&lt;img alt="@php echo url('') @endphp Registered &amp;amp; Protected" border="0" width="125" height="25" srcset="'+data.badge+' 2x" src="'+data.badge+'" /&gt;&lt;/a&gt;</code>\n\
							</div>';
							$(".badge-data").html('');
							$(".badge-data").html(html);
			}
		})
	});
</script>
@endsection