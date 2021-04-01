<?php

if($_POST["phone"] == '') return 0;

$email = array('heatlead@yandex.ru', 'vzembitskiy@yandex.ru'); // Кому
$from = "zayavka@leads4you.ru"; // от кого

$to = implode(",", $email);
$utm_source = trim($_POST["utm_source"]);
$utm_medium = trim($_POST["utm_medium"]);
$utm_campaign = trim($_POST["utm_campaign"]);
$utm_term = trim($_POST["utm_term"]);
$utm_content = trim($_POST["utm_content"]);
$phone = trim($_POST["phone"]);
$host = $_SERVER['SERVER_NAME'];

$subject = "Реклама строительство\r\n";
$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$message = "<html><body style='font-family:Arial,sans-serif;'>\r\n";

if(!empty($name)){
	$message .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
}
if(!empty($phone)){
	$message .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
}
if(!empty($utm_source)){
	$message .= "<p><strong>Источник перехода:</strong> " .$utm_source. " " .$utm_medium. " " .$utm_campaign. " " .$utm_term. " " .$utm_content."</p>\r\n";
}

$message .= "<p><strong>Адрес сайта: </strong> " .$host. "</p>\r\n";
$message .= "</body></html>\r\n";

mail($to, $subject, $message, $headers);

$data = $_REQUEST;
$data['host'] = $host;
$data['address'] = $address;

try {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'https://leads4you.ru/amo/handler.php?token=cxAYHVkWZCVStswQc7Yr');
    curl_setopt($curl, CURLOPT_TIMEOUT_MS, 1000); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    $out = curl_exec($curl);
    curl_close($curl);
} catch (Exception $e) {}

?>