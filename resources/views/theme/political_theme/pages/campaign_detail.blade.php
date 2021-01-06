@extends('theme.political_theme.layouts.apps')


@section('content')


	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2>Election Campaign</h2>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li>Election Campaign</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end page header -->


	<!-- start main content area -->
	<section class="site-content campaign-detail-page section-bg-color section-padding-140">
		<div class="container">
			<div class="campaign-single">
				<img src="{{asset('theme/political/assets/images/campaign-detail/01.jpg')}}" alt="campaign" class="mb-3">
				<div class="row no-gutters">
					<div class="col-lg-6 my-3 pr-lg-3">
						<div class="campaign-info-list">
							<h5>Campaign Details</h5>
							<ul>
								<li><span class="info-head">Date</span>:<span class="info-desc">25 March, 2018</span></li>
								<li><span class="info-head">Time</span>:<span class="info-desc">10AM - 11AM</span></li>
								<li><span class="info-head">Address</span>:<span class="info-desc">New Elephant Road, Dhaka</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 my-3 pl-lg-3">
						<div class="campaign-info-list">
							<h5>Campaign Organizers</h5>
							<ul>
								<li><span class="info-head">Organizer</span>:<span class="info-desc">City neta Committee</span></li>
								<li><span class="info-head">Time</span>:<span class="info-desc">10AM - 11AM</span></li>
								<li><span class="info-head">Website</span>:<span class="info-desc">neta.com</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="election-campaign mt-3">
					<h3>Election Campaign</h3>
					<p>Globally transition customer directed processes with integrated mindshare. Energistically synergize robust catalysts for change vis-a-vis global deliverables. Continually matrix alternative infomediaries without sticky technologies. Rapidiously simplify bandwidth whereas principle centered experience. Distinctively reinvent multifunctional schemas before adaptive methodologies.</p>
					<p>Seamlessly network e-business core competencies whereas robust supply chains. Credib create stand alone alignments after distinctive systems. Objective orchestrate client centric through visionary customer service. Dramatically harness functional content vis tactical leadership skills. Enthusiastical seize cooperative communities rather than optimal web-readiness.</p>
					<p>Seamlessly network e-business core competencies whereas robust supply chains. Credib create stand alone alignments after distinctive systems. Objective orchestrate client centric through visionary customer service. Dramatically harness functional content vis tactical leadership skills. Enthusiastical seize cooperative communities rather than optimal web-readiness.</p>
				</div>
				<div class="map-area">
					<h5>View Campaign Location on Google Map</h5>
					<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2357231582737!2d90.38435681543143!3d23.73897209512869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c71927841%3A0xde102c300beb3f0c!2sWebCode%20Institute!5e0!3m2!1sen!2sbd!4v1602061355944!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end main content area -->


	<!-- start footer section -->
@endsection
