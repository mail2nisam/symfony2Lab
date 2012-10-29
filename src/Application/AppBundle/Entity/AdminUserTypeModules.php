<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AdminUserTypeModules
 */
class AdminUserTypeModules
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $usertypeid
     */
    private $usertypeid;

    /**
     * @var integer $adminmoduleid
     */
    private $adminmoduleid;


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
     * Set usertypeid
     *
     * @param integer $usertypeid
     * @return AdminUserTypeModules
     */
    public function setUsertypeid($usertypeid)
    {
        $this->usertypeid = $usertypeid;
    
        return $this;
    }

    /**
     * Get usertypeid
     *
     * @return integer 
     */
    public function getUsertypeid()
    {
        return $this->usertypeid;
    }

    /**
     * Set adminmoduleid
     *
     * @param integer $adminmoduleid
     * @return AdminUserTypeModules
     */
    public function setAdminmoduleid($adminmoduleid)
    {
        $this->adminmoduleid = $adminmoduleid;
    
        return $this;
    }

    /**
     * Get adminmoduleid
     *
     * @return integer 
     */
    public function getAdminmoduleid()
    {
        return $this->adminmoduleid;
    }
}