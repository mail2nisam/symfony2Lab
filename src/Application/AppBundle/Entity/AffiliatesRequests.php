<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliatesRequests
 */
class AffiliatesRequests
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $affiliatereqfirstname
     */
    private $affiliatereqfirstname;

    /**
     * @var string $affiliatereqlastname
     */
    private $affiliatereqlastname;

    /**
     * @var string $affiliatereqcontactperson
     */
    private $affiliatereqcontactperson;

    /**
     * @var string $affiliatecompanyname
     */
    private $affiliatecompanyname;

    /**
     * @var string $affiliatereqaddress1
     */
    private $affiliatereqaddress1;

    /**
     * @var string $affiliatereqaddress2
     */
    private $affiliatereqaddress2;

    /**
     * @var string $affiliatereqemail
     */
    private $affiliatereqemail;

    /**
     * @var string $affiliatereqphone
     */
    private $affiliatereqphone;

    /**
     * @var string $affiliatereqfax
     */
    private $affiliatereqfax;

    /**
     * @var string $affiliatereqcity
     */
    private $affiliatereqcity;

    /**
     * @var integer $affiliatereqstateid
     */
    private $affiliatereqstateid;

    /**
     * @var string $affiliatereqprovince
     */
    private $affiliatereqprovince;

    /**
     * @var integer $affiliatereqcountryid
     */
    private $affiliatereqcountryid;

    /**
     * @var string $affiliatereqzipcode
     */
    private $affiliatereqzipcode;

    /**
     * @var string $affiliatereqtypeofwebsite
     */
    private $affiliatereqtypeofwebsite;

    /**
     * @var string $affiliatereqwebsiteurl
     */
    private $affiliatereqwebsiteurl;

    /**
     * @var string $affiliatereqcomments
     */
    private $affiliatereqcomments;

    /**
     * @var string $affiliatereqstatus
     */
    private $affiliatereqstatus;

    /**
     * @var \DateTime $affiliatereqdate
     */
    private $affiliatereqdate;

    /**
     * @var \DateTime $affiliaterequpdateddate
     */
    private $affiliaterequpdateddate;


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
     * Set affiliatereqfirstname
     *
     * @param string $affiliatereqfirstname
     * @return AffiliatesRequests
     */
    public function setAffiliatereqfirstname($affiliatereqfirstname)
    {
        $this->affiliatereqfirstname = $affiliatereqfirstname;
    
        return $this;
    }

    /**
     * Get affiliatereqfirstname
     *
     * @return string 
     */
    public function getAffiliatereqfirstname()
    {
        return $this->affiliatereqfirstname;
    }

    /**
     * Set affiliatereqlastname
     *
     * @param string $affiliatereqlastname
     * @return AffiliatesRequests
     */
    public function setAffiliatereqlastname($affiliatereqlastname)
    {
        $this->affiliatereqlastname = $affiliatereqlastname;
    
        return $this;
    }

    /**
     * Get affiliatereqlastname
     *
     * @return string 
     */
    public function getAffiliatereqlastname()
    {
        return $this->affiliatereqlastname;
    }

    /**
     * Set affiliatereqcontactperson
     *
     * @param string $affiliatereqcontactperson
     * @return AffiliatesRequests
     */
    public function setAffiliatereqcontactperson($affiliatereqcontactperson)
    {
        $this->affiliatereqcontactperson = $affiliatereqcontactperson;
    
        return $this;
    }

    /**
     * Get affiliatereqcontactperson
     *
     * @return string 
     */
    public function getAffiliatereqcontactperson()
    {
        return $this->affiliatereqcontactperson;
    }

    /**
     * Set affiliatecompanyname
     *
     * @param string $affiliatecompanyname
     * @return AffiliatesRequests
     */
    public function setAffiliatecompanyname($affiliatecompanyname)
    {
        $this->affiliatecompanyname = $affiliatecompanyname;
    
        return $this;
    }

    /**
     * Get affiliatecompanyname
     *
     * @return string 
     */
    public function getAffiliatecompanyname()
    {
        return $this->affiliatecompanyname;
    }

    /**
     * Set affiliatereqaddress1
     *
     * @param string $affiliatereqaddress1
     * @return AffiliatesRequests
     */
    public function setAffiliatereqaddress1($affiliatereqaddress1)
    {
        $this->affiliatereqaddress1 = $affiliatereqaddress1;
    
        return $this;
    }

    /**
     * Get affiliatereqaddress1
     *
     * @return string 
     */
    public function getAffiliatereqaddress1()
    {
        return $this->affiliatereqaddress1;
    }

    /**
     * Set affiliatereqaddress2
     *
     * @param string $affiliatereqaddress2
     * @return AffiliatesRequests
     */
    public function setAffiliatereqaddress2($affiliatereqaddress2)
    {
        $this->affiliatereqaddress2 = $affiliatereqaddress2;
    
        return $this;
    }

    /**
     * Get affiliatereqaddress2
     *
     * @return string 
     */
    public function getAffiliatereqaddress2()
    {
        return $this->affiliatereqaddress2;
    }

    /**
     * Set affiliatereqemail
     *
     * @param string $affiliatereqemail
     * @return AffiliatesRequests
     */
    public function setAffiliatereqemail($affiliatereqemail)
    {
        $this->affiliatereqemail = $affiliatereqemail;
    
        return $this;
    }

    /**
     * Get affiliatereqemail
     *
     * @return string 
     */
    public function getAffiliatereqemail()
    {
        return $this->affiliatereqemail;
    }

    /**
     * Set affiliatereqphone
     *
     * @param string $affiliatereqphone
     * @return AffiliatesRequests
     */
    public function setAffiliatereqphone($affiliatereqphone)
    {
        $this->affiliatereqphone = $affiliatereqphone;
    
        return $this;
    }

    /**
     * Get affiliatereqphone
     *
     * @return string 
     */
    public function getAffiliatereqphone()
    {
        return $this->affiliatereqphone;
    }

    /**
     * Set affiliatereqfax
     *
     * @param string $affiliatereqfax
     * @return AffiliatesRequests
     */
    public function setAffiliatereqfax($affiliatereqfax)
    {
        $this->affiliatereqfax = $affiliatereqfax;
    
        return $this;
    }

    /**
     * Get affiliatereqfax
     *
     * @return string 
     */
    public function getAffiliatereqfax()
    {
        return $this->affiliatereqfax;
    }

    /**
     * Set affiliatereqcity
     *
     * @param string $affiliatereqcity
     * @return AffiliatesRequests
     */
    public function setAffiliatereqcity($affiliatereqcity)
    {
        $this->affiliatereqcity = $affiliatereqcity;
    
        return $this;
    }

    /**
     * Get affiliatereqcity
     *
     * @return string 
     */
    public function getAffiliatereqcity()
    {
        return $this->affiliatereqcity;
    }

    /**
     * Set affiliatereqstateid
     *
     * @param integer $affiliatereqstateid
     * @return AffiliatesRequests
     */
    public function setAffiliatereqstateid($affiliatereqstateid)
    {
        $this->affiliatereqstateid = $affiliatereqstateid;
    
        return $this;
    }

    /**
     * Get affiliatereqstateid
     *
     * @return integer 
     */
    public function getAffiliatereqstateid()
    {
        return $this->affiliatereqstateid;
    }

    /**
     * Set affiliatereqprovince
     *
     * @param string $affiliatereqprovince
     * @return AffiliatesRequests
     */
    public function setAffiliatereqprovince($affiliatereqprovince)
    {
        $this->affiliatereqprovince = $affiliatereqprovince;
    
        return $this;
    }

    /**
     * Get affiliatereqprovince
     *
     * @return string 
     */
    public function getAffiliatereqprovince()
    {
        return $this->affiliatereqprovince;
    }

    /**
     * Set affiliatereqcountryid
     *
     * @param integer $affiliatereqcountryid
     * @return AffiliatesRequests
     */
    public function setAffiliatereqcountryid($affiliatereqcountryid)
    {
        $this->affiliatereqcountryid = $affiliatereqcountryid;
    
        return $this;
    }

    /**
     * Get affiliatereqcountryid
     *
     * @return integer 
     */
    public function getAffiliatereqcountryid()
    {
        return $this->affiliatereqcountryid;
    }

    /**
     * Set affiliatereqzipcode
     *
     * @param string $affiliatereqzipcode
     * @return AffiliatesRequests
     */
    public function setAffiliatereqzipcode($affiliatereqzipcode)
    {
        $this->affiliatereqzipcode = $affiliatereqzipcode;
    
        return $this;
    }

    /**
     * Get affiliatereqzipcode
     *
     * @return string 
     */
    public function getAffiliatereqzipcode()
    {
        return $this->affiliatereqzipcode;
    }

    /**
     * Set affiliatereqtypeofwebsite
     *
     * @param string $affiliatereqtypeofwebsite
     * @return AffiliatesRequests
     */
    public function setAffiliatereqtypeofwebsite($affiliatereqtypeofwebsite)
    {
        $this->affiliatereqtypeofwebsite = $affiliatereqtypeofwebsite;
    
        return $this;
    }

    /**
     * Get affiliatereqtypeofwebsite
     *
     * @return string 
     */
    public function getAffiliatereqtypeofwebsite()
    {
        return $this->affiliatereqtypeofwebsite;
    }

    /**
     * Set affiliatereqwebsiteurl
     *
     * @param string $affiliatereqwebsiteurl
     * @return AffiliatesRequests
     */
    public function setAffiliatereqwebsiteurl($affiliatereqwebsiteurl)
    {
        $this->affiliatereqwebsiteurl = $affiliatereqwebsiteurl;
    
        return $this;
    }

    /**
     * Get affiliatereqwebsiteurl
     *
     * @return string 
     */
    public function getAffiliatereqwebsiteurl()
    {
        return $this->affiliatereqwebsiteurl;
    }

    /**
     * Set affiliatereqcomments
     *
     * @param string $affiliatereqcomments
     * @return AffiliatesRequests
     */
    public function setAffiliatereqcomments($affiliatereqcomments)
    {
        $this->affiliatereqcomments = $affiliatereqcomments;
    
        return $this;
    }

    /**
     * Get affiliatereqcomments
     *
     * @return string 
     */
    public function getAffiliatereqcomments()
    {
        return $this->affiliatereqcomments;
    }

    /**
     * Set affiliatereqstatus
     *
     * @param string $affiliatereqstatus
     * @return AffiliatesRequests
     */
    public function setAffiliatereqstatus($affiliatereqstatus)
    {
        $this->affiliatereqstatus = $affiliatereqstatus;
    
        return $this;
    }

    /**
     * Get affiliatereqstatus
     *
     * @return string 
     */
    public function getAffiliatereqstatus()
    {
        return $this->affiliatereqstatus;
    }

    /**
     * Set affiliatereqdate
     *
     * @param \DateTime $affiliatereqdate
     * @return AffiliatesRequests
     */
    public function setAffiliatereqdate($affiliatereqdate)
    {
        $this->affiliatereqdate = $affiliatereqdate;
    
        return $this;
    }

    /**
     * Get affiliatereqdate
     *
     * @return \DateTime 
     */
    public function getAffiliatereqdate()
    {
        return $this->affiliatereqdate;
    }

    /**
     * Set affiliaterequpdateddate
     *
     * @param \DateTime $affiliaterequpdateddate
     * @return AffiliatesRequests
     */
    public function setAffiliaterequpdateddate($affiliaterequpdateddate)
    {
        $this->affiliaterequpdateddate = $affiliaterequpdateddate;
    
        return $this;
    }

    /**
     * Get affiliaterequpdateddate
     *
     * @return \DateTime 
     */
    public function getAffiliaterequpdateddate()
    {
        return $this->affiliaterequpdateddate;
    }
}