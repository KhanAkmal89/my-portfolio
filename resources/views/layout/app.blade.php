<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My Portfolio</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css') }}/style.css" />
</head>

    <body>

        <!--########################### Header Starts Here ###################### -->

        @include('layout.header')

        @yield('content')

        <!--########################### About US Starts Here ###################### -->



           <!--########################### Services Starts Here ###################### -->



        <!--########################### Skills Starts Here ###################### -->





    <!--  ************************* Gallery Starts Here ************************** -->


        <!-- ######## Gallery End ####### -->


             <!--  ************************* Contact  Starts Here ************************** -->




    <!--  ************************* Footer  Starts Here ************************** -->

    @include('layout.footer')

    <script src="{{ asset('assets/js') }}/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/js') }}/popper.min.js"></script>
    <script src="{{ asset('assets/js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slider/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js') }}/script.js"></script>
    
    </body>



</html>
