@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Our Blog'])

        <section class="blog-listing py-60">
            <div class="container">
                <div class="blog-listing__intro">
                    <div class="heading">
                        <h6 class="color-primary mb-8">–––– Latest News</h6>
                        <h2>Latest News By Talented <span class="fm-sec">Authors!</span></h2>
                    </div>
                    <div class="blog-listing__count">
                        <i class="fal fa-newspaper"></i>
                        Showing {{ $blogs->count() }} posts
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row g-4">
                            @forelse ($blogs as $item)
                            <div class="col-md-6">
                                @include('frontend.pages.partials.blog-card')
                            </div>
                            @empty
                            <div class="col-12">
                                <div class="blogs-empty">
                                    <h4>No blogs found</h4>
                                    <p>Try another search or check back soon for new posts.</p>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-lg-4 mb-48 mb-lg-0">
                        @include('frontend.pages.partials.blog-sidebar')
                    </div>
                </div>
            </div>
        </section>

@endsection
