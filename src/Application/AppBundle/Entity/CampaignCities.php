<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CampaignCities
 */
class CampaignCities
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $campaignid
     */
    private $campaignid;

    /**
     * @var integer $cityid
     */
    private $cityid;


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
     * Set campaignid
     *
     * @param integer $campaignid
     * @return CampaignCities
     */
    public function setCampaignid($campaignid)
    {
        $this->campaignid = $campaignid;
    
        return $this;
    }

    /**
     * Get campaignid
     *
     * @return integer 
     */
    public function getCampaignid()
    {
        return $this->campaignid;
    }

    /**
     * Set cityid
     *
     * @param integer $cityid
     * @return CampaignCities
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
}