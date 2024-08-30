<?php
namespace App\Repositories;
use App\Models\Advertisement;
use App\Repositories\Interfaces\AdvertisementRepositoryInterface;

class AdvertisementRepository implements AdvertisementRepositoryInterface
{
    public function allAdvertisements()
    {
        return Advertisement::where('status', 0)->latest()->paginate(10);
    }

    public function storeAdvertisements($data)
    {
        return Advertisement::create($data);
    }

    public function findAdvertisements($id)
    {
        return Advertisement::find($id);
    }

    public function updateAdvertisements($data, $id)
    {
        $updated_by = session('LoggedUser')->id;

        $category = Advertisement::where('id', $id)->first();
        $category->updated_by = $updated_by;
        $category->save();
    }

    public function destroyAdvertisements($id)
    {
        $category = Advertisement::find($id);
        $category->delete();
    }

    public function deleteAdvertisements($id){
        $delete_category = Advertisement::find($id);
        // dd($category_ids);
        // if(sizeof($category_ids)>0){
        //     $delete_blog_data = Advertisement::whereIn('id', $category_ids)->delete();
        // }
        $delete_category->delete();
    }

}
