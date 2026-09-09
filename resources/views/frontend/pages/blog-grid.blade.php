@extends('frontend.dashboard')
@section('frontend')

        @include('frontend.pages.partials.page-banner', ['title' => 'Blog Grid'])

        <section class="py-60">
            <div class="container">
                <div class="filter_row">
                    <div class="right_block">
                        <h6 class="dark-gray">Showing {{ $blogs->count() }} results</h6>
                    </div>
                </div>
                <div class="row">
                    @forelse ($blogs as $item)
                    <div class="col-lg-4 col-md-6">
                        @include('frontend.pages.partials.blog-card')
                    </div>
                    @empty
                    <div class="col-12">
                        <p class="text-center">No blogs found.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

@endsection
