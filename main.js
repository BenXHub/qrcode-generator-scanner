function generateQRCode() {
    var inputText = document.getElementById('inputText').value;

    // Check if input text is empty
    if (inputText.trim() === '') {
        // Clear the canvas
        var canvas = document.getElementById('qr');
        var context = canvas.getContext('2d');
        context.clearRect(0, 0, canvas.width, canvas.height);

        return; // Exit the function if there is no input text
    }

    // Clear the canvas
    var canvas = document.getElementById('qr');
    var context = canvas.getContext('2d');
    context.clearRect(0, 0, canvas.width, canvas.height);

    // Generate QR code
    var qr = new QRious({
        element: canvas,
        value: inputText,
        size: 230
    });
}

let scanner = new Instascan.Scanner({ video: document.getElementById('scanner') });

scanner.addListener('scan', function (content) {
    document.getElementById('message').value = content; // Set the scanned content as the value of the 'to' field
    document.getElementById('sms-form').submit(); // Submit the form
});

Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
        scanner.start(cameras[0]);
    } else {
        console.error('No cameras found.');
    }
}).catch(function (error) {
    console.error(error);
});
