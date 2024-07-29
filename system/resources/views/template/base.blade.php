<!DOCTYPE html>
<html lang="en" data-footer="true">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>SI-POSYANDU</title>
	<meta name="description" content="Medical Assistant">
	<link rel="icon" type="image/png" href="{{url('public/assets/logo-posyandu.png')}}" >
	<meta name="application-name" content="&nbsp;">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
	<meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png">
	<meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png">
	<meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png">
	<meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png">
	<link rel="preconnect" href="{{url('public/assets')}}/https://fonts.gstatic.com/">
	<link href="{{url('public/assets')}}/https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&amp;display=swap" rel="stylesheet">
	<link href="{{url('public/assets')}}/https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{url('public/assets')}}/font/CS-Interface/style.css">
	<link rel="stylesheet" href="{{url('public/assets')}}/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('public/assets')}}/css/vendor/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="{{url('public/assets')}}/css/vendor/glide.core.min.css">
	<link rel="stylesheet" href="{{url('public/assets')}}/css/styles.css">
	<link rel="stylesheet" href="{{url('public/assets')}}/css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

	<script src="{{url('public')}}/assets/js/base/loader.js"></script>

</head>

<style>
	.float-right{
		float: right !important;
	}

	.card-border{
		border: 5px solid #0CCABF;
	}
</style>
<body class="rtl">
	<div id="root">
		<div id="nav" class="nav-container d-flex">
			<!-- ganti warna side -->
			<div class="nav-content bg-primary d-flex">
				<!-- end ganti wrna -->
				<div class="logo position-relative">
					<a href="#">
						<img src="{{url('public/assets/logo-posyandu-putih.png')}}" alt="">
					</a>
				</div>
				<div class="user-container d-flex">
					<a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="profile" alt="profile" src="{{url('public/assets')}}/img/profile/profile-1.webp">
						<div class="name">
							@if(Auth::guard('admin')->check())
							{{ ucwords(Auth::guard('admin')->user()->admin_nama) }}
							@elseif(Auth::guard('subadmin')->check())
							Super Admin
							@elseif(Auth::guard('orangtua')->check())
							{{ ucwords(Auth::guard('orangtua')->user()->orang_tua_ayah) }} / {{ ucwords(Auth::guard('orangtua')->user()->orang_tua_ibu) }}
							@else
							Belum Login
							@endif
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end user-menu wide">
						<div class="row mb-1 ms-0 me-0">
							<div class="col-12 p-1 mb-2 pt-2">
								<div class="text-extra-small text-primary">APPLICATION</div>
							</div>
						</div>
						<div class="row mb-1 ms-0 me-0">
							<div class="col-12 p-1 mb-3 pt-3">
								<div class="separator-light"></div>
							</div>
							<div class="col-6 ps-1 pe-1">
								<ul class="list-unstyled">
									
								</ul>
							</div>
							<div class="col-6 pe-1 ps-1">
								<ul class="list-unstyled">
									<li>
										<a href="#">
											<i data-acorn-icon="gear" class="me-2" data-acorn-size="17"></i>
											<span class="align-middle">Settings</span>
										</a>
									</li>
									<li>
										<a href="{{url('logout')}}" onclick="return confirm('Yakin untuk keluar?')">
											<i data-acorn-icon="logout" class="me-2" data-acorn-size="17"></i>
											<span class="align-middle">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<ul class="list-unstyled list-inline text-center menu-icons">
					
				</ul>
				<div class="menu-container flex-grow-1">
					@include('template.sidebar')
				</div>
				<div class="mobile-buttons-container">
					<a href="#" id="mobileMenuButton" class="menu-button">
						<i data-acorn-icon="menu"></i>
					</a>
				</div>
			</div>
			<div class="nav-shadow"></div>
		</div>
		<main>
			<div class="container">
				<!-- ganti warna header -->
				<div class="card mb-5 bg-primary ">
					<div class="card-body ">
						<div class="page-title-container ">
							<div class="row">
								<div class="col-12 col-md-7 text-white" >
									<span class="align-middle text-white text-muted d-inline-block lh-1 text-small">Home</span>
									<h1 class="mb-0 pb-0 display-4 text-white" id="title">{{$title}}</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				@yield('content')
			</div>
		</main>
		<footer>
			@include('template.footer')
		</footer>
	</div>

	<script src="{{url('public/assets')}}/js/vendor/jquery-3.5.1.min.js"></script>
	<script src="{{url('public/assets')}}/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="{{url('public/assets')}}/js/vendor/OverlayScrollbars.min.js"></script>
	<script src="{{url('public/assets')}}/js/vendor/autoComplete.min.js"></script>
	<script src="{{url('public/assets')}}/js/vendor/clamp.min.js"></script>
	<script src="{{url('public/assets')}}/icon/acorn-icons.js"></script>
	<script src="{{url('public/assets')}}/icon/acorn-icons-interface.js"></script>
	<script src="{{url('public/assets')}}/icon/acorn-icons-medical.js"></script>
	<script src="{{url('public/assets')}}/js/vendor/glide.min.js"></script>
	<script src="{{url('public/assets')}}/js/base/helpers.js"></script>
	<script src="{{url('public/assets')}}/js/base/globals.js"></script>
	<script src="{{url('public/assets')}}/js/base/nav.js"></script>
	<script src="{{url('public/assets')}}/js/base/search.js"></script>
	<script src="{{url('public/assets')}}/js/base/settings.js"></script>
	<script src="{{url('public/assets')}}/js/cs/glide.custom.js"></script>
	<script src="{{url('public/assets')}}/js/pages/dashboards.patient.js"></script>
	<script src="{{url('public/assets')}}/js/common.js"></script>
	<script src="{{url('public/assets')}}/js/scripts.js"></script>


	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<!-- Notifikasi -->
	@foreach(['success', 'warning', 'error', 'info'] as $status)
	@if (session($status))
	<script>
		Swal.fire({
			icon: "{{ $status }}",
			title: "{{ Str::upper($status) }}",
			text: "{{ session($status) }}!",
			showConfirmButton: false,
			timer: 3000
		})
	</script>
	@endif
	@endforeach

</body>
</html>
