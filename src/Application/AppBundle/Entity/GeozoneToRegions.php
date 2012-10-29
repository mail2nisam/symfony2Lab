<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\GeozoneToRegions
 */
class GeozoneToRegions
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $geozoneid
     */
    private $geozoneid;

    /**
     * @var integer $stateid
     */
    private $stateid;

    /**
     * @var integer $countryid
     */
    private $countryid;


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
     * Set geozoneid
     *
     * @param integer $geozoneid
     * @return GeozoneToRegions
     */
    public function setGeozoneid($geozoneid)
    {
        $this->geozoneid = $geozoneid;
    
        return $this;
    }

    /**
     * Get geozoneid
     *
     * @return integer 
     */
    public function getGeozoneid()
    {
        return $this->geozoneid;
    }

    /**
     * Set stateid
     *
     * @param integer $stateid
     * @return GeozoneToRegions
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
     * Set countryid
     *
     * @param integer $countryid
     * @return GeozoneToRegions
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
}