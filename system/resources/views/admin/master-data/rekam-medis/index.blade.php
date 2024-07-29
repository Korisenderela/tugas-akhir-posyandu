@extends('template.base')
@section('content')


<div class="card">
	<div class="card-body">
		<p>Catatan rekam medis imunisasi anak</p>
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<tr class="bg-primary">
					<th class="text-white text-center">No</th>
					<th class="text-white">No RM</th>
					<th class="text-white">Nama Anak</th>
					<th class="text-white">Nama Ibu</th>
					<th class="text-white">Tgl Periksa</th>
					<th class="text-white text-center">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($list_rm as $item)
				<tr>
					<td class="text-center">{{$loop->iteration}}</td>
					<td>{{$item->rekam_medis_kode}}</td>
					<td>{{ucwords($item->anak->anak_nama)}}</td>
					<td>{{ucwords($item->ortu->orang_tua_ibu)}}</td>
					<td>{{$item->created_at}}</td>
					<td class="text-center">
						<a href="" class="btn btn-primary">Lihat hasil</a>
					</td>
				</tr>
				@endforeach
			</tbody>

			<tfoot>
				<tr class="bg-primary">
					<th class="text-white text-center">No</th>
					<th class="text-white">No RM</th>
					<th class="text-white">Nama Anak</th>
					<th class="text-white">Nama Ibu</th>
					<th class="text-white">Tgl Periksa</th>
					<th class="text-white text-center">Aksi</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>


@endsection