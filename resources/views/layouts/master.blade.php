<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ibi Lorenzini</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Prodotti">
    <!-- Google Fonts    --><link href='https://fonts.googleapis.com/css?family=Lato:400,700,700italic,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
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