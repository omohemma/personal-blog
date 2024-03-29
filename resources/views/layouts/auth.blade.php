<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Griffin I @yield('title')</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{asset('admin/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet"
          type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->

<!-- HK Wrapper -->
<div class="hk-wrapper">

    @yield('content')


</div>
<!-- /HK Wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('admin/dist/js/feather.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('admin/dist/js/init.js')}}"></script>
</body>
</html>
