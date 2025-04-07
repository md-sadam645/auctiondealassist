<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>My Subscriptions - Auction Deal Assist</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}">
    {{-- <link rel="stylesheet" href="../assest/css/jquery-ui.css"> --}}
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assest/font/flaticon.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="../assest/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../assest/css/animate.css">
    <link rel="stylesheet" href="../assest/css/magnific-popup.css">
    {{-- <link rel="stylesheet" href="../assest/css/search.css"> --}}
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    {{-- <link rel="stylesheet" href="../assest/css/slick.css"> --}}
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="stylesheet" id="color" href="../assest/css/default.css">
    
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="../assest/css/leaflet.css">
    <link rel="stylesheet" href="../assest/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="../assest/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="../assest/css/leaflet.markercluster.default.css">


   

    <!-- Core CSS -->
    {{-- <link rel="stylesheet" href="../backend_assest/vendor/css/rtl/core.css" class="template-customizer-core-css" /> --}}
    <link rel="stylesheet" href="../backend_assest/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  
    <style>
      /* #logo{
          margin-left:-49px !important;
      } */
  
      /* .add-list-btn{
          margin-left:25px !important;
      } */
  
      /* .header-user-menu{
          margin-right:-0px !important;
      } */

      /* @media(max-width:768px)
          {
              #logo{
              margin-left:25% !important;
          }
      
          .add-list-btn{
              margin-left:0px !important;
          }
      
          .header-user-menu{
              margin-right:10% !important;
          }
      } */
  </style>

</head>

