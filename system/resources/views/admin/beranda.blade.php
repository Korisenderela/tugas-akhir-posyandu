@extends('template.base')
@section('content')

<div class="row">
	<div class="col-md-9">
		<div class="card" style="border: 5px solid #0CCABF;">
			<div class="cadr-body">
				<div class="container p-5">
					<canvas id="myChart"></canvas>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		
		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="card bg-primary " style="border: 5px solid #15DAD3;">
					<div class="card-body">
						<center>
							<h1 class="text-white"><b>{{$totalAnak}}</b></h1>
							<h3 class="text-white">Jumlah Anak</h3>
						</center>
					</div>
				</div>
			</div>


			<div class="col-md-12 mb-4">
				<div class="card bg-primary " style="border: 5px solid #15DAD3;">
					<div class="card-body">
						<center>
							<h1 class="text-white"><b>{{$jumlahOrtu}}</b></h1>
							<h3 class="text-white">Jumlah ORTU</h3>
						</center>
					</div>
				</div>
			</div>


			<div class="col-md-12 mb-4">
				<div class="card bg-primary " style="border: 5px solid #15DAD3;">
					<div class="card-body">
						<center>
							<h1 class="text-white"><b>{{$totalImunisasi}}</b></h1>
							<h3 class="text-white">Jumlah Imunisasi</h3>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
	const ctx = document.getElementById('myChart');

	new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ['Jumlah Anak', 'Jumlah Orang Tua'],
			datasets: [{
				label: 'Jumlah orang tua & Anak',
				data: [{{$jumlahAnak}}, {{$jumlahOrtu}}],
				borderWidth: 3,
				borderCapStyle: 'round',
				borderColor: '#0CCABF',
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
</script>


@endsection