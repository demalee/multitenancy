@extends('theme/netaji/layouts.app')
@section('content')

		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-250 pb-250" style="background-image:url(theme/netaji/img/bg/8.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>FAQ</h1>
							<ul class="breadcrumb-menu">
								<li><a href="{{url('home')}}">home</a></li>
								<li><span>FAQ</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area-end -->

		<!-- frequently-ask-area-start -->
		<div class="frequently-ask-area pt-110 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 d-md-none d-lg-block">
						<div class="frequently2-img mb-30">
							<img src="{{asset('theme/netaji/img/faq/1.png')}}" alt="" />
						</div>
					</div>
					<div class="col-xl-8 col-lg-8 mb-30">
						<div class="question-collapse mb-90">
							<div class="faq-text">
								<h1 contenteditable="true">Why You Can Join Our Team</h1>
							</div>
							<div id="accordion">
								<div class="card">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
											<a class="btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" contenteditable="true">
												Building A Central Logging Service In-House
											</a>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" contenteditable="true">
												Lessons Learned While Developing WordPress Plugins
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" contenteditable="true">
												Creating The Feature Queries Manager DevTools Extension
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" contenteditable="true">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingFour">
										<h5 class="mb-0">
											<a class="btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" contenteditable="true">
												Diverse Design Teams To Drive Innovation
											</a>
										</h5>
									</div>
									<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="question-collapse mb-90">
							<div class="faq-text">
								<h1 contenteditable="true">Why You Donate Us</h1>
							</div>
							<div id="accordion1">
								<div class="card">
									<div class="card-header" id="heading1">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
												Building A Central Logging Service In-House
											</a>
										</h5>
									</div>

									<div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="heading2">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
												Lessons Learned While Developing WordPress Plugins
											</a>
										</h5>
									</div>
									<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="heading3">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
												Creating The Feature Queries Manager DevTools Extension
											</a>
										</h5>
									</div>
									<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="heading4">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
												Diverse Design Teams To Drive Innovation
											</a>
										</h5>
									</div>
									<div id="collapse4" class="collapse" aria-labelledby="headingFour" data-parent="#accordion1">
										<div class="card-body" contenteditable="true">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="question-collapse">
							<div class="faq-text">
								<h1 contenteditable="true">What We Do For You</h1>
							</div>
							<div id="accordion2">
								<div class="card">
									<div class="card-header" id="heading5">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
												Building A Central Logging Service In-House
											</a>
										</h5>
									</div>

									<div id="collapse5" class="collapse show" aria-labelledby="heading5" data-parent="#accordion2">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="heading6">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
												Lessons Learned While Developing WordPress Plugins
											</a>
										</h5>
									</div>
									<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion2">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="heading7">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
												Creating The Feature Queries Manager DevTools Extension
											</a>
										</h5>
									</div>
									<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion2">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="heading8">
										<h5 class="mb-0">
											<a contenteditable="true" class="btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
												Diverse Design Teams To Drive Innovation
											</a>
										</h5>
									</div>
									<div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion2">
										<div class="card-body">
											<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and prai- sing pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder of human happiness. No one rejects dislikes, or avoids pleasure itse.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- frequently-ask-area-end -->

		<!-- volunteer-area-start -->
		<div class="volunteer-area volunteer3-circle pt-90 pb-100 gray-bg">
			<div class="row no-gutters">
				<div class="col-xl-6 col-lg-6 offset-lg-3 offset-xl-3">
					<div class="volunteer-text volunteer2-text volunteer3-text volunteer4-text text-center">
						<h1 contenteditable="true">Become a Volunteer</h1>
						<p contenteditable="true">But I must explain to you how all this mistaken idea of denople asure and praising pain was born and I willcomplete.</p>
						<a class="btn" href="#">join volunteer</a>
					</div>
				</div>
			</div>
		</div>
		<!-- volunteer-area-start -->

@endsection
