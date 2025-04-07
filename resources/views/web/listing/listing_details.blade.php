<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Listing Details - Auction Deal Assist</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}">
    <link rel="stylesheet" href="../assest/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:500,600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="../assest/font/flaticon.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assest/css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="../assest/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="../assest/fontawesome/css/fontawesome.css"> --}}
    <link rel="stylesheet" href="../assest/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assest/fontawesome/css/all.css">
    
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="../assest/css/leaflet.css">
    <link rel="stylesheet" href="../assest/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="../assest/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="../assest/css/leaflet.markercluster.default.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="../assest/css/timedropper.css">
    <link rel="stylesheet" href="../assest/css/datedropper.css">
    <link rel="stylesheet" href="../assest/css/animate.css">
    <link rel="stylesheet" href="../assest/css/magnific-popup.css">
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    <link rel="stylesheet" href="../assest/css/slick.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="stylesheet" id="color" href="../assest/css/default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .property-ul li{
            width:100%;
        }
        
    /* @media screen and (max-width: 425px) {
        .font-size-ctrl{
            font-size:10px !important;
        }
    } */
    </style>
    <script>
        //multiple property images caraousel control
        $(document).ready(function(){
            $(".big-img").each(function(index){
                if($(this).attr("data-slide-number") == 0)
                {
                    $(this).addClass("active");
                }
            });

            $(".small-img").each(function(index){
                if($(this).attr("img-no") == 0)
                {
                    $(this).addClass("active");
                }
            });

            
        });
    </script>
</head>

<body class="inner-pages hd-white about">
   
 
<!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container -->
        @include("web/layout/header")
        <!-- Header Container  End -->

        <!-- START SECTION PROPERTIES LISTING -->
        <section class="single-proper blog details">
            <div class="container mt-5 pt-5">
                <div class="row">
                @foreach($list as $data)  
                    
                <div class="col-lg-8 col-md-12 blog-pots add-by">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    
                                    <div class="listing-title-bar">
                                        <h3 class="text-uppercase">{{$data->bank_name}}<span class="mrg-l-5 category-tag">For Sale</span></h3>
                                        
                                        <h4><i class="fa fa-inr"></i> {{$data->reserve_price}}</h4>
                                        <div class="mt-0">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i><span class="text-capitalize" style="font-size:14px;">{{ $data->locality}} , {{ $data->city}} , {{ $data->state}}</span>
                                            </a>
                                        </div>
                                    </div>
                                    
                                </section>
                                <!-- main slider carousel items -->
                                {{-- <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Property Image</h5>
                                    <div class="carousel-inner">
                                    
                                    @php 
                                        if(empty($data->images) && empty($data->profile_image))
                                        {
                                            echo '<div class="active item carousel-item" data-slide-number="0">
                                                <img src="../assest/images/blog/default-img.jpg" class="img-fluid w-100" alt="default-img.jpg">
                                            </div>';
                                        }
                                        else
                                        {
                                            if(empty($data->images))
                                            {
                                                $p_img = $data->profile_image;
                                                echo '<div class="active item carousel-item" data-slide-number="0">
                                                    <img src="../'.$p_img.'" class="img-fluid w-100" alt="'.$p_img.'">
                                                    </div>';
                                            }
                                            else
                                            {
                                                $all_img = json_decode($data->images);
                                                $limit = count($all_img);
                                                for($i=0; $i<$limit; $i++)
                                                {
                                                    echo '<div class="item carousel-item big-img" data-slide-number="'.$i.'">
                                                            <img src="../'.$all_img[$i].'" class="img-fluid w-100" alt="'.$all_img[$i].'">
                                                        </div>';
                                                }
                                            }
                                        }

                                        
                                    @endphp

                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline">
                                    @php 
                                        if(empty($data->images) && empty($data->profile_image))
                                        {
                                            echo '<li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0">
                                                    <img src="../assest/images/blog/default-img.jpg" class="img-fluid" alt="default-img.jpg">
                                                </a>
                                            </li>';
                                        }
                                        else
                                        {
                                            if(empty($data->images))
                                            {
                                                $p_img = $data->profile_image;
                                                echo '<li class="list-inline-item active">
                                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                                        <img src="../'.$p_img.'" class="img-fluid" alt="'.$p_img.'">
                                                    </a>
                                                </li>';
                                            }
                                            else
                                            {
                                                $all_img = json_decode($data->images);
                                                $limit = count($all_img);
                                                for($i=0; $i<$limit; $i++){
                                                
                                                    echo '<li class="list-inline-item small-img" img-no="'.$i.'">
                                                        <a id="carousel-selector-0" class="selected" data-slide-to="'.$i.'" data-target="#listingDetailsSlider">
                                                            <img src="../'.$all_img[$i].'" class="img-fluid" alt="'.$all_img[$i].'">
                                                        </a>
                                                    </li>';
                                                }
                                            }
                                        }

                                        
                                    @endphp

                                    
                                    </ul>
                                    <!-- main slider carousel items -->
                                </div> --}}
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p class="text-justify">{{$data->property_details}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="property-ul clearfix text-capitalize">
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1 ">Bank Name : </span>
                                    <span class="det">{{$data->bank_name}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Branch Name And Address : </span>
                                    <span class="det">{{$data->branch_name_and_address}}</span>
                                </li>
                                
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Borrower Name : </span>
                                    <span class="det">{{$data->borrower_name}}</span>
                                </li>
                                
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det">{{$data->property_type}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Authorized Officer : </span>
                                    <span class="det">{{$data->authorized_officer}}</span>
                                </li>
                                
                               
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Possession : </span>
                                    <span class="det">{{$data->possession}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Locality : </span>
                                    <span class="det">{{$data->locality}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">City : </span>
                                    <span class="det">{{$data->city}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">State : </span>
                                    <span class="det">{{$data->state}}</span>
                                </li class="mb-1">
                                
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Area : </span>
                                    <span class="det">{{$data->area}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Reserve Price : </span>
                                    <i class="fa fa-inr" style="font-size:14px;color:#555555;"></i> <span class="det">{{$data->reserve_price}}</span>
                                </li>
        
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">EMD Amount : </span>
                                    <i class="fa fa-inr" style="font-size:14px;color:#555555;"></i> <span class="det">{{$data->emd_amount}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">BID Increment : </span>
                                    <i class="fa fa-inr" style="font-size:14px;color:#555555;"></i> <span class="det">{{$data->bid_increment}}</span>
                                </li>
    
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Inspection Date : </span>
                                    <span class="det">{{$data->inspection_date}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">EMD Submission : </span>
                                    <span class="det">{{$data->emd_submission}}</span>
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Auction Start : </span>
                                    <?php 
                                        $auc_start_date = $data->auction_start;
                                        if(strpos($auc_start_date,"T") != false)
                                        {
                                            $auc_start_date_time = explode('T',$data->auction_start);
                                            $auc_start_time = explode(":",$auc_start_date_time[1]);
                                        }

                                        if(strpos($auc_start_date," ") != false)
                                        {
                                            $auc_start_date_time = explode(' ',$data->auction_start);
                                            $auc_start_time = explode(":",$auc_start_date_time[1]);
                                        }
                                        
                                    ?>

                                    @if($auc_start_time[0] >= 12 && $auc_start_time[1] >= 00)
                                        <span class="det">{{$auc_start_date_time[0]}} | {{$auc_start_time[0]}} : {{$auc_start_time[1]}} PM</span>
                                    @else
                                        <span class="det">{{$auc_start_date_time[0]}} | {{$auc_start_time[0]}} : {{$auc_start_time[1]}} AM</span>
                                    @endif
                                    
                                </li>
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Auction End : </span>
                                    <?php 
                                        $auc_end_date = $data->auction_end;
                                        if(strpos($auc_end_date,"T") != false)
                                        {
                                            $auc_end_date_time = explode('T',$data->auction_end);
                                            $auc_end_time = explode(":",$auc_end_date_time[1]);
                                        }

                                        if(strpos($auc_end_date," ") != false)
                                        {
                                            $auc_end_date_time = explode(' ',$data->auction_end);
                                            $auc_end_time = explode(":",$auc_end_date_time[1]);
                                        }
                                    ?>

                                    @if($auc_end_time[0] >= 12 && $auc_end_time[1] >= 00)
                                        <span class="det">{{$auc_end_date_time[0]}} | {{$auc_end_time[0]}} : {{$auc_end_time[1]}} PM</span>
                                    @else
                                        <span class="det">{{$auc_end_date_time[0]}} | {{$auc_end_time[0]}} : {{$auc_end_time[1]}} AM</span>
                                    @endif
                                    
                                </li>
                               
                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Auction Portal : </span>
                                    @php
                                    
                                    if(strpos($auction_portal,"http://") == 0 || strpos($auction_portal,"https://") == 0)
                                    {
                                        echo '<a href="'.$data->auction_portal.'" target="_blank"><span class="det text-primary text-lowercase">'.$data->auction_portal.'</span></a>';
                                    }
                                    else
                                    {
                                        echo '<a href="https://'.$data->auction_portal.'" target="_blank"><span class="det text-primary text-lowercase">https://'.$data->auction_portal.'</span></a>';
                                    }
                                    @endphp
                                    
                                </li>

                                <li class="mb-1">
                                    <span class="font-weight-bold mr-1">Sale Notice : </span>
                                    @php 
                                        $sale_data = $data->sale_notice;
                                        $split_data = explode('.',$sale_data); 
                                        
                                    @endphp

                                    @if($split_data[0] != "")
                                        @if($split_data[1] == 'pdf')
                                            <a href="../{{$data->sale_notice}}" class="ml-3" download><i class="fa fa-file-pdf-o" style="font-size:30px;color:red;margin-top:10px;"></i></a>
                                        @elseif($split_data[1] == 'jpeg' || $split_data[1] == 'jpg' || $split_data[1] == 'png' || $split_data[1] == 'gif')
                                            <a href="../{{$data->sale_notice}}" class="ml-3" download><i class="fa fa-image" style="font-size:30px;color:blue;margin-top:10px;"></i></a>
                                        @endif
                                    @endif
                                    
                                </li>
                            </ul>
                            
                        </div>
                        
                        
                        {{-- <div class="property-location map">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div> --}}
                        <!-- Star Reviews -->
                        {{-- <section class="reviews comments">
                            <h3 class="mb-5">3 Reviews</h3>
                            <div class="row mb-5">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../assest/images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Mary Smith</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">May 30 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="rest"><img src="../assest/images/single-property/s-1.jpg" class="img-fluid" alt=""></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../assest/images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Abraham Tyron</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">june 1 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row mt-5">
                                <ul class="col-12 commented mb-0 pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../assest/images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Lisa Williams</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">jul 12 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="resti">
                                                <div class="rest"><img src="../assest/images/single-property/s-2.jpg" class="img-fluid" alt=""></div>
                                                <div class="rest"><img src="../assest/images/single-property/s-3.jpg" class="img-fluid" alt=""></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section> --}}
                        <!-- End Reviews -->
                        <!-- Star Add Review -->
                        <section class="single reviews leve-comments details">
                            <div id="add-review" class="add-review-box">
                                <!-- Add Review -->
                                <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                                <span class="leave-rating-title">Your rating for this listing</span>
                                <!-- Rating / Upload Button -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <!-- Leave Rating -->
                                        <div class="clearfix"></div>
                                        <div class="leave-rating margin-bottom-30">
                                            <input type="radio" name="rating" id="rating-1" value="1" />
                                            <label for="rating-1" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2" />
                                            <label for="rating-2" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3" />
                                            <label for="rating-3" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4" />
                                            <label for="rating-4" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5" />
                                            <label for="rating-5" class="fa fa-star"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Uplaod Photos -->
                                        <div class="add-review-photos margin-bottom-30">
                                            <div class="photoUpload">
                                                <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                <input type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 data">
                                        <form action="#">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Add Review -->
                    </div>
                    
                @endforeach
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            
                            <!-- end author-verified-badge -->
                            <div class="sidebar">
                                <div class="widget-boxed mt-33 mt-5">
                                    <div class="widget-boxed-header">
                                        <h4>Consultant Information</h4>
                                    </div>
                                    
                                    <div class="widget-boxed-body">
                                        <div class="sidebar-widget author-widget2">

                                        @foreach ($add_by as $add_by)
                                            
                                        
                                            <div class="author-box clearfix">
                                                <img src="../{{$add_by->profile_img}}" alt="{{$add_by->profile_img}}" class="author__img">
                                                <h4 class="author__title">{{$add_by->full_name}}</h4>
                                                <p class="author__meta">Consultant of Property</p>
                                            </div>
                                            <ul class="author__contact p-0">
                                                <li class="text-capitalize" style="font-size:13px;">
                                                    <i class="fa fa-map-marker" style="font-size:16px;"></i>&nbsp;
                                                    {{$add_by->address}}
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                                                    {{$add_by->mobile}}
                                                </li>
                                                <li class="text-capitalize" style="font-size:13px;">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;
                                                    {{$add_by->email}}
                                                </li>
                                            </ul>
                                        @endforeach
                                            <div class="agent-contact-form-sidebar">
                                                <h4>Request Inquiry</h4>
                                                <form name="contact_form" method="POST" action="/requestInquiry">
                                                    @csrf
                                                    
                                                    <input type="text" name="full_name" placeholder="Full Name" required />
                                                    <input type="number" name="mobile" placeholder="Phone Number" required />
                                                    <input type="email" name="email" placeholder="Email Address" required />
                                                    <textarea placeholder="Message" name="message" required></textarea>
                                                    <input class="d-none" name="add_by_id" value="{{$add_by->id}}">
                                                    <input type="submit" class="multiple-send-message" value="Submit Request" />
                                                </form>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
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
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- START SIMILAR PROPERTIES -->
                <section class="similar-property featured portfolio p-0 bg-white-inner">
                    <div class="container">
                        <h5>Similar Properties</h5>
                        <div class="row portfolio-items">
                        @foreach ($similar as $data)

                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/{{$data->id}}" class="homes-img" style="height:50px;background:#3F474D;">
                                                {{-- <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div> --}}
                                                <div class="homes-price" style="margin-bottom:-10px;"><i class="fa fa-inr text-white" style="font-size:19px;"></i> <span style="font-size:18px;">{{$data->reserve_price}}</span></div>
                                                
                                               
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
                            
                        </div>
                    </div>
                </section>
                <!-- END SIMILAR PROPERTIES -->
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

        

    </div>
    <!-- Wrapper / End -->
<!-- START FOOTER -->
@include("web/layout/footer")
<!-- END FOOTER -->
