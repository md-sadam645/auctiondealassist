<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:54:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Terms & Conditions - Auction Deal Asset</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}" />
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
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="../assest/css/leaflet.css">
    <link rel="stylesheet" href="../assest/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="../assest/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="../assest/css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../assest/css/animate.css">
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="stylesheet" id="color" href="../assest/css/default.css">
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
                    <h1>Terms & Conditions</h1>
                    {{-- <h2><a href="/">Home </a> &nbsp;/&nbsp; Join Us</h2> --}}
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container w-100">
                
                <div class="row w-100">
                    <div class="col-lg-1 col-md-12">
                    </div>
                    <div class="col-lg-10 col-md-12 w-100">
                        <h3>Terms & Conditions</h3>
                        @php echo $list @endphp
                        
                    
                    </div>
                    <div class="col-lg-1 col-md-12">
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->

       

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
       
