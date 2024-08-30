@extends('frontend.layouts.master')
@section('title') Contact Us @endsection

@section('meta_tags')
	<meta name="title" content="Contact Us">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="Contact Us">
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
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Speeches</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Quotes</li>
                </ol>
            </nav>
        </div>
        <!-- about area start -->
        <div class="contact-area grey-bg-2 z-index pb-120 pt-120">
         <div class="container">
            <div class="contact-top-wrap">
               <div class="row">
               <div class="col-xl-7 col-lg-6">
                <h3>HAVE A MESSAGE TO SHARE WITH<BR> Idea citi News?</h3>
                <p>Fill out this form to send a note to him.</p>
                     <div class="contact-wrapper pt-80">
                        <form action="#">
                           <div class="tp-contact-2-form">
                              <div class="row">
                                 <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-2-input p-relative">
                                       <input type="text" placeholder="Name">
                                       <span><i class="fal fa-user"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-2-input p-relative">
                                       <input type="email" placeholder="Email Address">
                                       <span><i class="fa-light fa-envelope"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-2-input p-relative">
                                       <input type="text" placeholder="Phone">
                                       <span><i class="flaticon-phone-call-1"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6">
                                    <div class="tp-contact-2-input p-relative">
                                       <input type="text" placeholder="Subject">
                                       <span><i class="fa-sharp fa-light fa-circle-info"></i></span>
                                    </div>
                                 </div>
                                 <div class="col-xl-12">
                                    <div class="tp-contact-2-input p-relative">
                                       <textarea placeholder="How can we help you? Feel free to get in touch!"></textarea>
                                       <span class="icon-1"><i class="fa-light fa-pen"></i></span>
                                    </div>
                                 </div>
                                 <div class="tp-contact-2-btn">
                                    <button class="tp-btn-xl green-anim">Submit</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-6">
                     <div class="contact-left-thumb mb-60 p-relative">
                        <h3>BJP Office</h3>
                        <h3>State General Secretary of Bihar BJP.</h3>
                        <p>8, Beer chand Patel Path, Veerchand Patel Road Area, Patna, Bihar 800001</p>
                     </div>
                     <div class="contact-social">
                        <span>Social Media :</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                     </div>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14391.685955175939!2d85.129456!3d25.607525!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed58404bc3406b%3A0x23bfd00f107f6422!2sBJP%20Bihar%20State%20Office%20Patna!5e0!3m2!1sen!2sin!4v1703920626535!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>                  
               </div>
            </div>        
         </div>
      </div>
    </main>

@endsection
