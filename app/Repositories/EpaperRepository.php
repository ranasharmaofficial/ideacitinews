<?php
namespace App\Repositories;
use App\Models\Epaper;
use App\Repositories\Interfaces\EpaperRepositoryInterface;

class EpaperRepository implements EpaperRepositoryInterface
{
    public function allEpaper()
    {
        return Epaper::where('status', 0)->latest()->paginate(10);
    }

    public function storeEpaper($data)
    {
        return Epaper::create($data);
    }

    public function findEpaper($id)
    {
        return Epaper::find($id);
    }

    public function updateEpaper($data, $id)
    {
        $updated_by = session('LoggedUser')->id;

        $category = Epaper::where('id', $id)->first();
        $category->updated_by = $updated_by;
        $category->save();
    }

    public function destroyEpaper($id)
    {
        $category = Epaper::find($id);
        $category->delete();
    }

    public function deleteEpaper($id){
        $delete_category = Epaper::find($id);
        // dd($category_ids);
        // if(sizeof($category_ids)>0){
        //     $delete_blog_data = Epaper::whereIn('id', $category_ids)->delete();
        // }
        $delete_category->delete();
    }

}
