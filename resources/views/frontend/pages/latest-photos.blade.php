@extends('frontend.layouts.master')
@section('title') Latest Photos @endsection

@section('meta_tags')
	<meta name="title" content="Latest Photos">
    <meta name="keywords" content="Latest Photos">
    <meta name="description" content="Latest Photos">
@endsection

@section('content')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
        data-background="{{ static_asset('assets/assets_web/images/header1.jpg') }}">

    </div>
    <!-- breadcrumb area end -->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Gallery</a></li>
                <li class="breadcrumb-item active" aria-current="page">Latest Photos</li>
            </ol>
        </nav>
    </div>
    <!-- about area start -->
    <div class="tp-event-area pt-40 pb-90 p-relative grey-bg-2">
     <div class="container">
        <div class="tp-event-title-wrap mb-40">
           <div class="row justify-content-center">
              <div class="col-xl-8">
                 <div class="tp-event-title-box text-center">
                    <h4 class="tp-section-title">Latest Photos</h4>
                 </div>
              </div>
           </div>
        </div>
        <div class="row">
		      @if($latest_photos)
                @foreach ($latest_photos as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="tp-event-item text-center">
                        <div class="tp-event-thumb fix">
                            <img src="{{ static_asset($item->image) }}" alt="Latest Photos">
                        </div>
                        <div class="tp-event-content-wrap">
                            <div class="tp-event-content">
                                <div class="tp-event-meta">
                                    <span><i class="fa-regular fa-clock"></i>{{ date('h:i A', strtotime($item->created_at))}}</span>
                                    <span><i class="fa-light fa-location-dot"></i><a
                                        href="#"
                                        target="_blank">Rohtas</a></span>
                                </div>
                                <h4 class="tp-event-title-sm"><a href="#">{{ $item->english_title }} </a></h4>
                            </div>
                            <div class="tp-event-link">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
              @endif




        </div>
     </div>
  </div>
</main>

@endsection
