@extends('template.base')
@section('content')
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<a href="{{url('admin/master-data/data-imunisasi/create')}}" class="btn btn-primary float-right">Tambah Imunisasi</a>
			</div>

			<div class="col-md-12 mt-3">
				<table class="table table-bordered">
					<thead>
						<tr class="bg-primary">
							<th class="text-white text-center">No</th>
							<th class="text-white text-center">Aksi</th>
							<th class="text-white">Nama Imunisasi</th>
							<th class="text-white">Lama Imunisasi</th>
							<th class="text-white">Umur Imunisasi</th>
						</tr>
					</thead>

					<tbody>
					@foreach($list_imunisasi as $item)
					<tr>
						<td class="text-center">{{$loop->iteration}}</td>
						<td class="text-center">
							<a href="{{url('admin/master-data/data-imunisasi',$item->imunisasi_id)}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ini?')">Hapus</a>
						</td>
						<td>{{ucwords($item->imunisasi_nama)}}</td>
						<td>{{ucwords($item->imunisasi_lama)}} bulan sekali</td>
						<td>Bulan ke-{{ucwords($item->imunisasi_bulan_awal)}}-{{ucwords($item->imunisasi_bulan_akhir)}}  </td>
					</tr>
					@endforeach	
					</tbody>

					<tfoot>
						<tr class="bg-primary">
							<th class="text-white text-center">No</th>
							<th class="text-white text-center">Aksi</th>
							<th class="text-white">Nama Imunisasi</th>
							<th class="text-white">Lama Imunisasi</th>
							<th class="text-white">Umur Imunisasi</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>


@endsection