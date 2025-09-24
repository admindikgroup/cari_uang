<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us - Cari Uang</title>
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
                                            <!-- <li><a href="{{ route('home') }}#token">token</a></li> -->
                                            <li><a href="{{ route('home') }}#faq">FAQ</a></li>
                                            <li><a href="{{ route('home') }}#roadmap">roadmap</a></li>
                                            <li><a href="{{ route('contact-us') }}">Kontak</a></li>
                                            <li class="menu-item-has-children"><a href="{{ route('blog')}}">blog</a>
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

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/banner/hero_bg.svg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="banner__content">
                        <h2 class="title">Contact Us</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact__area section-py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact__form-wrap">
                            <div class="section__title mb-50">
                                <span class="sub-title">get in touch</span>
                                <h2 class="title">Feel free to write us a message.</h2>
                            </div>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form id="contact-form" action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="name" class="form-control" type="text" placeholder="Your Name *" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input name="email" class="form-control" type="email" placeholder="Your Email *" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-grp">
                                    <input name="subject" class="form-control" type="text" placeholder="Subject">
                                </div>
                                <br>
                                <div class="form-grp">
                                    <textarea name="message" class="form-control" placeholder="Message *" required></textarea>
                                </div>
                                    <br>
                                <button type="submit" class="tg-btn">send message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact__info-wrap">
                            <div class="section__title mb-50">
                                <span class="sub-title">Contact Info</span>
                                <h2 class="title">Our contact information</h2>
                            </div>
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Address</h5>
                                        <span>123 Street, New York, USA</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Email</h5>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="title">Phone</h5>
                                        <span>+123 456 7890</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->


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
