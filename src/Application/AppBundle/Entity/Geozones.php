<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Geozones
 */
class Geozones
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $geozonename
     */
    private $geozonename;

    /**
     * @var string $geozonedescription
     */
    private $geozonedescription;

    /**
     * @var \DateTime $geozoneadded
     */
    private $geozoneadded;

    /**
     * @var \DateTime $geozonemodified
     */
    private $geozonemodified;

    /**
     * @var string $geozonestatus
     */
    private $geozonestatus;


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
     * Set geozonename
     *
     * @param string $geozonename
     * @return Geozones
     */
    public function setGeozonename($geozonename)
    {
        $this->geozonename = $geozonename;
    
        return $this;
    }

    /**
     * Get geozonename
     *
     * @return string 
     */
    public function getGeozonename()
    {
        return $this->geozonename;
    }

    /**
     * Set geozonedescription
     *
     * @param string $geozonedescription
     * @return Geozones
     */
    public function setGeozonedescription($geozonedescription)
    {
        $this->geozonedescription = $geozonedescription;
    
        return $this;
    }

    /**
     * Get geozonedescription
     *
     * @return string 
     */
    public function getGeozonedescription()
    {
        return $this->geozonedescription;
    }

    /**
     * Set geozoneadded
     *
     * @param \DateTime $geozoneadded
     * @return Geozones
     */
    public function setGeozoneadded($geozoneadded)
    {
        $this->geozoneadded = $geozoneadded;
    
        return $this;
    }

    /**
     * Get geozoneadded
     *
     * @return \DateTime 
     */
    public function getGeozoneadded()
    {
        return $this->geozoneadded;
    }

    /**
     * Set geozonemodified
     *
     * @param \DateTime $geozonemodified
     * @return Geozones
     */
    public function setGeozonemodified($geozonemodified)
    {
        $this->geozonemodified = $geozonemodified;
    
        return $this;
    }

    /**
     * Get geozonemodified
     *
     * @return \DateTime 
     */
    public function getGeozonemodified()
    {
        return $this->geozonemodified;
    }

    /**
     * Set geozonestatus
     *
     * @param string $geozonestatus
     * @return Geozones
     */
    public function setGeozonestatus($geozonestatus)
    {
        $this->geozonestatus = $geozonestatus;
    
        return $this;
    }

    /**
     * Get geozonestatus
     *
     * @return string 
     */
    public function getGeozonestatus()
    {
        return $this->geozonestatus;
    }
}