@extends('template.base')
@section('content')


<div class="card">
	<div class="card-body">
		<center>
			<h1><b>FORM EDIT DATA ANAK</b></h1>
		</center>

		<form action="{{url('admin/master-data/data-orangtua',$detail->anak_id)}}/edit" method="POST" enctype="multipart/form-data">
			@csrf
			@method("PUT")
			<div class="row mt-5">
				<!-- DATA ORANG TUA -->
				<h2 class="small-title mt-5">Data Orang Tua Anak :</h2>

				<div class="col-md-6">
					<div class="form-group">
						<span>Nomor Kartu Keluarga (KK)</span>
						<input type="number" name="orang_tua_no_kk" value="{{$detail->ortu->orang_tua_no_kk}}" class="form-control" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<span>Email Aktif</span>
						<input type="email" name="email" value="{{$detail->ortu->email}}" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Nama Ibu</span>
						<input type="text" required name="orang_tua_ibu" value="{{$detail->ortu->orang_tua_ibu}}" class="form-control">
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Nama Ayah</span>
						<input type="text" required name="orang_tua_ayah" value="{{$detail->ortu->orang_tua_ayah}}" class="form-control">
					</div>
				</div>

				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>NIK Ibu</span>
						<input type="number" required name="orang_tua_nik_ibu" value="{{$detail->ortu->orang_tua_nik_ibu}}" class="form-control">
					</div>
				</div>
				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>NIK Ayah</span>
						<input type="number" required name="orang_tua_nik_ayah" value="{{$detail->ortu->orang_tua_nik_ayah}}" class="form-control">
					</div>
				</div>


				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Alamat</span>
						<input type="text" required name="orang_tua_alamat" value="{{$detail->ortu->orang_tua_alamat}}" class="form-control">
					</div>
				</div>

				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Rt/Rw</span>
						<div class="row">
							<div class="col-md-6">
								<input type="number" name="orang_tua_rt" value="{{$detail->ortu->orang_tua_rt}}" required class="form-control">
							</div>
							<div class="col-md-6">
								<input type="number" name="orang_tua_rw" value="{{$detail->ortu->orang_tua_rw}}" required class="form-control">
							</div>
						</div>
					</div>
				</div>

				<!-- DARA BAYI -->

				<h2 class="small-title " style="margin-top: 50px;">Data Bayi :</h2>
				<div class="col-md-6">
					<div class="form-group">
						<span>Nama Anak</span>
						<input type="text" required name="anak_nama" value="{{$detail->anak_nama}}" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<span>Anak Ke</span>
						<input type="number" required name="anak_ke" value="{{$detail->anak_ke}}" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<span>No Akte</span>
						<input type="number" required name="anak_no_akte" value="{{$detail->anak_no_akte}}" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<span>NIK Anak</span>
						<input type="number" required name="anak_nik" value="{{$detail->anak_nik}}" class="form-control">
					</div>
				</div>


				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Tempat Lahir Anak</span>
						<input type="text" required name="anak_tempat_lahir" value="{{$detail->anak_tempat_lahir}}" class="form-control">
					</div>
				</div>

				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Tanggal Lahir Anak</span>
						<input type="date" required name="anak_tanggal_lahir" value="{{$detail->anak_tanggal_lahir}}" class="form-control">
					</div>
				</div>

				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Jenis Kelamin</span>
						<select name="anak_jenis_kelamin" required id="" class="form-control">
							<option value="" hidden>-- Jenis Kelamin Anak --</option>
							<option value="1" @if($detail->anak_jenis_kelamin == 1) selected @endif>Laki-laki</option>
							<option value="2" @if($detail->anak_jenis_kelamin == 2) selected @endif>Perempuan</option>
						</select>
					</div>
				</div>

				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Status Kelahiran Anak</span>
						<select name="anak_status_lahir" required id="" class="form-control">
							<option value="" hidden>-- Status Kelahiran --</option>
							<option value="1" @if($detail->anak_status_lahir == 1) selected @endif>Lahir Normal</option>
							<option value="2" @if($detail->anak_status_lahir == 2) selected @endif>Lahir Cacat</option>
							<option value="3" @if($detail->anak_status_lahir == 3) selected @endif>Lahir Prematur</option>
						</select>
					</div>
				</div>


				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Berat Badan Anak <sup>(Kg)</sup></span>
						<input type="text" id="inputBb" value="{{$detail->anak_bb}}" pattern="\d+(\.\d{1,2})?" required name="anak_bb" class="form-control">
					</div>
				</div>


				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Tinggi Badan Anak <sup>(cm)</sup></span>
						<input type="text" id="inputTb" value="{{$detail->anak_tb}}" pattern="\d+(\.\d{1,2})?" required name="anak_tb" class="form-control">
					</div>
				</div>


				<div class="col-md-6 mt-4">
					<div class="form-group">
						<span>Kartu Anak</span>
						<input type="text" id="uid" value="{{$detail->anak_rfid}}" name="anak_rfid" placeholder="Scan E-KMS"  required class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<center>
							
							<img src="{{url('public/assets/img/card.png')}}" width="50px"  class=" mt-4" alt="...">
							<h3 class="mt-3"><b>SCAN KARTU SEHAT (E-KMS)</b></h3>
						</center>
					</div>
				</div>

				<div class="col-md-12">
					<button class="btn btn-block btn-primary">SIMPAN DATA</button>
				</div>


			</div>
		</form>
	</div>
</div>


<script>
function cekUid(){
	$.ajax({
		type : "GET",
		url : "{{url('admin/master-data/daftar-baru/get-rfid')}}",
		cache : false,
		success : function(response){
			console.log(response);
			$("#uid").val(response)
		}
	});
}

// setInterval(cekUid, 8000);
</script>


<script>
	document.getElementById('inputBb').addEventListener('input', function (e) {
		var value = e.target.value;
		e.target.value = value.replace(/[^0-9.]/g, '');
	});
</script>

<script>
	document.getElementById('inputTb').addEventListener('input', function (e) {
		var value = e.target.value;
		e.target.value = value.replace(/[^0-9.]/g, '');
	});
</script>
@endsection