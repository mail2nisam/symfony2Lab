<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CampaignRecipients
 */
class CampaignRecipients
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
     * @var string $emailid
     */
    private $emailid;

    /**
     * @var \DateTime $actiondate
     */
    private $actiondate;

    /**
     * @var string $type
     */
    private $type;


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
     * @return CampaignRecipients
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
     * Set emailid
     *
     * @param string $emailid
     * @return CampaignRecipients
     */
    public function setEmailid($emailid)
    {
        $this->emailid = $emailid;
    
        return $this;
    }

    /**
     * Get emailid
     *
     * @return string 
     */
    public function getEmailid()
    {
        return $this->emailid;
    }

    /**
     * Set actiondate
     *
     * @param \DateTime $actiondate
     * @return CampaignRecipients
     */
    public function setActiondate($actiondate)
    {
        $this->actiondate = $actiondate;
    
        return $this;
    }

    /**
     * Get actiondate
     *
     * @return \DateTime 
     */
    public function getActiondate()
    {
        return $this->actiondate;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return CampaignRecipients
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
}