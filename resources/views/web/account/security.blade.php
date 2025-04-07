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
    <link rel="stylesheet" href="../assest/css/jquery-ui.css">
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
    <link rel="stylesheet" href="../assest/css/search.css">
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    <link rel="stylesheet" href="../assest/css/slick.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="stylesheet" id="color" href="../assest/css/default.css">


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../backend_assest/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../backend_assest/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../backend_assest/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../backend_assest/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../backend_assest/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../backend_assest/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../backend_assest/css/demo.css" />

    <script src="../../backend_assets/vendor/libs/jquery/jquery.js"></script>
    <!-- account-setting-security JS -->
    <script src="../../backend_assets/js/pages-account-settings-security.js"></script>
  
    <style>
        #logo{
        margin-left:-25px !important;
    }

    .add-list-btn{
        margin-left:5px !important;
    }

    .header-user-menu{
        margin-right:20px !important;
    }

    @media(max-width:768px)
            {
                #logo{
                margin-left:5% !important;
            }
        
            .add-list-btn{
                margin-left:0px !important;
            }
        
            .header-user-menu{
                margin-right:10% !important;
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
        
     

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
        

            <div class="row mt-5 pt-5 px-0 px-lg-5">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-4">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/account/profile') }}"><i class="ti-xs ti ti-users me-1"></i> Account</a></li>
                        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ti-xs ti ti-lock me-1"></i> Security</a></li>
                    </ul>
                    
                    <!-- Change Password -->
                    <div class="card mb-4">
                        <h5 class="card-header">Change Password</h5>
                        <div class="card-body">
                        <form method="POST" action="/userChangePassword/{{Auth::user()->id}}">
                            @csrf
                            <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="currentPassword">Current Password</label><span class="text-danger">*</span>
                                <div class="input-group input-group-merge">
                                    <input class="form-control pass-val" type="password" name="currentPassword" id="currentPassword" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer user-account-pass"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="newPassword">New Password</label><span class="text-danger">*</span>
                                <div class="input-group input-group-merge">
                                    <input class="form-control pass-val" type="password" id="newPassword" name="newPassword" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer user-account-pass"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="confirmPassword">Confirm New Password</label><span class="text-danger">*</span>  
                                <div class="input-group input-group-merge">
                                <input class="form-control pass-val" type="password" name="confirmPassword" id="confirmPassword" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <span class="input-group-text cursor-pointer user-account-pass"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <h6>Password Requirements:</h6>
                                <ul class="ps-3 mb-0">
                                <li class="mb-1 length-val">Minimum 8 characters long - the more, the better</li>
                                <li class="mb-1 text-danger d-none not-match-pass">Doesn't Matched Confirm Password With New Password</li>
                                <li class="mb-1 text-success d-none match-pass">Matched Confirm Password With New Password</li>
                                </ul>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary me-2" id="pass-change-btn">Save changes</button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <!--/ Change Password -->
                </div>
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
       

   
