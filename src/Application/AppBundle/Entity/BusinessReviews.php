<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessReviews
 */
class BusinessReviews
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $languageid
     */
    private $languageid;

    /**
     * @var integer $businessid
     */
    private $businessid;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var string $usercomment
     */
    private $usercomment;

    /**
     * @var \DateTime $userrevieweddate
     */
    private $userrevieweddate;


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
     * Set languageid
     *
     * @param integer $languageid
     * @return BusinessReviews
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
     * Set businessid
     *
     * @param integer $businessid
     * @return BusinessReviews
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
     * Set userid
     *
     * @param integer $userid
     * @return BusinessReviews
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
     * Set usercomment
     *
     * @param string $usercomment
     * @return BusinessReviews
     */
    public function setUsercomment($usercomment)
    {
        $this->usercomment = $usercomment;
    
        return $this;
    }

    /**
     * Get usercomment
     *
     * @return string 
     */
    public function getUsercomment()
    {
        return $this->usercomment;
    }

    /**
     * Set userrevieweddate
     *
     * @param \DateTime $userrevieweddate
     * @return BusinessReviews
     */
    public function setUserrevieweddate($userrevieweddate)
    {
        $this->userrevieweddate = $userrevieweddate;
    
        return $this;
    }

    /**
     * Get userrevieweddate
     *
     * @return \DateTime 
     */
    public function getUserrevieweddate()
    {
        return $this->userrevieweddate;
    }
}