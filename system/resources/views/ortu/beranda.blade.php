@extends('template.base')
@section('content')
<h3>Event Seputar Posyandu</h3>
<div class="row mt-3">
	@foreach($list_berita->sortByDesc('berita_id') as $item)
	<div class="col-md-4 mb-3">
		<div class="card">
			<div class="card-body shadow">
				<img src="{{asset('system/public')}}/{{$item->foto}}" width="100%" alt="">
				<p class="mt-3"><a href="{{url('x/berita',$item->berita_id)}}/detail">{{ucwords(Str::limit($item->judul,60))}}</a>
				</p>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection