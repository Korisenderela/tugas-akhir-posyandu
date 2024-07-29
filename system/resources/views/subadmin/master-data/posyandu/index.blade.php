@extends('template.base')
@section('content')


<div class="card">
	<div class="card-body">

		<div class="row gx-2">
			<div class="col-12 p-0">
				<div class="glide glide-small" id="statsCarousel">
					<div class="glide__track" data-glide-el="track">
						<div class="glide__slides">
							<div class="glide__slide">
								<div class="card mb-5 hover-border-primary">
									<span class="position-absolute e-3 t-4 z-index-1">
										<i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
									</span>
									<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
										<div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
											<i data-acorn-icon="blood" class="text-primary"></i>
										</div>
										<div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
											Blood
											<br>
											Pressure
										</div>
										<div class="display-6 text-primary">115/74</div>
									</div>
								</div>
							</div>
							<div class="glide__slide">
								<div class="card mb-5 hover-border-primary">
									<span class="position-absolute e-3 t-4 z-index-1">
										<i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
									</span>
									<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
										<div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
											<i data-acorn-icon="heart" class="text-primary"></i>
										</div>
										<div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
											Heart
											<br>
											Rate
										</div>
										<div class="display-6 text-primary">93</div>
									</div>
								</div>
							</div>
							<div class="glide__slide">
								<div class="card mb-5 hover-border-primary">
									<span class="position-absolute e-3 t-4 z-index-1">
										<i data-acorn-icon="chevron-bottom" class="text-primary" data-acorn-size="14"></i>
									</span>
									<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
										<div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
											<i data-acorn-icon="laboratory" class="text-primary"></i>
										</div>
										<div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
											Glucose
											<br>
											Level
										</div>
										<div class="display-6 text-primary">82</div>
									</div>
								</div>
							</div>
							<div class="glide__slide">
								<div class="card mb-5 hover-border-primary">
									<span class="position-absolute e-3 t-4 z-index-1">
										<i data-acorn-icon="chevron-top" class="text-primary" data-acorn-size="14"></i>
									</span>
									<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
										<div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
											<i data-acorn-icon="weight" class="text-primary"></i>
										</div>
										<div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
											Body Mass
											<br>
											Index
										</div>
										<div class="display-6 text-primary">19.4</div>
									</div>
								</div>
							</div>
							<div class="glide__slide">
								<div class="card mb-5 hover-border-primary">
									<span class="position-absolute e-3 t-4 z-index-1">
										<i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
									</span>
									<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
										<div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
											<i data-acorn-icon="thermometer" class="text-primary"></i>
										</div>
										<div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
											Body
											<br>
											Temperature
										</div>
										<div class="display-6 text-primary">37.2</div>
									</div>
								</div>
							</div>
							<div class="glide__slide">
								<div class="card mb-5 hover-border-primary">
									<span class="position-absolute e-3 t-4 z-index-1">
										<i data-acorn-icon="check" class="text-primary" data-acorn-size="14"></i>
									</span>
									<div class="h-100 d-flex flex-column justify-content-between card-body align-items-center">
										<div class="sw-8 sh-8 rounded-xl d-flex justify-content-center align-items-center border border-primary">
											<i data-acorn-icon="blood-bag" class="text-primary"></i>
										</div>
										<div class="text-center mb-0 sh-8 d-flex align-items-center lh-1-5">
											Blood
											<br>
											Count
										</div>
										<div class="display-6 text-primary">4.2</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="{{url('subadmin/master-data/data-posyandu/create')}}" class=" btn mb-5 btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data Posyandu</a>

		<section class="mt-5">
			<table class="table" id="dataTable">
				<thead>
					<tr class="bg-primary">
						<th class="text-white">No</th>
						<th class="text-white">Aksi</th>
						<th class="text-white">Nama Posyandu</th>
						<th class="text-white">Alamat Posyandu</th>
						<th class="text-white">Jumlah Pegawai Posyandu</th>
					</tr>
				</thead>
				<tbody>
					@foreach($list_posyandu as $item)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>
							<a href="" class="btn btn-danger">Hapus</a>
						</td>
						<td>{{ucwords($item->posyandu_nama)}}</td>
						<td>{{ucwords($item->posyandu_alamat)}}</td>
						<td>{{ucwords($item->posyandu_pegawai)}}</td>
					</tr>
					@endforeach
				</tbody>

				<tfoot>
					<tr class="bg-primary">
						<th class="text-white">No</th>
						<th class="text-white">Aksi</th>
						<th class="text-white">Nama Posyandu</th>
						<th class="text-white">Alamat Posyandu</th>
						<th class="text-white">Jumlah Pegawai Posyandu</th>
					</tr>
				</tfoot>
			</table>
		</section>
	</div>
</div>

@endsection