@extends('theme/netaji/layouts.app')
@section('content')

		<!-- breadcrumb-area-start -->
		<div class="breadcrumb-area pt-250 pb-250" style="background-image:url(img/bg/8.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="breadcrumb-text text-center">
							<h1>Donation Details</h1>
							<ul class="breadcrumb-menu">
								<li><a href="{{url('home')}}" contenteditable="true">home</a></li>
								<li><span contenteditable="true">Donation Details</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumb-area-end -->

		<!-- donation-details-area-start -->
		<div class="donation-details-area pt-120 pb-120">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="donation-details-wrapper">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8">
									<div class="donation-details-img">
										<img src="img/donation/donation-details/1.jpg" alt="" />
									</div>
									<div class="donation-details-text">
										<h2 contenteditable="true">Why You Donate For Study</h2>
										<p contenteditable="true">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore magnam aliquam quaerat voluptatem.</p>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4">
									<div class="donation-details-info">
									 <h1 contenteditable="true">Charity For Study</h1>
									 <p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing plsure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth the master-builder.</p>
									 <div class="donation2-details-img">
										<img src="img/donation/donation-details/2.jpg" alt="" />
									</div>
									</div>
								</div>
							</div>
							<div class="donation-details1-img">
								<img src="img/donation/donation-details/3.jpg" alt="" />
							</div>
							<div class="donation-details-content">
								<p contenteditable="true">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
								<a class="btn" href="#" data-toggle="modal" data-target="#donateModal">donate now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- donation-details-area-end -->

		<!-- footer-area-start -->
@endsection
