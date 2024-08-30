<?php
namespace App\Repositories;
use App\Repositories\Interfaces\StaffRepositoryInterface;
use App\Models\Staff;

class StaffRepository implements StaffRepositoryInterface
{
    public function allStaffs(){
        $staffs = Staff::select('*')->latest()->paginate(10);
        return $staffs;
    }

    public function storeStaff($data){
        $staff = new Staff();
        $staff->type = $data['type'];
        $staff->name = $data['name'];
        $staff->designation = $data['designation'];
        if($data['profile_pic']){
            $staff->profile_pic = $data['profile_pic'];
        }
        if($data['header_image']){
            $staff->header_image = $data['header_image'];
        }
        $staff->facebook_id = $data['facebook_id'];
        $staff->twitter_id = $data['twitter_id'];
        $staff->linkedin_id = $data['linkedin_id'];
        $staff->status = $data['status'];
        $staff->details = $data['details'];
        $staff->expertise = $data['expertise'];
        $staff->company = $data['company'];
        $staff->experience = $data['experience'];
        $staff->created_by = $data['created_by'];
        $staff->save();
    }

    public function findStaff($id){
        return Staff::find($id);
    }

    public function updateStaff($data, $id){
        $staff = Staff::where('id', $id)->first();
        $staff->type = $data['type'];
        $staff->name = $data['name'];
        $staff->designation = $data['designation'];
        if($data['profile_pic']){
            $staff->profile_pic = $data['profile_pic'];
        }
        if($data['header_image']){
            $staff->header_image = $data['header_image'];
        }
        $staff->facebook_id = $data['facebook_id'];
        $staff->twitter_id = $data['twitter_id'];
        $staff->linkedin_id = $data['linkedin_id'];
        $staff->status = $data['status'];
        $staff->details = $data['details'];
        $staff->expertise = $data['expertise'];
        $staff->company = $data['company'];
        $staff->experience = $data['experience'];
        $staff->save();
    }


}
