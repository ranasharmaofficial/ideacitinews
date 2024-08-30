@extends('frontend.layouts.master')
@section('title') Journey @endsection

@section('meta_tags')
	<meta name="title" content="Journey">
    <meta name="keywords" content="Journey">
    <meta name="description" content="Journey">
@endsection

@section('content')
<style>


        p {
            font-family: var(--tp-ff-p);
            color: #0e0707;
            font-weight: 400;
            font-size: 18px;
            line-height: 28px;
            margin-bottom: 15px;
        }
        .breadcrumb__height {
    padding-top: 260px;
    padding-bottom: 275px;
    background-repeat: no-repeat;
    background-size: cover;
    object-fit: cover;
}
    </style>
	 <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="{{ static_asset('assets/assets_web/images/header13.jpg') }}">

        </div>
        <!-- breadcrumb area end -->
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Idea Citi News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Journey</li>
                </ol>
            </nav>
        </div>
        <div class="tp-history-area pt-40 pb-120" style="background:url('{{ static_asset('assets/assets_web/images/bg1.png') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="tp-history-title-box mb-20 pl-40">
                            <span class="tp-section-subtitle-2">Journey</span>
                            <h4 class="tp-section-title text-white">Idea citi News</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="container">
                            <div class="timeline">
                                <div class="timeline-nav">
                                    <div class="timeline-nav__item">1971</div>
                                    <div class="timeline-nav__item">1990</div>
                                    <div class="timeline-nav__item">1996</div>
                                    <div class="timeline-nav__item">1998</div>
                                    <div class="timeline-nav__item">2000</div>
                                    <div class="timeline-nav__item">2002</div>
                                    <div class="timeline-nav__item">2004</div>
                                    <div class="timeline-nav__item">2005</div>
                                    <div class="timeline-nav__item">2005 (E)</div>
                                    <div class="timeline-nav__item">2006</div>
                                    <div class="timeline-nav__item">2010</div>
                                    <div class="timeline-nav__item">2013</div>
                                    <div class="timeline-nav__item">2015 (E)</div>
                                    <div class="timeline-nav__item">2017</div>
                                    <div class="timeline-nav__item">2019</div>
                                    <div class="timeline-nav__item">2020 (E)</div>
                                    <div class="timeline-nav__item">2023</div>
                                    <div class="timeline-nav__item">2024 (E)</div>
                                </div>
                                <div class="timeline-wrapper">
                                    <div class="timeline-slider">
                                        <div class="timeline-slide" data-year="1971"><span
                                                class="timeline-year">1971</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j1971.jpg') }}" alt="Idea citi News"></div>
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">जन्म स्थान ग्राम - डुमरिया, थाना -
                                                            महम्मदपुर, जिला - गोपालगंज।</h4>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="1990"> <span
                                                class="timeline-year">1990</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">सामाजिक जीवन की राजनैतिक शुरुआत,
                                                            भारतीय जनता पार्टी में शामिल हुए।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j1990.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="1996"> <span
                                                class="timeline-year">1996</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">भाजपा क्रीड़ा मंच के प्रदेश मंत्री
                                                            बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j1996.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="1998"> <span
                                                class="timeline-year">1998</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">भाजपा क्रीड़ा मंच के प्रदेश उपाध्यक्ष
                                                            बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/jr1.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2000"> <span
                                                class="timeline-year">2000</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">भाजपा क्रीड़ा मंच के प्रदेश महामंत्री
                                                            बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2000.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2002"> <span
                                                class="timeline-year">2002</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">भाजपा क्रीड़ा मंच के राष्ट्रीय टीम में
                                                            शामिल हुए तथा बिहार , बंगाल, उड़िसा एवं झारखण्ड के प्रभारी
                                                            बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/jr1.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2004"> <span
                                                class="timeline-year">2004</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">भारतीय जनता युवा मोर्चा के राष्ट्रीय
                                                            कार्य समिति के सदस्य बने तथा दिल्ली प्रदेश के प्रभारी बने।
                                                        </h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/jr1.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2005"> <span
                                                class="timeline-year">2005</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">भारतीय जनता युवा मोर्चा के उपाध्यक्ष
                                                            बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2005.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2005"> <span
                                                class="timeline-year">2005</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">फ़रवरी में हुए विधान सभा चुनाव में
                                                            कटेया विधान सभा से भाजपा के प्रत्याशी के रूप में चुनाव लड़े।
                                                        </h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2005e.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2006"> <span
                                                class="timeline-year">2006</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">भारतीय जनता पार्टी के प्रदेश कार्य
                                                            समिति के सदस्य बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2006.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2010"> <span
                                                class="timeline-year">2010</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">डॉ सी० पी० ठाकुर की अध्यक्षता वाली
                                                            टीम में भाजपा के प्रदेश मंत्री बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2010.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2013"> <span
                                                class="timeline-year">2013</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">श्री मंगल पांडेय की अध्यक्षता वाली
                                                            टीम में भाजपा के प्रदेश उपाध्यक्ष बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/jr1.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2015"> <span
                                                class="timeline-year">2015</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">बैकुंठपुर विधान सभा क्षेत्र-99 से निर्वाचित हो विधायक बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/jr1.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2017"> <span
                                                class="timeline-year">2017</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">श्री नित्या नंद राय की अध्यक्षता वाली टीम में भाजपा के प्रदेश उपाध्यक्ष बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2017.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2019"> <span
                                                class="timeline-year">2019</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">श्री संजय जयसवाल की अध्यक्षता वाली
                                                            टीम में भाजपा के प्रदेश उपाध्यक्ष बने।</h4>

                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2019.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2020"> <span
                                                class="timeline-year">2020</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">2020 - नवंबर में हुए विधान सभा चुनाव में बैकुण्ठपुर विधान सभा से NDA (राजग) के प्रत्याशी के रूप में चुनाव लड़े।</h4>
                                                    </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2020e.jpg') }}"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2023"> <span
                                                class="timeline-year">2023</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">सम्राट चौधरी के नेतृत्व वाली टीम में भाजपा के प्रदेश महामंत्री के रूप में नियुक्त किया गया</h4>
                                                     </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2023.jpg') }}" alt="Idea citi News"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline-slide" data-year="2024"> <span
                                                class="timeline-year">2024</span>
                                            <div class="timeline-slide__content">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h4 class="timeline-title">2024 बक्सर लोकसभा सीट से बीजेपी प्रत्याशी मिथिलेश तिवारी  बने।</h4>
                                                     </div>
                                                    <div class="col-lg-5"><img src="{{ static_asset('assets/assets_web/images/j2024.jpg') }}" alt="Idea citi News"></div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </main>

@endsection
