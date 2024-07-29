@extends('template.base')
@section('content')
<div class="row">
	<div class="col-md-12">
		<a href="{{url('admin/master-data/data-pegawai/create')}}" class="btn btn-primary float-right"> + Tambah Pegawai</a>
	</div>
</div>

<div class="row mt-5">
	@forelse($list_pegawai as $item)
	<div class="col-md-3">
		<div class="card h-100">
			<a href="{{url('admin/master-data/data-pegawai',$item->admin_id)}}/show">
				<img src="{{url('public')}}/assets/img/profile/profile-large-1.webp" class="card-img-top sh-30" alt="card image">
			</a>
			<div class="card-body">
				<a href="Doctors.Detail.html">{{ucwords($item->admin_nama)}}</a>
				<div class="text-muted mb-1">{{ucwords($item->admin_jabatan)}}</div>
				<div class="mb-3">
					<div class="row g-0 align-items-center mb-2">
						<div class="col-auto">
							<div class="sw-3 d-flex justify-content-center align-items-center">
								<i data-acorn-icon="support" class="text-primary"></i>
							</div>
						</div>
						<div class="col ps-3">
							<div class="d-flex align-items-center lh-1-25">{{ucwords($item->email)}}</div>
						</div>
					</div>
					<div class="row g-0 align-items-center mb-2">
						<div class="col-auto">
							<div class="sw-3 d-flex justify-content-center align-items-center">
								<i data-acorn-icon="health" class="text-primary"></i>
							</div>
						</div>
						<div class="col ps-3">
							<div class="d-flex align-items-center lh-1-25">{{ucwords($item->admin_jenis_kelamin)}}</div>
						</div>
					</div>
					<div class="row g-0 align-items-center mb-2">
						<div class="col-auto">
							<div class="sw-3 d-flex justify-content-center align-items-center">
								<i data-acorn-icon="book" class="text-primary"></i>
							</div>
						</div>
						<div class="col ps-3">
							<div class="d-flex align-items-center lh-1-25">
								@if($item->admin_meja == 0)
								Meja Administrasi
								@elseif($item->admin_meja == 1)
								Meja 1
								@elseif($item->admin_meja == 2)
								Meja 2
								@elseif($item->admin_meja == 3)
								Meja 3
								@endif
							</div>
						</div>
					</div>
					<div class="mt-4">
						<div class="dropdown">
							<a href="{{url('admin/master-data/data-pegawai',$item->admin_id)}}/show"  class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2"><i class="bi bi-eye"></i> Detail</a>
							<button class="btn btn-sm btn-outline-primary btn-icon btn-icon-start me-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="bi bi-gear-wide-connected"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="{{url('admin/master-data/data-pegawai',$item->admin_id)}}/edit"><i class="bi bi-pencil text-warning"></i> Edit</a>
								<a class="dropdown-item" href="{{url('admin/master-data/data-pegawai',$item->admin_id)}}/delete" onclick="return confirm('Yakin menghapus data ini?')"><i class="bi bi-trash text-danger"></i> Hapus</a>


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	@empty
	<b>Tidak ada pegawai</b>
	@endforelse

	<div class="col-md-12 mt-3">
		<div class="float-right">
			{{$list_pegawai->links()}}
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection