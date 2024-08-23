@extends('template.base')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			Tabel rekam medis perkembangan anak
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr class="bg-primary text-white">
						<th class="text-white">No</th>
						<th class="text-white">No RM.</th>
						<th class="text-white">TB</th>
						<th class="text-white">BB</th>
						<th class="text-white">Umur</th>
					</tr>
				</thead>

				<tbody>
					@foreach($list_rm as $item)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$item->rekam_medis_kode}}</td>
						<td>{{$item->rekam_medis_tb}} cm</td>
						<td>{{$item->rekam_medis_bb}} Kg</td>
						<td>{{ Carbon\Carbon::parse($item->anak->anak_tanggal_lahir)->diffInMonths(Carbon\Carbon::parse($item->created_at)) }} Bulan</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection