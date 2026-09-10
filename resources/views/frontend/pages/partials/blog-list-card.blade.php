<div class="listing-blog-row">
    <div class="listing-blog-row__image">
        <img src="{{ \App\Support\Media::url($item->image, 'frontend/assets/media/blog/bl-1.png') }}" alt="{{ $item->title }}">
    </div>
    <div class="listing-blog-row__body">
        <span class="date">{{ $item->date }}</span>
        <h4 class="mb-8"><a href="{{ route('blog.detail', $item->id) }}">{{ $item->title }}</a></h4>
        <p>{{ Str::limit($item->description, 140) }}</p>
        <div class="listing-blog-card__footer">
            <div class="listing-blog-card__author">
                <img src="{{ \App\Support\Media::url($item->author_image, 'frontend/assets/media/users/u-1.png') }}" alt="{{ $item->author_name }}">
                <h6>{{ $item->author_name }}</h6>
            </div>
            <a href="{{ route('blog.detail', $item->id) }}" class="h6 color-primary educate_link_btn">Read More<i class="far fa-chevron-right"></i></a>
        </div>
    </div>
</div>
