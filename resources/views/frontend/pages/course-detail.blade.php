@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Course Detail'])

        <section class="course_detail py-60">
            <div class="container">
                @if ($course)
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-sm-6">
                                <div class="author_block_card mb-16">
                                    <div class="author_img">
                                        <img src="{{ \App\Support\Media::url($course->author_image, 'frontend/assets/media/users/u-8.png') }}" alt="{{ $course->author_name }}">
                                    </div>
                                    <div class="author_detail">
                                        <h5 class="mb-4p"><a href="{{ route('team') }}">{{ $course->author_name }}</a></h5>
                                        <p>{{ $course->author_role }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-sm-6 mb-16">
                                <p class="mb-4p">Category</p>
                                <span>{{ $course->category?->title ?? $course->category_name }}</span>
                            </div>
                        </div>
                        <h2 class="mb-12">{{ $course->title }}</h2>
                        <p class="mb-24">{{ $course->description ?? 'Learn this course with expert instructors and practical lessons.' }}</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="educate-tilt"
                            data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                            <img src="{{ \App\Support\Media::url($course->tag_image, 'frontend/assets/media/resources/course-detail.png') }}" alt="{{ $course->title }}" class="br-20 mb-24">
                        </div>
                    </div>
                </div>
                <div class="info mb-60">
                    <div class="info_left">
                        <div>
                            <p class="mb-4p">Category</p>
                            <h6>{{ $course->category?->title ?? $course->category_name }}</h6>
                        </div>
                        <div>
                            <p class="mb-4p">Videos</p>
                            <h6><i class="fal fa-presentation me-2 color-primary"></i>{{ $course->videos }}</h6>
                        </div>
                        <div>
                            <p class="mb-4p">Time</p>
                            <h6><i class="fal fa-clock me-2 color-primary"></i>{{ $course->hours }}</h6>
                        </div>
                    </div>
                    <div class="info_right">
                        <h3>{{ $course->price }}</h3>
                        <a href="{{ url('/') }}#enroll" class="educate-btn"><span class="educate-btn__curve"></span>Buy Course</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link h4 active" data-bs-toggle="tab" data-bs-target="#overview"
                                    type="button" role="tab">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link h4" data-bs-toggle="tab" data-bs-target="#instructor"
                                    type="button" role="tab">Instructor</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div id="overview" class="overview tab-pane active">
                                <p class="mb-24">{{ $course->description ?? 'This course covers practical lessons and real examples.' }}</p>
                            </div>
                            <div id="instructor" class="instructor tab-pane">
                                <div class="instructor_block mb-16">
                                    <div class="instructor_img">
                                        <img src="{{ \App\Support\Media::url($course->author_image, 'frontend/assets/media/users/u-8.png') }}" alt="{{ $course->author_name }}">
                                    </div>
                                    <div class="author_detail">
                                        <h5 class="mb-4p"><a href="{{ route('team') }}">{{ $course->author_name }}</a></h5>
                                        <p>{{ $course->author_role }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <p class="text-center">No course found.</p>
                @endif
            </div>
        </section>

@endsection
