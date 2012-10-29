<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AdminUserType
 */
class AdminUserType
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $usertypename
     */
    private $usertypename;

    /**
     * @var string $usertypestatus
     */
    private $usertypestatus;

    /**
     * @var string $adminmode
     */
    private $adminmode;


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
     * Set usertypename
     *
     * @param string $usertypename
     * @return AdminUserType
     */
    public function setUsertypename($usertypename)
    {
        $this->usertypename = $usertypename;
    
        return $this;
    }

    /**
     * Get usertypename
     *
     * @return string 
     */
    public function getUsertypename()
    {
        return $this->usertypename;
    }

    /**
     * Set usertypestatus
     *
     * @param string $usertypestatus
     * @return AdminUserType
     */
    public function setUsertypestatus($usertypestatus)
    {
        $this->usertypestatus = $usertypestatus;
    
        return $this;
    }

    /**
     * Get usertypestatus
     *
     * @return string 
     */
    public function getUsertypestatus()
    {
        return $this->usertypestatus;
    }

    /**
     * Set adminmode
     *
     * @param string $adminmode
     * @return AdminUserType
     */
    public function setAdminmode($adminmode)
    {
        $this->adminmode = $adminmode;
    
        return $this;
    }

    /**
     * Get adminmode
     *
     * @return string 
     */
    public function getAdminmode()
    {
        return $this->adminmode;
    }
}