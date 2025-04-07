<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/properties-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2023 10:53:47 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Property Search - Auction Deal Assist</title>
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
    {{-- <link rel="stylesheet" href="../assest/fontawesome/css/fontawesome.css"> --}}
    <link rel="stylesheet" href="../assest/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assest/fontawesome/css/all.css">

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
    <style>
        .inner-pages .form-group .nice-select{
            width:100%;
            margin-top: 10px;
        }
        .list{
            width:100% !important;
            overflow: scroll;
        }
        .inner-pages .nice-select.open .list{
           overflow: scroll; 
        }
         .bloq-email .email{
        display: inline-table !important;
        }
       .nice-select ul{height:300px; width:18%;}
    .nice-select ul{overflow:hidden; overflow-y:scroll;}
    .rld-single-select .single-select .list{
        overflow: auto;
    }
    
    </style>
</head>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container -->
            @include("web/layout/header")
        <!-- Header Container  End -->
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container py-5 py-md-0">
                    <h1>Search Property</h1>
                    {{-- <h2><a href="/">Home </a> &nbsp;/&nbsp; Search Property</h2> --}}
                </div>
            </div>
        </section>
        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-right featured portfolio blog pt-5">
            <div class="container" style="padding-top:-100px;">
               
                <div class="row">
                    <div class="col-lg-12 col-md-12 blog-pots">
                        <div class="row">
                            @if(count($search) == 0)
                             <div class="alert alert-danger w-100" role="alert">
                                  <i class="fa fa-exclamation-triangle"></i> &nbsp;  Not yet any searched property.
                              </div>
                            @else
                                @foreach ($search as $data)
                                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                                        <div class="project-single" data-aos="fade-up">
                                            <div class="project-inner project-head">
                                                <div class="homes">
                                                    <!-- homes img -->
                                                    <a href="/listing-details/{{$data->id}}" class="homes-img d-flex" style="background:#41484F;height:50px;">
                                                    
                                                        <div class="homes-tag button alt sale" style="margin-top:9px !important;">For Sale</div>
                                                        <div class="homes-price" style="margin-bottom:-11px !important;"><i class="fa fa-inr text-white" style="font-size:19px;"></i> <span style="font-size:18px;">{{$data->reserve_price}}</span></div>
                                                        
                                                        
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <!-- homes content -->
                                            <div class="homes-content">
                                                <!-- homes address -->
                                                <h3 class="text-capitalize"><a href="/listing-details/{{$data->id}}">{{$data->bank_name}}</a></h3>
                                                <p class="homes-address mb-3">
                                                    <a href="/listing-details/{{$data->id}}">
                                                        <i class="fa fa-map-marker"></i><span  style="text-transform:uppercase;font-size:11px;">{{$data->locality}}, {{$data->city}}, {{$data->state}}</span>
                                                    </a>
                                                </p>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                           
                            
                        </div>
                        
                        
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        
                    </aside>
                </div>
                <!-- start pagination -->
                @if(!empty($search))
                    <center>
                        {{ $search->links('vendor.pagination.custom') }}
                    </center>
                @endif
                <!-- end pagination -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

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
