<section class="py-60" id="blogs">
      <div class="container">
        <div class="section-title mb-48">
          <div class="heading">
            <h6 class="color-primary mb-8">–––– Blogs</h6>
            <h2>Latest News By<br> Talented <span class="fm-sec">Authors!</span></h2>
          </div>
          <a href="{{ route('blog') }}" class="educate-btn d-md-block d-none"><span class="educate-btn__curve"></span>View
            All</a>
        </div>
        <div class="row">
          @forelse ($blogs as $item)
          <div class="col-lg-4 col-md-6">
            <div class="blog_card mb-24 mb-xl-0">
              <div class="blog_card_img_block">
                <img src="{{ $item->image ? asset($item->image) : asset('frontend/assets/media/blog/b-1.png') }}" alt="{{ $item->title }}">
                <p class="date">{{ $item->date }}</p>
              </div>
              <div class="blog_card_text_block">
                <h5 class="mb-8"><a class="blog_title" href="{{ url('/') }}#blogs">{{ $item->title }}</a></h5>
                <p class="mb-24">{{ $item->description }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="author">
                    <img src="{{ $item->author_image ? asset($item->author_image) : asset('frontend/assets/media/users/u-1.png') }}" alt="{{ $item->author_name }}">
                    <h6 class="dark-gray">{{ $item->author_name }}</h6>
                  </div>
                  <a href="{{ url('/') }}#blogs" class="h6 color-primary educate_link_btn">Read More<i
                      class="far fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div class="col-lg-4 col-md-6">
            <div class="blog_card mb-24 mb-xl-0">
              <div class="blog_card_img_block">
                <img src="{{ asset('frontend/assets/media/blog/b-1.png') }}" alt="Remote Learning Tips">
                <p class="date">9 May 2024</p>
              </div>
              <div class="blog_card_text_block">
                <h5 class="mb-8"><a class="blog_title" href="{{ url('/') }}#blogs">Remote Learning Tips: Thrive in Online
                    Classes</a></h5>
                <p class="mb-24">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus...</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="author">
                    <img src="{{ asset('frontend/assets/media/users/u-1.png') }}" alt="Michal Clark">
                    <h6 class="dark-gray">Michal Clark</h6>
                  </div>
                  <a href="{{ url('/') }}#blogs" class="h6 color-primary educate_link_btn">Read More<i
                      class="far fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforelse
        </div>
      </div>
    </section>
