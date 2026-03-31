<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>N-TRAVELS</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ asset('css/front_css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front_css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front_css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/front_css/textanimation.css') }}">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('images/front_images/favico.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/front_images/favico.png') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome7/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="body header-fixed counter-scroll">
<div id="wrapper">
    <div id="pagee" class="clearfix">
        <!-- Main Header -->
        @include('layouts.front_layout.front_header')
        <!-- End Main Header -->
        @yield('content')

        @include('layouts.front_layout.front_footer')
        <!-- Bottom -->
    </div>
    <!-- /#page -->
</div>
<!-- Modal Popup Bid -->
<a id="scroll-top" class="button-go"></a>

    @include('layouts.front_layout.front_sidebar')

<!-- Javascript -->
<script src="{{ asset('js/front_js/jquery.js') }}"></script>
<script src="{{ asset('js/front_js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/front_js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/front_js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/front_js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/front_js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js/front_js/wow.min.js') }}"></script>

<script src="{{ asset('js/front_js/count-down.js') }}"></script>
<script src="{{ asset('js/front_js/countto.js') }}"></script>
<script src="{{ asset('js/front_js/price-ranger.js') }}"></script>
<script src="{{ asset('js/front_js/textanimation.js') }}"></script>
<script src="{{ asset('js/front_js/plugin.js') }}"></script>
<script src="{{ asset('js/front_js/shortcodes.js') }}"></script>

<script src="{{ asset('js/front_js/main.js') }}"></script>

<script src="{{ asset('fonts/fontawesome7/js/all.js') }}"></script>

<script src="{{ asset('js/front_js/front_script.js') }}"></script>
</body>
</html>
