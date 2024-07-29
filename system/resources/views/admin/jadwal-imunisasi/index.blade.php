@extends('template.base')
@section('content')


<div class="card">
	<div class="card-body">
		<center>
			<h3>JADWAL KEGIATAN IMUNISASI BULAN INI</h3>
		</center>

		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#exampleModal">
	Buat Jadwal Imunisasi
  </button>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Form Jadwal Imunisasi</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  <form action="{{url('admin/jadwal-imunisasi/create')}}" method="post">
			@csrf

			<div class="form-group">
				<span>Jenis Imunisasi</span>
				<select name="jadwal_imunisasi_id" id="" required class="form-control">
					<option value="" hidden>--Jenis Imunisasi--</option>
					@foreach ($list_imunisasi as $item)
						<option value="{{$item->imunisasi_id}}">{{ucwords($item->imunisasi_nama)}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group mt-3">
				<span>Lokasi Imunisasi</span>
				<input type="text" name="jadwal_lokasi" class="form-control" required>
			</div>

			<div class="form-group mt-3">
				<span>Tanggal Imunisasi</span>
				<input type="date" name="jadwal_tanggal" class="form-control" required>
			</div>

			<button class="btn btn-primary mt-3 float-right">SIMPAN</button>

		  </form>
		</div>
	  </div>
	</div>
  </div>

		<table class="table table-hover table-striped table-bordered mt-3">
			<thead>
				<tr class="bg-primary">
					<th class="text-white">No</th>
					<th class="text-white">Tanggal</th>
					<th class="text-white">Lokasi</th>
					<th class="text-white">Aksi</th>
				</tr>
			</thead>

			<tbody>
			@foreach ($list_jadwal as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->jadwal_tanggal_full}}</td>
					<td>{{ucwords($item->jadwal_lokasi)}}</td>
					<td>
						<div class="btn-group">
							<a href="{{url('admin/jadwal-imunisasi',$item->jadwal_id)}}/delete" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
			<tfoot>
				<tr class="bg-primary">
					<th class="text-white">No</th>
					<th class="text-white">Tanggal</th>
					<th class="text-white">Lokasi</th>
					<th class="text-white">Aksi</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection