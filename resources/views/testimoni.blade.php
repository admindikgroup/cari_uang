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
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17689697869"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-17689697869');
    </script>

</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q14C55775R"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q14C55775R');
</script>

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

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/banner/breadcrumb_bg.svg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner__content breadcrumb__content">
                            <!-- <span class="sub-title">Biarkan Mereka Yang Bersuara</span> -->
                            <h2 class="title">Testimoni</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="{{ asset('assets/img/images/features_shape.png') }}" alt="">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-post-area -->
        <section class="blog__post-area section-py-120">
            <div class="container">
                <div class="row justify-content-center gutter-50">
                    @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-item shine__animate-item">
                            <div class="blog__post-thumb">
                                <a href="{{ route('testimoni.detail', $article) }}" class="shine__animate-link">
                                    @if ($article->image)
                                        <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}" style="width: 100%; height: 375px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('assets/img/blog/blog_post01.jpg') }}" alt="{{ $article->title }}" style="width: 100%; height: 375px; object-fit: cover;">
                                    @endif
                                </a>
                            </div>
                            <div class="blog__post-content">
                                <span class="date">{{ $article->created_at->format('F d, Y') }}</span>
                                <h2 class="title"><a href="{{ route('testimoni.detail', $article) }}">{{ $article->title }}</a></h2>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="load-more-btn text-center">
                    {{ $articles->links() }}
                </div>
            </div>
        </section>
        <!-- blog-post-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer-area -->
    <footer class="footer__area">
        <div class="container">
            <div class="footer__top">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="footer__content">
                            <h2 class="title"> TURN OPPORTUNITIES <span>INTO</span> FORTUNE, SMART AND  SIMPLE </h2>
                            <h3> MAKSIMALKAN PELUANG KEUTUNGAN KALIAN DENGAN BERGABUNG BERSAMA KAMI </h3>
                            <div class="team__social-wrap">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="https://t.me/adhamcy">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/telegram.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://wa.me/+19035229093?text=gabung%20grup%20vip">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/wa.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://youtube.com/@Adhamcy">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/youtube4.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://youtube.com/@taniacy88">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/youtube4.svg') }}" alt="icon" class="icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://official.olymptrade-id-me.com/id-id?affiliate_id=512764&subid1=E69&subid2=">
                                            <div class="shape">
                                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                                            </div>
                                            <img src="{{ asset('assets/img/icon/dollar.svg') }}" alt="icon" class="icon">
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