<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateImportedUsers
 */
class AffiliateImportedUsers
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $bulkid
     */
    private $bulkid;

    /**
     * @var string $useremail
     */
    private $useremail;

    /**
     * @var string $userpassword
     */
    private $userpassword;

    /**
     * @var string $userfirstname
     */
    private $userfirstname;

    /**
     * @var string $userlastname
     */
    private $userlastname;

    /**
     * @var string $userphone
     */
    private $userphone;

    /**
     * @var string $usercity
     */
    private $usercity;

    /**
     * @var string $useradress1
     */
    private $useradress1;

    /**
     * @var string $useradress2
     */
    private $useradress2;

    /**
     * @var string $userzip
     */
    private $userzip;

    /**
     * @var string $userconfirm
     */
    private $userconfirm;

    /**
     * @var \DateTime $confirmdate
     */
    private $confirmdate;


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
     * Set bulkid
     *
     * @param integer $bulkid
     * @return AffiliateImportedUsers
     */
    public function setBulkid($bulkid)
    {
        $this->bulkid = $bulkid;
    
        return $this;
    }

    /**
     * Get bulkid
     *
     * @return integer 
     */
    public function getBulkid()
    {
        return $this->bulkid;
    }

    /**
     * Set useremail
     *
     * @param string $useremail
     * @return AffiliateImportedUsers
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;
    
        return $this;
    }

    /**
     * Get useremail
     *
     * @return string 
     */
    public function getUseremail()
    {
        return $this->useremail;
    }

    /**
     * Set userpassword
     *
     * @param string $userpassword
     * @return AffiliateImportedUsers
     */
    public function setUserpassword($userpassword)
    {
        $this->userpassword = $userpassword;
    
        return $this;
    }

    /**
     * Get userpassword
     *
     * @return string 
     */
    public function getUserpassword()
    {
        return $this->userpassword;
    }

    /**
     * Set userfirstname
     *
     * @param string $userfirstname
     * @return AffiliateImportedUsers
     */
    public function setUserfirstname($userfirstname)
    {
        $this->userfirstname = $userfirstname;
    
        return $this;
    }

    /**
     * Get userfirstname
     *
     * @return string 
     */
    public function getUserfirstname()
    {
        return $this->userfirstname;
    }

    /**
     * Set userlastname
     *
     * @param string $userlastname
     * @return AffiliateImportedUsers
     */
    public function setUserlastname($userlastname)
    {
        $this->userlastname = $userlastname;
    
        return $this;
    }

    /**
     * Get userlastname
     *
     * @return string 
     */
    public function getUserlastname()
    {
        return $this->userlastname;
    }

    /**
     * Set userphone
     *
     * @param string $userphone
     * @return AffiliateImportedUsers
     */
    public function setUserphone($userphone)
    {
        $this->userphone = $userphone;
    
        return $this;
    }

    /**
     * Get userphone
     *
     * @return string 
     */
    public function getUserphone()
    {
        return $this->userphone;
    }

    /**
     * Set usercity
     *
     * @param string $usercity
     * @return AffiliateImportedUsers
     */
    public function setUsercity($usercity)
    {
        $this->usercity = $usercity;
    
        return $this;
    }

    /**
     * Get usercity
     *
     * @return string 
     */
    public function getUsercity()
    {
        return $this->usercity;
    }

    /**
     * Set useradress1
     *
     * @param string $useradress1
     * @return AffiliateImportedUsers
     */
    public function setUseradress1($useradress1)
    {
        $this->useradress1 = $useradress1;
    
        return $this;
    }

    /**
     * Get useradress1
     *
     * @return string 
     */
    public function getUseradress1()
    {
        return $this->useradress1;
    }

    /**
     * Set useradress2
     *
     * @param string $useradress2
     * @return AffiliateImportedUsers
     */
    public function setUseradress2($useradress2)
    {
        $this->useradress2 = $useradress2;
    
        return $this;
    }

    /**
     * Get useradress2
     *
     * @return string 
     */
    public function getUseradress2()
    {
        return $this->useradress2;
    }

    /**
     * Set userzip
     *
     * @param string $userzip
     * @return AffiliateImportedUsers
     */
    public function setUserzip($userzip)
    {
        $this->userzip = $userzip;
    
        return $this;
    }

    /**
     * Get userzip
     *
     * @return string 
     */
    public function getUserzip()
    {
        return $this->userzip;
    }

    /**
     * Set userconfirm
     *
     * @param string $userconfirm
     * @return AffiliateImportedUsers
     */
    public function setUserconfirm($userconfirm)
    {
        $this->userconfirm = $userconfirm;
    
        return $this;
    }

    /**
     * Get userconfirm
     *
     * @return string 
     */
    public function getUserconfirm()
    {
        return $this->userconfirm;
    }

    /**
     * Set confirmdate
     *
     * @param \DateTime $confirmdate
     * @return AffiliateImportedUsers
     */
    public function setConfirmdate($confirmdate)
    {
        $this->confirmdate = $confirmdate;
    
        return $this;
    }

    /**
     * Get confirmdate
     *
     * @return \DateTime 
     */
    public function getConfirmdate()
    {
        return $this->confirmdate;
    }
}