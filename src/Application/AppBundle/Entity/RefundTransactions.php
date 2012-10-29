<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\RefundTransactions
 */
class RefundTransactions
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
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var \DateTime $completeddate
     */
    private $completeddate;

    /**
     * @var string $refundtype
     */
    private $refundtype;

    /**
     * @var string $refundgateway
     */
    private $refundgateway;

    /**
     * @var string $refundresponse
     */
    private $refundresponse;

    /**
     * @var float $refundamount
     */
    private $refundamount;

    /**
     * @var integer $refundexecutionid
     */
    private $refundexecutionid;


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
     * @return RefundTransactions
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
     * @return RefundTransactions
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
     * Set dealid
     *
     * @param integer $dealid
     * @return RefundTransactions
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
     * Set userid
     *
     * @param integer $userid
     * @return RefundTransactions
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
     * @return RefundTransactions
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
     * Set refundtype
     *
     * @param string $refundtype
     * @return RefundTransactions
     */
    public function setRefundtype($refundtype)
    {
        $this->refundtype = $refundtype;
    
        return $this;
    }

    /**
     * Get refundtype
     *
     * @return string 
     */
    public function getRefundtype()
    {
        return $this->refundtype;
    }

    /**
     * Set refundgateway
     *
     * @param string $refundgateway
     * @return RefundTransactions
     */
    public function setRefundgateway($refundgateway)
    {
        $this->refundgateway = $refundgateway;
    
        return $this;
    }

    /**
     * Get refundgateway
     *
     * @return string 
     */
    public function getRefundgateway()
    {
        return $this->refundgateway;
    }

    /**
     * Set refundresponse
     *
     * @param string $refundresponse
     * @return RefundTransactions
     */
    public function setRefundresponse($refundresponse)
    {
        $this->refundresponse = $refundresponse;
    
        return $this;
    }

    /**
     * Get refundresponse
     *
     * @return string 
     */
    public function getRefundresponse()
    {
        return $this->refundresponse;
    }

    /**
     * Set refundamount
     *
     * @param float $refundamount
     * @return RefundTransactions
     */
    public function setRefundamount($refundamount)
    {
        $this->refundamount = $refundamount;
    
        return $this;
    }

    /**
     * Get refundamount
     *
     * @return float 
     */
    public function getRefundamount()
    {
        return $this->refundamount;
    }

    /**
     * Set refundexecutionid
     *
     * @param integer $refundexecutionid
     * @return RefundTransactions
     */
    public function setRefundexecutionid($refundexecutionid)
    {
        $this->refundexecutionid = $refundexecutionid;
    
        return $this;
    }

    /**
     * Get refundexecutionid
     *
     * @return integer 
     */
    public function getRefundexecutionid()
    {
        return $this->refundexecutionid;
    }
}