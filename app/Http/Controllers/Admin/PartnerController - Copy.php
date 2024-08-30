<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\PartnerRepositoryInterface;
use App\Models\PartnerSection;


class PartnerController extends Controller
{
    private $partnerRepository;
    public function __construct(PartnerRepositoryInterface $partnerRepository){
        $this->partnerRepository = $partnerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $pages =  $this->partnerRepository->allPartners($request);
        return view('admin.partners.partner.index', compact('pages', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories =  $this->partnerRepository->getPartnerList();
        return view('admin.partners.partner.create', compact('categories'));
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
            'table_fields' => 'required|array',
            'table_fields.*' => 'required|string',
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
        $this->partnerRepository->storepartner($request, $data);

        return redirect()->route('admin.partner.index')->with(session()->flash('alert-success', 'CmsPage Created Successfully'));
    }

    public function generateSlug(){
        $this->slug = SlugService::createSlug(MasterPartner::class, 'slug', $this->title);
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
        $page = $this->partnerRepository->findPartner($id);
        if($page){
            $menus =  $this->partnerRepository->getPartnerList();
            return view('admin.partners.partner.update', compact('page', 'menus'));
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
            // 'page_url' => 'nullable',
            'status' => 'required',
            'meta_title' => 'nullable',
            'meta_tag' => 'nullable',
            'meta_description' => 'nullable',
            'other_icon' => 'nullable',
            'short_description' => 'nullable',
            'table_fields' => 'required|array',
            'table_fields.*' => 'required|string',
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
        $this->partnerRepository->updatePartner($data, $id);
        return redirect()->route('admin.partner.index')->with(session()->flash('alert-success', 'Updated Successfully'));
    }

    /** Page Section CRUD Start */
        public function partnerSectionIndex(Request $request){
            $partner_sections =  $this->partnerRepository->allpartnerSectionList($request);
            $cms_pages =  $this->partnerRepository->getPartnerList();
            return view('admin.partners.partner_section.index', compact('partner_sections', 'cms_pages', 'request'));
        }

        public function partnerSectionCreate(){
            $cms_pages =  $this->partnerRepository->getPartnerList();
            return view('admin.partners.partner_section.create', compact('cms_pages'));
        }

        public function partnerSectionStore(Request $request){
            $data = $request->validate([
                'page_id' => 'required|numeric',
                // 'section_name' => 'required|unique:partner_sections,section_name',
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
            $checkSectionAdded = partnerSection::where('page_id', $request->page_id)->where('section_name', $request->section_name)->count();
            if($checkSectionAdded==0){
                $this->partnerRepository->storepartnerSection($data, 'store');
                return redirect()->route('admin.partner_sections.index')->with(session()->flash('alert-success', 'Page Section Created Successfully'));
            }else{
                return redirect()->route('admin.partner_sections.index')->with(session()->flash('alert-danger', 'Already Exist!'));
            }


        }

        public function partnerSectionEdit($id){
            $page_section = $this->partnerRepository->findpartnerSection($id);
            if($page_section){
                $cms_pages =  $this->partnerRepository->getPartnerList();
                return view('admin.partners.partner_section.update', compact('page_section', 'cms_pages'));
            }
        }

        public function partnerSectionUpdate(Request $request, $id){
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

            $data['id'] = $request->id;
            $data['created_by'] = session('LoggedUser')->id;
            $this->partnerRepository->updatepartnerSection($data, 'update');
            return redirect()->route('admin.partner_sections.index')->with(session()->flash('alert-success', 'Page Section Updated Successfully'));
        }
    /** Page Section CRUD End */

    /** Section Data CRUD Start */
        public function partnersectionDataIndex(Request $request){
            $page_sections =  $this->partnerRepository->allPartnerSectionDataList($request);
            $cms_pages =  $this->partnerRepository->getPartnerList();
            return view('admin.partners.partner_section_data.index', compact('page_sections', 'cms_pages', 'request'));
        }

        public function partnerfetchSection(Request $request){
            $data['sections'] = $this->partnerRepository->getPartnerSectionList($request->page_id);
            return response()->json($data);
        }

        public function partnersectionDataCreate(){
            $cms_pages =  $this->partnerRepository->getPartnerList();
            return view('admin.partners.partner_section_data.create', compact('cms_pages'));
        }

        public function partnersectionDataStore(Request $request){
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
            $this->partnerRepository->storePartnerSectionData($data, 'store');
            return redirect()->route('admin.partnersection_data.index')->with(session()->flash('alert-success', 'Section Data Created Successfully'));
        }

        public function partnersectionDataEdit($id){
            $section_data = $this->partnerRepository->findPartnertSectionData($id);
            if($section_data){
                $cms_pages =  $this->partnerRepository->getPartnerList();
                $page_sections =  $this->partnerRepository->getPartnerSectionList($section_data->page_id);
                return view('admin.partners.partner_section_data.update', compact('section_data', 'cms_pages', 'page_sections'));
            }
        }

        public function partnersectionDataUpdate(Request $request, $id){
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
            $this->partnerRepository->storePartnerSectionData($data, 'update');
            return redirect()->route('admin.partnersection_data.index')->with(session()->flash('alert-success', 'Page Section Updated Successfully'));
        }
    /** Section Data CRUD End */

        public function deletepartnerSectionData(Request $request){
            dd($request->all());
        }




}
