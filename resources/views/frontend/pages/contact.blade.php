@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Contact Us'])

        <section class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-24 mb-lg-0">
                        <h6 class="color-primary mb-8">–––– Contact Form</h6>
                        <h2 class="mb-16">{!! $contact?->title ?? 'Write Us Anytime, We Would<br> Love To Hear From <span class="fm-sec">You!</span>' !!}</h2>
                        <p class="mb-32">{{ $contact?->text ?? 'Send us a message and we will reply soon.' }}</p>
                        <form method="post" action="{{ route('contact.send') }}" class="form-validator">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-24">
                                        <input type="text" class="form-control p_lg" id="name" name="first_name" required
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-24">
                                        <input type="text" class="form-control p_lg" id="last-name" name="last_name"
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
                                <h6 class="dark-gray">{{ $contact?->address ?? '123 Main Street, Anytown, USA.' }}</h6>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <a href="tel:{{ preg_replace('/\s+/', '', $contact?->phone ?? '+93 0744620492') }}" class="contact_link_block mb-48 mb-lg-0">
                                <div class="icon">
                                    <i class="fal fa-phone-alt"></i>
                                </div>
                                <span class="h6">{{ $contact?->phone ?? '+93 0744620492' }}</span>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="mailto:{{ $contact?->email ?? 'info@tawanatechnology.com' }}" class="contact_link_block">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <span class="h6">{{ $contact?->email ?? '.com' }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
