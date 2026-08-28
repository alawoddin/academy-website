@extends('frontend.dashboard')
@section('frontend')

<!-- Page Title Banner Start -->
        <section class="page_title_banner">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h1>Become A Teacher</h1>
                        <img src="{{ asset('frontend/assets/media/shapes/tag-2.png') }}" alt="" class="tag">
                    </div>
                    <div class="educate-tilt"
                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="{{ asset('frontend/assets/media/resources/page_title.png') }}" alt="" class="main_img">
                    </div>
                    <img src="{{ asset('frontend/assets/media/shapes/circle-lines-2.png') }}" alt="" class="circle_vector">
                </div>
            </div>
        </section>
        <!-- Page Title Banner End -->

        <!-- join Team Area Start -->
        <section class="join_team py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h6 class="color-primary mb-8">–––– Apply Info</h6>
                        <h2 class="mb-16">Want to Become A Teacher?<br> Drop Us <span class="fm-sec">Your CV!</span>
                        </h2>
                        <p class="mb-32">Lorem ipsum dolor sit amet consectetur. Non convallis sed id <br>aliquam
                            tempus. Volutpat
                            tortor tincidunt egestas sit risus donec.</p>
                        <div class="block mb-16">
                            <h5 class="mb-8">Rules & Regulations</h5>
                            <p class="mb-16">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                                tempus. Volutpat tortor tincidunt egestas sit risus donec. Non convallis sed id aliquam
                                tempus. </p>
                            <ul class="unstyled rules">
                                <li class="mb-16"><i class="fal fa-check"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                </li>
                                <li class="mb-16"><i class="fal fa-check"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                </li>
                                <li class="mb-16"><i class="fal fa-check"></i>
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="block">
                            <h5 class="mb-16">Qualification Requirement</h5>
                            <p class="mb-16">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                                tempus. Volutpat tortor tincidunt egestas sit risus donec. Lorem ipsum dolor sit amet
                                consectetur. Non convallis sed id aliquam tempus. Volutpat tortor tincidunt egestas sit
                                risus donec.Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus.
                                Volutpat tortor tincidunt egestas sit risus donec.Lorem ipsum dolor sit amet
                                consectetur. Non convallis sed id aliquam tempus. Volutpat tortor tincidunt egestas sit
                                risus donec.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="join_form_block">
                            <h4 class="mb-24">Apply Form</h4>
                            <form action="#" class="form-validator">
                                <div class="mb-24">
                                    <input type="text" class="form-control" name="first-name" required
                                        placeholder="First Name">
                                </div>
                                <div class="mb-24">
                                    <input type="text" class="form-control" name="last-name" required
                                        placeholder="Last Name">
                                </div>
                                <div class="mb-24">
                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                </div>
                                <div class="mb-24">
                                    <input type="tel" class="form-control" name="tel" required
                                        placeholder="Phone Number">
                                </div>
                                <div class="mb-24">
                                    <input type="file" class="form-control" name="cv" required>
                                </div>
                                <button type="submit" class="educate-btn"><span class="educate-btn__curve"></span>Apply
                                    Now</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- join Team Area End -->

@endsection
