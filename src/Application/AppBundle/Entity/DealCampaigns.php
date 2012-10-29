<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealCampaigns
 */
class DealCampaigns
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var integer $cityid
     */
    private $cityid;

    /**
     * @var string $dealtypekey
     */
    private $dealtypekey;

    /**
     * @var \DateTime $insertdate
     */
    private $insertdate;

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
     * Set dealid
     *
     * @param integer $dealid
     * @return DealCampaigns
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
     * Set cityid
     *
     * @param integer $cityid
     * @return DealCampaigns
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;
    
        return $this;
    }

    /**
     * Get cityid
     *
     * @return integer 
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set dealtypekey
     *
     * @param string $dealtypekey
     * @return DealCampaigns
     */
    public function setDealtypekey($dealtypekey)
    {
        $this->dealtypekey = $dealtypekey;
    
        return $this;
    }

    /**
     * Get dealtypekey
     *
     * @return string 
     */
    public function getDealtypekey()
    {
        return $this->dealtypekey;
    }

    /**
     * Set insertdate
     *
     * @param \DateTime $insertdate
     * @return DealCampaigns
     */
    public function setInsertdate($insertdate)
    {
        $this->insertdate = $insertdate;
    
        return $this;
    }

    /**
     * Get insertdate
     *
     * @return \DateTime 
     */
    public function getInsertdate()
    {
        return $this->insertdate;
    }

    /**
     * Set campaigndate
     *
     * @param \DateTime $campaigndate
     * @return DealCampaigns
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