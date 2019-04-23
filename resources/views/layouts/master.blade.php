<!DOCTYPE html>
<html>
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Personal Blog') </title>
    <!-- include the site stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:300,400,700%7CPoppins:400,300,500,600,700'
          rel='stylesheet' type='text/css'>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/colors.css')}}">
</head>
<body>
<body class="version-ii">
<div class="loader-holder">
    <div class="loader">
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
        <div class="side"></div>
    </div>
</div>
<!-- main container of all the page elements -->
<div id="wrapper">
    <!-- w1 of the page -->
    <div class="w1">
        <!-- header of the page -->
        <header id="header" class="version-ii">
            <div class="container">
                <div class="row top-bar">
                    <!-- Top Nav of the page -->
                    <nav class="col-xs-12 col-sm-6 policy-nav">
                        <ul>
                            <li><a href="#">sitemap</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">support</a></li>
                        </ul>
                    </nav>
                    <!-- Top Nav of the page end -->
                    <div class="col-xs-12 col-sm-6 pull-right hidden-xs">
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            <li><a href="#"><span class="ico-facebook"></span></a></li>
                            <li><a href="#"><span class="ico-twitter"></span></a></li>
                            <li><a href="#"><span class="ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="ico-pinterest"></span></a></li>
                        </ul>
                        <!-- Social Network of the page end -->
                    </div>
                </div>
            </div>
            @include('inc.navbar')
        </header>
        <!-- Header of the page end -->


    @yield('content')

    <!-- Main of the page end -->
        <aside class="aside version-ii container">
            <div class="row">
                <div class="col-xs-12 holder">
                    <div class="col">
                        <div class="logo"><a href="#"><img src="{{asset('assets/images/logo2.png')}}" alt="dot"></a></div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut
                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p>
                        <!-- Social Network of the page -->
                        <ul class="social-networks">
                            <li><a href="#"><span class="ico-facebook"></span></a></li>
                            <li><a href="#"><span class="ico-twitter"></span></a></li>
                            <li><a href="#"><span class="ico-google-plus"></span></a></li>
                            <li><a href="#"><span class="ico-linkedin"></span></a></li>
                            <li><a href="#"><span class="ico-pinterest"></span></a></li>
                        </ul>
                        <!-- Social Network of the page end -->
                    </div>
                    <!-- Footer Nav of the page -->
                    <nav class="col footer-nav">
                        <h3>Important Links</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </nav>
                    <!-- Footer Nav of the page end -->
                    <!-- Footer Nav of the page -->
                    <nav class="col footer-nav">
                        <h3>Popular Links</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </nav>
                    <!-- Footer Nav of the page end -->
                    <div class="col">
                        <h3>Subscribe to Newsletter</h3>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
                        <!-- subscribe form of the page -->
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email here">
                                <button type="button" class="ico-send"></button>
                            </div>
                        </form>
                        <!-- subscribe form of the page end -->
                    </div>
                </div>
            </div>
        </aside>
        <!-- Aside of the page end -->

        <!-- Back Top of the page -->
        <span id="back-top" class="fa fa-angle-up"></span>
    </div>
    <!-- include jQuery -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- include jQuery -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <!-- include jQuery -->
    <script src="{{asset('assets/js/jquery.main.js')}}"></script>
</body>
</html>
