@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Our Teachers'])

        <section class="py-60">
            <div class="container">
                <div class="row">
                    @forelse ($teams as $item)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="team__card mb-24">
                            <div class="team__img_block">
                                <img src="{{ \App\Support\Media::url($item->image, 'frontend/assets/media/team/Card.png') }}" alt="{{ $item->name }}" class="team_img">
                                <div class="team__content_block">
                                    <div class="team__text_block">
                                        <h5 class="mb-8"><a href="{{ route('team.detail', $item->id) }}">{{ $item->name }}</a></h5>
                                        <ul class="team__info unstyled mb-16">
                                            <li><i class="fas fa-star"></i>{{ $item->rating }}</li>
                                            <li><i class="fal fa-graduation-cap"></i>{{ $item->subject }}</li>
                                            <li><i class="fal fa-clock"></i>{{ $item->hours }}</li>
                                        </ul>
                                        <p class="team_info_text mb-24">{{ $item->description }}</p>
                                        <a href="{{ route('team.detail', $item->id) }}" class="educate-btn mx-auto"><span
                                                class="educate-btn__curve"></span>Learn More</a>
                                        <img src="{{ asset('frontend/assets/media/shapes/feture-bg-shape.png') }}" alt=""
                                            class="text_block_bg_shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">No teachers found.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

@endsection
