@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Blog list'])

        <section class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-48 mb-lg-0">
                        @include('frontend.pages.partials.blog-sidebar')
                    </div>
                    <div class="col-lg-8">
                        @forelse ($blogs as $item)
                        <div class="blog_list_card mb-24">
                            <div class="blog_list_card_img_block">
                                <img src="{{ \App\Support\Media::url($item->image, 'frontend/assets/media/blog/bl-1.png') }}" alt="{{ $item->title }}">
                            </div>
                            <div class="blog_card_text_block">
                                <div>
                                    <p class="date mb-24">{{ $item->date }}</p>
                                    <h4 class="mb-8"><a class="blog_title" href="{{ route('blog.detail', $item->id) }}">{{ $item->title }}</a></h4>
                                    <p>{{ Str::limit($item->description, 120) }}</p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="author">
                                        <img src="{{ \App\Support\Media::url($item->author_image, 'frontend/assets/media/users/u-1.png') }}" alt="{{ $item->author_name }}">
                                        <h6 class="dark-gray">{{ $item->author_name }}</h6>
                                    </div>
                                    <a href="{{ route('blog.detail', $item->id) }}" class="h6 color-primary educate_link_btn">Read More<i class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-center">No blogs found.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>

@endsection
