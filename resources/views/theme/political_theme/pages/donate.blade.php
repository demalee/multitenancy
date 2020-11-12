@extends('theme.political_theme.layouts.app')

@section('content')
	<!-- End Header -->



	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2>Donate</h2>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end page header -->




	<!-- start main content area -->
	<section class="site-content donate-page section-padding-140">
		<div class="container">
			<div class="donate-details-area">
				<div class="donate-details-header">
					<p>Please Complete Your Secure Donation for this Cause. If you feel any question please contact with us Call: <span>+880 1234 567890</span> or Email: <span>contact@yourmail.com</span></p>
				</div>
				<div class="ddc-content-wrapper">
					<div class="section-head">
						<h2>Donate Here for This Causes</h2>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="donate-amount">
								<h5>Donate Now</h5>
								<label class="amount"><strong>30</strong> USD</label>
								<label class="amount"><strong>50</strong> USD</label>
								<label class="amount"><strong>70</strong> USD</label>
								<label class="amount"><strong>90</strong> USD</label>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="donate-amount">
								<h5>Your Donation</h5>
								<select name="monthly silection">
									<option value="month">Monthly</option>
									<option value="month1">January</option>
									<option value="month">February</option>
									<option value="month">March</option>
									<option value="month">April</option>
									<option value="month">May</option>
									<option value="month">June</option>
									<option value="month">July</option>
									<option value="month">August</option>
									<option value="month">September</option>
									<option value="month">October</option>
									<option value="month">November</option>
									<option value="month">December</option>
								</select>
								<form action="#">
									<input type="text" name="doller" placeholder="$10">
								</form>
							</div>
						</div>
						<div class="col-12">
							<div class="payment-info">
								<h5>Payment Info</h5>

								<form action="#">
									<div class="row">
										<div class="col-md-6">
											<input type="text" name="first-name" placeholder="First Name:">
										</div>
										<div class="col-md-6">
											<input type="text" name="last-name" placeholder="Last Name:">
										</div>
										<div class="col-md-6">
											<input type="text" name="e-mail" placeholder="E-mail:">
										</div>
										<div class="col-md-6">
											<input type="text" name="phone" placeholder="Phone:">
										</div>
									</div>
									<div class="col-md-12">
										<div class="row">
											<select name="payment-method">
												<option value="payment">Select Payment Method</option>
												<option value="payment-m-1">Paypal</option>
												<option value="payment-m-1">Money Bookers</option>
												<option value="payment-m-1">Netteler</option>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="row">
											<a href="#" class="submit button-shadow">Donation</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end main content area -->



@endsection
