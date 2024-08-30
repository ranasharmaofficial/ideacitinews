@extends('admin.include.master')
@section('title', 'Update Sub Category')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="mt-2">
                        <h4 class="card-title float-left mt-2">Update Sub Category</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body booking_card">
                        <form method="POST" action="{{ route('admin.sub_categories.update',$subcategory->id) }}">
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
                                        <label>Category </label>
                                        <select class=" form-control" name="parent_id" required>
                                            <option value="">Select Category</option>
                                            @foreach($categories AS $category)
                                                <option value="{{$category->id}}" @if($category->id == $subcategory->parent_id) selected @endif>{{$category->title}}</option>
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sub Category Name </label>
                                        <input type="text" class="form-control" name="title" value="{{$subcategory->title}}" required> 
                                    </div>
                                </div>
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status </label>
                                        <select class=" form-control" id="status" name="status" required>
                                            <option value="1" @if($subcategory->status == 1) selected @endif>Active</option>
                                            <option value="2" @if($subcategory->status == 2) selected @endif>Inactive</option>
                                        </select> 
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

@endsection
