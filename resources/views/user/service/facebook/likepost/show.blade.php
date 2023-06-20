@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Get Likes Post') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-google-wallet mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.finance.dashboard') }}"> {{ __('Finance Management') }}</a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="{{ route('admin.finance.subscriptions') }}"> {{ __('Pre Paid Plan Types') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('New Plan') }}</a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')
	<div class="row">
		<div class="col-lg-9 col-md-6 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Get likes post') }}</h3>
				</div>
				<div class="card-body pt-5">
					<form action="{{ route('admin.finance.prepaid.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">
                            <!-- HEADING -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
									<h6>{{ __('URL String') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">
										<input type="text" class="form-control form-control-solid" placeholder="https://www.facebook.com/{uid}" id="urlstring" name="urlstring" value="{{ old('urlstring') }}" required>
									</div>
									@error('urlstring')
										<p class="text-danger">{{ $errors->first('urlstring') }}</p>
									@enderror
							</div>
                            <!-- END HEADING -->

						</div>

						<div class="row mt-2">
							<div class="col-lg-6 col-md-6col-sm-12">
							
									<h6>{{ __('Amount') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">
										<input type="text" class="form-control form-control-solid" id="amount" name="amount" value="{{ old('amount') }}" required>
									</div>
									@error('amount')
										<p class="text-danger">{{ $errors->first('amount') }}</p>
									@enderror
								
							</div>

							<div class="col-lg-6 col-md-6col-sm-12">
									<h6>{{ __('Price') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">
										<input type="text" class="form-control form-control-solid" id="cost" name="cost" value="{{ old('cost') }}" required>
									</div>
									@error('cost')
										<p class="text-danger">{{ $errors->first('cost') }}</p>
									@enderror
							</div>


						</div>

						<div class="row mt-2">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="form-floating">
									<h6>{{ __('Note') }} <span class="text-muted">({{ __('Required') }})</span></h6>
									<div class="form-group">
                                        <textarea class="form-control" id="note" name="note" value="{{ old('note') }}" rows="3"></textarea>
									</div>
									@error('note')
										<p class="text-danger">{{ $errors->first('note') }}</p>
									@enderror
								</div>
							</div>


						</div>

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="{{ route('admin.finance.prepaid') }}" class="btn btn-cancel mr-2">{{ __('Cancel') }}</a>
							<button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
						</div>

					</form>
				</div>
			</div>
		</div>
        <!-- CONTENT RIGHT -->
        <div class="col-lg-3 col-md-6 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Get likes post') }}</h3>
				</div>
				<div class="card-body pt-5">
					<form action="{{ route('admin.finance.prepaid.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="row">
                            <!-- HEADING -->
                            <div class="col-lg-12 col-md-12 col-sm-12">
								<div class="input-box">
									<h6>{{ __('URL String') }} <span class="text-muted">({{ __('Required') }})</span></h6>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content. Disabled checkboxes and radios are supported, but to provide a not-allowed cursor on hover of the parent <label>, you’ll need to add the disabled attribute to the .form-check-input. The disabled attribute will apply a lighter color to help indicate the input’s state.</p>
									@error('urlstring')
										<p class="text-danger">{{ $errors->first('urlstring') }}</p>
									@enderror
								</div>
							</div>
                            <!-- END HEADING -->

						</div>


					</form>
				</div>
			</div>
		</div>
        <!-- END CONTENT RIGHT -->
	</div>
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>
@endsection
