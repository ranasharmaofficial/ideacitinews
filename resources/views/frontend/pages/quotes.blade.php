@extends('frontend.layouts.master')
@section('title') Achievements @endsection

@section('meta_tags')
	<meta name="title" content="Achievements">
    <meta name="keywords" content="Achievements">
    <meta name="description" content="Achievements">
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
        <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix"
            data-background="{{ static_asset('assets/assets_web/images/header1.jpg') }}">

        </div>
        <!-- breadcrumb area end -->
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Speeches</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quotes</li>
                </ol>
            </nav>
        </div>
        <!-- about area start -->
        <section class="postbox__area pt-50 pb-120">
         <div class="container">
            <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                  <div class="postbox__wrapper">
                     <article class="postbox__item format-image mb-50 transition-3">
                        <div class="postbox__content">
                        <h3 class="postbox__title">QUOTES</h3>
                           <div class="postbox__text">
                           <div class="postbox__blockquote p-relative">
                                 <div class="postbox__blockquote-shape">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/quote.png') }}" alt="">
                                 </div>
                                 <blockquote>
                                    <p>"भारत के मान, सम्मान और स्वाभिमान की रक्षा के लिए जो कुछ भी करना पड़ेगा वो हम करेंगे। कश्मीर भारत का अभिन्न अंग था, है और रहेगा।."</p>
                                    <cite>By : Idea citi News</cite>
                                 </blockquote>
                              </div>
                              <div class="postbox__blockquote p-relative">
                                 <div class="postbox__blockquote-shape">
                                    <img src="{{ static_asset('assets/assets_web/img/blog/quote.png') }}" alt="">
                                 </div>
                                 <blockquote>
                                    <p>"स्वस्थ लोकतंत्र में प्रमुख अंग विपक्ष की अहम भूमिका है, हम उसका सम्मान करते हैं।."</p>
                                    <cite>By : Idea citi News</cite>
                                 </blockquote>
                              </div>
                           </div>
                        </div>
                     </article>



                  </div>
               </div>
               <div class="col-xxl-4 col-xl-4 col-lg-4">
                  <div class="sidebar__wrapper">
                     <div class="sidebar__widget mb-30">
                        <div class="sidebar__widget-content">
                           <h3 class="sidebar__widget-title">Search Here</h3>
                           <div class="sidebar__search">
                              <form action="#">
                                 <div class="sidebar__search-input-2">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title">Recent Post</h3>
                        <div class="sidebar__widget-content">
                           <div class="sidebar__post rc__post">
                              <div class="rc__post mb-30 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="#"><img src="{{ static_asset('assets/assets_web/images/up1.jpg') }}" alt="" class="more108"></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 13H3.25V10.75H1V13ZM3.75 13H6.25V10.75H3.75V13ZM1 10.25H3.25V7.75H1V10.25ZM3.75 10.25H6.25V7.75H3.75V10.25ZM1 7.25H3.25V5H1V7.25ZM6.75 13H9.25V10.75H6.75V13ZM3.75 7.25H6.25V5H3.75V7.25ZM9.75 13H12V10.75H9.75V13ZM6.75 10.25H9.25V7.75H6.75V10.25ZM4 3.5V1.25C4 1.18229 3.97396 1.125 3.92188 1.07812C3.875 1.02604 3.81771 0.999999 3.75 0.999999H3.25C3.18229 0.999999 3.1224 1.02604 3.07031 1.07812C3.02344 1.125 3 1.18229 3 1.25V3.5C3 3.56771 3.02344 3.6276 3.07031 3.67969C3.1224 3.72656 3.18229 3.75 3.25 3.75H3.75C3.81771 3.75 3.875 3.72656 3.92188 3.67969C3.97396 3.6276 4 3.56771 4 3.5ZM9.75 10.25H12V7.75H9.75V10.25ZM6.75 7.25H9.25V5H6.75V7.25ZM9.75 7.25H12V5H9.75V7.25ZM10 3.5V1.25C10 1.18229 9.97396 1.125 9.92188 1.07812C9.875 1.02604 9.81771 0.999999 9.75 0.999999H9.25C9.18229 0.999999 9.1224 1.02604 9.07031 1.07812C9.02344 1.125 9 1.18229 9 1.25V3.5C9 3.56771 9.02344 3.6276 9.07031 3.67969C9.1224 3.72656 9.18229 3.75 9.25 3.75H9.75C9.81771 3.75 9.875 3.72656 9.92188 3.67969C9.97396 3.6276 10 3.56771 10 3.5ZM13 3V13C13 13.2708 12.901 13.5052 12.7031 13.7031C12.5052 13.901 12.2708 14 12 14H1C0.729167 14 0.494792 13.901 0.296875 13.7031C0.0989583 13.5052 0 13.2708 0 13V3C0 2.72917 0.0989583 2.49479 0.296875 2.29687C0.494792 2.09896 0.729167 2 1 2H2V1.25C2 0.906249 2.1224 0.611978 2.36719 0.367187C2.61198 0.122395 2.90625 -9.53674e-07 3.25 -9.53674e-07H3.75C4.09375 -9.53674e-07 4.38802 0.122395 4.63281 0.367187C4.8776 0.611978 5 0.906249 5 1.25V2H8V1.25C8 0.906249 8.1224 0.611978 8.36719 0.367187C8.61198 0.122395 8.90625 -9.53674e-07 9.25 -9.53674e-07H9.75C10.0938 -9.53674e-07 10.388 0.122395 10.6328 0.367187C10.8776 0.611978 11 0.906249 11 1.25V2H12C12.2708 2 12.5052 2.09896 12.7031 2.29687C12.901 2.49479 13 2.72917 13 3Z" fill="currentcolor"></path>
                                          </svg>
                                          July 21, 2021</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="#">रोहतास ज़िला के बिक्रमगंज प्रखंड अंतर्गत दुर्गाडीह के पूर्व मुखिया स्व० बृजराज पांडेय जी की पुण्य तिथि</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post mb-30 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="#"><img src="{{ static_asset('assets/assets_web/images/up2.jpg') }}" class="more108" alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 13H3.25V10.75H1V13ZM3.75 13H6.25V10.75H3.75V13ZM1 10.25H3.25V7.75H1V10.25ZM3.75 10.25H6.25V7.75H3.75V10.25ZM1 7.25H3.25V5H1V7.25ZM6.75 13H9.25V10.75H6.75V13ZM3.75 7.25H6.25V5H3.75V7.25ZM9.75 13H12V10.75H9.75V13ZM6.75 10.25H9.25V7.75H6.75V10.25ZM4 3.5V1.25C4 1.18229 3.97396 1.125 3.92188 1.07812C3.875 1.02604 3.81771 0.999999 3.75 0.999999H3.25C3.18229 0.999999 3.1224 1.02604 3.07031 1.07812C3.02344 1.125 3 1.18229 3 1.25V3.5C3 3.56771 3.02344 3.6276 3.07031 3.67969C3.1224 3.72656 3.18229 3.75 3.25 3.75H3.75C3.81771 3.75 3.875 3.72656 3.92188 3.67969C3.97396 3.6276 4 3.56771 4 3.5ZM9.75 10.25H12V7.75H9.75V10.25ZM6.75 7.25H9.25V5H6.75V7.25ZM9.75 7.25H12V5H9.75V7.25ZM10 3.5V1.25C10 1.18229 9.97396 1.125 9.92188 1.07812C9.875 1.02604 9.81771 0.999999 9.75 0.999999H9.25C9.18229 0.999999 9.1224 1.02604 9.07031 1.07812C9.02344 1.125 9 1.18229 9 1.25V3.5C9 3.56771 9.02344 3.6276 9.07031 3.67969C9.1224 3.72656 9.18229 3.75 9.25 3.75H9.75C9.81771 3.75 9.875 3.72656 9.92188 3.67969C9.97396 3.6276 10 3.56771 10 3.5ZM13 3V13C13 13.2708 12.901 13.5052 12.7031 13.7031C12.5052 13.901 12.2708 14 12 14H1C0.729167 14 0.494792 13.901 0.296875 13.7031C0.0989583 13.5052 0 13.2708 0 13V3C0 2.72917 0.0989583 2.49479 0.296875 2.29687C0.494792 2.09896 0.729167 2 1 2H2V1.25C2 0.906249 2.1224 0.611978 2.36719 0.367187C2.61198 0.122395 2.90625 -9.53674e-07 3.25 -9.53674e-07H3.75C4.09375 -9.53674e-07 4.38802 0.122395 4.63281 0.367187C4.8776 0.611978 5 0.906249 5 1.25V2H8V1.25C8 0.906249 8.1224 0.611978 8.36719 0.367187C8.61198 0.122395 8.90625 -9.53674e-07 9.25 -9.53674e-07H9.75C10.0938 -9.53674e-07 10.388 0.122395 10.6328 0.367187C10.8776 0.611978 11 0.906249 11 1.25V2H12C12.2708 2 12.5052 2.09896 12.7031 2.29687C12.901 2.49479 13 2.72917 13 3Z" fill="currentcolor"></path>
                                          </svg>
                                             July 21, 2021</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="#">बैकुण्ठपुर विधानसभा के RMP चिकित्सकों को ZOOM MEETING से कोरोना से लड़ने के लिए किया जाएगा प्रशिक्षित।/a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc__post mb-20 d-flex align-items-center">
                                 <div class="rc__post-thumb mr-20">
                                    <a href="#"><img src="{{ static_asset('assets/assets_web/images/ne2.jpg') }}" class="more108" alt=""></a>
                                 </div>
                                 <div class="rc__post-content">
                                    <div class="rc__meta">
                                       <span><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 13H3.25V10.75H1V13ZM3.75 13H6.25V10.75H3.75V13ZM1 10.25H3.25V7.75H1V10.25ZM3.75 10.25H6.25V7.75H3.75V10.25ZM1 7.25H3.25V5H1V7.25ZM6.75 13H9.25V10.75H6.75V13ZM3.75 7.25H6.25V5H3.75V7.25ZM9.75 13H12V10.75H9.75V13ZM6.75 10.25H9.25V7.75H6.75V10.25ZM4 3.5V1.25C4 1.18229 3.97396 1.125 3.92188 1.07812C3.875 1.02604 3.81771 0.999999 3.75 0.999999H3.25C3.18229 0.999999 3.1224 1.02604 3.07031 1.07812C3.02344 1.125 3 1.18229 3 1.25V3.5C3 3.56771 3.02344 3.6276 3.07031 3.67969C3.1224 3.72656 3.18229 3.75 3.25 3.75H3.75C3.81771 3.75 3.875 3.72656 3.92188 3.67969C3.97396 3.6276 4 3.56771 4 3.5ZM9.75 10.25H12V7.75H9.75V10.25ZM6.75 7.25H9.25V5H6.75V7.25ZM9.75 7.25H12V5H9.75V7.25ZM10 3.5V1.25C10 1.18229 9.97396 1.125 9.92188 1.07812C9.875 1.02604 9.81771 0.999999 9.75 0.999999H9.25C9.18229 0.999999 9.1224 1.02604 9.07031 1.07812C9.02344 1.125 9 1.18229 9 1.25V3.5C9 3.56771 9.02344 3.6276 9.07031 3.67969C9.1224 3.72656 9.18229 3.75 9.25 3.75H9.75C9.81771 3.75 9.875 3.72656 9.92188 3.67969C9.97396 3.6276 10 3.56771 10 3.5ZM13 3V13C13 13.2708 12.901 13.5052 12.7031 13.7031C12.5052 13.901 12.2708 14 12 14H1C0.729167 14 0.494792 13.901 0.296875 13.7031C0.0989583 13.5052 0 13.2708 0 13V3C0 2.72917 0.0989583 2.49479 0.296875 2.29687C0.494792 2.09896 0.729167 2 1 2H2V1.25C2 0.906249 2.1224 0.611978 2.36719 0.367187C2.61198 0.122395 2.90625 -9.53674e-07 3.25 -9.53674e-07H3.75C4.09375 -9.53674e-07 4.38802 0.122395 4.63281 0.367187C4.8776 0.611978 5 0.906249 5 1.25V2H8V1.25C8 0.906249 8.1224 0.611978 8.36719 0.367187C8.61198 0.122395 8.90625 -9.53674e-07 9.25 -9.53674e-07H9.75C10.0938 -9.53674e-07 10.388 0.122395 10.6328 0.367187C10.8776 0.611978 11 0.906249 11 1.25V2H12C12.2708 2 12.5052 2.09896 12.7031 2.29687C12.901 2.49479 13 2.72917 13 3Z" fill="currentcolor"></path>
                                          </svg>
                                             July 21, 2021</span>
                                    </div>
                                    <h3 class="rc__post-title">
                                       <a href="#">बैकुंठपुर विधानसभा के बाढ़ पीड़ितों
                                                    के अनुदान राशि के लिए उपमुख्यमंत्री जी को सौंपा ज्ञापन।</a>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title">Media</h3>
                        <div class="sidebar__widget-content">
                           <ul>
                              <li><a href="#">MEDIA COVERAGE <span>03</span></a></li>
                              <li><a href="#">PRESS RELEASE <span>05</span></a></li>
                              <li><a href="#">NEWS <span>08</span></a></li>
                              <li><a href="#">NATIONAL <span>06</span></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title">Tags</h3>
                        <div class="sidebar__widget-content">
                           <div class="tagcloud">
                              <a href="{{ url('latest-photos') }}">LATEST PHOTOS</a>
                              <a href="{{ url('video') }}">VIDEOS</a>
                              <a href="{{ url('event-photos') }}">EVENT’S PHOTOS</a>
                              <a href="{{ url('quotes') }}">QUOTES</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


    </main>

@endsection
