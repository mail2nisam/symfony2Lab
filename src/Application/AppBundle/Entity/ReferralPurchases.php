<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\ReferralPurchases
 */
class ReferralPurchases
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $referrerid
     */
    private $referrerid;

    /**
     * @var \DateTime $purchasedate
     */
    private $purchasedate;

    /**
     * @var integer $orderid
     */
    private $orderid;


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
     * Set referrerid
     *
     * @param integer $referrerid
     * @return ReferralPurchases
     */
    public function setReferrerid($referrerid)
    {
        $this->referrerid = $referrerid;
    
        return $this;
    }

    /**
     * Get referrerid
     *
     * @return integer 
     */
    public function getReferrerid()
    {
        return $this->referrerid;
    }

    /**
     * Set purchasedate
     *
     * @param \DateTime $purchasedate
     * @return ReferralPurchases
     */
    public function setPurchasedate($purchasedate)
    {
        $this->purchasedate = $purchasedate;
    
        return $this;
    }

    /**
     * Get purchasedate
     *
     * @return \DateTime 
     */
    public function getPurchasedate()
    {
        return $this->purchasedate;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     * @return ReferralPurchases
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
}