<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateReferralPurchases
 */
class AffiliateReferralPurchases
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
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var float $commissionamount
     */
    private $commissionamount;

    /**
     * @var float $commissionpercent
     */
    private $commissionpercent;


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
     * @return AffiliateReferralPurchases
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
     * Set orderid
     *
     * @param integer $orderid
     * @return AffiliateReferralPurchases
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
     * Set commissionamount
     *
     * @param float $commissionamount
     * @return AffiliateReferralPurchases
     */
    public function setCommissionamount($commissionamount)
    {
        $this->commissionamount = $commissionamount;
    
        return $this;
    }

    /**
     * Get commissionamount
     *
     * @return float 
     */
    public function getCommissionamount()
    {
        return $this->commissionamount;
    }

    /**
     * Set commissionpercent
     *
     * @param float $commissionpercent
     * @return AffiliateReferralPurchases
     */
    public function setCommissionpercent($commissionpercent)
    {
        $this->commissionpercent = $commissionpercent;
    
        return $this;
    }

    /**
     * Get commissionpercent
     *
     * @return float 
     */
    public function getCommissionpercent()
    {
        return $this->commissionpercent;
    }
}