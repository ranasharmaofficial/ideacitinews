<?php
namespace App\Repositories;
use App\Repositories\Interfaces\NewsRepositoryInterface;
use App\Models\News;
use App\Models\Blog;

class NewsRepository implements NewsRepositoryInterface
{
    public function allNews()
    {
        return News::where('id', 0)->latest()->paginate(10);
    }

    public function storeNews($data)
    {
        return News::create($data);
    }

    public function findNews($id)
    {
        return News::find($id);
    }

    public function updateNews($data, $id)
    {
        $updated_by = session('LoggedUser')->id;
        $news = News::where('id', $id)->first();
        $news->title = $data['title'];
        $news->htitle = $data['htitle'];
        $news->country = $data['country'];
        $news->state = $data['state'];
        $news->city = $data['city'];
        $news->meta_tags = $data['meta_tags'];
        $news->meta_description = $data['meta_description'];
        $news->description = $data['description'];
        $news->status = $data['status'];
        $news->category_id = $data['category_id'];
        $news->published_by = $published_by;
        $news->save();
    }

    public function destroyNews($id)
    {
        $news = News::find($id);
        $news->delete();
    }

    // public function deleteNews($id){
    //     $delete_category = Category::find($id);
    //     $category_ids = Blog::where('category_id', $id)->pluck('id');
    //     // dd($category_ids);
    //     if(sizeof($category_ids)>0){
    //         $delete_blog_data = Blog::whereIn('id', $category_ids)->delete();
    //     }
    //     $delete_category->delete();
    // }

}
