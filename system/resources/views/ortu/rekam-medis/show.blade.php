@extends('template.base')
@section('content')


<div class="card">
	<div class="card-header bg-primary">
		<center>
			<h3 class="text-white">HASIL DATA POSYANDU</h3>
		</center>

	</div>
	<div class="card-body">
		
		<div class="table-responsive mt-5">
		<table class="table table-hover table-borderless table-striped">
			<tr>
				<th width="40%">No Rekam Medis</th>
				<td>: {{$detail->rekam_medis_kode}}</td>
			</tr>

			<tr>
				<th width="40%">Tanggal Imunisasi</th>
				<td>: {{$detail->updated_at}}</td>
			</tr>

			<tr>
				<th width="40%">Nama Posyandu</th>
				<td>: {{ucwords($detail->posyandu->posyandu_nama)}}</td>
			</tr>

			<tr>
				<th width="40%">Nama Anak</th>
				<td>: {{ucwords($detail->anak->anak_nama)}}</td>
			</tr>

			<tr>
				<th width="40%">Jenis Imunisasi</th>
				<td>: {{ucwords($detail->imunisasi->imunisasi_nama)}}</td>
			</tr>

			<tr>
				<th width="40%">Pelayan Meja Administrasi</th>
				<td>: {{ucwords($detail->admin0->admin_nama)}}</td>
			</tr>

			<tr>
				<th width="40%">Pelayan Meja 1</th>
				<td>: {{ucwords($detail->admin2->admin_nama)}}</td>
			</tr>

			<tr>
				<th width="40%">Pelayan Meja 2</th>
				<td>: {{ucwords($detail->admin2->admin_nama)}}</td>
			</tr>

			<tr>
				<th width="40%">Pelayan Meja 3 (Meja Imunisasi)</th>
				<td>: {{ucwords($detail->admin3->admin_nama)}}</td>
			</tr>

			<tr>
				<th width="40%">Keterangan</th>
				<td>: {{ucwords($detail->rekam_medis_keterangan)}}</td>
			</tr>

			<tr>
				<th width="40%">Catatan Medis</th>
				<td>: {{ucwords($detail->rekam_medis_catatan)}}</td>
			</tr>


			<tr>
				<th width="40%">Berat Badan</th>
				<td>: {{ucwords($detail->rekam_medis_bb)}} Kg</td>
			</tr>


			<tr>
				<th width="40%">Tinggi Badan</th>
				<td>: {{ucwords($detail->rekam_medis_tb)}} Cm</td>
			</tr>



		</table>

	</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection