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
                                            <li><a href="{{ route('home') }}#home" class="section-link">Home</a></li>
                                            <li><a href="{{ route('home') }}#faq" class="section-link">FAQ</a></li>
                                            <li><a href="{{ route('home') }}#roadmap" class="section-link">roadmap</a></li>
                                            <li><a href="{{ route('blog')}}">Article</a></li>
                                            <li><a href="{{ route('blog-video')}}">Video Blog</a></li>
                                        </ul>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="header-btn">
                                            <a href="{{ route('contact-us') }}" class="tg-btn">Gabung Sekarang</a>
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