<body class="inner-pages" style="background-color:white !important;">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container -->
        @include("web/layout/header")
     

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y" style="background-color:white !important;">
            <div class="card" style="background-color:white !important; border:none;box-shadow:none;border-radius:10px 10px 0px 0px;">
                <!-- subscriptions Plans -->
                <div class="row mx-lg-5 px-4 px-lg-0 mt-5 pt-5" style="background-color:white !important; border:none;box-shadow:none;">
                    <div class="card mb-4 px-0 w-100" style="border-radius:10px 10px 0px 0px;">
                        <!-- Current Plan -->
                        <div class="bg-secondary py-2 d-flex justify-content-between flex-column flex-lg-row" style="border-radius:10px 10px 0px 0px;">
                        <div>
                          <h5 class="mb-1 mt-2 ml-4">
                            <span class="me-2 text-white">Total Subscriptions</span>
                            <span class="badge bg-label-primary">
                              
                              @php
                                if(!empty($list))
                                {
                                  echo count($list);
                                }
                                else 
                                {
                                  echo '0';
                                }
                              @endphp
                            </span>
                          </h5>
                        </div>
                        </div>

                        <div class="card-body">
                          <div class="row">
                        
                           @if(!empty($list))

                           @foreach ($list as $data)
                           
                              <div class="col-md-6 mb-4">
                                <div class="mb-3 d-flex">
                                  <h6 class="mb-1">Plan Name : </h6> &nbsp;
                                  <span class="text-capitalize">{{$data->current_plan}}</span>
                                </div>

                                <div class="mb-3 d-flex">
                                  <h6 class="mb-1">Duration : </h6> &nbsp;
                                  <span>{{$data->duration}}</span>
                                </div>

                                <div class="mb-3 d-flex">
                                  <h6 class="mb-1">Plan Price : </h6> &nbsp;
                                  <span><i class="fa fa-inr" style="font-size:12px;"></i> {{$data->plan_price}}</span>
                                </div>

                                {{-- <div class="mb-3 d-flex">
                                  <h6 class="mb-1">Plan Price : </h6> &nbsp;
                                  <span><i class="fa fa-inr" style="font-size:12px;"></i> {{$data->plan_price}}</span>
                                </div> --}}

                                <div class="mb-3 d-flex">
                                  <h6 class="mb-1"><span class="me-2">Purchased Date : </span></h6>
                                  <span>{{$data->purchased_date}}</span>
                                </div>

                                <div class="mb-3 d-flex">
                                  <h6 class="mb-1"><span class="me-2">Expiry Date : </span></h6>
                                  <span>{{$data->expiry_date}}</span>
                                </div>
                              </div>

                              <div class="col-md-6 mb-4">
                                @if($data->status == 2)
                                  <div class="alert alert-warning mb-3" role="alert">
                                    <h5 class="alert-heading mb-1">We need your attention!</h5>
                                    <p>Your Plan Was Expired</p>
                                    <a class="btn btn-danger cancel-subscription mt-2" href="/purchased-subscription/delete/{{$data->id}}">Cancel Subscription</a>
                                  </div>
                                @elseif($data->status == 1)

                                  @if($data->remaining_days < 7)
                                  @php
                                    $active_plan_expiry_date = $data->expiry_date; 
                                  @endphp
                                  <div class="alert alert-warning mb-3" role="alert">
                                    <h5 class="alert-heading mb-1">We need your attention!</h5>
                                    <span>Your plan requires upgrade</span>
                                  </div>
                                  @endif

                                @elseif($data->status == 3)
                                  <div class="alert alert-success mb-3" role="alert">
                                    <h5 class="alert-heading mb-1">Pending!</h5>
                                    <span>Your plan will be Activate at </span>
                                  </div>
                                @endif
                                  
                          

                                @if($data->status == 1)
                                  <div class="plan-statistics">
                                    <div class="d-flex justify-content-between">
                                      <h6 class="mb-2">Days</h6>
                                      <h6 class="mb-2">
                                        @php
                                          $split_currentDate = explode(' ', $data->duration);
                                          $activeSubTotalDays = ($split_currentDate[0]*30);
                                        @endphp
                                        {{($activeSubTotalDays-$data->remaining_days)}} of 
                                        {{$activeSubTotalDays}}
                                        Days
                                      </h6> 
                                    </div>
                                    
                                    <div class="progress">
                                      <div class="progress-bar" style="width:{{(100*($activeSubTotalDays-$data->remaining_days))/$activeSubTotalDays}}%" role="progressbar" aria-valuenow="{{($activeSubTotalDays-$data->remaining_days)}}" aria-valuemin="0" aria-valuemax="{{$activeSubTotalDays}}"></div>
                                    </div>
                                    <p class="mt-1 mb-0">
                                      @if($data->remaining_days < 7)
                                        {{$data->remaining_days}} days remaining until your plan requires update
                                      @endif
                                    </p>
                                  </div>
                                @elseif($data->status == 3)
                                  <div class="plan-statistics">
                                    <div class="d-flex justify-content-between">
                                      <h6 class="mb-2">Days</h6>
                                      <h6 class="mb-2">
                                        @php
                                          $pending_sub_split_currentDate = explode(' ', $data->duration);
                                          $pendingSubTotalDays = ($pending_sub_split_currentDate[0]*30);
                                        @endphp
                                        0 of 
                                        {{$pendingSubTotalDays}}
                                        Days
                                      </h6> 
                                    </div>
                                    
                                    <div class="progress">
                                      <div class="progress-bar" style="width:0%" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax=""></div>
                                    </div>
                                  </div>
                                @endif
                                
                              </div>
                            <div class="mb-5" style="border-bottom:2px solid #EAE8FD;width:100%;"></div>
                            @endforeach
                            
                              
                            <div class="col-12 mb-4">
                              <a class="btn btn-primary me-2 mt-2" href="/subscriptions/index">Upgrade Plan</a>
                            </div>
                            @else
                             <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                  Oops Doesn't Purchased Any Plans
                                </div>
                              </div>
                              <div class="col-12 mb-4">
                                <a class="btn btn-primary me-2 mt-2" href="/subscriptions/index">Purchase Subscription</a>
                              </div>
                            @endif
                          </div>
                        </div>
                        
                        <!-- Modal -->
                  
                        
                        <!-- /Modal -->
                  
                        <!-- /Current Plan -->
                      </div>
                </div>
                <!--/ subscriptions Plans -->
            </div>
            
                        
        </div>
        <!-- / Content -->


        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Auction Deal<strong> Assist</strong></span></h3>
                    
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <!-- login Container -->
                                @include("web/auth/login")
                            <!-- login Container  End -->

                            <!-- login Container -->
                                @include("web/auth/signup")
                            <!-- login Container  End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
        
        <!-- START FOOTER -->
        @include("web/layout/footer")
        <!-- END FOOTER -->
       

   
