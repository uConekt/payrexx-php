<?php

spl_autoload_register(function($class) {
    $root = dirname(__DIR__);
    $classFile = $root . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// $instanceName is a part of the url where you access your uconektpay installation.
// https://{$instanceName}.uconekt-pay.com
$instanceName = 'YOUR_INSTANCE_NAME';

// $secret is the uconektpay secret for the communication between the applications
// if you think someone got your secret, just regenerate it in the uconektpay administration
$secret = 'YOUR_SECRET';

$uconektpay = new \Uconektpay\Uconektpay($instanceName, $secret);

$signatureCheck = new \Uconektpay\Models\Request\SignatureCheck();
try {
    $uconektpay->getOne($signatureCheck);
    die('Signature correct');
} catch (\Uconektpay\UconektpayException $e) {
    print $e->getMessage();
    die('Signature wrong');
}
