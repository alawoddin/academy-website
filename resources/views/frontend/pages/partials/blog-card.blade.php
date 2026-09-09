<div class="blog_card mb-24">
    <div class="blog_card_img_block">
        <img src="{{ \App\Support\Media::url($item->image, 'frontend/assets/media/blog/b-1.png') }}" alt="{{ $item->title }}">
        <p class="date">{{ $item->date }}</p>
    </div>
    <div class="blog_card_text_block">
        <h5 class="mb-8"><a class="blog_title" href="{{ route('blog.detail', $item->id) }}">{{ $item->title }}</a></h5>
        <p class="mb-24">{{ Str::limit($item->description, 90) }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="author">
                <img src="{{ \App\Support\Media::url($item->author_image, 'frontend/assets/media/users/u-1.png') }}" alt="{{ $item->author_name }}">
                <h6 class="dark-gray">{{ $item->author_name }}</h6>
            </div>
            <a href="{{ route('blog.detail', $item->id) }}" class="h6 color-primary educate_link_btn">Read More<i class="far fa-chevron-right"></i></a>
        </div>
    </div>
</div>
