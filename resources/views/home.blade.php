<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cari Uang</title>
    <meta name="description" content="Cari Uang">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/IMG_1918.png') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>

    <!--Preloader-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <x-header />
    <!-- header-area-end -->



    <!-- main-area -->
    <main class="main-area fix">

        <!-- banner-area -->
        <section class="banner__area banner__bg" data-background="{{ asset('assets/img/banner/hero_bg.svg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="banner__content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">{!! $banner_title !!}</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">{{ $banner_subtitle }}</p>
                            <div class="banner__form wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                                <div class="d-flex justify-content-center">
                                    @foreach ($cmsButtons as $button)
                                        @php
                                            $icon = '';
                                            $target = '_self';
                                            $buttonName = strtolower($button->name);
                                            if ($buttonName == 'whatsapp') {
                                                $icon = 'fab fa-whatsapp';
                                            } elseif ($buttonName == 'telegram') {
                                                $icon = 'fab fa-telegram';
                                            } else {
                                                $icon = 'fas fa-link';
                                                $target = '_blank';
                                            }
                                        @endphp
                                        <a href="{{ $button->url }}" target="{{ $target }}" class="tg-btn mx-2">
                                            <i class="{{ $icon }}"></i>   {{ $button->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- faq-area -->
        <section id="faq" class="faq__area section-py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq__img" data-aos="fade-right" data-aos-delay="0">
                            <img src="{{ asset('assets/img/images/faq_img.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq__content" data-aos="fade-left" data-aos-delay="0">
                            <div class="section__title mb-60">
                                <span class="sub-title">faq & ans</span>
                                <h2 class="title">Get every <span>single</span> <br> answer</h2>
                            </div>
                            <div class="faq__wrap">
                                <div class="accordion" id="accordionExample">
                                    @foreach ($faqs as $faq)
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button @if(!$loop->first) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="{{ $loop->first ? 'true' : 'false' }}" aria-controls="collapse{{ $faq->id }}">
                                                    {{ $faq->question }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse @if($loop->first) show @endif" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>{{ $faq->answer }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->

        <!-- roadmap-area -->
        <section id="roadmap" class="roadmap__area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-80" data-aos="fade-up" data-aos-delay="0">
                            <span class="sub-title">roadmap</span>
                            <h2 class="title">Our <span>strategy</span> & Planning</h2>
                        </div>
                    </div>
                </div>
                <div class="roadmap__item-wrap" data-aos="fade-up" data-aos-delay="300">
                    <div class="row gutter-y-40">
                        <div class="col-lg-3 col-md-6">
                            <div class="roadmap__item">
                                <div class="roadmap__icon">
                                    <img src="{{ asset('assets/img/icon/roadmap_icon01.png') }}" alt="icon">
                                </div>
                                <div class="roadmap__content">
                                    <h3 class="title">2014</h3>
                                    <p>Definitions of key terms in cryptocurrency</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roadmap__item">
                                <div class="roadmap__icon">
                                    <img src="{{ asset('assets/img/icon/roadmap_icon02.png') }}" alt="icon">
                                </div>
                                <div class="roadmap__content">
                                    <h3 class="title">2017</h3>
                                    <p>Automated tools for executing strategies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roadmap__item">
                                <div class="roadmap__icon">
                                    <img src="{{ asset('assets/img/icon/roadmap_icon03.png') }}" alt="icon">
                                </div>
                                <div class="roadmap__content">
                                    <h3 class="title">2022</h3>
                                    <p>APIs for developers to build custom tools</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roadmap__item">
                                <div class="roadmap__icon">
                                    <img src="{{ asset('assets/img/icon/roadmap_icon04.png') }}" alt="icon">
                                </div>
                                <div class="roadmap__content">
                                    <h3 class="title">2025</h3>
                                    <p>A space for users to discuss trends</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="shape">
            </div>
        </section>
        <!-- roadmap-area-end -->


        <!-- section-divider -->
        <div class="section-divider">
            <div class="container">
                <span></span>
            </div>
        </div>
        <!-- section-divider-end -->
    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area">
        <div class="container">
            <div class="footer__top">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer__content">
                            <h2 class="title">Join with our <span>future</span> of Webzo currency</h2>
                            <div class="team__social-wrap">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="#!">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/facebook.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/twitter.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/telegram.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/discord.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="copyright-text">
                    <p>Copyright & design by <a href="#" target="_blank">Cari Uang</a> - 2025</p>
                </div>
            </div>
        </div>
        <div class="footer__shape">
            <img src="{{ asset('assets/img/images/footer_shape01.png') }}" alt="shape" class="alltuchtopdown">
            <img src="{{ asset('assets/img/images/footer_shape02.png') }}" alt="shape" class="alltuchtopdown">
        </div>
    </footer>
    <!-- footer-area-end -->





    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
