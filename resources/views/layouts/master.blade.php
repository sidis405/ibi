<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ibi Lorenzini</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prodotti">
    <!-- Google Fonts    --><link href='https://fonts.googleapis.com/css?family=Lato:400,700,700italic,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/vendor.css">
    @yield('header_scripts')
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/custom.css">
  </head>
  <body id="top">
    <!--[if lt IE 7]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Including header-->
    @include('layouts.header')
    <!-- Page content -->
    @yield('content')
    <!-- Including footer-->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-arrow-up"></i></a>
    @include('layouts.footer')
    @include('layouts.area_riservata_modal')
  </body>
  <script src="/js/vendor.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx9KUDj1tNjrnOjWivzS4GAJ9Cke8RIvM"></script>
  @yield('footer_scripts')
  <script src="/js/main.js"></script>
  <script src="/js/custom.js"></script>
</html>