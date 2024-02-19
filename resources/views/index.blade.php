<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>Country State City API - Free</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Explore the world with ease using the Country State City API, offering comprehensive geographical data on countries, states, and cities worldwide. Built on Laravel and powered by the open-source database provided by Darshan Gada.">
    <meta name="keywords" content="Country State City API, geographical data, Laravel API, Darshan Gada, countries, states, cities">
    <meta name="author" content="Your Name">
    <meta property="og:title" content="Country State City API">
    <meta property="og:description" content="Explore the world with ease using the Country State City API, offering comprehensive geographical data on countries, states, and cities worldwide. Built on Laravel and powered by the open-source database provided by Darshan Gada.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://csc.sidsworld.co.in/">
    <meta property="og:image" content="https://csc.sidsworld.co.in/assets/images/world-logo.svg">
    <meta property="og:site_name" content="Country State City API">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>

    <!-- Theme CSS -->
    <!-- <link id="theme-style" rel="stylesheet" href="../css/theme.css">-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header fixed-top">

        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
                    <div class="site-logo">
                        <a class="navbar-brand" href="/">
                            <img class="logo-icon me-2" src="assets/images/world-logo.svg" alt="logo">
                            <span class="logo-text"> Country State City <span class="text-alt"> API </span></span>
                        </a>
                    </div>
                </div>
                <!-- //docs-logo-wrapper-->
                <div class="docs-top-utilities d-flex justify-content-end align-items-center">

                    <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                        <li class="list-inline-item"><a href="https://github.com/siddheshkatare/country_state_city_api" target="_blank"><i class="fab fa-github fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/siddhesh-katare-a87aa0126" target="_blank"><i class="fab fa-linkedin fa-fw"></i></a></li>
                    </ul>
                    <!--
                                                                                                                                                        //social-list-->
                    <a href="/api/" class="btn btn-primary d-none d-lg-flex">
                        Swagger
                    </a>
                </div>
                <!--
                                                                                                                                                                        //docs-top-utilities-->
            </div>
            <!--
                                                                                                                                                                                //container-->
        </div>
        <!--
                                                                                                                                                                                        //branding-->
    </header>
    <!--
                                                                                                                                                                                                //header-->


    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right">
        </div>
        <div class="theme-bg-shapes-left">
        </div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">
                Country State City API
            </h1>
            <div class="page-intro single-col-max mx-auto">
                Everyting you need to use in your app or website with Country State City.
            </div>

        </div>
    </div>
    <!--
                                                                                                                                                                                                                                                                                    //page-header-->
    <div class="page-content">
        <div class="container">
            <div class="docs-overview py-5">
                <div class="row justify-content-center">

                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-map-signs">
                                        </i>
                                    </span>
                                    <!--//card-icon-holder-->
                                    <span class="card-title-text">
                                        Introduction
                                    </span>
                                </h5>
                                <div class="card-text">
                                    Welcome to the Country State City API, your go-to resource for accessing
                                    comprehensive data on countries, states, and cities worldwide.
                                </div>
                                <a class="card-link-mask" href="details#section-1">
                                </a>
                            </div>
                            <!--card-body-->
                        </div>
                        <!--card-->
                    </div>

                    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    //col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-box fa-fw">
                                        </i>
                                    </span>
                                    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        //card-icon-holder-->
                                    <span class="card-title-text">
                                        APIs
                                    </span>
                                </h5>
                                <div class="card-text">
                                    To begin using our API, simply explore our documentation. Our endpoints are open and
                                    available for anyone to access...
                                </div>
                                <a class="card-link-mask" href="details#section-2">
                                </a>
                            </div>
                            <!--card-body-->
                        </div>
                        <!--card-->
                    </div>

                    <!-- //Key Features-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-tools">
                                        </i>
                                    </span>
                                    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        //card-icon-holder-->
                                    <span class="card-title-text">
                                        Key Features
                                    </span>
                                </h5>
                                <div class="card-text">
                                    Our API, built on Laravel, offers fast, reliable performance with comprehensive,
                                    regularly updated geographical data...
                                </div>
                                <a class="card-link-mask" href="details#section-3">
                                </a>
                            </div>
                            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            //card-body-->
                        </div>
                        <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    //card-->
                    </div>
                    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            //col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-laptop-code">
                                        </i>
                                    </span>
                                    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                //card-icon-holder-->
                                    <span class="card-title-text">
                                        Start Building Today
                                    </span>
                                </h5>
                                <div class="card-text">
                                    Unlock the power of geographical data with the Country State City API. Dive into our
                                    documentation and start building...
                                </div>
                                <a class="card-link-mask" href="details#section-4">
                                </a>
                            </div>
                            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    //card-body-->
                        </div>
                        <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            //card-->
                    </div>

                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-book-reader">
                                        </i>
                                    </span>
                                    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                //card-icon-holder-->
                                    <span class="card-title-text">
                                        Credits
                                    </span>
                                </h5>
                                <div class="card-text">
                                    We extend our gratitude to Darshan Gada for providing the open-source database used
                                    in our API. You can find the repository at...
                                </div>
                                <a class="card-link-mask" href="details#section-5">
                                </a>
                            </div>
                            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    //card-body-->
                        </div>
                        <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            //card-->
                    </div>
                </div>
                <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    //row-->
            </div>
            <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            //container-->
        </div>
        <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    //container-->
    </div>
    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            //page-content-->

    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
        <div class="theme-bg-shapes-right">
        </div>
        <div class="theme-bg-shapes-left">
        </div>
        <div class="container">

            <div class="section-intro text-white mb-3 single-col-max mx-auto">
                Ready to get started? Click below to explore our API documentation on Swagger and unlock the power of
                location-based data!
                <div class="pt-3 text-center">
                    <a class="btn btn-light" href="/api/" target="_blank">
                        Go to Swagger
                        <i class="fas fa-arrow-alt-circle-right ml-2">
                        </i>
                    </a>
                </div>
            </div>
    </section>
    <!--
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        //cta-section-->

    <footer class="footer">

        <div class="footer-bottom text-center py-5">

            <ul class="social-list list-unstyled pb-4 mb-0">
                <li class="list-inline-item"><a href="https://github.com/siddheshkatare/country_state_city_api" target="_blank"><i class="fab fa-github fa-fw"></i></a></li>
                <li class="list-inline-item"><a href="https://www.linkedin.com/in/siddhesh-katare-a87aa0126" target="_blank"><i class="fab fa-linkedin fa-fw"></i></a></li>
            </ul>
            <small class="copyright">
                Templete designed
                with
                <span class="sr-only">
                    love
                </span>
                <i class="fas fa-heart" style="color: #fb866a;"></i>
                by
                <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">
                    Xiaoying
                    Riley
                </a>
                for
                developers</small>


        </div>

    </footer>

    <!--Javascript-->
    <script src="{{ asset('assets/plugins/popper.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}">
    </script>

    <!-- Page Specific JS -->
    <script src="{{ asset('assets/plugins/smoothscroll.min.js') }}">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js">
    </script>
    <script src="{{ asset('assets/js/highlight-custom.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/simplelightbox/simple-lightbox.min.js') }}">
    </script>
    <script src="{{ asset('assets/plugins/gumshoe/gumshoe.polyfills.min.js') }}">
    </script>
    <script src="{{ asset('assets/js/docs.js') }}">
    </script>

</body>

</html>