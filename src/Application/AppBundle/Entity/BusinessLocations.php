<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessLocations
 */
class BusinessLocations
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $businessid
     */
    private $businessid;

    /**
     * @var string $locname
     */
    private $locname;

    /**
     * @var string $locaddress1
     */
    private $locaddress1;

    /**
     * @var string $locaddress2
     */
    private $locaddress2;

    /**
     * @var string $loccity
     */
    private $loccity;

    /**
     * @var integer $locstateid
     */
    private $locstateid;

    /**
     * @var string $locprovince
     */
    private $locprovince;

    /**
     * @var integer $loccountryid
     */
    private $loccountryid;

    /**
     * @var string $loczip
     */
    private $loczip;

    /**
     * @var string $loclatitude
     */
    private $loclatitude;

    /**
     * @var string $loclongitude
     */
    private $loclongitude;

    /**
     * @var string $locphone
     */
    private $locphone;

    /**
     * @var string $locemail
     */
    private $locemail;

    /**
     * @var string $locstatus
     */
    private $locstatus;

    /**
     * @var \DateTime $loccreateddate
     */
    private $loccreateddate;

    /**
     * @var \DateTime $locmodifieddate
     */
    private $locmodifieddate;


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
     * Set businessid
     *
     * @param integer $businessid
     * @return BusinessLocations
     */
    public function setBusinessid($businessid)
    {
        $this->businessid = $businessid;
    
        return $this;
    }

    /**
     * Get businessid
     *
     * @return integer 
     */
    public function getBusinessid()
    {
        return $this->businessid;
    }

    /**
     * Set locname
     *
     * @param string $locname
     * @return BusinessLocations
     */
    public function setLocname($locname)
    {
        $this->locname = $locname;
    
        return $this;
    }

    /**
     * Get locname
     *
     * @return string 
     */
    public function getLocname()
    {
        return $this->locname;
    }

    /**
     * Set locaddress1
     *
     * @param string $locaddress1
     * @return BusinessLocations
     */
    public function setLocaddress1($locaddress1)
    {
        $this->locaddress1 = $locaddress1;
    
        return $this;
    }

    /**
     * Get locaddress1
     *
     * @return string 
     */
    public function getLocaddress1()
    {
        return $this->locaddress1;
    }

    /**
     * Set locaddress2
     *
     * @param string $locaddress2
     * @return BusinessLocations
     */
    public function setLocaddress2($locaddress2)
    {
        $this->locaddress2 = $locaddress2;
    
        return $this;
    }

    /**
     * Get locaddress2
     *
     * @return string 
     */
    public function getLocaddress2()
    {
        return $this->locaddress2;
    }

    /**
     * Set loccity
     *
     * @param string $loccity
     * @return BusinessLocations
     */
    public function setLoccity($loccity)
    {
        $this->loccity = $loccity;
    
        return $this;
    }

    /**
     * Get loccity
     *
     * @return string 
     */
    public function getLoccity()
    {
        return $this->loccity;
    }

    /**
     * Set locstateid
     *
     * @param integer $locstateid
     * @return BusinessLocations
     */
    public function setLocstateid($locstateid)
    {
        $this->locstateid = $locstateid;
    
        return $this;
    }

    /**
     * Get locstateid
     *
     * @return integer 
     */
    public function getLocstateid()
    {
        return $this->locstateid;
    }

    /**
     * Set locprovince
     *
     * @param string $locprovince
     * @return BusinessLocations
     */
    public function setLocprovince($locprovince)
    {
        $this->locprovince = $locprovince;
    
        return $this;
    }

    /**
     * Get locprovince
     *
     * @return string 
     */
    public function getLocprovince()
    {
        return $this->locprovince;
    }

    /**
     * Set loccountryid
     *
     * @param integer $loccountryid
     * @return BusinessLocations
     */
    public function setLoccountryid($loccountryid)
    {
        $this->loccountryid = $loccountryid;
    
        return $this;
    }

    /**
     * Get loccountryid
     *
     * @return integer 
     */
    public function getLoccountryid()
    {
        return $this->loccountryid;
    }

    /**
     * Set loczip
     *
     * @param string $loczip
     * @return BusinessLocations
     */
    public function setLoczip($loczip)
    {
        $this->loczip = $loczip;
    
        return $this;
    }

    /**
     * Get loczip
     *
     * @return string 
     */
    public function getLoczip()
    {
        return $this->loczip;
    }

    /**
     * Set loclatitude
     *
     * @param string $loclatitude
     * @return BusinessLocations
     */
    public function setLoclatitude($loclatitude)
    {
        $this->loclatitude = $loclatitude;
    
        return $this;
    }

    /**
     * Get loclatitude
     *
     * @return string 
     */
    public function getLoclatitude()
    {
        return $this->loclatitude;
    }

    /**
     * Set loclongitude
     *
     * @param string $loclongitude
     * @return BusinessLocations
     */
    public function setLoclongitude($loclongitude)
    {
        $this->loclongitude = $loclongitude;
    
        return $this;
    }

    /**
     * Get loclongitude
     *
     * @return string 
     */
    public function getLoclongitude()
    {
        return $this->loclongitude;
    }

    /**
     * Set locphone
     *
     * @param string $locphone
     * @return BusinessLocations
     */
    public function setLocphone($locphone)
    {
        $this->locphone = $locphone;
    
        return $this;
    }

    /**
     * Get locphone
     *
     * @return string 
     */
    public function getLocphone()
    {
        return $this->locphone;
    }

    /**
     * Set locemail
     *
     * @param string $locemail
     * @return BusinessLocations
     */
    public function setLocemail($locemail)
    {
        $this->locemail = $locemail;
    
        return $this;
    }

    /**
     * Get locemail
     *
     * @return string 
     */
    public function getLocemail()
    {
        return $this->locemail;
    }

    /**
     * Set locstatus
     *
     * @param string $locstatus
     * @return BusinessLocations
     */
    public function setLocstatus($locstatus)
    {
        $this->locstatus = $locstatus;
    
        return $this;
    }

    /**
     * Get locstatus
     *
     * @return string 
     */
    public function getLocstatus()
    {
        return $this->locstatus;
    }

    /**
     * Set loccreateddate
     *
     * @param \DateTime $loccreateddate
     * @return BusinessLocations
     */
    public function setLoccreateddate($loccreateddate)
    {
        $this->loccreateddate = $loccreateddate;
    
        return $this;
    }

    /**
     * Get loccreateddate
     *
     * @return \DateTime 
     */
    public function getLoccreateddate()
    {
        return $this->loccreateddate;
    }

    /**
     * Set locmodifieddate
     *
     * @param \DateTime $locmodifieddate
     * @return BusinessLocations
     */
    public function setLocmodifieddate($locmodifieddate)
    {
        $this->locmodifieddate = $locmodifieddate;
    
        return $this;
    }

    /**
     * Get locmodifieddate
     *
     * @return \DateTime 
     */
    public function getLocmodifieddate()
    {
        return $this->locmodifieddate;
    }
}