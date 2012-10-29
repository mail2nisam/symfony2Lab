<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessRequests
 */
class BusinessRequests
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $businesstypeid
     */
    private $businesstypeid;

    /**
     * @var string $businesstypeother
     */
    private $businesstypeother;

    /**
     * @var string $businessreqname
     */
    private $businessreqname;

    /**
     * @var string $businessreqfirstname
     */
    private $businessreqfirstname;

    /**
     * @var string $businessreqlastname
     */
    private $businessreqlastname;

    /**
     * @var string $businessreqaddress1
     */
    private $businessreqaddress1;

    /**
     * @var string $businessreqaddress2
     */
    private $businessreqaddress2;

    /**
     * @var string $businessreqcity
     */
    private $businessreqcity;

    /**
     * @var integer $businessreqcountryid
     */
    private $businessreqcountryid;

    /**
     * @var integer $businessreqstateid
     */
    private $businessreqstateid;

    /**
     * @var string $businessreqprovince
     */
    private $businessreqprovince;

    /**
     * @var string $businessreqphone
     */
    private $businessreqphone;

    /**
     * @var string $businessreqzip
     */
    private $businessreqzip;

    /**
     * @var string $businessreqemail
     */
    private $businessreqemail;

    /**
     * @var string $businessreqwebsite
     */
    private $businessreqwebsite;

    /**
     * @var string $businessreqcomments
     */
    private $businessreqcomments;

    /**
     * @var string $periodofbusiness
     */
    private $periodofbusiness;

    /**
     * @var string $hearabout
     */
    private $hearabout;

    /**
     * @var \DateTime $businessrequestdate
     */
    private $businessrequestdate;

    /**
     * @var string $businessreqstatus
     */
    private $businessreqstatus;

    /**
     * @var \DateTime $requpdatedate
     */
    private $requpdatedate;

    /**
     * @var integer $businessreqdefaultlanguageid
     */
    private $businessreqdefaultlanguageid;


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
     * Set businesstypeid
     *
     * @param integer $businesstypeid
     * @return BusinessRequests
     */
    public function setBusinesstypeid($businesstypeid)
    {
        $this->businesstypeid = $businesstypeid;
    
        return $this;
    }

    /**
     * Get businesstypeid
     *
     * @return integer 
     */
    public function getBusinesstypeid()
    {
        return $this->businesstypeid;
    }

    /**
     * Set businesstypeother
     *
     * @param string $businesstypeother
     * @return BusinessRequests
     */
    public function setBusinesstypeother($businesstypeother)
    {
        $this->businesstypeother = $businesstypeother;
    
        return $this;
    }

    /**
     * Get businesstypeother
     *
     * @return string 
     */
    public function getBusinesstypeother()
    {
        return $this->businesstypeother;
    }

    /**
     * Set businessreqname
     *
     * @param string $businessreqname
     * @return BusinessRequests
     */
    public function setBusinessreqname($businessreqname)
    {
        $this->businessreqname = $businessreqname;
    
        return $this;
    }

    /**
     * Get businessreqname
     *
     * @return string 
     */
    public function getBusinessreqname()
    {
        return $this->businessreqname;
    }

    /**
     * Set businessreqfirstname
     *
     * @param string $businessreqfirstname
     * @return BusinessRequests
     */
    public function setBusinessreqfirstname($businessreqfirstname)
    {
        $this->businessreqfirstname = $businessreqfirstname;
    
        return $this;
    }

    /**
     * Get businessreqfirstname
     *
     * @return string 
     */
    public function getBusinessreqfirstname()
    {
        return $this->businessreqfirstname;
    }

    /**
     * Set businessreqlastname
     *
     * @param string $businessreqlastname
     * @return BusinessRequests
     */
    public function setBusinessreqlastname($businessreqlastname)
    {
        $this->businessreqlastname = $businessreqlastname;
    
        return $this;
    }

    /**
     * Get businessreqlastname
     *
     * @return string 
     */
    public function getBusinessreqlastname()
    {
        return $this->businessreqlastname;
    }

    /**
     * Set businessreqaddress1
     *
     * @param string $businessreqaddress1
     * @return BusinessRequests
     */
    public function setBusinessreqaddress1($businessreqaddress1)
    {
        $this->businessreqaddress1 = $businessreqaddress1;
    
        return $this;
    }

    /**
     * Get businessreqaddress1
     *
     * @return string 
     */
    public function getBusinessreqaddress1()
    {
        return $this->businessreqaddress1;
    }

    /**
     * Set businessreqaddress2
     *
     * @param string $businessreqaddress2
     * @return BusinessRequests
     */
    public function setBusinessreqaddress2($businessreqaddress2)
    {
        $this->businessreqaddress2 = $businessreqaddress2;
    
        return $this;
    }

    /**
     * Get businessreqaddress2
     *
     * @return string 
     */
    public function getBusinessreqaddress2()
    {
        return $this->businessreqaddress2;
    }

    /**
     * Set businessreqcity
     *
     * @param string $businessreqcity
     * @return BusinessRequests
     */
    public function setBusinessreqcity($businessreqcity)
    {
        $this->businessreqcity = $businessreqcity;
    
        return $this;
    }

    /**
     * Get businessreqcity
     *
     * @return string 
     */
    public function getBusinessreqcity()
    {
        return $this->businessreqcity;
    }

    /**
     * Set businessreqcountryid
     *
     * @param integer $businessreqcountryid
     * @return BusinessRequests
     */
    public function setBusinessreqcountryid($businessreqcountryid)
    {
        $this->businessreqcountryid = $businessreqcountryid;
    
        return $this;
    }

    /**
     * Get businessreqcountryid
     *
     * @return integer 
     */
    public function getBusinessreqcountryid()
    {
        return $this->businessreqcountryid;
    }

    /**
     * Set businessreqstateid
     *
     * @param integer $businessreqstateid
     * @return BusinessRequests
     */
    public function setBusinessreqstateid($businessreqstateid)
    {
        $this->businessreqstateid = $businessreqstateid;
    
        return $this;
    }

    /**
     * Get businessreqstateid
     *
     * @return integer 
     */
    public function getBusinessreqstateid()
    {
        return $this->businessreqstateid;
    }

    /**
     * Set businessreqprovince
     *
     * @param string $businessreqprovince
     * @return BusinessRequests
     */
    public function setBusinessreqprovince($businessreqprovince)
    {
        $this->businessreqprovince = $businessreqprovince;
    
        return $this;
    }

    /**
     * Get businessreqprovince
     *
     * @return string 
     */
    public function getBusinessreqprovince()
    {
        return $this->businessreqprovince;
    }

    /**
     * Set businessreqphone
     *
     * @param string $businessreqphone
     * @return BusinessRequests
     */
    public function setBusinessreqphone($businessreqphone)
    {
        $this->businessreqphone = $businessreqphone;
    
        return $this;
    }

    /**
     * Get businessreqphone
     *
     * @return string 
     */
    public function getBusinessreqphone()
    {
        return $this->businessreqphone;
    }

    /**
     * Set businessreqzip
     *
     * @param string $businessreqzip
     * @return BusinessRequests
     */
    public function setBusinessreqzip($businessreqzip)
    {
        $this->businessreqzip = $businessreqzip;
    
        return $this;
    }

    /**
     * Get businessreqzip
     *
     * @return string 
     */
    public function getBusinessreqzip()
    {
        return $this->businessreqzip;
    }

    /**
     * Set businessreqemail
     *
     * @param string $businessreqemail
     * @return BusinessRequests
     */
    public function setBusinessreqemail($businessreqemail)
    {
        $this->businessreqemail = $businessreqemail;
    
        return $this;
    }

    /**
     * Get businessreqemail
     *
     * @return string 
     */
    public function getBusinessreqemail()
    {
        return $this->businessreqemail;
    }

    /**
     * Set businessreqwebsite
     *
     * @param string $businessreqwebsite
     * @return BusinessRequests
     */
    public function setBusinessreqwebsite($businessreqwebsite)
    {
        $this->businessreqwebsite = $businessreqwebsite;
    
        return $this;
    }

    /**
     * Get businessreqwebsite
     *
     * @return string 
     */
    public function getBusinessreqwebsite()
    {
        return $this->businessreqwebsite;
    }

    /**
     * Set businessreqcomments
     *
     * @param string $businessreqcomments
     * @return BusinessRequests
     */
    public function setBusinessreqcomments($businessreqcomments)
    {
        $this->businessreqcomments = $businessreqcomments;
    
        return $this;
    }

    /**
     * Get businessreqcomments
     *
     * @return string 
     */
    public function getBusinessreqcomments()
    {
        return $this->businessreqcomments;
    }

    /**
     * Set periodofbusiness
     *
     * @param string $periodofbusiness
     * @return BusinessRequests
     */
    public function setPeriodofbusiness($periodofbusiness)
    {
        $this->periodofbusiness = $periodofbusiness;
    
        return $this;
    }

    /**
     * Get periodofbusiness
     *
     * @return string 
     */
    public function getPeriodofbusiness()
    {
        return $this->periodofbusiness;
    }

    /**
     * Set hearabout
     *
     * @param string $hearabout
     * @return BusinessRequests
     */
    public function setHearabout($hearabout)
    {
        $this->hearabout = $hearabout;
    
        return $this;
    }

    /**
     * Get hearabout
     *
     * @return string 
     */
    public function getHearabout()
    {
        return $this->hearabout;
    }

    /**
     * Set businessrequestdate
     *
     * @param \DateTime $businessrequestdate
     * @return BusinessRequests
     */
    public function setBusinessrequestdate($businessrequestdate)
    {
        $this->businessrequestdate = $businessrequestdate;
    
        return $this;
    }

    /**
     * Get businessrequestdate
     *
     * @return \DateTime 
     */
    public function getBusinessrequestdate()
    {
        return $this->businessrequestdate;
    }

    /**
     * Set businessreqstatus
     *
     * @param string $businessreqstatus
     * @return BusinessRequests
     */
    public function setBusinessreqstatus($businessreqstatus)
    {
        $this->businessreqstatus = $businessreqstatus;
    
        return $this;
    }

    /**
     * Get businessreqstatus
     *
     * @return string 
     */
    public function getBusinessreqstatus()
    {
        return $this->businessreqstatus;
    }

    /**
     * Set requpdatedate
     *
     * @param \DateTime $requpdatedate
     * @return BusinessRequests
     */
    public function setRequpdatedate($requpdatedate)
    {
        $this->requpdatedate = $requpdatedate;
    
        return $this;
    }

    /**
     * Get requpdatedate
     *
     * @return \DateTime 
     */
    public function getRequpdatedate()
    {
        return $this->requpdatedate;
    }

    /**
     * Set businessreqdefaultlanguageid
     *
     * @param integer $businessreqdefaultlanguageid
     * @return BusinessRequests
     */
    public function setBusinessreqdefaultlanguageid($businessreqdefaultlanguageid)
    {
        $this->businessreqdefaultlanguageid = $businessreqdefaultlanguageid;
    
        return $this;
    }

    /**
     * Get businessreqdefaultlanguageid
     *
     * @return integer 
     */
    public function getBusinessreqdefaultlanguageid()
    {
        return $this->businessreqdefaultlanguageid;
    }
}