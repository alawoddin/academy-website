@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Become A Teacher'])

        <section class="join_team py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h6 class="color-primary mb-8">–––– {{ $join?->subtitle ?? 'Apply Info' }}</h6>
                        <h2 class="mb-16">{!! $join?->title ?? 'Want to Become A Teacher?<br> Drop Us <span class="fm-sec">Your CV!</span>' !!}</h2>
                        <p class="mb-32">{{ $join?->description ?? 'Share your details and we will review your application.' }}</p>
                        <div class="block mb-16">
                            <h5 class="mb-8">{{ $join?->rules_title ?? 'Rules & Regulations' }}</h5>
                            <p class="mb-16">{{ $join?->rules_text ?? 'Please follow the academy teaching guidelines.' }}</p>
                            <ul class="unstyled rules">
                                @forelse (($join?->ruleList() ?? []) as $rule)
                                <li class="mb-16"><i class="fal fa-check"></i>
                                    <p>{{ $rule }}</p>
                                </li>
                                @empty
                                <li class="mb-16"><i class="fal fa-check"></i>
                                    <p>Submit a complete CV and contact details.</p>
                                </li>
                                @endforelse
                            </ul>
                        </div>
                        <div class="block">
                            <h5 class="mb-16">{{ $join?->qualification_title ?? 'Qualification Requirement' }}</h5>
                            <p class="mb-16">{{ $join?->qualification_text ?? 'Teaching experience and subject knowledge are required.' }}</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="join_form_block">
                            <h4 class="mb-24">Apply Form</h4>
                            <form action="{{ route('join.apply') }}" method="POST" enctype="multipart/form-data" class="form-validator">
                                @csrf
                                <div class="mb-24">
                                    <input type="text" class="form-control" name="first_name" required
                                        placeholder="First Name">
                                </div>
                                <div class="mb-24">
                                    <input type="text" class="form-control" name="last_name" required
                                        placeholder="Last Name">
                                </div>
                                <div class="mb-24">
                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                </div>
                                <div class="mb-24">
                                    <input type="tel" class="form-control" name="phone" required
                                        placeholder="Phone Number">
                                </div>
                                <div class="mb-24">
                                    <input type="file" class="form-control" name="cv" accept=".pdf,.doc,.docx">
                                </div>
                                <button type="submit" class="educate-btn"><span class="educate-btn__curve"></span>Apply
                                    Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
