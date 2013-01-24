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

    protected  $facebookId ;
       
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
     * @var string $usernewslettersubscribestatus
     */
    private $usernewslettersubscribestatus;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    

    public function getFacebookId()
    {
        return $this->facebookId;
    }

    public function setFacebookId($facebookId)
    {
        $this->facebookId = $facebookId;
        $this->setUsername($facebookId);
        $this->salt = '';
    }
    
    /**
     * @param Array
     */
    public function setFBData($fbdata) // C'est dans cette méthode que vous ajouterez vos informations
    {
        //print_r($fbdata);exit;
        if (isset($fbdata['id'])) {
            $this->setFacebookId($fbdata['id']);
            $this->addRole('ROLE_FACEBOOK');
        }
        if (isset($fbdata['first_name'])) {
            $this->setUserfirstname($fbdata['first_name']);
        }
        if (isset($fbdata['last_name'])) {
            $this->setUserlastname($fbdata['last_name']);
        }
        if (isset($fbdata['email'])) {
            $this->setEmail($fbdata['email']);
        }
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
    public function getCountryid(\Application\AppBundle\Entity\Countries $country=null)
    {
         $this->countryid = $country;return $this;
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
     * @return \DateTime 
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
    
  }