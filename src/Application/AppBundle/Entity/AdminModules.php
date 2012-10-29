<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AdminModules
 */
class AdminModules
{
    /**
     * @var float $id
     */
    private $id;

    /**
     * @var float $adminmoduleparentid
     */
    private $adminmoduleparentid;

    /**
     * @var string $adminmoduleurlkey
     */
    private $adminmoduleurlkey;

    /**
     * @var string $adminmoduleurlstring
     */
    private $adminmoduleurlstring;

    /**
     * @var string $adminmodulestyleclass
     */
    private $adminmodulestyleclass;

    /**
     * @var string $adminmodulestyleicon
     */
    private $adminmodulestyleicon;

    /**
     * @var float $adminmoduleorder
     */
    private $adminmoduleorder;

    /**
     * @var string $adminmoduletype
     */
    private $adminmoduletype;

    /**
     * @var string $adminmodulestatus
     */
    private $adminmodulestatus;

    /**
     * @var string $adminmodulecaption
     */
    private $adminmodulecaption;

    /**
     * @var string $adminmodulebreadcrumbcaption
     */
    private $adminmodulebreadcrumbcaption;


    /**
     * Get id
     *
     * @return float 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adminmoduleparentid
     *
     * @param float $adminmoduleparentid
     * @return AdminModules
     */
    public function setAdminmoduleparentid($adminmoduleparentid)
    {
        $this->adminmoduleparentid = $adminmoduleparentid;
    
        return $this;
    }

    /**
     * Get adminmoduleparentid
     *
     * @return float 
     */
    public function getAdminmoduleparentid()
    {
        return $this->adminmoduleparentid;
    }

    /**
     * Set adminmoduleurlkey
     *
     * @param string $adminmoduleurlkey
     * @return AdminModules
     */
    public function setAdminmoduleurlkey($adminmoduleurlkey)
    {
        $this->adminmoduleurlkey = $adminmoduleurlkey;
    
        return $this;
    }

    /**
     * Get adminmoduleurlkey
     *
     * @return string 
     */
    public function getAdminmoduleurlkey()
    {
        return $this->adminmoduleurlkey;
    }

    /**
     * Set adminmoduleurlstring
     *
     * @param string $adminmoduleurlstring
     * @return AdminModules
     */
    public function setAdminmoduleurlstring($adminmoduleurlstring)
    {
        $this->adminmoduleurlstring = $adminmoduleurlstring;
    
        return $this;
    }

    /**
     * Get adminmoduleurlstring
     *
     * @return string 
     */
    public function getAdminmoduleurlstring()
    {
        return $this->adminmoduleurlstring;
    }

    /**
     * Set adminmodulestyleclass
     *
     * @param string $adminmodulestyleclass
     * @return AdminModules
     */
    public function setAdminmodulestyleclass($adminmodulestyleclass)
    {
        $this->adminmodulestyleclass = $adminmodulestyleclass;
    
        return $this;
    }

    /**
     * Get adminmodulestyleclass
     *
     * @return string 
     */
    public function getAdminmodulestyleclass()
    {
        return $this->adminmodulestyleclass;
    }

    /**
     * Set adminmodulestyleicon
     *
     * @param string $adminmodulestyleicon
     * @return AdminModules
     */
    public function setAdminmodulestyleicon($adminmodulestyleicon)
    {
        $this->adminmodulestyleicon = $adminmodulestyleicon;
    
        return $this;
    }

    /**
     * Get adminmodulestyleicon
     *
     * @return string 
     */
    public function getAdminmodulestyleicon()
    {
        return $this->adminmodulestyleicon;
    }

    /**
     * Set adminmoduleorder
     *
     * @param float $adminmoduleorder
     * @return AdminModules
     */
    public function setAdminmoduleorder($adminmoduleorder)
    {
        $this->adminmoduleorder = $adminmoduleorder;
    
        return $this;
    }

    /**
     * Get adminmoduleorder
     *
     * @return float 
     */
    public function getAdminmoduleorder()
    {
        return $this->adminmoduleorder;
    }

    /**
     * Set adminmoduletype
     *
     * @param string $adminmoduletype
     * @return AdminModules
     */
    public function setAdminmoduletype($adminmoduletype)
    {
        $this->adminmoduletype = $adminmoduletype;
    
        return $this;
    }

    /**
     * Get adminmoduletype
     *
     * @return string 
     */
    public function getAdminmoduletype()
    {
        return $this->adminmoduletype;
    }

    /**
     * Set adminmodulestatus
     *
     * @param string $adminmodulestatus
     * @return AdminModules
     */
    public function setAdminmodulestatus($adminmodulestatus)
    {
        $this->adminmodulestatus = $adminmodulestatus;
    
        return $this;
    }

    /**
     * Get adminmodulestatus
     *
     * @return string 
     */
    public function getAdminmodulestatus()
    {
        return $this->adminmodulestatus;
    }

    /**
     * Set adminmodulecaption
     *
     * @param string $adminmodulecaption
     * @return AdminModules
     */
    public function setAdminmodulecaption($adminmodulecaption)
    {
        $this->adminmodulecaption = $adminmodulecaption;
    
        return $this;
    }

    /**
     * Get adminmodulecaption
     *
     * @return string 
     */
    public function getAdminmodulecaption()
    {
        return $this->adminmodulecaption;
    }

    /**
     * Set adminmodulebreadcrumbcaption
     *
     * @param string $adminmodulebreadcrumbcaption
     * @return AdminModules
     */
    public function setAdminmodulebreadcrumbcaption($adminmodulebreadcrumbcaption)
    {
        $this->adminmodulebreadcrumbcaption = $adminmodulebreadcrumbcaption;
    
        return $this;
    }

    /**
     * Get adminmodulebreadcrumbcaption
     *
     * @return string 
     */
    public function getAdminmodulebreadcrumbcaption()
    {
        return $this->adminmodulebreadcrumbcaption;
    }
}