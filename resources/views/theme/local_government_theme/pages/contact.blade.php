@extends('theme.local_government_theme.layouts.app')

@section('content')
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2 contenteditable="true">Contact Us</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item" contenteditable="true"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active" contenteditable="true">Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->

			<!-- CITY EVENT2 WRAP START-->
			<div class="city_blog2_wrap team">
				<div class="container">
					<div class="city_contact_map">
						<div id="map-canvas" class="map-canvas"></div>
					</div>
					<div class="city_contact_row">
						<div class="city_contact_list">
							<div class="row">
								<div class="col-md-6">
									<div class="city_contact_text">
										<h3 contenteditable="true">Comments, <br>Compliments and <br>Complaints</h3>
										<span><i class="fa icon-comment-1"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="city_contact_text">
										<h3 contenteditable="true">Contact with <br>us About our<br>Services</h3>
										<span><i class="fa icon-agenda"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="city_contact_text">
										<h3 contenteditable="true">Take A Part As <br>Consultant & <br>Voluntree</h3>
										<span><i class="fa icon-help"></i></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="city_contact_text text2">
										<h3 contenteditable="true">Fellow Us on Social Media </h3>
										<div class="city_top_social">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
												<li><a href="#"><i class="fa fa-google"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="city_event_detail contact">
							<div class="section_heading center">
								<span contenteditable="true">Goverment</span>
								<h2 contenteditable="true">Contact With Us</h2>
							</div>
							<div class="event_booking_form">
								<div class="row">
									<div class="col-md-6">
										<div class="event_booking_field">
											<input type="text" placeholder="Name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="event_booking_field">
											<input type="text" placeholder="Email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="event_booking_field">
											<select class="small">
												<option data-display="Please select the service you require ">Please select the service you require </option>
												<option value="1">All Event 1</option>
												<option value="2">All Event 2</option>
												<option value="4">All Event 3</option>
												<option value="4">All Event 4</option>
												<option value="4">All Event 5</option>
												<option value="4">All Event 6</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="event_booking_field">
											<input type="text" placeholder="Subject">
										</div>
									</div>
									<div class="col-md-12">
										<div class="event_booking_area">
											<textarea>Enter Your Message Here</textarea>
										</div>
										<a class="theam_btn btn2" href="#">Submit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->

			<!--CITY REQUEST WRAP START-->

			<!--CITY REQUEST WRAP END-->
@endsection
