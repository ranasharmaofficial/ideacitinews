
@extends('frontend.layouts.master')
@section('title') @if($page) {{$page->meta_title}} @endif @endsection

@section('meta_tags')
    {{-- @if($page)
    <meta name="title" content="{{$page->meta_title}}">
    <meta name="keywords" content="{{$page->meta_tag}}">
    <meta name="description" content="{{$page->meta_description}}">
    @endif --}}

@endsection

@section('content')

<div class="space-bottom">
    <div class="container-full-1">
        <div class="row th-carousel slider-shadow" id="blog-slide5" data-slide-show="3" data-ml-slide-show="2" data-lg-slide-show="2" data-md-slide-show="1" data-sm-slide-show="1">
            <div class="col-md-6 col-xxl-4">
                <div class="blog-style9">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_10_1.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Boxing</a>
                        <h3 class="box-title-24">
                            <a class="hover-line" href="blog-details.html">Boxing: Strength skill triumph Find your greatness.</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>29 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="blog-style9">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_10_2.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Paragliding</a>
                        <h3 class="box-title-24">
                            <a class="hover-line" href="blog-details.html">Find your wings, chase the horizon, and heights with paragliding.</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>24 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="blog-style9">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_10_3.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Sports</a>
                        <h3 class="box-title-24">
                            <a class="hover-line" href="blog-details.html">Bound by the Love of the Game: Tales from the Sports Arena</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>13 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="blog-style9">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_10_4.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Busketball</a>
                        <h3 class="box-title-24">
                            <a class="hover-line" href="blog-details.html">Basketball Bliss Stories from the Hardwood Court Block Area</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>20 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <h2 class="sec-title has-line">Today Post</h2>
                <div class="row gy-4">
                    <div class="col-xl-8">
                        <div class="">
                            <div class="blog-style1 style-big">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_2_4.jpg') }}" alt="blog image" />
                                </div>
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Mountain Sky</a>
                                <h3 class="box-title-30">
                                    <a class="hover-line" href="blog-details.html">Mountain Majesty: Where Fashion Trends and Confidence Soar!</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>21 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="row gy-4">
                            <div class="col-xl-12 col-sm-6 border-blog">
                                <div class="blog-style1">
                                    <div class="blog-img">
                                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_21.jpg') }}" alt="blog image" />
                                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Tennis</a>
                                    </div>
                                    <h3 class="box-title-22">
                                        <a class="hover-line" href="blog-details.html">Leadership for the people by the people</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>13 Mar, 2023</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-sm-6 border-blog">
                                <div class="blog-style1">
                                    <div class="blog-img">
                                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_22.jpg') }}" alt="blog image" />
                                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Kayaking</a>
                                    </div>
                                    <h3 class="box-title-22">
                                        <a class="hover-line" href="blog-details.html">Find serenity, glide with grace kayak your way.</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>17 Mar, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="https://themeforest.net/user/themeholy/portfolio"><img src="{{ static_asset('assets/assets_web/img/ads/ads_2.jpg') }}" alt="ads" class="w-100" /></a>
                </div>
            </div>
            <div class="col-xl-3 mt-35 mt-xl-0">
                <h2 class="sec-title has-line">Popular</h2>
                <div class="dark-theme img-overlay2">
                    <div class="blog-style3">
                        <div class="blog-img">
                            <img src="{{ static_asset('assets/assets_web/img/blog/blog_5_2_7.jpg') }}" alt="blog image" />
                        </div>
                        <div class="blog-content">
                            <a data-theme-color="#4E4BD0" href="blog.html" class="category">Skating</a>
                            <h3 class="box-title-18">
                                <a class="hover-line" href="blog-details.html">Glide in where skating and fashion converge!</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>14 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-overflow">
                    <div class="row gy-4">
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Push boundaries, rewrite the rules of sports</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>30 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Boxing: Test your mettle, triumph with courage.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>18 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Feel the rush, embrace The intensity of hockey.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>10 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Feel the exhilaration, Make memories on skis</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>30 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Push boundaries, rewrite the rules of sports</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>27 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Boxing: Test your mettle, triumph with courage.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>19 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Feel the rush, embrace The intensity of hockey.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>23 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-sm-6 border-blog">
                            <div class="blog-style5">
                                <h3 class="box-title-18">
                                    <a class="hover-line" href="blog-details.html">Feel the exhilaration, Make memories on skis</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>17 Aug, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h2 class="sec-title has-line">Trending news</h2>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slick-prev="#blog-slide5" class="slick-arrow default">
                            <i class="far fa-arrow-left"></i>
                        </button>
                        <button data-slick-next="#blog-slide5" class="slick-arrow default">
                            <i class="far fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row th-carousel" id="blog-slide5" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">
            <div class="col-sm-6 col-xl-4">
                <div class="blog-style6">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_7_1.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Hocky</a>
                        <h3 class="box-title-22">
                            <a class="hover-line" href="blog-details.html">Feel the rush, embrace the intensity of hockey.</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>11 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="blog-style6">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_7_2.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Bike Racing</a>
                        <h3 class="box-title-22">
                            <a class="hover-line" href="blog-details.html">Bike Where speed, freedom, & connection intertwine.</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="blog-style6">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_7_3.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Car Racing</a>
                        <h3 class="box-title-22">
                            <a class="hover-line" href="blog-details.html">Relaxation redefined, your beach resort sanctuary</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>14 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-4">
                <div class="blog-style6">
                    <div class="blog-img">
                        <img src="{{ static_asset('assets/assets_web/img/blog/blog_7_4.jpg') }}" alt="blog image" />
                    </div>
                    <div class="blog-content">
                        <a data-theme-color="#4E4BD0" href="blog.html" class="category">Handball</a>
                        <h3 class="box-title-22">
                            <a class="hover-line" href="blog-details.html">Handball uniting skill and passion in the game</a>
                        </h3>
                        <div class="blog-meta">
                            <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                            <a href="blog.html"><i class="fal fa-calendar-days"></i>11 Mar, 2023</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="">
    <div class="container container-full">
        <div class="row gy-4">
            <div class="col-xxl-6">
                <div class="row gy-4">
                    <div class="col-md-6 dark-theme img-overlay2">
                        <div class="blog-style3">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_5_2_8.jpg') }}" alt="blog image" />
                            </div>
                            <div class="blog-content">
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Skating</a>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Fashion-forward Where Trends & confidence</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>22 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 dark-theme img-overlay2">
                        <div class="blog-style3">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_5_2_9.jpg') }}" alt="blog image" />
                            </div>
                            <div class="blog-content">
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Volleyball</a>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Embrace the bump, spike victory volleyball style.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>16 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 dark-theme img-overlay2">
                        <div class="blog-style3">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_5_2_10.jpg') }}" alt="blog image" />
                            </div>
                            <div class="blog-content">
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Mountain Ski</a>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Carve your path, conquer the snowy slopes.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>30 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 dark-theme img-overlay2">
                        <div class="blog-style3">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_5_2_11.jpg') }}" alt="blog image" />
                            </div>
                            <div class="blog-content">
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Swimming</a>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Tread water, aim high, play with water polo pride</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>24 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="dark-theme img-overlay2">
                    <div class="blog-style3">
                        <div class="blog-img">
                            <img src="{{ static_asset('assets/assets_web/img/blog/blog_5_9.jpg') }}" alt="blog image" />
                        </div>
                        <div class="blog-content">
                            <a data-theme-color="#4E4BD0" href="blog.html" class="category">Handball</a>
                            <h3 class="box-title-30">
                                <a class="hover-line" href="blog-details.html">The art of teamwork, precision, and victory, where Champions emerge.</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>18 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <h2 class="sec-title has-line">Popular News</h2>
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6 border-blog three-column">
                        <div class="blog-style1">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_23.jpg') }}" alt="blog image" />
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Volleyball</a>
                            </div>
                            <h3 class="box-title-22">
                                <a class="hover-line" href="blog-details.html">From serve to block, embrace volleyballs energy.</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>21 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 border-blog three-column">
                        <div class="blog-style1">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_24.jpg') }}" alt="blog image" />
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Hockey</a>
                            </div>
                            <h3 class="box-title-22">
                                <a class="hover-line" href="blog-details.html">Power your way to victory, dominate hockey game.</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>16 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 border-blog three-column">
                        <div class="blog-style1">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_25.jpg') }}" alt="blog image" />
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Swimming</a>
                            </div>
                            <h3 class="box-title-22">
                                <a class="hover-line" href="blog-details.html">Make a splash, play with heart win water polo.</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>23 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 border-blog three-column">
                        <div class="blog-style1">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_26.jpg') }}" alt="blog image" />
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Boxing</a>
                            </div>
                            <h3 class="box-title-22">
                                <a class="hover-line" href="blog-details.html">Boxing Strength skill triumph find your greatness.</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>17 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 border-blog three-column">
                        <div class="blog-style1">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_27.jpg') }}" alt="blog image" />
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Football</a>
                            </div>
                            <h3 class="box-title-22">
                                <a class="hover-line" href="blog-details.html">Where dreams take flight goals rewrite history</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>22 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 border-blog three-column">
                        <div class="blog-style1">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_1_28.jpg') }}" alt="blog image" />
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Basketball</a>
                            </div>
                            <h3 class="box-title-22">
                                <a class="hover-line" href="blog-details.html">Basketball is the canvas for your journey.</a>
                            </h3>
                            <div class="blog-meta">
                                <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                <a href="blog.html"><i class="fal fa-calendar-days"></i>27 Mar, 2023</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-top">
                    <div class="dark-theme img-overlay2">
                        <div class="blog-style3">
                            <div class="blog-img">
                                <img src="{{ static_asset('assets/assets_web/img/blog/blog_5_10.jpg') }}" alt="blog image" />
                            </div>
                            <div class="blog-content">
                                <a data-theme-color="#4E4BD0" href="blog.html" class="category">Hockey</a>
                                <h3 class="box-title-30">
                                    <a class="hover-line" href="blog-details.html">In the pool or open sea, swim your way to victory, and Conquer the waves.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>25 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-top">
                    <h2 class="sec-title has-line">Featured News</h2>
                    <div class="row gy-4">
                        <div class="col-sm-6 border-blog two-column">
                            <div class="blog-style1">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_4_15.jpg') }}" alt="blog image" />
                                    <a data-theme-color="#4E4BD0" href="blog.html" class="category">Swimming</a>
                                </div>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Where boundaries dissolve, and Dreams dive into reality.</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>14 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 border-blog two-column">
                            <div class="blog-style1">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_4_16.jpg') }}" alt="blog image" />
                                    <a data-theme-color="#4E4BD0" href="blog.html" class="category">Paragliding</a>
                                </div>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Leadership for the people by the adventure people</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>28 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 border-blog two-column">
                            <div class="blog-style1">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_4_17.jpg') }}" alt="blog image" />
                                    <a data-theme-color="#4E4BD0" href="blog.html" class="category">Mountain Sky</a>
                                </div>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Mountain skating conquer the peaks, carve your path,</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>22 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 border-blog two-column">
                            <div class="blog-style1">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_4_18.jpg') }}" alt="blog image" />
                                    <a data-theme-color="#4E4BD0" href="blog.html" class="category">Handball</a>
                                </div>
                                <h3 class="box-title-24">
                                    <a class="hover-line" href="blog-details.html">Handball uniting skill and passion in the game</a>
                                </h3>
                                <div class="blog-meta">
                                    <a href="author.html"><i class="far fa-user"></i>By - Tnews</a>
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>29 Mar, 2023</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 mt-35 mt-xl-0 sidebar-wrap mb-10">
                <div class="sidebar-area">
                    <div class="widget">
                        <div class="widget-ads">
                            <a href="https://themeforest.net/user/themeholy/portfolio"><img class="w-100" src="{{ static_asset('assets/assets_web/img/ads/siderbar_ads_2.jpg') }}" alt="ads" /></a>
                        </div>
                    </div>
                    <h2 class="sec-title fs-20 has-line">Popular Category</h2>
                    <div class="widget">
                        <div class="row g-10">
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_1.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_1.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title">
                                        <a href="blog.html">Football</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_2.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_2.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title"><a href="blog.html">Cricket</a></h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_3.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_3.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title"><a href="blog.html">Boxing</a></h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_4.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_4.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title">
                                        <a href="blog.html">Handball</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_5.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_5.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title">
                                        <a href="blog.html">Swimming</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_6.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_6.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title">
                                        <a href="blog.html">Volleyball</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_7.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_7.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title"><a href="blog.html">Tennis</a></h3>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-3 col-6">
                                <div class="category-card" data-bg-src="{{ static_asset('assets/assets_web/img/bg/category_bg_2_8.jpg') }}">
                                    <div class="box-icon">
                                        <img src="{{ static_asset('assets/assets_web/img/icon/category_1_8.svg') }}" alt="Icon" />
                                    </div>
                                    <h3 class="box-title"><a href="blog.html">Running</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="sec-title fs-20 has-line">Most Read</h2>
                    <div class="row gy-4">
                        <div class="col-xl-12 col-md-6 border-blog">
                            <div class="blog-style2">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_3_1.jpg') }}" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#FF9500" href="blog.html" class="category">Politics</a>
                                    <h3 class="box-title-18">
                                        <a class="hover-line" href="blog-details.html">Stay informed, Navigate the world</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>20 Mar, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6 border-blog">
                            <div class="blog-style2">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_3_2.jpg') }}" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#007BFF" href="blog.html" class="category">Travel</a>
                                    <h3 class="box-title-18">
                                        <a class="hover-line" href="blog-details.html">Your beach resort Sanctuary.</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>29 Mar, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6 border-blog">
                            <div class="blog-style2">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_3_3.jpg') }}" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#00D084" href="blog.html" class="category">Life Style</a>
                                    <h3 class="box-title-18">
                                        <a class="hover-line" href="blog-details.html">Style your life news For modern living</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>10 Mar, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6 border-blog">
                            <div class="blog-style2">
                                <div class="blog-img">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/blog_3_4.jpg') }}" alt="blog image" />
                                </div>
                                <div class="blog-content">
                                    <a data-theme-color="#4E4BD0" href="blog.html" class="category">Sports</a>
                                    <h3 class="box-title-18">
                                        <a class="hover-line" href="blog-details.html">Score big with the Latest sports news.</a>
                                    </h3>
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>24 Mar, 2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
