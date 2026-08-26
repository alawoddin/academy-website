<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uiparadox.co.uk/templates/educate/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Feb 2026 10:25:47 GMT -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Educate Html 5 Template">

  <title>Khedmat |Education & LMS</title>

 
    <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/media/favicon.png')}}">

  <!-- All CSS files -->
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/fontawesome/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/slickslider/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/jquery-magnific-popup/jquery.magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/animate/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/app.css')}}">

  

  




    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >




</head>


<body class="custom-cursor locked">

  <!-- cursor style  -->
  <div class="custom-cursor__cursor"></div>
  <div class="custom-cursor__cursor-two"></div>

  @include('frontend.body.preloader')


  <!-- Main Wrapper Start -->
  <div id="main-wrapper" class="main-wrapper">
    <!-- Header Area start -->
  @include('frontend.body.header')
    
    <!-- Sticky Header -->
    <div class="stricky-header stricked-menu main-menu">
      <div class="sticky-header__content"></div>
    </div>
    <!-- Header Area End  -->

        @yield('frontend')

  @include('frontend.body.footer')
  @include('frontend.body.MobileMenu')



    

  </div>

  <!-- MobileMenu Start -->
  
  <!-- Mobile Menu End -->

  <div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
      <form role="search" method="get" class="search-popup__form" action="{{ url('/') }}">
        <input type="text" id="search" placeholder="Search Here...">
        <button type="submit"><i class="fal fa-search"></i></button>
      </form>
    </div>
  </div>
  <!-- search-popup -->

  <!-- back-to-top-start -->
  <a href="#" class="scroll-top">
    <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </a>
  <!-- back-to-top-end -->

  


      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

      
    {{-- <script src="{{ asset('backend/assets/js/bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script> --}}

    <!-- Jquery Js -->
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery/jquery-3.6.3.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery-appear/jquery-appear.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery-validator/jquery-validator.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/countdown/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/slickslider/slick.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/tilt/tilt.jquery.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/wow/wow.js')}}"></script>

  <!-- Site Scripts -->
  <script src="{{ asset('frontend/assets/js/app.js') }}"></script>


     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>



</body>

</html>
