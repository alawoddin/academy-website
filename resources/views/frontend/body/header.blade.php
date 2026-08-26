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

              <div class="main-menu__nav">
                <ul class="main-menu__list">
                  <li>
                    <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                  </li>
                  <li>
                    <a href="{{ url('/') }}#courses">Courses</a>
                  </li>
                  <li>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
                  </li>
                  <li>
                    <a href="{{ url('/') }}#team">Instructors</a>
                  </li>
                  <li>
                    <a href="{{ url('/') }}#blogs">Blog</a>
                  </li>
                  <li><a href="{{ url('/') }}#enroll">Enroll</a></li>
                  <li><a href="{{ url('/') }}#contact">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="main-menu__right">
              <a href="#" class="main-menu__search search-toggler">
                <i class="fal fa-search"></i>
              </a>
              <a href="{{ route('login') }}" class="main-menu__login">
                <i class="fal fa-user"></i>
              </a>
              <a href="{{ url('/') }}#enroll" class="educate-btn sm d-xl-flex d-none"><span
                  class="educate-btn__curve"></span>Enroll Now</a>
              <a href="#" class="main-menu__toggler mobile-nav__toggler">
                <i class="fa fa-bars"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>
