<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffBulkImport
 */
class AffBulkImport
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
     * @var float $commission
     */
    private $commission;

    /**
     * @var \DateTime $addeddate
     */
    private $addeddate;

    /**
     * @var string $campaignlistid
     */
    private $campaignlistid;

    /**
     * @var string $campaignlistname
     */
    private $campaignlistname;

    /**
     * @var string $mailsendstatus
     */
    private $mailsendstatus;

    /**
     * @var string $cities
     */
    private $cities;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var \DateTime $mailscheduledate
     */
    private $mailscheduledate;

    /**
     * @var string $importlog
     */
    private $importlog;


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
     * @return AffBulkImport
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
     * Set commission
     *
     * @param float $commission
     * @return AffBulkImport
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    
        return $this;
    }

    /**
     * Get commission
     *
     * @return float 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set addeddate
     *
     * @param \DateTime $addeddate
     * @return AffBulkImport
     */
    public function setAddeddate($addeddate)
    {
        $this->addeddate = $addeddate;
    
        return $this;
    }

    /**
     * Get addeddate
     *
     * @return \DateTime 
     */
    public function getAddeddate()
    {
        return $this->addeddate;
    }

    /**
     * Set campaignlistid
     *
     * @param string $campaignlistid
     * @return AffBulkImport
     */
    public function setCampaignlistid($campaignlistid)
    {
        $this->campaignlistid = $campaignlistid;
    
        return $this;
    }

    /**
     * Get campaignlistid
     *
     * @return string 
     */
    public function getCampaignlistid()
    {
        return $this->campaignlistid;
    }

    /**
     * Set campaignlistname
     *
     * @param string $campaignlistname
     * @return AffBulkImport
     */
    public function setCampaignlistname($campaignlistname)
    {
        $this->campaignlistname = $campaignlistname;
    
        return $this;
    }

    /**
     * Get campaignlistname
     *
     * @return string 
     */
    public function getCampaignlistname()
    {
        return $this->campaignlistname;
    }

    /**
     * Set mailsendstatus
     *
     * @param string $mailsendstatus
     * @return AffBulkImport
     */
    public function setMailsendstatus($mailsendstatus)
    {
        $this->mailsendstatus = $mailsendstatus;
    
        return $this;
    }

    /**
     * Get mailsendstatus
     *
     * @return string 
     */
    public function getMailsendstatus()
    {
        return $this->mailsendstatus;
    }

    /**
     * Set cities
     *
     * @param string $cities
     * @return AffBulkImport
     */
    public function setCities($cities)
    {
        $this->cities = $cities;
    
        return $this;
    }

    /**
     * Get cities
     *
     * @return string 
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return AffBulkImport
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set mailscheduledate
     *
     * @param \DateTime $mailscheduledate
     * @return AffBulkImport
     */
    public function setMailscheduledate($mailscheduledate)
    {
        $this->mailscheduledate = $mailscheduledate;
    
        return $this;
    }

    /**
     * Get mailscheduledate
     *
     * @return \DateTime 
     */
    public function getMailscheduledate()
    {
        return $this->mailscheduledate;
    }

    /**
     * Set importlog
     *
     * @param string $importlog
     * @return AffBulkImport
     */
    public function setImportlog($importlog)
    {
        $this->importlog = $importlog;
    
        return $this;
    }

    /**
     * Get importlog
     *
     * @return string 
     */
    public function getImportlog()
    {
        return $this->importlog;
    }
}