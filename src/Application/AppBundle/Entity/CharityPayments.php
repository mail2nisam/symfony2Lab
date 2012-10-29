<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CharityPayments
 */
class CharityPayments
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $charityid
     */
    private $charityid;

    /**
     * @var integer $adminuserid
     */
    private $adminuserid;

    /**
     * @var string $charitytransdescription
     */
    private $charitytransdescription;

    /**
     * @var \DateTime $charitytransdate
     */
    private $charitytransdate;

    /**
     * @var float $transactionamount
     */
    private $transactionamount;

    /**
     * @var string $transactiontype
     */
    private $transactiontype;

    /**
     * @var integer $orderid
     */
    private $orderid;

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
     * Set charityid
     *
     * @param integer $charityid
     * @return CharityPayments
     */
    public function setCharityid($charityid)
    {
        $this->charityid = $charityid;
    
        return $this;
    }

    /**
     * Get charityid
     *
     * @return integer 
     */
    public function getCharityid()
    {
        return $this->charityid;
    }

    /**
     * Set adminuserid
     *
     * @param integer $adminuserid
     * @return CharityPayments
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
     * Set charitytransdescription
     *
     * @param string $charitytransdescription
     * @return CharityPayments
     */
    public function setCharitytransdescription($charitytransdescription)
    {
        $this->charitytransdescription = $charitytransdescription;
    
        return $this;
    }

    /**
     * Get charitytransdescription
     *
     * @return string 
     */
    public function getCharitytransdescription()
    {
        return $this->charitytransdescription;
    }

    /**
     * Set charitytransdate
     *
     * @param \DateTime $charitytransdate
     * @return CharityPayments
     */
    public function setCharitytransdate($charitytransdate)
    {
        $this->charitytransdate = $charitytransdate;
    
        return $this;
    }

    /**
     * Get charitytransdate
     *
     * @return \DateTime 
     */
    public function getCharitytransdate()
    {
        return $this->charitytransdate;
    }

    /**
     * Set transactionamount
     *
     * @param float $transactionamount
     * @return CharityPayments
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
     * Set transactiontype
     *
     * @param string $transactiontype
     * @return CharityPayments
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
     * @return CharityPayments
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
     * Set paidamount
     *
     * @param float $paidamount
     * @return CharityPayments
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