@extends('frontend.dashboard')
@section('frontend')

    <section class="page_title_banner">
      <div class="container">
        <div class="content">
          <div class="title">
            <h1>Our Courses</h1>
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

    <section class="courses-listing py-60">
      <div class="container">
        <div class="courses-listing__intro">
          <div class="heading">
            <h6 class="color-primary mb-8">–––– Popular Courses</h6>
            <h2>Courses Presented To You By <span class="fm-sec">Experts</span></h2>
            <p>Choose a category and start learning with practical lessons.</p>
          </div>
          <div class="courses-listing__count">
            <i class="fal fa-books"></i>
            Showing {{ ($courses ?? collect())->count() }} courses
          </div>
        </div>

        <div class="courses-filter">
          <a href="{{ route('courses') }}" class="{{ ! request()->filled('category') ? 'active' : '' }}">All</a>
          @foreach (($categories ?? []) as $category)
            <a href="{{ route('courses', ['category' => $category->id]) }}" class="{{ (string) request('category') === (string) $category->id ? 'active' : '' }}">
              {{ $category->title }}
            </a>
          @endforeach
        </div>

        <div class="row g-4">
          @forelse (($courses ?? collect()) as $item)
          <div class="col-xl-6">
            <article class="listing-course-card">
              <div class="listing-course-card__top">
                <div class="listing-course-card__icon">
                  <img src="{{ \App\Support\Media::url($item->icon, \App\Models\Course::iconForTitle($item->title)) }}" alt="{{ $item->title }}">
                </div>
                <div class="listing-course-card__copy">
                  <span class="category-pill">{{ $item->category?->title ?? $item->category_name }}</span>
                  <h4><a href="{{ route('course.detail', $item->id) }}">{{ $item->title }}</a></h4>
                </div>
              </div>
              <ul class="listing-course-card__meta">
                <li><i class="fal fa-presentation"></i>{{ $item->videos }}</li>
                <li><i class="fal fa-clock"></i>{{ $item->hours }}</li>
              </ul>
              <div class="listing-course-card__footer">
                <div class="listing-course-card__author">
                  <img src="{{ \App\Support\Media::url($item->author_image, 'frontend/assets/media/a2.png') }}" alt="{{ $item->author_name }}">
                  <div>
                    <a href="{{ route('team') }}" class="h6">{{ $item->author_name }}</a>
                    <p>{{ $item->author_role }}</p>
                  </div>
                </div>
                <div class="listing-course-card__action">
                  <span class="listing-course-card__price">{{ $item->price }}</span>
                  <a href="{{ route('course.detail', $item->id) }}" class="educate-btn sm"><span class="educate-btn__curve"></span>View Course</a>
                </div>
              </div>
            </article>
          </div>
          @empty
          <div class="col-12">
            <div class="courses-empty">
              <h4>No courses found</h4>
              <p>Try another category or check back soon for new lessons.</p>
            </div>
          </div>
          @endforelse
        </div>
      </div>
    </section>

@endsection
