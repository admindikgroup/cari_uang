<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cari Uang</title>
    <meta name="description" content="Cari Uang">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
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
                                        <li><a href="{{ route('home') }}#token">token</a></li>
                                        <li><a href="{{ route('home') }}#work">how it works</a></li>
                                        <li><a href="{{ route('home') }}#roadmap">roadmap</a></li>
                                        <li class="menu-item-has-children"><a href="{{ route('blog')}}">blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('blog')}}">Our Blog</a></li>
                                                <li><a href="{{ route('blog.detail') }}">Blog Details</a></li>
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

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/banner/breadcrumb_bg.svg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner__content breadcrumb__content">
                            <span class="sub-title">Built on web3. Powered by You</span>
                            <h2 class="title">Blog & insights</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-details-area -->
        <section class="blog__details-area section-py-120">
            <div class="container">
                <div class="blog__details-wrap">
                    <div class="blog__details-thumb-wrap">
                        <div class="row gutter-40">
                            <div class="col-md-6">
                                <div class="blog__details-thumb">
                                    <img src="{{ asset('assets/img/blog/blog_details_img01.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="blog__details-thumb">
                                    <img src="{{ asset('assets/img/blog/blog_details_img02.jpg') }}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__details-content">
                        <span class="date">{{ $article->created_at->format('F d, Y') }}</span>
                        <h2 class="title">Intro of the news</h2>
                        <p>The adoption of blockchain by fifteen Indian banks for trade finance signifies a significant step toward enhancing efficiency, transparency, and security in financial transactions. Blockchain's decentralized and immutable nature allows for real-time tracking and reduced risks of fraud, streamlining processes like document verification and cross-border payments. This move could revolutionize traditional banking operations, fostering trust and collaboration among global trade participants. Fifteen leading Indian banks have collectively adopted blockchain technology to transform trade finance, a vital sector in global commerce. Trade finance involves processes like issuing letters of credit, managing cross-border payments, and mitigating risks such as non-payment or fraud. Blockchain's decentralized and immutable nature offers a significant advantage by ensuring transparency, security, and efficiency. Through a permissioned blockchain platform, these banks are digitizing critical processes such as electronic bills of lading and letters of credit. This reduces paperwork, accelerates transaction times, and eliminates intermediaries, ultimately cutting costs.</p>
                        <p>The adoption aims to enhance trust among stakeholders, including importers, exporters, and regulators, while also minimizing fraud by authenticating documents and preventing double financing. Blockchain's audit trail further aids regulatory compliance, making cross-border trade smoother and more reliable. This initiative aligns with global efforts like Marco Polo and Voltron, positioning India as a key player in the blockchain-driven trade finance landscape. However, challenges such as high implementation costs, interoperability issues with global platforms, and regulatory complexities remain. Despite these hurdles, this step is a major milestone that could inspire broader blockchain integration in banking, fostering efficiency, security, and economic growth.</p>
                        <!-- <div class="blog__details-inner-wrap">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6 col-md-8">
                                    <div class="blog__details-inner-thumb">
                                        <img src="{{ asset('assets/img/blog/blog_details_img03.jpg') }}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="blog__details-inner-content">
                                        <h3 class="title-two">What is Trade Finance?</h3>
                                        <ul class="list-wrap">
                                            <li>Indian banks’ blockchain adoption aligns with global efforts like Marco Polo and Voltron, blockchain platforms for trade finance.</li>
                                            <li>Implementing blockchain systems requires significant investment in technology and training.</li>
                                            <li>This move is expected to lay the groundwork for broader blockchain adoption in other banking services, such as supply chain financing.</li>
                                            <li>Real-time settlements, and retail banking. It demonstrates how blockchain can redefine traditional financial operations.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>The adoption of blockchain by fifteen Indian banks for trade finance signifies a significant step toward enhancing efficiency, transparency, and security in financial transactions. Blockchain's decentralized and immutable nature allows for real-time tracking and reduced risks of fraud, streamlining processes like document verification and cross-border payments. This move could revolutionize traditional banking operations, fostering trust and collaboration among global trade participants. Fifteen leading Indian banks have collectively adopted blockchain technology to transform trade finance, a vital sector in global commerce.</p>
                        <blockquote>
                            <p>“ Blockchain's decentralized and immutable nature allows for real-time tracking and reduced risks of fraud, streamlining processes like document verification and cross-border payments. ”</p>
                            <cite>Miranda H. Halim</cite>
                        </blockquote>
                        <p>Blockchain's audit trail further aids regulatory compliance, making cross-border trade smoother and more reliable. This initiative aligns with global efforts like Marco Polo and Voltron, positioning India as a key player in the blockchain-driven trade finance landscape. However, challenges such as high implementation costs, interoperability issues with global platforms, and regulatory complexities remain. Despite these hurdles, this step is a major milestone that could inspire broader blockchain integration in banking, fostering efficiency, security, and economic growth.</p>
                        <p>The adoption of blockchain by fifteen Indian banks for trade finance signifies a significant step toward enhancing efficiency, transparency, and security in financial transactions. Blockchain's decentralized and immutable nature allows for real-time tracking and reduced risks of fraud, streamlining processes like document verification and cross-border payments. This move could revolutionize traditional banking operations, fostering trust and collaboration among global trade participants. Fifteen leading Indian banks have collectively adopted blockchain technology to transform trade finance, a vital sector in global commerce. Trade finance involves processes like issuing letters of credit, managing cross-border payments, and mitigating risks such as non-payment or fraud. Blockchain's decentralized and immutable nature offers a significant advantage by ensuring transparency, security, and efficiency. Through a permissioned blockchain platform, these banks are digitizing critical processes such as electronic bills of lading and letters of credit. This reduces paperwork, accelerates transaction times, and eliminates intermediaries, ultimately cutting costs.</p> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area footer__area-two">
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