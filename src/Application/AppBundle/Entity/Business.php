<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Business
 */
class Business
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $businesslogin
     */
    private $businesslogin;

    /**
     * @var string $businesspassword
     */
    private $businesspassword;

    /**
     * @var string $businessname
     */
    private $businessname;

    /**
     * @var string $businesskey
     */
    private $businesskey;

    /**
     * @var string $businessaddress1
     */
    private $businessaddress1;

    /**
     * @var string $businessaddress2
     */
    private $businessaddress2;

    /**
     * @var string $businesscity
     */
    private $businesscity;

    /**
     * @var integer $businessstateid
     */
    private $businessstateid;

    /**
     * @var string $businessstateprovince
     */
    private $businessstateprovince;

    /**
     * @var integer $businesscountryid
     */
    private $businesscountryid;

    /**
     * @var string $businesslatitude
     */
    private $businesslatitude;

    /**
     * @var string $businesslongitude
     */
    private $businesslongitude;

    /**
     * @var string $businessprofile
     */
    private $businessprofile;

    /**
     * @var string $businesslogo
     */
    private $businesslogo;

    /**
     * @var string $businesscfirstname
     */
    private $businesscfirstname;

    /**
     * @var string $businessclastname
     */
    private $businessclastname;

    /**
     * @var string $businesscdesignation
     */
    private $businesscdesignation;

    /**
     * @var string $businessphone
     */
    private $businessphone;

    /**
     * @var string $businessfax
     */
    private $businessfax;

    /**
     * @var string $businesszip
     */
    private $businesszip;

    /**
     * @var string $businessemail
     */
    private $businessemail;

    /**
     * @var string $businesswebsite
     */
    private $businesswebsite;

    /**
     * @var string $businessaccountname
     */
    private $businessaccountname;

    /**
     * @var string $businessaccounttype
     */
    private $businessaccounttype;

    /**
     * @var string $businessaccountdetails
     */
    private $businessaccountdetails;

    /**
     * @var string $businesspaypalemail
     */
    private $businesspaypalemail;

    /**
     * @var string $businessstatus
     */
    private $businessstatus;

    /**
     * @var \DateTime $businessaddeddate
     */
    private $businessaddeddate;

    /**
     * @var \DateTime $businessupdatedate
     */
    private $businessupdatedate;

    /**
     * @var integer $businessdefaultlanguageid
     */
    private $businessdefaultlanguageid;


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
     * Set businesslogin
     *
     * @param string $businesslogin
     * @return Business
     */
    public function setBusinesslogin($businesslogin)
    {
        $this->businesslogin = $businesslogin;
    
        return $this;
    }

    /**
     * Get businesslogin
     *
     * @return string 
     */
    public function getBusinesslogin()
    {
        return $this->businesslogin;
    }

    /**
     * Set businesspassword
     *
     * @param string $businesspassword
     * @return Business
     */
    public function setBusinesspassword($businesspassword)
    {
        $this->businesspassword = $businesspassword;
    
        return $this;
    }

    /**
     * Get businesspassword
     *
     * @return string 
     */
    public function getBusinesspassword()
    {
        return $this->businesspassword;
    }

    /**
     * Set businessname
     *
     * @param string $businessname
     * @return Business
     */
    public function setBusinessname($businessname)
    {
        $this->businessname = $businessname;
    
        return $this;
    }

    /**
     * Get businessname
     *
     * @return string 
     */
    public function getBusinessname()
    {
        return $this->businessname;
    }

    /**
     * Set businesskey
     *
     * @param string $businesskey
     * @return Business
     */
    public function setBusinesskey($businesskey)
    {
        $this->businesskey = $businesskey;
    
        return $this;
    }

    /**
     * Get businesskey
     *
     * @return string 
     */
    public function getBusinesskey()
    {
        return $this->businesskey;
    }

    /**
     * Set businessaddress1
     *
     * @param string $businessaddress1
     * @return Business
     */
    public function setBusinessaddress1($businessaddress1)
    {
        $this->businessaddress1 = $businessaddress1;
    
        return $this;
    }

    /**
     * Get businessaddress1
     *
     * @return string 
     */
    public function getBusinessaddress1()
    {
        return $this->businessaddress1;
    }

    /**
     * Set businessaddress2
     *
     * @param string $businessaddress2
     * @return Business
     */
    public function setBusinessaddress2($businessaddress2)
    {
        $this->businessaddress2 = $businessaddress2;
    
        return $this;
    }

    /**
     * Get businessaddress2
     *
     * @return string 
     */
    public function getBusinessaddress2()
    {
        return $this->businessaddress2;
    }

    /**
     * Set businesscity
     *
     * @param string $businesscity
     * @return Business
     */
    public function setBusinesscity($businesscity)
    {
        $this->businesscity = $businesscity;
    
        return $this;
    }

    /**
     * Get businesscity
     *
     * @return string 
     */
    public function getBusinesscity()
    {
        return $this->businesscity;
    }

    /**
     * Set businessstateid
     *
     * @param integer $businessstateid
     * @return Business
     */
    public function setBusinessstateid($businessstateid)
    {
        $this->businessstateid = $businessstateid;
    
        return $this;
    }

    /**
     * Get businessstateid
     *
     * @return integer 
     */
    public function getBusinessstateid()
    {
        return $this->businessstateid;
    }

    /**
     * Set businessstateprovince
     *
     * @param string $businessstateprovince
     * @return Business
     */
    public function setBusinessstateprovince($businessstateprovince)
    {
        $this->businessstateprovince = $businessstateprovince;
    
        return $this;
    }

    /**
     * Get businessstateprovince
     *
     * @return string 
     */
    public function getBusinessstateprovince()
    {
        return $this->businessstateprovince;
    }

    /**
     * Set businesscountryid
     *
     * @param integer $businesscountryid
     * @return Business
     */
    public function setBusinesscountryid($businesscountryid)
    {
        $this->businesscountryid = $businesscountryid;
    
        return $this;
    }

    /**
     * Get businesscountryid
     *
     * @return integer 
     */
    public function getBusinesscountryid()
    {
        return $this->businesscountryid;
    }

    /**
     * Set businesslatitude
     *
     * @param string $businesslatitude
     * @return Business
     */
    public function setBusinesslatitude($businesslatitude)
    {
        $this->businesslatitude = $businesslatitude;
    
        return $this;
    }

    /**
     * Get businesslatitude
     *
     * @return string 
     */
    public function getBusinesslatitude()
    {
        return $this->businesslatitude;
    }

    /**
     * Set businesslongitude
     *
     * @param string $businesslongitude
     * @return Business
     */
    public function setBusinesslongitude($businesslongitude)
    {
        $this->businesslongitude = $businesslongitude;
    
        return $this;
    }

    /**
     * Get businesslongitude
     *
     * @return string 
     */
    public function getBusinesslongitude()
    {
        return $this->businesslongitude;
    }

    /**
     * Set businessprofile
     *
     * @param string $businessprofile
     * @return Business
     */
    public function setBusinessprofile($businessprofile)
    {
        $this->businessprofile = $businessprofile;
    
        return $this;
    }

    /**
     * Get businessprofile
     *
     * @return string 
     */
    public function getBusinessprofile()
    {
        return $this->businessprofile;
    }

    /**
     * Set businesslogo
     *
     * @param string $businesslogo
     * @return Business
     */
    public function setBusinesslogo($businesslogo)
    {
        $this->businesslogo = $businesslogo;
    
        return $this;
    }

    /**
     * Get businesslogo
     *
     * @return string 
     */
    public function getBusinesslogo()
    {
        return $this->businesslogo;
    }

    /**
     * Set businesscfirstname
     *
     * @param string $businesscfirstname
     * @return Business
     */
    public function setBusinesscfirstname($businesscfirstname)
    {
        $this->businesscfirstname = $businesscfirstname;
    
        return $this;
    }

    /**
     * Get businesscfirstname
     *
     * @return string 
     */
    public function getBusinesscfirstname()
    {
        return $this->businesscfirstname;
    }

    /**
     * Set businessclastname
     *
     * @param string $businessclastname
     * @return Business
     */
    public function setBusinessclastname($businessclastname)
    {
        $this->businessclastname = $businessclastname;
    
        return $this;
    }

    /**
     * Get businessclastname
     *
     * @return string 
     */
    public function getBusinessclastname()
    {
        return $this->businessclastname;
    }

    /**
     * Set businesscdesignation
     *
     * @param string $businesscdesignation
     * @return Business
     */
    public function setBusinesscdesignation($businesscdesignation)
    {
        $this->businesscdesignation = $businesscdesignation;
    
        return $this;
    }

    /**
     * Get businesscdesignation
     *
     * @return string 
     */
    public function getBusinesscdesignation()
    {
        return $this->businesscdesignation;
    }

    /**
     * Set businessphone
     *
     * @param string $businessphone
     * @return Business
     */
    public function setBusinessphone($businessphone)
    {
        $this->businessphone = $businessphone;
    
        return $this;
    }

    /**
     * Get businessphone
     *
     * @return string 
     */
    public function getBusinessphone()
    {
        return $this->businessphone;
    }

    /**
     * Set businessfax
     *
     * @param string $businessfax
     * @return Business
     */
    public function setBusinessfax($businessfax)
    {
        $this->businessfax = $businessfax;
    
        return $this;
    }

    /**
     * Get businessfax
     *
     * @return string 
     */
    public function getBusinessfax()
    {
        return $this->businessfax;
    }

    /**
     * Set businesszip
     *
     * @param string $businesszip
     * @return Business
     */
    public function setBusinesszip($businesszip)
    {
        $this->businesszip = $businesszip;
    
        return $this;
    }

    /**
     * Get businesszip
     *
     * @return string 
     */
    public function getBusinesszip()
    {
        return $this->businesszip;
    }

    /**
     * Set businessemail
     *
     * @param string $businessemail
     * @return Business
     */
    public function setBusinessemail($businessemail)
    {
        $this->businessemail = $businessemail;
    
        return $this;
    }

    /**
     * Get businessemail
     *
     * @return string 
     */
    public function getBusinessemail()
    {
        return $this->businessemail;
    }

    /**
     * Set businesswebsite
     *
     * @param string $businesswebsite
     * @return Business
     */
    public function setBusinesswebsite($businesswebsite)
    {
        $this->businesswebsite = $businesswebsite;
    
        return $this;
    }

    /**
     * Get businesswebsite
     *
     * @return string 
     */
    public function getBusinesswebsite()
    {
        return $this->businesswebsite;
    }

    /**
     * Set businessaccountname
     *
     * @param string $businessaccountname
     * @return Business
     */
    public function setBusinessaccountname($businessaccountname)
    {
        $this->businessaccountname = $businessaccountname;
    
        return $this;
    }

    /**
     * Get businessaccountname
     *
     * @return string 
     */
    public function getBusinessaccountname()
    {
        return $this->businessaccountname;
    }

    /**
     * Set businessaccounttype
     *
     * @param string $businessaccounttype
     * @return Business
     */
    public function setBusinessaccounttype($businessaccounttype)
    {
        $this->businessaccounttype = $businessaccounttype;
    
        return $this;
    }

    /**
     * Get businessaccounttype
     *
     * @return string 
     */
    public function getBusinessaccounttype()
    {
        return $this->businessaccounttype;
    }

    /**
     * Set businessaccountdetails
     *
     * @param string $businessaccountdetails
     * @return Business
     */
    public function setBusinessaccountdetails($businessaccountdetails)
    {
        $this->businessaccountdetails = $businessaccountdetails;
    
        return $this;
    }

    /**
     * Get businessaccountdetails
     *
     * @return string 
     */
    public function getBusinessaccountdetails()
    {
        return $this->businessaccountdetails;
    }

    /**
     * Set businesspaypalemail
     *
     * @param string $businesspaypalemail
     * @return Business
     */
    public function setBusinesspaypalemail($businesspaypalemail)
    {
        $this->businesspaypalemail = $businesspaypalemail;
    
        return $this;
    }

    /**
     * Get businesspaypalemail
     *
     * @return string 
     */
    public function getBusinesspaypalemail()
    {
        return $this->businesspaypalemail;
    }

    /**
     * Set businessstatus
     *
     * @param string $businessstatus
     * @return Business
     */
    public function setBusinessstatus($businessstatus)
    {
        $this->businessstatus = $businessstatus;
    
        return $this;
    }

    /**
     * Get businessstatus
     *
     * @return string 
     */
    public function getBusinessstatus()
    {
        return $this->businessstatus;
    }

    /**
     * Set businessaddeddate
     *
     * @param \DateTime $businessaddeddate
     * @return Business
     */
    public function setBusinessaddeddate($businessaddeddate)
    {
        $this->businessaddeddate = $businessaddeddate;
    
        return $this;
    }

    /**
     * Get businessaddeddate
     *
     * @return \DateTime 
     */
    public function getBusinessaddeddate()
    {
        return $this->businessaddeddate;
    }

    /**
     * Set businessupdatedate
     *
     * @param \DateTime $businessupdatedate
     * @return Business
     */
    public function setBusinessupdatedate($businessupdatedate)
    {
        $this->businessupdatedate = $businessupdatedate;
    
        return $this;
    }

    /**
     * Get businessupdatedate
     *
     * @return \DateTime 
     */
    public function getBusinessupdatedate()
    {
        return $this->businessupdatedate;
    }

    /**
     * Set businessdefaultlanguageid
     *
     * @param integer $businessdefaultlanguageid
     * @return Business
     */
    public function setBusinessdefaultlanguageid($businessdefaultlanguageid)
    {
        $this->businessdefaultlanguageid = $businessdefaultlanguageid;
    
        return $this;
    }

    /**
     * Get businessdefaultlanguageid
     *
     * @return integer 
     */
    public function getBusinessdefaultlanguageid()
    {
        return $this->businessdefaultlanguageid;
    }
}