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
                                            <li><a href="{{ route('home') }}#features">features</a></li>
                                            <!-- <li><a href="{{ route('home') }}#token">token</a></li> -->
                                            <li><a href="{{ route('home') }}#work">how it works</a></li>
                                            <li><a href="{{ route('home') }}#roadmap">roadmap</a></li>
                                            <li class="menu-item-has-children"><a href="{{ route('blog')}}">blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('blog')}}">Our Blog</a></li>
                                                    <li><a href="{{ route('blog-video')}}">Video Blog</a></li>
                                                </ul>
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
                            <span class="sub-title wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Built on web3. Powered by You</span>
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">The <span>future</span> of leverage is here</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">Leverage on any tokens with a protocol trusted with billions for its performance and reliability.</p>
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
            <div class="banner__shape">
                <img src="{{ asset('assets/img/banner/hero_img01.png') }}" alt="shape" class="alltuchtopdown">
                <img src="{{ asset('assets/img/banner/hero_img02.png') }}" alt="shape" class="rotateme">
                <img src="{{ asset('assets/img/banner/hero_img03.png') }}" alt="shape" class="alltuchtopdown">
                <img src="{{ asset('assets/img/banner/hero_bg_shape.svg') }}" alt="shape" class="banner__bg-shape">
            </div>
        </section>
        <!-- banner-area-end -->

        <!-- brand-area -->
        <div class="brand__area">
            <div class="container">
                <div class="brand__item-wrap">
                    <div class="swiper-container fix brand-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brand/brand_01.svg') }}" alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brand/brand_02.svg') }}" alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brand/brand_03.svg') }}" alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brand/brand_04.svg') }}" alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brand/brand_05.svg') }}" alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brand/brand_06.svg') }}" alt="logo">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brand/brand_04.svg') }}" alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- features-area -->
        <section id="features" class="features__area section-pt-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-80">
                            <span class="sub-title">accessible for everyone</span>
                            <h2 class="title">Crypto <span>development</span> accessible</h2>
                        </div>
                    </div>
                </div>
                <div class="row gutter-y-40">
                    <div class="col-lg-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="{{ asset('assets/img/icon/features_icon01.png') }}" alt="icon">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Crypto <span>management</span></h4>
                                <p>Automated identity verification and anti-money</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="features__item">
                            <div class="features__icon">
                                <img src="{{ asset('assets/img/icon/features_icon02.png') }}" alt="icon">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Crypto <span>exchange</span></h4>
                                <p>A built-in explorer to track transactions</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features__item features__item-two">
                            <div class="features__icon">
                                <img src="{{ asset('assets/img/icon/features_icon03.png') }}" alt="icon">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Real-time <span>data</span></h4>
                                <p>Global reach with content available in multiple</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features__item features__item-two">
                            <div class="features__icon">
                                <img src="{{ asset('assets/img/icon/features_icon04.png') }}" alt="icon">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Advanced <span>trading</span></h4>
                                <p>Visual dashboards for trade performance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features__item features__item-two">
                            <div class="features__icon">
                                <img src="{{ asset('assets/img/icon/features_icon05.png') }}" alt="icon">
                            </div>
                            <div class="features__content">
                                <h4 class="title">Blockchain <span>compliance</span></h4>
                                <p>Exportable reports for tax and accounting purposes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="shape">
            </div>
        </section>
        <!-- features-area-end -->

        <!-- marquee-area -->
        <section class="marquee__area section-pt-120">
            <div class="slider__marquee clearfix marquee-wrap">
                <div class="marquee_mode marquee__group">
                    <h6 class="marquee__item">You will hold the way you love Webzo</h6>
                    <h6 class="marquee__item">You will hold the way you love Webzo</h6>
                </div>
            </div>
        </section>
        <!-- marquee-area-end -->

        <!-- token-area -->
        <!-- <section id="token" class="token__area section-py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="token__content" data-aos="fade-right" data-aos-delay="0">
                            <div class="section__title mb-40">
                                <span class="sub-title">accessible for everyone</span>
                                <h2 class="title">Trading <span>platform</span> <br> of the future!</h2>
                            </div>
                            <p>Webzi brings our love for cryptocurrency into Web3! Like a frog’s leap, the chart can jump at any moment. Boom!</p>
                            <a href="#!" class="tg-btn tg-btn-two">purchase now</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="token__wrap" data-aos="fade-left" data-aos-delay="0">
                            <div class="token__wrap-inner">
                                <h4 class="title">Token sale ends in:</h4>
                                <div class="countdown__wrap">
                                    <div class="coming-time" data-countdown="2026/12/30"></div>
                                </div>
                                <h3 class="token__received"><span>$49,222,300</span> contribution received</h3>
                                <div class="token__progress-wrap">
                                    <ul class="list-wrap token__progress-title">
                                        <li>$5M</li>
                                        <li>$99M</li>
                                    </ul>
                                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="copy-text">
                                <mark>0x2170Ed0880ac9A755fd29B2688956BD959F933F8</mark>
                                <button class="copy-btn"><img src="{{ asset('assets/img/icon/copy.svg') }}" alt=""></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="token__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="">
            </div>
        </section> -->
        <!-- token-area-end -->

        <!-- section-divider -->
        <div class="section-divider">
            <div class="container">
                <span></span>
            </div>
        </div>
        <!-- section-divider-end -->

        <!-- work-area -->
        <section id="work" class="work__area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section__title text-center mb-80">
                            <span class="sub-title">how it works?</span>
                            <h2 class="title">Core asset of the <span>crypto</span> marketplace</h2>
                        </div>
                    </div>
                </div>
                <div class="work__item-wrap">
                    <div class="work__img">
                        <img src="{{ asset('assets/img/images/work_img.png') }}" alt="img" class="alltuchtopdown">
                    </div>
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="0">
                            <div class="work__item">
                                <h1 class="number">01</h1>
                                <h4 class="title">Currency <span>conversion</span></h4>
                                <p>Exportable reports for tax and accounting purposes.</p>
                            </div>
                            <div class="work__item mb-0">
                                <h1 class="number">02</h1>
                                <h4 class="title">Data <span>encryption</span></h4>
                                <p>Visual dashboards for trade performance.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="0">
                            <div class="work__item work__item-right">
                                <h1 class="number">03</h1>
                                <h4 class="title">Cold wallet <span>storage</span></h4>
                                <p>Regular updates on crypto trends and platform features.</p>
                            </div>
                            <div class="work__item work__item-right mb-0">
                                <h1 class="number">04</h1>
                                <h4 class="title">Transfer crypto <span>& data</span></h4>
                                <p>Guides for beginners on crypto basics and trading.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="shape">
            </div>
        </section>
        <!-- work-area-end -->

        <!-- exchange-area -->
        <section class="exchange__area section-pb-120" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="exchange__inner-wrap">
                    <div class="exchange__content">
                        <div class="icon">
                            <img src="{{ asset('assets/img/images/exchange_img.png') }}" alt="img">
                        </div>
                        <div class="content">
                            <h4 class="title">Exchange <span>availability</span></h4>
                            <p>AI-powered tools to detect and prevent fraudulent activities.</p>
                        </div>
                    </div>
                    <div class="exchange__icons">
                        <ul class="list-wrap">
                            <li><img src="{{ asset('assets/img/icon/exchange_icon01.svg') }}" alt="icon"></li>
                            <li><img src="{{ asset('assets/img/icon/exchange_icon02.svg') }}" alt="icon"></li>
                            <li><img src="{{ asset('assets/img/icon/exchange_icon03.svg') }}" alt="icon"></li>
                            <li><img src="{{ asset('assets/img/icon/exchange_icon04.svg') }}" alt="icon"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- exchange-area-end -->

        <!-- crypto-area -->
        <section class="crypto__area section-py-120">
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
        <section class="faq__area section-py-120">
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
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Main purpose of a cryptocurrency
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>The private key, stored securely in the wallet, allows you to sign transactions and prove ownership of the funds cryptocurrency wallet.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                How can I make refund?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>The private key, stored securely in the wallet, allows you to sign transactions and prove ownership of the funds cryptocurrency wallet.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                How do they operate on blockchain?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>The private key, stored securely in the wallet, allows you to sign transactions and prove ownership of the funds cryptocurrency wallet.</p>
                                            </div>
                                        </div>
                                    </div>
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
