<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessPayments
 */
class BusinessPayments
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $businessid
     */
    private $businessid;

    /**
     * @var integer $adminuserid
     */
    private $adminuserid;

    /**
     * @var string $businesstransdescription
     */
    private $businesstransdescription;

    /**
     * @var \DateTime $businesstransdate
     */
    private $businesstransdate;

    /**
     * @var float $totalamount
     */
    private $totalamount;

    /**
     * @var float $commission
     */
    private $commission;

    /**
     * @var float $servicefee
     */
    private $servicefee;

    /**
     * @var float $cccharges
     */
    private $cccharges;

    /**
     * @var float $otherdeduction
     */
    private $otherdeduction;

    /**
     * @var float $transactionamount
     */
    private $transactionamount;

    /**
     * @var string $transactionstatus
     */
    private $transactionstatus;

    /**
     * @var string $transactiontype
     */
    private $transactiontype;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var float $paymenttotal
     */
    private $paymenttotal;

    /**
     * @var float $paidcommission
     */
    private $paidcommission;

    /**
     * @var float $paidservicefee
     */
    private $paidservicefee;

    /**
     * @var float $paidcccharges
     */
    private $paidcccharges;

    /**
     * @var float $paidotherdeduction
     */
    private $paidotherdeduction;

    /**
     * @var float $paidamount
     */
    private $paidamount;


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
     * Set businessid
     *
     * @param integer $businessid
     * @return BusinessPayments
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
     * Set adminuserid
     *
     * @param integer $adminuserid
     * @return BusinessPayments
     */
    public function setAdminuserid($adminuserid)
    {
        $this->adminuserid = $adminuserid;
    
        return $this;
    }

    /**
     * Get adminuserid
     *
     * @return integer 
     */
    public function getAdminuserid()
    {
        return $this->adminuserid;
    }

    /**
     * Set businesstransdescription
     *
     * @param string $businesstransdescription
     * @return BusinessPayments
     */
    public function setBusinesstransdescription($businesstransdescription)
    {
        $this->businesstransdescription = $businesstransdescription;
    
        return $this;
    }

    /**
     * Get businesstransdescription
     *
     * @return string 
     */
    public function getBusinesstransdescription()
    {
        return $this->businesstransdescription;
    }

    /**
     * Set businesstransdate
     *
     * @param \DateTime $businesstransdate
     * @return BusinessPayments
     */
    public function setBusinesstransdate($businesstransdate)
    {
        $this->businesstransdate = $businesstransdate;
    
        return $this;
    }

    /**
     * Get businesstransdate
     *
     * @return \DateTime 
     */
    public function getBusinesstransdate()
    {
        return $this->businesstransdate;
    }

    /**
     * Set totalamount
     *
     * @param float $totalamount
     * @return BusinessPayments
     */
    public function setTotalamount($totalamount)
    {
        $this->totalamount = $totalamount;
    
        return $this;
    }

    /**
     * Get totalamount
     *
     * @return float 
     */
    public function getTotalamount()
    {
        return $this->totalamount;
    }

    /**
     * Set commission
     *
     * @param float $commission
     * @return BusinessPayments
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    
        return $this;
    }

    /**
     * Get commission
     *
     * @return float 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set servicefee
     *
     * @param float $servicefee
     * @return BusinessPayments
     */
    public function setServicefee($servicefee)
    {
        $this->servicefee = $servicefee;
    
        return $this;
    }

    /**
     * Get servicefee
     *
     * @return float 
     */
    public function getServicefee()
    {
        return $this->servicefee;
    }

    /**
     * Set cccharges
     *
     * @param float $cccharges
     * @return BusinessPayments
     */
    public function setCccharges($cccharges)
    {
        $this->cccharges = $cccharges;
    
        return $this;
    }

    /**
     * Get cccharges
     *
     * @return float 
     */
    public function getCccharges()
    {
        return $this->cccharges;
    }

    /**
     * Set otherdeduction
     *
     * @param float $otherdeduction
     * @return BusinessPayments
     */
    public function setOtherdeduction($otherdeduction)
    {
        $this->otherdeduction = $otherdeduction;
    
        return $this;
    }

    /**
     * Get otherdeduction
     *
     * @return float 
     */
    public function getOtherdeduction()
    {
        return $this->otherdeduction;
    }

    /**
     * Set transactionamount
     *
     * @param float $transactionamount
     * @return BusinessPayments
     */
    public function setTransactionamount($transactionamount)
    {
        $this->transactionamount = $transactionamount;
    
        return $this;
    }

    /**
     * Get transactionamount
     *
     * @return float 
     */
    public function getTransactionamount()
    {
        return $this->transactionamount;
    }

    /**
     * Set transactionstatus
     *
     * @param string $transactionstatus
     * @return BusinessPayments
     */
    public function setTransactionstatus($transactionstatus)
    {
        $this->transactionstatus = $transactionstatus;
    
        return $this;
    }

    /**
     * Get transactionstatus
     *
     * @return string 
     */
    public function getTransactionstatus()
    {
        return $this->transactionstatus;
    }

    /**
     * Set transactiontype
     *
     * @param string $transactiontype
     * @return BusinessPayments
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
     * Set orderid
     *
     * @param integer $orderid
     * @return BusinessPayments
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
     * Set paymenttotal
     *
     * @param float $paymenttotal
     * @return BusinessPayments
     */
    public function setPaymenttotal($paymenttotal)
    {
        $this->paymenttotal = $paymenttotal;
    
        return $this;
    }

    /**
     * Get paymenttotal
     *
     * @return float 
     */
    public function getPaymenttotal()
    {
        return $this->paymenttotal;
    }

    /**
     * Set paidcommission
     *
     * @param float $paidcommission
     * @return BusinessPayments
     */
    public function setPaidcommission($paidcommission)
    {
        $this->paidcommission = $paidcommission;
    
        return $this;
    }

    /**
     * Get paidcommission
     *
     * @return float 
     */
    public function getPaidcommission()
    {
        return $this->paidcommission;
    }

    /**
     * Set paidservicefee
     *
     * @param float $paidservicefee
     * @return BusinessPayments
     */
    public function setPaidservicefee($paidservicefee)
    {
        $this->paidservicefee = $paidservicefee;
    
        return $this;
    }

    /**
     * Get paidservicefee
     *
     * @return float 
     */
    public function getPaidservicefee()
    {
        return $this->paidservicefee;
    }

    /**
     * Set paidcccharges
     *
     * @param float $paidcccharges
     * @return BusinessPayments
     */
    public function setPaidcccharges($paidcccharges)
    {
        $this->paidcccharges = $paidcccharges;
    
        return $this;
    }

    /**
     * Get paidcccharges
     *
     * @return float 
     */
    public function getPaidcccharges()
    {
        return $this->paidcccharges;
    }

    /**
     * Set paidotherdeduction
     *
     * @param float $paidotherdeduction
     * @return BusinessPayments
     */
    public function setPaidotherdeduction($paidotherdeduction)
    {
        $this->paidotherdeduction = $paidotherdeduction;
    
        return $this;
    }

    /**
     * Get paidotherdeduction
     *
     * @return float 
     */
    public function getPaidotherdeduction()
    {
        return $this->paidotherdeduction;
    }

    /**
     * Set paidamount
     *
     * @param float $paidamount
     * @return BusinessPayments
     */
    public function setPaidamount($paidamount)
    {
        $this->paidamount = $paidamount;
    
        return $this;
    }

    /**
     * Get paidamount
     *
     * @return float 
     */
    public function getPaidamount()
    {
        return $this->paidamount;
    }
}