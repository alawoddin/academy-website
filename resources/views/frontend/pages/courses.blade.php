@extends('frontend.dashboard')
@section('frontend')

    <section class="page_title_banner">
      <div class="container">
        <div class="content">
          <div class="title">
            <h1>Course Listing</h1>
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

    <section class="py-60">
      <div class="container">
        <div class="filter_row">
          <div class="left_block">
            <div class="select_filter">
              <span class="dark-gray">Category:</span>
              <form method="GET" action="{{ route('courses') }}">
                <select name="category" class="form-select" onchange="this.form.submit()">
                  <option value="">All Categories</option>
                  @foreach (($categories ?? []) as $category)
                    <option value="{{ $category->id }}" @selected(request('category') == $category->id)>{{ $category->title }}</option>
                  @endforeach
                </select>
              </form>
            </div>
          </div>
          <div class="right_block">
            <h6 class="dark-gray">Showing {{ ($courses ?? collect())->count() }} courses</h6>
          </div>
        </div>
        <div class="row">
          @forelse (($courses ?? collect()) as $item)
          <div class="col-lg-6">
            <div class="course__card mb-24">
              <div class="course__card__icon">
                <img src="{{ \App\Support\Media::url($item->icon, \App\Models\Course::iconForTitle($item->title)) }}" alt="{{ $item->title }}">
              </div>
              <div class="course__card__content">
                <div class="left__block">
                  <img src="{{ \App\Support\Media::url($item->tag_image, 'frontend/assets/media/courses/tag-1.png') }}" alt="{{ $item->title }}" class="course_tag">
                  <h4 class="mb-4p"><a href="{{ route('course.detail') }}">{{ $item->title }}</a></h4>
                  <p class="h6 mb-24">{{ $item->category?->title ?? $item->category_name }}</p>
                  <ul class="course_info p-0 mb-32">
                    <li><i class="fal fa-presentation"></i>{{ $item->videos }}</li>
                    <li><i class="fal fa-clock"></i>{{ $item->hours }}</li>
                  </ul>
                  <div class="author_card">
                    <img src="{{ \App\Support\Media::url($item->author_image, 'frontend/assets/media/courses/authors/a-1.png') }}" alt="{{ $item->author_name }}" class="author_img">
                    <div class="author_text_block">
                      <a href="{{ route('team.detail') }}" class="h6 mb-4p">{{ $item->author_name }}</a>
                      <p>{{ $item->author_role }}</p>
                    </div>
                  </div>
                </div>
                <div class="right__block">
                  <div class="price_block mb-16">
                    <div class="price_vector">
                      <img src="{{ asset('frontend/assets/media/shapes/vector-group.png') }}" alt="">
                    </div>
                    <span class="h3 color-white">{{ $item->price }}</span>
                  </div>
                  <a href="{{ route('course.detail') }}" class="educate-btn sm mx-xl-auto me-2"><span
                      class="educate-btn__curve"></span>Buy Now</a>
                </div>
                <img src="{{ asset('frontend/assets/media/shapes/vector-1.png') }}" alt="" class="bottom_vector">
              </div>
            </div>
          </div>
          @empty
          <div class="col-12">
            <p class="text-center">No courses found.</p>
          </div>
          @endforelse
        </div>
      </div>
    </section>

@endsection
