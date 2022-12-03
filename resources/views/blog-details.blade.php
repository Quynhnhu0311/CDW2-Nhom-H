@extends('layout')
@section('content')
@foreach($blog_detail as $row => $data)
    <!-- Blog Details Hero begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>{{$data->blog_title}}</h2>
                        <ul>
                            {{date_format(new DateTime($data->created_at),"d-m-Y") }}
                            <!-- <li>By Deercreative</li>
                            <li>February 21, 2019</li>
                            <li>8 Comments</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="{{ asset('./img/blog/'.$data->blog_img) }}"  alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <span>share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog__details__text">
                            <p>{{$data->blog_description}}</p>
                        </div>
                        <div class="blog__details__comment">
                            <h4>Leave A Comment</h4>
                            <form action="{{ url('comment-blog') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}   
                                <div class="row">
                                    @foreach($blog_detail as $row => $data)
                                    <input type="hidden" name="id_blog" value="{{ $data->blog_id }}">
                                    @endforeach
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="name_comment_blog" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="email_comment_blog" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <textarea name="content_comment_blog" placeholder="Comment"></textarea>
                                        <button type="submit" class="site-btn">Post Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @foreach($data->commentblog as $blog_comment)
                        <div class="show-comment-blog">
                            <div class="avatar">
                                <img src="{{ asset ('img/avatar.jpg') }}" alt="">
                            </div>
                            <div>
                                <h2>{{ $blog_comment->name_comment_blog}}</h2>
                                <p>{{ $blog_comment->comment_content_blog }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- Blog Details Section End -->

    <!-- Category Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Category Blog</h3>
                </div>
            </div>
            <div class="row">
                @foreach($category_blog as $category)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{ asset('./img/blog/'.$category->blog_img) }}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt="">{{ $category->created_at }}</span>
                            <h5>{{ $category->blog_title }}</h5>
                            <a href="/blog-detail/{{$category->blog_id}}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Category Section End -->
@endsection
