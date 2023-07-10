<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'COMPANY NAME') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Crimson+Text">

    <!-- AOS Style -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg py-4 shadow-sm  navbar-dark bg-dark" style="font-family:'Roboto';" >
            <div class="container">
                <a class="navbar-brand fs-4 font-bold px-2  text-white " href="{{ url('/') }}">
                    {{ 'MODERN ' }}<br>
                    {{ 'SEARCH' }}<br>
                    {{ 'VENTURES' }}
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse fs-5 px-4 " id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto gap-4 " >
                        <li class="nav-item">
                            <a class="nav-link text-white " style="color: #9AB973;" href="{{ route('login') }}">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="#about_us">{{ __('About Us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="#strategy_portfolio">{{ __('Strategy & Portfolio') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="#news_insight">{{ __('News, Insights & Resources') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="#podcast">{{ __('Podcast') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="#contact_us">{{ __('Contact Us') }}</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    
                    </ul>
                    
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- Data AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        

        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 2000, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
</body>
</html>
