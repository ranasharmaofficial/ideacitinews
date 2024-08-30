@extends('frontend.layouts.master')
@section('title')
    {{ $post->ename }} - {{ env('APP_NAME') }}
@endsection

@section('meta_tags')
    @if ($post)
        <meta name="title" content="{{ $post->meta_title }}">
        <meta name="keywords" content="{{ $post->meta_tag }}">
        <meta name="description" content="{{ $post->meta_description }}">
    @endif
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li><a href="#">lifestyle</a></li>
                        <li><i class="fa fa-angle-right"></i>Struggling to sell one..</li>
                    </ol>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->
    </div>
    <!-- breadcrumb end -->

    <section class="main-content pt-0">
        <div class="container">
            <div class="row ts-gutter-30">
                <div class="col-lg-8">
                    <div class="single-post">
                        <div class="post-header-area">
                            <h2 class="post-title title-lg">{{ $post->title }}</h2>
                            <ul class="post-meta">
                                <li>
                                    <a href="#" class="post-cat fashion">{{ $post->category->ename }}</a>
                                </li>
                                <li class="post-author">
                                    <a href="#"><img alt=""
                                            src="images/news/author.png"><strong>{{ $post->published_by }}</strong></a>
                                </li>
                                <li><a href="#"><i class="fa fa-clock-o"></i>{{date('d M, Y',strtotime($post->created_at))}}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i>5 Comments</a></li>
                                <li><a href="#" class="view"><i class="icon icon-fire"></i> 354k</a></li>
                                <li><a href="#"><i class="fa fa-eye"></i>{{$post->created_at->diffForHumans();}} read</a></li>
                                <li class="social-share">
                                    <i class="shareicon fa fa-share"></i>
                                    <ul class="social-list">
                                        <li><a data-social="facebook" class="facebook" href="#"
                                                title="The billionaire Philan thropist read to learn more and city"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a data-social="twitter" class="twitter" href="#"
                                                title="The billionaire Philan thropist read to learn more and city"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a data-social="linkedin" class="linkedin" href="#"
                                                title="The billionaire Philan thropist read to learn more and city"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                        <li><a data-social="pinterest" class="pinterest" href="#"
                                                title="The billionaire Philan thropist read to learn more and city"><i
                                                    class="fa fa-pinterest-p"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- post-header-area end -->
                        <div class="post-content-area">
                            <div class="post-media mb-20">
                                <a href="#" class="gallery-popup cboxElement">
                                    <img src="{{ static_asset('assets/assets_admin/images/news/' . $post->image) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            {{-- <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress
                                and singer Jennifer Lopez from expanding her property collection. Lopez has reportedly added
                                to her real estate holdings an eight-plus acre estate in Bel-Air anchored by a multi-level
                                mansion.</p>
                            <p>The property, complete with a 30-seat screening room, a <a href="#"> 100-seat
                                    amphitheater and a swimming pond with sandy beach and outdoor shower,</a> was asking
                                about $40 million, but J. Lo managed to make it hers for $28 million. As the Bronx native
                                acquires a new home in California, she is trying to sell a gated compound.</p> --}}
                            <p>{!! $post->description !!}</p>
                            <blockquote>
                                <p>
                                    I'm thinking I'm back you want a war or you want to just give me a gun everything's got
                                    a price rusty, I guess. You stabbed the Devil in the back how good to see you again
                                </p>
                                <cite><em>Steve Jobs</em></cite>
                            </blockquote>
                            <p>
                                Struggling to sell one multi-million dollar home currently on the market won’t stop actress
                                and singer Jennifer Lopez from expanding her property collection. Lopez has reportedly added
                                to her real estate holdings an eight-plus acre estate in Bel-Air anchored by a multi-level
                                mansion. The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                swimming pond with sandy beach and outdoor shower, was asking about $40 million, but J. Lo
                                managed to make it hers for $28 illion. As the Bronx native acquires a new home in
                                California, she is trying to sell a gated compound.
                            </p>
                            <p>
                                <img class="float-left img-fluid" src="images/news/news-details/left-image.jpg"
                                    alt="">
                            </p>
                            <h3>Ratcliffe to be Director of nation intel</h3>
                            <p>
                                Lo managed to make it hers for $28 million. As the Bronx native acquires a new home in
                                California, she is trying to sell a gated compound in the Golden State. The 17,000
                                square-foot Hidden Hills property with mountain views boasts nine bedrooms, including a
                                master suite with private terrace and an entertainment wing, which includes a 20-seat
                                theater, dance studio and recording studio. China’s youngest female billionaire has unloaded
                                her triplex penthouse in Sydney.
                                according to a listing for the home, recently updated to say it
                            </p>
                            <p>
                                The 17,000 square-foot Hidden Hills property with mountain views boasts nine bedrooms,
                                including a master suite with private terrace and an entertainment wing.
                            </p>
                            <div class="gallery-img clearfix">
                                <a href="images/news/lifestyle/image1.jpg" class="gallery-popup">
                                    <img src="images/news/lifestyle/image1.jpg" alt="">
                                </a>
                                <a href="images/news/lifestyle/image2.png" class="gallery-popup">
                                    <img src="images/news/lifestyle/image2.png" alt="">
                                </a>
                                <a href="images/news/lifestyle/image3.png" class="gallery-popup">
                                    <img src="images/news/lifestyle/image3.png" alt="">
                                </a>
                                <a href="images/news/health/image2.png" class="gallery-popup">
                                    <img src="images/news/health/image2.png" alt="">
                                </a>
                                <a href="images/news/sports/sports02.png" class="gallery-popup">
                                    <img src="images/news/sports/sports02.png" alt="">
                                </a>
                            </div>

                            <p>Following years of white-hot growth, luxury home prices in Sydney declined for the first time
                                in years, slipping 1% between the second quarter and third quarter of 2018, according to the
                                latest report from brokerage Knight Frank.The nearly 6,500-square-foot apartment has
                                sweeping views.</p>
                            <div class="post-video">
                                <img class="img-fluid" src="images/news/fashion/image3.png" alt="">
                                <div class="post-video-content">
                                    <a href="https://www.youtube.com/embed/wJF5NXygL4k?autoplay=1&loop=1"
                                        class="popup cboxElement ts-play-btn">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </a>
                                    <h3>
                                        <a href=""> For the first time the Swiss State Secretart for Economic
                                            indicated that Uber taxi</a>
                                    </h3>
                                </div>
                            </div>
                            <h3>
                                Zhang social media pop star also known innocent gangstar the Chair
                                man of the Intelligence committee house
                            </h3>
                            <p>
                                She is trying to sell a gated compound in the Golden State. The 17,000-square-foot Hidden
                                Hills property with mountain and city views boasts nine bedrooms, including a master suite
                                with private terrace and an entertainment wing, which includes a 20-seat theater
                            </p>
                            <p>
                                <a href="#">
                                    <img class="img-fluid" src="images/banner-image/image3.png" alt="">
                                </a>
                            </p>
                            <h3>Santino loganne legan an year old Gilroy resident last week</h3>
                            <ul>
                                <li>Struggling to sell one multi-million dollar home currently on the market</li>
                                <li>Lopez has reportedly added to her real estate holdings an eight-plus acre</li>
                                <li>The property, complete with a 30-seat screening room, a 100-seat amphit</li>
                                <li>Lo managed to make it hers for $28 million. As the Bronx native acquires</li>
                            </ul>

                            <p>The 17,000-square-foot Hidden Hills property with mountain and city views boasts nine
                                bedrooms, including a master suite with private terrace and an entertainment wing, which
                                includes a 20-seat theater</p>
                        </div><!-- post-content-area end -->
                        <div class="post-footer">
                            <div class="tag-lists">
                                <span>Tags: </span><a href="#">fashion</a>
                            </div><!-- tag lists -->
                            <div class="author-box d-flex">
                                <div class="author-img flex-grow-1">
                                    <img src="images/news/author.png" alt="">
                                </div>
                                <div class="author-info">
                                    <h3>John Doe</h3>
                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop
                                        actress and singer Jennifer Lopez from expanding her property collection. Lopez has
                                        reportedly added to her real estate holdings an eight-plus acre</p>
                                </div>
                            </div><!-- author box -->
                            <div class="post-navigation clearfix">
                                <div class="post-previous float-left">
                                    <a href="#">
                                        <img src="images/news/travel/image3.png" alt="">
                                        <span>Read Previous</span>
                                        <p>
                                            Lopez has reportedly added to her real estate
                                        </p>
                                    </a>
                                </div>
                                <div class="post-next float-right">
                                    <a href="#">
                                        <img src="images/news/tech/tech1.png" alt="">
                                        <span>Read Next</span>
                                        <p>
                                            Bel-Air anchored by a multi-level mansion
                                        </p>
                                    </a>
                                </div>
                            </div><!-- post navigation -->
                            <div class="gap-30"></div>
                            <!-- realted post start -->
                            <div class="related-post">
                                <h2 class="block-title">
                                    <span class="title-angle-shap"> Realted Post</span>
                                </h2>
                                <div class="row">
                                    @foreach ($related_posts as $key => $news)
                                    <div class="col-md-4">
                                        <div class="post-block-style">
                                            <div class="post-thumb">
                                                <a href="{{ url('news/'.$news->slug) }}">
                                                    <img class="img-fluid" src="{{ static_asset('assets/assets_admin/images/news/' . $news->image) }}"
                                                        alt="">
                                                </a>
                                                <div class="grid-cat">
                                                    <a class="post-cat tech" href="#">{{$news->category->ename}}</a>
                                                </div>
                                            </div>

                                            <div class="post-content">
                                                <h2 class="post-title">
                                                    <a href="{{ url('news/'.$news->slug) }}">{{$news->title}}</a>
                                                </h2>
                                                <div class="post-meta mb-7 p-0">
                                                    <span class="post-date"><i class="fa fa-clock-o"></i>{{date('d M, Y',strtotime($post->created_at))}}</span>
                                                </div>
                                            </div><!-- Post content end -->
                                        </div>
                                    </div>
                                    @endforeach
                                </div><!-- row end -->
                            </div>
                            <!-- realted post end -->
                            <div class="gap-30"></div>
                            <!-- comments start -->
                            <div class="comments-area">
                                <h3 class="block-title"><span>03 Comments</span></h3>
                                <ul class="comments-list">
                                    <li>
                                        <div class="comment">
                                            <img class="comment-avatar pull-left" alt=""
                                                src="images/news/user1.png">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">Michelle Aimber</span>
                                                </div>
                                                <div class="comment-content">
                                                    <p>High Life tempor retro Truffaut. Tofu mixtape twee, assumenda quinoa
                                                        flexitarian aesthetic artisan vinyl pug. Chambray et Carles
                                                        Thundercats cardigan actually, magna bicycle rights.</p>
                                                </div>
                                                <div class="text-left">
                                                    <a class="comment-reply" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div><!-- Comments end -->

                                        <ul class="comments-reply">
                                            <li>
                                                <div class="comment">
                                                    <img class="comment-avatar pull-left" alt=""
                                                        src="images/news/user2.png">
                                                    <div class="comment-body">
                                                        <div class="meta-data">
                                                            <span class="comment-author">Genelia Dusteen</span>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Farm-to-table selfies labore, leggings cupidatat sunt
                                                                taxidermy umami fanny pack typewriter hoodie art party
                                                                voluptate cardigan banjo.</p>
                                                        </div>
                                                        <div class="text-left">
                                                            <a class="comment-reply" href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Comments end -->
                                            </li>
                                        </ul><!-- comments-reply end -->
                                        <div class="comment last">
                                            <img class="comment-avatar pull-left" alt=""
                                                src="images/news/user1.png">
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author">Michelle Aimber</span>
                                                </div>
                                                <div class="comment-content">
                                                    <p>VHS Wes Anderson Banksy food truck vero. Farm-to-table selfies
                                                        labore, leggings cupidatat sunt taxidermy umami fanny pack
                                                        typewriter hoodie art party voluptate cardigan banjo.</p>
                                                </div>
                                                <div class="text-left">
                                                    <a class="comment-reply" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div><!-- Comments end -->
                                    </li><!-- Comments-list li end -->
                                </ul><!-- Comments-list ul end -->
                            </div><!-- comment end -->
                            <!-- comment form -->
                            <div class="gap-50 d-none d-md-block"></div>
                            <div class="comments-form">
                                <h3 class="title-normal">Leave a comment</h3>
                                <form method="POST" action="#">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea class="form-control input-msg required-field" id="message" placeholder="Your Comment" rows="10"
                                                    required=""></textarea>
                                            </div>
                                        </div><!-- Col end -->

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" name="name" id="name"
                                                    placeholder="Your Name" type="text" required="">
                                            </div>
                                        </div><!-- Col end -->

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" name="email" id="email"
                                                    placeholder="Your Email" type="email" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Your Website" type="text"
                                                    required="">
                                            </div>
                                        </div>
                                    </div><!-- Form row end -->
                                    <div class="clearfix">
                                        <button class="comments-btn btn btn-primary" type="submit">Post Comment</button>
                                    </div>
                                </form><!-- Form end -->
                            </div><!-- comment form end -->
                        </div>
                    </div><!-- single-post end -->
                </div><!-- col-lg-8 -->
                <div class="col-lg-4">
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
                                            <span class="tab-text-title">Recent Post</span>
                                        </span>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
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
                                </li> --}}
                            </ul>
                            <div class="gap-50 d-none d-md-block"></div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content">
                                        <div class="tab-pane active animated fadeInRight" id="post_tab_a">
                                            <div class="list-post-block">
                                                <ul class="list-post">
                                                        @foreach ($recent_posts as $key => $news)
                                                            <li>
                                                                <div class="post-block-style media">
                                                                    <div class="post-thumb">
                                                                        <a href="#">
                                                                            <img class="img-fluid"
                                                                                src="{{ static_asset('assets/assets_admin/images/news/' . $news->image) }}"
                                                                                alt="">
                                                                        </a>
                                                                        <span class="tab-post-count">{{$key + 1}}</span>
                                                                    </div><!-- Post thumb end -->

                                                                    <div class="post-content media-body">
                                                                        <div class="grid-category">
                                                                            <a class="post-cat tech-color"
                                                                                href="#">{{$news->category->ename}}</a>
                                                                        </div>
                                                                        <h2 class="post-title">
                                                                            <a href="#">{{$news->title}}</a>
                                                                        </h2>
                                                                        <div class="post-meta mb-7">
                                                                            <span class="post-date"><i
                                                                                    class="fa fa-clock-o"></i>
                                                                                {{date('d M, Y',strtotime($news->created_at))}}</span>
                                                                        </div>
                                                                    </div><!-- Post content end -->
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    {{-- <li>
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
                                                    </li><!-- Li 3 end --> --}}
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
                                    {{-- <li>
                                        <a href="#"
                                            style="background-image: url(images/news/category/category1.png)">
                                            <span> Health </span>
                                            <span class="bar"></span>
                                            <span class="category-count">95</span>
                                        </a>
                                    </li> --}}
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
                                    required>
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
    <!-- ad banner end-->

    <script>
        $(document).ready(function() {
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
