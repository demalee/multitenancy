
@extends('theme.political_theme.layouts.app')

@section('content')



	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2  contenteditable="true">Causes Grid View</h2>
					<ul class="breadcrumb">
						<li  contenteditable="true"><a href="#">Home</a></li>
						<li  contenteditable="true">Causes Grid View</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end page header -->




	<!-- start main content area -->
	<section class="site-content cause-list-view section-bg-color section-padding-140">
		<div class="container">
			<div class="cause-list">
				<div class="recent-cause-item">
					<div class="cause-thumb">
						<a href="#"><img src="{{asset('theme/political/assets/images/cause-list/01.jpg')}}" alt="cause image"></a>
					</div>
					<div class="cause-content">
						<h5  contenteditable="true"><a href="#">Urgent Help for African Hapless People</a></h5>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
								<span class="progress-tooltip">24%</span>
							</div>
						</div>
						<div class="achieve-goal">
							<div class="raise-goal pull-left"  contenteditable="true">Raised <span>$500</span></div>
							<div class="raise-goal pull-right"  contenteditable="true">Goal <span>$2,50,000</span></div>
						</div>
						<p  contenteditable="true">Dramatic actulize ecnomic sound potentiality through platform empoerment. Proactive forward web service before strategic.</p>
						<a href="#" class="custom-btn custom-btn-sm"  contenteditable="true">View Details</a>
					</div>
				</div>
				<div class="recent-cause-item">
					<div class="cause-thumb">
						<a href="#"><img src="{{asset('theme/political/assets/images/cause-list/02.jpg')}}" alt="cause image"></a>
					</div>
					<div class="cause-content">
						<h5><a href="#"  contenteditable="true">Urgent Help for African Hapless People</a></h5>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
								<span class="progress-tooltip"  contenteditable="true">24%</span>
							</div>
						</div>
						<div class="achieve-goal">
							<div class="raise-goal pull-left"  contenteditable="true">Raised <span>$500</span></div>
							<div class="raise-goal pull-right"  contenteditable="true">Goal <span>$2,50,000</span></div>
						</div>
						<p  contenteditable="true">Dramatic actulize ecnomic sound potentiality through platform empoerment. Proactive forward web service before strategic.</p>
						<a href="#" class="custom-btn custom-btn-sm">View Details</a>
					</div>
				</div>
				<div class="recent-cause-item">
					<div class="cause-thumb">
						<a href="#"><img src="{{asset('theme/political/assets/images/cause-list/03.jpg')}}" alt="cause image"></a>
					</div>
					<div class="cause-content">
						<h5><a href="#"  contenteditable="true">Urgent Help for African Hapless People</a></h5>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
								<span class="progress-tooltip">24%</span>
							</div>
						</div>
						<div class="achieve-goal">
							<div class="raise-goal pull-left"  contenteditable="true">Raised <span>$500</span></div>
							<div class="raise-goal pull-right"  contenteditable="true">Goal <span>$2,50,000</span></div>
						</div>
						<p  contenteditable="true">Dramatic actulize ecnomic sound potentiality through platform empoerment. Proactive forward web service before strategic.</p>
						<a href="#" class="custom-btn custom-btn-sm">View Details</a>
					</div>
				</div>
				<div class="recent-cause-item">
					<div class="cause-thumb">
						<a href="#"><img src="{{asset('theme/political/assets/images/cause-list/04.jpg')}}" alt="cause image"></a>
					</div>
					<div class="cause-content">
						<h5><a href="#"  contenteditable="true">Urgent Help for African Hapless People</a></h5>
						<div class="progress">
							<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
								<span class="progress-tooltip">24%</span>
							</div>
						</div>
						<div class="achieve-goal">
							<div class="raise-goal pull-left"  contenteditable="true">Raised <span>$500</span></div>
							<div class="raise-goal pull-right"  contenteditable="true">Goal <span>$2,50,000</span></div>
						</div>
						<p  contenteditable="true">Dramatic actulize ecnomic sound potentiality through platform empoerment. Proactive forward web service before strategic.</p>
						<a href="#" class="custom-btn custom-btn-sm"  contenteditable="true">View Details</a>
					</div>
				</div>
				<div class="pagination-area">
					<ul class="pagination">
						<li><a href="#"  contenteditable="true">Prev</a></li>
						<li><a class="active" href="#">1</a></li>
						<li><a href="#"  contenteditable="true">2</a></li>
						<li><a href="#"  contenteditable="true">3</a></li>
						<li>--</li>
						<li><a href="#"  contenteditable="true">8</a></li>
						<li><a href="#"  contenteditable="true">9</a></li>
						<li><a href="#"  contenteditable="true">10</a></li>
						<li><a href="#"  contenteditable="true">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end main content area -->




@endsection
