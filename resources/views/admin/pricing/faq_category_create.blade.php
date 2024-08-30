@extends('admin.include.master')
@section('title', 'Add FAQ Category')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-10">
                    <div class="mt-2">
                        <h4 class="card-title float-left mt-2">Add FAQ Category</h4>
                    </div>
                </div>
				 <div class="col-2">
                    <div class="mt-2">
                        <a href="{{ url('admin/faq-category-list') }}" class="btn btn-primary btn-sm">FAQ Category List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body booking_card">
                        <form method="post" action="{{ route('admin.storeFaqCategory') }}" enctype="multipart/form-data">
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
                                        <label>Select Type <span class="text-danger">*</span> </label>
                                        <select type="text" class="form-control" name="type"> 
											<option value="">Select Type</option>
											<option value="1">Product</option>
											<option value="2">Service</option>
											<option value="0">Common</option>
										</select>	
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label>Enter FAQ Category Name <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="name"> 
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

                            </div>	
                            <button type="submit" class="btn btn-primary buttonedit1">Add</button>
                        </form>

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
