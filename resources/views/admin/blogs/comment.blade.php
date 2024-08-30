@extends('admin.include.master')
@section('title', 'Blog Comment List')
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <div class="breadcrumb mt-3 border-bottom pb-2">
                        <a href="{{ url('') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>/
                        <a href="{{ route('admin.blogs.index') }}"></i> Blogs</a>/Comments
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body booking_card">

                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="card-title float-left mt-2">Blog Comment List</h4>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="hotel_table" class="table table-stripped table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        {{-- <th>Commented By</th> --}}
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->comment }}</td>
                                        {{-- <td>{{ $value->first_name . " ". $value->last_name }}</td> --}}
                                        <td>
                                            <select class="change_status" name="status" data-comment_id="{{$value->id}}">
                                                <option value="1" class="text-success" @if($value->status == 1) selected @endif>Active</option>
                                                <option value="0" class="text-danger" @if($value->status == 0) selected @endif>Inactive</option>
                                            </select>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="pagination">
                                {{ $blogs->appends(request()->input())->links() }}
                            </div>
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
    $(".change_status").change(function (event) {
        event.preventDefault();
        var comment_id = $(this).data("comment_id");
        var status = $(this).val();
        changeStatus(comment_id, status);
    });

    function changeStatus(comment_id, status){
        $.ajax({
            url: "{{url('admin/blog/change_comment_status')}}",
            type: "GET",
            data: {
                id: comment_id,
                status: status,
                _token: '{{csrf_token()}}'
            },
            dataType: 'json',
            success: function (result) {
                toastr.success("Status Successfully Updated");
            }
        });
    }
</script>
@endsection



