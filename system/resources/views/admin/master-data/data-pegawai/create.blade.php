@extends('template.base')
@section('content')
<div class="card mb-5">
	<div class="card-body">
		<form action="{{url('admin/master-data/data-pegawai/create')}}" method="post" enctype="multipart/form-data">
			@csrf
			

			<h2 class="small-title mt-5">Data Tim Medis Posyandu :</h2>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Nama</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="admin_nama" required class="form-control" >
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Jabatan/Bagian</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="admin_jabatan" required class="form-control" >
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Posisi Penempatan</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<select name="admin_meja" id="" class="form-control">
						<option value="0">Meja Administrasi</option>
						<option value="1">Meja 1</option>
						<option value="2">Meja 2</option>
						<option value="3">Meja 3</option>
					</select>
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
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Level Akun</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<select class="select-single-no-search form-control" name="admin_level" data-width="100%" id="genderSelect">
						<option hidden>-- Pilih level akun --</option>
						<option value="1">Staf</option>
						<option value="2">Atasan</option>
					</select>
				</div>
			</div>


			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="email" class="form-control" name="email">
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