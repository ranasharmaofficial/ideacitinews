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
        <svg class="d-none" xmlns="http://www.w3.org/2000/svg">
            <symbol id="enlarge" viewBox="0 0 16 16">
                <path
                    d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z" />
            </symbol>
            <symbol id="exit" viewBox="0 0 16 16">
                <path
                    d="M5.5 0a.5.5 0 0 1 .5.5v4A1.5 1.5 0 0 1 4.5 6h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 10 4.5v-4a.5.5 0 0 1 .5-.5zM0 10.5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 6 11.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zm10 1a1.5 1.5 0 0 1 1.5-1.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4z" />
            </symbol>
        </svg>
        <section class="photo-gallery pt-5 mt-5 pb-5 mb-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 gallery-grid">
						@php
							// dd($gallery_list);
						@endphp
						@foreach($gallery_list as $val)
							<div class="col">
								<a class="gallery-item" href="{{ static_asset('uploads/gallery/'.$val->image) }}">
									<img src="{{ static_asset('uploads/gallery/'.$val->image) }}" class="img-thumbnail" alt="">
								</a>
							</div>
						@endforeach
				 </div>
                <div class="row">
                    <div class="col-lg-12 pt-5">
                        <a href="{{ url('events') }}"><i class="icon-arrow-left"></i> &nbsp; <span
                                style="font-size:24px;">Back</span></a>
                    </div>
                </div>
            </div>
        </section>

@endsection
