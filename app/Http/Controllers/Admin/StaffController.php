<?php

namespace App\Http\Controllers\Admin;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\StaffRepositoryInterface;

class StaffController extends Controller
{

    private $staffRepository;

    public function __construct(StaffRepositoryInterface $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $staffs =  $this->staffRepository->allStaffs();
        return view('admin.staffs.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.staffs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $data = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'header_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook_id' => 'nullable',
            'twitter_id' => 'nullable',
            'linkedin_id' => 'nullable',
            'details' => 'required',
            'status' => 'required',
            'expertise' => 'required',
            'company' => 'required',
            'experience' => 'required',
        ]);

        if($request->has('profile_pic')){
            $data['profile_pic'] = upload_asset($request->profile_pic, 'staff');
        }else{
            $data['profile_pic'] = NULL;
        }

        if($request->has('header_image')){
            $data['header_image'] = upload_asset($request->header_image, 'staff');
        }else{
            $data['header_image'] = NULL;
        }


        $data['created_by'] = session('LoggedUser')->id;
        $this->staffRepository->storeStaff($data);

        return redirect()->route('admin.staffs.index')->with(session()->flash('alert-success', 'Staff Created Successfully'));
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
        $staff = $this->staffRepository->findStaff($id);
        return view('admin.staffs.update', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $data = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'designation' => 'required',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'header_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook_id' => 'nullable',
            'twitter_id' => 'nullable',
            'linkedin_id' => 'nullable',
            'details' => 'required',
            'status' => 'required',
            'expertise' => 'required',
            'company' => 'required',
            'experience' => 'required',
        ]);

        if($request->has('profile_pic')){
            $data['profile_pic'] = upload_asset($request->profile_pic, 'staff');
        }else{
            $data['profile_pic'] = NULL;
        }

        if($request->has('header_image')){
            $data['header_image'] = upload_asset($request->header_image, 'staff');
        }else{
            $data['header_image'] = NULL;
        }

        $this->staffRepository->updateStaff($data, $id);

        return redirect()->route('admin.staffs.index')->with(session()->flash('alert-success', 'Staff Updated Successfully'));
    }


}
