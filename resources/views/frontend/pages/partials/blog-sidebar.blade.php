<div class="sidebar blog-sidebar">
    <div class="sidebar_block mb-24">
        <form action="{{ route('blog') }}" method="GET" class="blog-search">
            <input type="search" name="q" value="{{ request('q') }}" placeholder="Search blogs...">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="sidebar_block">
        <h5 class="mb-16">Popular Blogs</h5>
        @forelse (($popularBlogs ?? collect()) as $popular)
        <a href="{{ route('blog.detail', $popular->id) }}" class="sidebar_blog_card {{ !$loop->last ? 'mb-16' : '' }}">
            <div class="img_block">
                <img src="{{ \App\Support\Media::url($popular->image, 'frontend/assets/media/blog/sb.png') }}" alt="{{ $popular->title }}">
            </div>
            <div>
                <span class="h6 blog_title mb-8">{{ $popular->title }}</span>
                <span class="educate_link_btn color-primary h6">Read More<i class="far fa-chevron-right"></i></span>
            </div>
        </a>
        @empty
        <p class="mb-0">No blogs yet.</p>
        @endforelse
    </div>
</div>
