<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Subscriptions - Auction Deal Assist</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}">
    <link rel="stylesheet" href="../assest/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assest/font/flaticon.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="../assest/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="../assest/fontawesome/css/fontawesome.css"> --}}
    <link rel="stylesheet" href="../assest/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assest/fontawesome/css/all.css">
    
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../assest/css/animate.css">
    <link rel="stylesheet" href="../assest/css/magnific-popup.css">
    <link rel="stylesheet" href="../assest/css/search.css">
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    <link rel="stylesheet" href="../assest/css/slick.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="stylesheet" id="color" href="../assest/css/default.css">
    


    <!-- Core CSS -->
    <link rel="stylesheet" href="../backend_assest/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  

    <style>
        /* #logo{
            margin-left:-49px !important;
        }
    
        .add-list-btn{
            margin-left:25px !important;
        }
    
        .header-user-menu{
            margin-right:-0px !important;
        } */

        .sign-box{
            display:none !important;
        }

        .mobile-btn{
            display:none !important;
        }

        .desktop-btn{
            display:block !important;
        }

        @media(max-width:768px)
            {
                /* #logo{
                margin-left:25% !important;
                }
        
            .add-list-btn{
                margin-left:0px !important;
            }
        
            .header-user-menu{
                margin-right:10% !important;
            } */

            .mobile-btn{
                display:block !important;
            }

            .desktop-btn{
                display:none !important;
            }
        }
    </style>

</head>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container -->
        @include("web/layout/header")
        <!-- Header Container  End -->
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container py-5 py-md-0">
                    <h1>Subscriptions Plans</h1>
                </div>
            </div>
        </section>
     

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card py-5" style="background-color:#F8F7FA !important; border:none;box-shadow:none;">
                <!-- subscriptions Plans -->
                <div class="row mx-lg-5" style="background-color:#F8F7FA !important; border:none;box-shadow:none;">
                    @if($list != "[]")
                        @foreach ($list as $data)
                        <div class="col-lg-4 mb-4">
                            <div class="card border rounded shadow-none">
                                <div class="card-body">
                                    <form action="/subscriptions-plans/buy" method="POST">
                                        @csrf
                                        <h3 class="card-title fw-semibold text-center text-capitalize mb-1">{{$data->plan_name}}</h3>
                                        
                                        <!--data sending on payment function--->
                                        <input type="text" name="plan_name" class="d-none" value="{{$data->plan_name}}" />
                                        <input type="text" name="price" class="d-none" value="{{$data->price}}" />
                                        <input type="text" name="duration" class="d-none" value="{{$data->duration}}" />
                                        <input type="text" name="archives" class="d-none" value="{{$data->archives}}" />
                                        
                                        <div class="text-center mt-4">
                                            <div class="d-flex justify-content-center">
                                            <sup class="h6 pricing-currency mt-3 mb-0 me-1" style="color:#7A1025;"><i class="fa fa-inr"></i></sup>
                                            <h1 class="fw-semibold display-4 mb-0 text-warning">{{$data->price}}</h1>
                                            </div>
                                        </div>

                                        <ul class="ps-3 my-4 pt-2">
                                            <li class="mb-2">{{$data->duration}} Months Premium Access</li>
                                            <li class="mb-2">View All Auction Details</li>
                                            <li class="mb-2">Daily Email Alerts</li>
                                            <li class="mb-2 text-capitalize">{{$data->archives}}</li>
                                        </ul>

                                        <!-- if user not login than redirect signin page -->
                                        @if(Auth::user())
                                            @if(Auth::user()->role == 3)
                                                <button type="submit" class="btn d-grid w-100 text-white" style="background:#7A1025;">Buy Now</button>
                                            @endif
                                        @else
                                            <button type="submit" class="btn d-grid w-100 text-white desktop-btn modal-open" style="background:#7A1025;">Login To Buy Subscription</button>
                                            <a href="/user-login" class="btn d-grid w-100 text-white mobile-btn" style="background:#7A1025;">Login To Buy Subscription</a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <div class="alert alert-danger" role="alert">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span>Not Any Subscriptions Plans Available</span>
                      </div>
                    @endif
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
       

   
