 <div class="py-80 bg-white">
      <div class="brands-slider">
        @forelse ($brands as $brand)
        <div class="brand">
          <img src="{{ $brand->image ? asset($brand->image) : asset('frontend/assets/media/brand/barnd-1.png') }}" alt="{{ $brand->name }}">
        </div>
        @empty
        <div class="brand">
          <img src="{{asset('frontend/assets/media/brand/barnd-1.png')}}" alt="">
        </div>
        <div class="brand">
          <img src="{{asset('frontend/assets/media/brand/barnd-2.png')}}" alt="">
        </div>
        <div class="brand">
          <img src="{{asset('frontend/assets/media/brand/barnd-3.png')}}" alt="">
        </div>
        <div class="brand">
          <img src="{{asset('frontend/assets/media/brand/barnd-4.png')}}" alt="">
        </div>
        <div class="brand">
          <img src="{{asset('frontend/assets/media/brand/barnd-5.png')}}" alt="">
        </div>
        <div class="brand">
          <img src="{{asset('frontend/assets/media/brand/barnd-6.png')}}" alt="">
        </div>
        @endforelse
      </div>
    </div>
