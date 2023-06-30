@extends('layouts.app')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('plugins/datatable/datatables.min.css')}}" rel="stylesheet" />

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

<h4>{{ $content }}</h4>
	<div class="row">
		<div class="col-lg-9 col-md-6 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title">{{ $content->plan_name }}</h3>
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
										<input type="text" class="form-control form-control-solid" id="cost" name="cost" value="{{$content->cost }}" required>
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
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Get likes post') }}</h3>
				</div>
				<div class="card-body pt-2">
					<!-- SET DATATABLE -->
					<table id='myPaymentsTable' class="table align-middle table-row-dashed fs-6 gy-5">
							<thead>
								<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
									<th width="15%">{{ __('Plan type') }}</th>											
									<th width="15%">{{ __('Plan Name') }}</th>
									<th width="7%">{{ __('Cost') }}</th>																															
									<th width="10%">{{ __('Currency') }}</th>
									<th width="10%">{{ __('Status') }}</th>
									<th width="10%">{{ __('characters') }}</th>
									<th width="7%">{{ __('Bonus') }}</th>
									<th width="7%">{{ __('payment_frequency') }}</th>
									<th width="7%">{{ __('primary_heading') }}</th>
									<th width="7%">{{ __('secondary_heading') }}</th>
									<th width="7%">{{ __('plan_features') }}</th>
									<th width="7%">{{ __('duration_in_days') }}</th>
								</tr>
							</thead>
					</table> <!-- END SET DATATABLE -->
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><i class="mdi mdi-alert-circle-outline color-red"></i> {{ __('Confirm Payment Deletion') }}</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="deleteModalBody">
					<div>
						<!-- DELETE CONFIRMATION -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL -->

@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>

	<!-- Data Tables JS -->
	<script src="{{URL::asset('plugins/datatable/datatables.min.js')}}"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";
			
			// INITILIZE DATATABLE
			var table = $('#myPaymentsTable').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: true,
				colReorder: true,
				"order": [[ 0, "desc" ]],
				language: {
					search: "<i class='fa fa-search search-icon'></i>",
					lengthMenu: '_MENU_ ',
					paginate : {
						first    : '<i class="fa fa-angle-double-left"></i>',
						last     : '<i class="fa fa-angle-double-right"></i>',
						previous : '<i class="fa fa-angle-left"></i>',
						next     : '<i class="fa fa-angle-right"></i>'
					}
				},
				pagingType : 'full_numbers',
				processing: true,
				serverSide: true,
				ajax: "{{ route('user.balance.payments') }}",
				columns: [{
						data: 'plan_type',
						name: 'plan_type',
						orderable: true,
						searchable: true
					},
					{
						data: 'plan_name ',
						name: 'plan_name ',
						orderable: true,
						searchable: true
					},
					{
						data: 'custom-amount',
						name: 'custom-amount',
						orderable: true,
						searchable: true
					},
					{
						data: 'gateway',
						name: 'gateway',
						orderable: true,
						searchable: true
					},
					{
						data: 'plan_name',
						name: 'plan_name',
						orderable: false,
						searchable: true
					},
					{
						data: 'custom-chars',
						name: 'custom-chars',
						orderable: true,
						searchable: true
					},						
					{
						data: 'custom-status',
						name: 'custom-status',
						orderable: true,
						searchable: true
					},				
					{
						data: 'actions',
						name: 'actions',
						orderable: false,
						searchable: false
					},
				]
			});

			
			// DELETE CONFIRMATION MODAL
			$(document).on('click', '#deleteMyPayment', function(event) {
				event.preventDefault();
				let href = $(this).attr('data-attr');
				$.ajax({
					url: href
					, beforeSend: function() {
						$('#loader').show();
					},
					// return the result
					success: function(result) {
						$('#deleteModal').modal("show");
						$('#deleteModalBody').html(result).show();
					}
					, error: function(jqXHR, testStatus, error) {
						console.log(error);
						alert("Page " + href + " cannot open. Error:" + error);
						$('#loader').hide();
					}
					, timeout: 8000
				})
			});

		});
	</script>
@endsection
