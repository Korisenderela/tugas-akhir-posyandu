@extends('template.base')
@section('content')


<div class="card">
	<div class="card-body">
		<center>
			<h3>FORM EDIT POSYANDU</h3>
		</center>
		<form action="{{url('admin/profil-posyandu',$posyandu->posyandu_id)}}/edit" method="post" enctype="multipart/form-data">
			@csrf
			@method("PUT")
			<div class="row">
				<div class="col-md-6">
					<div class="form-group mt-5">
						<spam>Nama Posyandu</spam>
						<input type="text" required value="{{$posyandu->posyandu_nama}}" name="posyandu_nama" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mt-5">
						<spam>Alamat Posyandu</spam>
						<input type="text" required value="{{$posyandu->posyandu_alamat}}" name="posyandu_alamat" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mt-5">
						<spam>E-Mail Posyandu</spam>
						<input type="text" required value="{{$posyandu->posyandu_email}}" name="posyandu_email" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group mt-5">
						<spam>No Telp. Posyandu</spam>
						<input type="text" required value="{{$posyandu->posyandu_notlp}}" name="posyandu_notlp" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group mt-5">
						<spam>Gambar/Foto Posyandu</spam>
						<input type="file" accept="image/*" name="posyandu_foto" required value="{{$posyandu->posyandu_notlp}}" class="form-control">
					</div>
				</div>


				<div class="col-md-12">
					<button class="btn btn-primary mt-5 float-right" type="submit">Simpan Perubahan</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection