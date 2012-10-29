<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UsersFollowCategory
 */
class UsersFollowCategory
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
     * @var integer $dealcategoryid
     */
    private $dealcategoryid;


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
     * @return UsersFollowCategory
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
     * Set dealcategoryid
     *
     * @param integer $dealcategoryid
     * @return UsersFollowCategory
     */
    public function setDealcategoryid($dealcategoryid)
    {
        $this->dealcategoryid = $dealcategoryid;
    
        return $this;
    }

    /**
     * Get dealcategoryid
     *
     * @return integer 
     */
    public function getDealcategoryid()
    {
        return $this->dealcategoryid;
    }
}