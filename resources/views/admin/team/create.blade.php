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
                        <form method="post" action="" id="addData" enctype="multipart/form-data">
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
                                        <label>First Name <span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter First Name" value="" class="form-control" name="first_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name <span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter Last Name" value="" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact no.<span class="text-danger">*</span> </label>
                                        <input type="tel" placeholder="Enter Contact No." value="" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Id<span class="text-danger">*</span> </label>
                                        <input type="email" placeholder="Enter email Id" value="" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Address<span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter Address" value="" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Pincode<span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter Pincode" value="" class="form-control" name="pincode">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City<span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter City" value="" class="form-control" name="city">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State<span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter State" value="" class="form-control" name="state">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Country<span class="text-danger">*</span> </label>
                                        <input type="text" placeholder="Enter Country" value="" class="form-control" name="country">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Profile Pic <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="profile_pic">
                                    </div>
                                </div>
                                <div class="row-md-6">
                                    <div class="form-group">
                                        <label>New User Id<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password<span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation">
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status <span class="text-danger">*</span></label>
                                        <select class=" form-control" name="status">
                                            <option @if(old('status')=='1') selected @endif value="1" >Active</option>
                                            <option  @if(old('status')=='2') selected @endif value="2">Inactive</option>
                                        </select>
                                    </div>
                                </div> --}}

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


<script>
    $(document).ready(function() {
        $("#addData").submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            // Send AJAX request
            $.ajax({
                type: "POST",
                url: "{{ route('admin.teams.store') }}",
                data: formData,
                dataType: "JSON",
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    $("#addData").trigger("reset");
                    swal.fire("Success", response.message, "success");
                    setTimeout(function() {
                        location.reload();
                    }, 3000);
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#error-' + key).html(value[0]);
                        });
                    } else {
                        alert('An error occurred. Please try again.');
                    }
                }
            });
        });
    });

    $('#country_id').on('change', function() {
                var country_id = this.value;
                $("#state_id").html('');
                $.ajax({
                    url: "{{ url('get-states-by-country') }}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#state_id').html('<option value="">Select State</option>');
                        $.each(result.states, function(key, value) {
                            $("#state_id").append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html(
                        '<option value="">Select State First</option>');
                    }
                });
            });
            
</script>

@endsection

@section('script')
    {{-- <script type="text/javascript">
        tinymce.init({
            selector: 'textarea#answer',
        });

    </script> --}}
@endsection
