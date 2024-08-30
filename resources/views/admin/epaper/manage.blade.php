@extends('admin.include.master')
@section('title', 'Advertisement List')
@section('content')
    <!-- Page Header -->
    <div style="background:linear-gradient(45deg, #f33057, rgb( 56, 88, 249 ) );"
        class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
        <div>
            <h4 class="fw-medium mb-2">Epaper</h4>
            <div class="ms-sm-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Epaper</a></li>
                        <li class="breadcrumb-item active fw-normal" aria-current="page">Epaper List</li>
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
                                <span>Epaper</span> (<p id="counting">0</p>)
                            </div>
                            <a style="right: 5px;position: absolute;float: right;"
                                href="{{ url('admin/epaper/create') }}"
                                class="btn btn-danger-light btn-wave btn-sm float-right">Add New Epaper</a>
                        </div>
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <table class="table table-stripped table table-hover table-center mb-0 table table-bordered text-nowrap"  id="responsiveDataTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Starting date</th>
                                            <th scope="col">Ending date</th>
                                            <th scope="col">Added By</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="callingData">

                                    </tbody>
                                    {{-- <tbody>
                                        @foreach ($categories as $key => $value)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                <td>{{ $value->ename }}</td>
                                                <td>{{ $value->hname }}</td>
                                                <td>
                                                    <div class="actions">
                                                        @if ($value->status == 1)
                                                            <a href="#"
                                                                class="btn btn-sm bg-success-light mr-2">Active</a>
                                                        @else
                                                            <a href="#"
                                                                class="btn btn-sm bg-danger-light mr-2">Inactive</a>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>{{ convert_datetime_to_date_format($value->created_at, 'd M Y') }}</td>
                                                <td class="text-right">
                                                    <div class="hstack gap-2 fs-15">
													 <a href="{{ route('admin.gallery.gallery_category_delete', $value->id) }}" class="btn btn-icon btn-sm btn-info-light rounded-pill"><i class="ri-edit-line"></i></a>
													<a href="{{ route('admin.gallery.gallery_category_delete', $value->id) }}" onclick="return confirm('Are you sure, you want to delete this?')" class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i class="ri-delete-bin-line"></i></a>
													<!--<a href="{{ url('admin/') }}" class="btn btn-icon btn-sm btn-success-light rounded-pill"><i class="ri-add-box-line"></i></a>-->
												</div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody> --}}
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
                    url: "{{ route('admin.epaper.index') }}",
                    success: function(response) {
                        let table = $("#callingData");
                        table.empty();
                        let data = response.data;

                        // Update appointment count
                        let len = data.length;
                        $("#counting").html(len);

                        data.forEach((data, index) => {
                            table.append(`
                                <tr class="mt-5">
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${index+1}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm"><img src="{{ static_asset('assets/assets_admin/images/advertisement/${data.image}') }}" alt="" height="90px" weidth="100px"></td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.title}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.status}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.start_date}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.end_date}</td>
                                    <td class="border-b border-gray-200 px-3 text-center py-2 text-sm">${data.added_by}</td>
                                    <td class="text-right">
                                        <div class="hstack gap-2 fs-15">
                                            <a href="#" class="btn btn-icon btn-sm btn-info-light rounded-pill"><i class="ri-edit-line"></i></a>
                                        <a href="#" onclick="return confirm('Are you sure, you want to delete this?')" class="btn btn-icon btn-sm btn-danger-light rounded-pill"><i class="ri-delete-bin-line"></i></a>
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
