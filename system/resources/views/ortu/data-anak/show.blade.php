@extends('template.base')
@section('content')


<div class="card mt-3">
   <div class="card-header bg-primary text-white">
     <center>
      <h3 class="text-white">GRAFIK PERKEMBANGAN BERAT BADAN ANAK</h3>
    </center>
  </div>
  <div class="card-body ">
    <canvas id="myChartBb"></canvas>
  </div>
</div>


<div class="card mt-3">
  <div class="card-header bg-primary text-white">
     <center>
      <h3 class="text-white">GRAFIK PERKEMBANGAN TINGGI BADAN ANAK</h3>
    </center>
  </div>
  <div class="card-body ">
    <canvas id="myChartTb"></canvas>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    var ctxbb = document.getElementById('myChartBb').getContext('2d');
    var ctxtb = document.getElementById('myChartTb').getContext('2d');
    var data = {
      labels: [
        @foreach ($list_rm->sortByDesc('created_at') as $item)
        "Bulan Ke-{{ Carbon\Carbon::parse($item->anak->anak_tanggal_lahir)->diffInMonths(Carbon\Carbon::parse($item->created_at)) }} ",
        @endforeach
        ],
      datasets: [{
        label: 'Perkembangan berat badan anak',
        backgroundColor: '#290C96', // Warna area dalam bar
        borderColor: 'rgba(75, 192, 192, 1)',     // Warna garis tepi bar
        borderWidth: 1,                            // Lebar garis tepi bar
        data: [
          @foreach ($list_rm->sortByDesc('created_at') as $item)
          "{{ucwords($item->rekam_medis_bb) }}",
          @endforeach
        ]                    // Data nilai bar
    }]
    };

// Konfigurasi opsi chart
    var options = {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

// Membuat objek bar chart
    var myBarChart = new Chart(ctxbb, {
    type: 'line',      // Tipe chart adalah bar
    data: data,       // Menggunakan data yang telah didefinisikan
    options: options  // Menggunakan opsi yang telah didefinisikan
});


     var data = {
      labels: [
        @foreach ($list_rm->sortByDesc('created_at') as $item)
        "Bulan Ke-{{ Carbon\Carbon::parse($item->anak->anak_tanggal_lahir)->diffInMonths(Carbon\Carbon::parse($item->created_at)) }} ",
        @endforeach
        ],
      datasets: [{
        label: 'Perkembangan tinggi badan anak',
        backgroundColor: '#290C96', // Warna area dalam bar
        borderColor: 'rgba(75, 192, 192, 1)',     // Warna garis tepi bar
        borderWidth: 1,                            // Lebar garis tepi bar
        data: [
          @foreach ($list_rm->sortByDesc('created_at') as $item)
          "{{ucwords($item->rekam_medis_tb) }}",
          @endforeach
        ]                    // Data nilai bar
    }]
    };

// Konfigurasi opsi chart
    var options = {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    };

// Membuat objek bar chart
    var myBarChart = new Chart(ctxtb, {
    type: 'line',      // Tipe chart adalah bar
    data: data,       // Menggunakan data yang telah didefinisikan
    options: options  // Menggunakan opsi yang telah didefinisikan
});

</script>
@endsection