@extends('template.base')
@section('content')
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{url('public')}}/summernote/summernote-bs4.css">
  
<div class="card">
	<div class="card-body">
		<form action="" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-6">
					<span>Judul Event</span>
					<input type="text" name="judul" placeholder="Judul Event ..." required class="form-control">
				</div>
				<div class="col-md-6">
					<span>Gambar Event</span>
					<input type="file" accept="image/*" name="foto" required class="form-control">
				</div>

				<div class="col-md-12 mt-3">
					<textarea name="isi" id="summernote" class="form-control" placeholder="Informasi Event ..." rows="10" id=""></textarea>
				</div>

				<button class="btn btn-primary mt-3">Buat Event</button>
			</div>
		</form>
	</div>
</div>
<script src="{{url('public')}}/summernote/summernote.js"></script>
 <script>
      $('#summernote').summernote({
        placeholder: 'Buat Event ...',
        tabsize: 2,
        height: 200
      });
    </script>
@endsection