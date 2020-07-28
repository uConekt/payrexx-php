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

// init empty request object
$authToken = new \Uconektpay\Models\Request\AuthToken();

// info for auth token (user id)
$authToken->setUserId(1);

// fire request with created and filled link request-object.
try {
    $response = $uconektpay->create($authToken);
    var_dump($response);
} catch (\Uconektpay\UconektpayException $e) {
    print $e->getMessage();
}
