<!DOCTYPE html>
<html lang="en">
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
<body>

  <style>
    a {
      text-decoration: none;
    }
    .login-page {
      width: 100%;
      height: 100vh;
      display: inline-block;
      display: flex;
      align-items: center;
    }
    .form-right i {
      font-size: 100px;
    }

    .card{
    border: 5px solid #0CCABF;
  }
  </style>
  <div class="login-page bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="bg-white card shadow rounded">
            <div class="row">
              <div class="col-md-7 mt-5 mb-5 pe-0">
                <div class="form-left h-100 py-5 px-5">
                  <center>
                   <img src="{{url('public/assets/logo-posyandu-biru.png')}}" width="150px" alt=""> <br> <br>
                   <h3>Selamat Datang Super Admin <br> Sistem Informasi Posyandu</h3>
                 </center>
                 <form action="{{url('login-subadmin')}}" method="post" class="row g-4">
                  @csrf
                  <div class="col-12">
                    <label>Email<span class="text-danger">*</span></label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                      <input type="emial" name="email" class="form-control" placeholder="Enter E-Mail">
                    </div>
                  </div>

                  <div class="col-12">
                    <label>Password<span class="text-danger">*</span></label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                      <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-check">
                      <!-- <input class="form-check-input" type="checkbox" id="inlineFormCheck"> -->
                      <!-- <label class="form-check-label" for="inlineFormCheck">Remember me</label> -->
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- <a href="#" class="float-end text-primary">Forgot Password?</a> -->
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary px-4 float-end mt-4">Masuk</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="col-md-5 ps-0 d-none d-md-block">
              <div class="form-right h-100 bg-primary text-white text-center pt-5">

                <center>
                  <img src="{{url('public/assets/logo-posyandu-putih.png')}}" width="80%" style="margin-top:70pt" alt=""> <br> <br>

                  <a href="" class="btn bg-white text-primary">Masuk sebagai Petugas ?</a> <br>
                  Atau <br>
                   <a href="" class="btn bg-white text-primary">Masuk sebagai Orang Tua ?</a> <br>
                </center>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
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