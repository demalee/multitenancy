@extends('theme/netaji/layouts.app')
@section('content')

		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-250 pb-250" style="background-image:url(img/bg/8.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>Issue Details</h1>
							<ul class="breadcrumb-menu">
								<li><a href="index-2.html">home</a></li>
								<li><span>Issue Details</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area-end -->

		<!-- issue-details-area-start -->
		<div class="issue-details-area pt-120 pb-80 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 mb-30">
						<div class="issue-details-img mb-60">
							<img src="img/project/project-details/1.jpg" alt="" />
						</div>
						<div class="issue-details-img">
							<img src="img/project/project-details/2.jpg" alt="" />
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 mb-30">
						<div class="issue-details-wrapper">
							<div class="issue-details-text">
								<h2>Fast UX Research An Easier Way To Engage Stakeholders.</h2>
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teacings of the great explorer of the truth.</p>
								<p>The mter-builder human happiness. No one rejects dislikes or avoids pleasure itself cause it is pleasure but because those who do not know how to pursue pleasure.</p>
							</div>
							<div class="issues-icon">
								<span>Share Issue</span>
							   <a href="#"><i class="fab fa-facebook-f"></i></a>
							   <a href="#"><i class="fab fa-twitter"></i></a>
							   <a href="#"><i class="fab fa-google-plus-g"></i></a>
							   <a href="#"><i class="fab fa-instagram"></i></a>
							   <a href="#"><i class="fab fa-dribbble"></i></a>
						   </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- issue-details-area-end -->

		<!-- issue-area-start -->
		<div class="issue-area pb-90 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="issue-title text-center mb-60">
							<h1>Related Issue</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6">
						<div class="issue-wrapper mb-30">
							<div class="issue-img">
								<a href="#"><img src="img/project/project2/10.jpg" alt="" /></a>
							</div>
							<div class="issue-text">
								<span>Meeting</span>
								<h3><a href="#">Political Conference</a></h3>
								<div class="issue-icon">
									<a class="popup-image" href="img/project/project2/10.jpg"><i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6">
						<div class="issue-wrapper mb-30">
							<div class="issue-img">
								<a href="#"><img src="img/project/project2/11.jpg" alt="" /></a>
							</div>
							<div class="issue-text">
								<span>Education</span>
								<h3><a href="#">Importance Of Women</a></h3>
								<div class="issue-icon">
									<a class="popup-image" href="img/project/project2/11.jpg"><i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6">
						<div class="issue-wrapper mb-30">
							<div class="issue-img">
								<a href="#"><img src="img/project/project2/12.jpg" alt="" /></a>
							</div>
							<div class="issue-text">
								<span>Meeting</span>
								<h3><a href="#">Political Campaign</a></h3>
								<div class="issue-icon">
									<a class="popup-image" href="img/project/project2/12.jpg"><i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- issue-area-end -->

@endsection
