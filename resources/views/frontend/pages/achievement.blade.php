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
       data-background="{{ static_asset('assets/assets_web/images/header12.jpg') }}">

   </div>
   <!-- breadcrumb area end -->
   <div class="container">
       <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
           <ol class="breadcrumb">
               <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Idea Citi News</a></li>
               <li class="breadcrumb-item active" aria-current="page">Achievements</li>
           </ol>
       </nav>
   </div>
   <!-- about area start -->
   <!-- mayor area start -->
   <div class="tp-mayor-area theme-bg-2 tp-mayor-ptb z-index fix" style="background:url('{{ static_asset('assets/assets_web/images/bg1.png') }}')">
       <div class="container">
           <div class="row">
               <div class="col-xl-8">
                   <div class="tp-mayor-left-wrap d-flex p-relative">
                       <div class="tp-mayor-left-thumb p-relative">
                           <img src="{{ static_asset('assets/assets_web/images/ac1.jpg') }}" alt="">
                           <div class="tp-mayor-sub-img d-none d-xxl-block">
                               <img src="{{ static_asset('assets/assets_web/images/shape-img-1.png') }}" alt="">
                           </div>
                       </div>
                       <div class="tp-mayor-content-box">
                           <div class="tp-mayor-title-box">
                               <span class="tp-section-subtitle-2 text-light"><i
                                       class="flaticon-spark text-light"></i>Achievements</span>
                               <h4 class="tp-section-title text-white mb-25 text-dark">Idea Citi News</h4>
                               <p class="text-white">
                               4.93 करोड़ का विद्युत सौदागरी की स्वीकृति।
                               </p>
                               <p class="text-white">
                                   केन्द्र सरकार द्धारा डुमरिया घाट पर नारायणी रिवर फ्रन्ट का निर्माण तथा विधुत शवदाह गृह और ग्रीनक्रिमेटोरिया की स्वीकृति (लागत 87 करोड़ )
                                   स्वीकृति 12 करोड़ ।
                               </p>
                               <p class="text-white">
                                   डुमरिया घाट पर राष्ट्रीय जल मार्ग संख्या -37 गंडक नदी पर जलपोत टर्मिनल की
                                   स्वीकृति |(लागत 12.91 करोड़ )
                               </p>
                               <p class="text-white">

                               </p>
                           </div>

                       </div>
                   </div>
               </div>
               <div class="col-xl-4">
                   <div class="tp-mayor-right-wrap">
                       <div class="tp-mayor-right-item mb-30 d-flex align-items-center">
                           <div class="tp-mayor-right-icon">
                               <i class="fal fa-file-edit"></i>
                           </div>
                           <div class="tp-mayor-right-content">
                               <i>डुमरिया पुल का पुननिर्माण और डुमरिया तथा बरहिमा में अन्डर पास की स्वीकृति लागत
                                   158 करोड़ </i>
                           </div>
                       </div>
                       <div class="tp-mayor-right-item mb-30 d-flex align-items-center">
                           <div class="tp-mayor-right-icon">
                               <i class="fal fa-file-edit"></i>
                           </div>
                           <div class="tp-mayor-right-content">
                               <i>बढ़ेया, मुहम्मदपुर, बरहिमा और खजुरिया सर्विस रोड का निर्माण कार्य I लागत 24
                                   करोड़, 60 लाख </i>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- mayor area end -->
   <div class="tp-service-details-area pt-60 pb-120">
       <div class="container">
           <div class="row">
               <div class="col-xl-12 col-lg-12">
                   <div class="tp-service-details-right-feature-list mb-60">
                       <ul>
                       <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               कोटवा -देवापुर (एन .एच.) खराब सडक की मरम्मती कार्य की स्वीकृति - लागत 36 करोड़
                                   97 लाख |
                               </p>
                           </li>
                       <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               नारायणी रिवर फ्रंट पर श्रद्धालुओं के लिए हुडको के CSR (सीएसआर) फंड से मल्टीपर्पस सामुदायिक भवन की स्वीकृति। (लागत लगभग 1 करोड़ रुपए)
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   सलेमपुर गंडक नदी कटाव निरोधी कार्य की स्वीकृति | लागत 2 करोड़ 30 लाख
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                पटना से डुमरिया घाट के लिए एक्सप्रेस वे हाईवे की स्वीकृति।

                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   एन.एच.101 महम्मदपुर से खोड़ीपाकड़ सड़क का निर्माण कार्य (लागत लगभग 78
                                   करोड़)
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   बंगरा तथा सतरघाट पुल एवं एप्रोच रोड का निर्माण कार्य | (लागत 772 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   ए.एन.एम. कॉलेज बनकटी का निर्माण | (लागत लगभग 7 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   राजकीय आई.टी.आई. कॉलेज काशी टेंगराही में  निर्माण कार्यारम्भ | (लागत लगभग 21. 60 करोड़
                                   )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   बखरौर एवं गम्हारी में पावर सब स्टेशन का निर्माण एवं राजापट्टी में स्वीकृति
                                   प्राप्त | ( लगभग 20. 25 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   रेवतीथ हाई स्कूल के खेल मैदान में स्टेडियम की स्वीकृति प्राप्त | (लागत लगभग
                                   1करोड़ 21 लाख )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   कुशहर पशु अस्पताल एवं चिकित्सक आवास का निर्माण (लगभग 53 लाख )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   सिंहासनी महोत्सव एवं भास्कर महोत्सव की शुरुआत एवं नारायणी महोत्सव की स्वीकृति
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               वर्षो से जर्जर डुमरिया पुल का निमार्ण कार्यारम्भ एवं नारायणी नदी के किनारे भगवान शिव के मंदिर के निर्माण की स्वीकृति एवं रिवर फ्रंट पर आने जानें के लिए सर्विस रोड निमार्ण कार्य।
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               गोपालगंज शहर में एलिवेटेड रोड की स्वीकृति एवं कार्यारम्भ।
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   मसरख-सतरघाट सड़क को राम जानकी पथ में शामिल कराया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   थावे - छपरा रेल खण्ड का बड़ी लाइन के रूप में अमान परिवर्तन कार्य पूर्ण एवं
                                   एक्सप्रेस ट्रेनों का परिचालन तथा दिघवादुबौली और गोपालगंज स्टशनों पर छपरा - लखनऊ
                                   एक्सप्रेस के ठहराव की स्वीकृति, गोरखपुर पटना के बीच इंटरसिटी ट्रेन का परिचलन एवं गोरखपुर पटना के बीच इंटरसिटी ट्रेन का परिचलन एवं ठहराव की स्वीकृति
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   छपरा -थावे रेल खण्ड का विधुतीकरण कार्य पूर्ण
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   झझवां पकड़ी सामुदायिक अस्पताल का परिचालन प्रारम्भ
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   एस . एच. ९० महम्मदपुर - मशरख - छपरा सड़क का निर्माण
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   बी० ओo 150 गन्ना प्रभेद को सामान्य प्रभेद में शामिल कराकर &nbsp; गन्ना किसानों को
                                   लाभ पहुंचाया गया एवं घटतौली बन्द कराकर किसानों का शत् प्रतिशत गन्ना भुगतान कराया
                                   गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   सिरसा मानपुर में रेशम उधोग की दुबारा उत्पादन हेतु स्वीकृति | (लागत लगभग 1 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   वर्षों से जर्जर दिधवादुबौली ब्लॉक रोड का निर्माण । ( लागत 1.14 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   नागेश्वर नाथ ( डुमरिया ) एवं धनेश्वर नाथ महादेव ( सिंहासनी ) को आध्यात्मिक
                                   सर्किट तथा पर्यटन रोड मैप में शामिल कराया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   ग्रामीण कार्य विभाग के द्वारा ग्रामीण एवं सूदुर दियारा इलाको में 174 सड़को की
                                   निर्माण एवं स्वीकृति l ( लागत 223 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   मुख्यमंत्री चिकित्सा सहायता कोष से लगभग 5.20 करोड की राशि से लगभग 418
                                   लाभार्थियों को मदद पहुँचाया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   जल संसाधन विभाग द्वारा प्यारेपुर से सरफरा 40 किलो मीटर तक सारण तटबंध एवं सभी
                                   जमींदारी बाँध का उच्चीकरण एवं पक्कीकरण कार्य की स्वीकृति । (लागत 107 करोड़)
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   जल संसाधन विभाग के द्वारा वर्ष 2017-18 में लगभग 150 करोड़ की राशि से टुटे
                                   तटबन्धों के मजबूती एवं उच्चीकरण का निर्माण कार्य कराया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   विधान सभा क्षेत्र अन्तर्गत विभिन्न गॉवों में लगभग 115 छठ घाट एवं लगभग 48
                                   सामुदायिक भवन तथा सैकड़ों चबुतरा एवं दर्जनों स्कूल भवन का निर्माण कराया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   2017 में लगभग 54000 बाढ़ पीड़ित परिवारों को 6 हजार रूपये की राशि उनके खातों में
                                   भेजा गया | (राशि 32.40 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   सिधवलिया प्रखण्ड में लगभग 13 हजार एवं बैकुण्ठपुर में लगभग 20 हजार और बरौली में
                                   लगभग 5 हजार परिवारों को शौचालय निर्माण हेतु प्रोत्साहन राशि के रूप में 12 - 12
                                   हजार रुपये की राशि उनके खाते में भेजा गया। ( राशि 45.60 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   बिहार सरकार आपदा विभाग के द्वारा सड़क दुर्घटना एवं पानी में डूबने से विधुत
                                   स्पर्शाघात से तथा विभिन्न आपदा से मृत्यू लगभग 118 परिवारों को 4 - 4 लाख रुपये की
                                   राशि का भुगतान कराया गया | (राशि 4.72 करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   भारत सरकार के विदेश मंत्रालय के द्वारा गोपालगंज में पासपोर्ट सेवा केंद्र की
                                   स्वीकृति एवं कार्यरम्भ कराया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   प्रधानमंत्री किसान सम्मान प्रत्येक किसान को वर्ष में 6000 की राशि
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   सभी गरीब परिवारो को निःशुल्क गैस कनेक्शन
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   सभी गरीबो को 5 लाख की फ्री चिकित्सा हेतु आयुष्मान कार्ड
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   एन. एच. 101 - सिसई - धर्मवारी - मीरा टोला - पकड़ी मोड़ - सोनवलिया ढाला सड़क का
                                   निर्माण कार्य ( 12 कि. मी. ) 29 करोड 74 लाख - पथ निर्माण विभाग
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   बनौरा - बहरामपुर - पकहाँ - सतरघाट सड़क के निर्माण की स्वीकृति 27 करोड - पथ
                                   निर्माण विभाग
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   डुमरिया शिवमंदिर ( नागेश्वर नाथ महादेव मंदिर ) का जीर्णोद्धार कार्य पुरातत्व
                                   विभाग द्वारा स्वीकृति / अनुमानित लागत 48 लाख
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   शाहपुर उच्च विधालय +2 (सिधवलिया) तथा उo मo विधालय , सिअरूऑ (बरौली) में स्टेडियम
                                   निर्माण की स्वीकृति - अनुमानित लागत 2 करोड़ , 42 लाख
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                                   बैकुण्ठपुर विधान सभा क्षेत्र के सिधवलिया प्रखण्ड में 2114 तथा बैकुण्ठपुर प्रखण्ड
                                   में 6199 नये परिवारिक राशन कार्ड की स्वीकृति के साथ ही बरौली प्रखण्ड में 4663
                                   नये परिवारिक राशन कार्ड की स्वीकृति &nbsp;&nbsp; कराया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               जीविका समूह के माध्यम से बैकुण्ठपुर , सिधवालिया और बरौली प्रखण्डों में राशन कार्ड विहिन हजारों गरीब परिवारों को राशन कार्ड की स्वीकृति
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               रेल मंत्रालय द्वारा दिघवा दुबौली रेलवे स्टेशन के सर्कुलेटिग एरिया के सड़क का निर्माण कार्य | (लागत  लगभग 50  करोड़ )
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               बैकुण्ठपुर विधान सभा क्षेत्र में शेर, सिधवलिया, बृजकिशोर हॉल्ट , दिघवा दुबौली एवं कतालपुर &nbsp; सभी हॉल्ट एवं स्टेशनों को मॉडल स्टेशन के रूप में विकशित कराया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               सिधवलिया और बैकुण्ठपुर दोनों अस्पताल को विधायक निधि से आम गरीबो की सुविधा हेतु 2 एम्बुलेन्स की दिया गया
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               हजारों गरीबों को प्रति परिवार 1.5 लाख रुपया प्रधानमंत्री आवास योजना के अन्तर्गत केन्द्र सरकार द्वारा स्वीकृति
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               कोरोना संकट में माननीय प्रधानमंत्री जी द्वारा जनधन खातों 1500 रुपया सभी राशन कार्ड धारको को 15 किलो चावल और 3 किलो दाल मुफ्त, सभी राशन कार्ड धारको के खातों में 1000 रुपया की नगद राशि और सभी उज्वला योजना गैस कनेक्शन के लाभार्थियों को महिना गैस मुफ्त
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               कोरोना संकट में विधायक निधि से 71 लाख रुपया की राशि के साथ ही प्रधानमंत्री एवं मुख्यमंत्री आपदा राहत कोस में स्वंय तथा अपने सहयोगियों द्वारा लाखों की राशि जनहित दान की गयी
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               ओला वृष्टि से प्रभावित सभी किसानो को कृषि अनुदान अनुग्रह राशि दिलाने हेतु सरकार से स्वीकृति
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               सलेमपुर घाट स्थित गंडक नदी पर भविष्य में पुल निर्माण हेतु संकल्पीत
                               </p>
                           </li>
                           <li class="p-relative theme-color">
                               <i class="fa-regular fa-check"></i>
                               <p class="mb-0">
                               लोक स्वास्थ्य अभियंत्रण विभाग बिहार सरकार द्वारा 5 करोड़ 98 लाख की लागत से 8 जल मीनार  द्वारा 5204 परिवारों को मिला नल जल योजना के अन्तर्गत  पेयजल की सुविधा
                               </p>
                           </li>

                       </ul>
                   </div>

               </div>


           </div>
       </div>
   </div>

</main>

@endsection
