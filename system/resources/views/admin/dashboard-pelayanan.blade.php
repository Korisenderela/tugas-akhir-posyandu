@extends('template.base')
@section('content')

<div class="row">
	<div class="col-md-4">
		<div class="card shadow">
			<div class="card-body ">
				<center>
					<br>
					<br>
					<br>
					<img src="{{url('public/assets/logo-posyandu-biru.png')}}" width="80%" alt="...">
					<br>
					<br>
					<br>
					<br>
					<a href="{{url('admin/master-data/daftar-baru')}}" class="btn btn-lg btn-primary "><b>Daftar Anak Baru</b></a>
					<br>
					<br>
				</center>
			</div>
		</div>
	</div>


	<div class="col-md-8 mt-3">
		<div class="card">
			<div class="card-body">
				<center>
					<img src="{{url('public/assets/img/card.png')}}" width="20%"  class="d-block mt-5" alt="..."> <br> <br>
					<h3 class="mt-3"><b>SCAN KARTU SEHAT (E-KMS)</b></h3>

					<form action="" method="post">
						@csrf
						<div class="input-group">
							<input type="text" id="uid" placeholder="Scan Kartu" class="form-control" >
						</div>
					</form>
				</center>

				<div id="displayData"></div>
			</div>
		</div>
	</div>



</div>


<script>
	function cekUid(){
		$.ajax({
			type : "GET",
			url : "{{url('admin/get-anak')}}",
			cache : false,
			success : function(response){
				console.log(response);
				$("#uid").val(response)
				displayData(response);
			}
		});
	}


	function displayData(data) {
		var html = '<table class="table mt-3 table-striped">'+
		'<tr>'+
		'<th>Nama </th>'+
		'<td class"text-uppercase">: '+ data.anak_nama +'</td>'+
		'</tr>'+

		'<tr>'+
		'<th>NO KK </th>'+
		'<td>: '+ data.anak_no_kk +'</td>'+
		'</tr>'+


		'<tr>'+
		'<th>NIK </th>'+
		'<td>: '+ data.anak_nik +'</td>'+
		'</tr>'+

		'<tr>'+
		'<th colspan="2"><a href="{{url('admin')}}/proses-anak/'+data.anak_id+'" class="btn btn-primary">Cek Anak</a> </th>'+
		'</tr>'+

		'</table>';

		$("#displayData").html(html);
	}

	setInterval(cekUid, 3000);
</script>





@endsection