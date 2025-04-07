<!DOCTYPE html>


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/auth/login">

  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/pages-account-settings-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 13:00:27 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Account settings - Account </title>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="../../backend_assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="../../backend_assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../backend_assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../backend_assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/sweetalert2/sweetalert2.css" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="../../backend_assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../backend_assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../backend_assets/js/config.js"></script>
    
</head>

<body>

  <!-- START header -->
  @include('backend.layout.header')
<!-- end header -->


   

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            
            
            <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Account Settings /</span> Security
            </h4>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-4">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/account-setting') }}"><i class="ti-xs ti ti-users me-1"></i> Account</a></li>
                        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ti-xs ti ti-lock me-1"></i> Security</a></li>
                    </ul>
                    
                    <!-- Change Password -->
                    <div class="card mb-4">
                        <h5 class="card-header">Change Password</h5>
                        <div class="card-body">
                        <form method="POST" action="/changePassword/{{session()->get('id')}}">
                            @csrf
                            <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="currentPassword">Current Password</label><span class="text-danger">*</span>
                                <div class="input-group input-group-merge">
                                    <input class="form-control pass-val" type="password" name="currentPassword" id="currentPassword" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="newPassword">New Password</label><span class="text-danger">*</span>
                                <div class="input-group input-group-merge">
                                    <input class="form-control pass-val" type="password" id="newPassword" name="newPassword" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                    <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                                </div>
                            </div>
                
                            <div class="mb-3 col-md-6 form-password-toggle">
                                <label class="form-label" for="confirmPassword">Confirm New Password</label><span class="text-danger">*</span>  
                                <div class="input-group input-group-merge">
                                <input class="form-control pass-val" type="password" name="confirmPassword" id="confirmPassword" required placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
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

          
          

<!-- START footer -->
@include('backend.layout.footer')
<!-- end footer -->