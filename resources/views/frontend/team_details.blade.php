@extends('frontend.layouts.master')
@section('title') Our Team @endsection

@section('meta_tags')
	<meta name="title" content="Our Team">
    <meta name="keywords" content="Our Team">
    <meta name="description" content="Our Team">
@endsection

@section('content')

<style>
	.page-header__bg {
    position: relative;
    top: -83px;
    bottom: 0;
    left: 0;
    right: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    z-index: -1;
}
.main-header-two__logo-box {
    position: relative;
    display: block;
    padding: 11.5px 0;
}
.page-header {
    position: relative;
    display: block;
    padding: 200px 0 10px;
    z-index: 1;
}
</style>


    <!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg">
				<img src="{{ static_asset($details->header_image) }}" class="d-none d-sm-block">
					{{--<img src="assets/images/tm11.jpg" class="d-block d-sm-none">--}}
			</div>
		</section>
	<!--Page Header End-->


		<section class="speaker-detail-section mb-5 pb-5">
	        <div class="auto-container">
	            <div class="row">
	                <div class="info-column col-lg-8 col-md-12 col-sm-12">
	                    <h3>Personal Information</h3>
	                    <p align="justify">
						{!! $details->details !!}
						</p>
	                </div>
					<div class="image-column col-lg-4 col-md-12 col-sm-12">
	                    <div class="row">
	                        <!-- Speaker block -->


	                        <div class="details-column col-lg-12 col-md-12 col-sm-12">
	                            <div class="speaker-details">
	                                <h4 class="name"><a href="#">{{ $details->name }}</a></h4>
	                                <span class="designation">{{ $details->designation }}</span>

	                                <ul class="speaker-info-list">
	                                    <li><strong>Expertise:</strong>  {{ $details->expertise }}</li>
	                                    <li><strong>Company:</strong> {{ $details->company }}</li>
	                                    <li><strong>Experience:</strong> {{ $details->experience }}</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
					<div class="col-lg-12 pt-5">
						<a href="{{ url('') }}#team"><i class="icon-arrow-left"></i> &nbsp; <span style="font-size:24px;">Back</span></a>
					</div>
	            </div>


	        </div>
	    </section>
	    <!--End Speker Detail -->

@endsection
