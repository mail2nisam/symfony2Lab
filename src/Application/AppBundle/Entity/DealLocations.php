<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealLocations
 */
class DealLocations
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $cityid
     */
    private $cityid;

    /**
     * @var integer $locid
     */
    private $locid;


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
     * Set cityid
     *
     * @param integer $cityid
     * @return DealLocations
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
     * Set locid
     *
     * @param integer $locid
     * @return DealLocations
     */
    public function setLocid($locid)
    {
        $this->locid = $locid;
    
        return $this;
    }

    /**
     * Get locid
     *
     * @return integer 
     */
    public function getLocid()
    {
        return $this->locid;
    }
    /**
     * @var Application\AppBundle\Entity\Deals
     */
    private $dealid;


    /**
     * Set dealid
     *
     * @param Application\AppBundle\Entity\Deals $dealid
     * @return DealLocations
     */
    public function setDealid(\Application\AppBundle\Entity\Deals $dealid = null)
    {
        $this->dealid = $dealid;
    
        return $this;
    }

    /**
     * Get dealid
     *
     * @return Application\AppBundle\Entity\Deals 
     */
    public function getDealid()
    {
        return $this->dealid;
    }
}