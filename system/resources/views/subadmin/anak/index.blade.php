@extends('template.base')
@section('content')


<div class="row">
	<div class="col-md-3 col-6 mb-5">
		<div class="card bg-primary ">
			<div class="card-body">
				<center>
					<h2 class="text-white">{{number_format($jumlah_anak)}}</h2>
					<h3 class="text-white">Jumlah Anak</h3>
				</center>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-6 mb-5">
		<div class="card bg-primary ">
			<div class="card-body">
				<center>
					<h2 class="text-white">{{number_format($jumlah_ortu)}}</h2>
					<h3 class="text-white">Orang Tua</h3>
				</center>
			</div>
		</div>
	</div>
</div>


<div class="card">
	<div class="card-body">
		<div class="table-responsive">
		<table class="table table-hover table-bordered table-striped"  id="myTable">
			<thead>
				<tr class="bg-primary">
					<th class="text-white text-center">No</th>
					<th class="text-white">No KK</th>
					<th class="text-white">NIK</th>
					<th class="text-white">Nama Anak</th>
					<th class="text-white">Nama Ibu</th>
					<th class="text-white">Nama Ayah</th>
				</tr>
			</thead>


			<tbody>
				@foreach($list_anak as $item)
				<tr>
					<td class="text-center">{{$loop->iteration}}</td>
					<td>{{$item->anak->anak_nik}}</td>
					<td>{{$item->anak->anak_no_kk}}</td>
					<td>{{ucwords($item->anak->anak_nama)}}</td>
					<td>{{ucwords($item->anak->ortu->orang_tua_ibu)}}</td>
					<td>{{ucwords($item->anak->ortu->orang_tua_ayah)}}</td>
				</tr>
				@endforeach
			</tbody>

			<tfoot>
				<tr class="bg-primary">
					<th class="text-white text-center">No</th>
					<th class="text-white">No KK</th>
					<th class="text-white">NIK</th>
					<th class="text-white">Nama Anak</th>
					<th class="text-white">Nama Ibu</th>
					<th class="text-white">Nama Ayah</th>
				</tr>
			</tfoot>
		</table>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>
@endsection