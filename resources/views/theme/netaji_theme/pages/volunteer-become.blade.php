@extends('theme/netaji/layouts.app')
@section('content')

		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-250 pb-250" style="background-image:url(img/bg/8.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>Become a Volunteer</h1>
							<ul class="breadcrumb-menu">
								<li><a href="index-2.html">home</a></li>
								<li><span>Become a Volunteer</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area-end -->

		<!-- become-volunteer-area-start -->
		<div class="become-volunteer-area pt-115">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-5 col-md-5">
						<div class="become-volunteer-img pt-15">
							<img src="img/bg/1.png" alt="" />
						</div>
					</div>
					<div class="col-xl-6 col-lg-7 col-md-7">
						<div class="become-volunteer-wrapper pb-100">
							<div class="become-volunteer-text">
								<h1>Become a Volunteer</h1>
								<p>But I must explain to you how all this mistaken denouncing pleasure praising pain was born and I will give you a complete account of the system and expound the actua.</p>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<form action="http://bdevs.net/netaji/assets/mail.php" id="volunteer-form">
										<div class="row">
											<div class="col-xl-12">
												<input name="name" placeholder="First Name :" type="text">
											</div>
											<div class="col-xl-12">
												<input name="name" placeholder="Last Name :" type="text">
											</div>
											<div class="col-xl-12">
												<input name="email" placeholder="Your Email :" type="email">
											</div>
											<div class="col-md-12">
												<textarea name="message" cols="30" rows="10" placeholder="Message :"></textarea>
												<button class="btn" type="submit">Join our team</button>
											</div>
										</div>
										<p class="ajax-response"></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- become-volunteer-area-end -->

		<!-- footer-area-start -->
@endsection
