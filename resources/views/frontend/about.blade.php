@extends('frontend.layouts.master')
@section('title') About Us @endsection

@section('meta_tags')
	<meta name="title" content="About Us">
    <meta name="keywords" content="About Us">
    <meta name="description" content="About Us">
@endsection

@section('content')
    @php
	  $skype_id = get_business_single_cache_value('skype', 'footer_setup', 'skype');
	  $contact_email = get_business_single_cache_value('contact_email', 'footer_setup', 'contact_email');
	  $telegram_id = get_business_single_cache_value('telegram', 'footer_setup', 'telegram');
	  $whatsapp_id = get_business_single_cache_value('whatsapp', 'footer_setup', 'whatsapp');
	@endphp
	<section class="page-title-layout1 page-title-light pb-0 bg-overlay bg-parallax">
            <div class="bg-img"><img src="{{ static_asset('assets/assets_web/images/header1.jpg') }}" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <h1 class="pagetitle-heading">About Us</h1>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="breadcrumb-area">
                <div class="container">
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('') }}"><i class="icon-home"></i> <span>Home</span></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('about-us') }}">About Us</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div><!-- /.container -->
            </div><!-- /.breadcrumb-area -->
        </section><!-- /.page-title -->

        <!-- ========================
      About Layout 2
    =========================== -->
        <section class="about-layout2 pt-80 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-8">
                        <div class="about-text mb-30">
                            <div class="about-badge">
                                <div class="about-icon"><i class="icon-beaker"></i></div>
                            </div>
                            <div class="about-text-banner">
                                <div class="heading-layout2">
                                    <h3 class="heading-title mb-0">The company was incorporated on 21st June 2012 as a
                                        private limited company under
                                        the Companies Act, 1956.</h3>
                                </div>
                            </div>
                        </div>
                        <div class="about-img d-flex justify-content-end">
                            <img src="{{ static_asset('assets/assets_web/images/about-img.jpg') }}" alt="about">
                        </div>
                    </div><!-- /.col-12 -->
                    <div class="col-sm-12 col-md-10 col-lg-8 col-xl-4">
                        <div class="about-Text">
                            <p class="mb-30"> We are professionally managed marketing company of
                                Pharmaceuticals
                                products in India. Our operational (Sales & Marketing) domain consists of all generation
                                of
                                medicine, antibiotic, gastroenterology, neutraceutical, analgesic, cardiology, orthopaedic, neurology, nephrology  products
                                and so on.
                            </p>

                            <p class="mb-30 text-justify">We have positioned remarkably as an active mass especially in
                                major districts of Bihar,
                                Jharkhand and Chhatishgarh with our more than 50 vibrant team members of sales and
                                marketing. We are professionally managed Company and is engaged in marketing of
                                more than 35 products in the aforesaid region. </p>
                            <p class="mb-30">We have planned expansion of marketing area in Uttar Pradesh and make our
                                presence
                                in the state of Orissa.</p>
                            <p class="mb-30">Our presence is acknowledged among doctors of Central and North-Eastern
                                Region of
                                India.</p>

                        </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="about-Text">
                        <p class="mb-30 text-justify">Our team members update doctors with on-going changes in medical
                            science through
                            conducting CME (Continued Medical Education). Further, our team member along with
                            doctors organise camps to make society aware through well designed electronic
                            programme on the issues of asthama, AIDS, Diabetics, anaemia etc.</p>

                    </div>
                </div>


            </div><!-- /.row -->
    </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->



    <!-- ========================
     Banner Layout 8
    =========================== -->
    <section class="banner-layout8 bg-primary">
        <div class="top-shape"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xl-5 banner-content">
                    <div class="banner-text">
                        <div class="heading-layout2 heading-light">
                            <h3 class="heading-title">“Adding Value to Care & Cure”</h3>
                            <p class="heading-desc font-weight-bold mb-40">Our mission is to become the preferred
                                supply partner to all of our customers worldwide and achieve sustained growth,
                                through consistent delivery of innovative, customercentric, world-class quality
                                products.
                            </p>
                        </div>
                        <div class="fancybox-layout2 fancybox-light">
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-chemistry"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Vision a head:</h4>
                                    <p class="fancybox-desc">Our vision is to excel in domestic in an efficient and
                                        quality conscious manner and our mission is to provide quality medicines for
                                        all.</p>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                            <div class="fancybox-item">
                                <div class="fancybox-icon">
                                    <i class="icon-drug"></i>
                                </div><!-- /.fancybox-icon -->
                                <div class="fancybox-body">
                                    <h4 class="fancybox-title">Leader in Drug Development</h4>
                                    <p class="fancybox-desc">The management of the Company is willing to extend the
                                        area of its business also in the
                                        state of Orissa, Uttar Pradesh, Madhya Pradesh and North East States in near
                                        future by
                                        extending its work forces considerably to make available our product in
                                        these states.</p>
                                </div><!-- /.fancybox-body -->
                            </div><!-- /.fancybox-item -->
                        </div><!-- /.fancybox-layout2 -->
                    </div><!-- /.banner-text -->
                </div><!-- /.col-xl-5 -->
                <div class="col-12 col-xl-7 d-flex align-items-center pl-50 pr-0">
                    <div class="banner-img">
                        <div class="bg-img">
                            <img src="{{ static_asset('assets/assets_web/images/manufacturing1.jpg')}}" alt="About Us">
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Banner Layout8 -->

    <!-- ========================
        Services Layout 4
    =========================== -->
    <section class="work-process pt-90 pb-40">
        <div class="container">

            <div class="row">
                <!-- process item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="process-item">
                        <span class="process-number">01.</span>
                        <div class="process-icon">
                            <i class="icon-education3"></i>
                        </div><!-- /.process-icon -->
                        <h4 class="process-title">Commitment to Excellence</h4>
                        <p class="process-desc">Driven by a passion for excellence, we maintain the highest
                            standards in every aspect of our operations. </p>

                    </div><!-- /.process-item -->
                </div><!-- /.col-lg-3-->
                <!-- process item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="process-item">
                        <span class="process-number">02.</span>
                        <div class="process-icon">
                            <i class="icon-chemical5"></i>
                        </div><!-- /.process-icon -->
                        <h4 class="process-title">Innovation and Research</h4>
                        <p class="process-desc">Innovation is at the core of everything we do. Our state-of-the-art
                            research facilities are equipped with the latest technologies,</p>

                    </div><!-- /.process-item -->
                </div><!-- /.col-lg-3-->
                <!-- process item #3 -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="process-item">
                        <span class="process-number">03.</span>
                        <div class="process-icon">
                            <i class="icon-chemical8"></i>
                        </div><!-- /.process-icon -->
                        <h4 class="process-title">Corporate Social Responsibility</h4>
                        <p class="process-desc">Beyond business success, we recognize our responsibility to
                            contribute to the communities we serve.
                        </p>

                    </div><!-- /.process-item -->
                </div><!-- /.col-lg-3-->
                <!-- process item #4 -->
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div class="process-item">
                        <span class="process-number">04.</span>
                        <div class="process-icon">
                            <i class="icon-archive"></i>
                        </div><!-- /.process-icon -->
                        <h4 class="process-title">Patient-Centric Approach</h4>
                        <p class="process-desc">Patients are at the heart of our endeavors. We are dedicated to
                            understanding their needs, challenges, and aspirations,
                        </p>

                    </div><!-- /.process-item -->
                </div><!-- /.col-lg-3-->
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section><!-- /.Work Process -->



@endsection
