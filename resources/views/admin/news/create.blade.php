@extends('admin.include.master')
@section('title', 'Add New News')
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
                        <li class="breadcrumb-item active fw-normal" aria-current="page">Add News</li>
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
                            <div class="card-title">
                                Add News
                            </div>
                            <a style="right: 5px;position: absolute;float: right;" href="{{ url('admin/categories') }}"
                                class="btn btn-danger-light btn-wave btn-sm float-right">News List</a>
                        </div>
                        <div class="card-body booking_card">
                            <form method="post" action="" id="addData">
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
                                            <label>Select Country <span class="text-danger">*</span> </label>
                                            <select class=" form-control" id="country" name="country" required>
                                                <option value="">Select Country</option>
                                                <option value="india">India</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select State <span class="text-danger">*</span> </label>
                                            <select class=" form-control" id="state" name="state" required>
                                                <option value="">Select State</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="West Bengal">West Bengal</option>
                                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands
                                                </option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar
                                                    Haveli and
                                                    Daman
                                                    and Diu</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Ladakh">Ladakh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            </select>
                                            <p id="error-country" class="text-danger error-message"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City Name<span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="city" name="city"
                                                required>
                                        </div>
                                        <p id="error-city" class="text-danger error-message"></p>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Category<span class="text-danger">*</span> </label>
                                            <select class=" form-control" id="callingCategory" name="category_id" required>
                                                <option value="">Select Category</option>
                                            </select>
                                        </div>
                                        <p id="error-category" class="text-danger error-message"></p>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>News Title <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                required>
                                        </div>
                                        <p id="error-title" class="text-danger error-message"></p>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>News Title (in Hindi) <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="htitle" name="htitle"
                                                required>
                                        </div>
                                        <p id="error-htitle" class="text-danger error-message"></p>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Meta Tags <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="meta_tags" name="meta_tags"
                                                required>
                                        </div>
                                        <p id="error-meta_tags" class="text-danger error-message"></p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Meta Description <span class="text-danger">*</span> </label>
                                            <textarea name="meta_description" class="form-control" id="meta_description" cols="30" rows="3"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Published By<span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="published_by"
                                                name="published_by" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>News Image<span class="text-danger">*</span> </label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Status <span class="text-danger">*</span> </label>
                                            <select class=" form-control" id="status" name="status" required>
                                                <option value="1" selected>Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Enter Description <span class="text-danger">*</span> </label>
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="5" required></textarea>
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

    <script>
        // Function to transliterate English text to Hindi
        function transliterateToHindi(englishText, callback) {
            $.ajax({
                type: "GET",
                url: `https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=hi&dt=t&q=${encodeURI(englishText)}`,
                success: function(response) {
                    let hindiText = response[0][0][0];
                    callback(hindiText);
                },
                error: function() {
                    console.error('Error in transliteration');
                }
            });
        }

        function transliterateToEnglish(hindiText, callback) {
            $.ajax({
                type: "GET",
                url: `https://translate.googleapis.com/translate_a/single?client=gtx&sl=hi&tl=en&dt=t&q=${encodeURI(hindiText)}`,
                success: function(response) {
                    let englishText = response[0][0][0];
                    callback(englishText);
                },
                error: function() {
                    console.error('Error in transliteration');
                }
            });
        }

        $('#title').on('input', function() {
            let englishText = $(this).val();
            transliterateToHindi(englishText, function(hindiText) {
                $('#htitle').val(hindiText);
            });
        });

        $('#htitle').on('input', function() {
            let hindiText = $(this).val();
            transliterateToEnglish(hindiText, function(englishText) {
                $('#title').val(englishText);
            });
        });

        $.ajax({
            type: "GET",
            url: "{{ route('admin.categories.index') }}",
            success: function(response) {
                let select = $("#callingCategory");
                select.empty();
                select.append(`<option value="">Select Category</option>`);
                response.data.forEach((cat) => {
                    select.append(`
                <option value="${cat.id}">${cat.ename}</option>
                `);
                });
            }
        });

        $(document).ready(function() {
            $("#addData").submit(function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                // Send AJAX request
                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.news.store') }}",
                    data: formData,
                    dataType: "JSON",
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        swal.fire("Success", response.message, "success");
                        $("#addData").trigger("reset");
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


        $(document).ready(function() {

            /*$('#country_id').on('change', function() {
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
            */

            $('#country_id').on('change', function() {
                var country_id = this.value;
                $("#city_id").html('');
                $.ajax({
                    url: "{{ url('get-cities-by-state') }}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#city_id').html('<option value="">Select City</option>');
                        $.each(result.cities, function(key, value) {
                            $("#city_id").append('<option value="' + value.id +
                                '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
