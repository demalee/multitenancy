@extends('theme.political_theme.layouts.apps')

@section('content')



	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2  contenteditable="true">Contact Us</h2>
					<ul class="breadcrumb">
						<li><a href="#"  contenteditable="true">Home</a></li>
						<li  contenteditable="true">Contact Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end page header -->



	<!-- contact section start here -->
	<section class="contact-section section-bg-color">
		<div class="section-padding-140">
			<div class="container">
				<div class="contact-area">
					<div class="row justify-content-center">
						<div class="col-lg-4">
							<div class="contact-info">
								<h3  contenteditable="true">Contact Info</h3>
								<ul class="contact-info-list">
									<li>
										<div class="contact-info-item">
											<span class="icon"><i class="fa fa-map-marker"></i></span>
											<span class="text"  contenteditable="true">Wilson, North Koroline, USA</span>
										</div>
									</li>
									<li>
										<div class="contact-info-item">
											<span class="icon"><i class="fa fa-phone"></i></span>
											<span class="text"  contenteditable="true">0847 87443837 <br> 0847 87478373</span>
										</div>
									</li>
									<li>
										<div class="contact-info-item">
											<span class="icon"><i class="fa fa-envelope"></i></span>
											<span class="text"  contenteditable="true">contactinfo@yourmail.com <br> websiteinfo.com</span>
										</div>
									</li>
									<li>
										<div class="contact-info-item">
											<span class="icon"><i class="fa fa-envelope"></i></span>
											<span class="text"  contenteditable="true">websiteinfo.com</span>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="ccr-section">
								<h3 class="section-title"  contenteditable="true">Leave a Comment</h3>
								<div class="comment-response">
									<form action="#">
										<input type="text" class="name" name="name" placeholder="Name">
										<input type="text" class="email" name="E-mail" placeholder="E-mail">
										<input type="text" class="phone" name="phone" placeholder="Phone">
										<textarea name="massage" id="massage" placeholder="Massage"></textarea>
										<input type="submit" value="Submit">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- contact section ending here -->



	<!-- map section start here -->
	<div class="map-area map2">
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2357231582737!2d90.38435681543143!3d23.73897209512869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c71927841%3A0xde102c300beb3f0c!2sWebCode%20Institute!5e0!3m2!1sen!2sbd!4v1602061355944!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
	<!-- map section ending here -->




@endsection
