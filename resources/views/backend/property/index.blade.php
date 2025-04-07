<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../backend_assets/" data-template="backend/layout/index">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Add Property - Auction Deal Asset</title>
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
    <script src="../../backend_assets//vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../backend_assets//js/config.js"></script>

    <style>
        #bank-name{
            overflow-y:auto;
        }
            option{
            overflow-y:scroll;
        }
    </style>
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
                    
                        <!-- split current url -->
                        @php 
                            $url = url()->current();
                            $split_data = explode('/',$url); 
                        @endphp

                         @if($split_data[4] == "index")
                            <!--Start - import property Form excel -->
                            <div class="d-flex justify-content-between mb-5">
                                <h5 class="card-header">Add Property</h5>
                                <form method="POST" action="/property/import" enctype="multipart/form-data">
                                    @csrf
                                    <button type="submit" class="btn btn-primary float-end">Import Property</button>
                                    <input type="file" name="file" class="form-control mx-2 float-end w-50" required>
                
                                </form> 
                            </div>
                            <!--End - import property Form excel -->

                            <!--Start -add manual property -->
                            <form class="add-property-form card-body" method="POST" action="/newProperty" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="bank-name" class="form-label">Bank Name</label><span class="text-danger">*<span>
                                        <div class="select-wrap">
                                            <select class="form-control" id="bank-name" name="bank_name">
                                                @foreach ($bankName as $bank_data)
                                                    <option value="{{$bank_data->bank_name}}">{{$bank_data->bank_name}}</option>
                                                    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="property-detail" class="form-label">Property Details</label><span class="text-danger">*<span>
                                        <input type="text" id="property-detail" class="form-control" name="property_details" placeholder="ALL THAT PIECE OR PARCEL.." required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="borrower-name" class="form-label">Borrower Name</label><span class="text-danger">*<span>
                                        <input type="text" class="form-control" id="borrower-name" name="borrower_name" placeholder="Rajendra" required>
                                    </div>
                                    <div class="col-md-6"> 
                                        <label for="branch-name-and-address" class="form-label">Branch Name / Address</label>
                                        <input type="text" class="form-control" id="branch-name-and-address" name="branch_name_and_address" placeholder="mp nagar" >
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label label for="Property-type" class="form-label">Property Type</label>
                                        <input type="text" class="form-control" id="property-type" name="property_type" placeholder="shop" >
                                    </div>
                                
                                    <div class="col-md-6">
                                        <div class="form-password-toggle">
                                            <label for="area" class="form-label">Area</label>
                                            <input type="text" class="form-control" id="area" name="area" placeholder="312.47">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="possession" class="form-label">Possession</label><span class="text-danger">*<span>
                                        <input type="text" class="form-control" id="possession" name="possession" placeholder="physical" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="locality" class="form-label">Locality</label>
                                        <input type="text" class="form-control" id="locality" name="locality" placeholder="mp nagar">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City</label><span class="text-danger">*<span>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="bhopal" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state" placeholder="madhya pradesh">
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label for="reserve-Price" class="form-label">Reserve Price</label><span class="text-danger">*<span>
                                        <input type="number"  class="form-control" id="reserve-Price" name="reserve_price" placeholder="75000" aria-label="75000" required />
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <label for="emd-amount" class="form-label">Emd Amount</label><span class="text-danger">*<span>
                                        <input type="number"  class="form-control" id="emd-amount" name="emd_amount" placeholder="7000" aria-label="2000" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bid-increment" class="form-label">Bid Increment</label>
                                        <input type="number"  class="form-control" id="bid-increment" name="bid_increment" placeholder="3000" aria-label="3000" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="insepection-date" class="form-label">Inspection Date</label>
                                        <input type="date" class="form-control" id="insepection-date" name="inspection_date">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emd-submission" class="form-label">EMD Submission</label>
                                        <input type="date" id="emd-submission" class="form-control" name="emd_submission" placeholder="YYYY-MM-DD"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="auction-start" class="form-label">Auction Start Date & Time</label><span class="text-danger">*<span>
                                        <input type="datetime-local" id="auction-start" class="form-control" name="auction_start" placeholder="YYYY-MM-DD" required="required" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="auction-end" class="form-label">Auction End Date & Time</label><span class="text-danger">*<span>
                                        <input type="datetime-local" id="auction-end" class="form-control" name="auction_end" placeholder="YYYY-MM-DD" required="required" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="authorized-officer" class="form-label">Authorized Officer</label>
                                        <input type="text" class="form-control" id="authorized-officer" name="authorized_officer" placeholder="Devendra" >
                                    </div>
                                    <div class="col-md-6">
                                        <label for="auction-portal" class="form-label">Auction Portal</label>
                                        <input type="website" class="form-control" id="auction-portal" name="auction_portal" placeholder="https://www.abc.in">
                                    </div>

                                    @if(Auth::user()->role == 1)
                                        <div class="col-md-6 d-none">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="number"  class="form-control" id="status" name="status" required="required" value="1">
                                        </div>
                                    @else
                                        <div class="col-md-6 d-none">
                                            <label for="status" class="form-label">Status</label>
                                            <input type="number"  class="form-control" id="status" name="status" required="required" value="0">
                                        </div>
                                    @endif

                                    <div class="col-md-6 d-none">
                                        <label for="add-by" class="form-label">Add By</label>
                                        <input type="text"  class="form-control" id="add-by" name="add_by" required="required" value="{{Auth::user()->id}}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="sale-notice" class="form-label">Sale Notice</label>
                                        <input type="file" id="sale-notice" class="form-control" name="sale_notice" accept="application/pdf, image/png, image/gif, image/jpeg"/>
                                    </div>
                                    
                                    <div class="pt-4">
                                        <button type="submit" class="btn btn-primary">Add Property</button>
                                    </div>
                                </div>
                            </form>
                            <!--End -add manual property -->
                        @else
                            <!--Start - Updated property Form-->
                            @foreach($list as $data)
                            
                            <h5 class="card-header mb-4">Update Property</h5>
                            <form class="add-property-form card-body" method="POST" action="/property/update/{{$data->id}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="bank-name" class="form-label">Bank Name</label><span class="text-danger">*<span>
                                        <div class="select-wrap">
                                            <select class="form-control" id="bank-name" name="bank_name">
                                                @foreach ($bankName as $bank_data)
                                                    @if($bank_data->bank_name == $data->bank_name)
                                                        <option value="{{$bank_data->bank_name}}" selected>{{$bank_data->bank_name}}</option>
                                                    @else
                                                        <option value="{{$bank_data->bank_name}}">{{$bank_data->bank_name}}</option>
                                                    @endif
                                                    
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <label for="property-detail" class="form-label">Property Details</label><span class="text-danger">*<span>
                                        <textarea type="text" id="property-detail" class="form-control" name="property_details" required>{{$data->property_details}}</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="borrower-name" class="form-label">Borrower Name</label><span class="text-danger">*<span>
                                        <input type="text" class="form-control" id="borrower-name" name="borrower_name" placeholder="Rajendra" value="{{$data->borrower_name}}" required>
                                    </div>
                                    <div class="col-md-6"> 
                                        <label for="branch-name-and-address" class="form-label">Branch Name / Address</label>
                                        <input type="text" class="form-control" id="branch-name-and-address" name="branch_name_and_address" placeholder="mp nagar" value="{{$data->branch_name_and_address}}">
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label label for="Property-type" class="form-label">Property Type</label>
                                        <input type="text" class="form-control" id="property-type" name="property_type" placeholder="shop" value="{{$data->property_type}}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-password-toggle">
                                            <label for="area" class="form-label">Area</label>
                                            <input type="text" class="form-control" id="area" name="area" placeholder="312.47" value="{{$data->area}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="possession" class="form-label">Possession</label><span class="text-danger">*<span>
                                        <input type="text" class="form-control" id="possession" name="possession" placeholder="physical" value="{{$data->possession}}" required>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="locality" class="form-label">Locality</label>
                                        <input type="text" class="form-control" id="locality" name="locality" placeholder="mp nagar" value="{{$data->locality}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="bhopal" value="{{$data->city}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="state" class="form-label">State</label><span class="text-danger">*<span>
                                        <input type="text" class="form-control" id="state" name="state" placeholder="madhya pradesh" value="{{$data->state}}" required>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label for="reserve-Price" class="form-label">Reserve Price</label><span class="text-danger">*<span>
                                        <input type="number"  class="form-control" id="reserve-Price" name="reserve_price" placeholder="75000" value="{{$data->reserve_price}}" aria-label="75000" required />
                                    </div>

                                
                                    <div class="col-md-6">
                                        <label for="emd-amount" class="form-label">Emd Amount</label><span class="text-danger">*<span>
                                        <input type="number"  class="form-control" id="emd-amount" name="emd_amount" placeholder="7000" aria-label="2000" value="{{$data->emd_amount}}" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bid-increment" class="form-label">Bid Increment</label>
                                        <input type="number"  class="form-control" id="bid-increment" name="bid_increment" placeholder="3000" aria-label="3000" value="{{$data->bid_increment}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inspection-date" class="form-label">Inspection Date</label>
                                        <input type="date" class="form-control" id="inspection-date" name="inspection_date" placeholder="india" value="{{$data->inspection_date}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="emd-submission" class="form-label">EMD Submission</label>
                                        <input type="date" id="emd-submission" class="form-control" name="emd_submission" placeholder="YYYY-MM-DD" value="{{$data->emd_submission}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="auction-start" class="form-label">Auction Start Date & Time</label><span class="text-danger">*<span>
                                        <input type="datetime-local" id="auction-start" class="form-control" name="auction_start" placeholder="YYYY-MM-DD" value="{{$data->auction_start}}" required="required" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="auction-end" class="form-label">Auction End Date & Time</label><span class="text-danger">*<span>
                                        <input type="datetime-local" id="auction-end" class="form-control" name="auction_end" placeholder="YYYY-MM-DD" value="{{$data->auction_end}}" required="required" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="authorized-officer" class="form-label">Authorized Officer</label>
                                        <input type="text" class="form-control" id="authorized-officer" name="authorized_officer" placeholder="Devendra" value="{{$data->authorized_officer}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="auction-portal" class="form-label">Auction Portal</label>
                                        <input type="website" class="form-control" id="auction-portal" name="auction_portal" placeholder="https://www.abc.in" value="{{$data->auction_portal}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sale-notice" class="form-label">Sale Notice</label>
                                        <input type="file" id="sale-notice" class="form-control" name="sale_notice" accept="application/pdf, image/png, image/gif, image/jpeg" />
                                    </div>
                                    <div class="pt-4">
                                        <button type="submit" class="btn btn-primary">Update Property</button>
                                    </div>
                                </div>   
                            </form>

                            @endforeach
                            <!--End - Updated property Form-->
                        @endif
                    
                    </div>
                </div>       
            </div>
            <!-- / Content -->

        <!-- START FOOTER -->
        @include('backend.layout.footer')
        <!-- END FOOTER -->

        
        