<?php
namespace App\Repositories;
use App\Models\Team;
use App\Models\User;
use App\Models\UserLogin;
use App\Repositories\Interfaces\TeamRepositoryInterface;

class TeamRepository implements TeamRepositoryInterface
{
    public function allteam()
    {
        return User::where('status', 0)->latest()->paginate(10);
    }

    public function storeteam($data)
    {
        // return User::create($data);
            $user = new User;
            $user->first_name = $data['first_name'];  
            $user->last_name = $data['last_name'];
            $user->mobile = $data['mobile'];
            $user->email = $data['email'];
            $user->address = $data['address'];
            $user->country = $data['country'];
            $user->state = $data['state'];
            $user->city = $data['city'];
            $user->pincode = $data['pincode'];
            $user->address = $data['address'];
            $user->profile_pic = $data['profile_pic'];
            $user->user_type_id = $data['user_type_id'];
            $user->user_designation_id = $data['user_designation_id'];
            $user->save();
            
            $user_login = UserLogin::create([
            'username' => $data['email'],
            'password' => $data['password'],
            'user_id' => $user->id,
            'user_type_id' => 2,
            'status' => 1,
        ]);

        return $user_login;


    }

    public function findteam($id)
    {
        return User::find($id);
    }

    public function updateteam($data, $id)
    {
        $updated_by = session('LoggedUser')->id;

        $data = User::where('id', $id)->first();
        $data->updated_by = $updated_by;
        $data->save();
    }

    public function destroyteam($id)
    {
        $data = User::find($id);
        $data->delete();
    }

    public function deleteteam($id){
        $delete_data = User::find($id);
        // dd($category_ids);
        // if(sizeof($category_ids)>0){
        //     $delete_blog_data = Advertisement::whereIn('id', $category_ids)->delete();
        // }
        $delete_data->delete();
    }

}
