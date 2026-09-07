<section class="testimonials py-60" id="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-xl-5">
            <div class="testimonials_text_block">
              <img src="{{ asset('frontend/assets/media/shapes/quote3d.png') }}" alt="" class="quote_icon">
              <h6 class="color-primary mb-8">–––– Testimonials</h6>
              <h2 class="mb-16">Student’s Stories! Some Awesome Comments By Our <span class="fm-sec">Students!</span>
              </h2>
              <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus. Volutpat tortor tincidunt
                egestas sit risus donec.</p>
              <img src="{{ asset('frontend/assets/media/shapes/vector-2.png') }}" alt="" class="vector_hol">
              <img src="{{ asset('frontend/assets/media/shapes/dots-1.png') }}" alt="" class="dots_group">
            </div>
          </div>
          <div class="col-xl-7 col-lg-10 offset-xl-0 offset-lg-1">
            <div class="testimonials_slider_1_block">
              <img src="{{ asset('frontend/assets/media/shapes/bg-elements-1.png') }}" alt="" class="bg_elements">
              <div class="testimonials_slider">
                @forelse ($testimonials as $item)
                <div class="card-block">
                  <div class="testimonial_card">
                    <div class="testimonial_card_img_block">
                      <img style="width: 300px; height:300px; object-fit: cover;" src="{{ $item->image ? asset($item->image) : asset('frontend/assets/media/users/Image.png') }}" alt="{{ $item->name }}" class="user_img">
                      <div class="quote_block"></div>
                    </div>
                    <div class="testimonial_card_content_block">
                      <div class="testimonial">
                        <h4 class="mb-16">{{ $item->name }}</h4>
                        <span class="mb-16">
                          @for ($i = 0; $i < (int) ($item->rating ?: 5); $i++)
                            <i class="fas fa-star"></i>
                          @endfor
                        </span>
                        <p class="review_text">{{ $item->review }}</p>
                      </div>
                      <img src="{{ asset('frontend/assets/media/shapes/bg-elements-2.png') }}" alt="" class="bottom_shape">
                    </div>
                  </div>
                </div>
                @empty
                <div class="card-block">
                  <div class="testimonial_card">
                    <div class="testimonial_card_img_block">
                      <img src="{{ asset('frontend/assets/media/users/Image.png') }}" alt="Jophie Alen" class="user_img">
                      <div class="quote_block"></div>
                    </div>
                    <div class="testimonial_card_content_block">
                      <div class="testimonial">
                        <h4 class="mb-16">Jophie Alen</h4>
                        <span class="mb-16"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <p class="review_text">Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam
                          tempus. Volutpat tortor tincidunt egestas sit risus donec.</p>
                      </div>
                      <img src="{{ asset('frontend/assets/media/shapes/bg-elements-2.png') }}" alt="" class="bottom_shape">
                    </div>
                  </div>
                </div>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
