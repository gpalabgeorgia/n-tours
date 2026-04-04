<section class="slider relative">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="slider-home1 relative overflow-hidden swiper-slide">
                @foreach($banners as $banner)
                    <div class="silider-image">
                        <img src="{{ asset('images/banner_images/'.$banner['image']) }}" alt="Image" class="image-slide">
                        <img src="{{ asset('images/front_images/slide/mask-slide.png') }}" alt="Image" class="mask-slide">
                        <img src="{{ asset('images/front_images/slide/mask-fly.png') }}" alt="Image" class="mask-flane">
                        <div class="booking-title tf-anime-rorate">
                            <p class="booking">დაჯავშნე</p>
                            <span></span>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="tf-container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <span class="sub-title text-main font-yes fs-28-46 fadeInDown wow">აღმოაჩინე ესპანეთი</span>
                                    <h1 class="title-slide text-white mb-32 fadeInDown wow">
                                        {{ $banner['title'] }}
                                        <span class="animationtext clip text-main">
                                                            <span class="cd-words-wrapper">
                                                                <span class="item-text is-visible">ტურები</span>
                                                                <span class="item-text is-hidden">ტურები</span>
                                                            </span>
                                                        </span>
                                    </h1>
                                    <p class="des text-white mb-45 fadeInDown wow">{{ $banner['description'] }}</p>
                                    <div class="btn-group">
                                        <a href="{{ $banner['button'] }}" class="btn-main fadeInDown wow">
                                            <p class="btn-main-text">გამოგვყევი ტურში</p>
                                            <p class="iconer">
                                                <i class="icon-arrow-right"></i>
                                            </p>
                                        </a>
                                        <a href="{{ $banner['link'] }}" class="btn-w-wa fadeInDown wow">
                                            ვინ ვართ ჩვენ <i class="icon-Group-13"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--                    <div class="slider-home1 relative overflow-hidden swiper-slide">--}}
            {{--                        <div class="silider-image">--}}
            {{--                            <img src="{{ asset('images/front_images/slide/slide1.jpg') }}" alt="Image" class="image-slide">--}}
            {{--                            <img src="{{ asset('images/front_images/slide/mask-slide.png') }}" alt="Image" class="mask-slide">--}}
            {{--                            <img src="{{ asset('images/front_images/slide/mask-fly.png') }}" alt="Image" class="mask-flane">--}}
            {{--                            <div class="booking-title tf-anime-rorate">--}}
            {{--                                <p class="booking">Booking</p>--}}
            {{--                                <span></span>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="slider-content">--}}
            {{--                            <div class="tf-container">--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-lg-8">--}}
            {{--                                                    <span class="sub-title text-main font-yes fs-28-46 fadeInDown wow">Explore--}}
            {{--                                                    the--}}
            {{--                                                    world</span>--}}
            {{--                                        <h1 class="title-slide text-white mb-32 fadeInDown wow">--}}
            {{--                                            Tour Travel &--}}
            {{--                                            adventure--}}

            {{--                                            <span class="animationtext clip text-main">--}}
            {{--                                                            <span class="cd-words-wrapper">--}}
            {{--                                                                <span class="item-text is-visible">Camping</span>--}}
            {{--                                                                <span class="item-text is-hidden">Camping</span>--}}
            {{--                                                            </span>--}}
            {{--                                                        </span>--}}
            {{--                                        </h1>--}}
            {{--                                        <p class="des text-white mb-45 fadeInDown wow">Welcome to our Print 128--}}
            {{--                                            website! We are--}}
            {{--                                            a--}}
            {{--                                            professional and reliable printing--}}
            {{--                                            company that offers a wide range of printing services to--}}
            {{--                                        </p>--}}
            {{--                                        <div class="btn-group">--}}
            {{--                                            <a href="#" class="btn-main fadeInDown wow">--}}
            {{--                                                <p class="btn-main-text">Let,s get started</p>--}}
            {{--                                                <p class="iconer">--}}
            {{--                                                    <i class="icon-arrow-right"></i>--}}
            {{--                                                </p>--}}
            {{--                                            </a>--}}
            {{--                                            <a href="#" class="btn-w-wa fadeInDown wow">--}}
            {{--                                                Who we are <i class="icon-Group-13"></i>--}}
            {{--                                            </a>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="slider-home1 relative overflow-hidden swiper-slide">--}}
            {{--                        <div class="silider-image">--}}
            {{--                            <img src="{{ asset('images/front_images/slide/slide1.jpg') }}" alt="Image" class="image-slide">--}}
            {{--                            <img src="{{ asset('images/front_images/slide/mask-slide.png') }}" alt="Image" class="mask-slide">--}}
            {{--                            <img src="{{ asset('images/front_images/slide/mask-fly.png') }}" alt="Image" class="mask-flane">--}}
            {{--                            <div class="booking-title tf-anime-rorate">--}}
            {{--                                <p class="booking">Booking</p>--}}
            {{--                                <span></span>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="slider-content">--}}
            {{--                            <div class="tf-container">--}}
            {{--                                <div class="row">--}}
            {{--                                    <div class="col-lg-8">--}}
            {{--                                                    <span class="sub-title text-main font-yes fs-28-46 fadeInDown wow">Explore--}}
            {{--                                                    the--}}
            {{--                                                    world</span>--}}
            {{--                                        <h1 class="title-slide text-white mb-32 fadeInDown wow">--}}
            {{--                                            Tour Travel &--}}
            {{--                                            adventure--}}

            {{--                                            <span class="animationtext clip text-main">--}}
            {{--                                                            <span class="cd-words-wrapper">--}}
            {{--                                                                <span class="item-text is-visible">Camping</span>--}}
            {{--                                                                <span class="item-text is-hidden">Camping</span>--}}
            {{--                                                            </span>--}}
            {{--                                                        </span>--}}
            {{--                                        </h1>--}}
            {{--                                        <p class="des text-white mb-45 fadeInDown wow">Welcome to our Print 128--}}
            {{--                                            website! We are--}}
            {{--                                            a--}}
            {{--                                            professional and reliable printing--}}
            {{--                                            company that offers a wide range of printing services to--}}
            {{--                                        </p>--}}
            {{--                                        <div class="btn-group">--}}
            {{--                                            <a href="#" class="btn-main fadeInDown wow">--}}
            {{--                                                <p class="btn-main-text">Let,s get started</p>--}}
            {{--                                                <p class="iconer">--}}
            {{--                                                    <i class="icon-arrow-right"></i>--}}
            {{--                                                </p>--}}
            {{--                                            </a>--}}
            {{--                                            <a href="#" class="btn-w-wa fadeInDown wow">--}}
            {{--                                                Who we are <i class="icon-Group-13"></i>--}}
            {{--                                            </a>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
        </div>
        <div class="btn-nex-prev">
            <div class="swiper-button-next  next-home1"></div>
            <div class="swiper-button-prev  prev-home1"></div>
        </div>
    </div>
</section>
