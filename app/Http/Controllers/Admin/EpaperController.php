<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Epaper;
use App\Repositories\Interfaces\EpaperRepositoryInterface;

class EpaperController extends Controller
{
    private $epaperRepository;

    public function __construct(EpaperRepositoryInterface $epaperRepository)
    {
        $this->epaperRepository = $epaperRepository;
    }

    public function index(Request $request)
    {
        $data = Epaper::orderBy('created_at', 'desc')->get();
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
        return view('admin.epaper.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'file' => 'required|mimes:pdf|',
        ]);

        if ($request->hasFile('file')) {
            $image = time() . "." . $request->file->extension();
            $request->file->move(public_path("uploads/epaper"), $image);
        }
        else{
            $image = NULL;
        }
        $data['file'] = $image;

        $data['added_by'] = session('LoggedUser')->user_id;
        $save = $this->epaperRepository->storeEpaper($data);

        if ($save) {
            return response()->json([
                'status' => 200,
                'message' => 'Epaper Added Successfully',
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
