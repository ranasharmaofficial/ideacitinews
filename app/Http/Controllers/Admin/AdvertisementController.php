<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Repositories\Interfaces\AdvertisementRepositoryInterface;

class AdvertisementController extends Controller
{
    private $advertisementRepository;

    public function __construct(AdvertisementRepositoryInterface $advertisementRepository)
    {
        $this->advertisementRepository = $advertisementRepository;
    }

    public function index(Request $request)
    {
        $data = Advertisement::orderBy('created_at', 'desc')->get();
        if ($data->count() > 0) {
            return response()->json([
                'status' => 200,
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'data' => "No Records found"
            ], 404);
        }
    }

    public function create()
    {
        return view('admin.advertisement.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'link' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'place' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = time() . "." . $request->image->extension();
            $request->image->move(public_path("uploads/ads"), $image);
        }
        else{
            $image = NULL;
        }
        $data['image'] = $image;

        $data['added_by'] = session('LoggedUser')->user_id;
        $save = $this->advertisementRepository->storeAdvertisements($data);

        if ($save) {
            return response()->json([
                'status' => 200,
                'message' => 'Advertisement Added Successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Unable to Add Data"
            ], 404);
        }
    }

    // public function edit($id)
    // {
    //     $data = $this->newsRepository->findNews($id);
    //     return view('admin.news.update', compact('data'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'htitle' => 'required',
    //         'country' => 'required',
    //         'state' => 'required',
    //         'city' => 'required',
    //         'category_id' => 'required',
    //         'meta_tags' => 'required',
    //         'meta_description' => 'required',
    //         'description' => 'required',
    //         'category_id' => 'required',
    //         'status' => 'required',
    //     ]);
    //     $this->newsRepository->updateNews($request->all(), $id);
    //     return redirect()->route('admin.news.index')->with(session()->flash('alert-success', 'News Updated Successfully'));
    // }

    // public function destroy($id)
    // {
    //     $this->newsRepository->destroyNews($id);
    //     return redirect()->route('admin.news.index')->with(session()->flash('alert-success', 'News Delete Successfully'));
    // }

    // public function delete($id){
    //     $this->newsRepository->deleteNews($id);
    //     return redirect()->route('admin.news.index')->with(session()->flash('alert-danger', 'News Deleted Successfully'));
    // }
}
