<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CampaignAds
 */
class CampaignAds
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $adsize
     */
    private $adsize;

    /**
     * @var integer $campaignid
     */
    private $campaignid;

    /**
     * @var string $template
     */
    private $template;

    /**
     * @var string $imagepath
     */
    private $imagepath;

    /**
     * @var string $imageattr
     */
    private $imageattr;


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
     * Set adsize
     *
     * @param string $adsize
     * @return CampaignAds
     */
    public function setAdsize($adsize)
    {
        $this->adsize = $adsize;
    
        return $this;
    }

    /**
     * Get adsize
     *
     * @return string 
     */
    public function getAdsize()
    {
        return $this->adsize;
    }

    /**
     * Set campaignid
     *
     * @param integer $campaignid
     * @return CampaignAds
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
     * Set template
     *
     * @param string $template
     * @return CampaignAds
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    
        return $this;
    }

    /**
     * Get template
     *
     * @return string 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set imagepath
     *
     * @param string $imagepath
     * @return CampaignAds
     */
    public function setImagepath($imagepath)
    {
        $this->imagepath = $imagepath;
    
        return $this;
    }

    /**
     * Get imagepath
     *
     * @return string 
     */
    public function getImagepath()
    {
        return $this->imagepath;
    }

    /**
     * Set imageattr
     *
     * @param string $imageattr
     * @return CampaignAds
     */
    public function setImageattr($imageattr)
    {
        $this->imageattr = $imageattr;
    
        return $this;
    }

    /**
     * Get imageattr
     *
     * @return string 
     */
    public function getImageattr()
    {
        return $this->imageattr;
    }
}