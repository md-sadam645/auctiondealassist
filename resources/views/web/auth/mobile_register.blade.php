<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>About Us - Auction Deal Assist</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assest/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="../assest/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../assest/css/animate.css">
    <link rel="stylesheet" href="../assest/css/magnific-popup.css">
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    <link rel="stylesheet" href="../assest/css/slick.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    <!--<link rel="stylesheet" id="color" href="../assest/css/default.css">-->
    <link rel="stylesheet" href="../assest/css/maps.css">
    <link rel="stylesheet" id="color" href="../assest/css/colors/pink.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="inner-pages hd-white about">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container -->
            @include("web/layout/header")
        <!-- Header Container  End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container py-5">
                    <h1>REGISTER</h1>
                    {{-- <h2><a href="/">Home </a> &nbsp;/&nbsp; Register</h2> --}}
                </div>
            </div>
        </section>
        <div id="login">
            <div class="login">
                <form method="POST" action="/customerRegister" class="main-register-form" id="main-register-form2">
                    @csrf
                    {{-- <label>Profile Image <span class="text-danger">*</span></label>
                    <input name="profile_img" type="file" required="required" class="form-control mb-3" accept="image/*" style="border-color:#ccc;"> --}}

                    <label>Full Name <span class="text-danger">*</span></label>
                    <input name="full_name" type="text" required="required" class="form-control mb-3" style="border-color:#ccc;">
    
                    <label>Email <span class="text-danger">*</span></label>
                    <input name="email" type="email" required="required" class="form-control mb-3" style="border-color:#ccc;">
    
                    <label>Mobile <span class="text-danger">*</span></label>
                    <input name="mobile" type="text" required="required" class="form-control mb-3" style="border-color:#ccc;">
    
                    <label>Password <span class="text-danger">*</span></label>
                    <input name="password" type="password" required="required" class="form-control mb-3" style="border-color:#ccc;">
    
                    <label>Address <span class="text-danger">*</span></label>
                    <textarea name="address" required="required" class="form-control mb-3" style="border-color:#ccc;"></textarea>
    
                    <input name="role" type="number" required="required" value="3" class="form-control d-none">
                    <button type="submit" class="log-submit-btn btn btn-primary mb-3">Register</button>
                </form>
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="/user-login">Sign In</a></strong></div>
            </div>
        </div>
       

        <!-- START FOOTER -->
            @include("web/layout/footer")
        <!-- END FOOTER -->
