<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessRatings
 */
class BusinessRatings
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
     * @var integer $userid
     */
    private $userid;

    /**
     * @var boolean $userrating
     */
    private $userrating;

    /**
     * @var \DateTime $userrateddate
     */
    private $userrateddate;


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
     * @return BusinessRatings
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
     * @return BusinessRatings
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
     * Set userrating
     *
     * @param boolean $userrating
     * @return BusinessRatings
     */
    public function setUserrating($userrating)
    {
        $this->userrating = $userrating;
    
        return $this;
    }

    /**
     * Get userrating
     *
     * @return boolean 
     */
    public function getUserrating()
    {
        return $this->userrating;
    }

    /**
     * Set userrateddate
     *
     * @param \DateTime $userrateddate
     * @return BusinessRatings
     */
    public function setUserrateddate($userrateddate)
    {
        $this->userrateddate = $userrateddate;
    
        return $this;
    }

    /**
     * Get userrateddate
     *
     * @return \DateTime 
     */
    public function getUserrateddate()
    {
        return $this->userrateddate;
    }
}