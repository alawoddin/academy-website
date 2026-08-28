@extends('frontend.dashboard')
@section('frontend')

<!-- Page Title Banner Start -->
        <section class="page_title_banner">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h1>Contact Us</h1>
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

        <!-- Contact Area Start -->
        <section class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-24 mb-lg-0">
                        <h6 class="color-primary mb-8">–––– Contact Form</h6>
                        <h2 class="mb-16">Write Us Anytime, We Would<br> Love To Hear From <span
                                class="fm-sec">You!</span></h2>
                        <p class="mb-32">Lorem ipsum dolor sit amet consectetur. Non convallis sed id <br>aliquam
                            tempus. Volutpat tortor tincidunt egestas sit risus donec.</p>
                        <form method="get" action="#" class="form-validator">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-24">
                                        <input type="text" class="form-control p_lg" id="name" name="name" required
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-24">
                                        <input type="text" class="form-control p_lg" id="last-name" name="last-name"
                                            required placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-24">
                                        <input type="email" class="form-control p_lg" id="email" name="email" required
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-24">
                                        <input type="text" class="form-control p_lg" id="subject" name="subject"
                                            required placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-24">
                                <textarea class="form-control p_lg" id="detail-message" name="message" rows="5" required
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="educate-btn"><span class="educate-btn__curve"></span>Send
                                    Message</button>
                            </div>
                            <!-- Alert Message -->
                            <div id="alert-message" class="alert-msg"></div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="educate-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                            <img src="{{ asset('frontend/assets/media/resources/contat.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="contact_links pt-60">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact_link_block mb-48 mb-lg-0">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <h6 class="dark-gray">123 Main Street, Anytown, USA.</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="tel:123456789" class="contact_link_block mb-48 mb-lg-0">
                                <div class="icon">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <span class="h6">+93 788077685</span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="mailto:example@info.com" class="contact_link_block">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <span class="h6">tawanatechnology.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->

@endsection
