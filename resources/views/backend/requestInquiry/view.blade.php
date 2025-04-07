
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/auth/login">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>View Request Inquiry - Auction Deal Asset</title>
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
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Request Inquiry /</span> View
    </h4>
        <!-- Bootstrap Table with Header - Dark -->
        <div class="card">
            <h5 class="card-header">Total Request Inquiry <span class="badge bg-primary">{{count($list)}}</span></h5>
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0 view-property text-capitalize">
                    @foreach($list as $data)
                        <tr>
                            <td><strong>{{$data->full_name}}</strong></td>
                            <td ><strong>{{$data->mobile}}</strong></td>
                            <td ><a href="mailto:{{$data->email}}">{{$data->email}}</a></td>
                            <td>
                                {{$data->message}}
                            </td>
                            <td >
                                <div class="dropdown d-flex">
                                    <a class="dropdown-item m-0" href="/request-inquiry/view-in-details/{{$data->id}}" style="width:20%;"><i class="ti ti-eye text-primary" title="View In Details"></i></a>
                                    <a class="dropdown-item m-0" href="/request-inquiry/delete/{{$data->id}}" style="width:20%;"><i class="ti ti-trash me-1 text-danger" title="Delete"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
        
    
    </div>
    <!-- start pagination -->

    <center>
        @if(!empty($list))
            {{ $list->links('vendor.pagination.custom') }}
        @endif
    </center>
    <!-- end pagination -->
    <!-- / Content -->
      

      <!-- START FOOTER -->
      @include('backend.layout.footer')
      <!-- END FOOTER -->

          
       