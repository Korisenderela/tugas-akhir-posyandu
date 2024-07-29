@extends('template.base')
@section('content')

<div class="card mb-5">
	<div class="card-body">
		<form action="{{url('subadmin/master-data/data-posyandu/create')}}" method="post" enctype="multipart/form-data">
			@csrf
			<h2 class="small-title">Profil Posyandu :</h2>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Nama Posyandu</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" class="form-control" name="posyandu_nama" required>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Alamat Posyandu</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" class="form-control" name="posyandu_alamat" required>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Kontak/Wa Posyandu</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" class="form-control" name="posyandu_notlp" required>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email Posyandu</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="email" class="form-control" name="posyandu_email">
				</div>
			</div>


			<h2 class="small-title mt-5">Penanggungjawab Posyandu :</h2>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Nama</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="admin_nama" required class="form-control" >
				</div>
			</div>


			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Alamat</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="admin_alamat" class="form-control">
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="date" name="admin_tanggal_lahir" class="form-control date-picker-close" id="birthday" value="08/08/1988">
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<select class="select-single-no-search form-control" name="admin_jenis_kelamin" data-width="100%" id="genderSelect">
						<option hidden>-- Jenis Kelamin --</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
			</div>


			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="email" class="form-control" name="admin_email">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">No Telp.</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="number" class="form-control" name="admin_notlp">
				</div>
			</div>

			
			<div class="mb-3 row mt-5">
				<div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
					<button type="submit" class="btn float-right btn-outline-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection