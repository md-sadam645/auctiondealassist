@extends('web.layout.index')

@section("content")
<!-- START SECTION HEADINGS -->
<style>
     .inner-pages .form-group .nice-select{
            width:100%;
            margin-top: 10px;
        }

    .list{
        overflow-y: scroll !important;
        height: 200px;
        width:100% !important;
    }

    .hero-main{
        width:100%;
        position: absolute;
        top:0;
        height:100vh;
        background-color: rgba(0, 0, 0, 0.5);
      
    }

    @media screen and (max-width: 576px){
        .rld-main-search{
            margin-top:25% !important;
            height:250px !important;
        }

        .h1{
            display:block !important;
        }
    }
    
@media screen and (min-width: 1200px) and (max-width: 1350px){
  .homes-list{
    display: flex !important;
    flex-direction:column; 
  }

  .the-icons{
    width:100% !important;
  }

  #property_price{
    font-size:13px !important;
    margin:-10px 0px 0px 0px !important;

  }

  #property_price i{
    font-size:13px !important;
  }

  .featured-icon{
    
    margin: 0px  1px !important;
  }

  .featured-icon i{
    font-size:12px !important;
    
  }

  .property-view-btn{
    height:30px;
    font-size:12px !important;
    padding:4px 2px !important;
    margin:10px 0px 0px 0px !important;
  }
}

@media screen and (min-width: 1350px) and (max-width: 1455px){
  .homes-list{
    display: flex !important;
    flex-direction:column; 
  }

  .the-icons{
    width:100% !important;
  }

  #property_price{
    font-size:15px !important;
    margin:-10px 0px 0px 0px !important;

  }

  #property_price i{
    font-size:15px !important;
  }

  .featured-icon{
    
    margin: 0px  3px !important;
  }

  .featured-icon i{
    font-size:14px !important;
    
  }

  .property-view-btn{
    height:35px;
    font-size:14px !important;
    padding:6px 4px !important;
    margin:10px 0px 0px 0px !important;
  }
}

   .nice-select{
        width:100% !important;
        height: 48px !important;
        margin-left:2.5% !important;
        /* margin-right:10% !important; */
    }

    .search-btn{
        width:200px !important;
        margin-left:0px !important;
    }

    .location-input{
        width:100% !important;
        height:48px !important;
        margin-left:2.5% !important;
        margin-right:20% !important;
    }

    .carousel-container{
        position: absolute;
        top:0;
        left:0;
    }

