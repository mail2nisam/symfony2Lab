<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PaymentSupportedCurrencies
 */
class PaymentSupportedCurrencies
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $currencycode
     */
    private $currencycode;

    /**
     * @var string $status
     */
    private $status;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set currencycode
     *
     * @param string $currencycode
     * @return PaymentSupportedCurrencies
     */
    public function setCurrencycode($currencycode)
    {
        $this->currencycode = $currencycode;
    
        return $this;
    }

    /**
     * Get currencycode
     *
     * @return string 
     */
    public function getCurrencycode()
    {
        return $this->currencycode;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PaymentSupportedCurrencies
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}