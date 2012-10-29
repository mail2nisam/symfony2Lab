<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliatePaymentDetails
 */
class AffiliatePaymentDetails
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $affiliatepaymenttransid
     */
    private $affiliatepaymenttransid;

    /**
     * @var integer $affiliatecommissionid
     */
    private $affiliatecommissionid;

    /**
     * @var float $affiliatepaidamount
     */
    private $affiliatepaidamount;


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
     * Set affiliatepaymenttransid
     *
     * @param integer $affiliatepaymenttransid
     * @return AffiliatePaymentDetails
     */
    public function setAffiliatepaymenttransid($affiliatepaymenttransid)
    {
        $this->affiliatepaymenttransid = $affiliatepaymenttransid;
    
        return $this;
    }

    /**
     * Get affiliatepaymenttransid
     *
     * @return integer 
     */
    public function getAffiliatepaymenttransid()
    {
        return $this->affiliatepaymenttransid;
    }

    /**
     * Set affiliatecommissionid
     *
     * @param integer $affiliatecommissionid
     * @return AffiliatePaymentDetails
     */
    public function setAffiliatecommissionid($affiliatecommissionid)
    {
        $this->affiliatecommissionid = $affiliatecommissionid;
    
        return $this;
    }

    /**
     * Get affiliatecommissionid
     *
     * @return integer 
     */
    public function getAffiliatecommissionid()
    {
        return $this->affiliatecommissionid;
    }

    /**
     * Set affiliatepaidamount
     *
     * @param float $affiliatepaidamount
     * @return AffiliatePaymentDetails
     */
    public function setAffiliatepaidamount($affiliatepaidamount)
    {
        $this->affiliatepaidamount = $affiliatepaidamount;
    
        return $this;
    }

    /**
     * Get affiliatepaidamount
     *
     * @return float 
     */
    public function getAffiliatepaidamount()
    {
        return $this->affiliatepaidamount;
    }
}