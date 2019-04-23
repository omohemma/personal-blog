<div class="stick-holder">
    <div class="container">
        <div class="row holder">
            <div class="col-xs-3 col-sm-2">
                <!-- Logo of the page -->
                <div class="logo"><a href="home.html"><img src="{{asset('assets/images/logo2.png')}}" alt="dot"></a>
                </div>
                <!-- Logo of the page end -->
            </div>
            <div class="col-xs-9 col-sm-10 nav-holder">
                <!-- Nav of the page -->
                <nav id="nav" class="navbar navbar-default">
                    <!-- Navbar Header of the page -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Navbar Header of the page end -->
                    <a href="#" class="pull-right icon-menu"><span class="ico-menu"></span></a>
                    <!-- Collapse of the page -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active" data-drop="drop-right">
                                <a href="{{route('index')}}">Home</a>
                            </li>
                            <li><a href="{{route('contact')}}">Contact</a></li>

                            @if(Auth::check())
                                <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li>
                                    <form method="post" id="logout-form" action="{{route('logout')}}" > @csrf </form>
                                    <a href="#" onclick="document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            @else
                                <li><a href="{{route('register')}}">Register</a></li>
                                <li><a href="{{route('login')}}">Login</a></li>

                            @endif

                        </ul>
                    </div>
                    <!-- Collapse of the page end -->
                </nav>
                <!-- Nav of the page -->
            </div>
        </div>
    </div>
</div>
<!-- Side Nav of the page -->
<nav class="side-nav">
    <a href="#" class="close"><i class="fa fa-times"></i></a>
    <!-- Widget of the page -->
    <h2>About me</h2>
    <section class="widget profile-widget">
        <div class="profile-pic">
            <a href="#">
                <img src="http://placehold.it/215x215" alt="John Aston">
            </a>
        </div>
        <h3><a href="#">John Aston</a></h3>
        <p>Hi, I am John Aston. Duis autem vel eum dolor in hendrerit in vulputate velit esse mole consequat, vel illum
            dolore eu feugiat nulla lisis at vero eros et accumsan et iusto.</p>
        <!-- Social Network of the page -->
        <ul class="social-networks">
            <li><a href="#"><span class="icon ico-facebook"></span></a></li>
            <li><a href="#"><span class="icon ico-twitter"></span></a></li>
            <li><a href="#"><span class="icon ico-google-plus"></span></a></li>
            <li><a href="#"><span class="icon ico-linkedin"></span></a></li>
            <li><a href="#"><span class="icon ico-pinterest"></span></a></li>
        </ul>
        <!-- Social Network of the page end -->
    </section>
    <!-- Widget of the page end -->
</nav>
<!-- Side Nav of the page end -->