<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Khedmat | Education & LMS</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/media/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/fontawesome/font-awesome.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/vendor/animate/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>
<body class="custom-cursor locked">
  <div class="custom-cursor__cursor"></div>
  <div class="custom-cursor__cursor-two"></div>
  @include('frontend.body.preloader')

  <div id="main-wrapper" class="main-wrapper">
    <header>
      <nav class="main-menu">
        <div class="container">
          <div class="main-menu__block">
            <div class="main-menu__left">
              <div class="main-menu__logo">
                <a href="{{ url('/') }}">
                  <img src="{{ asset('frontend/assets/media/logos.png') }}" alt="Khedmat">
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    @yield('frontend')
  </div>

  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery/jquery-3.6.3.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery-appear/jquery-appear.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/jquery-validator/jquery-validator.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/wow/wow.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
      case 'info': toastr.info(" {{ Session::get('message') }} "); break;
      case 'success': toastr.success(" {{ Session::get('message') }} "); break;
      case 'warning': toastr.warning(" {{ Session::get('message') }} "); break;
      case 'error': toastr.error(" {{ Session::get('message') }} "); break;
    }
    @endif
  </script>
</body>
</html>
