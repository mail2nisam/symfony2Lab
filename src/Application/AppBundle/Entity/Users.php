<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Application\AppBundle\Entity\Users
 */
class Users extends BaseUser
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var integer $usertypeid
     */
    private $usertypeid;
       
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
     * @var \DateTime $userregistreddate
     */
    private $userregistreddate;
    
    /**
     * @var string $usernewslettermode
     */
    private $usernewslettermode;

    /**
     * @var string $useradress1
     */
    private $useradress1;

    /**
     * @var string $useradress2
     */
    private $useradress2;

    /**
     * @var string $usercity
     */
    private $usercity;

    /**
     * @var integer $countryid
     */
    private $countryid;

    /**
     * @var integer $stateid
     */
    private $stateid;

    /**
     * @var string $userprovince
     */
    private $userprovince;

    /**
     * @var string $userzip
     */
    private $userzip;

    /**
     * @var integer $usergroupid
     */
    private $usergroupid;

    /**
     * @var string $userreferralid
     */
    private $userreferralid;

    /**
     * @var string $userprofilepicture
     */
    private $userprofilepicture;

    /**
     * @var string $userdob
     */
    private $userdob;

    /**
     * @var string $usergender
     */
    private $usergender;

    /**
     * @var string $userlogintype
     */
    private $userlogintype;
        
    /**
     * @var integer $userinvalidaccesscount
     */
    private $userinvalidaccesscount;

    /**
     * @var string $usernewslettersubscribestatus
     */
    private $usernewslettersubscribestatus;

    /**
     * @var integer $userdefaultlanguage
     */
    private $userdefaultlanguage;
   
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
     * @return Users
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
     * Set userfirstname
     *
     * @param string $userfirstname
     * @return Users
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
     * @return Users
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
     * @return Users
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
     * Set userregistreddate
     *
     * @param \DateTime $userregistreddate
     * @return Users
     */
    public function setUserregistreddate($userregistreddate)
    {
        $this->userregistreddate = $userregistreddate;
    
        return $this;
    }

    /**
     * Get userregistreddate
     *
     * @return \DateTime 
     */
    public function getUserregistreddate()
    {
        return $this->userregistreddate;
    }

    /**
     * Set usernewslettermode
     *
     * @param string $usernewslettermode
     * @return Users
     */
    public function setUsernewslettermode($usernewslettermode)
    {
        $this->usernewslettermode = $usernewslettermode;
    
        return $this;
    }

    /**
     * Get usernewslettermode
     *
     * @return string 
     */
    public function getUsernewslettermode()
    {
        return $this->usernewslettermode;
    }

    /**
     * Set useradress1
     *
     * @param string $useradress1
     * @return Users
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
     * @return Users
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
     * Set usercity
     *
     * @param string $usercity
     * @return Users
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
     * Set countryid
     *
     * @param integer $countryid
     * @return Users
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;
    
        return $this;
    }

    /**
     * Get countryid
     *
     * @return integer 
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set stateid
     *
     * @param integer $stateid
     * @return Users
     */
    public function setStateid($stateid)
    {
        $this->stateid = $stateid;
    
        return $this;
    }

    /**
     * Get stateid
     *
     * @return integer 
     */
    public function getStateid()
    {
        return $this->stateid;
    }

    /**
     * Set userprovince
     *
     * @param string $userprovince
     * @return Users
     */
    public function setUserprovince($userprovince)
    {
        $this->userprovince = $userprovince;
    
        return $this;
    }

    /**
     * Get userprovince
     *
     * @return string 
     */
    public function getUserprovince()
    {
        return $this->userprovince;
    }

    /**
     * Set userzip
     *
     * @param string $userzip
     * @return Users
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
     * Set usergroupid
     *
     * @param integer $usergroupid
     * @return Users
     */
    public function setUsergroupid($usergroupid)
    {
        $this->usergroupid = $usergroupid;
    
        return $this;
    }

    /**
     * Get usergroupid
     *
     * @return integer 
     */
    public function getUsergroupid()
    {
        return $this->usergroupid;
    }

    /**
     * Set userreferralid
     *
     * @param string $userreferralid
     * @return Users
     */
    public function setUserreferralid($userreferralid)
    {
        $this->userreferralid = $userreferralid;
    
        return $this;
    }

    /**
     * Get userreferralid
     *
     * @return string 
     */
    public function getUserreferralid()
    {
        return $this->userreferralid;
    }

    /**
     * Set userprofilepicture
     *
     * @param string $userprofilepicture
     * @return Users
     */
    public function setUserprofilepicture($userprofilepicture)
    {
        $this->userprofilepicture = $userprofilepicture;
    
        return $this;
    }

    /**
     * Get userprofilepicture
     *
     * @return string 
     */
    public function getUserprofilepicture()
    {
        return $this->userprofilepicture;
    }

    /**
     * Set userdob
     *
     * @param string $userdob
     * @return Users
     */
    public function setUserdob($userdob)
    {
        $this->userdob = $userdob;
    
        return $this;
    }

    /**
     * Get userdob
     *
     * @return string 
     */
    public function getUserdob()
    {
        return $this->userdob;
    }

    /**
     * Set usergender
     *
     * @param string $usergender
     * @return Users
     */
    public function setUsergender($usergender)
    {
        $this->usergender = $usergender;
    
        return $this;
    }

    /**
     * Get usergender
     *
     * @return string 
     */
    public function getUsergender()
    {
        return $this->usergender;
    }

    /**
     * Set userlogintype
     *
     * @param string $userlogintype
     * @return Users
     */
    public function setUserlogintype($userlogintype)
    {
        $this->userlogintype = $userlogintype;
    
        return $this;
    }

    /**
     * Get userlogintype
     *
     * @return string 
     */
    public function getUserlogintype()
    {
        return $this->userlogintype;
    }

    /**
     * Set userinvalidaccesscount
     *
     * @param integer $userinvalidaccesscount
     * @return Users
     */
    public function setUserinvalidaccesscount($userinvalidaccesscount)
    {
        $this->userinvalidaccesscount = $userinvalidaccesscount;
    
        return $this;
    }

    /**
     * Get userinvalidaccesscount
     *
     * @return integer 
     */
    public function getUserinvalidaccesscount()
    {
        return $this->userinvalidaccesscount;
    }

    /**
     * Set usernewslettersubscribestatus
     *
     * @param string $usernewslettersubscribestatus
     * @return Users
     */
    public function setUsernewslettersubscribestatus($usernewslettersubscribestatus)
    {
        $this->usernewslettersubscribestatus = $usernewslettersubscribestatus;
    
        return $this;
    }

    /**
     * Get usernewslettersubscribestatus
     *
     * @return string 
     */
    public function getUsernewslettersubscribestatus()
    {
        return $this->usernewslettersubscribestatus;
    }

    /**
     * Set userdefaultlanguage
     *
     * @param integer $userdefaultlanguage
     * @return Users
     */
    public function setUserdefaultlanguage($userdefaultlanguage)
    {
        $this->userdefaultlanguage = $userdefaultlanguage;
    
        return $this;
    }

    /**
     * Get userdefaultlanguage
     *
     * @return integer 
     */
    public function getUserdefaultlanguage()
    {
        return $this->userdefaultlanguage;
    }
  }