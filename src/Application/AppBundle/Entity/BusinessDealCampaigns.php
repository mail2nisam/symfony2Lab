<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessDealCampaigns
 */
class BusinessDealCampaigns
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
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var \DateTime $campaigndate
     */
    private $campaigndate;


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
     * @return BusinessDealCampaigns
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
     * Set dealid
     *
     * @param integer $dealid
     * @return BusinessDealCampaigns
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
     * Set campaigndate
     *
     * @param \DateTime $campaigndate
     * @return BusinessDealCampaigns
     */
    public function setCampaigndate($campaigndate)
    {
        $this->campaigndate = $campaigndate;
    
        return $this;
    }

    /**
     * Get campaigndate
     *
     * @return \DateTime 
     */
    public function getCampaigndate()
    {
        return $this->campaigndate;
    }
}