<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:54:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Join Us - Auction Deal Asset</title>
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
                    <h1>Join Us</h1>
                    {{-- <h2><a href="/">Home </a> &nbsp;/&nbsp; Join Us</h2> --}}
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Join Us</h3>
                        <p class="text-justify text-dark">
                            ADA provides the platform to deal with Real Estate Consultants / Brokers who want to deal in bank Auction Property PAN India. Our team provides regular updates related to Auction Property & supports legal to resolve disputes of Property and invest in the right area.
                        </p>
                        <form method="POST" action="/joinUs">
                            @csrf
                            
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="full_name" placeholder="Full Name">
                            </div>
                            @error('full_name')
                                <p class="text-danger text-capitalize">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="city" placeholder="City">
                            </div>
                            @error('city')
                                <p class="text-danger text-capitalize">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <input type="text" required class="form-control input-custom input-full" name="state" placeholder="State">
                            </div>
                            @error('state')
                                <p class="text-danger text-capitalize">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <input type="Number" required class="form-control input-custom input-full" name="contact" placeholder="Contact">
                            </div>
                            @error('contact')
                                <p class="text-danger text-capitalize">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <input type="email" required class="form-control input-custom input-full" name="email" placeholder="Mail Id">
                            </div>
                            @error('email')
                                <p class="text-danger text-capitalize">{{$message}}</p>
                            @enderror
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                            </div>
                            @error('message')
                                <p class="text-danger text-capitalize">{{$message}}</p>
                            @enderror
                            <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        
                    </div>
                    {{-- <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">F-7, Ishkripa Building 111 Janki Nagar, Near Ram Mandir, Indore</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p"> <a href="tel:919479600605" style="color:white;">+91 9479600605</a>, 
                                        <a href="tel:917987393204" style="color:white;">+91 7987393204 </a>,
                                        <a href="tel:919753544554" style="color:white;">+91 9753544554 </a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">
                                             <a href="mailto:rahuljaiswal08@gmail.com" style="color:white;">rahuljaiswal08@gmail.com</a>, 
                                            <a href="mailto:rahuljaiswal1833@gmail.com" style="color:white;">rahuljaiswal1833@gmail.com</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
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
       
