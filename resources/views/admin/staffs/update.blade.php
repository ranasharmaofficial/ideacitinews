@extends('admin.include.master')
@section('title', 'Update Staff')
@section('content')
<!-- Page Header -->
<div style="background:linear-gradient(45deg, #f33057, rgb( 56, 88, 249 ) );"  class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
    <div>
        <h4 class="fw-medium mb-2">Team</h4>
        <div class="ms-sm-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Team</a></li>
                    <li class="breadcrumb-item active fw-normal" aria-current="page">Team List</li>
                </ol>
            </nav>
        </div>
    </div>

</div>
<!-- Page Header Close -->

 
 
<div class="page-wrapper">
    <div class="content container-fluid">
         <div class="main-content app-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body booking_card">
                        <form method="post" action="{{ route('admin.staffs.update',$staff->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="row formtype">
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Type <span class="text-danger">*</span></label>
                                        <select class=" form-control" name="type">
                                            <option value="Main Staff" @if($staff->type == "Main Staff") selected @endif>Main Staff</option>
                                            <option value="Team" @if($staff->type == "Team") selected @endif>Team</option>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="name" value="{{$staff->name}}"> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designtion <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="designation" value="{{$staff->designation}}"> 
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Expertise <span class="text-danger">*</span> </label>
                                        <input type="text" value="{{ $staff->expertise }}" class="form-control" placeholder="Enter Expertise" name="expertise">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company <span class="text-danger">*</span> </label>
                                        <input type="text" value="{{ $staff->company }}" class="form-control" placeholder="Enter Company" name="company">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Experience <span class="text-danger">*</span> </label>
                                        <input type="text" value="{{ $staff->experience }}" class="form-control" placeholder="Enter Experience" name="experience">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profile Pic <span class="text-danger">*</span></label>
                                        <input type="file"  class="form-control" name="profile_pic">
                                        @if($staff->profile_pic != null)
                                            <img src="{{ static_asset($staff->profile_pic)}}" height="100" width="100">
                                        @endif
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Header Image <span class="text-danger">*</span></label>
                                        <input type="file"  class="form-control" name="header_image">
                                        @if($staff->header_image != null)
                                            <img src="{{ static_asset($staff->header_image)}}" height="100" width="300">
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Facebook ID <span class="text-danger"></span> </label>
                                        <input type="text" class="form-control" name="facebook_id" value="{{$staff->facebook_id}}"> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter/X ID <span class="text-danger"></span> </label>
                                        <input type="text" class="form-control" name="twitter_id" value="{{$staff->twitter_id}}"> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Linkedin ID <span class="text-danger"></span> </label>
                                        <input type="text" class="form-control" name="linkedin_id" value="{{$staff->linkedin_id}}"> 
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status </label>
                                        <select class=" form-control" name="status" required>
                                            <option value="1" @if($staff->status == 1) selected @endif>Active</option>
                                            <option value="2" @if($staff->status == 2) selected @endif>Inactive</option>
                                        </select> 
                                    </div>
                                </div>
								
								<div class="col-md-12">
                                    <div class="form-group">
                                        <label>Details <span class="text-danger"></span> </label>
                                        <textarea id="myeditor" type="text" class="form-control" name="details">
                                            {{ $staff->details }}
                                        </textarea>
                                    </div>
                                </div>

                            </div>	
                            <button type="submit" class="btn btn-primary buttonedit1">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>
@endsection
