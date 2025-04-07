
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/auth/login">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Add Agent - Auction Deal Asset</title>
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
        <h5 class="card-header mb-4">Add Consultant</h5>
            <form class="add-property-form card-body" action="/consultantAdd" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="full-name" class="form-label">Full Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="full-name" name="full_name" placeholder="Rajendra Mishra" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label><span class="text-danger">*</span>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="form-label">Mobile</label><span class="text-danger">*</span>
                        <input type="number" class="form-control agent-mobile" id="mobile" name="mobile" placeholder="1234567890" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label><span class="text-danger">*</span>
                        <input type="password" class="form-control agent_pass" id="password" name="password" placeholder="*******">
                    </div>

                    <div class="col-md-6">
                        <label for="consultant-profile" class="form-label">Consultant Profile</label><span class="text-danger">*</span>
                        <input type="file" class="form-control" id="consultant-profile" name="profile_img" required>
                    </div>

                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label><span class="text-danger">*</span>
                        <textarea class="form-control" name="address" required>mp nagar,bhopal,madhya pradesh</textarea>
                    </div>

                    <div class="col-md-6 d-none">
                        <label for="role" class="form-label">Role</label><span class="text-danger">*</span>
                        <input type="number" class="form-control" id="role" name="role" value="2" required>
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary agent-btn">Add consultant</button>
                    </div>
                </div>
            </form>
        @else
        @foreach ($list as $data)
        <h5 class="card-header mb-4">Update Consultant</h5>
            <form class="add-property-form card-body" action="/consultantUpdate/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="full-name" class="form-label">Full Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="full-name" name="full_name" value="{{$data->full_name}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label><span class="text-danger">*</span>
                        <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="mobile" class="form-label">Mobile</label><span class="text-danger">*</span>
                        <input type="number" class="form-control update-agent-mobile" id="mobile" name="mobile" value="{{$data->mobile}}" required>
                    </div>
                    
                    {{-- <div class="col-md-6">
                        <label for="password" class="form-label">Password</label><span class="text-danger">*</span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                    </div> --}}

                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label><span class="text-danger">*</span>
                        <textarea class="form-control" name="address" required>{{$data->address}}</textarea>
                    </div>
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary agent-btn">Update Consultant</button>
                    </div>
                </div>
            </form>
        @endforeach

        @endif
    </div>       
</div>
</div>
<!-- / Content -->

          
           <!-- START FOOTER -->
        @include('backend.layout.footer')
        <!-- END FOOTER -->



          
        