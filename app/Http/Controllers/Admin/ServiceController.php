<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Models\ServiceSection;

class ServiceController extends Controller
{
    private $serviceRepository;
    public function __construct(ServiceRepositoryInterface $serviceRepository){
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(Request $request){
        $pages =  $this->serviceRepository->allServices($request);
        return view('admin.service.service.index', compact('pages', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create(){
        $categories =  $this->serviceRepository->getServiceList();
        return view('admin.service.service.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
        $data = $request->validate([
            'parent_id' => 'required',
            'icon' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'banner' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
            'title' => 'required|string|max:255',
            'page_url' => 'nullable',
            'status' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'meta_description' => 'nullable',
            'other_icon' => 'nullable',
            'short_description' => 'nullable',
        ]);

        if($request->has('icon')){
            $data['icon'] = upload_asset($request->icon, "cms");
        }else{
            $data['icon'] = NULL;
        }

        if($request->has('banner')){
            $data['banner'] = upload_asset($request->banner, "cms");
        }else{
            $data['banner'] = NULL;
        }

        if($request->has('image')){
            $data['image'] = upload_asset($request->image, "cms");
        }else{
            $data['image'] = NULL;
        }

        $data['created_by'] = session('LoggedUser')->id;
        $this->serviceRepository->storeService($request, $data);

        return redirect()->route('admin.service.index')->with(session()->flash('alert-success', 'CmsPage Created Successfully'));
    }

    public function generateSlug(){
        $this->slug = SlugService::createSlug(MasterService::class, 'slug', $this->title);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function edit($id){
        $page = $this->serviceRepository->findService($id);
        if($page){
            $menus =  $this->serviceRepository->getServiceList();
            return view('admin.service.service.update', compact('page', 'menus'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        $data = $request->validate([
            'parent_id' => 'required',
            'title' => 'required|string|max:255',
            'page_url' => 'nullable',
            'status' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'meta_description' => 'nullable',
            'other_icon' => 'nullable',
            'short_description' => 'nullable',
        ]);

        if($request->has('icon')){
            $data['icon'] = upload_asset($request->icon, "cms");
        }else{
            $data['icon'] = NULL;
        }

        if($request->has('banner')){
            $data['banner'] = upload_asset($request->banner, "cms");
        }else{
            $data['banner'] = NULL;
        }

        if($request->has('image')){
            $data['image'] = upload_asset($request->image, "cms");
        }else{
            $data['image'] = NULL;
        }

        $data['updated_by'] = session('LoggedUser')->id;
        $this->serviceRepository->updateService($data, $id);
        return redirect()->route('admin.service.index')->with(session()->flash('alert-success', 'CmsPage Updated Successfully'));
    }

    public function delete($id){
        $this->serviceRepository->deleteService($id);
        return redirect()->route('admin.service.index')->with(session()->flash('alert-danger', 'Data Deleted Successfully'));
    }

    /** Page Section CRUD Start */
        public function serviceSectionIndex(Request $request){
            $service_sections =  $this->serviceRepository->allServiceSectionList($request);
            $cms_pages =  $this->serviceRepository->getServiceList();
            return view('admin.service.service_section.index', compact('service_sections', 'cms_pages', 'request'));
        }

        public function serviceSectionCreate(){
            $cms_pages =  $this->serviceRepository->getServiceList();
            return view('admin.service.service_section.create', compact('cms_pages'));
        }

        public function serviceSectionStore(Request $request){
            $data = $request->validate([
                'page_id' => 'required|numeric',
                'section_name' => 'required',
                'title' => 'required_without:description',
                'description' => 'required_without:title',
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'status' => 'required',
            ]);

            if($request->has('image')){
                $data['image'] = upload_asset($request->image, "cms");
            }else{
                $data['image'] = NULL;
            }

            $data['created_by'] = session('LoggedUser')->id;
            $checkSectionAdded = ServiceSection::where('page_id', $request->page_id)->where('section_name', $request->section_name)->count();
            if($checkSectionAdded==0){
                $this->serviceRepository->storeServiceSection($data, 'store');
                return redirect()->route('admin.service_sections.index')->with(session()->flash('alert-success', 'Page Section Created Successfully'));
            }else{
                return redirect()->route('admin.service_sections.index')->with(session()->flash('alert-danger', 'Already Exist!'));
            }

        }

        public function serviceSectionEdit($id){
            $page_section = $this->serviceRepository->findServiceSection($id);
            if($page_section){
                $cms_pages =  $this->serviceRepository->getServiceList();
                return view('admin.service.service_section.update', compact('page_section', 'cms_pages'));
            }
        }

        public function serviceSectionUpdate(Request $request, $id){
            $data = $request->validate([
                'page_id' => 'required|numeric',
                // 'section_name' => 'required|unique:page_sections,section_name,'.$id,
                'section_name' => 'required|',
                'title' => 'required_without:description',
                'description' => 'required_without:title',
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'status' => 'required',
            ]);

            if($request->has('image')){
                $data['image'] = upload_asset($request->image, "cms");
            }else{
                $data['image'] = NULL;
            }

            $data['id'] = $request->id;
            $data['created_by'] = session('LoggedUser')->id;
            $this->serviceRepository->storeServiceSection($data, 'update');
            return redirect()->route('admin.service_sections.index')->with(session()->flash('alert-success', 'Page Section Updated Successfully'));
        }

        public function deleteServiceSection($id){
            $this->serviceRepository->deleteServiceSection($id);
            return redirect()->route('admin.service_sections.index')->with(session()->flash('alert-danger', 'Data Deleted Successfully'));
        }
    /** Page Section CRUD End */

    /** Section Data CRUD Start */
        public function servicesectionDataIndex(Request $request){
            $page_sections =  $this->serviceRepository->allServiceSectionDataList($request);
            $cms_pages =  $this->serviceRepository->getServiceList();
            return view('admin.service.service_section_data.index', compact('page_sections', 'cms_pages', 'request'));
        }

        public function servicefetchSection(Request $request){
            $data['sections'] = $this->serviceRepository->getServiceSectionList($request->page_id);
            return response()->json($data);
        }

        public function servicesectionDataCreate(){
            $cms_pages =  $this->serviceRepository->getServiceList();
            return view('admin.service.service_section_data.create', compact('cms_pages'));
        }

        public function servicesectionDataStore(Request $request){
            $data = $request->validate([
                'page_id' => 'required|numeric',
                'section_id' => 'required|numeric',
                'title' => 'required_without:description',
                'description' => 'required_without:title',
                'img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'order_number' => 'required|numeric',
                'other' => 'nullable',
                'status' => 'required|numeric',
            ]);

            if($request->has('img')){
                $data['img'] = upload_asset($request->img, "cms");
            }else{
                $data['img'] = NULL;
            }

            if($request->has('other')){
                $data['other'] = upload_asset($request->other, "cms");
            }else{
                $data['other'] = NULL;
            }

            $data['created_by'] = session('LoggedUser')->id;
            $this->serviceRepository->storeServiceSectionData($data, 'store');
            return redirect()->route('admin.servicesection_data.index')->with(session()->flash('alert-success', 'Section Data Created Successfully'));
        }

        public function servicesectionDataEdit($id){
            $section_data = $this->serviceRepository->findServiceSectionData($id);
            if($section_data){
                $cms_pages =  $this->serviceRepository->getServiceList();
                $page_sections =  $this->serviceRepository->getServiceSectionList($section_data->page_id);
                return view('admin.service.service_section_data.update', compact('section_data', 'cms_pages', 'page_sections'));
            }
        }

        public function servicesectionDataUpdate(Request $request, $id){
            $data = $request->validate([
                'page_id' => 'required|numeric',
                'section_id' => 'required|numeric',
                'title' => 'required_without:description',
                'description' => 'required_without:title',
                'img' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'order_number' => 'required|numeric',
                // 'other' => 'nullable',
                'status' => 'required|numeric',
            ]);
            // dd($request->all());
            if($request->has('img')){
                $data['img'] = upload_asset($request->img, "cms");
            }else{
                $data['img'] = NULL;
            }

            if($request->has('other')){
                $data['other'] = upload_asset($request->other, "cms");
            }else{
                $data['other'] = NULL;
            }

            $data['id'] = $request->id;
            $data['updated_by'] = session('LoggedUser')->id;
            $this->serviceRepository->storeServiceSectionData($data, 'update');
            return redirect()->route('admin.servicesection_data.index')->with(session()->flash('alert-success', 'Page Section Updated Successfully'));
        }

        public function deleteServiceSectionData($id){
            $this->serviceRepository->deleteServiceSectionData($id);
            return redirect()->route('admin.servicesection_data.index')->with(session()->flash('alert-danger', 'Data Deleted Successfully'));
        }
    /** Section Data CRUD End */
}
