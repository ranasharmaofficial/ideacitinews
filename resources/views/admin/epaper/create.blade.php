@extends('admin.include.master')
@section('title', 'Add New Epaper')
@section('content')
<!-- Page Header -->
	<div style="background:linear-gradient(45deg, #f33057, rgb( 56, 88, 249 ) );"  class="d-sm-flex d-block align-items-center justify-content-between page-header-breadcrumb">
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
						<div class="card-title">
							Add New Epaper
						</div>
						<a style="right: 5px;position: absolute;float: right;" href="{{ url('admin/advertisements/create') }}" class="btn btn-danger-light btn-wave btn-sm float-right">Advertisement List</a>
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
                                        <label>Title <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                </div>
                                
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date<span class="text-danger">*</span> </label>
                                        <input type="date" class="form-control" id="date" name="date" required>
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label>File<span class="text-danger">*</span> </label>
                                        <input accept="application/pdf" type="file" class="form-control" id="file" name="file" required>
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
    // // Function to transliterate English text to Hindi
    // function transliterateToHindi(englishText, callback) {
    //     $.ajax({
    //         type: "GET",
    //         url: `https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=hi&dt=t&q=${encodeURI(englishText)}`,
    //         success: function(response) {
    //             let hindiText = response[0][0][0];
    //             callback(hindiText);
    //         },
    //         error: function() {
    //             console.error('Error in transliteration');
    //         }
    //     });
    // }

    // $('#ename').on('input', function() {
    //     let englishText = $(this).val();
    //     transliterateToHindi(englishText, function(hindiText) {
    //         $('#hname').val(hindiText);
    //     });
    // });

    $(document).ready(function() {
        $("#addData").submit(function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            // Send AJAX request
            $.ajax({
                type: "POST",
                url: "{{ route('admin.epaper.store') }}",
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
                error: function(xhr, status, error) {
                    swal("Error", xhr.responseText, "error");
                }
            });
        });
    });

</script>
@endsection
