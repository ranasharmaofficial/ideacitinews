@extends('frontend.layouts.master');
@section('title') Login @endsection

@section('content')
    <div class="text-center bg-overlay-dark-7 py-7" style="background:url(assets/assets_web/images/02.jpg) no-repeat; background-size:cover; background-position: top center;">
        <div class="container">
            <div class="row all-text-white">
                <div class="col-md-12 align-self-center">
                <h1 class="fw-bold">Login</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item active"><a href="{{url('index')}}"><i class="ti-home"></i> Home</a></li>
                        <li class="breadcrumb-item">Login</li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-page">
		<div class="container">
			<div class="row g-4">
				<!-- contact form -->
				<div class="col-md-12 col-lg-8 mx-auto ">
					<div class="h-100 shadow rounded text-center">
						<div class="title text-center">
							<h2>Login</h2>
							<p class="mb-0">
								Get in touch with us to see how we can help you with your project
							</p>
						</div>

						<form action="{{ route('login.post') }}" method="post" role="form" class="">
                            @csrf
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
							<!-- Main form -->
							<div class="row">
								<div class="col-md-12">
									<!-- name -->
									<div class="mb-3 position-relative">
										<input required id="con-name" name="email" type="text" class="form-control"
											placeholder="Your Email">
									</div>
								</div>
								<div class="col-md-12">
									<!-- email -->
									<div class="mb-3 position-relative">
										<input required id="con-email" name="password" type="password" class="form-control"
											placeholder="Password">
									</div>
								</div>

								<!-- submit button -->
								<div class="col-md-12 d-grid text-center"><button
										class="btn btn-dark m-0 d-block mx-auto" type="submit">Login</button></div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection 
