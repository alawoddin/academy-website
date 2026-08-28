@extends('frontend.dashboard')
@section('frontend')

<!-- Page Title Banner Start -->
        <section class="page_title_banner">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h1>FAQ's</h1>
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

        <!-- Faq Area Start -->
        <section class="faq py-60">
            <div class="container">
                <div class="row" id="accordionExample">
                    <div class="col-lg-8">
                        <div class="faq-block">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">How do I create an
                                account on this platform?
                            </a>
                            <div id="faq1" class="accordion-collapse collapse " aria-labelledby="faq1"
                                data-bs-parent="#accordionExample">
                                <p>Lorem ipsum dolor sit amet consectetur. Enim non cras odio fusce feugiat posuere sed.
                                    Scelerisque mauris dapibus purus convallis. Libero egestas tempus arcu elementum
                                    facilisis. Non fringilla aliquam leo adipiscing mi neque urna. Pellentesque
                                    ullamcorper pellentesque nam eros elit placerat. Elementum dapibus donec eleifend
                                    quis a donec elit vivamus. Egestas aliquam quis cursus amet.</p>
                            </div>
                        </div>
                        <div class="faq-block">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">What courses and
                                subjects are available on this platform?
                            </a>
                            <div id="faq2" class="accordion-collapse collapse " aria-labelledby="faq2"
                                data-bs-parent="#accordionExample">
                                <p>Lorem ipsum dolor sit amet consectetur. Enim non cras odio fusce feugiat posuere sed.
                                    Scelerisque mauris dapibus purus convallis. Libero egestas tempus arcu elementum
                                    facilisis. Non fringilla aliquam leo adipiscing mi neque urna. Pellentesque
                                    ullamcorper pellentesque nam eros elit placerat. Elementum dapibus donec eleifend
                                    quis a donec elit vivamus. Egestas aliquam quis cursus amet.</p>
                            </div>
                        </div>
                        <div class="faq-block">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#faq3" aria-expanded="true" aria-controls="faq3">Can I access course
                                materials on mobile devices?
                            </a>
                            <div id="faq3" class="accordion-collapse collapse " aria-labelledby="faq3"
                                data-bs-parent="#accordionExample">
                                <p>Lorem ipsum dolor sit amet consectetur. Enim non cras odio fusce feugiat posuere sed.
                                    Scelerisque mauris dapibus purus convallis. Libero egestas tempus arcu elementum
                                    facilisis. Non fringilla aliquam leo adipiscing mi neque urna. Pellentesque
                                    ullamcorper pellentesque nam eros elit placerat. Elementum dapibus donec eleifend
                                    quis a donec elit vivamus. Egestas aliquam quis cursus amet.</p>
                            </div>
                        </div>
                        <div class="faq-block">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#faq4" aria-expanded="true" aria-controls="faq4">Is there a certificate
                                of completion for courses?
                            </a>
                            <div id="faq4" class="accordion-collapse collapse " aria-labelledby="faq4"
                                data-bs-parent="#accordionExample">
                                <p>Lorem ipsum dolor sit amet consectetur. Enim non cras odio fusce feugiat posuere sed.
                                    Scelerisque mauris dapibus purus convallis. Libero egestas tempus arcu elementum
                                    facilisis. Non fringilla aliquam leo adipiscing mi neque urna. Pellentesque
                                    ullamcorper pellentesque nam eros elit placerat. Elementum dapibus donec eleifend
                                    quis a donec elit vivamus. Egestas aliquam quis cursus amet.</p>
                            </div>
                        </div>
                        <div class="faq-block">
                            <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#faq5" aria-expanded="true" aria-controls="faq5">Can I interact with
                                instructors and fellow learners during the course?
                            </a>
                            <div id="faq5" class="accordion-collapse collapse " aria-labelledby="faq5"
                                data-bs-parent="#accordionExample">
                                <p>Lorem ipsum dolor sit amet consectetur. Enim non cras odio fusce feugiat posuere sed.
                                    Scelerisque mauris dapibus purus convallis. Libero egestas tempus arcu elementum
                                    facilisis. Non fringilla aliquam leo adipiscing mi neque urna. Pellentesque
                                    ullamcorper pellentesque nam eros elit placerat. Elementum dapibus donec eleifend
                                    quis a donec elit vivamus. Egestas aliquam quis cursus amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h6 class="color-primary mb-8">–––– FAQ Form</h6>
                        <h2 class="mb-32">Ask Any Question <span class="fm-sec">You Want!</span></h2>
                        <form method="post" action="#" class="form-validator">
                            <div class="mb-24">
                                <input type="text" class="form-control p_lg" id="name" name="name" required
                                    placeholder="Your Name">
                            </div>
                            <div class="mb-24">
                                <input type="email" class="form-control p_lg" id="email" name="email" required
                                    placeholder="email">
                            </div>
                            <div class="mb-24">
                                <textarea class="form-control p_lg" id="message" name="message" rows="4" required
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="educate-btn"><span class="educate-btn__curve"></span>Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Area End -->

        <!-- Contact Banner Area Start -->
        <section class="pb-60">
            <div class="container">
                <div class="contact_banner">
                    <h2 class="mb-8 color-white">Ask Any Questions <br><span class="fm-sec">You Want!</span></h2>
                    <p class="mb-16 color-white">Contact on this number for any Questions!</p>
                    <div class="mx-auto">
                        <a href="tel:123456789" class="h5 phone_number">+93 788077685</a>
                    </div>
                    <div class="icons">
                        <img src="{{ asset('frontend/assets/media/shapes/dots-1.png') }}" alt="" class="element-1">
                        <img src="{{ asset('frontend/assets/media/shapes/vector-3.png') }}" alt="" class="element-2">
                        <img src="{{ asset('frontend/assets/media/shapes/paint.png') }}" alt="" class="element-3">
                        <img src="{{ asset('frontend/assets/media/shapes/vector-4.png') }}" alt="" class="element-5">
                        <img src="{{ asset('frontend/assets/media/shapes/dots-1.png') }}" alt="" class="element-4">
                        <img src="{{ asset('frontend/assets/media/shapes/tag.png') }}" alt="" class="element-6">
                        <img src="{{ asset('frontend/assets/media/shapes/errow.png') }}" alt="" class="element-7">
                        <img src="{{ asset('frontend/assets/media/shapes/circle-lines.png') }}" alt="" class="element-8">
                        <img src="{{ asset('frontend/assets/media/shapes/mic-speaker.png') }}" alt="" class="element-9">
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Banner Area End -->

@endsection
