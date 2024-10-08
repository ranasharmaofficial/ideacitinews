@extends('admin.include.master')
@section('title', 'Add Videos')
@section('content')

<div style="background:linear-gradient(45deg, #f33057, rgb( 56, 88, 249 ) );" class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h4 class="fw-medium mb-2">Add Videos</h4>
                    <div class="ms-sm-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a class="" href="javascript:void(0);">Video</a></li>
                                <li class="breadcrumb-item  active fw-normal" aria-current="page">Add Videos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                 
            </div>
            <!-- Page Header Close -->



            <!--APP-CONTENT START-->
            <div class="main-content app-content">
                <div class="container-fluid">


                   <!-- Start:: row-2 -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">
                                    Add Videos
									<a style="right: 5px;position: absolute;float: right;" href="{{ url('admin/videos-of-assembly') }}" class="btn btn-danger-light btn-wave btn-sm float-right">Videos List</a>
                                </div>
                            </div>
                            <div class="card-body">
								<form method="post" action="{{ route('admin.commonVideosStore') }}" enctype="multipart/form-data">
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
												<label>Select Video Category <span class="text-danger">*</span> </label>
												<select type="text" placeholder="Enter Video Title" class="form-control" name="category">
													<option value="">Select Video Category</option>
													@foreach(\App\Models\VideoCategory::where('id', 4)->get() as $val)
														<option value="{{ $val->id }}">{{ $val->title }}</option>
													@endforeach
												</select>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label>Status <span class="text-danger">*</span></label>
												<select class=" form-control" name="status">
													<option value="1" selected>Active</option>
													<option value="2">Inactive</option>
												</select> 
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label>Youtube Link <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Youtube Link" name="link"> 
											</div>
										</div>

									</div>	
									<button type="submit" class="btn btn-primary buttonedit1">Add</button>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End:: row-2 -->

                    

                </div>
            </div>
            <!--APP-CONTENT CLOSE-->
			
			
	 

@endsection
