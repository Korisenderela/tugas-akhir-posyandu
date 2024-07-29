@extends('template.base')
@section('content')

<div class="row justify-content-center">
	<div class="col-xl-5 mb-5">
		<div class="card h-100-card">
			<div class="card-body">
				<div class="d-flex align-items-center flex-column mb-4">
					<div class="d-flex align-items-center flex-column">
						<div class="sw-13 position-relative mb-3">
							<img src="{{url('public')}}/assets/img/profile/profile-1.webp" class="img-fluid rounded-xl" alt="thumb">
						</div>
						<div class="h5 mb-0">{{ucwords($detail->admin_nama)}}</div>
						<div class="text-muted">{{ucwords($detail->admin_jabatan)}}</div>
					</div>
				</div>
				<div class="mb-5">

					<div class="row">
						<div class="col-md-6">
							<p class="text-small text-muted mb-2">DIOGNOSTICS</p>
							<div class="row g-0 mb-2">
								<div class="col text-alternate"><span class="text-primary">Jenis Kelamin :</span> {{ucwords($detail->admin_jenis_kelamin)}}</div>
							</div>
							<div class="row g-0 mb-2">
								<div class="col text-alternate"><span class="text-primary">Tanggal Lahir :</span> {{ucwords($detail->admin_tanggal_lahir)}} </div>
							</div>

							<div class="row g-0 mb-2">
								<div class="col text-alternate"><span class="text-primary">Umur :</span> {{carbon\Carbon::parse($detail->admin_tanggal_lahir)->age}} Tahun</div>
							</div>

							<div class="row g-0 mb-2">
								<div class="col text-alternate"><span class="text-primary">Level Akun :</span> @if($detail->admin_meja == 1)
									Staf
									@elseif($detail->admin_meja == 2)
									Atasan
								@endif</div>
								
							</div>

							<div class="row g-0 mb-2">
								<div class="col text-alternate"><span class="text-primary">Lokasi Meja :</span> @if($detail->admin_meja == 0)
									Meja Administrasi
									@elseif($detail->admin_meja == 1)
									Meja 1
									@elseif($detail->admin_meja == 2)
									Meja 2
									@elseif($detail->admin_meja == 3)
									Meja 3
								@endif</div>
							</div>
						</div>
						<div class="col-md-6">
							<p class="text-small text-muted mb-2">CONTACT</p>
							<div class="row g-0 mb-2">
								<div class="col-auto">
									<div class="sw-3 me-1">
										<i data-acorn-icon="phone" class="text-primary" data-acorn-size="17"></i>
									</div>
								</div>
								<div class="col text-alternate">{{ucwords($detail->admin_notlp)}}</div>
							</div>
							<div class="row g-0 mb-2">
								<div class="col-auto">
									<div class="sw-3 me-1">
										<i data-acorn-icon="email" class="text-primary" data-acorn-size="17"></i>
									</div>
								</div>
								<div class="col text-alternate">{{ucwords($detail->email)}}</div>
							</div>
							<div class="row g-0 mb-2">
								<div class="col-auto">
									<div class="sw-3 me-1">
										<i data-acorn-icon="pin" class="text-primary" data-acorn-size="17"></i>
									</div>
								</div>
								<div class="col text-alternate">{{ucwords($detail->admin_alamat)}}</div>
							</div>
						</div>
					</div>
					
				</div>

				<div class="btn-group mb-3">
					<a class="btn btn-outline-danger float-right" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						Ganti Password
					</a>


					<a href="{{url('admin/master-data/data-pegawai',$detail->admin_id)}}/edit" class="btn btn-outline-primary   float-right">Edit</a>
				</div>
			<div class="collapse" id="collapseExample">
				<div class="mb-5 mt-3">
					<h3>Form Ganti Password Baru</h3>
					<form action="{{url('admin/profil-akun/update')}}" method="get">
						@csrf
						<div class="form-group">
							<span class="text-primary">Password Baru</span>
							<input type="password" name="new" class="form-control" placeholder="Password Baru">
						</div>

						<div class="form-group mt-3">
							<span class="text-primary">Konfirmasi Password Baru</span>
							<input type="password" name="confirm" class="form-control" placeholder="Konfirmasi Password Baru">
						</div>

						<button class="btn btn-danger mt-3 float-right mb-5">Ganti Password</button>
					</form>
				</div>
			</div>
			</div>


		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection