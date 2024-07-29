<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFC RFID Reader</title>
</head>
<body>
    <h1>NFC RFID Reader</h1>
    <audio src="{{asset('system/public/audio.mp3')}}"></audio>
    <form action="{{url('scan')}}" method="post">
        @csrf
        <input type="text" id="rfidResult" name="rfid"> 
        <button>SIMPAN</button>
    </form>
    <p id="rfidResultDisplay"></p>

    <!-- Tambahkan tombol untuk memicu pembacaan NFC -->
    <button onclick="startNFCScan()">Start NFC Scan</button>

    <script>
     async function startNFCScan() {
        const resultElement = document.getElementById('rfidResult');
        const resultDisplayElement = document.getElementById('rfidResultDisplay');
        const scanAudio = document.getElementById('scanAudio');

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
</body>
</html>
