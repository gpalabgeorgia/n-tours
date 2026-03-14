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
{{--    <link rel="shortcut icon" href="images/favico.png">--}}
{{--    <link rel="apple-touch-icon-precomposed" href="images/favico.png">--}}
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/svg.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/v4-font-face.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/v4-shims.css') }}">
    <link rel="stylesheet" href="{{ asset('font/fontawesome7/css/v5-font-face.css') }}">
</head>
<body class="body header-fixed counter-scroll">
<div id="wrapper">
    <div id="pagee" class="clearfix">
        <!-- Main Header -->
        @include('layouts.front_layout.front_header')
        <!-- End Main Header -->


        @include('layouts.front_layout.front_footer')
        <!-- Bottom -->
    </div>
    <!-- /#page -->
</div>
<!-- Modal Popup Bid -->
<a id="scroll-top" class="button-go"></a>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="logo-canvas">
            <img src="images/logo.png" alt="image">
        </div>
        <p class="des">The world’s first and largest digital market
            for crypto collectibles and non-fungible
        </p>
        <ul class="canvas-info">
            <li class="flex-three">
                <i class="icon-noun-mail-5780740-1"></i>
                <p>Info@webmail.com</p>
            </li>
            <li class="flex-three">
                <i class="icon-Group-9"></i>
                <p>684 555-0102 490</p>
            </li>
            <li class="flex-three">
                <i class="icon-Layer-19"></i>
                <p>6391 Elgin St. Celina, NYC 10299</p>
            </li>
        </ul>
        <ul class="social flex-three">
            <li>
                <a href="#">
                    <i class="icon-icon-2"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-icon-1"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-8"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="icon-6"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Javascript -->
<script src="{{ asset('js/front_js/jquery.js') }}"></script>
<script src="{{ asset('js/front_js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/front_js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/front_js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js.front_js/swiper.js') }}"></script>
<script src="{{ asset('js.front_js/plugin.js') }}"></script>
<script src="{{ asset('js.front_js/count-down.js') }}"></script>
<script src="{{ asset('js.front_js/countto.js') }}"></script>
<script src="{{ asset('js.front_js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js.front_js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('js.front_js/price-ranger.js') }}"></script>
<script src="{{ asset('js.front_js/textanimation.js') }}"></script>
<script src="{{ asset('js.front_js/wow.min.js') }}"></script>
<script src="{{ asset('js.front_js/shortcodes.js') }}"></script>
<script src="{{ asset('js.front_js/main.js') }}"></script>
<script src="{{ asset('font/fontawesome7/js/all.js') }}"></script>
<script src="{{ asset('font/fontawesome7/js/brands.js') }}"></script>
<script src="{{ asset('font/fontawesome7/js/fontawesome.js') }}"></script>
<script src="{{ asset('font/fontawesome7/js/regular.js') }}"></script>
<script src="{{ asset('font/fontawesome7/js/solid.js') }}"></script>
<script src="{{ asset('font/fontawesome7/js/v4-shims.js') }}"></script>
</body>
</html>
