@extends('admin.include.master')
@section('title', 'News List')
@section('content')
    <!-- Page Header -->
    <div style="background:linear-gradient(45deg, #f33057, rgb( 56, 88, 249 ) );"
        class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
        <div>
            <h4 class="fw-medium mb-2">Setup</h4>
            <div class="ms-sm-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Setup</a></li>
                        <li class="breadcrumb-item active fw-normal" aria-current="page">News List</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <!-- Page Header Close -->

    <div class="main-content app-content">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card custom-card">
                        <div class="card-header">
                            <div class="card-title d-flex">
                                <span>News</span> (<p id="counting">0</p>)
                            </div>
                            <a style="right: 5px;position: absolute;float: right;" href="{{ url('admin/news/create') }}"
                                class="btn btn-danger-light btn-wave btn-sm float-right">Add New News</a>
                        </div>
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <table class="table table-stripped table table-hover table-center mb-0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Title(Hindi)</th>
                                            <th>Category</th>
                                            <th>Published by</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="callingData">

                                    </tbody>
                                </table>
                                <div class="pagination">
                                    {{-- {{ $categories->appends(request()->input())->links() }} --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        $(document).ready(function() {
            // Function to fetch and display appointment
            let callingData = () => {
                $.ajax({
                    type: "GET",
                    url: "{{ route('admin.news.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data, index) => {

                            if (data.status == 1) {
                                status = '<a href = "#" class = "btn btn-sm bg-success-light mr-2" > Published </a>'
                                
                            } else {
                                status = '<a href = "#" class = "btn btn-sm bg-danger-light mr-2" > Pending </a>'
                            }

                            const createdAt = new Date(data.created_at);
                            const formattedDate = createdAt.toLocaleString('en-IN', {
                                day: 'numeric',
                                month: 'long',
                                year: 'numeric',                                
                                hour: '2-digit',
                                minute: '2-digit',
                                second: '2-digit',
                                hour12: true
                            });
                            table.append(`
                                <tr class="mt-5">
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${index+1}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.title}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.htitle}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.category.ename}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.published_by}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${status}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${formattedDate}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a class="text-primary"
                                                href="{{}}"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                            &nbsp;&nbsp;<a class="text-danger"
                                                onclick="return confirm('Are you sure, you want to delete this?')"
                                                href=""><i class="fas fa-trash-alt m-r-5"></i>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            }
            callingData();
        });
    </script>

@endsection
