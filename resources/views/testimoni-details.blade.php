<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $article->title }}</title>
    <meta name="description" content="{{ $article->title }}">
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

        <!-- blog-details-area -->
        <section class="blog__details-area section-py-120">
            <div class="container">
                <div class="blog__details-wrap">
                    <div class="blog__details-thumb-wrap">
                        @if ($article->image)
                            <div class="blog__details-thumb" style="display: flex; justify-content: center;">
                                <img src="{{ asset('storage/images/' . $article->image) }}" alt="{{ $article->title }}" style ="height: 500px; width: auto;">
                            </div>
                        @endif
                    </div>
                    <div class="blog__details-content">
                        <span class="date">{{ $article->created_at->format('F d, Y') }}</span>
                        <h2 class="title">{{ $article->title }}</h2>
                        {!! $article->konten !!}
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
            <div class="footer__bottom">
                <div class="copyright-text">
                    <p>Copyright & design by <a href="#" target="_blank">Cari Uang</a> - 2025</p>
                </div>
            </div>
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