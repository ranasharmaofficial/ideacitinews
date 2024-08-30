@extends('frontend.layouts.master')
@section('title') Our Team @endsection

@section('meta_tags')
	<meta name="title" content="Our Team">
    <meta name="keywords" content="Our Team">
    <meta name="description" content="Our Team">
@endsection

@section('content')
     <!--Page Header Start-->
		<section class="page-header">
			<div class="page-header__bg" style="background-image: url({{ static_asset('assets/assets_web/images/page-header-bg.jpg') }});"></div>
			<div class="container">
				<div class="page-header__inner">
					<h2>Our Team</h2>
					<div class="thm-breadcrumb__box">

					</div>
				</div>
			</div>
		</section>
		<!--Page Header End-->


		 <section class="team-two" id="team">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <div class="team-two__left">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline">Meet</span>
                        </div>
                        <h3 class="section-title__title">Our Minds</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="team-two__right">
                    <div class="row">
						@if(count($team_list)>0)
							@foreach($team_list as $val)
								<!--Team Two Single Start-->
								<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
									<div class="team-two__single">
										<div class="team-two__img-box">
											<div class="team-two__img">
												<img src="{{ static_asset($val->profile_pic) }}" alt="{{ $val->name }}">
											</div>
											<div class="team-two__share-box">
												<div class="team-two__share-btn">
													<a href="{{url('team-details/'.$val->id)}}"><span class="icon-share"></span></a>
												</div>
												<div class="team-two__social">
													<a href="{{ $val->facebook_id }}" target=_blank""><span class="icon-facebook-app-symbol"></span></a>
													<a href="{{ $val->twitter_id }}" target="_blank"><span class="icon-twitter"></span></a>
													<a href="{{ $val->linkedin_id }}" target="_blank"><span class="icon-linkedin"></span></a>
												</div>
											</div>
										</div>
										<div class="team-two__content">
											<h3 class="team-two__title"><a href="{{url('team-details/'.$val->id)}}">{{ $val->name }}</a>
											</h3>
											<p class="team-two__sub-title">{{ $val->designation }}</p>
										</div>
									</div>
								</div>
								<!--Team Two Single End-->
							@endforeach
						@endif
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Three End -->

@endsection