@media screen and (min-width: 1024px)
{
    .nice-select{
        width:100% !important;
        height: 48px !important;
        margin-left:10% !important;
        /* margin-right:10% !important; */
    }

    .search-btn{
        width:200px !important;
        margin-left:100px !important;
    }

    .location-input{
        width:100% !important;
        height:48px !important;
        margin-left:20% !important;
        margin-right:20% !important;
    }
}
</style>
    <!-- STAR HEADER SEARCH -->
    <section id="hero-area" class="parallax-searchs home15 overlay" data-stellar-background-ratio="0.5">

        <!-- Start property carousel  -->
        <div class="carousel slide" id="slider" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators d-none">
                <li data-target="#slider" data-slide-to="0"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
                <li data-target="#slider" data-slide-to="3"></li>
                <li data-target="#slider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" style="height:100vh !important">
                <div class="carousel-item active">
                    <img src="assest/images/carousel/machinery.jpg" alt="machinery" width="100%" style="height:100vh !important">
                    <div class="carousel-caption">
                        <h2 class="mb-4 text-white">Machinary</h2>
                        {{-- <p class="d-none d-lg-block"></p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assest/images/carousel/commercial-properties.jpg" alt="commercial-properties" width="100%" style="height:100vh !important">
                    <div class="carousel-caption">
                        <h2 class="mb-4 text-white">Commercial Property</h2>
                        {{-- <p class="d-none d-lg-block"></p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assest/images/carousel/f.jpg" alt="agriculture-plant" width="100%" style="height:100vh !important">
                    <div class="carousel-caption">
                        <h2 class="mb-4 text-white">Agriculture</h2>
                        {{-- <p class="d-none d-lg-block"></p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assest/images/carousel/d.jpg" alt="residential-property" width="100%" style="height:100vh !important">
                    <div class="carousel-caption">
                        <h2 class="mb-4 text-white">Residential Property</h2>
                        {{-- <p class="d-none d-lg-block"></p> --}}
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assest/images/carousel/e.jpg" alt="industrial-property" width="100%" style="height:100vh !important">
                    <div class="carousel-caption">
                        <h2 class="mb-4 text-white">Industrial Property</h2>
                        {{-- <p class="d-none d-lg-block"></p> --}}
                    </div>
                </div>
            </div>
            <!--start next and prev--->
            <a href="#slider" class="carousel-control-prev d-none" data-slide="prev" role="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            
                <a href="#slider" class="carousel-control-next d-none" data-slide="next" role="button">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
            <!--end next and prev--->
        </div>
        <!-- End property carousel  -->

        <!-- Search Form container-->
        <div class="hero-main">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-inner">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h1 class="h1" style="font-size:50px;">Find Your Dream Auction
                                    <br class="d-md-none">
                                    {{-- <span class="typed border-bottom"></span>  --}}
                                </h1>
                                <p class="mt-4">We Have A Lot Of Auctions For You</p>
                            </div>
                            <!--/ End Welcome Text -->

                            <!--start Search property Form -->
                            <div class="col-12">
                                <div class="banner-search-wrap">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs_1">
                                            <div class="rld-main-search">
                                                <form method="GET" action="/search-property/index">
                                                    
                                                    <div class="row">
                                                    
                                                        <div class="col-xl-4 col-lg-4 col-md-4 pl-0 home-ul-box" style="position: relative;z-index:100 !important;">
                                                            <select class="form-control home-ul" required name="property_type">
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
                                                        <div class="col-xl-4 col-lg-2 col-md-4 pl-0">
                                                            <input type="text" name="location" id="location" class="form-control location-input" placeholder="Enter Location" required>
                                                        
                                                        </div>
                                                    
                                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                            <button class="btn btn-yellow search-btn" type="submit" style="300px !important;">Search Now</button>
                                                        </div>
                                                    
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--/ End Search property Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HEADER SEARCH -->




    <!-- START SECTION POPULAR PLACES -->
    <section class="feature-categories bg-white rec-pro">
        <div class="container-fluid">
            <!--Start /row -->
            <div class="row">
                <!-- Andhra Pradesh -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-1">
                            @if($andhraPradesh == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/andhra.jpg" alt="andhra.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Andhra Pradesh</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/andhra pradesh"><img src="../assest/images/popular-places/andhra.jpg" alt="andhra.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/andhra pradesh'>Andhra Pradesh</a></h4>
                                <span>{{count($andhraPradesh)}} Properties </span>
                            @endif
                        
                        </div>
                    </div>
                </div>

                <!-- Chhattisgarh -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-10">
                            
                            @if($chhattisgarh == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/chhattisgarh.jpg" alt="chhattisgarh.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Chhattisgarh</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/chhattisgarh"><img src="../assest/images/popular-places/chhattisgarh.jpg" alt="chhattisgarh.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/chhattisgarh'>Chhattisgarh</a></h4>
                                <span>{{count($chhattisgarh)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- gujarat -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-2">
                        
                            @if($gujarat == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/gujrat.jpg" alt="gujrat.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Gujarat</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/gujarat"><img src="../assest/images/popular-places/gujrat.jpg" alt="gujrat.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/gujarat'>Gujarat</a></h4>
                                <span>{{count($gujarat)}} Properties </span>
                            @endif
                            
                        </div>
                    </div>
                </div>

                <!-- karnataka -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-11">
                        
                            @if($karnataka == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/karnataka.jpg" alt="karnataka.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Karnataka</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/karnataka"><img src="../assest/images/popular-places/karnataka.jpg" alt="karnataka.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/karnataka'>Karnataka</a></h4>
                                <span>{{count($karnataka)}} Properties </span>
                            @endif
                            
                        </div>
                    </div>
                </div>

                <!-- Madhya Pradesh -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="small-category-2 mob-mt">
                        <div class="small-category-2-thumb img-5">
                        
                            @if($madhyaPradesh == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/mp.webp" alt="mp.webp"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Madhya Pradesh</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/madhya pradesh"><img src="../assest/images/popular-places/mp.webp" alt="mp.webp"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/madhya pradesh'>Madhya Pradesh</a></h4>
                                <span>{{count($madhyaPradesh)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- maharashtra -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-3">
                        
                            @if($maharashtra == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/maharashtra.jpg" alt="maharashtra.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Maharashtra</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/maharashtra"><img src="../assest/images/popular-places/maharashtra.jpg" alt="maharashtra.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/maharashtra'>Maharashtra</a></h4>
                                <span>{{count($maharashtra)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- punjab -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-4">
                            @if($punjab == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/punjab.jpg" alt="punjab.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Punjab</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/punjab"><img src="../assest/images/popular-places/punjab.jpg" alt="punjab.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/punjab'>Punjab</a></h4>
                                <span>{{count($punjab)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- rajasthan -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb img-6">
                            @if($rajasthan == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/rajasthan.jpg" alt="rajasthan.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Rajasthan</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href="/listing/rajasthan"><img src="../assest/images/popular-places/rajasthan.jpg" alt="rajasthan.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/rajasthan'>Rajasthan</a></h4>
                                <span>{{count($rajasthan)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!--Tamil Nadu -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-6">
                            @if($tamilNadu == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/tamil_nadu.jpg" alt="tamil_nadu.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Tamil Nadu</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/tamil nadu'><img src="../assest/images/popular-places/tamil_nadu.jpg" alt="tamil_nadu.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/tamil nadu'>Tamil Nadu</a></h4>
                                <span>{{count($tamilNadu)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Uttar Pradesh -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-12">
                            @if($uttarPradesh == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/Uttar_Pradesh.jpg" alt="Uttar_Pradesh.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Uttar Pradesh</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/uttar pradesh'><img src="../assest/images/popular-places/Uttar_Pradesh.jpg" alt="Uttar_Pradesh.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/uttar pradesh'>Uttar Pradesh</a></h4>
                                <span>{{count($uttarPradesh)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Telangana -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-12">
                            @if($telangana == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/telangana.jpg" alt="telangana.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Telangana</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/telangana'><img src="../assest/images/popular-places/telangana.jpg" alt="telangana.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/telangana'>Telangana</a></h4>
                                <span>{{count($telangana)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- New Delhi -->
                <div class="col-xl-3 col-lg-6 col-sm-6 mb-md-2" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-8">
                            @if($newDelhi == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/delhi.jpg" alt="delhi.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">New Delhi</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/new delhi'><img src="../assest/images/popular-places/delhi.jpg" alt="delhi.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/new delhi'>New Delhi</a></h4>
                                <span>{{count($newDelhi)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- chandigarh -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-7">
                            @if($chandigarh == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/chandigarh.jpg" alt="chandigarh.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Chandigarh</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/chandigarh'><img src="../assest/images/popular-places/chandigarh.jpg" alt="chandigarh.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/chandigarh'>Chandigarh</a></h4>
                                <span>{{count($chandigarh)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Haryana -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-7">
                        
                            @if($haryana == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/haryana.jpg" alt="haryana.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Haryana</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/haryana'><img src="../assest/images/popular-places/haryana.jpg" alt="haryana.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/haryana'>Haryana</a></h4>
                                <span>{{count($haryana)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Bihar -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-7">
                        
                            @if($bihar == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/bihar.jpg" alt="bihar.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Bihar</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/bihar'><img src="../assest/images/popular-places/bihar.jpg" alt="bihar.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/bihar'>Bihar</a></h4>
                                <span>{{count($bihar)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- goa -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-9">
                            
                            @if($goa == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/goa.jpg" alt="goa.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Goa</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/goa'><img src="../assest/images/popular-places/goa.jpg" alt="goa.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/goa'>Goa</a></h4>
                                <span>{{count($goa)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- jharkhand -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-13">
                        
                            @if($jharkhand == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/jharkhand.jpg" alt="jharkhand.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">Jharkhand</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/jharkhand'><img src="../assest/images/popular-places/jharkhand.jpg" alt="jharkhand.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/jharkhand'>Jharkhand</a></h4>
                                <span>{{count($jharkhand)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- West Bengal -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="small-category-2 si-mt">
                        <div class="small-category-2-thumb img-13">
                        
                            @if($westBengal == '[]')
                                <a href="javascript:void(0)"><img src="../assest/images/popular-places/west_bengal.jpg" alt="west_bengal.jpg"></a>
                                </div>
                                <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="javascript:void(0)">West Bengal</a></h4>
                                <span> 0 Properties </span>
                            @else
                            
                                <a href='/listing/west bengal'><img src="../assest/images/popular-places/west_bengal.jpg" alt="west_bengal.jpg"></a>
                                </div>
                                <div class="sc-2-detail">

                                <h4 class='sc-jb-title'><a href='/listing/west bengal'>West Bengal</a></h4>
                                <span>{{count($westBengal)}} Properties </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!--End /row -->
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio bg-white-2 rec-pro full-l">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Featured </span>Properties</h2>
                <p>These are our featured properties</p>
            </div>
            <div class="row portfolio-con">

                @foreach ($list  as $data)
              
                    <div class="item col-xl-4 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <!-- homes content -->
                            <div class="homes-content w-100">
                                <!-- homes address -->
                                <h3 class="text-uppercase"><a href="/listing-details/{{ $data->id }}">{{ $data->bank_name }}</a></h3>
                                <p class="homes-address mb-3">
                                    <i class="fa fa-map-marker"></i> &nbsp; <span class="text-uppercase" style="font-size:11px;">{{ $data->locality}} , {{ $data->city}} , {{ $data->state}}</span>
                                </p>
                                <!-- homes List -->
                                <div class="homes-list clearfix row pb-3">
                                    <div class="the-icons col-12 px-0">
                                        <i class="fa fa-building-o mr-2" aria-hidden="true" style="font-size:15px;"></i>
                                        <span class="text-capitalize" style="font-size:12px;">{{ $data->property_type }}</span>
                                    </div>
                                    <div class="the-icons col-12 px-0">
                                        <i class="flaticon-square mr-2" aria-hidden="true" style="font-size:15px;"></i>
                                        <span class="text-capitalize" style="font-size:12px;">{{ $data->area }}</span>
                                    </div>
                                    <div class="the-icons col-12 px-0">
                                        <i class="fas fa-city mr-2" aria-hidden="true" style="font-size:15px;"></i>
                                        <span style="font-size:12px;">{{ $data->city}}</span>
                                    </div>
                                    <div class="the-icons col-12 px-0">
                                        <span class="mr-2" aria-hidden="true" style="font-size:14px;"><b>Possession : </b></span>
                                        <span class="text-capitalize" style="font-size:12px;">{{ $data->possession }}</span>
                                    </div>
                                </div>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                     <a href="javascript:void(0)" id="property_price"><i class="fa fa-inr mr-2" aria-hidden="true"></i>{{$data->reserve_price }}</a>
                                    </h3>
                                    <div class="compare">
                                        
                                        <a href="#" title="Share" class="featured-icon">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites" class="featured-icon">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                        
                                    </div>
                                    <a href="/listing-details/{{ $data->id }}" class="btn btn-primary property-view-btn ml-2 text-white" id="{{ $data->id }}">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
               
                @endforeach
                
            </div>
            <div class="bg-all">
                <a href="/listing/index" class="btn btn-outline-light">View More</a>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURED PROPERTIES -->

    <!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white rec-pro" style="background:url({{asset('../assest/images/bg/bg-h-1.jpg')}}) no-repeat !important; background-size: 100% 120% !important;">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Why </span>Choose Us</h2>
                <p>We assist in every step of Auction.</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="../assest/images/icons/property.png" alt="property.png">
                            <h3>Wide Range Of Properties</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center" style="height:78px;">Auction Deal Assist provide you option for wide range of property from bank NBFC, DRT/DRAT, Liquidator.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                    <div class="serv-flex" style="padding-left:12px; padding-right:12px;">
                        <div class="art-1 img-14">
                            <img src="../assest/images/icons/trust.png" alt="trust.png">
                            <h3>Trusted by thousands</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center" style="height:78px;">ADA (Auction Deal Assist) has established itself as a reliable and reputable platform for property auctions. 
                            <!--Over the years, we have earned the confidence and loyalty of numerous users, including individual buyers, seasoned investors, and industry professionals.-->
                            </p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="../assest/images/icons/wallet.png" alt="wallet.png">
                            <h3>Financing made easy</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center" style="height:78px;">We understand that financing plays a crucial role in making real estate dreams a reality.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="../assest/images/icons/location.png" alt="location.png">
                            <h3>We are here near you</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center" style="height:78px;">We take pride in being close and accessible to our valued users.
                            <br>&nbsp;
                            
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- END SECTION WHY CHOOSE US -->        


    <!-- START SECTION AGENTS -->
    {{-- <section class="team bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Meet Our </span>Staff</h2>
                <p>Our Staff are here to help you</p>
            </div>
            <div class="row team-all">
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                </div>
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="javascript:void(0)"><img src="../assest/images/team/anuja1.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100093984858067" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/KrishnaVal99281" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/krishnavallabha008/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/in/krishna-vallabha-a57721281/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="javascript:void(0)">Anuja Rane</a></h3>
                            <div class="designation">Real Estate Consultant</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="javascript:void(0)"><img src="../assest/images/team/durga1.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100093984858067" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/KrishnaVal99281" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/krishnavallabha008/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/in/krishna-vallabha-a57721281/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="javascript:void(0)">Durga Pachole</a></h3>
                            <div class="designation">Real Estate Consultant</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="350">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="javascript:void(0)"><img src="../assest/images/team/leena1.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100093984858067" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/KrishnaVal99281" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/krishnavallabha008/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/in/krishna-vallabha-a57721281/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="javascript:void(0)">Leena Sankhala</a></h3>
                            <div class="designation">Real Estate Consultant</div>
                        </div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="450">
                    <div class="inner-box team-details">
                        <div class="image team-head">
                            <a href="javascript:void(0)"><img src="../assest/images/team/vanisha1.jpg" alt="" /></a>
                            <div class="team-hover">
                                <ul class="team-social">
                                    <li><a target="_blank" href="https://www.facebook.com/profile.php?id=100093984858067" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/KrishnaVal99281" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/krishnavallabha008/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="https://www.linkedin.com/in/krishna-vallabha-a57721281/" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h3><a href="javascript:void(0)">Vanisha Khare</a></h3>
                            <div class="designation">Real Estate Consultant</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section> --}}
    <!-- END SECTION AGENTS -->

    <style>
        .owl-item{
            min-height: 435px;
        }
    </style>

    <!-- START SECTION TESTIMONIALS -->
    <section class="testimonials bg-white-2 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Clients </span>Testimonials</h2>
                <p>We collect reviews from our customers.</p>
            </div>
            <div class="owl-carousel job_clientSlide">
                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150" style=" min-height: 394px;padding-bottom: 30px;">
                    <p>
                        Very straight forward process and easy to deal with auction properties get all the information of Auction property PAN India. Always keep me up to date about the process of Auction. Well recommended and all paper work in order. Completely professional organization and helped us every step of the way. Thank-you for whole recommendation.      
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-2.jpg" alt=""/></span>-->
                        <h5>Anil Gupta</h5>
                        <p>Indore</p>
                    </div>
                </div>
                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250" style=" min-height: 394px;">
                    <p style="padding-bottom:25px;">
                        Got the full guidance related to Auction property process SARFAESI ACT 2002 and entire process was very smooth, good experience as support of legal team was also there. No support required legally from outside as Auction Deal Assist. Have all the team and process oriented staff.      <br>  
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-4.jpg" alt=""/></span>-->
                        <h5>Neeraj Madan</h5>
                        <p>Bhopal</p>
                    </div>
                </div>
                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350" style=" min-height: 394px;">
                    <p style="padding-bottom:25px;">
                        It was my first time experience to buy an Auction property. We have got the great support from Auction Deal Assist as we have got all the details related to Bank process and property. The price of property was less than market price and there is full assurity of payment  <br>
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-6.jpg" alt=""/></span>-->
                        <h5>Vishal</h5>
                        <p>Jabalpur</p>
                    </div>
                </div>
                <div class="singleJobClinet" style=" min-height: 394px;">
                    <p style="padding-bottom:25px;">
                        It has been a pleasure to deal with Auction property. The service and guidance that I received from Auction was so good. To my initial enquiry they provide clear strategy and support throughout the whole process of Auction properties. He has been efficient throughout the whole transaction.
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-1.jpg" alt=""/></span>-->
                        <h5>Amit </h5>
                        <p>Indore</p>
                    </div>
                </div>
                <div class="singleJobClinet" style=" min-height: 394px;">
                    <p style="padding-bottom:51px;">
                        I am very satisfied with the professional way that Auction property. Being kept informed of progress throughout was much appreciated. We appreciate very much all the help and support you offered us to get the property sold.<br>
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-2.jpg" alt=""/></span>-->
                        <h5>Raj patel</h5>
                        <p>Gwalior</p>
                    </div>
                </div>
                <div class="singleJobClinet" style=" min-height: 394px;">
                    <p style="padding-bottom:0px;">
                        We would like to thank you for all your hard work in bringing our property to auction, and for achieving such a great price for us. Your professionalism and patience in answering all our enquiries was very much appreciated, and you should be commended for making the whole process stress free. I wouldn't hesitate to recommend them.
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-3.jpg" alt=""/></span>-->
                        <h5>Deepak</h5>
                        <p>Pune</p>
                    </div>
                </div>
                <div class="singleJobClinet" style=" min-height: 394px;">
                    <p style="padding-bottom:0px;">
                        Excellent service as an auction buyer. Efficient online bidding experience worked with the friendly, professional and experienced team who pulled out all the stops to help us complete our purchase before closure of the stamp duty deadline. Thoroughly recommended - thank you Auction Deal Assist.
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-5.jpg" alt=""/></span>-->
                        <h5>Rohan</h5>
                        <p>Delhi</p>
                    </div>
                </div>
                <div class="singleJobClinet" style=" min-height: 394px;"> 
                    <p style="padding-bottom:0px;">
                        From the initial enquiry and valuation, through to the viewings and finally the auction itself and the exchange of contract I was extremely impressed with the sound advice and professional service and care given. I am very pleased that I engaged them to act for me and would have no hesitation in using them again in the future.
                    </p>
                    <div class="detailJC">
                        <!--<span><img src="../assest/images/testimonials/ts-6.jpg" alt=""/></span>-->
                        <h5>Dileep</h5>
                        <p>Gujrat</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->


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

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->


@endsection

