<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessTransactions
 */
class BusinessTransactions
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $transactiontype
     */
    private $transactiontype;

    /**
     * @var string $transactiongroup
     */
    private $transactiongroup;

    /**
     * @var integer $businessid
     */
    private $businessid;

    /**
     * @var string $transactiondescription
     */
    private $transactiondescription;

    /**
     * @var float $transactionsubtotalamount
     */
    private $transactionsubtotalamount;

    /**
     * @var float $transactioncommissionamount
     */
    private $transactioncommissionamount;

    /**
     * @var float $transactionpaymentgatewaycharge
     */
    private $transactionpaymentgatewaycharge;

    /**
     * @var float $transactionotherservicecharge
     */
    private $transactionotherservicecharge;

    /**
     * @var float $transactiongrandtotalamount
     */
    private $transactiongrandtotalamount;

    /**
     * @var \DateTime $transactiondate
     */
    private $transactiondate;

    /**
     * @var string $transactiondescrforbusiness
     */
    private $transactiondescrforbusiness;

    /**
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var float $transactiontotalamount
     */
    private $transactiontotalamount;

    /**
     * @var string $transactionviewed
     */
    private $transactionviewed;


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
     * Set transactiontype
     *
     * @param string $transactiontype
     * @return BusinessTransactions
     */
    public function setTransactiontype($transactiontype)
    {
        $this->transactiontype = $transactiontype;
    
        return $this;
    }

    /**
     * Get transactiontype
     *
     * @return string 
     */
    public function getTransactiontype()
    {
        return $this->transactiontype;
    }

    /**
     * Set transactiongroup
     *
     * @param string $transactiongroup
     * @return BusinessTransactions
     */
    public function setTransactiongroup($transactiongroup)
    {
        $this->transactiongroup = $transactiongroup;
    
        return $this;
    }

    /**
     * Get transactiongroup
     *
     * @return string 
     */
    public function getTransactiongroup()
    {
        return $this->transactiongroup;
    }

    /**
     * Set businessid
     *
     * @param integer $businessid
     * @return BusinessTransactions
     */
    public function setBusinessid($businessid)
    {
        $this->businessid = $businessid;
    
        return $this;
    }

    /**
     * Get businessid
     *
     * @return integer 
     */
    public function getBusinessid()
    {
        return $this->businessid;
    }

    /**
     * Set transactiondescription
     *
     * @param string $transactiondescription
     * @return BusinessTransactions
     */
    public function setTransactiondescription($transactiondescription)
    {
        $this->transactiondescription = $transactiondescription;
    
        return $this;
    }

    /**
     * Get transactiondescription
     *
     * @return string 
     */
    public function getTransactiondescription()
    {
        return $this->transactiondescription;
    }

    /**
     * Set transactionsubtotalamount
     *
     * @param float $transactionsubtotalamount
     * @return BusinessTransactions
     */
    public function setTransactionsubtotalamount($transactionsubtotalamount)
    {
        $this->transactionsubtotalamount = $transactionsubtotalamount;
    
        return $this;
    }

    /**
     * Get transactionsubtotalamount
     *
     * @return float 
     */
    public function getTransactionsubtotalamount()
    {
        return $this->transactionsubtotalamount;
    }

    /**
     * Set transactioncommissionamount
     *
     * @param float $transactioncommissionamount
     * @return BusinessTransactions
     */
    public function setTransactioncommissionamount($transactioncommissionamount)
    {
        $this->transactioncommissionamount = $transactioncommissionamount;
    
        return $this;
    }

    /**
     * Get transactioncommissionamount
     *
     * @return float 
     */
    public function getTransactioncommissionamount()
    {
        return $this->transactioncommissionamount;
    }

    /**
     * Set transactionpaymentgatewaycharge
     *
     * @param float $transactionpaymentgatewaycharge
     * @return BusinessTransactions
     */
    public function setTransactionpaymentgatewaycharge($transactionpaymentgatewaycharge)
    {
        $this->transactionpaymentgatewaycharge = $transactionpaymentgatewaycharge;
    
        return $this;
    }

    /**
     * Get transactionpaymentgatewaycharge
     *
     * @return float 
     */
    public function getTransactionpaymentgatewaycharge()
    {
        return $this->transactionpaymentgatewaycharge;
    }

    /**
     * Set transactionotherservicecharge
     *
     * @param float $transactionotherservicecharge
     * @return BusinessTransactions
     */
    public function setTransactionotherservicecharge($transactionotherservicecharge)
    {
        $this->transactionotherservicecharge = $transactionotherservicecharge;
    
        return $this;
    }

    /**
     * Get transactionotherservicecharge
     *
     * @return float 
     */
    public function getTransactionotherservicecharge()
    {
        return $this->transactionotherservicecharge;
    }

    /**
     * Set transactiongrandtotalamount
     *
     * @param float $transactiongrandtotalamount
     * @return BusinessTransactions
     */
    public function setTransactiongrandtotalamount($transactiongrandtotalamount)
    {
        $this->transactiongrandtotalamount = $transactiongrandtotalamount;
    
        return $this;
    }

    /**
     * Get transactiongrandtotalamount
     *
     * @return float 
     */
    public function getTransactiongrandtotalamount()
    {
        return $this->transactiongrandtotalamount;
    }

    /**
     * Set transactiondate
     *
     * @param \DateTime $transactiondate
     * @return BusinessTransactions
     */
    public function setTransactiondate($transactiondate)
    {
        $this->transactiondate = $transactiondate;
    
        return $this;
    }

    /**
     * Get transactiondate
     *
     * @return \DateTime 
     */
    public function getTransactiondate()
    {
        return $this->transactiondate;
    }

    /**
     * Set transactiondescrforbusiness
     *
     * @param string $transactiondescrforbusiness
     * @return BusinessTransactions
     */
    public function setTransactiondescrforbusiness($transactiondescrforbusiness)
    {
        $this->transactiondescrforbusiness = $transactiondescrforbusiness;
    
        return $this;
    }

    /**
     * Get transactiondescrforbusiness
     *
     * @return string 
     */
    public function getTransactiondescrforbusiness()
    {
        return $this->transactiondescrforbusiness;
    }

    /**
     * Set dealid
     *
     * @param integer $dealid
     * @return BusinessTransactions
     */
    public function setDealid($dealid)
    {
        $this->dealid = $dealid;
    
        return $this;
    }

    /**
     * Get dealid
     *
     * @return integer 
     */
    public function getDealid()
    {
        return $this->dealid;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     * @return BusinessTransactions
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    
        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set transactiontotalamount
     *
     * @param float $transactiontotalamount
     * @return BusinessTransactions
     */
    public function setTransactiontotalamount($transactiontotalamount)
    {
        $this->transactiontotalamount = $transactiontotalamount;
    
        return $this;
    }

    /**
     * Get transactiontotalamount
     *
     * @return float 
     */
    public function getTransactiontotalamount()
    {
        return $this->transactiontotalamount;
    }

    /**
     * Set transactionviewed
     *
     * @param string $transactionviewed
     * @return BusinessTransactions
     */
    public function setTransactionviewed($transactionviewed)
    {
        $this->transactionviewed = $transactionviewed;
    
        return $this;
    }

    /**
     * Get transactionviewed
     *
     * @return string 
     */
    public function getTransactionviewed()
    {
        return $this->transactionviewed;
    }
}