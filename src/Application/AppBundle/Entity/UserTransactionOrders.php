<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UserTransactionOrders
 */
class UserTransactionOrders
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var integer $usertransactionid
     */
    private $usertransactionid;


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
     * Set orderid
     *
     * @param integer $orderid
     * @return UserTransactionOrders
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
     * Set usertransactionid
     *
     * @param integer $usertransactionid
     * @return UserTransactionOrders
     */
    public function setUsertransactionid($usertransactionid)
    {
        $this->usertransactionid = $usertransactionid;
    
        return $this;
    }

    /**
     * Get usertransactionid
     *
     * @return integer 
     */
    public function getUsertransactionid()
    {
        return $this->usertransactionid;
    }
}