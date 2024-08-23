@extends('template.base')
@section('content')


<a href="{{url('admin/berita/create')}}" class="btn btn-primary">Buat Event Baru</a>

<div class="row mt-3">
	@foreach($list_berita->sortByDesc('berita_id') as $item)
	<div class="col-md-4 mb-3">
		<div class="card">
			<div class="card-body shadow">
				<img src="{{url('public/app/berita')}}/{{$item->foto}}" width="100%" alt="">
				<p class="mt-3"><a href="{{url('admin/berita',$item->berita_id)}}/detail">{{ucwords(Str::limit($item->judul,60))}}</a>
					<br> <a href="{{url('admin/berita',$item->berita_id)}}/delete" class="btn btn-danger btn-sm mt-3" onclick="return confirm('Yakin hapus data berita ini?')">Hapus</a>
					 <a href="{{url('admin/berita',$item->berita_id)}}/edit" class="btn btn-warning btn-sm mt-3">Edit</a>
				</p>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection