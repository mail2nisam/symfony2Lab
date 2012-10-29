<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CalendarCampaign
 */
class CalendarCampaign
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
     * @var integer $languageid
     */
    private $languageid;

    /**
     * @var integer $bannerdesignid
     */
    private $bannerdesignid;

    /**
     * @var string $bannername
     */
    private $bannername;

    /**
     * @var \DateTime $campaignstartdate
     */
    private $campaignstartdate;

    /**
     * @var \DateTime $campaignenddate
     */
    private $campaignenddate;

    /**
     * @var string $campaignstatus
     */
    private $campaignstatus;

    /**
     * @var \DateTime $campaignmodifieddate
     */
    private $campaignmodifieddate;

    /**
     * @var \DateTime $campaigncreateddate
     */
    private $campaigncreateddate;

    /**
     * @var string $destinationurl
     */
    private $destinationurl;


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
     * @return CalendarCampaign
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
     * Set languageid
     *
     * @param integer $languageid
     * @return CalendarCampaign
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;
    
        return $this;
    }

    /**
     * Get languageid
     *
     * @return integer 
     */
    public function getLanguageid()
    {
        return $this->languageid;
    }

    /**
     * Set bannerdesignid
     *
     * @param integer $bannerdesignid
     * @return CalendarCampaign
     */
    public function setBannerdesignid($bannerdesignid)
    {
        $this->bannerdesignid = $bannerdesignid;
    
        return $this;
    }

    /**
     * Get bannerdesignid
     *
     * @return integer 
     */
    public function getBannerdesignid()
    {
        return $this->bannerdesignid;
    }

    /**
     * Set bannername
     *
     * @param string $bannername
     * @return CalendarCampaign
     */
    public function setBannername($bannername)
    {
        $this->bannername = $bannername;
    
        return $this;
    }

    /**
     * Get bannername
     *
     * @return string 
     */
    public function getBannername()
    {
        return $this->bannername;
    }

    /**
     * Set campaignstartdate
     *
     * @param \DateTime $campaignstartdate
     * @return CalendarCampaign
     */
    public function setCampaignstartdate($campaignstartdate)
    {
        $this->campaignstartdate = $campaignstartdate;
    
        return $this;
    }

    /**
     * Get campaignstartdate
     *
     * @return \DateTime 
     */
    public function getCampaignstartdate()
    {
        return $this->campaignstartdate;
    }

    /**
     * Set campaignenddate
     *
     * @param \DateTime $campaignenddate
     * @return CalendarCampaign
     */
    public function setCampaignenddate($campaignenddate)
    {
        $this->campaignenddate = $campaignenddate;
    
        return $this;
    }

    /**
     * Get campaignenddate
     *
     * @return \DateTime 
     */
    public function getCampaignenddate()
    {
        return $this->campaignenddate;
    }

    /**
     * Set campaignstatus
     *
     * @param string $campaignstatus
     * @return CalendarCampaign
     */
    public function setCampaignstatus($campaignstatus)
    {
        $this->campaignstatus = $campaignstatus;
    
        return $this;
    }

    /**
     * Get campaignstatus
     *
     * @return string 
     */
    public function getCampaignstatus()
    {
        return $this->campaignstatus;
    }

    /**
     * Set campaignmodifieddate
     *
     * @param \DateTime $campaignmodifieddate
     * @return CalendarCampaign
     */
    public function setCampaignmodifieddate($campaignmodifieddate)
    {
        $this->campaignmodifieddate = $campaignmodifieddate;
    
        return $this;
    }

    /**
     * Get campaignmodifieddate
     *
     * @return \DateTime 
     */
    public function getCampaignmodifieddate()
    {
        return $this->campaignmodifieddate;
    }

    /**
     * Set campaigncreateddate
     *
     * @param \DateTime $campaigncreateddate
     * @return CalendarCampaign
     */
    public function setCampaigncreateddate($campaigncreateddate)
    {
        $this->campaigncreateddate = $campaigncreateddate;
    
        return $this;
    }

    /**
     * Get campaigncreateddate
     *
     * @return \DateTime 
     */
    public function getCampaigncreateddate()
    {
        return $this->campaigncreateddate;
    }

    /**
     * Set destinationurl
     *
     * @param string $destinationurl
     * @return CalendarCampaign
     */
    public function setDestinationurl($destinationurl)
    {
        $this->destinationurl = $destinationurl;
    
        return $this;
    }

    /**
     * Get destinationurl
     *
     * @return string 
     */
    public function getDestinationurl()
    {
        return $this->destinationurl;
    }
}