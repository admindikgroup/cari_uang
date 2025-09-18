<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                                        <a href="{{ route('home') }}"><img style="height: 120px; width: 90px;" src="{{ asset('assets/img/logo/IMG_1918.png') }}" alt="Logo Cari Uang"></a>
                                    </div>
                                    <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="{{ route('home') }}#features">features</a></li>
                                            <li><a href="{{ route('home') }}#token">token</a></li>
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
                                    <div class="tgmenu__action">
                                        <ul class="list-wrap">
                                            <li class="header-btn">
                                                <a href="#!" class="tg-btn">buy now</a>
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
            {{ $slot }}
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
                        <p>Copyright & design by Cari Uang - 2025</p>
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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
