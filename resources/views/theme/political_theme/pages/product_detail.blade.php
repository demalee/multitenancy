@extends('theme.political_theme.layouts.app')


@section('content')
	<!-- End Header -->



	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
                <div class="page-header-content">
                    <h2>Product Detail Page</h2>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Product Detail Page</li>
                    </ul>
                </div>
			</div>
		</div>
	</section>
	<!-- end page header -->




	<!-- start main content area -->
	<section class="site-content product-detail-page section-bg-color section-padding-140">
		<div class="container">
			<div class="product-preview-section row align-items-center no-gutters">
                <div class="col-lg-6">
                    <div class="product-image">
                        <img src="{{asset('theme/political/assets/images/product-detail/01.jpg')}}" alt="product">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-info pl-lg-4">
                        <h3 class="name">New Brand T-Shirt</h3>
                        <div class="review">
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <div class="rating-color">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                            <span>(12 customer Reviews)</span>
                            <a href="#" class="ml-2"><i class="fa fa-pencil" aria-hidden="true"></i> Add Review</a>
                        </div>
                        <div class="price">$225.00</div>
                        <p>Dramatic actualize economi sound potential through platform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets through state of paradigms. Authoritative enhance 24/7 imperatives with frictionless.</p>
                        <div class="p-item-counter">
                            <div class="cart-plus-minus">
                                <div class="dec qtybutton">-</div>
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                <div class="inc qtybutton">+</div>
                            </div>
                        </div>
                        <a href="#" class="custom-btn">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="product-dr-section">
                <ul class="nav nav-tabs product-dr-menu" id="myTab" role="tablist">
                    <li><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                    <li><a class="active" href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews (04)</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="description">
                        <div class="product-dr-content">
                            <p>Dramatic actualize economi sound potential through platform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets through state of paradigms. Authoritative enhance 24/7 imperatives with frictionless. platform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets through state of paradigms</p>
                            <p>Dramatic actualize economi sound potential through platform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets through state of paradigms. Authoritative enhance 24/7 imperatives with frictionless.</p>
                            <p>Dramatic actualize economi soundplatform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets through state of paradigms potential through platform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets through state of paradigms. Authoritative enhance 24/7 imperatives with frictionless.</p>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="reviews">
                        <div class="product-dr-content">
                            <ul class="review-list">
                                <li>
                                    <div class="reviewer-thumb">
                                        <img src="{{asset('theme/political/assets/images/product-detail/review/01.jpg')}}" alt="reviewer-image">
                                    </div>
                                    <div class="review-content">
                                        <div class="name"><a href="#">Hames Alex</a><span>Jan 8, 2016</span></div>
                                        <p>Dramatic actualize economi soundplatform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets thr</p>
                                    </div>
                                    <div class="review">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <div class="rating-color">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="reviewer-thumb">
                                        <img src="{{asset('theme/political/assets/images/product-detail/review/02.jpg')}}" alt="reviewer-image">
                                    </div>
                                    <div class="review-content">
                                        <div class="name"><a href="#">Hames Alex</a><span>Jan 8, 2016</span></div>
                                        <p>Dramatic actualize economi soundplatform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets thr</p>
                                    </div>
                                    <div class="review">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <div class="rating-color">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="reviewer-thumb">
                                        <img src="{{asset('theme/political/assets/images/product-detail/review/03.jpg')}}" alt="reviewer-image">
                                    </div>
                                    <div class="review-content">
                                        <div class="name"><a href="#">Hames Alex</a><span>Jan 8, 2016</span></div>
                                        <p>Dramatic actualize economi soundplatform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets thr</p>
                                    </div>
                                    <div class="review">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <div class="rating-color">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="reviewer-thumb">
                                        <img src="{{asset('theme/political/assets/images/product-detail/review/04.jpg')}}" alt="reviewer-image">
                                    </div>
                                    <div class="review-content">
                                        <div class="name"><a href="#">Hames Alex</a><span>Jan 8, 2016</span></div>
                                        <p>Dramatic actualize economi soundplatform empowerment. Proactively go forward web service before strategic web service. Professional fashion reliable markets thr</p>
                                    </div>
                                    <div class="review">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <div class="rating-color">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</section>
	<!-- end main content area -->


@endsection
