<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Affiliates
 */
class Affiliates
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $affiliateid
     */
    private $affiliateid;

    /**
     * @var integer $affiliatereqid
     */
    private $affiliatereqid;

    /**
     * @var string $affiliateusername
     */
    private $affiliateusername;

    /**
     * @var string $affiliatepassword
     */
    private $affiliatepassword;

    /**
     * @var string $affiliatefirstname
     */
    private $affiliatefirstname;

    /**
     * @var string $affiliatelastname
     */
    private $affiliatelastname;

    /**
     * @var string $affiliatecontactperson
     */
    private $affiliatecontactperson;

    /**
     * @var string $affiliatecompanyname
     */
    private $affiliatecompanyname;

    /**
     * @var string $affiliateaddress1
     */
    private $affiliateaddress1;

    /**
     * @var string $affiliateaddress2
     */
    private $affiliateaddress2;

    /**
     * @var string $affiliateemail
     */
    private $affiliateemail;

    /**
     * @var string $affiliatephone
     */
    private $affiliatephone;

    /**
     * @var string $affiliatefax
     */
    private $affiliatefax;

    /**
     * @var string $affiliatecity
     */
    private $affiliatecity;

    /**
     * @var integer $affiliatestateid
     */
    private $affiliatestateid;

    /**
     * @var string $affiliatestateprovince
     */
    private $affiliatestateprovince;

    /**
     * @var integer $affiliatecountryid
     */
    private $affiliatecountryid;

    /**
     * @var string $affiliatezipcode
     */
    private $affiliatezipcode;

    /**
     * @var string $affiliatetypeofwebsite
     */
    private $affiliatetypeofwebsite;

    /**
     * @var string $affiliatewebsiteurl
     */
    private $affiliatewebsiteurl;

    /**
     * @var string $affiliateaccounttype
     */
    private $affiliateaccounttype;

    /**
     * @var string $affiliateaccountname
     */
    private $affiliateaccountname;

    /**
     * @var string $affiliateaccountdetails
     */
    private $affiliateaccountdetails;

    /**
     * @var string $affiliatestatus
     */
    private $affiliatestatus;

    /**
     * @var \DateTime $affiliateregisterdate
     */
    private $affiliateregisterdate;

    /**
     * @var \DateTime $affiliatelastaccesed
     */
    private $affiliatelastaccesed;

    /**
     * @var integer $preferredlanguage
     */
    private $preferredlanguage;


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
     * Set affiliateid
     *
     * @param string $affiliateid
     * @return Affiliates
     */
    public function setAffiliateid($affiliateid)
    {
        $this->affiliateid = $affiliateid;
    
        return $this;
    }

    /**
     * Get affiliateid
     *
     * @return string 
     */
    public function getAffiliateid()
    {
        return $this->affiliateid;
    }

    /**
     * Set affiliatereqid
     *
     * @param integer $affiliatereqid
     * @return Affiliates
     */
    public function setAffiliatereqid($affiliatereqid)
    {
        $this->affiliatereqid = $affiliatereqid;
    
        return $this;
    }

    /**
     * Get affiliatereqid
     *
     * @return integer 
     */
    public function getAffiliatereqid()
    {
        return $this->affiliatereqid;
    }

    /**
     * Set affiliateusername
     *
     * @param string $affiliateusername
     * @return Affiliates
     */
    public function setAffiliateusername($affiliateusername)
    {
        $this->affiliateusername = $affiliateusername;
    
        return $this;
    }

    /**
     * Get affiliateusername
     *
     * @return string 
     */
    public function getAffiliateusername()
    {
        return $this->affiliateusername;
    }

    /**
     * Set affiliatepassword
     *
     * @param string $affiliatepassword
     * @return Affiliates
     */
    public function setAffiliatepassword($affiliatepassword)
    {
        $this->affiliatepassword = $affiliatepassword;
    
        return $this;
    }

    /**
     * Get affiliatepassword
     *
     * @return string 
     */
    public function getAffiliatepassword()
    {
        return $this->affiliatepassword;
    }

    /**
     * Set affiliatefirstname
     *
     * @param string $affiliatefirstname
     * @return Affiliates
     */
    public function setAffiliatefirstname($affiliatefirstname)
    {
        $this->affiliatefirstname = $affiliatefirstname;
    
        return $this;
    }

    /**
     * Get affiliatefirstname
     *
     * @return string 
     */
    public function getAffiliatefirstname()
    {
        return $this->affiliatefirstname;
    }

    /**
     * Set affiliatelastname
     *
     * @param string $affiliatelastname
     * @return Affiliates
     */
    public function setAffiliatelastname($affiliatelastname)
    {
        $this->affiliatelastname = $affiliatelastname;
    
        return $this;
    }

    /**
     * Get affiliatelastname
     *
     * @return string 
     */
    public function getAffiliatelastname()
    {
        return $this->affiliatelastname;
    }

    /**
     * Set affiliatecontactperson
     *
     * @param string $affiliatecontactperson
     * @return Affiliates
     */
    public function setAffiliatecontactperson($affiliatecontactperson)
    {
        $this->affiliatecontactperson = $affiliatecontactperson;
    
        return $this;
    }

    /**
     * Get affiliatecontactperson
     *
     * @return string 
     */
    public function getAffiliatecontactperson()
    {
        return $this->affiliatecontactperson;
    }

    /**
     * Set affiliatecompanyname
     *
     * @param string $affiliatecompanyname
     * @return Affiliates
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
     * Set affiliateaddress1
     *
     * @param string $affiliateaddress1
     * @return Affiliates
     */
    public function setAffiliateaddress1($affiliateaddress1)
    {
        $this->affiliateaddress1 = $affiliateaddress1;
    
        return $this;
    }

    /**
     * Get affiliateaddress1
     *
     * @return string 
     */
    public function getAffiliateaddress1()
    {
        return $this->affiliateaddress1;
    }

    /**
     * Set affiliateaddress2
     *
     * @param string $affiliateaddress2
     * @return Affiliates
     */
    public function setAffiliateaddress2($affiliateaddress2)
    {
        $this->affiliateaddress2 = $affiliateaddress2;
    
        return $this;
    }

    /**
     * Get affiliateaddress2
     *
     * @return string 
     */
    public function getAffiliateaddress2()
    {
        return $this->affiliateaddress2;
    }

    /**
     * Set affiliateemail
     *
     * @param string $affiliateemail
     * @return Affiliates
     */
    public function setAffiliateemail($affiliateemail)
    {
        $this->affiliateemail = $affiliateemail;
    
        return $this;
    }

    /**
     * Get affiliateemail
     *
     * @return string 
     */
    public function getAffiliateemail()
    {
        return $this->affiliateemail;
    }

    /**
     * Set affiliatephone
     *
     * @param string $affiliatephone
     * @return Affiliates
     */
    public function setAffiliatephone($affiliatephone)
    {
        $this->affiliatephone = $affiliatephone;
    
        return $this;
    }

    /**
     * Get affiliatephone
     *
     * @return string 
     */
    public function getAffiliatephone()
    {
        return $this->affiliatephone;
    }

    /**
     * Set affiliatefax
     *
     * @param string $affiliatefax
     * @return Affiliates
     */
    public function setAffiliatefax($affiliatefax)
    {
        $this->affiliatefax = $affiliatefax;
    
        return $this;
    }

    /**
     * Get affiliatefax
     *
     * @return string 
     */
    public function getAffiliatefax()
    {
        return $this->affiliatefax;
    }

    /**
     * Set affiliatecity
     *
     * @param string $affiliatecity
     * @return Affiliates
     */
    public function setAffiliatecity($affiliatecity)
    {
        $this->affiliatecity = $affiliatecity;
    
        return $this;
    }

    /**
     * Get affiliatecity
     *
     * @return string 
     */
    public function getAffiliatecity()
    {
        return $this->affiliatecity;
    }

    /**
     * Set affiliatestateid
     *
     * @param integer $affiliatestateid
     * @return Affiliates
     */
    public function setAffiliatestateid($affiliatestateid)
    {
        $this->affiliatestateid = $affiliatestateid;
    
        return $this;
    }

    /**
     * Get affiliatestateid
     *
     * @return integer 
     */
    public function getAffiliatestateid()
    {
        return $this->affiliatestateid;
    }

    /**
     * Set affiliatestateprovince
     *
     * @param string $affiliatestateprovince
     * @return Affiliates
     */
    public function setAffiliatestateprovince($affiliatestateprovince)
    {
        $this->affiliatestateprovince = $affiliatestateprovince;
    
        return $this;
    }

    /**
     * Get affiliatestateprovince
     *
     * @return string 
     */
    public function getAffiliatestateprovince()
    {
        return $this->affiliatestateprovince;
    }

    /**
     * Set affiliatecountryid
     *
     * @param integer $affiliatecountryid
     * @return Affiliates
     */
    public function setAffiliatecountryid($affiliatecountryid)
    {
        $this->affiliatecountryid = $affiliatecountryid;
    
        return $this;
    }

    /**
     * Get affiliatecountryid
     *
     * @return integer 
     */
    public function getAffiliatecountryid()
    {
        return $this->affiliatecountryid;
    }

    /**
     * Set affiliatezipcode
     *
     * @param string $affiliatezipcode
     * @return Affiliates
     */
    public function setAffiliatezipcode($affiliatezipcode)
    {
        $this->affiliatezipcode = $affiliatezipcode;
    
        return $this;
    }

    /**
     * Get affiliatezipcode
     *
     * @return string 
     */
    public function getAffiliatezipcode()
    {
        return $this->affiliatezipcode;
    }

    /**
     * Set affiliatetypeofwebsite
     *
     * @param string $affiliatetypeofwebsite
     * @return Affiliates
     */
    public function setAffiliatetypeofwebsite($affiliatetypeofwebsite)
    {
        $this->affiliatetypeofwebsite = $affiliatetypeofwebsite;
    
        return $this;
    }

    /**
     * Get affiliatetypeofwebsite
     *
     * @return string 
     */
    public function getAffiliatetypeofwebsite()
    {
        return $this->affiliatetypeofwebsite;
    }

    /**
     * Set affiliatewebsiteurl
     *
     * @param string $affiliatewebsiteurl
     * @return Affiliates
     */
    public function setAffiliatewebsiteurl($affiliatewebsiteurl)
    {
        $this->affiliatewebsiteurl = $affiliatewebsiteurl;
    
        return $this;
    }

    /**
     * Get affiliatewebsiteurl
     *
     * @return string 
     */
    public function getAffiliatewebsiteurl()
    {
        return $this->affiliatewebsiteurl;
    }

    /**
     * Set affiliateaccounttype
     *
     * @param string $affiliateaccounttype
     * @return Affiliates
     */
    public function setAffiliateaccounttype($affiliateaccounttype)
    {
        $this->affiliateaccounttype = $affiliateaccounttype;
    
        return $this;
    }

    /**
     * Get affiliateaccounttype
     *
     * @return string 
     */
    public function getAffiliateaccounttype()
    {
        return $this->affiliateaccounttype;
    }

    /**
     * Set affiliateaccountname
     *
     * @param string $affiliateaccountname
     * @return Affiliates
     */
    public function setAffiliateaccountname($affiliateaccountname)
    {
        $this->affiliateaccountname = $affiliateaccountname;
    
        return $this;
    }

    /**
     * Get affiliateaccountname
     *
     * @return string 
     */
    public function getAffiliateaccountname()
    {
        return $this->affiliateaccountname;
    }

    /**
     * Set affiliateaccountdetails
     *
     * @param string $affiliateaccountdetails
     * @return Affiliates
     */
    public function setAffiliateaccountdetails($affiliateaccountdetails)
    {
        $this->affiliateaccountdetails = $affiliateaccountdetails;
    
        return $this;
    }

    /**
     * Get affiliateaccountdetails
     *
     * @return string 
     */
    public function getAffiliateaccountdetails()
    {
        return $this->affiliateaccountdetails;
    }

    /**
     * Set affiliatestatus
     *
     * @param string $affiliatestatus
     * @return Affiliates
     */
    public function setAffiliatestatus($affiliatestatus)
    {
        $this->affiliatestatus = $affiliatestatus;
    
        return $this;
    }

    /**
     * Get affiliatestatus
     *
     * @return string 
     */
    public function getAffiliatestatus()
    {
        return $this->affiliatestatus;
    }

    /**
     * Set affiliateregisterdate
     *
     * @param \DateTime $affiliateregisterdate
     * @return Affiliates
     */
    public function setAffiliateregisterdate($affiliateregisterdate)
    {
        $this->affiliateregisterdate = $affiliateregisterdate;
    
        return $this;
    }

    /**
     * Get affiliateregisterdate
     *
     * @return \DateTime 
     */
    public function getAffiliateregisterdate()
    {
        return $this->affiliateregisterdate;
    }

    /**
     * Set affiliatelastaccesed
     *
     * @param \DateTime $affiliatelastaccesed
     * @return Affiliates
     */
    public function setAffiliatelastaccesed($affiliatelastaccesed)
    {
        $this->affiliatelastaccesed = $affiliatelastaccesed;
    
        return $this;
    }

    /**
     * Get affiliatelastaccesed
     *
     * @return \DateTime 
     */
    public function getAffiliatelastaccesed()
    {
        return $this->affiliatelastaccesed;
    }

    /**
     * Set preferredlanguage
     *
     * @param integer $preferredlanguage
     * @return Affiliates
     */
    public function setPreferredlanguage($preferredlanguage)
    {
        $this->preferredlanguage = $preferredlanguage;
    
        return $this;
    }

    /**
     * Get preferredlanguage
     *
     * @return integer 
     */
    public function getPreferredlanguage()
    {
        return $this->preferredlanguage;
    }
}