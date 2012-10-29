<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Charities
 */
class Charities
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $charitytitle
     */
    private $charitytitle;

    /**
     * @var string $charityaddress1
     */
    private $charityaddress1;

    /**
     * @var string $charityaddress2
     */
    private $charityaddress2;

    /**
     * @var string $charitycity
     */
    private $charitycity;

    /**
     * @var integer $stateid
     */
    private $stateid;

    /**
     * @var string $charityprovince
     */
    private $charityprovince;

    /**
     * @var integer $countryid
     */
    private $countryid;

    /**
     * @var string $charityzip
     */
    private $charityzip;

    /**
     * @var string $charityphone
     */
    private $charityphone;

    /**
     * @var string $charityfax
     */
    private $charityfax;

    /**
     * @var string $charityemail
     */
    private $charityemail;

    /**
     * @var string $charitywebsite
     */
    private $charitywebsite;

    /**
     * @var string $charitydescription
     */
    private $charitydescription;

    /**
     * @var string $charitylogo
     */
    private $charitylogo;

    /**
     * @var string $charityaccountname
     */
    private $charityaccountname;

    /**
     * @var string $charityaccounttype
     */
    private $charityaccounttype;

    /**
     * @var string $charityaccountdetails
     */
    private $charityaccountdetails;

    /**
     * @var string $charitystatus
     */
    private $charitystatus;

    /**
     * @var \DateTime $charitycreateddate
     */
    private $charitycreateddate;

    /**
     * @var \DateTime $charityupdateddate
     */
    private $charityupdateddate;


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
     * Set charitytitle
     *
     * @param string $charitytitle
     * @return Charities
     */
    public function setCharitytitle($charitytitle)
    {
        $this->charitytitle = $charitytitle;
    
        return $this;
    }

    /**
     * Get charitytitle
     *
     * @return string 
     */
    public function getCharitytitle()
    {
        return $this->charitytitle;
    }

    /**
     * Set charityaddress1
     *
     * @param string $charityaddress1
     * @return Charities
     */
    public function setCharityaddress1($charityaddress1)
    {
        $this->charityaddress1 = $charityaddress1;
    
        return $this;
    }

    /**
     * Get charityaddress1
     *
     * @return string 
     */
    public function getCharityaddress1()
    {
        return $this->charityaddress1;
    }

    /**
     * Set charityaddress2
     *
     * @param string $charityaddress2
     * @return Charities
     */
    public function setCharityaddress2($charityaddress2)
    {
        $this->charityaddress2 = $charityaddress2;
    
        return $this;
    }

    /**
     * Get charityaddress2
     *
     * @return string 
     */
    public function getCharityaddress2()
    {
        return $this->charityaddress2;
    }

    /**
     * Set charitycity
     *
     * @param string $charitycity
     * @return Charities
     */
    public function setCharitycity($charitycity)
    {
        $this->charitycity = $charitycity;
    
        return $this;
    }

    /**
     * Get charitycity
     *
     * @return string 
     */
    public function getCharitycity()
    {
        return $this->charitycity;
    }

    /**
     * Set stateid
     *
     * @param integer $stateid
     * @return Charities
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
     * Set charityprovince
     *
     * @param string $charityprovince
     * @return Charities
     */
    public function setCharityprovince($charityprovince)
    {
        $this->charityprovince = $charityprovince;
    
        return $this;
    }

    /**
     * Get charityprovince
     *
     * @return string 
     */
    public function getCharityprovince()
    {
        return $this->charityprovince;
    }

    /**
     * Set countryid
     *
     * @param integer $countryid
     * @return Charities
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
     * Set charityzip
     *
     * @param string $charityzip
     * @return Charities
     */
    public function setCharityzip($charityzip)
    {
        $this->charityzip = $charityzip;
    
        return $this;
    }

    /**
     * Get charityzip
     *
     * @return string 
     */
    public function getCharityzip()
    {
        return $this->charityzip;
    }

    /**
     * Set charityphone
     *
     * @param string $charityphone
     * @return Charities
     */
    public function setCharityphone($charityphone)
    {
        $this->charityphone = $charityphone;
    
        return $this;
    }

    /**
     * Get charityphone
     *
     * @return string 
     */
    public function getCharityphone()
    {
        return $this->charityphone;
    }

    /**
     * Set charityfax
     *
     * @param string $charityfax
     * @return Charities
     */
    public function setCharityfax($charityfax)
    {
        $this->charityfax = $charityfax;
    
        return $this;
    }

    /**
     * Get charityfax
     *
     * @return string 
     */
    public function getCharityfax()
    {
        return $this->charityfax;
    }

    /**
     * Set charityemail
     *
     * @param string $charityemail
     * @return Charities
     */
    public function setCharityemail($charityemail)
    {
        $this->charityemail = $charityemail;
    
        return $this;
    }

    /**
     * Get charityemail
     *
     * @return string 
     */
    public function getCharityemail()
    {
        return $this->charityemail;
    }

    /**
     * Set charitywebsite
     *
     * @param string $charitywebsite
     * @return Charities
     */
    public function setCharitywebsite($charitywebsite)
    {
        $this->charitywebsite = $charitywebsite;
    
        return $this;
    }

    /**
     * Get charitywebsite
     *
     * @return string 
     */
    public function getCharitywebsite()
    {
        return $this->charitywebsite;
    }

    /**
     * Set charitydescription
     *
     * @param string $charitydescription
     * @return Charities
     */
    public function setCharitydescription($charitydescription)
    {
        $this->charitydescription = $charitydescription;
    
        return $this;
    }

    /**
     * Get charitydescription
     *
     * @return string 
     */
    public function getCharitydescription()
    {
        return $this->charitydescription;
    }

    /**
     * Set charitylogo
     *
     * @param string $charitylogo
     * @return Charities
     */
    public function setCharitylogo($charitylogo)
    {
        $this->charitylogo = $charitylogo;
    
        return $this;
    }

    /**
     * Get charitylogo
     *
     * @return string 
     */
    public function getCharitylogo()
    {
        return $this->charitylogo;
    }

    /**
     * Set charityaccountname
     *
     * @param string $charityaccountname
     * @return Charities
     */
    public function setCharityaccountname($charityaccountname)
    {
        $this->charityaccountname = $charityaccountname;
    
        return $this;
    }

    /**
     * Get charityaccountname
     *
     * @return string 
     */
    public function getCharityaccountname()
    {
        return $this->charityaccountname;
    }

    /**
     * Set charityaccounttype
     *
     * @param string $charityaccounttype
     * @return Charities
     */
    public function setCharityaccounttype($charityaccounttype)
    {
        $this->charityaccounttype = $charityaccounttype;
    
        return $this;
    }

    /**
     * Get charityaccounttype
     *
     * @return string 
     */
    public function getCharityaccounttype()
    {
        return $this->charityaccounttype;
    }

    /**
     * Set charityaccountdetails
     *
     * @param string $charityaccountdetails
     * @return Charities
     */
    public function setCharityaccountdetails($charityaccountdetails)
    {
        $this->charityaccountdetails = $charityaccountdetails;
    
        return $this;
    }

    /**
     * Get charityaccountdetails
     *
     * @return string 
     */
    public function getCharityaccountdetails()
    {
        return $this->charityaccountdetails;
    }

    /**
     * Set charitystatus
     *
     * @param string $charitystatus
     * @return Charities
     */
    public function setCharitystatus($charitystatus)
    {
        $this->charitystatus = $charitystatus;
    
        return $this;
    }

    /**
     * Get charitystatus
     *
     * @return string 
     */
    public function getCharitystatus()
    {
        return $this->charitystatus;
    }

    /**
     * Set charitycreateddate
     *
     * @param \DateTime $charitycreateddate
     * @return Charities
     */
    public function setCharitycreateddate($charitycreateddate)
    {
        $this->charitycreateddate = $charitycreateddate;
    
        return $this;
    }

    /**
     * Get charitycreateddate
     *
     * @return \DateTime 
     */
    public function getCharitycreateddate()
    {
        return $this->charitycreateddate;
    }

    /**
     * Set charityupdateddate
     *
     * @param \DateTime $charityupdateddate
     * @return Charities
     */
    public function setCharityupdateddate($charityupdateddate)
    {
        $this->charityupdateddate = $charityupdateddate;
    
        return $this;
    }

    /**
     * Get charityupdateddate
     *
     * @return \DateTime 
     */
    public function getCharityupdateddate()
    {
        return $this->charityupdateddate;
    }
}