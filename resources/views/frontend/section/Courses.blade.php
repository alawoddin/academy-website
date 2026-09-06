 <section class="courses-1 py-60" id="courses">
      <div class="container">
        <div class="section-title mb-48">
          <div class="heading">
            <h6 class="color-primary mb-8">–––– Popular Courses</h6>
            <h2>Courses Presented To <br> You By <span class="fm-sec">Experts</span></h2>
          </div>
          <a href="{{ route('courses') }}" class="educate-btn d-md-block d-none"><span class="educate-btn__curve"></span>View
            All</a>
        </div>
      </div>
      <div class="courses-slider">
        @forelse ($courses as $item)
        <div class="course__card mb-24">
          <div class="course__card__icon">
            <img src="{{ \App\Support\Media::url($item->icon, 'frontend/assets/media/icons/ps.png') }}" alt="{{ $item->title }}">
          </div>
          <div class="course__card__content">
            <div class="left__block">
              <img src="{{ \App\Support\Media::url($item->tag_image, 'frontend/assets/media/courses/tag-1.png') }}" alt="{{ $item->title }}" class="course_tag">
              <h4 class="mb-4p"><a href="{{ url('/') }}#courses">{{ $item->title }}</a></h4>
              <p class="h6 mb-24">{{ $item->category?->title ?? $item->category_name }}</p>
              <ul class="course_info p-0 mb-32">
                <li><i class="fal fa-presentation"></i>{{ $item->videos }}</li>
                <li><i class="fal fa-clock"></i>{{ $item->hours }}</li>
              </ul>
              <div class="author_card">
                <img src="{{ \App\Support\Media::url($item->author_image, 'frontend/assets/media/a2.png') }}" style="height: 74px; width: 74px;" alt="{{ $item->author_name }}" class="author_img">
                <div class="author_text_block">
                  <a href="{{ url('/') }}#team" class="h6 mb-4p">{{ $item->author_name }}</a>
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
              <a href="{{ url('/') }}#enroll" class="educate-btn sm mx-xl-auto me-2"><span
                  class="educate-btn__curve"></span>Buy Now</a>
            </div>
            <img src="{{ asset('frontend/assets/media/shapes/vector-1.png') }}" alt="" class="bottom_vector">
          </div>
        </div>
        @empty
        <div class="course__card mb-24">
          <div class="course__card__icon">
            <img src="{{ asset('frontend/assets/media/icons/ps.png') }}" alt="Photoshop">
          </div>
          <div class="course__card__content">
            <div class="left__block">
              <img src="{{ asset('frontend/assets/media/courses/tag-1.png') }}" alt="Bestseller" class="course_tag">
              <h4 class="mb-4p"><a href="{{ url('/') }}#courses">Photoshop Course</a></h4>
              <p class="h6 mb-24">Graphics Design</p>
              <ul class="course_info p-0 mb-32">
                <li><i class="fal fa-presentation"></i>45 Videos</li>
                <li><i class="fal fa-clock"></i>05+ Hours</li>
              </ul>
              <div class="author_card">
                <img src="{{ asset('frontend/assets/media/a2.png') }}" style="height: 74px; width: 74px;" alt="Alawoddin Khedmat" class="author_img">
                <div class="author_text_block">
                  <a href="{{ url('/') }}#team" class="h6 mb-4p">Alawoddin Khedmat</a>
                  <p>Adobe Embassador</p>
                </div>
              </div>
            </div>
            <div class="right__block">
              <div class="price_block mb-16">
                <div class="price_vector">
                  <img src="{{ asset('frontend/assets/media/shapes/vector-group.png') }}" alt="">
                </div>
                <span class="h3 color-white">$45</span>
              </div>
              <a href="{{ url('/') }}#enroll" class="educate-btn sm mx-xl-auto me-2"><span
                  class="educate-btn__curve"></span>Buy Now</a>
            </div>
            <img src="{{ asset('frontend/assets/media/shapes/vector-1.png') }}" alt="" class="bottom_vector">
          </div>
        </div>
        @endforelse
      </div>
    </section>
