function generateQRCode() {
    var inputText = document.getElementById('inputText').value;

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

let scanner = new Instascan.Scanner({video: document.getElementById('scanner')});
scanner.addListener('scan', function (content) {
    alert('QR code scanned: ' + content);
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
