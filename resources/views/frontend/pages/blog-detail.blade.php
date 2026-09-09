@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Blog Detail'])

        <section class="py-60">
            <div class="container">
                @if ($blog)
                <div class="blog_detail">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about_blog_row mb-24">
                                <div class="author_block">
                                    <img src="{{ \App\Support\Media::url($blog->author_image, 'frontend/assets/media/users/u-7.png') }}" alt="{{ $blog->author_name }}">
                                    <div>
                                        <p class="mb-4p">Author:</p>
                                        <h6>{{ $blog->author_name }}</h6>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-4p">Published Date</p>
                                    <h6>{{ $blog->date }}</h6>
                                </div>
                            </div>
                            <h2 class="mb-16">{{ $blog->title }}</h2>
                            <p class="mb-24">{{ $blog->description }}</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{ \App\Support\Media::url($blog->image, 'frontend/assets/media/blog/bd.png') }}" alt="{{ $blog->title }}" class="br-20 mb-24">
                        </div>
                    </div>
                    <p class="mb-24">{{ $blog->description }}</p>
                </div>
                @else
                <p class="text-center">No blog found.</p>
                @endif
            </div>
        </section>

@endsection
