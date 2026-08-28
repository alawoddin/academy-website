<!DOCTYPE html>
<html lang="en" data-bs-theme=dark>

  
<!-- Mirrored from bootstrapget.com/demos/sporty-admin-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 16:17:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sporty - Bootstrap Admin Dashboard</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta name="author" content="Bootstrap Gallery">
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery/">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.svg') }}">

    <!-- *************
			************ CSS Files *************
		************* -->
    {{-- {{ asset('backend/') }} --}}
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/bootstrap/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.min.css') }}">

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">

  </head>

  <body>

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

      <!-- App header starts -->
      @include('admin.body.header')
      <!-- App header ends -->

      <!-- Main container starts -->
      <div class="main-container">

        <!-- Sidebar wrapper starts -->
      @include('admin.body.sidebar')
        
        <!-- Sidebar wrapper ends -->

        <!-- App container starts -->
        <div class="app-container">
          @yield('admin')

          <!-- App hero header starts -->
          
          <!-- App Hero header ends -->

          <!-- App body starts -->
          
          <!-- App body ends -->

          <!-- App footer starts -->
      @include('admin.body.footer')
          
          <!-- App footer ends -->

        </div>
        <!-- App container ends -->

      </div>
      <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/moment.min.js') }}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('backend/assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/home/conversions.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/home/income.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/home/visits-conversions.js') }}"></script>

    <!-- Rating -->
    <script src="{{ asset('backend/assets/vendor/rating/raty.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/rating/raty-custom.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
  </body>


<!-- Mirrored from bootstrapget.com/demos/sporty-admin-dashboard/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Feb 2026 16:17:58 GMT -->
</html>