<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Mottos.com.do</title>

  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <link href="{{ asset('template/css/master.css') }}" rel="stylesheet">

  <!-- Scripts --> 
</head>

    @if(Route::current()->getName() == 'publicaciones') 
        <body class="m-listings" data-scrolling-animations="true">
    @else
        <body class="m-index m-listTableTwo" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">
    @endif

    <!-- Loader -->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end -->
    @include('layouts.header')
    @include('layouts.menu')
   
    <div class="container mb-5">
        <div class="row">
            <div class="col-12"> 
                {{ $slot }} 
            </div>
        </div>
    </div>  
    <br><br>
    @include('layouts.info_menu_franja')

    @include('layouts.info_preFooter')
    @include('layouts.footer') 

    <!--Main-->
    <script src="{{ asset('template/js/jquery-latest.js') }}"></script>
    <script src="{{ asset('template/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/modernizr.custom.js') }}"></script>

    <script src="{{ asset('template/assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

    <script src="{{ asset('template/js/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('template/js/classie.js') }}"></script>

    <!--Switcher-->
    <script src="{{ asset('template/assets/switcher/js/switcher.js') }}"></script>
    <!--Owl Carousel-->
    <script src="{{ asset('template/assets/owl-carousel/owl.carousel.min.js') }}"></script>
    <!--bxSlider-->
    <script src="{{ asset('template/assets/bxslider/jquery.bxslider.js') }}"></script>
    <!-- jQuery UI Slider -->
    <script src="{{ asset('template/assets/slider/jquery.ui-slider.js') }}"></script>

    <!--Theme-->
    <script src="{{ asset('template/js/jquery.smooth-scroll.js') }}"></script>
    <script src="{{ asset('template/js/wow.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('template/js/theme.js') }}"></script>

</body>

</html>
