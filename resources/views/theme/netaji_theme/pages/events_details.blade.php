@extends('theme.netaji_theme.layouts.apps')
@section('content')

		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-250 pb-250" style="background-image:url(theme/netaji/img/bg/8.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>Events details</h1>
							<ul class="breadcrumb-menu">
								<li><a href="{{url('home')}}">home</a></li>
								<li><span contenteditable="true">Events details</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area-end -->

		<!-- events-deatils-area-start -->
		<div class="events-deatils-area pt-120 pb-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="event-details-img">
							<img src="{{asset('theme/netaji/img/event/events-details/1.jpg')}}" alt="" />
						</div>
						<div class="events-deatils-meta">
							<span contenteditable="true"><i class="fas fa-calendar-alt" ></i> 05 January 2018</span>
							<span contenteditable="true"><i class="far fa-clock"></i> 10:30 am - 12:00 pm</span>
							<span contenteditable="true"><i class="far fa-map"></i> 368 Sarah Drive, Lafayette, LA 70506</span>
						</div>
						<div class="row mb-30">
							<div class="col-xl-4 col-lg-4 cl-md-4">
								<div class="event-details-text mb-20">
									<h2 contenteditable="true">Keeping Nodejs Fast Tools Techniques And TipMaking High Performance.</h2>
								</div>
							</div>
							<div class="col-xl-8 col-lg-8 cl-md-8">
								<div class="event-details-info mb-20">
									<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound thactual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects dislikes or avoids pleasure itself because.</p>
									<p contenteditable="true">There are must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound thactual teachings of the great explorer of the truth.</p>
								</div>
							</div>
						</div>
						<div class="row mb-10">
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="event-details-img mb-20">
									<img src="{{asset('theme/netaji/img/event/events-details/2.jpg')}}" alt="" />
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="event-details-img mb-20">
									<img src="{{asset('theme/netaji/img/event/events-details/3.jpg')}}" alt="" />
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6">
								<div class="event-details-img mb-20">
									<img src="{{asset('theme/netaji/img/event/events-details/4.jpg')}}" alt="" />
								</div>
							</div>
						</div>
						<div class="events2-details-info">
							<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences or one who avoids a pain that produces no resultant pleasure.</p>
						</div>
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="events2-details-button">
									<a class="btn" href="#"> prev event</a>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6">
								<div class="events2-details-button text-md-right">
									<a class="btn" href="#">next event</a>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- events-deatils-area-end -->

		<!-- footer-area-start -->
@endsection
