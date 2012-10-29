<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PaymentTransactions
 */
class PaymentTransactions
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $transactionid
     */
    private $transactionid;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var \DateTime $completeddate
     */
    private $completeddate;

    /**
     * @var string $extra
     */
    private $extra;

    /**
     * @var string $paymenttype
     */
    private $paymenttype;

    /**
     * @var string $paymentgateway
     */
    private $paymentgateway;

    /**
     * @var string $paymentresponse
     */
    private $paymentresponse;

    /**
     * @var float $ordersubtotal
     */
    private $ordersubtotal;

    /**
     * @var float $ordertotal
     */
    private $ordertotal;

    /**
     * @var float $taxamount
     */
    private $taxamount;


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
     * Set transactionid
     *
     * @param string $transactionid
     * @return PaymentTransactions
     */
    public function setTransactionid($transactionid)
    {
        $this->transactionid = $transactionid;
    
        return $this;
    }

    /**
     * Get transactionid
     *
     * @return string 
     */
    public function getTransactionid()
    {
        return $this->transactionid;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     * @return PaymentTransactions
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
     * Set userid
     *
     * @param integer $userid
     * @return PaymentTransactions
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set completeddate
     *
     * @param \DateTime $completeddate
     * @return PaymentTransactions
     */
    public function setCompleteddate($completeddate)
    {
        $this->completeddate = $completeddate;
    
        return $this;
    }

    /**
     * Get completeddate
     *
     * @return \DateTime 
     */
    public function getCompleteddate()
    {
        return $this->completeddate;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return PaymentTransactions
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;
    
        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set paymenttype
     *
     * @param string $paymenttype
     * @return PaymentTransactions
     */
    public function setPaymenttype($paymenttype)
    {
        $this->paymenttype = $paymenttype;
    
        return $this;
    }

    /**
     * Get paymenttype
     *
     * @return string 
     */
    public function getPaymenttype()
    {
        return $this->paymenttype;
    }

    /**
     * Set paymentgateway
     *
     * @param string $paymentgateway
     * @return PaymentTransactions
     */
    public function setPaymentgateway($paymentgateway)
    {
        $this->paymentgateway = $paymentgateway;
    
        return $this;
    }

    /**
     * Get paymentgateway
     *
     * @return string 
     */
    public function getPaymentgateway()
    {
        return $this->paymentgateway;
    }

    /**
     * Set paymentresponse
     *
     * @param string $paymentresponse
     * @return PaymentTransactions
     */
    public function setPaymentresponse($paymentresponse)
    {
        $this->paymentresponse = $paymentresponse;
    
        return $this;
    }

    /**
     * Get paymentresponse
     *
     * @return string 
     */
    public function getPaymentresponse()
    {
        return $this->paymentresponse;
    }

    /**
     * Set ordersubtotal
     *
     * @param float $ordersubtotal
     * @return PaymentTransactions
     */
    public function setOrdersubtotal($ordersubtotal)
    {
        $this->ordersubtotal = $ordersubtotal;
    
        return $this;
    }

    /**
     * Get ordersubtotal
     *
     * @return float 
     */
    public function getOrdersubtotal()
    {
        return $this->ordersubtotal;
    }

    /**
     * Set ordertotal
     *
     * @param float $ordertotal
     * @return PaymentTransactions
     */
    public function setOrdertotal($ordertotal)
    {
        $this->ordertotal = $ordertotal;
    
        return $this;
    }

    /**
     * Get ordertotal
     *
     * @return float 
     */
    public function getOrdertotal()
    {
        return $this->ordertotal;
    }

    /**
     * Set taxamount
     *
     * @param float $taxamount
     * @return PaymentTransactions
     */
    public function setTaxamount($taxamount)
    {
        $this->taxamount = $taxamount;
    
        return $this;
    }

    /**
     * Get taxamount
     *
     * @return float 
     */
    public function getTaxamount()
    {
        return $this->taxamount;
    }
}