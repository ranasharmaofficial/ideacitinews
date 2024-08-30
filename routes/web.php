<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\CommonController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared by @RanaSharma";
});

// rabokan-l
Route::get('/biography', function () {
    return view('frontend.pages.biography');
});

Route::get('/quotes', function () {
    return view('frontend.pages.quotes');
});

Route::get('/journey', function () {
    return view('frontend.pages.journey');
});

Route::get('/achievement', function () {
    return view('frontend.pages.achievement');
});

// Route::get('/speeches', function () {
//     return view('frontend.pages.speeches');
// });




Route::get('/press-release', function () {
    return view('frontend.pages.press-release');
});

Route::get('/quotes', function () {
    return view('frontend.pages.quotes');
});

// Route::get('/latest-photos', function () {
//     return view('frontend.pages.latest-photos');
// });
// Route::get('/event-photos', function () {
//     return view('frontend.pages.event-photos');
// });

Route::get('test_mail', [CommonController::class, 'testSimpleMail'])->name('test_mail');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
// Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [CommonController::class, 'index'])->name('index');
Route::get('index', [CommonController::class, 'index'])->name('index');
Route::get('video-assembly', [CommonController::class, 'videoAssembly'])->name('videoAssembly');
Route::get('video', [CommonController::class, 'videoList'])->name('videoList');

Route::get('media-coverage', [CommonController::class, 'mediaCoverage'])->name('mediaCoverage');
Route::get('speeches', [CommonController::class, 'speechList'])->name('speechList');
Route::get('latest-photos', [CommonController::class, 'latestPhotos'])->name('latestPhotos');
Route::get('event-photos', [CommonController::class, 'latestEvents'])->name('latestEvents');

// Route::get('/media-coverage', function () {
//     return view('frontend.pages.media-coverage');
// });


// Route::get('/video-assembly', function () {
//     return view('frontend.pages.video-assembly');
// });


Route::get('about-us', [CommonController::class, 'aboutUs'])->name('about');
Route::get('why-choose-us', [CommonController::class, 'whyChooseUs'])->name('whyChooseUs');
Route::get('quality-policy', [CommonController::class, 'qualityPolicy'])->name('qualityPolicy');
Route::get('manufacturing-marketing', [CommonController::class, 'manufacturingMarketing'])->name('manufacturingMarketing');
Route::get('certificate', [CommonController::class, 'certificate'])->name('certificate');
Route::get('enquiry', [CommonController::class, 'enquiry'])->name('enquiry');
Route::get('career', [CommonController::class, 'career'])->name('career');
Route::post('storeCareerData', [CommonController::class, 'storeCareerData'])->name('home.storeCareerData');
Route::get('contact-us', [CommonController::class, 'contact_us'])->name('contact');
Route::post('contact/enquiry', [CommonController::class, 'postContactEnquiry'])->name('contact.enquiry');
Route::post('postOnlineEnquiry', [CommonController::class, 'postOnlineEnquiry'])->name('enq.postOnlineEnquiry');
Route::get('therapies', [CommonController::class, 'therapies'])->name('therapies');
Route::get('photo-gallery', [CommonController::class, 'photoGallery'])->name('photoGallery');
Route::get('video-gallery', [CommonController::class, 'videoGallery'])->name('videoGallery');
Route::get('gallery/{slug}', [CommonController::class, 'photoGalleryDetails'])->name('photoGalleryDetails');
Route::get('category/{slug}', [CommonController::class, 'showCategoryDetails'])->name('showCategoryDetails');


Route::get('mission-vission', [CommonController::class, 'mission'])->name('mission-vission');
Route::get('partners', [CommonController::class, 'partner'])->name('partners');
Route::get('awards', [CommonController::class, 'awards'])->name('awards');
Route::get('clients', [CommonController::class, 'clients'])->name('clients');
Route::get('straitegic-alliances', [CommonController::class, 'straitegicAlliances'])->name('straitegic-alliances');

Route::get('industry/{slug}', [CommonController::class, 'industry'])->name('industry.slug');

Route::get('categories', [CommonController::class, 'categoryIndex'])->name('categories.name');
Route::get('news', [CommonController::class, 'newsListing'])->name('news');
// Route::get('news/{slug}', [CommonController::class, 'newsSlugListing'])->name('news.slug');
Route::get('news/{slug}', [CommonController::class, 'newsDetail'])->name('news.slug');
// Route::get('news_detail/{slug}', [CommonController::class, 'newsDetail'])->name('news.detail');

Route::get('events', [CommonController::class, 'eventListing'])->name('events');
Route::get('events/{slug}', [CommonController::class, 'eventSlugListing'])->name('events.slug');
Route::get('event_detail/{slug}', [CommonController::class, 'eventDetail'])->name('events.detail');

