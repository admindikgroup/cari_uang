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
    <header id="home">
        <div id="sticky-header" class="tg-header__area transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="{{ route('home') }}"><img style="height: 100px; width: 80px;" src="{{ asset('assets/img/logo/IMG_1918.png') }}" alt="Logo Cari Uang"></a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('home') }}#direction">Direction</a></li>
                                            <li><a href="{{ route('home') }}#faq">SERVICE</a></li>
                                            <li><a href="{{ route('home') }}#roadmap">FEATURE</a></li>
                                            <li><a href="{{ route('contact-us') }}">Kontak</a></li>
                                            <li class="menu-item-has-children"><a href="{{ route('blog')}}">TESTIMONIAL</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('blog')}}">Our Blog</a></li>
                                                    <li><a href="{{ route('blog-video')}}">Video Blog</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-btn">
                                            <a href="#!" class="tg-btn">Gabung Sekarang</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="tgmobile__menu">
            <nav class="tgmobile__menu-box">
                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                <div class="nav-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo.svg') }}" alt="Logo"></a>
                </div>
                <div class="tgmobile__search">
                    <form action="#">
                        <input type="text" placeholder="Search here...">
                        <button><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="tgmobile__menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="social-links">
                    <ul class="list-wrap">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="tgmobile__menu-backdrop"></div>
        <!-- End Mobile Menu -->

    </header>
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
                            <form action="#" class="banner__form wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                                <label for="email"><img src="{{ asset('assets/img/icon/envelope.svg') }}" alt=""></label>
                                <input type="email" id="email" placeholder="Business email">
                                <button type="submit" class="tg-btn">get early access</button>
                            </form>
                            <span class="banner__content-bottom wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">Start monitoring for free or <a href="#!">msg us!</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- crypto-area -->
        <section id="direction" class="crypto__area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section__title text-center mb-80">
                            <span class="sub-title">crypto direction</span>
                            <h2 class="title">Goods & assets <span>according</span> <br> to users interests.</h2>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-30 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="crypto__item">
                            <div class="crypto__icon">
                                <img src="{{ asset('assets/img/icon/crypto_icon01.svg') }}" alt="icon">
                            </div>
                            <div class="crypto__content">
                                <h2 class="title">Read our <span>white paper</span></h2>
                                <a href="#!" class="tg-btn tg-btn-two">open whitepaper</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="crypto__item">
                            <div class="crypto__icon">
                                <img src="{{ asset('assets/img/icon/crypto_icon02.svg') }}" alt="icon">
                            </div>
                            <div class="crypto__content">
                                <h2 class="title">1 CRN token price <span>0.00014 BTC</span></h2>
                                <a href="#!" class="tg-btn tg-btn-two">Buy tokens <span>(-25%)</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="crypto__item">
                            <div class="crypto__icon">
                                <img src="{{ asset('assets/img/icon/crypto_icon03.svg') }}" alt="icon">
                            </div>
                            <div class="crypto__content">
                                <h2 class="title">ICO Participants <span>370,000+</span></h2>
                                <a href="#!" class="tg-btn tg-btn-two">join our telegram</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crypto__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="shape">
            </div>
        </section>
        <!-- crypto-area-end -->

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

        <!-- section-divider -->
        <div class="section-divider">
            <div class="container">
                <span></span>
            </div>
        </div>
        <!-- section-divider-end -->

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
                        @foreach ($roadmaps as $roadmap)
                            <div class="col-lg-3 col-md-6">
                                <div class="roadmap__item">
                                    <div class="roadmap__icon">
                                        <img src="{{ asset($roadmap->icon) }}" alt="icon">
                                    </div>
                                    <div class="roadmap__content">
                                        <h3 class="title">{{ $roadmap->year }}</h3>
                                        <p>{{ $roadmap->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="roadmap__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="shape">
            </div>
        </section>
        <!-- roadmap-area-end -->

        <!-- team-area -->
        <section class="team__area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="team__content-wrap">
                            <div class="section__title mb-40">
                                <span class="sub-title">our avengers</span>
                                <h2 class="title">Meet with <span>our</span> avengers!</h2>
                            </div>
                            <p>Webzi brings our love for cryptocurrency into Web3! Like a frog’s leap, the chart can jump at any moment. Boom!</p>
                            <div class="team__social-wrap">
                                <h6 class="title">Follow us</h6>
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
                    <div class="col-xl-6 col-lg-7">
                        <div class="team__item-wrap">
                            <div class="row gutter-y-30">
                                <div class="col-md-6">
                                    <div class="team__item">
                                        <div class="team__thumb">
                                            <img src="{{ asset('assets/img/team/team_img01.png') }}" alt="img">
                                        </div>
                                        <div class="team__content">
                                            <span>founder</span>
                                            <h3 class="title">Rosalina William</h3>
                                        </div>
                                        <div class="social__icon">
                                            <a href="#!">
                                                <div class="shape">
                                                    <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                                </div>
                                                <img src="{{ asset('assets/img/icon/facebook.svg') }}" alt="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="team__item">
                                        <div class="team__thumb">
                                            <img src="{{ asset('assets/img/team/team_img02.png') }}" alt="img">
                                        </div>
                                        <div class="team__content">
                                            <span>ceo</span>
                                            <h3 class="title">Alonso Dowson</h3>
                                        </div>
                                        <div class="social__icon">
                                            <a href="#!">
                                                <div class="shape">
                                                    <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                                </div>
                                                <img src="{{ asset('assets/img/icon/telegram.svg') }}" alt="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="team__item">
                                        <div class="team__thumb">
                                            <img src="{{ asset('assets/img/team/team_img03.png') }}" alt="img">
                                        </div>
                                        <div class="team__content">
                                            <span>Designer</span>
                                            <h3 class="title">Elson Nelzoon</h3>
                                        </div>
                                        <div class="social__icon">
                                            <a href="#!">
                                                <div class="shape">
                                                    <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                                </div>
                                                <img src="{{ asset('assets/img/icon/twitter.svg') }}" alt="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="team__item">
                                        <div class="team__thumb">
                                            <img src="{{ asset('assets/img/team/team_img04.png') }}" alt="img">
                                        </div>
                                        <div class="team__content">
                                            <span>developer</span>
                                            <h3 class="title">Miranda Halim</h3>
                                        </div>
                                        <div class="social__icon">
                                            <a href="#!">
                                                <div class="shape">
                                                    <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                                </div>
                                                <img src="{{ asset('assets/img/icon/telegram.svg') }}" alt="icon">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="shape">
            </div>
        </section>
        <!-- team-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area">
        <div class="container">
            <div class="footer__top">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer__content">
                            
                            <span class="sub-title">Built on web3. Powered by You</span>
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
