<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Listing - Auction Deal Assist</title>
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

    <!---Jquery cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!---Google maps api-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6w-fH0j4NGMEXB9i60p2SQHtFbVsdWtI&libraries=places&callback=initMap"></script>
    <!---Autocomplete location search-->
    <script type="text/javascript">
        $(document).ready(function(){
            var autocomplete;

            autocomplete = new google.maps.places.Autocomplete((document.getElementById("location")), {
                types: ['geocode'],
                componentRestrictions: {
                    country: "IND"
                }
            });
        });
    </script>
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
                    <h1>Listing</h1>
                    {{-- <h2><a href="/">Home </a> &nbsp;/&nbsp; Listing</h2> --}}
                </div>
            </div>
        </section>
        <!-- START SECTION PROPERTIES LISTING -->
        <section class="properties-right featured portfolio blog pt-5">
            <div class="container mb-5" style="padding-top:-100px;">
               
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots pt-0">
                        <div class="row border">
                            @foreach ($property as $data)
                                
                            
                            <div class="item col-lg-4 col-md-4 col-xs-12 landscapes sale">
                                <div class="project-single" data-aos="fade-up">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/{{$data->id}}" class="homes-img" style="height:50px;background:#3F474D;">
                                              
                                                <div class="homes-tag button alt sale p-0" style="font-size:12px;width:60px !important;height:20px;">For Sale</div>
                                                <div class="homes-price p-0" style="margin-bottom:-4px !important;"><i class="fa fa-inr text-white" style="font-size:15px;"></i> <span style="font-size:15px;">{{$data->reserve_price}}</span></div>
                                               
                                                
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content" style="padding:6px !important;">
                                        <!-- homes address -->
                                        <h3 class="text-capitalize"><a href="/listing-details/{{$data->id}}" style="font-size:15px !important;">{{$data->bank_name}}</a></h3>
                                        <div class="homes-address mt-2">
                                            <a href="/listing-details/{{$data->id}}" style="display:flex !important;">
                                                <i class="fa fa-map-marker"></i>
                                                <p style="text-transform:uppercase;font-size:10px;color:#666666;line-height:15px;">{{$data->locality}}, {{$data->city}}, {{$data->state}}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="widget">
                            <!-- Search Fields -->
                            <div class="widget-boxed main-search-field">
                                <div class="widget-boxed-header">
                                    <h4>Find Your House</h4>
                                </div>
                                <!-- Search Form -->
                                <div class="trip-search">
                                    <form method="GET" action="/search-property/index">
                                        
                                        <div class="row">
                                        
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <select class="form-control home-ul" required name="property_type" >
                                                    <option value="property type">Property Type</option>
                                                    <option value="residential land flats">Residential  Land / Flats</option>
                                                    <option value="commercial shops office">Commercial Shops / Office</option>
                                                    <option value="industrial">Industrial</option>
                                                    <option value="agriculture">Agriculture</option>
                                                    <option value="warehouse godown">Warehouse/ Godown</option>
                                                    <option value="plant machinery">Plant & Machinery</option>
                                                    <option value="vehicles">Vehicles</option>
                                                    <option value="lease hold">Lease hold</option>
                                                    <option value="liquidator">Liquidator</option>
                                                </select>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <input type="text" name="location" id="location" class="form-control location-input"  placeholder="Enter Location" required>
                                            
                                            </div>
                                        
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <button class="btn text-white mt-3 search-btn w-100" type="submit" style="background:#7A1025;">Search Now</button>
                                            </div>
                                        
                                        </div>
                                    </form>
                                </div>
                                <!--/ End Search Form -->
                            </div>
                            
                            <div class="widget-boxed mt-5" style="z-index:0;">
                                <div class="widget-boxed-header">
                                    <h4>Recent Properties</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="recent-post">
                                        @foreach ($recent as $data)
                                            <div class="recent-main mb-3">
                                                <div class="info-img" style="width:70%;">
                                                    <a href="/listing-details/{{$data->id}}"><h6 class="text-capitalize"style="font-siz:12px;">{{$data->bank_name}}</h6></a>
                                                    <p><i class="fa fa-inr"></i> <span>{{$data->reserve_price}}</span></p>
                                                </div>
                                            </div>    
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </aside>
                </div>
            </div>
            
                <!-- start pagination -->
                @if(!empty($property))
                    <center>
                        {{ $property->links('vendor.pagination.custom') }}
                    </center>
                @endif
                <!-- end pagination -->
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
       

   
