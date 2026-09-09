<section class="team py-60" id="team">
      <img src="{{ asset('frontend/assets/media/shapes/dots-1.png') }}" alt="" class="dots">
      <img src="{{ asset('frontend/assets/media/icons/3dtag.png') }}" alt="" class="tag">
      <div class="row align-items-center">
        <div class="col-xl-5">
          <div class="team_one__content mb-64 mb-xl-0">
            <div class="heading mb-16">
              <h6 class="color-primary mb-8">–––– Our Teachers</h6>
              <h2>Meet the Dedicated <br> Educators Shaping<br> Your <span class="fm-sec">Future.</span></h2>
            </div>
            <p class="mb-24">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. Volutpat
              tortor tincidunt egestas sit risus donec.</p>
            <a href="{{ route('team') }}" class="educate-btn"><span class="educate-btn__curve"></span>View All</a>
          </div>
        </div>
        <div class="col-xl-7">
          <div class="team-slider py-60 ms-2 ms-xl-0">
            @forelse ($teams as $item)
            <div class="team__card mb-24">
              <div class="team__img_block">
                <img src="{{ $item->image ? asset($item->image) : asset('frontend/assets/media/team/Card.png') }}" alt="{{ $item->name }}" class="team_img">
                <div class="team__content_block">
                  <div class="team__text_block">
                    <h5 class="mb-8"><a href="{{ route('team.detail', $item->id) }}">{{ $item->name }}</a></h5>
                    <ul class="team__info unstyled mb-16">
                      <li><i class="fas fa-star"></i>{{ $item->rating }}</li>
                      <li><i class="fal fa-graduation-cap"></i>{{ $item->subject }}</li>
                      <li><i class="fal fa-clock"></i>{{ $item->hours }}</li>
                    </ul>
                    <p class="team_info_text mb-24">{{ $item->description }}</p>
                    <a href="{{ url('/') }}#contact" class="educate-btn mx-auto"><span class="educate-btn__curve"></span>View
                      Detail</a>
                    <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="text_block_bg_shape">
                  </div>
                </div>
              </div>
            </div>
            @empty
            <div class="team__card mb-24">
              <div class="team__img_block">
                <img src="{{ asset('frontend/assets/media/team/Card.png') }}" alt="Angel Whites" class="team_img">
                <div class="team__content_block">
                  <div class="team__text_block">
                    <h5 class="mb-8"><a href="{{ url('/') }}#team">Angel Whites</a></h5>
                    <ul class="team__info unstyled mb-16">
                      <li><i class="fas fa-star"></i>5</li>
                      <li><i class="fal fa-graduation-cap"></i>Economics</li>
                      <li><i class="fal fa-clock"></i>60+</li>
                    </ul>
                    <p class="team_info_text mb-24">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. </p>
                    <a href="{{ url('/') }}#contact" class="educate-btn mx-auto"><span class="educate-btn__curve"></span>View
                      Detail</a>
                    <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="text_block_bg_shape">
                  </div>
                </div>
              </div>
            </div>
            @endforelse
          </div>
        </div>
      </div>
    </section>
