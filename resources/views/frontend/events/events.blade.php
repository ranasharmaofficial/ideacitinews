@extends('frontend.layouts.master')
@section('title') Our Events @endsection

@section('meta_tags')
	<meta name="title" content="Our Events">
    <meta name="keywords" content="Our Events">
    <meta name="description" content="Our Events">
@endsection

@section('content')
 <!--Page Header Start-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ static_asset('assets/assets_web/images/page-header-bg.jpg') }});"></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>Events</h2>
        </div>
    </div>
</section>
<!--Page Header End-->


<!-- Blog Two Start -->
<section class="blog-two">
    <div class="blog-two__shape-bg" style="background-image: url({{ static_asset('assets/assets_web/images/blog-two-shape-bg.jpg') }});"></div>
    <div class="container">
        <div class="row">
            @if(!empty($event_category))
                @foreach($event_category as $item)
                    <!-- Blog Two Single Start -->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ static_asset($item->image) }}" alt="">
                            </div>
                            <div class="blog-two__content">
                                <h3 class="blog-two__title"><a href="{{ url('events/'.$item->slug) }}">{{ $item->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- Blog Two Single End -->
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- Blog Two End -->

@endsection
