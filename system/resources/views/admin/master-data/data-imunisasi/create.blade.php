@extends('template.base')
@section('content')

<div class="card mb-5">
	<div class="card-body">
		<form action="{{url('admin/master-data/data-imunisasi/create')}}" method="post" enctype="multipart/form-data">
			@csrf
			

			<h2 class="small-title mt-5">Data Imuniasasi Posyandu :</h2>
			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Nama Imunisasi</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="text" name="imunisasi_nama" placeholder="Nama Imunisasi" required class="form-control" >
				</div>
			</div>


			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Deskripsi Imunisasi</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<textarea name="imunisasi_deskripsi" id="" cols="30" rows="3" class="form-control" placeholder="Deskripsi Imuniasasi"></textarea>
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Lama Imunisasi</label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<sup>Berapa bulan sekali*</sup>
					<input type="number" class="form-control" required placeholder="Berapa bulan sekali" name="imunisasi_lama">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Umur Awal Bayi <sup>(Bulan)</sup></label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="number" class="form-control" placeholder="Umur minimal bayi" min="0" value="0" name="imunisasi_bulan_awal">
				</div>
			</div>

			<div class="mb-3 row">
				<label class="col-lg-2 col-md-3 col-sm-4 col-form-label">Umur Akhir Bayi <sup>(Bulan)</sup></label>
				<div class="col-sm-8 col-md-9 col-lg-10">
					<input type="number" class="form-control" min="0" placeholder="Umur Maksimal Bayi" value="0" name="imunisasi_bulan_akhir">
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


<script>
    // Mengambil elemen input range
	var rangeInput = document.getElementById('rangeInput');

    // Mengambil elemen untuk menampilkan nilai saat ini
	var currentValue = document.getElementById('currentValue');

    // Menambahkan event listener untuk mengupdate nilai saat slider digeser
	rangeInput.addEventListener('input', function() {
		currentValue.textContent = rangeInput.value;
	});
</script>
@endsection