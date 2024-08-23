@extends('template.base')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="mb-5 mt-3">
					<h3>Form Ganti Password Baru</h3>
					<form action="{{url('subadmin/profil-akun/update')}}" method="get">
						@csrf
						<div class="form-group">
							<span class="text-primary">Email</span>
							<input type="text" value="{{Auth::guard('subadmin')->user()->email}}" name="email" class="form-control" placeholder="Password Baru">
						</div>

                        <div class="form-group mt-3">
							<span class="text-primary">Password Baru</span>
							<input type="password" name="new" class="form-control" placeholder="Password Baru">
						</div>

						<div class="form-group mt-3">
							<span class="text-primary">Konfirmasi Password Baru</span>
							<input type="password" name="confirm" class="form-control" placeholder="Konfirmasi Password Baru">
						</div>

						<button class="btn btn-danger mt-3 float-right mb-5">Ganti Password</button>
					</form>
				</div>
    </div>
</div>
@endsection