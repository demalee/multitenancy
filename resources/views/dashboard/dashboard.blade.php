@extends('layouts.apps')
@section('content')
               <div class="container-fluid">
                  <div class="page-header">
                     <div class="row">
                        <div class="col-lg-6">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="http://laravel.pixelstrap.com/xolo"><i class="f-16 fa fa-home"></i></a></li>
                              <li class="breadcrumb-item">Dashboard</li>
                           </ol>
                           <h3>Helpdesk Dashboard</h3>
                        </div>
                        <div class="col-lg-6">
                           <!-- Bookmark Start-->
                           <div class="bookmark pull-right">
                              <ul>
                                 <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                                 <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                                 <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                                 <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                                 <li>
                                    <a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                                    <form class="form-inline search-form">
                                       <div class="form-group form-control-search">
                                          <input type="text" placeholder="Search..">
                                       </div>
                                    </form>
                                 </li>
                              </ul>
                           </div>
                           <!-- Bookmark Ends-->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid starts-->
               <div class="container-fluid">
   <div class="row">
      <div class="col-md-6 col-xl-3 xl-50 col-lg-6 box-col-6">
         <div class="card social-widget-card">
            <div class="p-25">
               <div class="media b-b-light">
                  <div class="media-left mr-4">
                     <div class="redial-social-widget radial-bar-70" data-label="20%"><i class="icofont icofont-tasks-alt txt-primary"></i></div>
                  </div>
                  <div class="media-right">
                     <h5>Unresolve</h5>
                     <p>Lorem Ipsum is simply dummy  text of the Loren dummy text.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col text-center b-r-light">
                     <span>Today</span>
                     <h6 class="counter mb-0">05</h6>
                  </div>
                  <div class="col text-center b-r-light">
                     <span>last Month</span>
                     <h6 class="counter mb-0">56</h6>
                  </div>
                  <div class="col text-center">
                     <span>Total</span>
                     <h6 class="counter mb-0">61</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-xl-3 xl-50 col-lg-6 box-col-6">
         <div class="card social-widget-card">
            <div class="p-25">
               <div class="media b-b-light">
                  <div class="media-left mr-4">
                     <div class="redial-social-widget radial-bar-20 bar-sucess" data-label="20%"><i class="icofont icofont-clock-time txt-success"></i></div>
                  </div>
                  <div class="media-right">
                     <h5>Open</h5>
                     <p>Lorem Ipsum is simply dummy  text of the Loren dummy text.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col text-center b-r-light">
                     <span>Today</span>
                     <h6 class="counter mb-0">100</h6>
                  </div>
                  <div class="col text-center b-r-light">
                     <span>last Month</span>
                     <h6 class="counter mb-0">901</h6>
                  </div>
                  <div class="col text-center">
                     <span>Total</span>
                     <h6 class="counter mb-0">1001</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-xl-3 xl-50 col-lg-6 box-col-6">
         <div class="card social-widget-card">
            <div class="p-25">
               <div class="media b-b-light">
                  <div class="media-left mr-4">
                     <div class="redial-social-widget radial-bar-70 bar-warrning" data-label="50%"><i class="icofont icofont-sand-clock txt-warning"></i></div>
                  </div>
                  <div class="media-right">
                     <h5>On Hold</h5>
                     <p>Lorem Ipsum is simply dummy  text of the Loren dummy text.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col text-center b-r-light">
                     <span>Today</span>
                     <h6 class="counter mb-0">100</h6>
                  </div>
                  <div class="col text-center b-r-light">
                     <span>last Month</span>
                     <h6 class="counter mb-0">901</h6>
                  </div>
                  <div class="col text-center">
                     <span>Total</span>
                     <h6 class="counter mb-0">1001</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-xl-3 xl-50 col-lg-6 box-col-6">
         <div class="card social-widget-card">
            <div class="p-25">
               <div class="media b-b-light">
                  <div class="media-left mr-4">
                     <div class="redial-social-widget radial-bar-70 bar-danger" data-label="50%"><i class="icofont icofont-ui-edit txt-danger"></i></div>
                  </div>
                  <div class="media-right">
                     <h5>Unassigned</h5>
                     <p>Lorem Ipsum is simply dummy  text of the Loren dummy text.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col text-center b-r-light">
                     <span>Today</span>
                     <h6 class="counter mb-0">100</h6>
                  </div>
                  <div class="col text-center b-r-light">
                     <span>last Month</span>
                     <h6 class="counter mb-0">901</h6>
                  </div>
                  <div class="col text-center">
                     <span>Total</span>
                     <h6 class="counter mb-0">1001</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-12">
         <div class="card card-with-border tickets o-hidden">
            <div class="card-header card-no-border">
               <div class="d-flex">
                  <h5>Ticket By Request Type</h5>
                  <button class="btn btn-outline-light" type="button">Last Week <i class="fa fa-caret-down"></i></button>
               </div>
               <p class="f-12">Lorem Ipsum is simply dummy text of the Loren dummy text of the Loren dummy printing......</p>
               <h4 class="mb-0">198</h4>
               <div class="chart-value-box pull-right ticket-legend">
                  <div class="value-square-box-primary"></div>
                  <span>Approval</span>
                  <div class="value-square-box-danger ml-3"></div>
                  <span>Cancel</span>
                  <div class="value-square-box-light ml-3"></div>
                  <span>Other</span>
               </div>
               <small class="f-w-600"> This Week <span class="font-primary">3.56% <i class="fa fa-caret-up"></i></span></small>
            </div>
            <div class="card-body p-0">
               <div class="apex-complain">
                  <div id="mix1"></div>
               </div>
               <div class="small-mix"></div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 box-col-6">
         <div class="card card-with-border customer-satisfied">
            <div class="card-header card-no-border resolve-complain">
               <h5>Customer Satisfaction</h5>
               <p>Lorem Ipsum is simply dummy text of the Loren dummy text of the Loren dummy printing......</p>
               <div class="customers-details d-flex">
                  <div class="complain-details pl-0 d-inline-block">
                     <h4>6.8<span class="font-primary">8.74% <i class="fa fa-caret-up"></i></span></h4>
                     <span class="d-block">performance  score</span>
                  </div>
                  <div class="legend-radial d-inline-block">
                     <ul>
                        <li>
                           <div class="value-square-box-success"></div>
                           <span class="f-w-600">Excellent score</span>
                        </li>
                        <li>
                           <div class="value-square-box-secondary"></div>
                           <span class="f-w-600">Good score</span>
                        </li>
                        <li>
                           <div class="value-square-box-warning"></div>
                           <span class="f-w-600">Fair score</span>
                        </li>
                        <li>
                           <div class="value-square-box-warning"></div>
                           <span class="f-w-600">Poor score</span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="satisfaction-table table-responsive">
                  <table class="table table-bordernone">
                     <tbody>
                        <tr>
                           <td>
                              <p class="f-w-600">Excellent Score</p>
                              <span class="d-block"><span class="font-success">Elisse Joson San </span><span>Francisco, CA</span></span>
                           </td>
                           <td>
                              <p class="f-w-600 light-font mb-0">3,005</p>
                           </td>
                           <td><span>90%</span></td>
                           <td>
                              <div class="number-radial">
                                 <div class="radial-bar radial-bar-90 radial-bar-success" data-label="90%"></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="f-w-600">Good Score</p>
                              <span class="d-block"><span class="font-secondary">Elisse Joson San </span><span>Francisco, CA</span></span>
                           </td>
                           <td>
                              <p class="f-w-600 light-font mb-0">3,005</p>
                           </td>
                           <td><span>75%</span></td>
                           <td>
                              <div class="number-radial">
                                 <div class="radial-bar radial-bar-75 radial-bar-secondary" data-label="75%"></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="f-w-600">Fair Score</p>
                              <span class="d-block"><span class="font-warning">Elisse Joson San </span><span>Francisco, CA</span></span>
                           </td>
                           <td>
                              <p class="f-w-600 light-font mb-0">3,005</p>
                           </td>
                           <td><span>60%</span></td>
                           <td>
                              <div class="number-radial">
                                 <div class="radial-bar radial-bar-60 radial-bar-warning" data-label="60%"></div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p class="f-w-600">Fair Score</p>
                              <span class="d-block"><span class="font-danger">Elisse Joson San </span><span>Francisco, CA</span></span>
                           </td>
                           <td>
                              <p class="f-w-600 light-font mb-0">3,005</p>
                           </td>
                           <td><span>20%</span></td>
                           <td>
                              <div class="number-radial">
                                 <div class="radial-bar radial-bar-20 radial-bar-danger" data-label="20%"></div>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-50 box-col-6">
         <div class="row">
            <div class="col-sm-12">
               <div class="card card-with-border resolve-complain">
                  <div class="card-header card-no-border chart-block">
                     <div class="media">
                        <div class="small-bar">
                           <div class="small-chart flot-chart-container"></div>
                        </div>
                        <div class="media-body">
                           <h5>Resolved Complaint</h5>
                           <p class="f-12"> Lorem Ipsum is simply dummy text of the Loren dummy printing......</p>
                           <h4 class="mb-0">5m:65s<span class="f-14 light-font"> / Goal : 8m : 0s</span></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12">
               <div class="card card-with-border complaints o-hidden">
                  <div class="card-header card-no-border d-flex">
                     <h5>Complaints Received</h5>
                     <button class="btn btn-outline-light" type="button">Last Week <i class="fa fa-caret-down"></i></button>
                  </div>
                  <div class="card-body p-0">
                     <div class="complain-details">
                        <h4> <span> This Week </span><span class="font-primary">3.56% <i class="fa fa-caret-up"></i></span>198    </h4>
                        <p class="f-12">The total number of complaints that have been received.</p>
                     </div>
                     <div class="apex-complain">
                        <div id="complain"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-12">
         <div class="card card-with-border overall-rating">
            <div class="card-header resolve-complain card-no-border">
               <h5 class="d-inline-block">Recent Activities</h5>
               <span class="setting-round pull-right d-inline-block mt-0"><i class="fa fa-spin fa-cog"></i></span>
               <p class="f-12 mb-0">Lorem Ipsum is simply dummy text of the Loren dummy text of the Loren dummy printing......</p>
            </div>
            <div class="card-body pt-0">
               <div class="timeline-recent">
                  <div class="media">
                     <div class="timeline-line"></div>
                     <div class="timeline-dot-danger"></div>
                     <div class="media-body">
                        <span class="d-block f-w-600">Natalie reassigned ticket<span class="pull-right light-font f-w-400">2 hour ago</span></span>
                        <p> <span class="font-danger">Elisse Joson San </span>Francisco, CA</p>
                     </div>
                  </div>
                  <div class="media">
                     <div class="timeline-dot-secondary"></div>
                     <div class="media-body">
                        <span class="d-block f-w-600">Katherine submitted new ticket<span class="pull-right light-font f-w-400">5 hour ago</span></span>
                        <p> <span class="font-secondary">Elisse Joson San </span>Francisco, CA</p>
                        <p class="f-12 mb-0">Lorem Ipsum is simply dummy text of the text of the Loren dummy printing......</p>
                     </div>
                  </div>
                  <div class="media">
                     <div class="timeline-dot-success"></div>
                     <div class="media-body">
                        <span class="d-block f-w-600">Natalie reassigned ticket<span class="pull-right light-font f-w-400">8 hour ago</span></span>
                        <p> <span class="font-success">Elisse Joson San </span>Francisco, CA</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card card-with-border">
            <div class="card-header card-no-border tickets">
               <div class="d-flex">
                  <h5>Transaction History</h5>
                  <button class="btn btn-outline-light" type="button">Last Week <i class="fa fa-caret-down"></i></button>
               </div>
               <p class="f-12 mb-0">Lorem Ipsum is simply dummy text of the Loren dummy text of the Loren dummy printing......</p>
            </div>
            <div class="card-body p-0">
               <div class="transaction-table table-responsive agent-performance-table">
                  <table class="table table-bordernone">
                     <tbody>
                        <tr>
                           <td>
                              <div class="media">
                                 <div class="round-light-icon-primary"><i class="icon-money"></i></div>
                                 <div class="media-body"><span class="f-12 f-w-600">Process refund to 51451</span></div>
                              </div>
                           </td>
                           <td>
                              <p class="f-w-600">Mar 14,2019</p>
                           </td>
                           <td>
                              <div class="badge badge-primary">Completed</div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="media">
                                 <div class="round-light-icon-warning"><i class="icon-wallet"></i></div>
                                 <div class="media-body"><span class="f-12 f-w-600">Payment from 95362</span></div>
                              </div>
                           </td>
                           <td>
                              <p class="f-w-600">Apr 20,2019</p>
                           </td>
                           <td>
                              <div class="badge badge-warning">For Pickup</div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="media">
                                 <div class="round-light-icon-secondary"><i class="icon-money"></i></div>
                                 <div class="media-body"><span class="f-12 f-w-600">Process refund to 20135</span></div>
                              </div>
                           </td>
                           <td>
                              <p class="f-w-600">Apr 20,2019</p>
                           </td>
                           <td>
                              <div class="badge badge-secondary">Completed</div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="media">
                                 <div class="round-light-icon-danger"><i class="icon-wallet"></i></div>
                                 <div class="media-body"><span class="f-12 f-w-600">Payment from 15485</span></div>
                              </div>
                           </td>
                           <td>
                              <p class="f-w-600">Jan 05,2019</p>
                           </td>
                           <td>
                              <div class="badge badge-danger">10,125 Point</div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="media">
                                 <div class="round-light-icon-success"><i class="icon-money"></i></div>
                                 <div class="media-body"><span class="f-12 f-w-600">Process refund to 95685</span></div>
                              </div>
                           </td>
                           <td>
                              <p class="f-w-600">Mar 21,219</p>
                           </td>
                           <td>
                              <div class="badge badge-success">Declined</div>
                           </td>
                        </tr>
                        <tr>
                           <td class="text-center" colspan="3">
                              <button class="btn btn-light" type="button">View All Transactions</button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="row">
            <div class="col-xl-6">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card card-with-border resolve-complain average-radial">
                        <div class="card-header card-no-border chart-block">
                           <div class="media">
                              <div class="radial-bar radial-bar-20 radial-bar-danger" data-label="20%"></div>
                              <div class="media-body">
                                 <h5>Average Speed Of Ans.</h5>
                                 <p class="f-12"> Lorem Ipsum is simply dummy text of the Loren dummy printing......</p>
                                 <h4 class="mb-0">0m:65s<span class="f-14 light-font"> / Goal : 0m : 45s</span></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="card card-with-border overall-rating">
                        <div class="card-header resolve-complain">
                           <h5 class="d-inline-block">Over All Rating</h5>
                           <span class="setting-round pull-right d-inline-block mt-0"><i class="fa fa-spin fa-cog"></i></span>
                           <p class="f-12 mb-0">Lorem Ipsum is simply dummy text of the Loren dummy text of the Loren dummy printing......</p>
                        </div>
                        <div class="card-body rating-box p-0">
                           <div class="row m-0">
                              <div class="col-sm-6 p-0 main-rating">
                                 <div class="rating-box">
                                    <h3>4.6</h3>
                                    <div class="rating-container">
                                       <div class="star-ratings">
                                          <div class="stars stars-example-fontawesome-o">
                                             <select id="u-rating-fontawesome-o" name="rating" data-current-rating="4.6" autocomplete="off">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <p>Measures the quality or your support team’s efforts.</p>
                                 </div>
                              </div>
                              <div class="col-sm-6 p-0">
                                 <ul class="small-rating">
                                    <li>
                                       <h6>4.6<span class="stars-small pl-2"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span></span><span class="f-12 pull-right">95%</span></h6>
                                    </li>
                                    <li>
                                       <h6>4.1<span class="stars-small pl-2"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span></span><span class="f-12 pull-right">89%</span></h6>
                                    </li>
                                    <li>
                                       <h6>3.0<span class="stars-small pl-2"><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span><span class="f-12 pull-right">64%</span></h6>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6">
               <div class="card card-with-border overall-rating">
                  <div class="card-header resolve-complain card-no-border">
                     <h5 class="d-inline-block">Agent Performance Points</h5>
                     <span class="setting-round pull-right d-inline-block mt-0"><i class="fa fa-spin fa-cog"></i></span>
                     <p class="f-12 mb-0">Lorem Ipsum is simply dummy text of the Loren dummy text of the Loren dummy printing......</p>
                  </div>
                  <div class="card-body p-0">
                     <div class="table-responsive agent-performance-table">
                        <table class="table table-bordernone">
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle">
                                       <img class="img-radius img-40 align-top m-r-15 rounded-circle" src="../assets/images/user/2.png" alt="">
                                       <div class="d-inline-block"><span class="f-12 f-w-600">Nick Stone</span><span class="d-block">Technical Support</span></div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="progress-showcase">
                                       <div class="progress sm-progress-bar">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                       <p class="f-w-600">Elite Level</p>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="f-w-600">12,325 Point</p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle">
                                       <img class="img-radius img-40 align-top m-r-15 rounded-circle" src="../assets/images/user/11.png" alt="">
                                       <div class="d-inline-block"><span class="f-12 f-w-600">Milano esco</span><span class="d-block">Technical Support</span></div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="progress-showcase">
                                       <div class="progress sm-progress-bar">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                       <p class="f-w-600">Exclusive Level</p>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="f-w-600">18,485 Point</p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle">
                                       <img class="img-radius img-40 align-top m-r-15 rounded-circle" src="../assets/images/user/3.jpg" alt="">
                                       <div class="d-inline-block"><span class="f-12 f-w-600">Wiltor Noice</span><span class="d-block">Technical Support</span></div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="progress-showcase">
                                       <div class="progress sm-progress-bar">
                                          <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                       <p class="f-w-600">Exclusive Level</p>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="f-w-600">26,125 Point</p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle">
                                       <img class="img-radius img-40 align-top m-r-15 rounded-circle" src="../assets/images/user/4.jpg" alt="">
                                       <div class="d-inline-block"><span class="f-12 f-w-600">Anna strong</span><span class="d-block">Technical Support</span></div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="progress-showcase">
                                       <div class="progress sm-progress-bar">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                       <p class="f-w-600">Elite Level</p>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="f-w-600">10,125 Point</p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="d-inline-block align-middle">
                                       <img class="img-radius img-40 align-top m-r-15 rounded-circle" src="../assets/images/user/12.png" alt="">
                                       <div class="d-inline-block"><span class="f-12 f-w-600">Anna strong</span><span class="d-block">Technical Support</span></div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="progress-showcase">
                                       <div class="progress sm-progress-bar">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                       </div>
                                       <p class="f-w-600">Exclusive Level</p>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="f-w-600">22,114 Point</p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12">
               <div class="card card-with-border current-tickets tickets">
                  <div class="card-header card-no-border">
                     <div class="d-flex">
                        <h5>Current Ticket Status</h5>
                        <button class="btn btn-outline-light" type="button">Last Week <i class="fa fa-caret-down"></i></button>
                     </div>
                     <p class="f-12 mb-0">Lorem Ipsum is simply dummy text of the Loren dummy text of......</p>
                     <div class="chart-value-box pull-right current-legend">
                        <div class="value-square-box-primary"></div>
                        <span>Open Tickets</span>
                        <div class="value-square-box-light ml-3"></div>
                        <span>Solved Ticket</span>
                     </div>
                  </div>
                  <div class="card-body pt-0">
                     <h4 class="mb-0">198</h4>
                     <small class="f-w-600"> This Week <span class="font-primary">3.56% <i class="fa fa-caret-up"></i></span></small>
                     <div class="tickets-bar">
                        <div class="ct-chartbar flot-chart-container"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
               <!-- Container-fluid Ends-->
@endsection
