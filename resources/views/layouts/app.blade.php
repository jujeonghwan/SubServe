<!DOCTYPE HTML>
<!--
    Verti by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="{{ config('app.locale') }}">

<head>
    <title>{{ config('app.name', 'SubServe') }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <!-- Favicon Begin -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon End -->
</head>

<body class="is-preload homepage">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">

                <!-- Logo -->
                <div id="logo">
                    <!-- <h1><img src="/assets/images/logo/SubServeLogo-72x72.png" alt="SubServe Logo Image"></h1> -->
                    <h1><a href="/"><img src="/assets/images/logo/SubServeLogo-60x60.png" width="60px" height="60px" alt="SubServe Logo Image"></a></h1>
                    <span>SubServe</span>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <!-- <li class="current"><a href="index.html">Welcome</a></li>
                        <li>
                            <a href="#">Dropdown</a>
                            <ul>
                                <li><a href="#">Lorem ipsum dolor</a></li>
                                <li><a href="#">Magna phasellus</a></li>
                                <li>
                                    <a href="#">Phasellus consequat</a>
                                    <ul>
                                        <li><a href="#">Lorem ipsum dolor</a></li>
                                        <li><a href="#">Phasellus consequat</a></li>
                                        <li><a href="#">Magna phasellus</a></li>
                                        <li><a href="#">Etiam dolore nisl</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Veroeros feugiat</a></li>
                            </ul>
                        </li>
                        <li><a href="left-sidebar.html">Left Sidebar</a></li>
                        <li><a href="right-sidebar.html">Right Sidebar</a></li>
                        <li><a href="no-sidebar.html">No Sidebar</a></li> -->
                    </ul>
                </nav>

            </header>
        </div>

        @yield('content')

        <!-- Footer -->
        <div id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Company</h3>
                            <ul class="style2">
                                <li><a href="/about">About Us</a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Links -->
                        <section class="widget links">
                            <h3></h3>
                            <ul class="style2">
                                <li><a href="#"></a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Links -->
                        <section class="widget links">
                            <h3></h3>
                            <ul class="style2">
                                <li><a href="#"></a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Contact -->
                        <section class="widget contact last">
                            <h3>Contact Us</h3>
                            <ul>
                                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                            </ul>
                            <p>108 University Ave<br />
                                Waterloo, ON N2J 2W2<br />
                                Canada<br />
                                +1 (519) 000-0000</p>
                        </section>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div id="copyright">
                            <ul class="menu">
                                <li>&copy; SubServe. All rights reserved</li>
                                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!-- Scripts -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>