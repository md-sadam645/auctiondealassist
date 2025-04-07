<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>View Property - Auction Deal Assist</title>
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
    {{-- <link rel="stylesheet" href="../backend_assest/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" /> --}}
  
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
                    <div class="card w-100">
                    
                        <h5 class="mb-1 card-header">
                            <span class="me-2">Total Viewed Property <span class="badge bg-primary text-white">{{count($total)}}</span></span>
                            
                        </h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead class="table-dark text-uppercase">
                                    <tr>
                                        <th>Property ID</th>
                                        <th>Bank Name</th>
                                        <th>property type</th>
                                        <th>Viewed Date</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0 view-property">
                                    @foreach ($list as $data)
                                        
                                
                                        <tr>
                                            <td>{{$data->property_id}}</td>
                                            <td>{{$data->bank_name}}</td>
                                            <td>{{$data->property_type}}</td>
                                            <td>{{$data->viewed_date}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="property-pagination mt-5">
                        <!-- start pagination -->
                        @if(!empty($list))
                            <center>
                                {{ $list->links('vendor.pagination.custom') }}
                            </center>
                        @endif
                        <!-- end pagination -->
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
       

   
