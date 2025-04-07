
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/auth/login">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Request Inquiry View in Details - Auction Deal Asset</title>
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
    <link rel="stylesheet" href="../../backend_assets//vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../backend_assets//vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="../../backend_assets//vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../backend_assets//vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../backend_assets//vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../backend_assets//css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../backend_assets//vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../backend_assets//vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../../backend_assets//vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../backend_assets//vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../backend_assets//vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="../../backend_assets//vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="../../backend_assets//vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="../../backend_assets/css/viewProperty.css">

    
    <!-- Helpers -->
    <script src="../../backend_assets/vendor/js/helpers.js"></script>
    <script src="../../backend_assets//vendor/js/template-customizer.js"></script>
    <script src="../../backend_assets//js/config.js"></script>
</head>
<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
  
    <!-- START header -->
    @include('backend.layout.header')
    <!-- end header -->

    <!-- Content wrapper -->
    <div class="content-wrapper">

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">     
        <!-- Basic Layout -->
        <div class="row bg-white pb-4 px-4">
            <div class="col-xl-12 py-4">
                <h5 class="card-header mb-4">View Request Inquiry In Details</h5>
            </div> 
            <div class="col-md-4">
                <label class="fw-bold">Full Name</label>
                <p class=" text-capitalize">{{$list->full_name}}</p>
            </div>

            <div class="col-md-4">
                <label class="fw-bold">Mobile</label>
                <p class=" text-capitalize">{{$list->mobile}}</p>
            </div>

            <div class="col-md-4">
                <label class="fw-bold">Email</label>
                <p><a href="mailto::{{$list->email}}" class="text-capitalize">{{$list->email}}</a></p>
            </div>

            <div class="col-md-12">
                <label class="fw-bold">Message</label>
                <p class=" text-capitalize border p-2">{{$list->message}}</p>
            </div>
            <div class="col-lg-12 mt-4">
                <a class="btn btn-danger" href="/request-inquiry/delete/{{$list->id}}">Delete</a>
            </div> 
        </div>
    </div>
        <!-- / Content -->
      

      <!-- START FOOTER -->
      @include('backend.layout.footer')
      <!-- END FOOTER -->

          
       