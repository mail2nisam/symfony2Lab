<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\NetpayPaymentMethods
 */
class NetpayPaymentMethods
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $methodcode
     */
    private $methodcode;

    /**
     * @var string $methodname
     */
    private $methodname;

    /**
     * @var string $bank
     */
    private $bank;

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
     * Set methodcode
     *
     * @param string $methodcode
     * @return NetpayPaymentMethods
     */
    public function setMethodcode($methodcode)
    {
        $this->methodcode = $methodcode;
    
        return $this;
    }

    /**
     * Get methodcode
     *
     * @return string 
     */
    public function getMethodcode()
    {
        return $this->methodcode;
    }

    /**
     * Set methodname
     *
     * @param string $methodname
     * @return NetpayPaymentMethods
     */
    public function setMethodname($methodname)
    {
        $this->methodname = $methodname;
    
        return $this;
    }

    /**
     * Get methodname
     *
     * @return string 
     */
    public function getMethodname()
    {
        return $this->methodname;
    }

    /**
     * Set bank
     *
     * @param string $bank
     * @return NetpayPaymentMethods
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
    
        return $this;
    }

    /**
     * Get bank
     *
     * @return string 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return NetpayPaymentMethods
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