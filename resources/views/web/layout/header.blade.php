
<style>
    /* user profile */
    .mydropdowncss:hover .dropdown-menu {
        display: block;
        margin-top:42px;
        margin-left:-20px;
    }

    .sign-box{
        margin-right:50px !important;
    }

    .nav-dropdown-menu
    {
        margin:10px 0px 0px -60px !important;
    }

 .bloq-email .email{
        display: inline-table !important;
    }
    .header.head-tr{
        background: #7a1025;
        /* background: linear-gradient(0deg, rgba(175,112,22,1) 0%, rgba(223,142,55,1) 45%, rgba(159,23,14,1) 72%); */
    }
    #navigation.style-2.cloned, #header.cloned.sticky{
        background:#7a1025;
        /* background: linear-gradient(0deg, rgba(175,112,22,1) 0%, rgba(223,142,55,1) 45%, rgba(159,23,14,1) 72%); */
    }
    #navigation.style-1.head-tr ul li a{
        color:white;
    }
    .header-widget.sign-in a{
        color:white !important;
    }
    .right-side.sign{
        border-left: 1px solid white !important;
        border-right: 1px solid white !important;
    }
    #header.cloned.sticky ul li a{
        color:white;
    }
    #logo img{
        width:130px !important;
        /* background-color:white !important; */
    }
    .hp-6 #navigation.style-2.cloned .show-lang, .hp-6 #header.cloned.sticky .show-lang, .hp-6 #navigation.style-2.cloned .show-lang .fa-caret-down.arrlan, .hp-6 #header.cloned.sticky .show-lang .fa-caret-down.arrlan, .hp-6 #navigation.style-2.cloned .header-widget.sign-in a, .hp-6 #header.cloned.sticky .header-widget.sign-in a
    {
        color:white;
    }
    .homepage-1 .header-user-name, .homepage-1 .header-user-name:before{
        /* 10613 */
        color:white !important;
    }
    #header.cloned.sticky .right-side.sign{
        /* menu.css 550 */
        border-left: 1px solid white !important;
        border-right: 1px solid white !important;
    }

    @media only screen and (max-width: 768px)
    {
        #logo {
            width:55%;
        }
        #logo img{
            width: 98px !important;
        }
        .header-user-menu{
            top:6px !important;
        }

        .nav-dropdown-menu
        {
            margin:10px 0px 0px -60px !important;
        }
    }

    .twitter-widget.contuct .twitter-area .text h5 a, .inner-pages .twitter-widget.contuct .twitter-area .text h5 a{
        color: #ff385c;
    }
    .twitter-widget.contuct .twitter-area .icon-holder i{
        color: #ff385c;
    }
    .first-footer .contactus ul li .fa{
        color: #b03733;
    }
   
</style>

<!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom p-0">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="/"><img src="{{asset('../assest/images/ada_new_logo2.png')}}" data-sticky-logo="{{asset('../assest/images/ada_new_logo2.png')}}" alt="{{asset('../assest/images/ada_new_logo2.png')}}"></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger mt-2">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							        <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>

                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/listing/index">Listing</a>
                                </li>
                                <li>
                                    <a href="/subscriptions/index">Subscriptions</a>
                                </li>
                                <li>
                                    <a href="/about-us/index">About Us</a>
                                </li>
                                <li><a href="/contact-us/index">Contact Us</a></li>
                                <li><a href="/join-us/index">Join Us</a></li>
                                @if(Auth::user())
                                @else
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="/user-login">Login</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="/user-register">Register</a></li>
                                @endif
                                {{-- <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0">
                                    <a href="#" style="margin-left:-22px;" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                                </li> --}}
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        
                        <div class="header-widget">
                            <a href="#" style="margin-left:-22px;" class="button border add-list-btn">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        
                    </div> --}}
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    
                    @if(Auth::user())
                        @if(Auth::user()->role == 3)
                            <div class="header-user-menu">
                                <div class="dropdown mydropdowncss">
                                    <a id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
                                        <div class="header-user text-white">
                                            <span>
                                                {{-- <img src="../{{Auth::user()->profile_img}}" alt="{{Auth::user()->profile_img}}">  --}}
                                                Hi, @php
                                                        echo explode(" ",Auth::user()->full_name)[0];
                                                    @endphp
                                            </span>
                                        </div>
                                    </a>
                                
                                    <div class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="/account/profile">Edit profile</a>
                                        <a class="dropdown-item" href="/account/my-subscriptions">My Subscriptions</a>
                                        <a class="dropdown-item" href="/account/viewed-property">Viewed Property</a>
                                        <a class="dropdown-item" href="/user/logout">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else   
                        <div class="right-side d-none d-none d-lg-none d-xl-flex sign sign-box mx-0">
                            <!-- Header Widget -->
                            <div class="header-widget sign-in">
                                <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
                            </div>
                            <!-- Header Widget / End -->
                        </div>
                    @endif
                    <!-- Right Side Content / End -->

                </div>
            </div>
            <!-- Header / End -->
        </header>