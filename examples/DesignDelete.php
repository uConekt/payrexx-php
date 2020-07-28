<?php

use Uconektpay\Models\Request\Design;
use Uconektpay\Uconektpay;
use Uconektpay\UconektpayException;

spl_autoload_register(function ($class) {
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

$uconektpay = new Uconektpay($instanceName, $secret);

$design = new Design();
$design->setId(1);

try {
    $response = $uconektpay->delete($design);
    var_dump($response);
} catch (UconektpayException $e) {
    print $e->getMessage();
}
