@extends('theme.political_theme.layouts.apps')

@section('content')
	<!-- End Header -->



	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2  contenteditable="true">Gallery 2 Collumn</h2>
					<ul class="breadcrumb">
						<li  contenteditable="true"><a href="#">Home</a></li>
						<li  contenteditable="true">Gallery 2 Collumn</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end page header -->




	<!-- start main content area -->
	<div class="site-content gallery-columns-2 section-bg-color section-padding-140">
		<div class="container">
			<div class="section-wrapper">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="gallery-item">
							<div class="gallery-item-inner">
								<div class="gallery-thumb">
									<a  href="{{asset('theme/political/assets/images/gallery/big-thumb/01.jpg')}}" data-rel="lightcase"><img src="{{asset('theme/political/assets/images/gallery/big-thumb/01.jpg')}}" alt="gallery thumb"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="gallery-item">
							<div class="gallery-item-inner">
								<div class="gallery-thumb">
									<a href="{{asset('theme/political/assets/images/gallery/big-thumb/02.jpg')}}" data-rel="lightcase"><img src="{{asset('theme/political/assets/images/gallery/big-thumb/02.jpg')}}" alt="gallery thumb"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="gallery-item">
							<div class="gallery-item-inner">
								<div class="gallery-thumb">
									<a href="{{asset('theme/political/assets/images/gallery/big-thumb/03.jpg')}}" data-rel="lightcase"><img src="{{asset('theme/political/assets/images/gallery/big-thumb/03.jpg')}}" alt="gallery thumb"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="gallery-item">
							<div class="gallery-item-inner">
								<div class="gallery-thumb">
									<a href="{{asset('theme/political/assets/images/gallery/big-thumb/05.jpg')}}" data-rel="lightcase"><img src="{{asset('theme/political/assets/images/gallery/big-thumb/05.jpg')}}" alt="gallery thumb"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="gallery-item">
							<div class="gallery-item-inner">
								<div class="gallery-thumb">
									<a href="{{asset('theme/political/assets/images/gallery/big-thumb/04.jpg')}}" data-rel="lightcase"><img src="{{asset('theme/political/assets/images/gallery/big-thumb/04.jpg')}}" alt="gallery thumb"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="gallery-item">
							<div class="gallery-item-inner">
								<div class="gallery-thumb">
									<a href="{{asset('theme/political/assets/images/gallery/big-thumb/06.jpg')}}" data-rel="lightcase"><img src="{{asset('theme/political/assets/images/gallery/big-thumb/06.jpg')}}" alt="gallery thumb"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content area -->



@endsection
