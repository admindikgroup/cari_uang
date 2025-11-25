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
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17689697869"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-17689697869');
    </script>


    <style>
        .broadcast__card {
            transition: all 0.3s ease;
        }
        .broadcast__card.expired {
            opacity: 0.6;
        }
        .broadcast__card iframe {
            width: 100%;
            height: 315px;
        }

 
        .broadcast__card.fade-out {
            opacity: 0;
            transform: translateY(20px);
        }


        
        /* 🔹 Responsive video wrapper */
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            border-radius: 10px;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* 🔹 Responsive adjustments for mobile */
        @media (max-width: 768px) {
            .broadcast__card {
                padding: 1rem;
            }

            .broadcast__text {
                font-size: 0.9rem;
            }

            .badge {
                font-size: 0.8rem;
            }

            .section__title h3.title {
                font-size: 1.2rem;
            }
        }

    </style>
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

        <!-- banner-area -->
        <section class="banner__area banner__bg" data-background="{{ asset('assets/img/banner/hero_bg.svg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="banner__content">
                            <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s">{!! $banner_title !!}</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">{{ $banner_subtitle }}</p>
                            <div class="banner__form wow fadeInUp" data-wow-delay=".8s" data-wow-duration="1s">
                                <div class="d-flex flex-column flex-md-row justify-content-center">
                                    @foreach ($cmsButtons as $button)
                                        @php
                                            $icon = '';
                                            $target = '_blank';
                                            $buttonName = strtolower($button->name);
                                            if ($buttonName == 'whatsapp') {
                                                $icon = 'fab fa-whatsapp';
                                            } elseif ($buttonName == 'telegram') {
                                                $icon = 'fab fa-telegram';
                                            } elseif ($buttonName == 'pendaftaran'){
                                                $icon = 'fas fa-dollar-sign';
                                            } else {
                                                $icon = 'fas fa-link';
                                                $target = '_blank';
                                            }
                                        @endphp
                                        <a href="{{ $button->url }}" target="{{ $target }}" style="padding: 20px 85px;" class="tg-btn mx-2 mb-2 mb-md-0 d-flex align-items-center justify-content-center text-center">
                                            <i style="margin-right: 5px;" class="{{ $icon }}"></i>   {{ $button->name }}
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
         
        @if ($broadcasts->count())
        <section class="broadcast__area mt-5">
            <div class="container">
                <div class="section__title text-center mb-4">
                    <h3 class="title">🔴 Live Broadcast</h3>
                </div>

                <div class="row justify-content-center">
                    @foreach ($broadcasts as $broadcast)
                        @php
                            // Deteksi ID YouTube
                            preg_match(
                                '/https?:\/\/(?:www\.)?youtube\.com\/(?:watch\?v=|live\/|embed\/|shorts\/)?([\w\-]+)/i',
                                $broadcast->konten_broadcast,
                                $matches
                            );
                            $youtubeId = $matches[1] ?? null;

                            // Hapus semua URL YouTube (termasuk parameter ? atau &)
                            $cleanText = preg_replace(
                                '/https?:\/\/(?:www\.)?youtube\.com\/[^\s]+/i',
                                '',
                                $broadcast->konten_broadcast
                            );
                        @endphp

                        <div class="col-lg-8 col-md-10 col-sm-12 mb-4">
                            <div class="broadcast__card p-4 bg-white shadow rounded text-center">
                                <h4 class="font-bold mb-3 text-lg sm:text-xl">{{ $broadcast->title }}</h4>

                                @if ($youtubeId)
                                    <div class="video-wrapper mb-3">
                                        <iframe 
                                            src="https://www.youtube.com/embed/{{ $youtubeId }}"
                                            frameborder="0"
                                            allowfullscreen
                                            loading="lazy"
                                            style="border-radius: 10px; width: 100%; height: 100%;"
                                        ></iframe>
                                    </div>
                                @endif

                                <div class="broadcast__text mb-3 text-gray-700 text-sm leading-relaxed">
                                    {!! nl2br(strip_tags(html_entity_decode(trim($cleanText)))) !!}
                                </div>

                                <div class="text-center mt-2">
                                    <span class="badge bg-danger text-white px-3 py-2 rounded-pill text-sm">
                                        Berakhir dalam:
                                        <span class="countdown" 
                                            data-expired="{{ \Carbon\Carbon::parse($broadcast->expired)->format('Y-m-d H:i:s') }}">
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif


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
                                <span class="sub-title">Our Services</span>
                                <h2 class="title">Explore All Exclusive <br> Services</h2>
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
                            <span class="sub-title">strategy & Planning </span>
                            <h2 class="title">Keunggulan <span>Cari</span> Uang</h2>
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
                                    <h3 class="title">FAST</h3>
                                    <p>Transaksi mulai dari 1 menit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roadmap__item">
                                <div class="roadmap__icon">
                                    <img src="{{ asset('assets/img/icon/roadmap_icon02.png') }}" alt="icon">
                                </div>
                                <div class="roadmap__content">
                                    <h3 class="title">FREE</h3>
                                    <p>Gabung tanpa biaya tambahan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roadmap__item">
                                <div class="roadmap__icon">
                                    <img src="{{ asset('assets/img/icon/roadmap_icon03.png') }}" alt="icon">
                                </div>
                                <div class="roadmap__content">
                                    <h3 class="title">FRIENDLY</h3>
                                    <p>Dengan adanya bimbingan dan aplikasi yang sangat mudah dipahami</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="roadmap__item">
                                <div class="roadmap__icon">
                                    <img src="{{ asset('assets/img/icon/roadmap_icon04.png') }}" alt="icon">
                                </div>
                                <div class="roadmap__content">
                                    <h3 class="title">FIXED</h3>
                                    <p>Jumlah profit dan risiko yang dapat dipastikan sejak awal</p>
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
                            <h2 class="title"> TURN OPPORTUNITIES <span>INTO</span> FORTUNE, SMART AND  SIMPLE </h2>
                            <h3> MAKSIMALKAN PELUANG KEUTUNGAN KALIAN DENGAN BERGABUNG BERSAMA KAMI </h3>
                            <div class="team__social-wrap">
                <ul class="list-wrap">
                    <li>
                        <a href="https://t.me/adhamcy" target="_blank" rel="noopener noreferrer">
                            <div class="shape">
                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                            </div>
                            <img src="{{ asset('assets/img/icon/telegram.svg') }}" alt="icon" class="icon">
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/+19035229093?text=gabung%20grup%20vip" target="_blank" rel="noopener noreferrer">
                            <div class="shape">
                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                            </div>
                            <img src="{{ asset('assets/img/icon/wa.svg') }}" alt="icon" class="icon">
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/@Adhamcy" target="_blank" rel="noopener noreferrer">
                            <div class="shape">
                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                            </div>
                            <img src="{{ asset('assets/img/icon/youtube4.svg') }}" alt="icon" class="icon">
                        </a>
                    </li>
                    <li>
                        <a href="https://youtube.com/@taniacy88" target="_blank" rel="noopener noreferrer">
                            <div class="shape">
                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                            </div>
                            <img src="{{ asset('assets/img/icon/youtube4.svg') }}" alt="icon" class="icon">
                        </a>
                    </li>
                    <li>
                        <a href="https://olymptrade-vid.com/?affiliate_id=512764&subid1=E69&subid2=" target="_blank" rel="noopener noreferrer">
                            <div class="shape">
                                <img src="{{ asset('assets/img/icon/icons_bg.svg') }}" alt="shape">
                            </div>
                            <img src="{{ asset('assets/img/icon/dollar.svg') }}" alt="icon" class="icon">
                        </a>
                    </li>
                </ul>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function updateCountdowns() {
                document.querySelectorAll(".countdown").forEach(el => {
                    const expired = new Date(el.dataset.expired).getTime();
                    const now = new Date().getTime();
                    const diff = expired - now;

                    if (diff <= 0) {
                        el.innerHTML = "Expired";
                        const card = el.closest('.broadcast__card');
                        if (card && !card.classList.contains("fade-out")) {
                            card.classList.add("fade-out");
                            // Hapus elemen setelah animasi selesai (1s)
                            setTimeout(() => {
                                card.parentElement.remove();
                            }, 1000);
                        }
                        return;
                    }

                    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

                    el.innerHTML = `${hours}h ${minutes}m ${seconds}s`;
                });
            }

            updateCountdowns();
            setInterval(updateCountdowns, 1000);
        });

    </script>

</body>



</html>