<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryController extends Controller
{

    private $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Category::with('news')->orderBy('created_at', 'desc')->get();
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
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.category.create');
    }

    public function generateSlug()
    {
        $this->slug = SlugService::createSlug(Category::class, 'slug', $this->title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'ename' => 'required|unique:categories|string|max:255',
            'hname' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = time() . "." . $request->image->extension();
            $request->image->move(public_path("assets/assets_admin/images/category"), $image);
        }
        else{
            $image = NULL;
        }
        $data['image'] = $image;

        $data['published_by'] = session('LoggedUser')->user_id;
        $save = $this->categoryRepository->storeCategory($data);

        // dd($save);

        if ($save) {
            return response()->json([
                'status' => 200,
                'message' => 'Category Added Successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 404,
                'message' => "Unable to Add Data"
            ], 404);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryRepository->findCategory($id);
        return view('admin.categories.category.update', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required',
            'status' => 'required',
        ]);
        $this->categoryRepository->updateCategory($request->all(), $id);
        return redirect()->route('admin.categories.index')->with(session()->flash('alert-success', 'Category Updated Successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoryRepository->destroyCategory($id);
        return redirect()->route('admin.categories.index')->with(session()->flash('alert-success', 'Category Delete Successfully'));
    }

    public function delete($id){
        $this->categoryRepository->deleteCategory($id);
        return redirect()->route('admin.categories.index')->with(session()->flash('alert-danger', 'Category Deleted Successfully'));
    }

}
