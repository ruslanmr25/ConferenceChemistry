<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Conference</title>


    <!-- Favicons -->
    <link href="/images.logo.png" rel="icon">
    {{-- <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="/assets/css/main.css" rel="stylesheet">


</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="/assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">{{ __('messages.siteName') }}</h1><span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">{{ __('messages.home') }}</a></li>
                    <li><a href="#about">{{ __('messages.about') }}</a></li>
                    <li><a href="#conference-sections">{{ __('messages.parts') }}</a></li>

                    <li><a href="#contact">{{ __('messages.contact') }}</a></li>



                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown"><a href="#"><span>{{ __('messages.language') }}</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li>
                                <a href="{{ url('lang/uz') }}">🇺🇿 O‘zbek</a> |
                            </li>
                            <li>
                                <a href="{{ url('lang/ru') }}">🇷🇺 Русский</a> |
                            </li>

                            <li>
                                <a href="{{ url('lang/en') }}">🇬🇧 English</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="{{ route('register') }}">{{ __('messages.register') }}</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">


                        <h1 class="hero-title mb-4">{{ __('messages.title') }}</h1>

                        <p class="hero-description mb-4">{{ __('messages.under-title') }}</p>

                        <div class="cta-wrapper">
                            <a href="{{ route('register') }}"
                                class="btn btn-primary">{{ __('messages.register') }}</a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="/images/conference.jpeg" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="row feature-boxes">
                    <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-gear"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">{{ __('messages.thesisLastDateTitle') }}</h3>
                                <p class="feature-text">{{ __('messages.thesisLastDate') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-window"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">{{ __('messages.registrationLastDateTitle') }}</h3>
                                <p class="feature-text">{{ __('messages.registrationLastDate') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="feature-box">
                            <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div class="feature-content">
                                <h3 class="feature-title">{{ __('messages.conferenceDatesTitle') }}</h3>
                                <p class="feature-text">{{ __('messages.conferenceDates') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">{{ __('messages.who_we_are') }}</p>
                        <h3>{{ __('messages.aboutSectionTitle') }}</h3>
                        <p class="fst-italic">
                            {{ __('messages.goal') }}
                        </p>
                        {{-- <a href="#" class="read-more">
                            <span>{{ __('messages.read_more') }}</span>
                            <i class="bi bi-arrow-right"></i>
                        </a> --}}
                    </div>


                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="/images/conference-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="/images/female.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="/images/image.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- /About Section -->

        <!-- Conference Sections -->
        <section id="conference-sections" class="how-we-work section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ __('messages.ConferenceSectionTitle') }}</h2>
                <p>{{ __('messages.ConferenceSectionSubtitle') }}</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="steps-6">
                    <div class="process-container">

                        <!-- 1 -->
                        <div class="process-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="content">
                                <span class="step-number">01</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-beaker"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>{{ __('messages.ConferenceSection1Title') }}</h3>
                                        <p>{{ __('messages.ConferenceSection1Desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Process Item -->

                        <!-- 2 -->
                        <div class="process-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="content">
                                <span class="step-number">02</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-gear"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>{{ __('messages.ConferenceSection2Title') }}</h3>
                                        <p>{{ __('messages.ConferenceSection2Desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Process Item -->

                        <!-- 3 -->
                        <div class="process-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="content">
                                <span class="step-number">03</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-columns-gap"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>{{ __('messages.ConferenceSection3Title') }}</h3>
                                        <p>{{ __('messages.ConferenceSection3Desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Process Item -->

                        <!-- 4 -->
                        <div class="process-item" data-aos="fade-up" data-aos-delay="500">
                            <div class="content">
                                <span class="step-number">04</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-bar-chart"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>{{ __('messages.ConferenceSection4Title') }}</h3>
                                        <p>{{ __('messages.ConferenceSection4Desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Process Item -->

                        <!-- 5 -->
                        <div class="process-item" data-aos="fade-up" data-aos-delay="600">
                            <div class="content">
                                <span class="step-number">05</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-lightbulb"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>{{ __('messages.ConferenceSection5Title') }}</h3>
                                        <p>{{ __('messages.ConferenceSection5Desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Process Item -->

                        <!-- 6 -->
                        <div class="process-item" data-aos="fade-up" data-aos-delay="700">
                            <div class="content">
                                <span class="step-number">06</span>
                                <div class="card-body">
                                    <div class="step-icon">
                                        <i class="bi bi-mortarboard"></i>
                                    </div>
                                    <div class="step-content">
                                        <h3>{{ __('messages.ConferenceSection6Title') }}</h3>
                                        <p>{{ __('messages.ConferenceSection6Desc') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Process Item -->

                    </div>
                </div>

            </div>

        </section><!-- /Conference Sections -->




        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>{{ __('messages.ConferenceContactTitle') }}</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 mb-5">

                    <!-- Address -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3>{{ __('messages.ConferenceContactAddressTitle') }}</h3>
                            <p>{{ __('messages.ConferenceContactAddress') }}</p>
                        </div>
                    </div>

                    <!-- Phone & Email -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <h3>{{ __('messages.ConferenceContactPhoneTitle') }}</h3>
                            <p>
                                {{ __('messages.ConferenceContactPerson') }}<br>
                                {{ __('messages.ConferenceContactPhone') }}<br>

                            </p>
                        </div>
                    </div>

                    <!-- Opening Hours -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="info-card">
                            <div class="icon-box">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h3>{{ __('messages.ConferenceContactHoursTitle') }}</h3>
                            <p>{{ __('messages.ConferenceContactEmail') }}</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- /Contact Section -->

    </main>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
