
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <!-- CSRF Token -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images/')}}/favicon.png">
    <title>Ela - Bootstrap Admin Dashboard Template</title>

    <link href="{{asset('admins/')}}/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="{{asset('admins/')}}/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="{{asset('admins/')}}/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admins/')}}/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admins/')}}/css/helper.css" rel="stylesheet">
    <link href="{{asset('admins/')}}/css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
      @include('admin.inc.header')
      @include('admin.inc.nav')

          <div class="page-wrapper">
              <div class="row page-titles">
                  <div class="col-md-5 align-self-center">
                      <h3 style="color: #f8812f; font-weight:700;"> @yield('bread')</h3> </div>
                  <div class="col-md-7 align-self-center">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                          <li class="breadcrumb-item active">@yield('bread')</li>
                      </ol>
                  </div>
              </div>
              @yield('myContent')
              <footer class="footer"> © 2018 All rights reserved. Development by <a href="#">Creative IT Limited</a>.</footer>
          </div>
      </div>
      <script src="{{asset('admins/')}}/js/lib/jquery/jquery.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/bootstrap/js/popper.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/bootstrap/js/bootstrap.min.js"></script>
      <script src="{{asset('admins/')}}/js/jquery.slimscroll.js"></script>
      <script src="{{asset('admins/')}}/js/sidebarmenu.js"></script>
      <script src="{{asset('admins/')}}/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/datamap/d3.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/datamap/topojson.js"></script>
      <script src="{{asset('admins/')}}/js/lib/datamap/datamaps.world.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/datamap/datamap-init.js"></script>
      <script src="{{asset('admins/')}}/js/lib/weather/jquery.simpleWeather.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/weather/weather-init.js"></script>
      <script src="{{asset('admins/')}}/js/lib/owl-carousel/owl.carousel.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/owl-carousel/owl.carousel-init.js"></script>
      <script src="{{asset('admins/')}}/js/lib/chartist/chartist.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
      <script src="{{asset('admins/')}}/js/lib/chartist/chartist-init.js"></script>
      <script src="{{asset('admins/')}}/js/lib/calendar-2/semantic.ui.min.js"></script>
      <script src="{{asset('admins/')}}/js/jquery.dataTables.min.js"></script>
      <script src="{{asset('admins/')}}/js/dataTables.bootstrap4.min.js"></script>
      <script src="{{asset('admins/')}}/js/datatables-init.js"></script>
      <script src="{{asset('admins/')}}/js/custom.min.js"></script>
    </body>
  </html>
