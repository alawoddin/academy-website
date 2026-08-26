@extends('frontend.dashboard')
@section('frontend')

        <!-- Page Title Banner Start -->
        <section class="page_title_banner">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h1>About Us</h1>
                        <img src="{{ asset('frontend/assets/media/shapes/tag-2.png') }}" alt="" class="tag">
                    </div>
                    <div class="educate-tilt"
                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="{{ asset('frontend/assets/media/resources/page_title.png') }}" alt="About Khedmat" class="main_img">
                    </div>
                    <img src="{{ asset('frontend/assets/media/shapes/circle-lines-2.png') }}" alt="" class="circle_vector">
                </div>
            </div>
        </section>
        <!-- Page Title Banner End -->

        <!-- About Area Start -->
        <section class="py-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-48 mb-lg-0">
                        <div class="heading mb-16">
                            <h6 class="color-primary mb-8">–––– About Us</h6>
                            <h2>Cultivating a Digital Learning <span class="fm-sec">Ecosystem.</span></h2>
                        </div>
                        <p class="mb-32">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus.
                            Volutpat tortor tincidunt egestas sit risus donec.</p>
                        <div class="about__card mb-24 wow fadeInLeft" data-wow-delay="200ms">
                            <div class="about__card__icon">
                                <img src="{{ asset('frontend/assets/media/icons/Clock.png') }}" alt="Latest courses">
                            </div>
                            <div class="about__card__content">
                                <h5 class="mb-4p">Latest Courses</h5>
                                <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. Volutpat
                                    tortor tincidunt egestas sit risus.</p>
                            </div>
                        </div>
                        <div class="about__card mb-24 wow fadeInLeft" data-wow-delay="400ms">
                            <div class="about__card__icon">
                                <img src="{{ asset('frontend/assets/media/icons/WiFi.png') }}" alt="Live classes">
                            </div>
                            <div class="about__card__content">
                                <h5 class="mb-4p">Live Classes</h5>
                                <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. Volutpat
                                    tortor tincidunt egestas sit risus.</p>
                            </div>
                        </div>
                        <div class="about__card mb-24 wow fadeInLeft" data-wow-delay="600ms">
                            <div class="about__card__icon">
                                <img src="{{ asset('frontend/assets/media/icons/star.png') }}" alt="Nurtured students">
                            </div>
                            <div class="about__card__content">
                                <h5 class="mb-4p">Nurtured Students</h5>
                                <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. Volutpat
                                    tortor tincidunt egestas sit risus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="educate-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                            <img src="{{ asset('frontend/assets/media/resources/about-1.png') }}" alt="About Khedmat Academy">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->

        <!-- Benefits Area Start -->
        <section class="benefits py-60">
            <div class="container">
                <div class="heading_block">
                    <h6 class="color-primary mb-8">–––– Benefits</h6>
                    <h2 class="mb-32">Cultivating a Digital Learning <br><span class="fm-sec">Ecosystem.</span></h2>
                    <a href="{{ url('/') }}#courses" class="educate-btn"><span class="educate-btn__curve"></span>View All</a>
                </div>
                <div class="row">
                    <div class="col-xxl-2 col-lg-3 col-sm-6 offset-xxl-2 card_block wow fadeInUp"
                        data-wow-delay="200ms">
                        <div class="feature__card mb-24 mb-xl-0">
                            <div class="feature__icon">
                                <img src="{{ asset('frontend/assets/media/icons/Pricing.png') }}" alt="Free trials">
                            </div>
                            <div class="feature__content">
                                <h5 class="mb-8">Free Trials</h5>
                                <p>Lorem ipsum dolor sit amet consectetu. </p>
                                <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="feature-bg-shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-sm-6 card_block wow fadeInUp" data-wow-delay="400ms">
                        <div class="feature__card mb-24 mb-xl-0">
                            <div class="feature__icon">
                                <img src="{{ asset('frontend/assets/media/icons/Quality.png') }}" alt="Lifetime access">
                            </div>
                            <div class="feature__content">
                                <h5 class="mb-8">Lifetime Access</h5>
                                <p>Lorem ipsum dolor sit amet consectetu. </p>
                                <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="feature-bg-shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-sm-6 card_block wow fadeInUp" data-wow-delay="600ms">
                        <div class="feature__card mb-24 mb-sm-0">
                            <div class="feature__icon">
                                <img src="{{ asset('frontend/assets/media/icons/Check-mark.png') }}" alt="Best teachers">
                            </div>
                            <div class="feature__content">
                                <h5 class="mb-8">Best Teachers</h5>
                                <p>Lorem ipsum dolor sit amet consectetu. </p>
                                <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="feature-bg-shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-lg-3 col-sm-6 card_block wow fadeInUp" data-wow-delay="800ms">
                        <div class="feature__card">
                            <div class="feature__icon">
                                <img src="{{ asset('frontend/assets/media/icons/Support.png') }}" alt="24/7 support">
                            </div>
                            <div class="feature__content">
                                <h5 class="mb-8">24/7 Support</h5>
                                <p>Lorem ipsum dolor sit amet consectetu. </p>
                                <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="feature-bg-shape">
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-sm-6 card_block wow fadeInUp d-xxl-block d-none" data-wow-delay="800ms">
                        <div class="feature__card">
                            <div class="feature__icon">
                                <img src="{{ asset('frontend/assets/media/icons/Transfer.png') }}" alt="Daily updates">
                            </div>
                            <div class="feature__content">
                                <h5 class="mb-8">Daily Updates</h5>
                                <p>Lorem ipsum dolor sit amet consectetu. </p>
                                <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="feature-bg-shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benefits Area End -->

        <!-- Team Area Start -->
        @include('frontend.section.Team')
        <!-- Team Area End -->

        <!-- Stats Area Start -->
        <section class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="counter_item">
                            <div class="counter_item_info_block mb-16">
                                <img src="{{ asset('frontend/assets/media/shapes/vector-group-3.png') }}" alt="">
                                <h2 class="counter_info">
                                    <span class="odometer count_one" data-count="20">00</span>
                                    <span>k</span>
                                </h2>
                            </div>
                            <h5>Students Enrolled</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="counter_item">
                            <div class="counter_item_info_block mb-16">
                                <img src="{{ asset('frontend/assets/media/shapes/vector-group-3.png') }}" alt="">
                                <h2 class="counter_info">
                                    <span class="odometer count_one" data-count="50">00</span>
                                    <span>k</span>
                                </h2>
                            </div>
                            <h5>Students Enrolled</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="counter_item">
                            <div class="counter_item_info_block mb-16">
                                <img src="{{ asset('frontend/assets/media/shapes/vector-group-3.png') }}" alt="">
                                <h2 class="counter_info">
                                    <span class="odometer count_one" data-count="98">00</span>
                                    <span>%</span>
                                </h2>
                            </div>
                            <h5>Students Enrolled</h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="counter_item">
                            <div class="counter_item_info_block mb-16">
                                <img src="{{ asset('frontend/assets/media/shapes/vector-group-3.png') }}" alt="">
                                <h2 class="counter_info">
                                    <span class="odometer count_one" data-count="200">00</span>
                                    <span>+</span>
                                </h2>
                            </div>
                            <h5>Students Enrolled</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Area End -->

        <!-- Testimonials Area Start -->
        @include('frontend.section.Testimonials')
        <!-- Testimonials Area End -->

        <!-- Discount Banner Area Start -->
        @include('frontend.section.Discount')
        <!-- Discount Banner Area End -->

@endsection
