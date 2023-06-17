<?php
header('Content-Type: application/json');

$message = $_POST["message"];
$mobileNumber = $_POST["mobile_number"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = "https://rest.nexmo.com/sms/json";
    $data = array(
        'from' => 'Vonage APIs',
        'text' => $message,
        'to' => $mobileNumber,
        'api_key' => '72204554',
        'api_secret' => 'F0BHoFTg1Xvi1CRX'
    );

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);

    if ($response === false) {
        $error = curl_error($curl);
        $result = array('success' => false, 'error' => $error);
    } else {
        $result = array('success' => true, 'response' => json_decode($response, true));
    }

    curl_close($curl);
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>SMS Sending Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .success {
                color: green;
            }
            .error {
                color: red;
            }
        </style>
    </head>
    <body>
    <?php if ($result['success']) { ?>
        <h2 class="success">SMS Sent Successfully!</h2>
        <pre><?php echo json_encode($result['response'], JSON_PRETTY_PRINT); ?></pre>
    <?php } else { ?>
        <h2 class="error">SMS Sending Failed!</h2>
        <p class="error"><?php echo $result['error']; ?></p>
    <?php } ?>
    </body>
    </html>

<?php } ?>
