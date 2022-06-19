@extends('User.layout')
@section('content')
<!-- header -->
<header class="flex header-sm">
    <div class="container">
        <div class="header-title">
            <h1>Blog</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus rerum maxime enim odit illum in molestias beatae doloremque, ratione optio.</p>
        </div>
    </div>
</header>
<!-- header -->

<!-- blog section -->
<section id="blog" class="py-4">
    <div class="container">
        <div class="title-wrap">
            <h2 class="sm-title">read these blog for information</h2>
            <h3 class="lg-title">recent blog</h3>
        </div>

        <div class="blog-row">
            
            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-1.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>

            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-2.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>

            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-3.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>

            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-4.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>

            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-5.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>

            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-6.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>

            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-7.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>

            <div class="blog-item my-2 shadow">
                <div class="blog-item-top">
                    <img src="{{asset('frontend/khanh/template/images/blog-8.jpg')}}" alt="blog">
                    <span class="blog-date">oct 28, 2021</span>
                </div>
                <div class="blog-item-bottom">
                    <span>travel | john doe</span>
                    <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of blog section -->

@endsection