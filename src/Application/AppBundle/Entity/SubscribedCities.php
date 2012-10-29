<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\SubscribedCities
 */
class SubscribedCities
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $subscid
     */
    private $subscid;

    /**
     * @var integer $cityid
     */
    private $cityid;

    /**
     * @var \DateTime $subscribeddate
     */
    private $subscribeddate;

    /**
     * @var string $subscstatus
     */
    private $subscstatus;

    /**
     * @var \DateTime $unsubscrdate
     */
    private $unsubscrdate;


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
     * Set subscid
     *
     * @param integer $subscid
     * @return SubscribedCities
     */
    public function setSubscid($subscid)
    {
        $this->subscid = $subscid;
    
        return $this;
    }

    /**
     * Get subscid
     *
     * @return integer 
     */
    public function getSubscid()
    {
        return $this->subscid;
    }

    /**
     * Set cityid
     *
     * @param integer $cityid
     * @return SubscribedCities
     */
    public function setCityid($cityid)
    {
        $this->cityid = $cityid;
    
        return $this;
    }

    /**
     * Get cityid
     *
     * @return integer 
     */
    public function getCityid()
    {
        return $this->cityid;
    }

    /**
     * Set subscribeddate
     *
     * @param \DateTime $subscribeddate
     * @return SubscribedCities
     */
    public function setSubscribeddate($subscribeddate)
    {
        $this->subscribeddate = $subscribeddate;
    
        return $this;
    }

    /**
     * Get subscribeddate
     *
     * @return \DateTime 
     */
    public function getSubscribeddate()
    {
        return $this->subscribeddate;
    }

    /**
     * Set subscstatus
     *
     * @param string $subscstatus
     * @return SubscribedCities
     */
    public function setSubscstatus($subscstatus)
    {
        $this->subscstatus = $subscstatus;
    
        return $this;
    }

    /**
     * Get subscstatus
     *
     * @return string 
     */
    public function getSubscstatus()
    {
        return $this->subscstatus;
    }

    /**
     * Set unsubscrdate
     *
     * @param \DateTime $unsubscrdate
     * @return SubscribedCities
     */
    public function setUnsubscrdate($unsubscrdate)
    {
        $this->unsubscrdate = $unsubscrdate;
    
        return $this;
    }

    /**
     * Get unsubscrdate
     *
     * @return \DateTime 
     */
    public function getUnsubscrdate()
    {
        return $this->unsubscrdate;
    }
}