Route::get('blogs', [CommonController::class, 'blogListing'])->name('blogs');
Route::get('blogs/{slug}', [CommonController::class, 'blogSlugListing'])->name('blogs.slug');
// Route::get('blog_detail/{slug}', [CommonController::class, 'blogDetail'])->name('blog.detail');
Route::get('blog/blog-detail/{slug}', [CommonController::class, 'blogDetail'])->name('blog.detail');
Route::post('blog/store_comment', [CommonController::class, 'storeBlogComment'])->name('blog.store_comment');
Route::get('blog/show_comments', [CommonController::class, 'showBlogComments'])->name('blog.show_comments');

// Route::get('service/{slug}', [ServiceController::class, 'index'])->name('service.slug');

Route::get('case-study', [CommonController::class, 'caseStudyListing'])->name('case-study');
Route::get('case-study-detail/{slug}', [CommonController::class, 'caseStudyDetail'])->name('case-study.detail');
Route::get('csr', [CommonController::class, 'csr'])->name('csr');

Route::get('career-details', [CommonController::class, 'careerDetails'])->name('career-details');
// Route::post('career/enquiry', [CommonController::class, 'storeCareerData'])->name('career.enquiry');
Route::get('faqs', [CommonController::class, 'faqs'])->name('faqs');
Route::get('videos', [CommonController::class, 'videos'])->name('videos');
Route::get('projects', [CommonController::class, 'projects'])->name('projects');
Route::get('gallery', [CommonController::class, 'galleries'])->name('gallery');
Route::get('testimonial', [CommonController::class, 'testimonial'])->name('testimonial');
Route::get('our-team', [CommonController::class, 'ourTeam'])->name('ourTeam');
Route::get('team-details/{id}', [CommonController::class, 'teamDetails'])->name('teamDetails');
Route::get('clients', [CommonController::class, 'ourClients'])->name('ourClients');
Route::get('awards', [CommonController::class, 'awards'])->name('awards');
Route::get('profile', [CommonController::class, 'profile'])->name('profile');

Route::post('store/subscriber', [CommonController::class, 'postNewsletter'])->name('store.subscriber');

Route::get('product/{slug}', [ProductController::class, 'productDetails'])->name('productDetail.slug');

Route::post('showPricingDetails', [ProductController::class, 'showPricingDetails'])->name('home.showPricingDetails');
Route::post('showFaqList', [ServiceController::class, 'showFaqList'])->name('home.showFaqList');

Route::get('service/{slug}', [ServiceController::class, 'serviceDetails'])->name('serviceDetails.slug');

Route::get('privacy-policy', [CommonController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('terms-condition', [CommonController::class, 'termsCondition'])->name('termsCondition');
Route::get('disclaimer', [CommonController::class, 'disclaimer'])->name('disclaimer');
Route::get('refund-policy', [CommonController::class, 'refundPolicy'])->name('refundPolicy');
Route::get('get-quote', [CommonController::class, 'getQuote'])->name('getQuote');
Route::get('schedule-meeting', [CommonController::class, 'scheduleMeeting'])->name('scheduleMeeting');
Route::post('postQuoteData', [CommonController::class, 'postQuoteData'])->name('postQuoteData');
Route::post('storeScheduleMeetings', [CommonController::class, 'storeScheduleMeetings'])->name('storeScheduleMeetings');
Route::post('storePricingEnquiry', [CommonController::class, 'storePricingEnquiry'])->name('storePricingEnquiry');

Route::get('partner/{slug}', [CommonController::class, 'partnerDetails'])->name('partnerDetails.slug');

Route::get('industry/{slug}', [CommonController::class, 'industryDetails'])->name('industry.slug');
Route::get('solution/{slug}', [CommonController::class, 'solutionDetails'])->name('solution.slug');

Route::post('showCommonFaqList', [CommonController::class, 'showCommonFaqList'])->name('home.showCommonFaqList');

Route::get('prices', [ProductController::class, 'priceListPage'])->name('prices');
Route::get('price-details/{id}', [ProductController::class, 'productPriceDetails'])->name('productPriceDetails');

Route::post('stripeCheckout', [ProductController::class, 'stripeCheckout'])->name('stripe.checkout');
Route::get('pricing-order-review', [ProductController::class, 'CheckoutSuccess'])->name('stripe.checkout.success');

Route::get('hire-team', [CommonController::class, 'hireTeam'])->name('hire-team');
Route::post('storeHireTeam', [CommonController::class, 'storeHireTeam'])->name('home.storeHireTeam');


// Route::get('stripe/checkout','stripeCheckout')->name('stripe.checkout');
// Route::get('stripe/checkout/success','stripeCheckoutSuccess')->name('stripe.checkout.success');

