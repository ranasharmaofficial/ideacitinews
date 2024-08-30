@extends('frontend.layouts.master')
@section('title') Videos of Assembly @endsection

@section('meta_tags')
	<meta name="title" content="Videos of Assembly">
    <meta name="keywords" content="Videos of Assembly">
    <meta name="description" content="Videos of Assembly">
@endsection

@section('content')

<style>
    a {
color: #000;
text-decoration: NONE;
}
    .image-grid figure {
        margin-bottom: 0;
    }

    .image-grid img {
        box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.15);
        transition: box-shadow 0.2s;
        height: 269px;
        object-fit: cover;
    }

    .image-grid a:hover img {
        box-shadow: 0 1rem 1rem rgba(0, 0, 0, 0.35);
    }


    /* LIGHTBOX STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .lightbox-modal .modal-content {
        background: var(--lightbox);
    }

    .lightbox-modal .btn-close {
        position: absolute;
        top: 20px;
        right: 18px;
        font-size: 1.2rem;
        z-index: 10;
    }

    .lightbox-modal .modal-body {
        display: flex;
        align-items: center;
        padding: 0;
        text-align: center;
    }

    .lightbox-modal img {
        width: auto;
        max-height: 100vh;
        max-width: 100%;
    }

    .lightbox-modal .carousel-caption {
        left: 0;
        right: 0;
        bottom: 0;
        /*background: rgba(36, 36, 36, 0.75);*/
    }

    .lightbox-modal .carousel-control-prev,
    .lightbox-modal .carousel-control-next {
        top: 50%;
        bottom: auto;
        transform: translateY(-50%);
        width: auto;
    }

    .lightbox-modal .carousel-control-prev {
        left: 10px;
    }

    .lightbox-modal .carousel-control-next {
        right: 10px;
    }
    dl, ol, ul {
margin-top: 0;
margin-bottom: 0rem;
}
</style>



<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
        data-background="{{ static_asset('assets/assets_web/images/header1.jpg') }}">

    </div>
    <!-- breadcrumb area end -->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Media</a></li>
                <li class="breadcrumb-item active" aria-current="page">Press Release</li>
            </ol>
        </nav>
    </div>
    <!-- about area start -->
    <section class="image-grid pb-100">
        <div class="container-xxl">
        <div class="tp-event-title-wrap mb-40">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="tp-event-title-box text-center">
                            <h4 class="tp-section-title">Press Release</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr11.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr12.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr13.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr14.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr15.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr16.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr17.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr18.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr19.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr20.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr21.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr22.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr23.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr24.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr25.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr26.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr27.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr28.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr29.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr30.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr31.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr32.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr33.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr34.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr35.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr36.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr37.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr38.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr39.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr40.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr41.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr42.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr43.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr44.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr45.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr46.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr47.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr48.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr49.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr50.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr51.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr52.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr53.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr54.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr55.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr56.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr57.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr58.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr56.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr60.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr61.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr62.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr63.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr64.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr65.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr66.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr67.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr68.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr69.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr70.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr71.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr72.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr73.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr74.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr75.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr76.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr77.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr78.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr79.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/pr80.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p2.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p3.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p4.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p5.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p6.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p7.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p8.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <figure>
                        <a class="d-block" href="">
                            <img width="1920" height="1280" src="{{ static_asset('assets/assets_web/images/p9.jpg') }}" class="img-fluid"
                                alt="Press Release" data-caption="Press Release">
                        </a>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body">
                    <div class="container-fluid p-0">
                        <!-- JS content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="basic-pagination">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa-regular fa-angles-left"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <span class="current">2</span>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-regular fa-angles-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            </div>
        </div>
    </div>
</main>


@endsection
