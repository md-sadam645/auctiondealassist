<!DOCTYPE html>

<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/backend/forget_password">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Reset Password - Auction Deal Assist</title>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
   
    
    
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
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Content -->

<div class="authentication-wrapper authentication-cover authentication-bg">
  <div class="authentication-inner row">

    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 p-0">
      <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
        <img src="../../backend_assets/img/illustrations/auth-forgot-password-illustration-light.png" alt="auth-forgot-password-cover" class="img-fluid my-5 auth-illustration" data-app-light-img="illustrations/auth-forgot-password-illustration-light.png" data-app-dark-img="illustrations/auth-forgot-password-illustration-dark.html">

        <img src="../../backend_assets/img/illustrations/bg-shape-image-light.png" alt="auth-forgot-password-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.html">
      </div>
    </div>
    <!-- /Left Text -->
    
    <!-- Reset Password -->
    <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-4">
          <a href="index.html" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
            <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
            <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
            <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
            </svg>
    </span>
          </a>
        </div>
        <!-- /Logo -->
        <h3 class="mb-1 fw-bold">Reset Password? 🔒</h3>
        {{-- <p class="mb-4">Enter your email and we'll send you Instructions to reset your password</p> --}}
        <form class="mb-3" action="{{ route('reset.password.post') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
          <div class="mb-3">
            <label for="email" class="form-label">E-Mail Address</label><span class="text-danger">*</span>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required autofocus>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label><span class="text-danger">*</span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required autofocus>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>

          <div class="mb-3">
            <label for="password-confirmation" class="form-label">Confirm Password</label><span class="text-danger">*</span>
            <input type="password" class="form-control" id="password-confirmation" name="password_confirmation" placeholder="Enter your Password" required autofocus>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
          </div>

          <button class="btn btn-primary d-grid w-100" type="submit">Reset Password</button>
        </form>
      </div>
    </div>
    <!-- /Reset Password -->
  </div>
</div>

<!-- / Content -->


  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
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

