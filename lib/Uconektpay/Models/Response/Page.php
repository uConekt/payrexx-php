<?php
/**
 * The Page response model
 * @copyright 2020 Uconekt AG
 * @since     v1.0
 */
namespace Uconektpay\Models\Response;

/**
 * Class Page
 * @package Uconektpay\Models\Response
 */
class Page extends \Uconektpay\Models\Request\Page
{
    protected $createdAt = 0;

    /**
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedDate($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
}
