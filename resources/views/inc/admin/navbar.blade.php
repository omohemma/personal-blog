<!-- Top Navbar -->
<nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
    <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse"
       data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false"
       aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="index.html">
        <img class="brand-img d-inline-block align-top" src="{{asset('admin/dist/img/logo-light.png')}}" alt="brand"/>
    </a>
    <div class="collapse navbar-collapse" id="navbarCollapseAlt">
        <ul class="navbar-nav">
            <li class="nav-item dropdown show-on-hover active">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Users
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="index.html">Dashboard</a>
                    <a class="dropdown-item" href="index2.html">Comments</a>

                </div>
            </li>

            <li class="nav-item dropdown show-on-hover active">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Author
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="index.html">Dashboard</a>
                    <a class="dropdown-item" href="index2.html">Comments</a>
                    <a class="dropdown-item" href="index2.html">Posts</a>

                </div>
            </li>

            <li class="nav-item dropdown show-on-hover active">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    Admin
                </a>
                <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <a class="dropdown-item" href="index.html">Dashboard</a>
                    <a class="dropdown-item" href="index2.html">Comments</a>
                    <a class="dropdown-item" href="index2.html">Posts</a>
                    <a class="dropdown-item" href="index2.html">Users</a>
                </div>
            </li>

        </ul>

    </div>
    <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <div class="media">
                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="{{asset('admin/dist/img/avatar5.jpg')}}" alt="user"
                                 class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>
                    <div class="media-body">
                        <span>{{Auth::user()->name}}<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
                <form method="post" id="logout-form" action="{{route('logout')}}"> @csrf </form>
                <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit();">

                    <i class="dropdown-icon zmdi zmdi-power"></i>
                    <span>Log out</span></a>
            </div>
        </li>
    </ul>
</nav>
<!-- /Top Navbar -->
