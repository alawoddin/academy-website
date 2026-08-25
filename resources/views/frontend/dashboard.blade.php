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

    <!-- Hero Banner Start -->
  @include('frontend.section.Banner')
    
    <!-- Hero Banner End -->

    <!-- Features Area Start -->
  @include('frontend.section.Features')
    
    <!-- Features Area End -->

    <!-- About Area Start -->
  @include('frontend.section.About')
    
    <!-- About Area End -->

    <!-- Brands Area Start -->
  @include('frontend.section.Brands')
    
    <!-- Brands Area End -->

    <!-- Courses Category Area Start -->
  @include('frontend.section.Category')
   
    <!-- Courses Category Area End -->

    <!-- Courses Area Start -->
  @include('frontend.section.Courses')
   
    <!-- Courses Area End -->

    <!-- Team Area Start -->
  @include('frontend.section.Team')
    
    <!-- Team Area End -->

    <!-- Discount Banner Area Start -->
    <section class="discount_banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-5">
            <div class="banner_text_block">
              <div class="title_block mb-16">
                <h2 class="title">Get a
                  <span class="fm-sec">30% Discount!
                    <img src="assets/media/shapes/line-vector.png" alt="" class="line_shape">
                    <img src="assets/media/shapes/mic-speaker.png" alt="" class="mic_speaker">
                  </span>
                </h2>
              </div>
              <h4 class="mb-12">Create Your Free Account Today! </h4>
              <p class="mb-24">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. Volutpat
                tortor tincidunt egestas sit risus donec.</p>
              <a href="register.html" class="educate-btn"><span class="educate-btn__curve"></span>Join Now</a>
            </div>
          </div>
          <div class="col-xl-6 col-lg-7">
            <div class="discount_countdown">
              <div class="dial">
                <ul class="top-remain">
                  <li class=" remain-count">02</li>
                  <li class=" remain-count">01</li>
                  <li class=" remain-count">00</li>
                </ul>
                <ul class="top-coming">
                  <li>02</li>
                  <li>01</li>
                  <li>00</li>
                </ul>
              </div>
              <img src="assets/media/shapes/paint-shape.png" alt="" class="paint_shape">
              <ul class="countdown unstyled">
                <li>
                  <h2>365</h2>
                  <h6>Days</h6>
                </li>
                <li>
                  <h2>24</h2>
                  <h6>Hrs</h6>
                </li>
                <li>
                  <h2>60</h2>
                  <h6>Min</h6>
                </li>
                <li>
                  <h2><span>60</span></h2>
                  <h6>Sec</h6>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Discount Banner Area End -->

    <!-- Testimonials Area Start -->
    <section class="testimonials py-60">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="testimonials_text_block">
              <img src="assets/media/shapes/quote3d.png" alt="" class="quote_icon">
              <h6 class="color-primary mb-8">–––– Testimonials</h6>
              <h2 class="mb-16">Student’s Stories! Some Awesome Comments By Our <span class="fm-sec">Students!</span>
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. Volutpat tortor tincidunt
                egestas sit risus donec.</p>
              <img src="assets/media/shapes/vector-2.png" alt="" class="vector_hol">
              <img src="assets/media/shapes/dots-1.png" alt="" class="dots_group">
            </div>
          </div>
          <div class="col-xl-7 col-lg-10 offset-xl-0 offset-lg-1">
            <div class="testimonials_slider_1_block">
              <img src="assets/media/shapes/bg-elements-1.png" alt="" class="bg_elements">
              <div class="testimonials_slider">
                <div class="card-block">
                  <div class="testimonial_card">
                    <div class="testimonial_card_img_block">
                      <img src="assets/media/users/Image.png" alt="" class="user_img">
                      <div class="quote_block"></div>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 64" fill="none" class="quote_mark">
                        <path
                          d="M55.8684 63.0894C52.6269 63.0894 49.6698 62.606 46.997 61.6392C44.3242 60.6156 42.0495 59.2224 40.1729 57.4595C38.2963 55.6397 36.8177 53.4503 35.7372 50.8913C34.7136 48.3322 34.2018 45.4888 34.2018 42.3611C34.2018 39.1197 34.7705 35.736 35.9078 32.2102C37.1021 28.6845 38.8081 25.1302 41.0259 21.5476C43.2438 17.9649 45.9165 14.4391 49.0443 10.9702C52.2288 7.44441 55.8399 4.06079 59.8775 0.819336L69.6872 8.49646C67.8106 10.43 66.1045 12.2782 64.5691 14.0411C63.0905 15.8039 61.7257 17.5668 60.4746 19.3297C59.2236 21.0926 58.0578 22.9124 56.9773 24.789C55.9537 26.6657 55.0154 28.656 54.1623 30.7601L77.3643 42.3611C77.3643 45.432 76.7672 48.2469 75.573 50.806C74.4356 53.365 72.9002 55.5544 70.9667 57.3742C69.0332 59.1939 66.7585 60.6156 64.1426 61.6392C61.5267 62.606 58.7686 63.0894 55.8684 63.0894ZM22.1666 63.0894C18.9251 63.0894 15.968 62.606 13.2952 61.6392C10.6224 60.6156 8.34773 59.2224 6.4711 57.4595C4.59447 55.6397 3.11591 53.4503 2.03543 50.8913C1.01181 48.3322 0.5 45.4888 0.5 42.3611C0.5 39.1197 1.06868 35.736 2.20603 32.2102C3.40025 28.6845 5.10628 25.1302 7.32411 21.5476C9.54195 17.9649 12.2147 14.4391 15.3424 10.9702C18.527 7.44441 22.1381 4.06079 26.1757 0.819336L35.9854 8.49646C34.1088 10.43 32.4027 12.2782 30.8673 14.0411C29.3887 15.8039 28.0239 17.5668 26.7728 19.3297C25.5217 21.0926 24.356 22.9124 23.2755 24.789C22.2519 26.6657 21.3135 28.656 20.4605 30.7601L43.6625 42.3611C43.6625 45.432 43.0654 48.2469 41.8712 50.806C40.7338 53.365 39.1984 55.5544 37.2649 57.3742C35.3314 59.1939 33.0567 60.6156 30.4408 61.6392C27.8249 62.606 25.0668 63.0894 22.1666 63.0894Z" />
                      </svg>
                    </div>
                    <div class="testimonial_card_content_block">
                      <div class="testimonial">
                        <h4 class="mb-16">Jophie Alen</h4>
                        <span class="mb-16"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <p class="review_text">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                          tempus. Volutpat tortor tincidunt egestas sit risus donec.</p>
                      </div>
                      <img src="assets/media/shapes/bg-elements-2.png" alt="" class="bottom_shape">
                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="testimonial_card">
                    <div class="testimonial_card_img_block">
                      <img src="assets/media/users/Image-1.png" alt="" class="user_img">
                      <div class="quote_block"></div>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 64" fill="none" class="quote_mark">
                        <path
                          d="M55.8684 63.0894C52.6269 63.0894 49.6698 62.606 46.997 61.6392C44.3242 60.6156 42.0495 59.2224 40.1729 57.4595C38.2963 55.6397 36.8177 53.4503 35.7372 50.8913C34.7136 48.3322 34.2018 45.4888 34.2018 42.3611C34.2018 39.1197 34.7705 35.736 35.9078 32.2102C37.1021 28.6845 38.8081 25.1302 41.0259 21.5476C43.2438 17.9649 45.9165 14.4391 49.0443 10.9702C52.2288 7.44441 55.8399 4.06079 59.8775 0.819336L69.6872 8.49646C67.8106 10.43 66.1045 12.2782 64.5691 14.0411C63.0905 15.8039 61.7257 17.5668 60.4746 19.3297C59.2236 21.0926 58.0578 22.9124 56.9773 24.789C55.9537 26.6657 55.0154 28.656 54.1623 30.7601L77.3643 42.3611C77.3643 45.432 76.7672 48.2469 75.573 50.806C74.4356 53.365 72.9002 55.5544 70.9667 57.3742C69.0332 59.1939 66.7585 60.6156 64.1426 61.6392C61.5267 62.606 58.7686 63.0894 55.8684 63.0894ZM22.1666 63.0894C18.9251 63.0894 15.968 62.606 13.2952 61.6392C10.6224 60.6156 8.34773 59.2224 6.4711 57.4595C4.59447 55.6397 3.11591 53.4503 2.03543 50.8913C1.01181 48.3322 0.5 45.4888 0.5 42.3611C0.5 39.1197 1.06868 35.736 2.20603 32.2102C3.40025 28.6845 5.10628 25.1302 7.32411 21.5476C9.54195 17.9649 12.2147 14.4391 15.3424 10.9702C18.527 7.44441 22.1381 4.06079 26.1757 0.819336L35.9854 8.49646C34.1088 10.43 32.4027 12.2782 30.8673 14.0411C29.3887 15.8039 28.0239 17.5668 26.7728 19.3297C25.5217 21.0926 24.356 22.9124 23.2755 24.789C22.2519 26.6657 21.3135 28.656 20.4605 30.7601L43.6625 42.3611C43.6625 45.432 43.0654 48.2469 41.8712 50.806C40.7338 53.365 39.1984 55.5544 37.2649 57.3742C35.3314 59.1939 33.0567 60.6156 30.4408 61.6392C27.8249 62.606 25.0668 63.0894 22.1666 63.0894Z" />
                      </svg>
                    </div>
                    <div class="testimonial_card_content_block">
                      <div class="testimonial">
                        <h4 class="mb-16">Angel Whites</h4>
                        <span class="mb-16"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <p class="review_text">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                          tempus. Volutpat tortor tincidunt egestas sit risus donec.</p>
                      </div>
                      <img src="assets/media/shapes/bg-elements-2.png" alt="" class="bottom_shape">

                    </div>
                  </div>
                </div>
                <div class="card-block">
                  <div class="testimonial_card">
                    <div class="testimonial_card_img_block">
                      <img src="assets/media/users/Image.png" alt="" class="user_img">
                      <div class="quote_block"></div>
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78 64" fill="none" class="quote_mark">
                        <path
                          d="M55.8684 63.0894C52.6269 63.0894 49.6698 62.606 46.997 61.6392C44.3242 60.6156 42.0495 59.2224 40.1729 57.4595C38.2963 55.6397 36.8177 53.4503 35.7372 50.8913C34.7136 48.3322 34.2018 45.4888 34.2018 42.3611C34.2018 39.1197 34.7705 35.736 35.9078 32.2102C37.1021 28.6845 38.8081 25.1302 41.0259 21.5476C43.2438 17.9649 45.9165 14.4391 49.0443 10.9702C52.2288 7.44441 55.8399 4.06079 59.8775 0.819336L69.6872 8.49646C67.8106 10.43 66.1045 12.2782 64.5691 14.0411C63.0905 15.8039 61.7257 17.5668 60.4746 19.3297C59.2236 21.0926 58.0578 22.9124 56.9773 24.789C55.9537 26.6657 55.0154 28.656 54.1623 30.7601L77.3643 42.3611C77.3643 45.432 76.7672 48.2469 75.573 50.806C74.4356 53.365 72.9002 55.5544 70.9667 57.3742C69.0332 59.1939 66.7585 60.6156 64.1426 61.6392C61.5267 62.606 58.7686 63.0894 55.8684 63.0894ZM22.1666 63.0894C18.9251 63.0894 15.968 62.606 13.2952 61.6392C10.6224 60.6156 8.34773 59.2224 6.4711 57.4595C4.59447 55.6397 3.11591 53.4503 2.03543 50.8913C1.01181 48.3322 0.5 45.4888 0.5 42.3611C0.5 39.1197 1.06868 35.736 2.20603 32.2102C3.40025 28.6845 5.10628 25.1302 7.32411 21.5476C9.54195 17.9649 12.2147 14.4391 15.3424 10.9702C18.527 7.44441 22.1381 4.06079 26.1757 0.819336L35.9854 8.49646C34.1088 10.43 32.4027 12.2782 30.8673 14.0411C29.3887 15.8039 28.0239 17.5668 26.7728 19.3297C25.5217 21.0926 24.356 22.9124 23.2755 24.789C22.2519 26.6657 21.3135 28.656 20.4605 30.7601L43.6625 42.3611C43.6625 45.432 43.0654 48.2469 41.8712 50.806C40.7338 53.365 39.1984 55.5544 37.2649 57.3742C35.3314 59.1939 33.0567 60.6156 30.4408 61.6392C27.8249 62.606 25.0668 63.0894 22.1666 63.0894Z" />
                      </svg>
                    </div>
                    <div class="testimonial_card_content_block">
                      <div class="testimonial">
                        <h4 class="mb-16">Jophie Alen</h4>
                        <span class="mb-16"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <p class="review_text">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                          tempus. Volutpat tortor tincidunt egestas sit risus donec.</p>
                      </div>
                      <img src="assets/media/shapes/bg-elements-2.png" alt="" class="bottom_shape">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials Area End -->

    <!-- Blogs Area Start -->
    <section class="py-60 ">
      <div class="container">
        <div class="section-title mb-48">
          <div class="heading">
            <h6 class="color-primary mb-8">–––– Blogs</h6>
            <h2>Latest News By<br> Talented <span class="fm-sec">Authors!</span></h2>
          </div>
          <a href="blog-grid.html" class="educate-btn d-md-block d-none"><span class="educate-btn__curve"></span>View
            All</a>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="blog_card mb-24 mb-xl-0">
              <div class="blog_card_img_block">
                <img src="assets/media/blog/b-1.png" alt="">
                <p class="date">9 May 2024</p>
              </div>
              <div class="blog_card_text_block">
                <h5 class="mb-8"><a class="blog_title" href="blog-detail.html">Remote Learning Tips: Thrive in Online
                    Classes</a></h5>
                <p class="mb-24">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="author">
                    <img src="assets/media/users/u-1.png" alt="">
                    <h6 class="dark-gray">Michal Clark</h6>
                  </div>
                  <a href="blog-detail.html" class="h6 color-primary educate_link_btn">Read More<i
                      class="far fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog_card mb-24 mb-xl-0">
              <div class="blog_card_img_block">
                <img src="assets/media/blog/b-2.png" alt="">
                <p class="date">9 May 2024</p>
              </div>
              <div class="blog_card_text_block">
                <h5 class="mb-8"><a class="blog_title" href="blog-detail.html">The Power of Lifelong Learning: Why It
                    Matters?</a></h5>
                <p class="mb-24">Lorem ipsum dolor sit amet consectetur. Non convallis sed id...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="author">
                    <img src="assets/media/users/u-2.png" alt="">
                    <h6 class="dark-gray">Jeremy Jhon</h6>
                  </div>
                  <a href="blog-detail.html" class="h6 color-primary educate_link_btn">Read More<i
                      class="far fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="blog_card">
              <div class="blog_card_img_block">
                <img src="assets/media/blog/b-3.png" alt="">
                <p class="date">9 May 2024</p>
              </div>
              <div class="blog_card_text_block">
                <h5 class="mb-8"><a class="blog_title" href="blog-detail.html">The Art of Effective Note-Taking:
                    Strategies for Students</a></h5>
                <p class="mb-24">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="author">
                    <img src="assets/media/users/u-3.png" alt="">
                    <h6 class="dark-gray">Yuki Kabuto</h6>
                  </div>
                  <a href="blog-detail.html" class="h6 color-primary educate_link_btn">Read More<i
                      class="far fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Blogs Area End -->

    <!-- Contact Banner Area Start -->
    <section class="py-60 ">
      <div class="container">
        <div class="contact_banner">
          <h2 class="mb-8 color-white">Ask Any Questions <br><span class="fm-sec">You Want!</span></h2>
          <p class="mb-16 color-white">Contact on this number for any Questions!</p>
          <div class="mx-auto">
            <a href="tel:123456789" class="h5 phone_number">+93 788077685</a>
          </div>
          <div class="icons">
            <img src="assets/media/shapes/dots-1.png" alt="" class="element-1">
            <img src="assets/media/shapes/vector-3.png" alt="" class="element-2">
            <img src="assets/media/shapes/paint.png" alt="" class="element-3">
            <img src="assets/media/shapes/vector-4.png" alt="" class="element-5">
            <img src="assets/media/shapes/dots-1.png" alt="" class="element-4">
            <img src="assets/media/shapes/tag.png" alt="" class="element-6">
            <img src="assets/media/shapes/errow.png" alt="" class="element-7">
            <img src="assets/media/shapes/circle-lines.png" alt="" class="element-8">
            <img src="assets/media/shapes/mic-speaker.png" alt="" class="element-9">
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Banner Area End -->

    <!-- Footer Area Start -->
    <footer>
      <div class="footer_main py-60">
        <img src="assets/media/shapes/vector-7.png" alt="" class="vector_shape">
        <img src="assets/media/shapes/dots-1.png" alt="" class="dots">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 ">
              <div class="footer_widget">
                <a href="https://uiparadox.co.uk/templates/educate/index.html" class="mb-8"><img src="assets/media/logo.png" alt=""></a>
                <p class="description_text">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus.
                  Volutpat tortor tincidunt egestas sit risus donec.</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Quick Links</h5>
                <ul class="unstyled list">
                  <li><a href="#"><i class="fad fa-chevron-right"></i>Courses</a></li>
                  <li><a href="#"><i class="fad fa-chevron-right"></i>Join a Career</a></li>
                  <li><a href="#"><i class="fad fa-chevron-right"></i>Upcoming Events</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Explore</h5>
                <ul class="unstyled list">
                  <li><a href="about.html"><i class="fad fa-chevron-right"></i>About Us</a></li>
                  <li><a href="gallery.html"><i class="fad fa-chevron-right"></i>Gallery</a></li>
                  <li><a href="team-detail.html"><i class="fad fa-chevron-right"></i>Teacher’s Detail</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Information</h5>
                <ul class="unstyled list">
                  <li><a href="login.html"><i class="fad fa-chevron-right"></i>Login</a></li>
                  <li><a href="register.html"><i class="fad fa-chevron-right"></i>Register</a></li>
                  <li><a href="contact.html"><i class="fad fa-chevron-right"></i>Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="footer_widget">
                <h5 class="medium-black mb-16">Contact Us</h5>
                <ul class="unstyled list">
                  <li class="mb-16"><i class="fal fa-map-marker-alt"></i>Pul-e-Surkh, Kabul, Afghanistan</li>
                  <li class="mb-16"><a href="mailto:info@example.com"><i
                        class="fal fa-envelope"></i>tawanatechnology.com</a></li>
                  <li><a href="tel:123456789"><i class="fal fa-phone-alt"></i>+93 788077685</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="bottom-row">
            <ul class="unstyled social_icons_list">
              <li>
                <a href="#">
                  <img src="assets/media/icons/brands/Instagram.png" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="assets/media/icons/brands/Facebook.png" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="assets/media/icons/brands/Twitter.png" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="assets/media/icons/brands/Linkedin.png" alt="">
                </a>
              </li>
            </ul>
            <div class="newsletter_block">
              <h5>Newsletter</h5>
              <form class="newsletter">
                <input type="email" class="form-control" required placeholder="Your email">
                <button type="submit" class="educate-btn sm"><span class="educate-btn__curve"></span>Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright_row">
        <p>©2025 Educate All Rights Reserved.</p>
      </div>
    </footer>
    <!-- Footer Area End -->

  </div>

  <!-- Mobile Menu Start -->
  <div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
      <div class="logo-box">
        <a href="https://uiparadox.co.uk/templates/educate/index.html" aria-label="logo image"><img src="assets/media/logo-light.png" alt="educate"></a>
      </div>
      <div class="mobile-nav__container"></div>
      <ul class="mobile-nav__contact list-unstyled">
        <li>
          <i class="fas fa-envelope"></i>
          <a href="mailto:example@company.com">example@company.com</a>
        </li>
        <li>
          <i class="fa fa-phone-alt"></i>
          <a href="tel:+12345678">+123 (4567) -890</a>
        </li>
      </ul>
      <div class="mobile-nav__social">
             
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
        <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
  <!-- Mobile Menu End -->

  <div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <div class="search-popup__content">
      <form role="search" method="get" class="search-popup__form" action="https://uiparadox.co.uk/templates/educate/index.html">
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
  <script src="{{asset('backend/assets/js/app.js')}}"></script>


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
