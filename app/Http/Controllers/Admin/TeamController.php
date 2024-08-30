<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use App\Repositories\Interfaces\TeamRepositoryInterface;

class TeamController extends Controller
{
    private $teamRepository;

    public function __construct(TeamRepositoryInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function index(Request $request)
    {
        $data = User::orderBy('created_at', 'desc')->get();
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
        return view('admin.team.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',          
            'last_name' => 'required',          
            'mobile' => 'required',          
            'email' => 'required',          
            'address' => 'required',          
            'country' => 'required',          
            'state' => 'required',          
            'city' => 'required',          
            'pincode' => 'required',          
            'password' => 'required',          
        ]);

        if ($request->hasFile('profile_pic')) {
            $profile_pic = time() . "." . $request->profile_pic->extension();
            $request->profile_pic->move(public_path("assets/assets_admin/images/team"), $profile_pic);
        }
        else{
            $profile_pic = NULL;
        }
        
        $data['profile_pic'] = $profile_pic;
        $data['user_type_id'] = 2 ;
        $data['user_designation_id'] = 2;


        $data['updated_by'] = session('LoggedUser')->user_id;

       

        $save = $this->teamRepository->storeteam($data);

        

        if ($save) {
            return response()->json([
                'status' => 200,
                'message' => 'Member Added Successfully',
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
