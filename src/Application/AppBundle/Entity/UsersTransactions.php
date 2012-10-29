<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UsersTransactions
 */
class UsersTransactions
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var string $transactiontype
     */
    private $transactiontype;

    /**
     * @var \DateTime $transactiondate
     */
    private $transactiondate;

    /**
     * @var float $transactionamount
     */
    private $transactionamount;

    /**
     * @var string $transactiondescription
     */
    private $transactiondescription;

    /**
     * @var string $transactionstatus
     */
    private $transactionstatus;


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
     * Set userid
     *
     * @param integer $userid
     * @return UsersTransactions
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
     * Set transactiontype
     *
     * @param string $transactiontype
     * @return UsersTransactions
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
     * Set transactiondate
     *
     * @param \DateTime $transactiondate
     * @return UsersTransactions
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
     * Set transactionamount
     *
     * @param float $transactionamount
     * @return UsersTransactions
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
     * Set transactiondescription
     *
     * @param string $transactiondescription
     * @return UsersTransactions
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
     * Set transactionstatus
     *
     * @param string $transactionstatus
     * @return UsersTransactions
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
}