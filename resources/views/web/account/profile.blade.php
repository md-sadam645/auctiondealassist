<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>My Subscriptions - Auction Deal Assist</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}">
    <link rel="stylesheet" href="../assest/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assest/font/flaticon.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="../assest/css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../assest/css/animate.css">
    <link rel="stylesheet" href="../assest/css/magnific-popup.css">
    <link rel="stylesheet" href="../assest/css/search.css">
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    <link rel="stylesheet" href="../assest/css/slick.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="stylesheet" id="color" href="../assest/css/default.css">
    
    <!-- Icons -->
    <link rel="stylesheet" href="../backend_assest/vendor/fonts/tabler-icons.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../backend_assest/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../backend_assest/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="../backend_assest/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../backend_assest/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../backend_assest/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    
<style>
  #logo{
        margin-left:-25px !important;
    }

    .add-list-btn{
        margin-left:5px !important;
    }

    .header-user-menu{
        margin-right:20px !important;
    }

    @media(max-width:768px)
            {
                #logo{
                margin-left:5% !important;
            }
        
            .add-list-btn{
                margin-left:0px !important;
            }
        
            .header-user-menu{
                margin-right:10% !important;
            }
        }
</style>
</head>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container -->
        @include("web/layout/header")
        
     

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y p-lg-5">
            <div class="row mt-5 pt-5 px-0 px-lg-5">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-4">
                    <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ti-xs ti ti-users me-1"></i> Account</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/account/security') }}"><i class="ti-xs ti ti-lock me-1"></i> Security</a></li>
                    </ul>
                    <div class="card mb-4">
                    <h5 class="card-header bg-white">Profile Details</h5>
                    
                    @foreach ($list as $data)
                    {{-- <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="../{{$data->profile_img}}" alt="{{$data->profile_img}}" style="width:100px;" class="d-block rounded shadow-sm" />
                        
                        </div>
                    </div> --}}
                    <!-- Account -->
                    <hr class="my-0">
                    <div class="card-body">
                        <form action="/userProfileUpdate/{{$data->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row px-2">
                                {{-- <div class="mb-3 col-md-6">
                                    <label for="profile-img" class="form-label">Profile Image</label><br />
                                    <input type="file" class="form-control w-100" id="profile-profile" name="profile_img">
                                </div> --}}

                                <div class="mb-3 col-md-6">
                                    <label for="full-name" class="form-label">Full Name</label><span class="text-danger">*</span>
                                    <input class="form-control" type="text" id="full-name" name="full_name" value="{{$data->full_name}}" required />
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="mobile">Mobile</label><span class="text-danger">*</span>
                                    <input type="number" id="mobile" name="mobile" class="form-control" value="{{$data->mobile}}" required/>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="address" class="form-label">Address</label><span class="text-danger">*</span>
                                    <textarea type="text" class="form-control" id="address" name="address" required>{{$data->address}}</textarea>
                                </div>
                            
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    
                                </div>
                            </div>
                        </form>
                        @endforeach 
                
                    </div>
                    <!-- /Account -->
                    </div>
                    {{-- <div class="card">
                        <h5 class="card-header">Delete Account</h5>
                        <div class="card-body">
                            <div class="mb-3 col-12 mb-0">
                            <div class="alert alert-warning">
                                <h5 class="alert-heading mb-1">Are you sure you want to delete your account?</h5>
                                <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                            </div>
                            </div>
                            <form id="formAccountDeactivation" onsubmit="return false">
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                                <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                            </div>
                            <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                            </form>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- / Content -->


        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Auction Deal<strong> Assist</strong></span></h3>
                    
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <!-- login Container -->
                                @include("web/auth/login")
                            <!-- login Container  End -->

                            <!-- login Container -->
                                @include("web/auth/signup")
                            <!-- login Container  End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
        
        <!-- START FOOTER -->
        @include("web/layout/footer")
        <!-- END FOOTER -->
       

   
