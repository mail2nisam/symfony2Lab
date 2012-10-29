<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UserShipping
 */
class UserShipping
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var string $shippingfname
     */
    private $shippingfname;

    /**
     * @var string $shippinglname
     */
    private $shippinglname;

    /**
     * @var string $shippingaddress1
     */
    private $shippingaddress1;

    /**
     * @var string $shippingaddress2
     */
    private $shippingaddress2;

    /**
     * @var string $shippingcity
     */
    private $shippingcity;

    /**
     * @var string $shippingzip
     */
    private $shippingzip;

    /**
     * @var integer $shippingcountryid
     */
    private $shippingcountryid;

    /**
     * @var integer $shippingstateid
     */
    private $shippingstateid;

    /**
     * @var string $shippingprovince
     */
    private $shippingprovince;


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
     * Set userid
     *
     * @param integer $userid
     * @return UserShipping
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set shippingfname
     *
     * @param string $shippingfname
     * @return UserShipping
     */
    public function setShippingfname($shippingfname)
    {
        $this->shippingfname = $shippingfname;
    
        return $this;
    }

    /**
     * Get shippingfname
     *
     * @return string 
     */
    public function getShippingfname()
    {
        return $this->shippingfname;
    }

    /**
     * Set shippinglname
     *
     * @param string $shippinglname
     * @return UserShipping
     */
    public function setShippinglname($shippinglname)
    {
        $this->shippinglname = $shippinglname;
    
        return $this;
    }

    /**
     * Get shippinglname
     *
     * @return string 
     */
    public function getShippinglname()
    {
        return $this->shippinglname;
    }

    /**
     * Set shippingaddress1
     *
     * @param string $shippingaddress1
     * @return UserShipping
     */
    public function setShippingaddress1($shippingaddress1)
    {
        $this->shippingaddress1 = $shippingaddress1;
    
        return $this;
    }

    /**
     * Get shippingaddress1
     *
     * @return string 
     */
    public function getShippingaddress1()
    {
        return $this->shippingaddress1;
    }

    /**
     * Set shippingaddress2
     *
     * @param string $shippingaddress2
     * @return UserShipping
     */
    public function setShippingaddress2($shippingaddress2)
    {
        $this->shippingaddress2 = $shippingaddress2;
    
        return $this;
    }

    /**
     * Get shippingaddress2
     *
     * @return string 
     */
    public function getShippingaddress2()
    {
        return $this->shippingaddress2;
    }

    /**
     * Set shippingcity
     *
     * @param string $shippingcity
     * @return UserShipping
     */
    public function setShippingcity($shippingcity)
    {
        $this->shippingcity = $shippingcity;
    
        return $this;
    }

    /**
     * Get shippingcity
     *
     * @return string 
     */
    public function getShippingcity()
    {
        return $this->shippingcity;
    }

    /**
     * Set shippingzip
     *
     * @param string $shippingzip
     * @return UserShipping
     */
    public function setShippingzip($shippingzip)
    {
        $this->shippingzip = $shippingzip;
    
        return $this;
    }

    /**
     * Get shippingzip
     *
     * @return string 
     */
    public function getShippingzip()
    {
        return $this->shippingzip;
    }

    /**
     * Set shippingcountryid
     *
     * @param integer $shippingcountryid
     * @return UserShipping
     */
    public function setShippingcountryid($shippingcountryid)
    {
        $this->shippingcountryid = $shippingcountryid;
    
        return $this;
    }

    /**
     * Get shippingcountryid
     *
     * @return integer 
     */
    public function getShippingcountryid()
    {
        return $this->shippingcountryid;
    }

    /**
     * Set shippingstateid
     *
     * @param integer $shippingstateid
     * @return UserShipping
     */
    public function setShippingstateid($shippingstateid)
    {
        $this->shippingstateid = $shippingstateid;
    
        return $this;
    }

    /**
     * Get shippingstateid
     *
     * @return integer 
     */
    public function getShippingstateid()
    {
        return $this->shippingstateid;
    }

    /**
     * Set shippingprovince
     *
     * @param string $shippingprovince
     * @return UserShipping
     */
    public function setShippingprovince($shippingprovince)
    {
        $this->shippingprovince = $shippingprovince;
    
        return $this;
    }

    /**
     * Get shippingprovince
     *
     * @return string 
     */
    public function getShippingprovince()
    {
        return $this->shippingprovince;
    }
}