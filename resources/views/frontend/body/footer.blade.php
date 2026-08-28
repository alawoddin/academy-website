 <footer>
      <div class="footer_main py-60">
        <img src="{{ asset('frontend/assets/media/shapes/vector-7.png') }}" alt="" class="vector_shape">
        <img src="{{ asset('frontend/assets/media/shapes/dots-1.png') }}" alt="" class="dots">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 ">
              <div class="footer_widget">
                <a href="{{ url('/') }}" class="mb-8"><img src="{{ asset('frontend/assets/media/logo.png') }}" alt="Khedmat"></a>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus.
                  Volutpat tortor tincidunt egestas sit risus donec.</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Quick Links</h5>
                <ul class="unstyled list">
                  <li><a href="{{ route('courses') }}"><i class="fad fa-chevron-right"></i>Courses</a></li>
                  <li><a href="{{ route('join') }}"><i class="fad fa-chevron-right"></i>Join a Career</a></li>
                  <li><a href="{{ route('faq') }}"><i class="fad fa-chevron-right"></i>Faq's</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Explore</h5>
                <ul class="unstyled list">
                  <li><a href="{{ route('about') }}"><i class="fad fa-chevron-right"></i>About Us</a></li>
                  <li><a href="{{ route('gallery') }}"><i class="fad fa-chevron-right"></i>Gallery</a></li>
                  <li><a href="{{ route('team.detail') }}"><i class="fad fa-chevron-right"></i>Teacher’s Detail</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Information</h5>
                <ul class="unstyled list">
                  <li><a href="{{ route('login') }}"><i class="fad fa-chevron-right"></i>Login</a></li>
                  <li><a href="{{ route('register') }}"><i class="fad fa-chevron-right"></i>Register</a></li>
                  <li><a href="{{ url('/') }}#enroll"><i class="fad fa-chevron-right"></i>Enroll Now</a></li>
                  <li><a href="{{ route('contact') }}"><i class="fad fa-chevron-right"></i>Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Contact Us</h5>
                <ul class="unstyled list">
                  <li class="mb-16"><i class="fal fa-map-marker-alt"></i>Pul-e-Surkh, Kabul, Afghanistan</li>
                  <li class="mb-16"><a href="mailto:info@tawanatechnology.com"><i
                        class="fal fa-envelope"></i>info@tawanatechnology.com</a></li>
                  <li><a href="tel:+93788077685"><i class="fal fa-phone-alt"></i>+93 788077685</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="bottom-row">
            <ul class="unstyled social_icons_list">
              <li>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener">
                  <img src="{{ asset('frontend/assets/media/icons/brands/Instagram.png') }}" alt="Instagram">
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/" target="_blank" rel="noopener">
                  <img src="{{ asset('frontend/assets/media/icons/brands/Facebook.png') }}" alt="Facebook">
                </a>
              </li>
              <li>
                <a href="https://twitter.com/" target="_blank" rel="noopener">
                  <img src="{{ asset('frontend/assets/media/icons/brands/Twitter.png') }}" alt="Twitter">
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/" target="_blank" rel="noopener">
                  <img src="{{ asset('frontend/assets/media/icons/brands/Linkedin.png') }}" alt="LinkedIn">
                </a>
              </li>
            </ul>
            <div class="newsletter_block">
              <h5>Newsletter</h5>
              <form class="newsletter" action="{{ url('/') }}#contact" method="get">
                <input type="email" class="form-control" required placeholder="Your email">
                <button type="submit" class="educate-btn sm"><span class="educate-btn__curve"></span>Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright_row">
        <p>©{{ date('Y') }} Khedmat All Rights Reserved.</p>
      </div>
    </footer>
