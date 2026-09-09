@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'About Us'])

        @include('frontend.section.About')

        <section class="benefits py-60">
            <div class="container">
                <div class="heading_block">
                    <h6 class="color-primary mb-8">–––– Benefits</h6>
                    <h2 class="mb-32">Cultivating a Digital Learning <br><span class="fm-sec">Ecosystem.</span></h2>
                    <a href="{{ url('/') }}#courses" class="educate-btn"><span class="educate-btn__curve"></span>View All</a>
                </div>
            </div>
        </section>
        @include('frontend.section.Features')

        @include('frontend.section.Team')

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
                            <h5>Online Courses</h5>
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
                            <h5>Success Rate</h5>
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
                            <h5>Expert Teachers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.section.Testimonials')
        @include('frontend.section.Discount')

@endsection
