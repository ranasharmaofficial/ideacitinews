@extends('admin.include.master')
@section('title', 'Image Category List')
@section('content')


@if(false)
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <a class="btn btn-primary float-right" href="{{ url('admin/image_categories/create') }}">Add New Image Category</a>

                    <div class="breadcrumb mt-3 border-bottom pb-2">
                        <a href="{{ url('') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>/Image Category
                    </div>
                    <!-- <div class="mt-2">
                        <h4 class="card-title float-left mt-2">Category</h4>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">

                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title float-left mt-2">Image Category List</h4>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-stripped table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>
                                            <div class="actions"> @if($value->status == 1) <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> @else <a href="#" class="btn btn-sm bg-danger-light mr-2">Inactive</a> @endif </div>
                                        </td>
                                        <td>{{ convert_datetime_to_date_format($value->created_at, 'd M Y') }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action"> 
                                                <a class="text-primary" href="{{ route('admin.image_categories.edit',$value->id) }}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a> 
                                                <a class="text-danger" onclick="return confirm('Are you sure, you want to delete this?')" href="{{route('admin.image_categories.delete',$value->id)}}"><i class="fas fa-trash-alt m-r-5"></i>Delete</a>                                               
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="pagination">
                                {{ $categories->appends(request()->input())->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endif

@endsection
