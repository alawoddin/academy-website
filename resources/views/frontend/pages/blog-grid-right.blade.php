@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Blog Grid'])

        <section class="py-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            @forelse ($blogs as $item)
                            <div class="col-md-6">
                                @include('frontend.pages.partials.blog-card')
                            </div>
                            @empty
                            <div class="col-12">
                                <p class="text-center">No blogs found.</p>
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
