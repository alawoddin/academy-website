@extends('frontend.form')
@section('frontend')
        <section class="form_page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form_block">
                            <div class="text_block">
                                <a href="{{ url('/') }}" class="educate_link_btn color-primary h6 mb-48"><i
                                        class="far fa-chevron-left"></i> Back To Home</a>
                                <div class="title">
                                    <img src="{{ asset('frontend/assets/media/shapes/mic-speaker.png') }}" alt="" class="speaker_icon">
                                    <h2 class="mb-24">Pending Approval</h2>
                                </div>
                                <h6 class="mb-16">Hello {{ Auth::user()->name }},</h6>
                                <p class="mb-24">Your instructor registration was sent to the admin. You cannot start work until your account is accepted.</p>
                                <p class="mb-48">Please wait for admin approval. If your account is rejected, you will not be able to login.</p>
                                <a href="{{ route('instructor.logout') }}" class="b-unstyle educate-btn w-100 mb-24"><span
                                        class="educate-btn__curve"></span>Logout</a>
                            </div>
                            <div class="shapes">
                                <img src="{{ asset('frontend/assets/media/shapes/vector-9.png') }}" alt="">
                                <img src="{{ asset('frontend/assets/media/shapes/vector-8.png') }}" alt="">
                                <img src="{{ asset('frontend/assets/media/shapes/circle-lines-3.png') }}" alt="">
                                <img src="{{ asset('frontend/assets/media/shapes/location.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
