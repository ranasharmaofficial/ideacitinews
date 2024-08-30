<?php
namespace App\Repositories;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;
use App\Models\ImageCategory;
use App\Models\Gallery;
use App\Models\CmsPage;
use App\Models\MasterProduct;
use App\Models\MasterService;
use App\Models\CustomerLead;
use App\Models\JobEnquiry;
use App\Models\Subscriber;
use App\Models\Testimonial;
use App\Models\HireTeam;
use App\Models\OnlineEnquiry;

class AdminRepository implements AdminRepositoryInterface
{
    public function dashboardDataCount(){
        $user_count = User::where(['user_type_id' => 3, 'status' => 1])->count();
        $category_count = Category::where('parent_id', 0)->where('status', 1)->count();
        $subcategory_count = Category::where('parent_id', '!=', 0)->where('status', 1)->count();
        $blog_count = Blog::where('status', 1)->count();
        $blog_like_count = Blog::where('status', 1)->sum('total_like');
        $blog_comment_count = Blog::where('status', 1)->sum('total_comment');
        $blog_view_count = Blog::sum('total_view');
        $image_category_count = ImageCategory::count();
        $gallery_count = Gallery::count();
        $page_count = CmsPage::where('status', 1)->count();
        $product_count = MasterProduct::where('status', 1)->count();
        $service_count = MasterService::where('status', 1)->count();
        $customer_lead = CustomerLead::count();
        $job_enquiry_count = JobEnquiry::count();
        $hire_request_count = HireTeam::count();
        $subscriber_count = Subscriber::count();
        $testimonial_count = Testimonial::count();
        $product_enquiry_count = OnlineEnquiry::count();

        $data = [
            'user_count' => $user_count,
            'category_count' => $category_count,
            'subcategory_count' => $subcategory_count,
            'blog_count' => $blog_count,
            'blog_like_count' => $blog_like_count,
            'blog_comment_count' => $blog_comment_count,
            'blog_view_count' => $blog_view_count,
            'image_category_count' => $image_category_count,
            'gallery_count' => $gallery_count,
            'page_count' => $page_count,
            'product_count' => $product_count,
            'service_count' => $service_count,
            'customer_lead' => $customer_lead,
            'job_enquiry_count' => $job_enquiry_count,
            'hire_request_count' => $hire_request_count,
            'subscriber_count' => $subscriber_count,
            'testimonial_count' => $testimonial_count,
            'product_enquiry_count' => $product_enquiry_count,
        ];
        return $data;
    }


}
