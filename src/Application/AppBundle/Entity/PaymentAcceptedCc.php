<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PaymentAcceptedCc
 */
class PaymentAcceptedCc
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $cardtypecode
     */
    private $cardtypecode;

    /**
     * @var string $cardtype
     */
    private $cardtype;

    /**
     * @var string $enablecvv2
     */
    private $enablecvv2;

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
     * Set cardtypecode
     *
     * @param string $cardtypecode
     * @return PaymentAcceptedCc
     */
    public function setCardtypecode($cardtypecode)
    {
        $this->cardtypecode = $cardtypecode;
    
        return $this;
    }

    /**
     * Get cardtypecode
     *
     * @return string 
     */
    public function getCardtypecode()
    {
        return $this->cardtypecode;
    }

    /**
     * Set cardtype
     *
     * @param string $cardtype
     * @return PaymentAcceptedCc
     */
    public function setCardtype($cardtype)
    {
        $this->cardtype = $cardtype;
    
        return $this;
    }

    /**
     * Get cardtype
     *
     * @return string 
     */
    public function getCardtype()
    {
        return $this->cardtype;
    }

    /**
     * Set enablecvv2
     *
     * @param string $enablecvv2
     * @return PaymentAcceptedCc
     */
    public function setEnablecvv2($enablecvv2)
    {
        $this->enablecvv2 = $enablecvv2;
    
        return $this;
    }

    /**
     * Get enablecvv2
     *
     * @return string 
     */
    public function getEnablecvv2()
    {
        return $this->enablecvv2;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return PaymentAcceptedCc
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