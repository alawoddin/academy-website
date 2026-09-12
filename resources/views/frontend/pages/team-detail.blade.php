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
                        @if ($team?->experience)
                        <div class="teacher-experience mb-16">
                            <h5 class="mb-8">Experience</h5>
                            <p class="mb-0">{{ $team->experience }}</p>
                        </div>
                        @endif
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

                @if ($team && $team->instructorCourses->isNotEmpty())
                <div class="teacher-courses mt-48">
                    <div class="heading mb-24">
                        <h6 class="color-primary mb-8">–––– Courses</h6>
                        <h2>Courses Taught By {{ $team->name }}</h2>
                    </div>
                    <div class="row g-4">
                        @foreach ($team->instructorCourses as $course)
                        <div class="col-lg-6">
                            <div class="teacher-course-card">
                                <div class="teacher-course-card__head">
                                    <h4 class="mb-8">{{ $course->title }}</h4>
                                    @if ($course->duration)
                                        <span class="teacher-course-card__duration"><i class="fal fa-clock"></i>{{ $course->duration }}</span>
                                    @endif
                                </div>
                                @if ($course->outlines->isNotEmpty())
                                <ol class="teacher-course-card__outline">
                                    @foreach ($course->outlines as $outline)
                                        <li>{{ $outline->title }}</li>
                                    @endforeach
                                </ol>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </section>

@endsection
