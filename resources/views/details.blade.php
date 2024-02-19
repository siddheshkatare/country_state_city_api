<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoderDocs - Bootstrap Documentation Template For Software Projects</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Explore the world with ease using the Country State City API, offering comprehensive geographical data on countries, states, and cities worldwide. Built on Laravel and powered by the open-source database provided by Darshan Gada.">
    <meta name="keywords"
        content="Country State City API, geographical data, Laravel API, Darshan Gada, countries, states, cities">
    <meta name="author" content="Your Name">
    <meta property="og:title" content="Country State City API">
    <meta property="og:description"
        content="Explore the world with ease using the Country State City API, offering comprehensive geographical data on countries, states, and cities worldwide. Built on Laravel and powered by the open-source database provided by Darshan Gada.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="Your website URL">
    <meta property="og:image" content="assets/images/world-logo.svg">
    <meta property="og:site_name" content="Country State City API">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/theme.css">

</head>

<body class="docs-page">
    <header class="header fixed-top">
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
                    <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none"
                        type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="site-logo">
                        <a class="navbar-brand" href="/">
                            <img class="logo-icon me-2" src="assets/images/world-logo.svg" alt="logo">
                            <span class="logo-text"> Country State City <span class="text-alt"> API </span></span>
                        </a>
                    </div>
                </div>
                <!--//docs-logo-wrapper-->
                <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                    <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                        <li class="list-inline-item"><a
                                href="https://github.com/siddheshkatare/country_state_city_api"><i
                                    class="fab fa-github fa-fw"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/siddhesh-katare-a87aa0126"><i
                                    class="fab fa-linkedin fa-fw"></i></a></li>
                    </ul>
                    <!--//social-list-->
                    <a href="/api/" class="btn btn-primary d-none d-lg-flex">Swagger</a>
                </div>
                <!--//docs-top-utilities-->
            </div>
            <!--//container-->
        </div>
        <!--//branding-->
    </header>
    <!--//header-->


    <div class="docs-wrapper">
        <div id="docs-sidebar" class="docs-sidebar">

            <nav id="docs-nav" class="docs-nav navbar">
                <ul class="section-items list-unstyled nav flex-column pb-3">
                    <li class="nav-item section-title"><a class="nav-link scrollto" href="#section-1"><span
                                class="theme-icon-holder me-2"><i class="fas fa-map-signs"></i></span>Introduction</a>
                    </li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-1">Welcome</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-1-2">About Our API</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-2"><span
                                class="theme-icon-holder me-2"><i class="fas fa-box"></i></span>APIs</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-1">Regions</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-2">Subregions</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-3">Countries</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-4">States</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-2-5">Cities</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-3"><span
                                class="theme-icon-holder me-2"><i class="fas fa-tools"></i></span>Key Features</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-1">Efficiency</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-2">Comprehensive Data</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-3">Easy Integration</a></li>
                    <li class="nav-item"><a class="nav-link scrollto" href="#item-3-4">Regular Updates</a></li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-4"><span
                                class="theme-icon-holder me-2"><i class="fas fa-laptop-code"></i></span>Start Building
                            Today</a>
                    </li>
                    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#section-5"><span
                                class="theme-icon-holder me-2"><i class="fas fa-book-reader"></i></span>Credits</a></li>


                </ul>

            </nav>
            <!--//docs-nav-->
        </div>
        <!--//docs-sidebar-->
        <div class="docs-content">
            <div class="container">
                <!-- Introduction -->
                <article class="docs-article" id="section-1">
                    <header class="docs-header">
                        <h1 class="docs-heading">Introduction <span class="docs-time">Last updated: 2024-02-17</span>
                        </h1>
                        <section class="docs-intro">
                            <p>Welcome to the Country State City API, your go-to resource for accessing
                                comprehensive data on countries, states, and cities worldwide.</p>

                        </section>

                    </header>
                    <section class="docs-section" id="item-1-1">
                        <h2 class="section-heading">Welcome</h2>
                        <p>
                            Welcome to the Country State City API, your go-to resource for accessing
                            comprehensive data on countries, states, and cities worldwide. Our API, built on
                            Laravel and powered by the open-source database provided by <a
                                href="https://github.com/dr5hn" title="Darshan Gada" target="_blank"
                                class="theme-link">Darshan Gada</a>, offers developers a hassle-free solution
                            for integrating location-based functionalities into their applications. </p>
                    </section>
                    <!--//docs-intro-->
                    <section class="docs-section" id="item-1-2">
                        <h5 class="section-heading">About Our API</h5>
                        <p>Our API provides developers with easy access to accurate information about countries,
                            states,
                            and cities. With just a few API calls, you can retrieve a wealth of geographical data,
                            including:</p>
                        <a href="#item-2-1">Regions</a> &nbsp;
                        <a href="#item-2-2">Subregions</a>&nbsp;
                        <a href="#item-2-3">Countries</a>&nbsp;
                        <a href="#item-2-4">States</a>&nbsp;
                        <a href="#item-2-5">Cities</a>&nbsp;
                    </section>
                    <!--//section-->

                </article>

                <!-- APIs -->
                <article class="docs-article" id="section-2">
                    <header class="docs-header">
                        <h1 class="docs-heading">APIs</h1>
                        <section class="docs-intro">
                            <p>To begin using our API, simply explore our documentation. Our endpoints are open and
                                available for anyone to access, making it easy for you to integrate geographical data
                                into your applications without any authentication requirements.</p>
                        </section>
                        <!--//docs-intro-->
                    </header>

                    <!-- Regions -->
                    <section class="docs-section" id="item-2-1">
                        <h2 class="section-heading">Regions</h2>
                        <p>Get details about regions, including id, names, translations, and wikiDataId. </p>
                        <h4>Get All Regions:</h4>
                        <p>Get a list of all regions</p>
                        <p>Method: <code>GET</code></p>
                        <p>Path: <code>/api/regions</code></p>
                        <p>Example: <a href="/api/regions" class="theme-link"
                                target="_blank"><code>/api/regions</code></a></p>

                        <h5>Response:</h5>
                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"regions"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Africa"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"kr\":\"아프리카\",\"pt-BR\":\"África\",\"pt\":\"África\",\"nl\":\"Afrika\",\"hr\":\"Afrika\",\"fa\":\"آفریقا\",\"de\":\"Afrika\",\"es\":\"África\",\"fr\":\"Afrique\",\"ja\":\"アフリカ\",\"it\":\"Africa\",\"cn\":\"非洲\",\"tr\":\"Afrika\"}"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q15"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
                        </div>
                    </section>
                    <!--//section-->

                    <!-- Subregions -->
                    <section class="docs-section" id="item-2-2">
                        <h2 class="section-heading">Subregions</h2>
                        <p>Get details about subregions, including is names, region_id, translations and wikiDataId.
                        </p>
                        <h4>Get All Subregions:</h4>
                        <p>Get a list of all subregions</p>
                        <p>Method: <code>GET</code></p>
                        <p>Path: <code>/api/subregions</code></p>
                        <p>Example: <a href="/api/subregions" class="theme-link"
                                target="_blank"><code>/api/subregions</code></a></p>

                        <h5>Response:</h5>
                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"subregions"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Afghanistan"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"korean\":\"서아프리카\",\"portuguese\":\"África Ocidental\",\"dutch\":\"West-Afrika\",\"croatian\":\"Zapadna Afrika\",\"persian\":\"غرب آفریقا\",\"german\":\"Westafrika\",\"spanish\":\"África Occidental\",\"french\":\"Afrique de l'Ouest\",\"japanese\":\"西アフリカ\",\"italian\":\"Africa occidentale\",\"chinese\":\"西非\"}"</span>,
            <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
                        </div>
                        </br>
                        <h4>Get Subregion By Region Id:</h4>
                        <p>Get all subregions that comes under provided region id</p>
                        <p>Method: <code>GET</code></p>
                        <p>Path: <code>/api/subregion</code></p>
                        <p>Parameters: <code>regionId</code></p>
                        <p>Example: <a href="/api/subregions?regionId=1" class="theme-link"
                                target="_blank"><code>/api/subregions?regionId=1</code></a></p>

                        <h5>Response:</h5>

                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"subregions"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Afghanistan"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"korean\":\"서아프리카\",\"portuguese\":\"África Ocidental\",\"dutch\":\"West-Afrika\",\"croatian\":\"Zapadna Afrika\",\"persian\":\"غرب آفریقا\",\"german\":\"Westafrika\",\"spanish\":\"África Occidental\",\"french\":\"Afrique de l'Ouest\",\"japanese\":\"西アフリカ\",\"italian\":\"Africa occidentale\",\"chinese\":\"西非\"}"</span>,
            <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
                        </div>
                    </section>
                    <!--//section-->

                    <!-- Countries -->
                    <section class="docs-section" id="item-2-3">
                        <h2 class="section-heading">Countries</h2>
                        <p>Get details about countries, including names, ISO codes, translations, etc. </p>
                        <h4>Get All Countries:</h4>
                        <p>Get a list of all countries</p>
                        <p>Method: <code>GET</code></p>
                        <p>Path: <code>/api/countries</code></p>
                        <p>Example: <a href="/api/countries" class="theme-link"
                                target="_blank"><code>/api/countries</code></a></p>

                        <h5>Response:</h5>
                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"countries"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Afghanistan"</span>,
            <span class="hljs-attr">"iso3"</span>: <span class="hljs-number">AFG</span>,
            <span class="hljs-attr">"numeric_code"</span>: <span class="hljs-string">"004"</span>,
            <span class="hljs-attr">"iso2"</span>: <span class="hljs-string">"AF"</span>,
            <span class="hljs-attr">"phonecode"</span>: <span class="hljs-string">"93"</span>,
            <span class="hljs-attr">"capital"</span>: <span class="hljs-string">"Kabul"</span>,
            <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"AFN"</span>,
            <span class="hljs-attr">"currency_name"</span>: <span class="hljs-string">"Afghan afghani"</span>,
            <span class="hljs-attr">"currency_symbol"</span>: <span class="hljs-string">"؋"</span>,
            <span class="hljs-attr">"tld"</span>: <span class="hljs-string">".af"</span>,
            <span class="hljs-attr">"native"</span>: <span class="hljs-string">"افغانستان"</span>,
            <span class="hljs-attr">"region"</span>: <span class="hljs-string">"Asia"</span>,
            <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">3</span>,
            <span class="hljs-attr">"subregion"</span>: <span class="hljs-string">"Southern Asia"</span>,
            <span class="hljs-attr">"subregion_id"</span>: <span class="hljs-number">14</span>,
            <span class="hljs-attr">"nationality"</span>: <span class="hljs-string">"Afghan"</span>,
            <span class="hljs-attr">"timezones"</span>: <span class="hljs-string">"[{\"zoneName\":\"Asia/Kabul\",\"gmtOffset\":16200,\"gmtOffsetName\":\"UTC+04:30\",\"abbreviation\":\"AFT\",\"tzName\":\"Afghanistan Time\"}]"</span>,
            <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"kr\":\"아프가니스탄\",\"pt-BR\":\"Afeganistão\",\"pt\":\"Afeganistão\",\"nl\":\"Afghanistan\",\"hr\":\"Afganistan\",\"fa\":\"افغانستان\",\"de\":\"Afghanistan\",\"es\":\"Afganistán\",\"fr\":\"Afghanistan\",\"ja\":\"アフガニスタン\",\"it\":\"Afghanistan\",\"cn\":\"阿富汗\",\"tr\":\"Afganistan\"}"</span>,
            <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"33.00000000"</span>,
            <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"65.00000000"</span>,
            <span class="hljs-attr">"emoji"</span>: <span class="hljs-string">"🇦🇫"</span>,
            <span class="hljs-attr">"emojiU"</span>: <span class="hljs-string">"U+1F1E6 U+1F1EB"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
                        </div>
                        </br>
                        <h4>Get Country By Id:</h4>
                        <p>Get single country by id</p>
                        <p>Method: <code>GET</code></p>
                        <p>Path: <code>/api/countries</code></p>
                        <p>Parameters: <code>id</code></p>
                        <p>Example: <a href="/api/countries?id=1" class="theme-link"
                                target="_blank"><code>/api/countries?id=1</code></a></p>

                        <h5>Response:</h5>
                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"country"</span>:{
        <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
        <span class="hljs-attr">"status"</span>: <span class="hljs-string">"Afghanistan"</span>,
        <span class="hljs-attr">"iso3"</span>: <span class="hljs-number">AFG</span>,
        <span class="hljs-attr">"numeric_code"</span>: <span class="hljs-string">"004"</span>,
        <span class="hljs-attr">"iso2"</span>: <span class="hljs-string">"AF"</span>,
        <span class="hljs-attr">"phonecode"</span>: <span class="hljs-string">"93"</span>,
        <span class="hljs-attr">"capital"</span>: <span class="hljs-string">"Kabul"</span>,
        <span class="hljs-attr">"currency"</span>: <span class="hljs-string">"AFN"</span>,
        <span class="hljs-attr">"currency_name"</span>: <span class="hljs-string">"Afghan afghani"</span>,
        <span class="hljs-attr">"currency_symbol"</span>: <span class="hljs-string">"؋"</span>,
        <span class="hljs-attr">"tld"</span>: <span class="hljs-string">".af"</span>,
        <span class="hljs-attr">"native"</span>: <span class="hljs-string">"افغانستان"</span>,
        <span class="hljs-attr">"region"</span>: <span class="hljs-string">"Asia"</span>,
        <span class="hljs-attr">"region_id"</span>: <span class="hljs-number">3</span>,
        <span class="hljs-attr">"subregion"</span>: <span class="hljs-string">"Southern Asia"</span>,
        <span class="hljs-attr">"subregion_id"</span>: <span class="hljs-number">14</span>,
        <span class="hljs-attr">"nationality"</span>: <span class="hljs-string">"Afghan"</span>,
        <span class="hljs-attr">"timezones"</span>: <span class="hljs-string">"[{\"zoneName\":\"Asia/Kabul\",\"gmtOffset\":16200,\"gmtOffsetName\":\"UTC+04:30\",\"abbreviation\":\"AFT\",\"tzName\":\"Afghanistan Time\"}]"</span>,
        <span class="hljs-attr">"translations"</span>: <span class="hljs-string">"{\"kr\":\"아프가니스탄\",\"pt-BR\":\"Afeganistão\",\"pt\":\"Afeganistão\",\"nl\":\"Afghanistan\",\"hr\":\"Afganistan\",\"fa\":\"افغانستان\",\"de\":\"Afghanistan\",\"es\":\"Afganistán\",\"fr\":\"Afghanistan\",\"ja\":\"アフガニスタン\",\"it\":\"Afghanistan\",\"cn\":\"阿富汗\",\"tr\":\"Afganistan\"}"</span>,
        <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"33.00000000"</span>,
        <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"65.00000000"</span>,
        <span class="hljs-attr">"emoji"</span>: <span class="hljs-string">"🇦🇫"</span>,
        <span class="hljs-attr">"emojiU"</span>: <span class="hljs-string">"U+1F1E6 U+1F1EB"</span>,
        <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
    },
}
</code>
</pre>
                        </div>
                    </section>
                    <!--//section-->

                    <!-- States -->
                    <section class="docs-section" id="item-2-4">
                        <h2 class="section-heading">States</h2>
                        <p>Get a list of states by country, including names, country_id, country_code, type, etc. </p>
                        <h4>Get States By Country Id :</h4>
                        <p>Get a list of all states by country id</p>
                        <p>Method: <code>GET</code></p>
                        <p>Path: <code>/api/states/{countryId}</code></p>
                        <p>Example: <a href="/api/states/101" class="theme-link"
                                target="_blank"><code>/api/countries/101</code></a></p>

                        <h5>Response:</h5>
                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"states"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Andaman and Nicobar Islands"</span>,
            <span class="hljs-attr">"country_id"</span>: <span class="hljs-number">101</span>,
            <span class="hljs-attr">"country_code"</span>: <span class="hljs-string">"IN"</span>,
            <span class="hljs-attr">"fips_code"</span>: <span class="hljs-string">"01"</span>,
            <span class="hljs-attr">"iso2"</span>: <span class="hljs-string">"AF"</span>,
            <span class="hljs-attr">"type"</span>: <span class="hljs-string">"Union territory"</span>,
            <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"11.74008670"</span>,
            <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"92.65864010"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q889"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
                        </div>
                    </section>
                    <!--//section-->

                    <!-- City -->
                    <section class="docs-section" id="item-2-5">
                        <h2 class="section-heading">City</h2>
                        <p>Get list of all cities in a state, including names, state_id, state_code, country_id, etc.
                        </p>
                        <h4>Get All Cities:</h4>
                        <p>Get a list of all cities</p>
                        <p>Method: <code>GET</code></p>
                        <p>Path: <code>/api/cities</code></p>
                        <p>Example: <a href="/api/cities/4008" class="theme-link"
                                target="_blank"><code>/api/cities/4008</code></a></p>

                        <h5>Response:</h5>
                        <div class="docs-code-block">
                            <pre class="shadow-lg rounded"><code class="json hljs">{
    <span class="hljs-attr">"status"</span>: <span class="hljs-number">200</span>,
    <span class="hljs-attr">"countries"</span>:[
        {
            <span class="hljs-attr">"id"</span>: <span class="hljs-number">1</span>,
            <span class="hljs-attr">"name"</span>: <span class="hljs-string">"Andaman and Nicobar Islands"</span>,
            <span class="hljs-attr">"state_id"</span>: <span class="hljs-number">4008</span>,
            <span class="hljs-attr">"state_code"</span>: <span class="hljs-string">"MH"</span>,
            <span class="hljs-attr">"country_id"</span>: <span class="hljs-number">101</span>,
            <span class="hljs-attr">"country_code"</span>: <span class="hljs-string">"IN"</span>,
            <span class="hljs-attr">"latitude"</span>: <span class="hljs-string">"21.25665000"</span>,
            <span class="hljs-attr">"longitude"</span>: <span class="hljs-string">"77.51006000"</span>,
            <span class="hljs-attr">"wikiDataId"</span>: <span class="hljs-string">"Q490886"</span>,
        },
        {
            ...
        }
    ],
}
</code>
</pre>
                        </div>
                    </section>
                    <!--//section-->

                </article>

                <!-- Credits -->
                <article class="docs-article" id="section-3">
                    <header class="docs-header">
                        <h1 class="docs-heading">Key Features</h1>
                        <section class="docs-intro">
                            <p>Our API, built on Laravel, offers fast, reliable performance with comprehensive,
                                regularly updated geographical data, ensuring easy integration for developers.</p>
                        </section>
                        <!--//docs-intro-->
                    </header>

                    <!-- Efficiency -->
                    <section class="docs-section" id="item-3-1">
                        <h2 class="section-heading">Efficiency</h2>
                        <p>Our API, built on Laravel, guarantees rapid response times and dependable performance,
                            ensuring a seamless experience for your applications.</p>
                    </section>

                    <!-- Comprehensive Data -->
                    <section class="docs-section" id="item-3-2">
                        <h2 class="section-heading">Comprehensive Data</h2>
                        <p>Access an extensive database containing detailed information on countries, states, and cities
                            across the globe, catering to diverse geographical needs.</p>
                    </section>

                    <!-- Easy Integration -->
                    <section class="docs-section" id="item-3-3">
                        <h2 class="section-heading">Easy Integration</h2>
                        <p>Seamlessly integrate our API into your applications with ease, thanks to our meticulously
                            documented endpoints and user-friendly data structure.</p>
                    </section>

                    <!-- Regular Updates -->
                    <section class="docs-section" id="item-3-4">
                        <h2 class="section-heading">Regular Updates</h2>
                        <p>Stay up-to-date with the latest geographical information as our database undergoes frequent
                            updates, ensuring that you always have access to accurate and current data.</p>
                    </section>
                </article>

                <!-- Start Building Today -->
                <article class="docs-article" id="section-4">
                    <header class="docs-header">
                        <h1 class="docs-heading">Start Building Today</h1>
                        <section class="docs-intro">
                            <p>Unlock the power of geographical data with the Country State City API. Dive into our
                                documentation and start building innovative applications that leverage the richness of
                                location-based information.</p>
                        </section>
                        <!--//docs-intro-->
                    </header>
                </article>

                <!-- Credits -->
                <article class="docs-article" id="section-5">
                    <header class="docs-header">
                        <h1 class="docs-heading">Credits</h1>
                        <section class="docs-intro">
                            <p>We extend our gratitude to <a href="https://github.com/dr5hn" target="_blank"
                                    rel="noopener noreferrer">Darshan Gada</a> for providing the open-source database
                                used in
                                our API. You can find the repository at
                                <a href="http://github.com/dr5hn/countries-states-cities-database" target="_blank"
                                    rel="noopener noreferrer">
                                    https://github.com/dr5hn/countries-states-cities-database</a>.
                            </p>
                        </section>
                        <!--//docs-intro-->
                    </header>
                </article>

                <footer class="footer">
                    <div class="container text-center py-5">
                        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                        <small class="copyright">Templete designed with <span class="sr-only">love</span><i
                                class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link"
                                href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for
                            developers</small>
                        <ul class="social-list list-unstyled pt-4 mb-0">
                            <li class="list-inline-item"><a
                                    href="https://github.com/siddheshkatare/country_state_city_api" target="_blank"><i
                                        class="fab fa-github fa-fw"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.linkedin.com/in/siddhesh-katare-a87aa0126"
                                    target="_blank"><i class="fab fa-linkedin fa-fw"></i></a></li>
                        </ul>
                        <!--//social-list-->
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!--//docs-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script>
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
    <script src="assets/js/docs.js"></script>

</body>

</html>