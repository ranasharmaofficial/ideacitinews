@extends('frontend.layouts.master')
@section('title')
    {{ $cat_details->ename }} - {{ env('APP_NAME') }}
@endsection

@section('meta_tags')
    {{-- @if ($page)
    <meta name="title" content="{{$page->meta_title}}">
    <meta name="keywords" content="{{$page->meta_tag}}">
    <meta name="description" content="{{$page->meta_description}}">
    @endif --}}
@endsection

@section('content')
    <section class="main-content category-layout-1 pt-0">
        <div class="container">
            <div class="row ts-gutter-30">
                <div class="col-lg-8">

                    <div class="row">
                        <div class="col-12">
                            {{-- <h2 class="block-title">
                                <span class="title-angle-shap"> Category : Travel </span>
                            </h2> --}}

                            <div class="post-block-style">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="images/news/lifestyle/image1.jpg" alt="">
                                    </a>
                                    <div class="grid-cat">
                                        <a class="post-cat fashion" href="#">Fashion</a>
                                        <a class="post-cat lifestyle" href="#">Lifestyle</a>
                                    </div>
                                </div>

                                {{-- <div class="post-content">
                                    <h2 class="post-title title-lg">
                                        <a href="#">Nancy Zhang a Chinese busy woman and social media learn more</a>
                                    </h2>
                                    <div class="post-meta mb-7">
                                        <span class="post-author"><i class="fa fa-user"></i> John Doe</span>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
                                        <span class="view"><i class="icon icon-fire"></i> 354k</span>
                                    </div>
                                    <p>The market won’t stop actress and singer Jennifer Lopez from expanding her property
                                        collection Lopez has reportedly added to her real estate holdings an eight-plus acre
                                        estate in Bel-Air anchored by a multi-level mansion. The property, complete with a
                                        30-seat screening room.</p>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="gap-30"></div>
                    <div class="row ts-gutter-10">
                        @if ($cat_details)
                            @foreach ($news_list as $key => $news)
                                <div class="col-md-6">
                                    <div class="post-block-style">
                                        <div class="post-thumb">
                                            <a href="{{ url('news/'.$news->slug) }}">
                                                <img class="" src="{{ static_asset('assets/assets_admin/images/news/' . $news->image) }}" height="200px" width="auto" alt="">
                                            </a>
                                            <div class="grid-cat">
                                                <a class="post-cat health" href="{{ url('news/'.$news->slug) }}">{{ $cat_details->ename }}</a>
                                            </div>
                                        </div>

                                        <div class="post-content">
                                            <h2 class="post-title title-md">
                                                <a href="{{ url('news/'.$news->slug) }}">{{ $news->title }}</a>
                                            </h2>
                                            <div class="post-meta mb-7">
                                                <span class="post-author"><i class="fa fa-user"></i>
                                                    {{ $news->published_by }}</span>
                                                <span class="post-date"><i class="fa fa-clock-o"></i>
                                                    {{ $news->created_at }}</span>
                                            </div>
                                            <p>{{ $news->description }}</p>
                                        </div><!-- Post content end -->
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        {{-- <div class="col-md-6">
                            <div class="post-block-style">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="images/news/travel/image3.png" alt="">
                                    </a>
                                    <div class="grid-cat">
                                        <a class="post-cat health" href="#">Health</a>
                                    </div>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title title-md">
                                        <a href="#">Ratcliffe to be Director of nation intelligence Trump ignored</a>
                                    </h2>
                                    <div class="post-meta mb-7">
                                        <span class="post-author"><i class="fa fa-user"></i> John Doe</span>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
                                    </div>
                                    <p>The market won’t stop actress and singer Jennifer Lopez from expanding her property
                                        collection Lopez has reportedly added to her real.</p>
                                </div><!-- Post content end -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-block-style">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img class="img-fluid" src="images/news/fashion/image4.png" alt="">
                                    </a>
                                    <div class="grid-cat">
                                        <a class="post-cat health" href="#">Health</a>
                                    </div>
                                </div>

                                <div class="post-content">
                                    <h2 class="post-title title-md">
                                        <a href="#">Ratcliffe to be Director of nation intelligence Trump ignored</a>
                                    </h2>
                                    <div class="post-meta mb-7">
                                        <span class="post-author"><i class="fa fa-user"></i> John Doe</span>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 29 July, 2020</span>
                                    </div>
                                    <p>The market won’t stop actress and singer Jennifer Lopez from expanding her property
                                        collection Lopez has reportedly added to her real.</p>
                                </div><!-- Post content end -->
                            </div>
                        </div> --}}
                    </div><!-- row end -->
                    <div class="gap-30 d-none d-md-block"></div>
                    <div class="row">
                        <div class="col-12">
                            <ul class="ts-pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#" class="active">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- col-lg-8 -->
                <div class="col-lg-4 mt-4">
                    <div class="sidebar">
                        <div class="sidebar-widget social-widget">
                            <h2 class="block-title">
                                <span class="title-angle-shap"> Social</span>
                            </h2>
                            <div class="sidebar-social">
                                <ul class="ts-social-list">
                                    <li class="ts-facebook">
                                        <a href="#">
                                            <i class="tsicon fa fa-facebook"></i>
                                            <div class="count">
                                                <b>12.5 k </b>
                                                <span>Likes</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ts-twitter">
                                        <a href="#">
                                            <i class="tsicon fa fa-twitter"></i>
                                            <div class="count">
                                                <b>12.5 k </b>
                                                <span>Follwers</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ts-youtube">
                                        <a href="#">
                                            <i class="tsicon fa fa-youtube-play"></i>
                                            <div class="count">
                                                <b>28 k </b>
                                                <span>Subscribers</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ts-rss">
                                        <a href="#">
                                            <i class="tsicon fa fa-rss"></i>
                                            <div class="count">
                                                <b>12.5 k </b>
                                                <span>Follwers</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ts-vk">
                                        <a href="#">
                                            <i class="tsicon fa fa-vk"></i>
                                            <div class="count">
                                                <b>35 k </b>
                                                <span>Subscribers</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="ts-linkedin">
                                        <a href="#">
                                            <i class="tsicon fa fa-linkedin"></i>
                                            <div class="count">
                                                <b>15 k </b>
                                                <span>Followers</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul><!-- social list -->
                            </div>
                        </div><!-- widget end -->

                        <div class="sidebar-widget ads-widget mt-20">
                            <div class="ads-image">
                                <a href="#">
                                    <img class="img-fluid" src="images/banner-image/image2.png" alt="">
                                </a>
                            </div>
                        </div><!-- widget end -->

                        <div class="sidebar-widget featured-tab post-tab mb-20">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link animated active fadeIn" href="#post_tab_a" data-toggle="tab">
                                        <span class="tab-head">
                                            <span class="tab-text-title">Recent</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link animated fadeIn" href="#post_tab_b" data-toggle="tab">
                                        <span class="tab-head">
                                            <span class="tab-text-title">Popular</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link animated fadeIn" href="#post_tab_c" data-toggle="tab">
                                        <span class="tab-head">
                                            <span class="tab-text-title">Comments</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="gap-50 d-none d-md-block"></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content">
                                        <div class="tab-pane active animated fadeInRight" id="post_tab_a">
                                            <div class="list-post-block">
                                                <ul class="list-post">
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/fashion/image3.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 1</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat tech-color" href="#">Tech</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">House last week that move would
                                                                        Inject</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 1 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/lifestyle/image3.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 2</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat travel-color"
                                                                        href="#">Travel</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Zhang social media pop also known
                                                                        innocent</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 2 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/health/image2.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 3</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat health-color"
                                                                        href="#">Health</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Jennifer Lopez expand her property
                                                                        collection</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 3 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/health/image1.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 4</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat sports-color"
                                                                        href="#">Sports</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Santino loganne legan an year old
                                                                        resident</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 3 end -->
                                                </ul><!-- List post end -->
                                            </div>
                                        </div><!-- Tab pane 1 end -->
                                        <div class="tab-pane animated fadeInRight" id="post_tab_b">
                                            <div class="list-post-block">
                                                <ul class="list-post">
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/lifestyle/image3.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 5</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat travel-color"
                                                                        href="#">Travel</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Zhang social media pop also known
                                                                        innocent</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 1 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/fashion/image3.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 3</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat tech-color" href="#">Tech</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">House last week that move would
                                                                        Inject</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 2 end -->

                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/health/image1.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 1</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat sports-color"
                                                                        href="#">Sports</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Santino loganne legan an year old
                                                                        resident</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 3 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/health/image2.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 1</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat health-color"
                                                                        href="#">Health</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Jennifer Lopez expand her property
                                                                        collection</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 4 end -->
                                                </ul><!-- List post end -->
                                            </div>
                                        </div><!-- Tab pane 2 end -->
                                        <div class="tab-pane animated fadeInRight" id="post_tab_c">
                                            <div class="list-post-block">
                                                <ul class="list-post">
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/fashion/image3.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 1</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat tech-color" href="#">Tech</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">House last week that move would
                                                                        Inject</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 1 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/lifestyle/image3.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 2</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat travel-color"
                                                                        href="#">Travel</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Zhang social media pop also known
                                                                        innocent</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 2 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/health/image2.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 5</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat health-color"
                                                                        href="#">Health</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Jennifer Lopez expand her property
                                                                        collection</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 3 end -->
                                                    <li>
                                                        <div class="post-block-style media">
                                                            <div class="post-thumb">
                                                                <a href="#">
                                                                    <img class="img-fluid"
                                                                        src="images/news/health/image1.png"
                                                                        alt="">
                                                                </a>
                                                                <span class="tab-post-count"> 1</span>
                                                            </div><!-- Post thumb end -->

                                                            <div class="post-content media-body">
                                                                <div class="grid-category">
                                                                    <a class="post-cat sports-color"
                                                                        href="#">Sports</a>
                                                                </div>
                                                                <h2 class="post-title">
                                                                    <a href="#">Santino loganne legan an year old
                                                                        resident</a>
                                                                </h2>
                                                                <div class="post-meta mb-7">
                                                                    <span class="post-date"><i class="fa fa-clock-o"></i>
                                                                        29 July, 2020</span>
                                                                </div>
                                                            </div><!-- Post content end -->
                                                        </div><!-- Post block style end -->
                                                    </li><!-- Li 3 end -->
                                                </ul><!-- List post end -->
                                            </div>
                                        </div><!-- Tab pane 2 end -->
                                    </div><!-- tab content -->
                                </div>
                            </div>
                        </div><!-- widget end -->

                        <div class="sidebar-widget">
                            <div class="ts-category">
                                <ul class="ts-category-list" id="callingSideCategory">
                                    <li>
                                        <a href="#"
                                            style="background-image: url(images/news/category/category1.png)">
                                            <span> Health </span>
                                            <span class="bar"></span>
                                            <span class="category-count">95</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            style="background-image: url(images/news/category/category3.png)">
                                            <span> Sports </span>
                                            <span class="bar"></span>
                                            <span class="category-count">103</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- widget end -->

                    </div>
                </div><!-- sidebar col end -->
            </div><!-- row end -->
        </div><!-- container end -->
    </section><!-- category-layout end -->

    <!-- ad banner start-->
    <div class="newsletter-area">
        <div class="container">
            <div class="row ts-gutter-30 justify-content-center align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="footer-loto">
                        <a href="#">
                            <img src="images/logos/logo-light.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-5 col-md-6">
                    <div class="footer-newsletter">
                        <form action="#" method="post">
                            <div class="email-form-group">
                                <i class="news-icon fa fa-paper-plane" aria-hidden="true"></i>
                                <input type="email" name="EMAIL" class="newsletter-email" placeholder="Your email"
                                    required="">
                                <input type="submit" class="newsletter-submit" value="Subscribe">
                            </div>

                        </form>
                    </div>
                </div>
                <!-- col end -->
            </div>
            <!-- row  end -->
        </div>
        <!-- container end -->
    </div>


    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            // let callingNews = (categorySlug) => {
            //     $.ajax({
            //         type: "GET",
            //         url: `{{ url('categories') }}/${categorySlug}`,
            //         success: function(response) {
            //             let table = $("#callingNews");
            //             table.empty();
            //             let data = response.data;

            //             // Update appointment count
            //             let len = data.length;
            //             $("#counting").html(len);

            //             data.forEach((data) => {
            //                 const createdAt = new Date(data.news.created_at);
            //                 const formattedDate = createdAt.toLocaleString('en-IN', {
            //                     day: 'numeric',
            //                     month: 'long',
            //                     year: 'numeric',
            //                     hour: '2-digit',
            //                     minute: '2-digit',
            //                     second: '2-digit',                       
            //                     hour12: true
            //                 });

            //                 table.append(`
        //         <div class="col-md-6">
        //             <div class="post-block-style">
        //                 <div class="post-thumb">
        //                     <a href="#">
        //                         <img class="img-fluid" src="{{ static_asset('assets/assets_admin/images/news/${data.news.image}') }}" alt="">
        //                     </a>
        //                     <div class="grid-cat">
        //                         <a class="post-cat health" href="#">Health</a>
        //                     </div>
        //                 </div>
        //                 <div class="post-content">
        //                     <h2 class="post-title title-md">
        //                         <a href="#">${data.news.title}</a>
        //                     </h2>
        //                     <div class="post-meta mb-7">
        //                         <span class="post-author"><i class="fa fa-user"></i>${data.news.published_by}</span>
        //                         <span class="post-date"><i class="fa fa-clock-o"></i>${formattedDate}</span>
        //                     </div>
        //                     <p>${data.news.description}</p>
        //                 </div>
        //             </div>
        //         </div>
        //     `);
            //             });
            //         },
            //         error: function(xhr, status, error) {
            //             console.error('Error:', error);
            //         }
            //     });
            // };

            // callingNews('blog');


            // Calling Side category

            let callingCategory = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('categories.name') }}",
                    success: function(response) {
                        let table = $("#callingSideCategory");
                        table.empty();
                        let data = response.data;
                        data.forEach((data) => {
                            let countTotalNews = data.news_count;                            
                            table.append(`
									<li>
                                        <a href="{{ url('category') }}/${data.slug}"
                                            style="background-image: url({{ static_asset('assets/assets_admin/images/category/${data.image}') }})">
                                            <span>${data.ename}</span>
                                            <span class="bar"></span>
                                            <span class="category-count">${countTotalNews}</span>
                                        </a>
                                    </li>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingCategory();

        });
    </script>
@endsection
