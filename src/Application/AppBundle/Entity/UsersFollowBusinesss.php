<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UsersFollowBusinesss
 */
class UsersFollowBusinesss
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var integer $businessid
     */
    private $businessid;

    /**
     * @var \DateTime $followdate
     */
    private $followdate;


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
     * Set userid
     *
     * @param integer $userid
     * @return UsersFollowBusinesss
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
     * Set businessid
     *
     * @param integer $businessid
     * @return UsersFollowBusinesss
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
     * Set followdate
     *
     * @param \DateTime $followdate
     * @return UsersFollowBusinesss
     */
    public function setFollowdate($followdate)
    {
        $this->followdate = $followdate;
    
        return $this;
    }

    /**
     * Get followdate
     *
     * @return \DateTime 
     */
    public function getFollowdate()
    {
        return $this->followdate;
    }
}