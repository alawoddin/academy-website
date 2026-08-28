@extends('frontend.dashboard')
@section('frontend')

<!-- Page Title Banner Start -->
        <section class="page_title_banner">
            <div class="container">
                <div class="content">
                    <div class="title">
                        <h1>Blog list</h1>
                        <img src="{{ asset('frontend/assets/media/shapes/tag-2.png') }}" alt="" class="tag">
                    </div>
                    <div class="educate-tilt"
                        data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 2, "speed": 700, "scale": 1 }'>
                        <img src="{{ asset('frontend/assets/media/resources/page_title.png') }}" alt="" class="main_img">
                    </div>
                    <img src="{{ asset('frontend/assets/media/shapes/circle-lines-2.png') }}" alt="" class="circle_vector">
                </div>
            </div>
        </section>
        <!-- Page Title Banner End -->

        <!-- Blogs Area Start -->
        <section class="py-60">
            <div class="container">
                <div class="row">
                    <!-- Left Sidebar -->
                    <div class="col-lg-4 mb-48 mb-lg-0">
                        <div class="sidebar">
                            <!-- Search Bar -->
                            <div class="sidebar_block mb-32">
                                <form action="#" class="search_bar">
                                    <button type="submit"><i class="fal fa-search"></i></button>
                                    <input type="search" class="form-control" placeholder="Search here">
                                </form>
                            </div>
                            <!-- Tags  -->
                            <div class="sidebar_block mb-32">
                                <h5 class="mb-16">Tags</h5>
                                <div class="tags">
                                    <span>#education</span><span>#onlineclass</span><span>#learning</span><span>#latest</span><span>#teachers</span><span>#literature</span><span>#educator</span><span>#edtech</span><span>#studyabroad</span>
                                </div>
                            </div>
                            <!-- Categories -->
                            <div class="sidebar_block mb-32">
                                <h5 class="mb-16">Categories</h5>
                                <div class="categories_tags">
                                    <a href="#">Online Learning</a><a href="#">Student Life</a><a href="#">Learning
                                        Methods</a><a href="#">K-12 Education</a><a href="#">Career Guidance</a><a
                                        href="#">Educational Policy</a>
                                </div>
                            </div>
                            <!-- Popular Blogs -->
                            <div class="sidebar_block">
                                <h5 class="mb-16">Popular Blogs</h5>
                                <!-- Blog post -->
                                <a href="{{ route('blog.detail') }}" class="sidebar_blog_card mb-24">
                                    <div class="img_block">
                                        <img src="{{ asset('frontend/assets/media/blog/sb.png') }}" alt="">
                                    </div>
                                    <div>
                                        <span class="h6 blog_title mb-8">The Power of Lifelong Learning: Why It
                                            Matters?</span>
                                        <span class="educate_link_btn color-primary h6">Read More<i
                                                class="far fa-chevron-right"></i></span>
                                    </div>
                                </a>
                                <!-- Blog post -->
                                <a href="{{ route('blog.detail') }}" class="sidebar_blog_card mb-24">
                                    <div class="img_block">
                                        <img src="{{ asset('frontend/assets/media/blog/sb-2.png') }}" alt="">
                                    </div>
                                    <div>
                                        <span class="h6 blog_title mb-8">The Art of Effective Note-Taking For
                                            Students</span>
                                        <span class="educate_link_btn color-primary h6">Read More<i
                                                class="far fa-chevron-right"></i></span>
                                    </div>
                                </a>
                                <!-- Blog post -->
                                <a href="{{ route('blog.detail') }}" class="sidebar_blog_card">
                                    <div class="img_block">
                                        <img src="{{ asset('frontend/assets/media/blog/sb-3.png') }}" alt="">
                                    </div>
                                    <div>
                                        <span class="h6 blog_title mb-8">Demystifying Data Science: A Beginner's
                                            Guide</span>
                                        <span class="educate_link_btn color-primary h6">Read More<i
                                                class="far fa-chevron-right"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Blogs Grid  -->
                    <div class="col-lg-8">
                        <div class="blog_list_card mb-24">
                            <div class="blog_list_card_img_block">
                                <img src="{{ asset('frontend/assets/media/blog/bl-1.png') }}" alt="">
                            </div>
                            <div class="blog_card_text_block">
                                <div>
                                    <p class="date mb-24">9 May 2024</p>
                                    <div class="tags mb-16">
                                        <span>#education</span><span>#onlineclass</span><span>#learning</span><span>#education</span>
                                    </div>
                                    <h4 class="mb-8"><a class="blog_title" href="{{ route('blog.detail') }}">Remote Learning Tips:
                                            Thrive in Online Classes</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="author">
                                        <img src="{{ asset('frontend/assets/media/users/u-1.png') }}" alt="">
                                        <h6 class="dark-gray">Michal Clark</h6>
                                    </div>
                                    <a href="{{ route('blog.detail') }}" class="h6 color-primary educate_link_btn">Read More<i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_list_card mb-24">
                            <div class="blog_list_card_img_block">
                                <img src="{{ asset('frontend/assets/media/blog/bl-3.png') }}" alt="">
                            </div>
                            <div class="blog_card_text_block">
                                <div>
                                    <p class="date mb-24">9 May 2024</p>
                                    <div class="tags mb-16">
                                        <span>#education</span><span>#onlineclass</span><span>#learning</span><span>#education</span>
                                    </div>
                                    <h4 class="mb-8"><a class="blog_title" href="{{ route('blog.detail') }}">The Science of
                                            Memory: Technique to Improve
                                        </a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="author">
                                        <img src="{{ asset('frontend/assets/media/users/u-1.png') }}" alt="">
                                        <h6 class="dark-gray">Michal Clark</h6>
                                    </div>
                                    <a href="{{ route('blog.detail') }}" class="h6 color-primary educate_link_btn">Read More<i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_list_card mb-24">
                            <div class="blog_list_card_img_block">
                                <img src="{{ asset('frontend/assets/media/blog/bl-2.png') }}" alt="">
                            </div>
                            <div class="blog_card_text_block">
                                <div>
                                    <p class="date mb-24">9 May 2024</p>
                                    <div class="tags mb-16">
                                        <span>#education</span><span>#onlineclass</span><span>#learning</span><span>#education</span>
                                    </div>
                                    <h4 class="mb-8"><a class="blog_title" href="{{ route('blog.detail') }}">Remote Learning Tips:
                                            Thrive in Online Classes</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur. Non convallis sed id aliquam tempus...
                                    </p>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="author">
                                        <img src="{{ asset('frontend/assets/media/users/u-1.png') }}" alt="">
                                        <h6 class="dark-gray">Michal Clark</h6>
                                    </div>
                                    <a href="{{ route('blog.detail') }}" class="h6 color-primary educate_link_btn">Read More<i
                                            class="far fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link arrow" aria-label="next"><i
                                        class="far fa-chevron-left"></i></a></li>
                            <li class="page-item"><a class="page-link current" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a href="#" class="page-link arrow" aria-label="next"><i
                                        class="far fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blogs Area End -->

@endsection
