@extends('frontend.layouts.master')
@section('title') Videos of Assembly @endsection

@section('meta_tags')
	<meta name="title" content="Videos of Assembly">
    <meta name="keywords" content="Videos of Assembly">
    <meta name="description" content="Videos of Assembly">
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
                <li class="breadcrumb-item"><a href="#">Speeches</a></li>
                <li class="breadcrumb-item active" aria-current="page">Videos of Assembly</li>
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
                            <h4 class="tp-section-title">Videos of Assembly</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
				@if($video_list)
					@foreach($video_list as $item)
						<div class="col-xl-4 col-lg-4 col-md-6 mb-30">
							<div class="tp-event-item text-center">
								<iframe width="100%" height="250"
									src="{{ $item->link }}"
									title="YouTube video player" frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									allowfullscreen></iframe>
							</div>
						</div>
					@endforeach
				@endif
                 





            </div>
        </div>
    </div>
</main>

@endsection
