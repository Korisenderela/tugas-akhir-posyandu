@extends('template.base')
@section('content')

	<div class="row">
		@foreach($list_anak as $item)
		<div class="col-md-4">
			<div class="card  h-100">
				<div class="card-body ">
					<a href="#">{{ucwords($item->anak_nama)}}</a>
					<div class="text-muted mb-1">NIK : {{ucwords($item->anak_nik)}}</div>
					<div class="row g-0 align-items-center mb-2">
						<div class="col-auto">
							<div class="sw-3 d-flex justify-content-center align-items-center">
								<i data-acorn-icon="support" class="text-primary"></i>
							</div>
						</div>
						<div class="col ps-3">
							<div class="d-flex align-items-center lh-1-25">{{ucwords($item->anak_rfid)}}</div>
						</div>
					</div>
					<div class="row g-0 align-items-center mb-2">
						<div class="col-auto">
							<div class="sw-3 d-flex justify-content-center align-items-center">
								<i data-acorn-icon="health" class="text-primary"></i>
							</div>
						</div>
						<div class="col ps-3">
							<div class="d-flex align-items-center lh-1-25">

								@if($item->anak_jenis_kelamin == 1)
								Laki-laki
								@else
								Perempuan
								@endif
							</div>
						</div>
					</div>
					<div class="row g-0 align-items-center mb-2">
						<div class="col-auto">
							<div class="sw-3 d-flex justify-content-center align-items-center">
								<i data-acorn-icon="book" class="text-primary"></i>
							</div>
						</div>
						<div class="col ps-3">
							<div class="d-flex align-items-center lh-1-25">{{Carbon\Carbon::parse($item->anak_tanggal_lahir)->format('d/m/Y')
							}}</div>
						</div>
					</div>
					<div class="mt-4">
						<a href="{{url('x/data-anak',$item->anak_id)}}/detail" type="button" class="btn btn-sm btn-primary btn-icon btn-icon-start me-2">
							<i data-acorn-icon="health"></i>
							<span>Perkembangan Anak</span>
						</a>

					</div>
				</div>
			</div>
		</div>

		@endforeach
	</div>
	@endsection