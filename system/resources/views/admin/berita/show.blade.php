@extends('template.base')
@section('content')

<div class="container">
	<div class="card">
		<div class="card-body">
			<h3>{{ucwords($detail->judul)}}</h3>
			<b>Dibuat Pada : {{$detail->created_at}}</b> <br>
			<center>
				<img src="{{url('public/app/berita')}}/{{$detail->foto}}" class="mt-3" width="50%" alt=""> <br>
			</center>
			
			<p class="mt-3">{!!nl2br($detail->isi)!!}</p>
		</div>
	</div>
</div>



@endsection