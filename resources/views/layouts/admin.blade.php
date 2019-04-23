<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Griffin I CRM Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="{{asset('admin/vendors/vectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="{{asset('admin/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{asset('admin/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>

<!-- HK Wrapper -->
<div class="hk-wrapper hk-alt-nav">

    @include('inc.admin.navbar')

    @yield('content')
   

</div>
<!-- /HK Wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('admin/endors/popper.js/dist/umd/popper.min.js')}}v"></script>
<script src="{{asset('admin/vendors/bootstrap/dist/js/bootstrap.min.j')}}s"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('admin/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('admin/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- FeatherIcons JavaScript -->
<script src="{{asset('admin/dist/js/feather.min.js')}}"></script>

<!-- Toggles JavaScript -->
<script src="{{asset('admin/vendors/jquery-toggles/toggles.min.js')}}"></script>
<script src="{{asset('admin/dist/js/toggle-data.js')}}"></script>

<!-- Counter Animation JavaScript -->
<script src="{{asset('admin/vendors/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/vendors/jquery.counterup/jquery.counterup.min.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('admin/vendors/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/vendors/morris.js/morris.min.js')}}"></script>

<!-- EChartJS JavaScript -->
<script src="{{asset('admin/vendors/echarts/dist/echarts-en.min.js')}}"></script>

<!-- Sparkline JavaScript -->
<script src="{{asset('admin/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

<!-- Owl JavaScript -->
<script src="{{asset('admin/vendors/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('admin/dist/js/init.js')}}"></script>
<script src="{{asset('admin/dist/js/ecStat.min.js')}}"></script>
<script src="{{asset('admin/dist/js/dashboard5-data.js')}}"></script>

</body>

</html>