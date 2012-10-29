<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\OrderShipping
 */
class OrderShipping
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var string $shippingfname
     */
    private $shippingfname;

    /**
     * @var string $shippinglname
     */
    private $shippinglname;

    /**
     * @var string $shippingcompany
     */
    private $shippingcompany;

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
     * @var string $shippingmethod
     */
    private $shippingmethod;


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
     * Set orderid
     *
     * @param integer $orderid
     * @return OrderShipping
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    
        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set shippingfname
     *
     * @param string $shippingfname
     * @return OrderShipping
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
     * @return OrderShipping
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
     * Set shippingcompany
     *
     * @param string $shippingcompany
     * @return OrderShipping
     */
    public function setShippingcompany($shippingcompany)
    {
        $this->shippingcompany = $shippingcompany;
    
        return $this;
    }

    /**
     * Get shippingcompany
     *
     * @return string 
     */
    public function getShippingcompany()
    {
        return $this->shippingcompany;
    }

    /**
     * Set shippingaddress1
     *
     * @param string $shippingaddress1
     * @return OrderShipping
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
     * @return OrderShipping
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
     * @return OrderShipping
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
     * @return OrderShipping
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
     * @return OrderShipping
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
     * @return OrderShipping
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
     * @return OrderShipping
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

    /**
     * Set shippingmethod
     *
     * @param string $shippingmethod
     * @return OrderShipping
     */
    public function setShippingmethod($shippingmethod)
    {
        $this->shippingmethod = $shippingmethod;
    
        return $this;
    }

    /**
     * Get shippingmethod
     *
     * @return string 
     */
    public function getShippingmethod()
    {
        return $this->shippingmethod;
    }
}