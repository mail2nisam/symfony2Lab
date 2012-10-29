<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliatePayments
 */
class AffiliatePayments
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $affiliateuserid
     */
    private $affiliateuserid;

    /**
     * @var \DateTime $affiliatetransdate
     */
    private $affiliatetransdate;

    /**
     * @var float $affiliatetransamt
     */
    private $affiliatetransamt;

    /**
     * @var string $affiliatetranstype
     */
    private $affiliatetranstype;

    /**
     * @var string $affiliatetransdescrption
     */
    private $affiliatetransdescrption;

    /**
     * @var string $readstatus
     */
    private $readstatus;

    /**
     * @var string $transactiondescrforaffiliate
     */
    private $transactiondescrforaffiliate;


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
     * Set affiliateuserid
     *
     * @param integer $affiliateuserid
     * @return AffiliatePayments
     */
    public function setAffiliateuserid($affiliateuserid)
    {
        $this->affiliateuserid = $affiliateuserid;
    
        return $this;
    }

    /**
     * Get affiliateuserid
     *
     * @return integer 
     */
    public function getAffiliateuserid()
    {
        return $this->affiliateuserid;
    }

    /**
     * Set affiliatetransdate
     *
     * @param \DateTime $affiliatetransdate
     * @return AffiliatePayments
     */
    public function setAffiliatetransdate($affiliatetransdate)
    {
        $this->affiliatetransdate = $affiliatetransdate;
    
        return $this;
    }

    /**
     * Get affiliatetransdate
     *
     * @return \DateTime 
     */
    public function getAffiliatetransdate()
    {
        return $this->affiliatetransdate;
    }

    /**
     * Set affiliatetransamt
     *
     * @param float $affiliatetransamt
     * @return AffiliatePayments
     */
    public function setAffiliatetransamt($affiliatetransamt)
    {
        $this->affiliatetransamt = $affiliatetransamt;
    
        return $this;
    }

    /**
     * Get affiliatetransamt
     *
     * @return float 
     */
    public function getAffiliatetransamt()
    {
        return $this->affiliatetransamt;
    }

    /**
     * Set affiliatetranstype
     *
     * @param string $affiliatetranstype
     * @return AffiliatePayments
     */
    public function setAffiliatetranstype($affiliatetranstype)
    {
        $this->affiliatetranstype = $affiliatetranstype;
    
        return $this;
    }

    /**
     * Get affiliatetranstype
     *
     * @return string 
     */
    public function getAffiliatetranstype()
    {
        return $this->affiliatetranstype;
    }

    /**
     * Set affiliatetransdescrption
     *
     * @param string $affiliatetransdescrption
     * @return AffiliatePayments
     */
    public function setAffiliatetransdescrption($affiliatetransdescrption)
    {
        $this->affiliatetransdescrption = $affiliatetransdescrption;
    
        return $this;
    }

    /**
     * Get affiliatetransdescrption
     *
     * @return string 
     */
    public function getAffiliatetransdescrption()
    {
        return $this->affiliatetransdescrption;
    }

    /**
     * Set readstatus
     *
     * @param string $readstatus
     * @return AffiliatePayments
     */
    public function setReadstatus($readstatus)
    {
        $this->readstatus = $readstatus;
    
        return $this;
    }

    /**
     * Get readstatus
     *
     * @return string 
     */
    public function getReadstatus()
    {
        return $this->readstatus;
    }

    /**
     * Set transactiondescrforaffiliate
     *
     * @param string $transactiondescrforaffiliate
     * @return AffiliatePayments
     */
    public function setTransactiondescrforaffiliate($transactiondescrforaffiliate)
    {
        $this->transactiondescrforaffiliate = $transactiondescrforaffiliate;
    
        return $this;
    }

    /**
     * Get transactiondescrforaffiliate
     *
     * @return string 
     */
    public function getTransactiondescrforaffiliate()
    {
        return $this->transactiondescrforaffiliate;
    }
}