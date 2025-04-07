<!DOCTYPE html>

<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/auth/login">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Admin Login - Auction Deal Assist</title>

    
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <!-- Canonical SEO -->
    <link rel="canonical" href="">
    
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
    <link rel="stylesheet" href="backend_assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="backend_assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../backend_assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../../backend_assets/vendor/css/pages/page-auth.css">
    <!-- Helpers -->
    <script src="../../backend_assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../backend_assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../backend_assets/js/config.js"></script>

    <!-- jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- ajax  -->
    <script src="../../backend_assets/ajax/admin_auth.js"></script>
</head>

<body>
  <!-- Content -->

<div class="authentication-wrapper authentication-cover authentication-bg">
  <div class="authentication-inner row">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 p-0">
      <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
        <img src="../../backend_assets/img/illustrations/auth-login-illustration-light.png" alt="auth-login-cover" class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-login-illustration-light.png" data-app-dark-img="illustrations/auth-login-illustration-dark.html">

        <img src="../backend_assets/img/illustrations/bg-shape-image-light.png" alt="auth-login-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.html">
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
       
        <h3 class="mb-1 fw-bold">Welcome to Admin Pannel! 👋</h3>
        <p class="mb-4">Please sign-in to your account and start the adventure</p>

        <form id="formAuthentication" class="mb-3" action="/adminLogin" method="POST">
            @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Email or Username</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus>
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="password">Password</label>
              <a href="{{ route('forget.password.get') }}">
                <small>Forgot Password?</small>
              </a>
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
            </div>
          </div>
          
          <button class="btn btn-primary d-grid w-100">
            Sign in
          </button>
        </form>
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
<!-- / Content -->

  <!-- <div class="buy-now">
    <a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div> -->
  
  <!-- Core JS -->
  <!-- build:js backend_assets/vendor/js/core.js -->
  <script src="../../backend_assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../backend_assets/vendor/libs/popper/popper.js"></script>
  <script src="../../backend_assets/vendor/js/bootstrap.js"></script>
  <script src="../../backend_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../backend_assets/vendor/libs/node-waves/node-waves.js"></script>
  
  <script src="../../backend_assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../backend_assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../backend_assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="../../backend_assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../backend_assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
  <script src="../../backend_assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
  <script src="../../backend_assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
  <!-- Main JS -->
  <script src="../../backend_assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../backend_assets/js/pages-auth.js"></script>
  
</body>
</html>
<!-- beautify ignore:end -->


