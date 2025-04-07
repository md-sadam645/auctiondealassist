<!DOCTYPE html>
<html lang="zxx">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Home - Auction Deal Assist</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assests/ADA.png')}}">
    <link rel="stylesheet" href="assest/css/jquery-ui.css">
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
    <link rel="stylesheet" href="../assest/css/search.css">
    <link rel="stylesheet" href="../assest/css/animate.css">
    <link rel="stylesheet" href="../assest/css/aos.css">
    <link rel="stylesheet" href="../assest/css/aos2.css">
    <link rel="stylesheet" href="../assest/css/magnific-popup.css">
    <link rel="stylesheet" href="../assest/css/lightcase.css">
    <link rel="stylesheet" href="../assest/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assest/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assest/css/menu.css">
    <link rel="stylesheet" href="../assest/css/slick.css">
    <link rel="stylesheet" href="../assest/css/styles.css">
    <link rel="stylesheet" href="../assest/css/maps.css">
    <link rel="stylesheet" id="color" href="../assest/css/colors/pink.css">
    
    
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

<body class="homepage-9 hp-6 homepage-1 mh">
<!-- Wrapper -->
<div id="wrapper">
    <!-- Header Container -->
    @include("web.layout.header")
    <!-- Header Container  End -->

     <!-- section Container -->
     @yield('content')
    <!-- section Container  End -->

    <!-- START FOOTER -->
    @include("web.layout.footer")
    <!-- END FOOTER -->

