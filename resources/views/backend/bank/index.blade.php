
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/auth/login">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Add Bank - Auction Deal Asset</title>
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
        <h5 class="card-header mb-4">Add Bank</h5>
            <form class="add-property-form card-body" action="/addBank" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="bank-type" class="form-label"></label>Bank Type<span class="text-danger">*</span>
                        <select class="form-control" name="bank_type" id="bank-type">
                            <option value="private">Private</option>
                            <option value="public">Public</option>
                            <option value="government">Government</option>
                            <option value="nbfc">NBFC (Non- Banking Financial Corporation)</option>
                            <option value="high court">High Court</option>
                            <option value="liquidation">Liquidation</option>
                            <option value="nclt">NCLT (National Company Law Tribunal)</option>
                            <option value="drt">DRT (Debt Recovery Tribunal)</option>
                            <option value="drat">DRAT (Debt Recovery Appellate Tribunal)</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="bank-name" class="form-label">Bnak Name</label><span class="text-danger">*</span>
                        <input type="text" class="form-control" id="bank-name" name="bank_name" placeholder="sbi" required>
                    </div>
                    
                    <div class="pt-4">
                        <button type="submit" class="btn btn-primary">Add Bank</button>
                    </div>
                </div>
            </form>
        @else
        @foreach ($list as $data)
        <h5 class="card-header mb-4">Update Bank</h5>
        <form class="add-property-form card-body" action="/updateBank/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="bank-type" class="form-label"></label>Bank Type<span class="text-danger">*</span>
                    <select class="form-control" name="bank_type" id="bank-type">
                        @if($data->bank_type == 'private') <option value="private" selected>Private</option> @else <option value="private">Private</option>@endif
                        @if($data->bank_type == 'public')<option value="public" selected>Public</option> @else <option value="public">Public</option> @endif
                        @if($data->bank_type == 'government')<option value="government" selected>Government</option> @else <option value="government">Government</option>@endif
                        @if($data->bank_type == 'nbfc')<option value="nbfc" selected>NBFC (Non- Banking Financial Corporation)</option>@else @endif
                        @if($data->bank_type == 'high court')<option value="high court" selected>High Court</option>@else <option value="high court">High Court</option>@endif
                        @if($data->bank_type == 'liquidation')<option value="liquidation" selected>Liquidation</option>@else <option value="liquidation">Liquidation</option>@endif
                        @if($data->bank_type == 'nclt')<option value="nclt" selected>NCLT (National Company Law Tribunal)</option>@else <option value="nclt">NCLT (National Company Law Tribunal)</option>@endif
                        @if($data->bank_type == 'drt')<option value="drt" selected>DRT (Debt Recovery Tribunal)</option>@else<option value="drt">DRT (Debt Recovery Tribunal)</option> @endif
                        @if($data->bank_type == 'drat')<option value="drat" selected>DRAT (Debt Recovery Appellate Tribunal)</option>@else <option value="drat">DRAT (Debt Recovery Appellate Tribunal)</option>@endif
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="bank-name" class="form-label">Bnak Name</label><span class="text-danger">*</span>
                    <input type="text" class="form-control" id="bank-name" name="bank_name" value="{{$data->bank_name}}" required>
                </div>
                
                <div class="pt-4">
                    <button type="submit" class="btn btn-primary">Update Bank</button>
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



          
        