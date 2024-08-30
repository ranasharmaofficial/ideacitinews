<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

use App\Repositories\Interfaces\LoginRepositoryInterface;
use App\Repositories\LoginRepository;
use App\Repositories\Interfaces\DesignationRepositoryInterface;
use App\Repositories\DesignationRepository;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Repositories\AdminRepository;
use App\Repositories\Interfaces\TeamRepositoryInterface;
use App\Repositories\TeamRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use App\Repositories\NewsRepository;
use App\Repositories\Interfaces\AdvertisementRepositoryInterface;
use App\Repositories\AdvertisementRepository;
use App\Repositories\Interfaces\EpaperRepositoryInterface;
use App\Repositories\EpaperRepository;
use App\Repositories\Interfaces\SubCategoryRepositoryInterface;
use App\Repositories\SubCategoryRepository;
use App\Repositories\Interfaces\BlogRepositoryInterface;
use App\Repositories\BlogRepository;
use App\Repositories\Interfaces\ImageCategoryRepositoryInterface;
use App\Repositories\ImageCategoryRepository;
use App\Repositories\Interfaces\GalleryRepositoryInterface;
use App\Repositories\GalleryRepository;
use App\Repositories\Interfaces\CmsPageRepositoryInterface;
use App\Repositories\CmsPageRepository;
use App\Repositories\Interfaces\TestimonialRepositoryInterface;
use App\Repositories\TestimonialRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\BusinessRepositoryInterface;
use App\Repositories\BusinessRepository;
use App\Repositories\Interfaces\FaqRepositoryInterface;
use App\Repositories\FaqRepository;
use App\Repositories\Interfaces\StaffRepositoryInterface;
use App\Repositories\StaffRepository;
use App\Repositories\Interfaces\IndustryRepositoryInterface;
use App\Repositories\IndustryRepository;
use App\Repositories\Interfaces\CareerRepositoryInterface;
use App\Repositories\CareerRepository;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Repositories\ProductRepository;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Repositories\ServiceRepository;
use App\Repositories\Interfaces\PricingRepositoryInterface;
use App\Repositories\PricingRepository;
use App\Repositories\Interfaces\SolutionRepositoryInterface;
use App\Repositories\SolutionRepository;
use App\Repositories\Interfaces\PartnerRepositoryInterface;
use App\Repositories\PartnerRepository;
use App\Repositories\Interfaces\EventCategoryRepositoryInterface;
use App\Repositories\EventCategoryRepository;
use App\Repositories\Interfaces\EventGalleryRepositoryInterface;
use App\Repositories\EventGalleryRepository;

use App\Repositories\Interfaces\WebInterface\CommonRepositoryInterface;
use App\Repositories\WebRepo\CommonRepository;
use App\Repositories\Interfaces\WebInterface\WebServiceRepositoryInterface;
use App\Repositories\WebRepo\WebServiceRepository;
use App\Repositories\Interfaces\WebInterface\HProductRepositoryInterface;
use App\Repositories\WebRepo\HProductRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoginRepositoryInterface::class, LoginRepository::class);
        $this->app->bind(AdminRepositoryInterface::class, AdminRepository::class);
        $this->app->bind(DesignationRepositoryInterface::class, DesignationRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(NewsRepositoryInterface::class, NewsRepository::class);
        $this->app->bind(AdvertisementRepositoryInterface::class, AdvertisementRepository::class);
        $this->app->bind(EpaperRepositoryInterface::class, EpaperRepository::class);
        $this->app->bind(TeamRepositoryInterface::class, TeamRepository::class);
        $this->app->bind(SubCategoryRepositoryInterface::class, SubCategoryRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(ImageCategoryRepositoryInterface::class, ImageCategoryRepository::class);
        $this->app->bind(GalleryRepositoryInterface::class, GalleryRepository::class);
        $this->app->bind(CmsPageRepositoryInterface::class, CmsPageRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(TestimonialRepositoryInterface::class, TestimonialRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(BusinessRepositoryInterface::class, BusinessRepository::class);
        $this->app->bind(FaqRepositoryInterface::class, FaqRepository::class);
        $this->app->bind(StaffRepositoryInterface::class, StaffRepository::class);
        // $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(IndustryRepositoryInterface::class, IndustryRepository::class);
        $this->app->bind(CareerRepositoryInterface::class, CareerRepository::class);
        $this->app->bind(PricingRepositoryInterface::class, PricingRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(SolutionRepositoryInterface::class, SolutionRepository::class);
        $this->app->bind(PartnerRepositoryInterface::class, PartnerRepository::class);
        $this->app->bind(EventCategoryRepositoryInterface::class, EventCategoryRepository::class);
        $this->app->bind(EventGalleryRepositoryInterface::class, EventGalleryRepository::class);

        /** Bind for Frontend */
        $this->app->bind(CommonRepositoryInterface::class, CommonRepository::class);
        $this->app->bind(HProductRepositoryInterface::class, HProductRepository::class);
        $this->app->bind(WebServiceRepositoryInterface::class, WebServiceRepository::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
