<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Campaigns
 */
class Campaigns
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $thirdpartycampaignid
     */
    private $thirdpartycampaignid;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var \DateTime $createddate
     */
    private $createddate;

    /**
     * @var \DateTime $scheduleddate
     */
    private $scheduleddate;

    /**
     * @var string $content
     */
    private $content;

    /**
     * @var integer $opencount
     */
    private $opencount;

    /**
     * @var integer $clickcount
     */
    private $clickcount;

    /**
     * @var integer $bouncecount
     */
    private $bouncecount;

    /**
     * @var integer $uniqueopenedcount
     */
    private $uniqueopenedcount;

    /**
     * @var integer $uniqueclickcount
     */
    private $uniqueclickcount;

    /**
     * @var integer $unsubscribedcount
     */
    private $unsubscribedcount;

    /**
     * @var integer $forwardscount
     */
    private $forwardscount;

    /**
     * @var integer $usercount
     */
    private $usercount;

    /**
     * @var integer $businessid
     */
    private $businessid;


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
     * Set thirdpartycampaignid
     *
     * @param string $thirdpartycampaignid
     * @return Campaigns
     */
    public function setThirdpartycampaignid($thirdpartycampaignid)
    {
        $this->thirdpartycampaignid = $thirdpartycampaignid;
    
        return $this;
    }

    /**
     * Get thirdpartycampaignid
     *
     * @return string 
     */
    public function getThirdpartycampaignid()
    {
        return $this->thirdpartycampaignid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Campaigns
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     * @return Campaigns
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    
        return $this;
    }

    /**
     * Get createddate
     *
     * @return \DateTime 
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * Set scheduleddate
     *
     * @param \DateTime $scheduleddate
     * @return Campaigns
     */
    public function setScheduleddate($scheduleddate)
    {
        $this->scheduleddate = $scheduleddate;
    
        return $this;
    }

    /**
     * Get scheduleddate
     *
     * @return \DateTime 
     */
    public function getScheduleddate()
    {
        return $this->scheduleddate;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Campaigns
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set opencount
     *
     * @param integer $opencount
     * @return Campaigns
     */
    public function setOpencount($opencount)
    {
        $this->opencount = $opencount;
    
        return $this;
    }

    /**
     * Get opencount
     *
     * @return integer 
     */
    public function getOpencount()
    {
        return $this->opencount;
    }

    /**
     * Set clickcount
     *
     * @param integer $clickcount
     * @return Campaigns
     */
    public function setClickcount($clickcount)
    {
        $this->clickcount = $clickcount;
    
        return $this;
    }

    /**
     * Get clickcount
     *
     * @return integer 
     */
    public function getClickcount()
    {
        return $this->clickcount;
    }

    /**
     * Set bouncecount
     *
     * @param integer $bouncecount
     * @return Campaigns
     */
    public function setBouncecount($bouncecount)
    {
        $this->bouncecount = $bouncecount;
    
        return $this;
    }

    /**
     * Get bouncecount
     *
     * @return integer 
     */
    public function getBouncecount()
    {
        return $this->bouncecount;
    }

    /**
     * Set uniqueopenedcount
     *
     * @param integer $uniqueopenedcount
     * @return Campaigns
     */
    public function setUniqueopenedcount($uniqueopenedcount)
    {
        $this->uniqueopenedcount = $uniqueopenedcount;
    
        return $this;
    }

    /**
     * Get uniqueopenedcount
     *
     * @return integer 
     */
    public function getUniqueopenedcount()
    {
        return $this->uniqueopenedcount;
    }

    /**
     * Set uniqueclickcount
     *
     * @param integer $uniqueclickcount
     * @return Campaigns
     */
    public function setUniqueclickcount($uniqueclickcount)
    {
        $this->uniqueclickcount = $uniqueclickcount;
    
        return $this;
    }

    /**
     * Get uniqueclickcount
     *
     * @return integer 
     */
    public function getUniqueclickcount()
    {
        return $this->uniqueclickcount;
    }

    /**
     * Set unsubscribedcount
     *
     * @param integer $unsubscribedcount
     * @return Campaigns
     */
    public function setUnsubscribedcount($unsubscribedcount)
    {
        $this->unsubscribedcount = $unsubscribedcount;
    
        return $this;
    }

    /**
     * Get unsubscribedcount
     *
     * @return integer 
     */
    public function getUnsubscribedcount()
    {
        return $this->unsubscribedcount;
    }

    /**
     * Set forwardscount
     *
     * @param integer $forwardscount
     * @return Campaigns
     */
    public function setForwardscount($forwardscount)
    {
        $this->forwardscount = $forwardscount;
    
        return $this;
    }

    /**
     * Get forwardscount
     *
     * @return integer 
     */
    public function getForwardscount()
    {
        return $this->forwardscount;
    }

    /**
     * Set usercount
     *
     * @param integer $usercount
     * @return Campaigns
     */
    public function setUsercount($usercount)
    {
        $this->usercount = $usercount;
    
        return $this;
    }

    /**
     * Get usercount
     *
     * @return integer 
     */
    public function getUsercount()
    {
        return $this->usercount;
    }

    /**
     * Set businessid
     *
     * @param integer $businessid
     * @return Campaigns
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
}