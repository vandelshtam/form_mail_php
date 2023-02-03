<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/conf.php';
require_once __DIR__ . '/funcs.php';

$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$name = $_POST['user_name'];
$message = $_POST['user_textarea'];


$body = '' .$name . ' left a request, his phone number ' .$phone. '<br>This users mail: ' .$email. '<br>Message text: ' .$message;

$mail = send_mail($mail_settings_dev, ['company_servises@gmail.com'], 'mail from site', $body);
if($mail == false) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}