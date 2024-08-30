@extends('admin.include.master')
@section('title', 'Add New Team')
@section('content')

<!-- Page Header -->
<div style="background:linear-gradient(45deg, #f33057, rgb( 56, 88, 249 ) );"  class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
    <div>
        <h4 class="fw-medium mb-2">Team</h4>
        <div class="ms-sm-1 ms-0">
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Team</a></li>
                    <li class="breadcrumb-item active fw-normal" aria-current="page">Add Team</li>
                </ol>
            </nav>
        </div>
    </div>

</div>
<!-- Page Header Close -->


<div class="main-content app-content">
    <div class="container-fluid">
     <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body booking_card">
                        <form method="post" action="{{ route('admin.staffs.store') }}" enctype="multipart/form-data">
                            @csrf
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
                                            <option selected value="Team">Team</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter Name" value="{{ old('name') }}" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Designtion <span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter Designation" value="{{ old('designation') }}" class="form-control" name="designation">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Expertise <span class="text-danger">*</span> </label>
                                        <input type="text" value="{{ old('expertise') }}" class="form-control" placeholder="Enter Expertise" name="expertise">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company <span class="text-danger">*</span> </label>
                                        <input type="text" value="{{ old('company') }}" class="form-control" placeholder="Enter Company" name="company">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Experience <span class="text-danger">*</span> </label>
                                        <input type="text" value="{{ old('experience') }}" class="form-control" placeholder="Enter Experience" name="experience">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profile Pic <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="profile_pic">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Header Image <span class="text-danger">*</span></label>
                                        <input type="file"  class="form-control" name="header_image">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Facebook ID <span class="text-danger"></span> </label>
                                        <input type="text" placeholder="https://facebook.com/username" value="{{ old('facebook_id') }}"  class="form-control" name="facebook_id">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Twitter/X ID <span class="text-danger"></span> </label>
                                        <input type="text" placeholder="https://x.com/username" value="{{ old('twitter_id') }}" class="form-control" name="twitter_id">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Linkedin ID <span class="text-danger"></span> </label>
                                        <input type="text" placeholder="https://linkedin_id.com/username"  value="{{ old('linkedin_id') }}" class="form-control" name="linkedin_id">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Details <span class="text-danger"></span> </label>
                                        <textarea id="myeditor" type="text" class="form-control" name="details">
                                            {{ old('details') }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status <span class="text-danger">*</span></label>
                                        <select class=" form-control" name="status">
                                            <option @if(old('status')=='1') selected @endif value="1" >Active</option>
                                            <option  @if(old('status')=='2') selected @endif value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary buttonedit1">Add</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

@endsection

@section('script')
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#answer',
        });

    </script>
@endsection
