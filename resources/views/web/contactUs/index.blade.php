<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:54:31 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Contact Us - Auction Deal Assist</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <<link rel="stylesheet" href="../assest/font/flaticon.css">
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
                    <h1>Contact Us</h1>
                    {{-- <h2><a href="/">Home </a> &nbsp;/&nbsp; Contact Us</h2> --}}
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Our Location</h3>
                    <div class="divider-fade"></div>
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29444.45753059948!2d75.87245923057964!3d22.707522397249665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sF-7%2C%20Ishkripa%20Building%20111%20Janki%20Nagar%2C%20Near%20Ram%20Mandir%2C%20Indore!5e0!3m2!1sen!2sin!4v1689849479264!5m2!1sen!2sin" style="border:0;width:100%;height:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h3 class="mb-4">Contact Us</h3>
                        <form method="POST" action="/contactUs">
                            @csrf
                            <div class="form-group">
                                <input type="text"  class="form-control input-custom input-full" name="fname" required placeholder="First Name">
                            </div>
                            @error('fname')
                                <p class="fw-bold text-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <input type="text"  class="form-control input-custom input-full" name="lname" required placeholder="Last Name">
                            </div>
                            @error('lname')
                                <p class="fw-bold text-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <input type="email" class="form-control input-custom input-full" name="email" required placeholder="Email">
                            </div>
                            @error('email')
                                <p class="fw-bold text-danger">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <textarea class="form-control textarea-custom input-full" name="message" rows="8" required placeholder="Message"></textarea>
                            </div>
                            @error('message')
                                <p class="fw-bold text-danger">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Contact Details</h3>
                            <p class="mb-5">Please find below contact details and contact us today!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">F-6 & F-7 Ishkripa Building, 111 Janki Nagar, Near Ram Mandir, Indore</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p"> <a href="tel:919479600605" style="color:white;">+91 9479600605</a>, 
                                        <a href="tel:917987393204" style="color:white;">+91 7987393204 </a><br />
                                        <a href="tel:919753544554" style="color:white;">+91 9753544554 </a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">
                                             <a href="mailto:no-reply@auctiondealassist.com" style="color:white;">no-reply@auctiondealassist.com</a>, 
                                            <a href="mailto:support@auctiondealassist.com" style="color:white;">support@auctiondealassist.com</a>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">10:30 AM - 6:00 PM</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
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