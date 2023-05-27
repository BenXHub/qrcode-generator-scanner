<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner/Generator</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="qrious-master/dist/fontawesome-6.3.0/css/all.min.css">

    <link rel="stylesheet" href="qrious-master/dist/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3">QR Code Generator/Scanner</h1>
        <div class="row mt-4">
            <div class="col-lg-6">
                <div class="card h-100 mb-3">
                    <h3 class="card-header">QR Code Generator</h3>
                    <div class="card-body">
                        <div class="input-group mb-1" style="border: 1px solid #ccc; border-radius: 7px">
                            <label for="inputText" class="form-label visually-hidden">Enter text:</label>
                            <input type="text" id="inputText" class="form-control" placeholder="Enter text">
                            <button type="button" onclick="generateQRCode()" class="btn btn-primary" fdprocessedid="o66p4">Generate</button>
                        </div>
                        <div class="mt-2 d-flex justify-content-center">
                            <canvas id="qr"></canvas>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        Generate custom QR codes with the QR Code Generator.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 mb-3">
                    <h3 class="card-header">QR Code Scanner</h3>
                    <div class="card-body">
                        <div id="scanner-container" style="position: relative; width: 100%; padding-top: 56.25%;">
                            <video id="scanner" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 5px;"></video>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        Scan QR codes with the QR Code Scanner.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="qrious-master/dist/qrious.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <script src="main.js"></script>
    <script src="qrious-master/dist/bootstrap-5.2.3/js/bootstrap.bundle.js"></script>
</body>
</html>
