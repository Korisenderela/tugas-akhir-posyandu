@extends('template.base')
@section('content')

<div class="card">
	<div class="card-body">
		<center>
			<h2>Data Anak Imunisasi Hari ini</h2>
		</center>
		<div class="table-responsive" id="loadpage">
			<table class="table mt-5 table-striped table-hover table-bordered">
				<thead>
					<tr class="bg-primary">
						<th class="text-white text-center">No</th>
						<th class="text-white text-center">Aksi</th>
						<th class="text-white">No Rekam Medis</th>
						<th class="text-white">Nama Anak</th>
						<th class="text-white">NIK Anak</th>
						<th class="text-white">Nama Ibu</th>
					</tr>
				</thead>

				<tbody>
					@foreach($list_rm as $item)
					<tr>
						<td class="text-center">{{$loop->iteration}}</td>
						<td class="text-center">
							<a href="{{url('admin/meja-')}}{{Auth::guard('admin')->user()->admin_meja}}/{{$item->rekam_medis_id}}" class="btn btn-primary">Periksa</a>
						</td>
						<td>{{$item->rekam_medis_kode}}</td>
						<td>{{ucwords($item->anak->anak_nama)}}</td>
						<td>{{$item->anak->anak_nik}}</td>
						<td>{{ucwords($item->ortu->orang_tua_ibu)}}</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr class="bg-primary">
						<th class="text-white text-center">No</th>
						<th class="text-white text-center">Aksi</th>
						<th class="text-white">No Rekam Medis</th>
						<th class="text-white">Nama Anak</th>
						<th class="text-white">NIK Anak</th>
						<th class="text-white">Nama Ibu</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">

// KAMAR 1 ===================
	function loadpage(){
		$('#loadpage').load("{{url('admin/dashboard-pelayanan')}}" + ' #loadpage');
	}

	setInterval( ()=>{
		loadpage();
	}, 5000);

</script>
@endsection