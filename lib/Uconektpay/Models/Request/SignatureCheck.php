<?php
/**
 * The signatureCheck request model
 * @copyright 2020 Uconekt AG
 * @since     v1.0
 */
namespace Uconektpay\Models\Request;

/**
 * Class SignatureCheck
 * @package Uconektpay\Models\Request
 */
class SignatureCheck extends \Uconektpay\Models\Base
{
    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \Uconektpay\Models\Response\SignatureCheck();
    }
}
