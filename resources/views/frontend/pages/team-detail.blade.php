@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Teacher Detail'])

        <section class="team_detail py-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ \App\Support\Media::url($team?->image, 'frontend/assets/media/team/team_detail.png') }}" alt="{{ $team?->name }}" class="br-15 shadow mb-32 mb-lg-0">
                    </div>
                    <div class="col-md-7">
                        <h2 class="mb-16">{{ $team?->name ?? 'Teacher' }}</h2>
                        <span class="h5 color-primary mb-16"><i class="fal fa-graduation-cap me-2"></i>{{ $team?->subject }}</span>
                        <p class="mb-16">{{ $team?->description }}</p>
                        <div class="teacher_stats mb-16">
                            <div class="stats_block">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="title"><i class="fas fa-star"></i>Rating</h5>
                                    <span class="h6 dark-gray">{{ $team?->rating }}</span>
                                </div>
                            </div>
                            <div class="stats_block">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="title"><i class="fal fa-clock"></i>Hours</h5>
                                    <span class="h6 dark-gray">{{ $team?->hours }}</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="educate-btn"><span class="educate-btn__curve"></span>Get in
                            Touch</a>
                    </div>
                </div>
            </div>
        </section>

@endsection
