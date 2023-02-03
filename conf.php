<?php

$mail_settings_dev = [
    'host' => 'smtp.mailtrap.io',
    'auth' => true,
    'port' => 2525,
    'username' => 'd27b253b09edb2',
    'password' => '717e3dd6eaf3e0',
    'secure' => null,
    'charset' => 'UTF-8',
    'from' => 'cee71195d6-2d2352@inbox.mailtrap.io',
    'name' => 'WebForMyself',
    'is_html' => true,
];

$mail_settings_prod = [
    'host' => 'smtp.gmail.com',
    'auth' => true,
    'port' => 465, // 587
    'username' => 'your_email@gmail.com',
    'password' => 'your_password',
    'secure' => 'ssl', // tls
    'charset' => 'UTF-8',
    'from' => 'your_email@gmail.com',
    'name' => 'WebForMyself',
    'is_html' => true,
];
