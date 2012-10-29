<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\RequestShippingRates
 */
class RequestShippingRates
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var float $ratenational
     */
    private $ratenational;

    /**
     * @var float $rateinternational
     */
    private $rateinternational;

    /**
     * @var integer $freeshippingminqty
     */
    private $freeshippingminqty;

    /**
     * @var integer $shippingorigincountryid
     */
    private $shippingorigincountryid;


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
     * Set dealid
     *
     * @param integer $dealid
     * @return RequestShippingRates
     */
    public function setDealid($dealid)
    {
        $this->dealid = $dealid;
    
        return $this;
    }

    /**
     * Get dealid
     *
     * @return integer 
     */
    public function getDealid()
    {
        return $this->dealid;
    }

    /**
     * Set ratenational
     *
     * @param float $ratenational
     * @return RequestShippingRates
     */
    public function setRatenational($ratenational)
    {
        $this->ratenational = $ratenational;
    
        return $this;
    }

    /**
     * Get ratenational
     *
     * @return float 
     */
    public function getRatenational()
    {
        return $this->ratenational;
    }

    /**
     * Set rateinternational
     *
     * @param float $rateinternational
     * @return RequestShippingRates
     */
    public function setRateinternational($rateinternational)
    {
        $this->rateinternational = $rateinternational;
    
        return $this;
    }

    /**
     * Get rateinternational
     *
     * @return float 
     */
    public function getRateinternational()
    {
        return $this->rateinternational;
    }

    /**
     * Set freeshippingminqty
     *
     * @param integer $freeshippingminqty
     * @return RequestShippingRates
     */
    public function setFreeshippingminqty($freeshippingminqty)
    {
        $this->freeshippingminqty = $freeshippingminqty;
    
        return $this;
    }

    /**
     * Get freeshippingminqty
     *
     * @return integer 
     */
    public function getFreeshippingminqty()
    {
        return $this->freeshippingminqty;
    }

    /**
     * Set shippingorigincountryid
     *
     * @param integer $shippingorigincountryid
     * @return RequestShippingRates
     */
    public function setShippingorigincountryid($shippingorigincountryid)
    {
        $this->shippingorigincountryid = $shippingorigincountryid;
    
        return $this;
    }

    /**
     * Get shippingorigincountryid
     *
     * @return integer 
     */
    public function getShippingorigincountryid()
    {
        return $this->shippingorigincountryid;
    }
}