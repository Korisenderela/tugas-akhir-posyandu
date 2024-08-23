@extends('template.base')
@section('content')

<div class="card">
	<div class="card-body">
		
		<div class="table-responsive">
			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr class="bg-primary">
						<th class="text-white">No RM</th>
						<th class="text-white">Nama Anak</th>
						<th class="text-white">Tanggal Periksa</th>
						<th class="text-white">Nama Posyandu</th>
						<th class="text-white">Jenis Imunisasi</th>
						<th class="text-white">Aksi</th>
					</tr>
				</thead>

				<tbody>
					@foreach($list_rm->sortByDesc('created_at') as $item)
					<tr>
						<td>{{$item->rekam_medis_kode}}</td>
						<td>{{ucwords($item->anak->anak_nama)}}</td>
						<td>{{$item->created_at}}</td>
						<td>{{$item->posyandu->posyandu_nama}}</td>
						<td>{{$item->imunisasi->imunisasi_nama}}</td>
						<td><a href="{{url('x/rekam-medis',$item->rekam_medis_id)}}/detail" class="btn btn-warning">Lihat</a></td>
					</tr>
					@endforeach
				</tbody>


				<tfoot>
					<tr class="bg-primary">
						<th class="text-white">No RM</th>
						<th class="text-white">Nama Anak</th>
						<th class="text-white">Tanggal Periksa</th>
						<th class="text-white">Nama Posyandu</th>
						<th class="text-white">Jenis Imunisasi</th>
						<th class="text-white">Aksi</th>
					</tr>
				</tfoot>
			</table>
		</div>

	</div>
</div>
@endsection