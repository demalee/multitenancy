@extends('theme.local_government_theme.layouts.apps')

@section('content')
			<!-- SAB BANNER START-->
            @foreach($widgets as $widget)

                @if($widget->name == "Bread Crumbs" and $widget->status_active == 1)


                    @foreach($widget->get_content($widget->id)[0] as $content)
                        @include('theme.local_government_theme.widgets.breadcrumbs')
                    @endforeach

                @endif
			<!-- SAB BANNER END-->



                        @foreach($widget->get_content($widget->id)[0] as $content)
                            @include('theme.local_government_theme.widgets.program')

                        @endforeach
                            @endforeach


                    <div class="city_blog2_wrap team">
                        <div class="container">
                            <div class="city_contact_row">
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
