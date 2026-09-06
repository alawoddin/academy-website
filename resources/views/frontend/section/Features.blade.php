<section class="py-60" id="features">
      <div class="container">
        <div class="row row-gap-4">
          @forelse ($features as $key => $item)
          <div class="col-xl-3 col-sm-6 wow fadeInUp" data-wow-delay="{{ ($key + 1) * 200 }}ms">
            <div class="feature__card mb-24 mb-xl-0">
              <div class="feature__icon">
                @if($item->featureicon && (str_contains($item->featureicon, '/') || str_contains($item->featureicon, '.')))
                  <img src="{{ asset($item->featureicon) }}" alt="{{ $item->featurecontent }}">
                @else
                  <img src="{{ asset('frontend/assets/media/icons/Check-mark.png') }}" alt="{{ $item->featurecontent }}">
                @endif
              </div>
              <div class="feature__content">
                <h5 class="mb-8">{{ $item->featurecontent }}</h5>
                <p>{{ $item->featureinfo }}</p>
                <img src="{{ $item->feturebg ? asset($item->feturebg) : asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="feature-bg-shape">
              </div>
            </div>
          </div>
          @empty
          <div class="col-xl-3 col-sm-6 wow fadeInUp" data-wow-delay="200ms">
            <div class="feature__card mb-24 mb-xl-0">
              <div class="feature__icon">
                <img src="{{ asset('frontend/assets/media/icons/Pricing.png') }}" alt="Free trials">
              </div>
              <div class="feature__content">
                <h5 class="mb-8">Free Trials</h5>
                <p>Lorem ipsum dolor sit amet cons ectetur. Non convallis sed id.</p>
                <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt="" class="feature-bg-shape">
              </div>
            </div>
          </div>
          @endforelse
        </div>
      </div>
    </section>
