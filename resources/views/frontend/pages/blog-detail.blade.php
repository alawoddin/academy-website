@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Blog Detail'])

        <section class="blog-listing py-60">
            <div class="container">
                @if ($blog)
                <article class="blog-article">
                    <div class="blog-article__image">
                        <img src="{{ \App\Support\Media::url($blog->image, 'frontend/assets/media/blog/bd.png') }}" alt="{{ $blog->title }}">
                    </div>
                    <div class="blog-article__body">
                        <div class="blog-article__meta">
                            <div class="author_block">
                                <img src="{{ \App\Support\Media::url($blog->author_image, 'frontend/assets/media/users/u-7.png') }}" alt="{{ $blog->author_name }}">
                                <div>
                                    <p class="mb-4p">Author</p>
                                    <h6 class="mb-0">{{ $blog->author_name }}</h6>
                                </div>
                            </div>
                            <div>
                                <p class="mb-4p">Published Date</p>
                                <h6 class="mb-0">{{ $blog->date }}</h6>
                            </div>
                        </div>
                        <h2 class="mb-16">{{ $blog->title }}</h2>
                        <p>{{ $blog->description }}</p>
                    </div>
                </article>
                @else
                <div class="blogs-empty">
                    <h4>No blog found</h4>
                    <p>The post you are looking for is not available.</p>
                </div>
                @endif
            </div>
        </section>

@endsection
