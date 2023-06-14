<head>
	<link href="{{asset('asset/css/certificate.min.css')}}" rel="stylesheet" type="text/css" />
</head>

<div class="container website">
	<div class="frame">
		<div class="certificate">
			<div class="row">
				<div class="col-ms-12 col-md-3 col-xl-2 sidebar-column">
					<div class="sidebar">
						<a target="_blank" class="copyright-certificate" href="/">
							<span class="img"><img alt="@php echo url('') @endphp" width="200" height="40" src="{{asset('asset/images/certificate/Copyright_certificate.png')}}" /></span>
						</a>
						<div class="badge-new">
							<img src="{{ asset('asset/images/certificate/badgenew.png')}}" />
						</div>
						<div class="badge-mobile-new">
							<img src="{{ asset('asset/images/certificate/badgemobilenew.png')}}" />
						</div>
					</div>
				</div>
				<div class="col-ms-12 col-md-9 col-xl-10 content-column">
					<section class="content">
						<header class="header">
							<h2><span>Certificate</span> of registration</h2>
							<div class="ornament">
								<img width="1036" height="45" src="{{ asset('asset/images/certificate/ornament.png')}}" alt="" />
							</div>
							<h1>{{ $data->title }}</h1>
						</header>
						<article>
						<ul class="list-grid">
							<li>
								<div class="row">
									<div class="name">
										<span>Registration number</span>
									</div>
									<div class="value">
										<span>{{ $id }}</span>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="name">
										<span>Registration date</span>
									</div>
									<div class="value">
										<span>{{ Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</span>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="name">
										<span>Nature of work</span>
									</div>
									<div class="value">
										<span>{{ $data->type }}</span>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="name">
										<span>Description</span>
									</div>
									<div class="value description">
										<span>{{ $data->description }}</span>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="name">
										<span>Attached files</span>
									</div>
									<div class="value">
										<span class="files">{{ count($files) }}</span>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="name">
										<span>Work status</span>
									</div>
									<div class="value">
										<span class="status active">Active</span>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="name">
										<span>Account status</span>
									</div>
									<div class="value">
										<span class="status active">Verified</span>
										<img width="12" height="12" align="absmiddle" class="help-icon" alt="Verified account" src="{{ asset('asset/images/certificate/help.svg')}}" />
									</div>
								</div>
							</li>
							</ul>
							<p class="legal">
								All original content submitted along with this work registration is created by the work owner or published under permission including but not limited to text, design, code, images, photographs and videos are considered to be the Intellectual Property of the work owner and are protected by @php echo url('') @endphp using the Digital Millennium Copyright Act Title 17 Chapter 512 (c)(3). Reproduction or re-publication of this content is prohibited without permission.
							</p>
							<p class="regpro">
								Registered, Protected &amp; Monitored by <a target="_blank" href="/">@php echo url('') @endphp</a> &copy; 2021
							</p>
						</article>
					</section>
				</div>
			</div>
		</div>
	</div>
</div>