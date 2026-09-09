@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Gallery'])

        <div class="pt-60 pb-40">
            <div class="container">
                <div class="row">
                    @forelse ($galleries as $item)
                    <div class="col-xl-3 col-lg-4 col-sm-6 g_c mb-24">
                        <div class="gallery_card">
                            <img src="{{ \App\Support\Media::url($item->image, 'frontend/assets/media/gallery/g-1.png') }}" alt="{{ $item->caption }}" class="br-5 mb-8">
                            <span class="fm-sec">{{ $item->caption }}</span>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">No gallery images yet.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>

@endsection
