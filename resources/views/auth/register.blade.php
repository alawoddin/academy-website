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
                                    <h2 class="mb-48">Create an account</h2>
                                </div>
                                <div class="text-center">
                                    <h6 class="mb-24">Sign up with your email address</h6>
                                </div>
                                @if ($errors->any())
                                    <div class="mb-24">
                                        @foreach ($errors->all() as $error)
                                            <p class="color-primary mb-8">{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('register') }}" class="form-validator">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-24">
                                                <input type="text" class="form-control p_lg" id="first-name"
                                                    name="first_name" value="{{ old('first_name') }}" required placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-24">
                                                <input type="text" class="form-control p_lg" id="last-name"
                                                    name="last_name" value="{{ old('last_name') }}" required placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-24">
                                        <input type="email" class="form-control p_lg" id="email"
                                            name="email" value="{{ old('email') }}" required placeholder="Email">
                                    </div>
                                    <div class="mb-24">
                                        <input type="password" class="form-control p_lg" id="password"
                                            name="password" required placeholder="Password">
                                    </div>
                                    <div class="mb-24">
                                        <input type="password" class="form-control p_lg" id="password_confirmation"
                                            name="password_confirmation" required placeholder="Confirm Password">
                                    </div>
                                    <button type="submit" class="b-unstyle educate-btn w-100 mb-24"><span
                                            class="educate-btn__curve"></span>Create Account</button>
                                </form>
                                <div class="text-end">
                                    <h6>Already have an account? <a href="{{ route('login') }}" class="color-primary"> Login</a>
                                    </h6>
                                </div>
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
