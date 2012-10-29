<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UserPrivilageCity
 */
class UserPrivilageCity
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $adminuserid
     */
    private $adminuserid;

    /**
     * @var integer $cityid
     */
    private $cityid;


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
     * Set adminuserid
     *
     * @param integer $adminuserid
     * @return UserPrivilageCity
     */
    public function setAdminuserid($adminuserid)
    {
        $this->adminuserid = $adminuserid;
    
        return $this;
    }

    /**
     * Get adminuserid
     *
     * @return integer 
     */
    public function getAdminuserid()
    {
        return $this->adminuserid;
    }

    /**
     * Set cityid
     *
     * @param integer $cityid
     * @return UserPrivilageCity
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;
    
        return $this;
    }

    /**
     * Get cityid
     *
     * @return integer 
     */
    public function getCityid()
    {
        return $this->cityid;
    }
}