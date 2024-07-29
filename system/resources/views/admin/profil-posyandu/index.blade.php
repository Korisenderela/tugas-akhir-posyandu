@extends('template.base')
@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="card">
			<img src="{{asset('system/public')}}/{{$posyandu->posyandu_foto}}" width="100%" style="border-radius: 20px;" class="shadow" alt="">
		</div>
	</div>

	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<table class="table table-borderless">
					<tr>
						<td colspan="2"><h3>Profil Posyandu</h3></td>
					</tr>
					<tr>
						<th>Nama Posyandu</th>
						<td>: {{ucwords($posyandu->posyandu_nama)}}</td>
					</tr>
					<tr>
						<th>Alamat Posyandu</th>
						<td>: {{ucwords($posyandu->posyandu_alamat)}}</td>
					</tr>

					<tr>
						<th>Email</th>
						<td>: {{ucwords($posyandu->posyandu_email)}}</td>
					</tr>

					<tr>
						<th>No Telp</th>
						<td>: {{ucwords($posyandu->posyandu_notlp)}}</td>
					</tr>
					<tr>
						<td colspan="2">
							<br>
							<a href="{{url('admin/profil-posyandu',$posyandu->posyandu_id)}}/edit" class="btn btn-primary">Edit Profil Posyandu</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection