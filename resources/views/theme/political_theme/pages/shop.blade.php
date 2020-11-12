@extends('theme.political_theme.layouts.app')


@section('content')



	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2>Shop Page</h2>
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li>Shop Page</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end page header -->




	<!-- start main content area -->
	<section class="site-content shop-page section-bg-color section-padding-140">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 main-content">
					<div class="shop-heading">
						<h3 class="pull-left">Shop</h3>
						<span class="pull-right">Showing 1-6 of 23 results</span>
					</div>
					<div class="shop-product-list row justify-content-center">
						<div class="col-sm-6 col-lg-4">
							<div class="product-item">
								<div class="product-thumb">
									<a href="#"><img src="{{asset('theme/political/assets/images/homepage2/products/01.jpg')}}" alt="product"></a>
									<div class="add-cart">
										<a href="#" class="custom-btn">Add To Cart</a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
									<p class="price">$450.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="product-item">
								<div class="product-thumb">
									<a href="#"><img src="{{asset('theme/political/assets/images/homepage2/products/02.jpg')}}" alt="product"></a>
									<div class="add-cart">
										<a href="#" class="custom-btn">Add To Cart</a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
									<p class="price">$450.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="product-item">
								<div class="product-thumb">
									<a href="#"><img src="{{asset('theme/political/assets/images/homepage2/products/03.jpg')}}" alt="product"></a>
									<div class="add-cart">
										<a href="#" class="custom-btn">Add To Cart</a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
									<p class="price">$450.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="product-item">
								<div class="product-thumb">
									<a href="#"><img src="{{asset('theme/political/assets/images/homepage2/products/04.jpg')}}" alt="product"></a>
									<div class="add-cart">
										<a href="#" class="custom-btn">Add To Cart</a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
									<p class="price">$450.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="product-item">
								<div class="product-thumb">
									<a href="#"><img src="{{asset('theme/political/assets/images/homepage2/products/01.jpg')}}" alt="product"></a>
									<div class="add-cart">
										<a href="#" class="custom-btn">Add To Cart</a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
									<p class="price">$450.00</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="product-item">
								<div class="product-thumb">
									<a href="#"><img src="{{asset('theme/political/assets/images/homepage2/products/02.jpg')}}" alt="product"></a>
									<div class="add-cart">
										<a href="#" class="custom-btn">Add To Cart</a>
									</div>
								</div>
								<div class="product-content">
									<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
									<p class="price">$450.00</p>
								</div>
							</div>
						</div>
						<div class="pagination-area mt-4">
							<ul class="pagination">
								<li><a href="#">Prev</a></li>
								<li><a class="active" href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li>--</li>
								<li><a href="#">8</a></li>
								<li><a href="#">9</a></li>
								<li><a href="#">10</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
				<aside class="col-lg-4 sidebar mt-5 mt-lg-0">
					<div class="widget popular-product">
						<h5 class="widget-title">Popular Post</h5>
						<div class="widget-wrapper">
							<ul class="small-post-list">
								<li class="product-item">
									<div class="product-thumb">
										<a href="#"><img src="{{asset('theme/political/assets/images/shop/sidebar/01.jpg')}}" alt="product"></a>
									</div>
									<div class="product-content">
										<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
										<div class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star color"></i>
										</div>
										<p class="price">$450.00</p>
									</div>
								</li>
								<li class="product-item">
									<div class="product-thumb">
										<a href="#"><img src="{{asset('theme/political/assets/images/shop/sidebar/02.jpg')}}" alt="product"></a>
									</div>
									<div class="product-content">
										<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
										<div class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star color"></i>
										</div>
										<p class="price">$450.00</p>
									</div>
								</li>
								<li class="product-item">
									<div class="product-thumb">
										<a href="#"><img src="{{asset('theme/political/assets/images/shop/sidebar/01.jpg')}}" alt="product"></a>
									</div>
									<div class="product-content">
										<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
										<div class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star color"></i>
										</div>
										<p class="price">$450.00</p>
									</div>
								</li>
								<li class="product-item">
									<div class="product-thumb">
										<a href="#"><img src="{{asset('theme/political/assets/images/shop/sidebar/02.jpg')}}" alt="product"></a>
									</div>
									<div class="product-content">
										<h5 class="name"><a href="#">New Brand T-Shirt</a></h5>
										<div class="rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star color"></i>
										</div>
										<p class="price">$450.00</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<!-- end main content area -->

@endsection
