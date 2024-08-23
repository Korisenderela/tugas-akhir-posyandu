@extends('template.base')
@section('content')
<style>
	.form-bb {
		font-size: 16px;
		padding: 10px;
		width: 300px;
	}
</style>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<div class="row">
	<div class="col-md-4">
		<div class="card h-100">
			<div class="card-body">
				<h3 class="text-primary">Biodata Anak</h3>

				<table class="table">
					<tr>
						<th>Nama Anak</th>
						<td>: {{ucwords($anak->anak_nama)}}</td>
					</tr>

					<tr>
						<th>NIK</th>
						<td>: {{ucwords($anak->anak_nik)}}</td>
					</tr>

					<tr>
						<th>No KK</th>
						<td>: {{ucwords($anak->anak_no_kk)}}</td>
					</tr>

					<tr>
						<th>Tanggal Lahir </th>
						<td>: {{Carbon\carbon::parse($anak->anak_tanggal_lahir)->format('d M Y')}}</td>
					</tr>

					<tr>
						<th>Umur (Tahun)</th>
						<td>: 
							{{Carbon\carbon::parse($anak->anak_tanggal_lahir)->diffInYears(Carbon\Carbon::parse(date('Y-m-d'))) }} Tahun

						</td>
					</tr>

					<tr>
						<th>Umur (Bulan)</th>
						<td>: 
							{{Carbon\carbon::parse($anak->anak_tanggal_lahir)->diffInMonths(Carbon\Carbon::parse(date('Y-m-d'))) }} Bulan

						</td>

						<tr>
							<th>Umur (Hari)</th>
							<td>: 
								{{Carbon\carbon::parse($anak->anak_tanggal_lahir)->diffInDays(Carbon\Carbon::parse(date('Y-m-d'))) }} Hari

							</td>
						</tr>
					</table>
					<h3 class="text-primary">Biodata Orang Tua</h3>
					<table class="table">
						<tr>
							<th>Nama Ibu</th>
							<td>: {{ucwords($ortu->orang_tua_ibu ?? 'Relasi data not found')}}</td>
						</tr>

						<tr>
							<th>Nama Ayah</th>
							<td>: {{ucwords($ortu->orang_tua_ayah ?? 'Relasi data not found')}}</td>
						</tr>

						<tr>
							<th>Alamat</th>
							<td>: {{ucwords($ortu->orang_tua_alamat ?? 'Relasi data not found')}}</td>
						</tr>

						<tr>
							<th>Rt/Rw</th>
							<td>:  {{ucwords($ortu->orang_tua_rt ?? 'Relasi data not found')}}/ {{ucwords($ortu->orang_tua_rw ?? 'Relasi data not found')}}</td>
						</tr>
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-8">

			

			<div class="card">
				<div class="card-body">

			<!-- 	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					History Imunisasi
				</button>


				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#perkembanganAnak" aria-expanded="false" aria-controls="perkembanganAnak">
					Perkembangan Anak
				</button>
			-->

			<div class="mt-5">
				<center>
					<h3>PELAYANAN MEJA 1</h3>
					<h4>(Penimbangan Berat Badan & Lingkaran Kepala)</h4>


					<form action="{{ url('admin/meja-1', $detail->rekam_medis_id) }}/meja-1" method="post">
						@csrf
						@method("PUT")
						<input type="text" id="inputBb" pattern="\d+(\.\d{1,2})?" class="form-bb" placeholder="Berat badan" required value="{{ $detail->rekam_medis_bb }}" name="rekam_medis_bb" title="Hanya angka dan titik yang diperbolehkan"> Kg <br>

						<input type="text" id="inputLk" pattern="\d+(\.\d{1,2})?" class="form-bb mt-3" placeholder="Lingkaran Kepala" required value="{{ $detail->rekam_medis_bb }}" name="lingkaran_kepala" title="Hanya angka dan titik yang diperbolehkan"> Cm  <br>
						<button class="btn btn-primary mt-3">LANJUT MEJA 2</button>
					</form>

				</center>
			</div>
		</div>
	</div>

	<div class="collapse mt-5" id="collapseExample">
		<div class="card card-body">
			<table class="table">
				<thead>
					<th>Nama Imunisasi</th>
					<th>Tempat Imunisasi</th>
					<th>Tanggal</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>Catatan Dokter</th>
				</thead>
				<tbody>
					@foreach($rekam_medis as $rm)
					<tr>
						<td>{{$loop->iteration}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>


</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
	document.getElementById('inputBb').addEventListener('input', function (e) {
		var value = e.target.value;
		e.target.value = value.replace(/[^0-9.]/g, '');
	});
</script>

<script>
	document.getElementById('inputLk').addEventListener('input', function (e) {
		var value = e.target.value;
		e.target.value = value.replace(/[^0-9.]/g, '');
	});
</script>
<script>
	const ctx = document.getElementById('myChart');

	new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['1', '3', '5', '8', '12', '3'],
			datasets: [{
				label: 'Perkembangan Berat Badan (BB) Anak',
				data: [3, 4.3, 4.5, 5, 6, 9],
				borderWidth: 3,
				borderCapStyle: 'round',
				borderColor: 'red',
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
</script>



@endsection