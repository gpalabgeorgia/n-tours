<?php
    use App\Models\Sections;
    $sections = Sections::sections();
?>
<header class="main-header flex">
    <!-- Header Lower -->
    <div id="header">
        <div class="header-top">
            <div class="header-top-wrap flex-two">
<!--########### საკონტაქტო ინფორმაცია #####################################################-->
                <div class="header-top-right">
                    <ul class=" flex-three">
                        <li class="flex-three">
                            <i class="fa-regular fa-calendar-check" style="color: rgba(77, 165, 40, 1.00);"></i>
                            <span id="header-date" class="current-date-style"></span>
                        </li>
                        <li class="flex-three">
                            <i class="fa-solid fa-envelope" style="color: rgba(77, 165, 40, 1.00);"></i>
                            <span>geontours@gmail.com</span>
                        </li>
                        <li class="flex-three">
                            <i class="fa-solid fa-phone" style="color: rgba(77, 165, 40, 1.00);"></i>
                            <span>(+34) 654 245 975</span>
                        </li>
                    </ul>
                </div>
<!--########### ჯავშანი და გამოწერა #######################################################-->
                <div class="header-top-left flex-two">
                    <a href="contact-us.html" class="booking">
                        <i class="fa-regular fa-calendar-plus" style="color: rgba(77, 165, 40, 1.00);"></i>
                        <span>დაჯავშნე</span>
                    </a>
                    <div class="follow-social flex-two">
                        <span>გამოიწერეთ :</span>
                        <ul class="flex-two">
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook-f" style="color: rgba(77, 165, 40, 1.00);"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram" style="color: rgba(77, 165, 40, 1.00);"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-youtube" style="color: rgba(77, 165, 40, 1.00);"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-lower">
            <div class="tf-container full">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner-container flex justify-space align-center">
                            <!-- Logo Box -->
                            <div class="mobile-nav-toggler mobie-mt mobile-button">
                                <i class="icon-Vector3"></i>
                            </div>
                            <div class="logo-box">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('images/front_images/logo.png') }}" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="nav-outer flex align-center">
                                <!-- Main Menu -->
                                <nav class="main-menu show navbar-expand-md">
                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li class="current">
                                                    <a href="index.html">მთავარი</a>
                                                </li>
                                                @foreach($sections as $section)
                                                    @if(count($section['categories'])>0)
                                                        <li class="dropdown2">
                                                    <a href="">{{ $section['name'] }}</a>
                                                    <ul>
                                                        @foreach($section['categories'] as $category)
                                                        <li><a href="">{{ $category['category_name'] }}</a></li>
                                                            @foreach($category['subcategories'] as $subcategory)
                                                                <li><a href="">{{ $subcategory['category_name'] }}</a></li>
                                                            @endforeach
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                    @endif
                                                @endforeach
                                                <li>
                                                    <a href="contact-us.html">კონტაქტი</a>
                                                </li>
                                            </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>
                            <div class="header-account flex align-center">
                                <div class="language">
                                    <div class="nice-select" tabindex="0">
                                        <img src="{{ asset('images/front_images/page/language.svg') }}" alt="">
                                        <span class="current">ენა</span>
                                        <ul class="list">
                                            <li data-value class="option selected">
                                                <img src="{{ asset('images/front_images/page/language.svg') }}" alt="">ქართული</li>
                                            <li data-value="Vietnam" class="option">
                                                <img src="{{ asset('images/front_images/page/language.svg') }}" alt="">English</li>
                                            <li data-value="German" class="option">
                                                <img src="{{ asset('images/front_images/page/language.svg') }}" alt="">Русский</li>
                                            <li data-value="Russian" class="option">
                                                <img src="{{ asset('images/front_images/page/language.svg') }}" alt="">Español</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="currency">
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">ვალუტა</span>
                                        <ul class="list">
                                            <li data-value class="option selected">EURO</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search-mobie relative">
                                    <div class="dropdown">
                                        <a type="button" class="show-search" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-Vector5"></i>
                                        </a>
                                        <ul class="dropdown-menu top-search">
                                            <form action="/" id="search-bar-widget">
                                                <input type="text" placeholder="Search here...">
                                                <button type="button">
                                                    <i class="icon-search-2"></i>
                                                </button>
                                            </form>
                                        </ul>
                                    </div>
                                </div>
                                <div class="register">
                                    <ul class="flex align-center">
                                        <li>
                                            <a href="login.html" class="flex-three">
                                                <img src="{{ asset('images/front_images/page/avata.jpg') }}" alt="image">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/front_images/page/fl1.png') }}" alt="" class="fly-ab">
        </div>
    </div>
    <!-- End Header Lower -->
    <a href="#" class="header-sidebar flex-three" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <i class="icon-Bars"></i>
    </a>
    <!-- Mobile Menu  -->
    <div class="close-btn">
        <span class="icon flaticon-cancel-1"></span>
    </div>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
            <div class="nav-logo">
                <a href="index.html">
                    <img src="{{ asset('images/front_images/logo2.png') }}" alt="">
                </a>
            </div>
            <div class="bottom-canvas">
                <div class="menu-outer"></div>
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
