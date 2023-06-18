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
        'api_key' => '72204554', //Make sure you change this with your API Key
        'api_secret' => 'F0BHoFTg1Xvi1CRX' //Make sure you change this with your API Secret
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

    echo json_encode($result, JSON_PRETTY_PRINT);
}
