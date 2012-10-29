<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AdminUsers
 */
class AdminUsers
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $adminuserfirstname
     */
    private $adminuserfirstname;

    /**
     * @var string $adminuserlastname
     */
    private $adminuserlastname;

    /**
     * @var string $adminuseremail
     */
    private $adminuseremail;

    /**
     * @var string $adminuserloginname
     */
    private $adminuserloginname;

    /**
     * @var string $adminuserloginpass
     */
    private $adminuserloginpass;

    /**
     * @var string $adminuserstatus
     */
    private $adminuserstatus;

    /**
     * @var integer $adminuseraccesscount
     */
    private $adminuseraccesscount;

    /**
     * @var integer $adminuserinvalidaccesscount
     */
    private $adminuserinvalidaccesscount;

    /**
     * @var \DateTime $adminuserlockeddate
     */
    private $adminuserlockeddate;

    /**
     * @var \DateTime $adminusercreateddate
     */
    private $adminusercreateddate;

    /**
     * @var \DateTime $adminuserlastaccessdate
     */
    private $adminuserlastaccessdate;

    /**
     * @var integer $usertypeid
     */
    private $usertypeid;


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
     * Set adminuserfirstname
     *
     * @param string $adminuserfirstname
     * @return AdminUsers
     */
    public function setAdminuserfirstname($adminuserfirstname)
    {
        $this->adminuserfirstname = $adminuserfirstname;
    
        return $this;
    }

    /**
     * Get adminuserfirstname
     *
     * @return string 
     */
    public function getAdminuserfirstname()
    {
        return $this->adminuserfirstname;
    }

    /**
     * Set adminuserlastname
     *
     * @param string $adminuserlastname
     * @return AdminUsers
     */
    public function setAdminuserlastname($adminuserlastname)
    {
        $this->adminuserlastname = $adminuserlastname;
    
        return $this;
    }

    /**
     * Get adminuserlastname
     *
     * @return string 
     */
    public function getAdminuserlastname()
    {
        return $this->adminuserlastname;
    }

    /**
     * Set adminuseremail
     *
     * @param string $adminuseremail
     * @return AdminUsers
     */
    public function setAdminuseremail($adminuseremail)
    {
        $this->adminuseremail = $adminuseremail;
    
        return $this;
    }

    /**
     * Get adminuseremail
     *
     * @return string 
     */
    public function getAdminuseremail()
    {
        return $this->adminuseremail;
    }

    /**
     * Set adminuserloginname
     *
     * @param string $adminuserloginname
     * @return AdminUsers
     */
    public function setAdminuserloginname($adminuserloginname)
    {
        $this->adminuserloginname = $adminuserloginname;
    
        return $this;
    }

    /**
     * Get adminuserloginname
     *
     * @return string 
     */
    public function getAdminuserloginname()
    {
        return $this->adminuserloginname;
    }

    /**
     * Set adminuserloginpass
     *
     * @param string $adminuserloginpass
     * @return AdminUsers
     */
    public function setAdminuserloginpass($adminuserloginpass)
    {
        $this->adminuserloginpass = $adminuserloginpass;
    
        return $this;
    }

    /**
     * Get adminuserloginpass
     *
     * @return string 
     */
    public function getAdminuserloginpass()
    {
        return $this->adminuserloginpass;
    }

    /**
     * Set adminuserstatus
     *
     * @param string $adminuserstatus
     * @return AdminUsers
     */
    public function setAdminuserstatus($adminuserstatus)
    {
        $this->adminuserstatus = $adminuserstatus;
    
        return $this;
    }

    /**
     * Get adminuserstatus
     *
     * @return string 
     */
    public function getAdminuserstatus()
    {
        return $this->adminuserstatus;
    }

    /**
     * Set adminuseraccesscount
     *
     * @param integer $adminuseraccesscount
     * @return AdminUsers
     */
    public function setAdminuseraccesscount($adminuseraccesscount)
    {
        $this->adminuseraccesscount = $adminuseraccesscount;
    
        return $this;
    }

    /**
     * Get adminuseraccesscount
     *
     * @return integer 
     */
    public function getAdminuseraccesscount()
    {
        return $this->adminuseraccesscount;
    }

    /**
     * Set adminuserinvalidaccesscount
     *
     * @param integer $adminuserinvalidaccesscount
     * @return AdminUsers
     */
    public function setAdminuserinvalidaccesscount($adminuserinvalidaccesscount)
    {
        $this->adminuserinvalidaccesscount = $adminuserinvalidaccesscount;
    
        return $this;
    }

    /**
     * Get adminuserinvalidaccesscount
     *
     * @return integer 
     */
    public function getAdminuserinvalidaccesscount()
    {
        return $this->adminuserinvalidaccesscount;
    }

    /**
     * Set adminuserlockeddate
     *
     * @param \DateTime $adminuserlockeddate
     * @return AdminUsers
     */
    public function setAdminuserlockeddate($adminuserlockeddate)
    {
        $this->adminuserlockeddate = $adminuserlockeddate;
    
        return $this;
    }

    /**
     * Get adminuserlockeddate
     *
     * @return \DateTime 
     */
    public function getAdminuserlockeddate()
    {
        return $this->adminuserlockeddate;
    }

    /**
     * Set adminusercreateddate
     *
     * @param \DateTime $adminusercreateddate
     * @return AdminUsers
     */
    public function setAdminusercreateddate($adminusercreateddate)
    {
        $this->adminusercreateddate = $adminusercreateddate;
    
        return $this;
    }

    /**
     * Get adminusercreateddate
     *
     * @return \DateTime 
     */
    public function getAdminusercreateddate()
    {
        return $this->adminusercreateddate;
    }

    /**
     * Set adminuserlastaccessdate
     *
     * @param \DateTime $adminuserlastaccessdate
     * @return AdminUsers
     */
    public function setAdminuserlastaccessdate($adminuserlastaccessdate)
    {
        $this->adminuserlastaccessdate = $adminuserlastaccessdate;
    
        return $this;
    }

    /**
     * Get adminuserlastaccessdate
     *
     * @return \DateTime 
     */
    public function getAdminuserlastaccessdate()
    {
        return $this->adminuserlastaccessdate;
    }

    /**
     * Set usertypeid
     *
     * @param integer $usertypeid
     * @return AdminUsers
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
}