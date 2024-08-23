@extends('template.base')
@section('content')
<div class="card mb-5">
	<div class="card-body">
		<form action="{{url('admin/master-data/data-pegawai',$detail->admin_id)}}/edit" method="post" enctype="multipart/form-data">

			@csrf
			@method("PUT")

			<h2 class="small-title mt-5">Data Tim Medis Posyandu :</h2>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Nama</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="admin_nama" value="{{ucwords($detail->admin_nama)}}" required class="form-control" >
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Jabatan/Bagian</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="admin_jabatan" value="{{ucwords($detail->admin_jabatan)}}" required class="form-control" >
				</div>
			</div>

		
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Posisi Penempatan</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<select name="admin_meja" id="" class="form-control"  @if(Auth::guard('admin')->user()->admin_level == 1) disabled @endif>
						<option value="0" 	@if($detail->admin_meja == 0) selected @endif >Meja Administrasi</option>
						<option value="1" 	@if($detail->admin_meja == 1) selected @endif >Meja 1</option>
						<option value="2" 	@if($detail->admin_meja == 2) selected @endif >Meja 2</option>
						<option value="3" 	@if($detail->admin_meja == 3) selected @endif >Meja 3</option>
					</select>
				</div>
			</div>


			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Alamat</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="admin_alamat" value="{{ucwords($detail->admin_alamat)}}" class="form-control">
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Tanggal Lahir</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="date" name="admin_tanggal_lahir" value="{{$detail->admin_tanggal_lahir}}" class="form-control date-picker-close">
				</div>
			</div>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<select class="select-single-no-search form-control" name="admin_jenis_kelamin" data-width="100%" id="genderSelect"  @if(Auth::guard('admin')->user()->admin_level == 1) disabled @endif>
						<option hidden>-- Jenis Kelamin --</option>
						<option value="Laki-laki" @if($detail->admin_jenis_kelamin == "Laki-laki") selected @endif > Laki-laki</option>
						<option value="Perempuan" @if($detail->admin_jenis_kelamin == "Perempuan") selected @endif > Perempuan</option>
					</select>
				</div>
			</div>



			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Level Akun</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<select class="select-single-no-search form-control" name="admin_level" data-width="100%" id="genderSelect" @if(Auth::guard('admin')->user()->admin_level == 1) disabled @endif>
						<option hidden>-- Pilih level akun --</option>
						<option value="1" @if($detail->admin_level == 1) selected @endif > Staf</option>
						<option value="2" @if($detail->admin_level == 2) selected @endif > Atasan</option>
					</select>
				</div>
			</div>


			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Email</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="email" class="form-control" value="{{ucwords($detail->email)}}" name="email">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">No Telp.</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="number" class="form-control" value="{{ucwords($detail->admin_notlp)}}" name="admin_notlp">
				</div>
			</div>


			@if($detail->admin_id == Auth::guard('admin')->user()->admin_id )
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Foto</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="file" class="form-control" name="admin_foto">
				</div>
			</div>
			@endif
			
			<div class="mb-3 row mt-5">
				<div class="col-sm-8 col-md-9 col-lg-10 ms-auto">
					<button type="submit" class="btn float-right btn-outline-primary">Simpan Perubahan</button>
				</div>
			</div>
		</form>


	</div>
</div>


@endsection