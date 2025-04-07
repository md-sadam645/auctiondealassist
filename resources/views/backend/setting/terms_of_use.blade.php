<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/forms-editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jun 2023 13:01:22 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Term Of Use - Auction Deal Asset</title>

    
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
    <!-- <link rel="stylesheet" href="../../backend_assets/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="../../backend_assets/vendor/libs/quill/editor.css" /> -->

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="../../backend_assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../backend_assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../backend_assets/js/config.js"></script>
    <!-- ck editor cdn -->
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
</head>

<body>

@include("backend.layout.header")

    



    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
            
            
        <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Settings /</span> Terms Of Use
        </h4>

        <div class="row">
            <!-- Full Editor -->
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Full Editor</h5>
                    <form method="POST" action="/setting/term-of-use/update">
                        @csrf
                        <div class="card-body">
                            @if(empty($list->option_name))
                                <textarea name="option_value" required></textarea>
                            @else
                                <textarea name="option_value" required>{{$list->option_value}}</textarea>
                            @endif
                            <input type="text" class="form-control mt-3 d-none" name="option_name" value="terms of use"> 
                        </div>

                        <button type="submit" class="btn btn-primary mb-4 ms-4" style="width:80px;">Update</button>
                    </form>
                    <!-- ck editor js code -->
                    <script>
                        CKEDITOR.replace('option_value');
                    </script>
                </div>
            </div>
            <!-- /Full Editor -->
        </div>

            
    </div>
    <!-- / Content -->
    @include("backend.layout.footer")





          
          


