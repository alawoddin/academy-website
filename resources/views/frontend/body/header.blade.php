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
                  <li class="dropdown">
                    <a href="javascript:void(0);" class="{{ request()->is('/') || request()->routeIs('home.two') ? 'active' : '' }}">Home</a>
                    <ul>
                      <li><a href="{{ url('/') }}">Home 1</a></li>
                      <li><a href="{{ route('home.two') }}">Home 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="javascript:void(0);" class="{{ request()->routeIs('courses', 'course.detail') ? 'active' : '' }}">Courses</a>
                    <ul>
                      <li><a href="{{ route('courses') }}">Courses Page</a></li>
                      <li><a href="{{ route('course.detail') }}">Course Detail</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="javascript:void(0);" class="{{ request()->routeIs('blog*') ? 'active' : '' }}">Blog</a>
                    <ul class="sub-menu">
                      <li class="dropdown">
                        <a href="javascript:void(0);">Blog Grid</a>
                        <ul class="sub-menu">
                          <li><a href="{{ route('blog') }}">No Sidebar</a></li>
                          <li><a href="{{ route('blog.grid.left') }}">Left Sidebar</a></li>
                          <li><a href="{{ route('blog.grid.right') }}">Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="javascript:void(0);">Blog List</a>
                        <ul class="sub-menu">
                          <li><a href="{{ route('blog.list.left') }}">Left Sidebar</a></li>
                          <li><a href="{{ route('blog.list.right') }}">Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route('blog.detail') }}">Blog Detail</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="javascript:void(0);" class="{{ request()->routeIs('about', 'team', 'team.detail', 'join', 'gallery', 'faq') ? 'active' : '' }}">Pages</a>
                    <ul>
                      <li><a href="{{ route('about') }}">About</a></li>
                      <li><a href="{{ route('team') }}">Our Teacher</a></li>
                      <li><a href="{{ route('team.detail') }}">Teacher Detail</a></li>
                      <li><a href="{{ route('join') }}">Become Teacher</a></li>
                      <li><a href="{{ route('gallery') }}">Gallery</a></li>
                      <li><a href="{{ route('faq') }}">Faq's</a></li>
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
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
