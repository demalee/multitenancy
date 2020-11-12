
@extends('theme.local_government_theme.layouts.app')


@section('content')

			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>City Mayor</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">City Mayor</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->

			<!-- CITY EVENT2 WRAP START-->
			<div class="city_event2_wrap">
				<div class="container">
					<div class="city_mayor_row">
						<div class="city_mayor_fig">
							<figure>
								<img src="{{asset('theme/local/extra-images/mayor-fig.jpg')}}" alt="">
							</figure>
							<div class="city_mayor_text">
								<h2>Bob Westbrook</h2>
								<p>City Mayor</p>
								<ul class="city_mayor_list">
									<li><span>Company</span>IdeasArt</li>
									<li><span>Phone</span>1234-567-8910</li>
									<li><span>Email Address</span>yourname@domain.com</li>
									<li><span>Location</span>California.USA</li>
									<li><span>Age</span>45 Years</li>
									<li><span>Adresss</span>Walking Street, 39531, New Yourk, United States</li>
								</ul>
								<div class="city_mayor_contact">
									<a class="theam_btn" href="#" tabindex="0">CONTACT US</a>
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
						<div class="city_mayor_caption">
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. </p>
							<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. velit mauris egestas quam, ut aliquam .Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo</p>
						</div>
					</div>
					<div class="city_event_detail question overlay">
						<h3>DID’T FIND YET? ASK YOUR QUESTION</h3>
						<div class="event_booking_form">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="event_booking_field">
										<input type="text" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="event_booking_field">
										<input type="text" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="event_booking_field">
										<input type="text" placeholder="Phone">
									</div>
								</div>
								<div class="col-md-12">
									<div class="event_booking_area">
										<textarea>Comments</textarea>
										<a class="theam_btn btn2" href="#">Submit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mayor_team">
						<div class="section_heading center">
							<span>Goverment</span>
							<h2>Related Memeber</h2>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="city_team_fig">
								<figure class="overlay">
									<img src="{{asset('theme/local/extra-images/mayor_team.jpg')}}" alt="">
									<div class="city_top_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										</ul>
									</div>
								</figure>
								<div class="city_team_text">
									<h4><a href="#">Steve Anderson</a></h4>
									<p>City Mayor</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="city_team_fig">
								<figure class="overlay">
									<img src="{{asset('theme/local/extra-images/mayor_team1.jpg')}}" alt="">
									<div class="city_top_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										</ul>
									</div>
								</figure>
								<div class="city_team_text">
									<h4><a href="#">Jen Ford</a></h4>
									<p>City Mayor</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="city_team_fig">
								<figure class="overlay">
									<img src="{{asset('theme/local/extra-images/mayor_team2.jpg')}}" alt="">
									<div class="city_top_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>
										</ul>
									</div>
								</figure>
								<div class="city_team_text">
									<h4><a href="#">Sebastien Proulx</a></h4>
									<p>City Mayor</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->

			<!--CITY REQUEST WRAP START-->
			<div class="city_requset_wrap requst02">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="city_request_list">
								<div class="city_request_row">
									<span><i class="fa icon-question"></i></span>
									<div class="city_request_text">
										<span>Recent</span>
										<h4>Top Request</h4>
									</div>
								</div>
								<div class="city_request_link">
									<ul>
										<li><a href="#">Pay a Parking Ticket</a></li>
										<li><a href="#">Building Violation</a></li>
										<li><a href="#">Affordable Housing</a></li>
										<li><a href="#">Graffiti Removal</a></li>
										<li><a href="#">Civil Service Exams</a></li>
										<li><a href="#">Rodent Baiting</a></li>
										<li class="margin0"><a href="#">Cleaning</a></li>
										<li class="margin0"><a href="#">Uncleared Sidewalk</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="city_request_list">
								<div class="city_request_row">
									<span><i class="fa icon-shout"></i></span>
									<div class="city_request_text">
										<span>Recent</span>
										<h4>Announcement</h4>
									</div>
								</div>
								<div class="city_request_link">
									<ul>
										<li><a href="#">Pay a Parking Ticket</a></li>
										<li><a href="#">Building Violation</a></li>
										<li><a href="#">Affordable Housing</a></li>
										<li><a href="#">Graffiti Removal</a></li>
										<li><a href="#">Civil Service Exams</a></li>
										<li><a href="#">Rodent Baiting</a></li>
										<li class="margin0"><a href="#">Cleaning</a></li>
										<li class="margin0"><a href="#">Uncleared Sidewalk</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--CITY REQUEST WRAP END-->
@endsection
