<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealReviews
 */
class DealReviews
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
     * @var integer $userid
     */
    private $userid;

    /**
     * @var integer $languageid
     */
    private $languageid;

    /**
     * @var string $reviewtext
     */
    private $reviewtext;

    /**
     * @var \DateTime $reviweddate
     */
    private $reviweddate;

    /**
     * @var string $reviewstatus
     */
    private $reviewstatus;

    /**
     * @var \DateTime $updateddate
     */
    private $updateddate;

    /**
     * @var integer $approvedby
     */
    private $approvedby;

    /**
     * @var string $reviewfollow
     */
    private $reviewfollow;


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
     * @return DealReviews
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
     * Set userid
     *
     * @param integer $userid
     * @return DealReviews
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set languageid
     *
     * @param integer $languageid
     * @return DealReviews
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
     * Set reviewtext
     *
     * @param string $reviewtext
     * @return DealReviews
     */
    public function setReviewtext($reviewtext)
    {
        $this->reviewtext = $reviewtext;
    
        return $this;
    }

    /**
     * Get reviewtext
     *
     * @return string 
     */
    public function getReviewtext()
    {
        return $this->reviewtext;
    }

    /**
     * Set reviweddate
     *
     * @param \DateTime $reviweddate
     * @return DealReviews
     */
    public function setReviweddate($reviweddate)
    {
        $this->reviweddate = $reviweddate;
    
        return $this;
    }

    /**
     * Get reviweddate
     *
     * @return \DateTime 
     */
    public function getReviweddate()
    {
        return $this->reviweddate;
    }

    /**
     * Set reviewstatus
     *
     * @param string $reviewstatus
     * @return DealReviews
     */
    public function setReviewstatus($reviewstatus)
    {
        $this->reviewstatus = $reviewstatus;
    
        return $this;
    }

    /**
     * Get reviewstatus
     *
     * @return string 
     */
    public function getReviewstatus()
    {
        return $this->reviewstatus;
    }

    /**
     * Set updateddate
     *
     * @param \DateTime $updateddate
     * @return DealReviews
     */
    public function setUpdateddate($updateddate)
    {
        $this->updateddate = $updateddate;
    
        return $this;
    }

    /**
     * Get updateddate
     *
     * @return \DateTime 
     */
    public function getUpdateddate()
    {
        return $this->updateddate;
    }

    /**
     * Set approvedby
     *
     * @param integer $approvedby
     * @return DealReviews
     */
    public function setApprovedby($approvedby)
    {
        $this->approvedby = $approvedby;
    
        return $this;
    }

    /**
     * Get approvedby
     *
     * @return integer 
     */
    public function getApprovedby()
    {
        return $this->approvedby;
    }

    /**
     * Set reviewfollow
     *
     * @param string $reviewfollow
     * @return DealReviews
     */
    public function setReviewfollow($reviewfollow)
    {
        $this->reviewfollow = $reviewfollow;
    
        return $this;
    }

    /**
     * Get reviewfollow
     *
     * @return string 
     */
    public function getReviewfollow()
    {
        return $this->reviewfollow;
    }
}