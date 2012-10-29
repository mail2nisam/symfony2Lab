<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealRequestLocations
 */
class DealRequestLocations
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
     * @return DealRequestLocations
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
     * @return DealRequestLocations
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
     * @var Application\AppBundle\Entity\DealRequests
     */
    private $dealrequestid;


    /**
     * Set dealrequestid
     *
     * @param Application\AppBundle\Entity\DealRequests $dealrequestid
     * @return DealRequestLocations
     */
    public function setDealrequestid(\Application\AppBundle\Entity\DealRequests $dealrequestid = null)
    {
        $this->dealrequestid = $dealrequestid;
    
        return $this;
    }

    /**
     * Get dealrequestid
     *
     * @return Application\AppBundle\Entity\DealRequests 
     */
    public function getDealrequestid()
    {
        return $this->dealrequestid;
    }
}