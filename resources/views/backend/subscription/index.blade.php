
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/auth/login">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Add Subscription - Auction Deal Asset</title>
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
    <!-- Helpers -->
    <script src="../../backend_assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../backend_assets//vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
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
<div class="row">
    <div class="col-xl bg-white p-4">
        
        @php 
            $url = url()->current();
            $split_data = explode('/',$url); 
        @endphp

        @if($split_data[4] == "index")
        <!---Start -Add subscription-->
        <h5 class="card-header mb-4">Add Subscription</h5>
            <form class="add-property-form card-body" action="/newSubscription" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="plan-name" class="form-label">Plan Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="plan-name" name="plan_name" placeholder="Basic" required>
                    </div>
                    <div class="col-md-6">
                        <label label for="price" class="form-label">Price</label><span class="text-danger">*</span>
                        <input type="number" class="form-control" id="price" name="price" placeholder="500" required>
                    </div>
                    <div class="col-md-6">
                        <label for="duration" class="form-label">Duration</label><span class="text-danger">*</span>
                        <select class="form-control" id="duration" name="duration" required>
                            <option value="1">1 month</option>
                            <option value="2">2 months</option>
                            <option value="3">3 months</option>
                            <option value="4">4 months</option>
                            <option value="5">5 months</option>
                            <option value="6">6 months</option>
                            <option value="7">7 months</option>
                            <option value="8">8 months</option>
                            <option value="9">9 months</option>
                            <option value="10">10 months</option>
                            <option value="11">11 months</option>
                            <option value="12">12 months</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="archives" class="form-label">Archives</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="archives" name="archives" placeholder="6 months of archives" required>
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary">Add Subscription</button>
                    </div>
                </div>
            </form>
        <!---End -Add subscription-->
        @else
        @foreach ($list as $data)
        <!---Start -Update subscription-->
        <h5 class="card-header mb-4">Update Subscription</h5>
            <form class="add-property-form card-body" action="/subscription/update/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="plan-name" class="form-label">Plan Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="plan-name" name="plan_name" required value="{{$data->plan_name}}">
                    </div>
                    <div class="col-md-6">
                        <label label for="price" class="form-label">Price</label><span class="text-danger">*</span>
                        <input type="number" class="form-control" id="price" name="price" required value="{{$data->price}}">
                    </div>
                    <div class="col-md-6">
                        <label for="duration" class="form-label">Duration</label><span class="text-danger">*</span>
                    
                        <select class="form-control" id="duration" name="duration" required value="{{$data->duration}}">
                            @if($data->duration == 1)<option value="1"  selected>1 months</option> @else <option value="1">1 months</option> @endif
                            @if($data->duration == 2)<option value="2"  selected>2 months</option> @else <option value="2">2 months</option> @endif
                            @if($data->duration == 3)<option value="3"  selected>3 months</option> @else <option value="3">3 months</option> @endif
                            @if($data->duration == 4)<option value="4"  selected>4 months</option> @else <option value="4">4 months</option> @endif
                            @if($data->duration == 5)<option value="5"  selected>5 months</option> @else <option value="5">5 months</option> @endif
                            @if($data->duration == 6)<option value="6"  selected>6 months</option> @else <option value="6">6 months</option> @endif
                            @if($data->duration == 7)<option value="7"  selected>7 months</option> @else <option value="7">7 months</option> @endif
                            @if($data->duration == 8)<option value="8"  selected>8 months</option> @else <option value="8">8 months</option> @endif
                            @if($data->duration == 9)<option value="9"  selected>9 months</option> @else <option value="9">9 months</option> @endif
                            @if($data->duration == 10)<option value="10"  selected>10 months</option> @else <option value="10">10 months</option> @endif
                            @if($data->duration == 11)<option value="11"  selected>11 months</option> @else <option value="11">11 months</option> @endif
                            @if($data->duration == 12)<option value="12"  selected>12 months</option> @else <option value="12">12 months</option> @endif
                            
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="archives" class="form-label">Archives</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="archives" name="archives" required value="{{$data->archives}}">
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary">Update Subscription</button>
                    </div>
                </div>
            </form>
        <!---End -Update subscription-->
        @endforeach

        @endif
    </div>       
</div>
</div>
</div>
<!-- / Content -->

          
           <!-- START FOOTER -->
        @include('backend.layout.footer')
        <!-- END FOOTER -->



          
        