<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <title>SI-POSYANDU</title>
  <meta name="description" content="Medical Assistant">
  <link rel="icon" type="image/png" href="{{url('public/assets/logo-posyandu.png')}}">
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
<body class="bg-primary">

    <div class="container mt-5 pt-5" style="padding-top: 500px;">
        <div class="card">
            <div class="card-body">
                <center>
                    <h1 class="text-primary">Scan Kartu Anak</h1>
                    <h3 class="text-primary pb-5">SISTEM INFORMASI POSYANDU</h3>
                    <img src="{{url('public/assets/img/card.png')}}" width="40%"  class="d-block mt-5" alt="..."> <br> <br>
                    <button id="nfcButton" class="btn btn-danger" onclick="startNFCScan()">Aktifkan NFC Handphone</button>

                    <audio src="{{asset('system/public/audio.mp3')}}"></audio>
                    <form action="{{ url('scan') }}" class="mt-5 mb-5" method="post">
                        @csrf
                        <div class="d-flex">
                            <input type="text" id="rfidResult" class="form-control ml-2" name="rfid"> 
                           &nbsp;  &nbsp; <button class="btn btn-primary">SIMPAN</button>
                        </div>
                    </form>
                    <p id="rfidResultDisplay"></p>
                </center>
            </div>
        </div>
    </div>

    <script>
       async function startNFCScan() {
        const resultElement = document.getElementById('rfidResult');
        const resultDisplayElement = document.getElementById('rfidResultDisplay');
        const scanAudio = document.getElementById('scanAudio');
        const nfcButton = document.getElementById('nfcButton');

        try {
            if ('NDEFReader' in window) {
                const reader = new NDEFReader();
                reader.addEventListener('reading', async ({ message, serialNumber }) => {
                    console.log(`Serial Number: ${serialNumber}`);
                    console.log(`Message Records: ${JSON.stringify(message.records)}`);

                    // Set the value of the input field
                    resultElement.value = serialNumber;

                    // Display the result in the input field
                    resultDisplayElement.innerText = `RFID Serial Number: ${serialNumber}`;

                    // Attempt to play the scan audio
                    scanAudio.play().catch(error => {
                        console.error(`Error playing audio: ${error}`);
                    });

                    // Submit the form
                    await submitForm();
                });

                reader.addEventListener('error', (event) => {
                    console.error(`Error reading NFC: ${event.message}`);
                    alert(`Error reading NFC: ${event.message}`);
                });

                // Start NFC reading
                await reader.scan();

                // Change button class
                nfcButton.classList.remove('btn-danger');
                nfcButton.classList.add('btn-success');
                nfcButton.textContent = "NFC Aktif Telah";
            } else {
                console.error('NDEFReader not supported.');
                alert('NFC tidak didukung pada peramban ini.');
            }
        } catch (error) {
            console.error(`Error starting NFC scan: ${error}`);
            alert(`Error starting NFC scan: ${error}`);
        }
    }

    async function submitForm() {
        // Find the form and submit it
        const form = document.querySelector('form');
        form.submit();
    }
</script>

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
