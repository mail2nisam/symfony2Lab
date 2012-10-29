<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CityLocations
 */
class CityLocations
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
     * @var string $citylocname
     */
    private $citylocname;

    /**
     * @var string $cityloctips
     */
    private $cityloctips;

    /**
     * @var string $cityloclat
     */
    private $cityloclat;

    /**
     * @var string $cityloclng
     */
    private $cityloclng;

    /**
     * @var string $citylocstatus
     */
    private $citylocstatus;


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
     * @return CityLocations
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
     * Set citylocname
     *
     * @param string $citylocname
     * @return CityLocations
     */
    public function setCitylocname($citylocname)
    {
        $this->citylocname = $citylocname;
    
        return $this;
    }

    /**
     * Get citylocname
     *
     * @return string 
     */
    public function getCitylocname()
    {
        return $this->citylocname;
    }

    /**
     * Set cityloctips
     *
     * @param string $cityloctips
     * @return CityLocations
     */
    public function setCityloctips($cityloctips)
    {
        $this->cityloctips = $cityloctips;
    
        return $this;
    }

    /**
     * Get cityloctips
     *
     * @return string 
     */
    public function getCityloctips()
    {
        return $this->cityloctips;
    }

    /**
     * Set cityloclat
     *
     * @param string $cityloclat
     * @return CityLocations
     */
    public function setCityloclat($cityloclat)
    {
        $this->cityloclat = $cityloclat;
    
        return $this;
    }

    /**
     * Get cityloclat
     *
     * @return string 
     */
    public function getCityloclat()
    {
        return $this->cityloclat;
    }

    /**
     * Set cityloclng
     *
     * @param string $cityloclng
     * @return CityLocations
     */
    public function setCityloclng($cityloclng)
    {
        $this->cityloclng = $cityloclng;
    
        return $this;
    }

    /**
     * Get cityloclng
     *
     * @return string 
     */
    public function getCityloclng()
    {
        return $this->cityloclng;
    }

    /**
     * Set citylocstatus
     *
     * @param string $citylocstatus
     * @return CityLocations
     */
    public function setCitylocstatus($citylocstatus)
    {
        $this->citylocstatus = $citylocstatus;
    
        return $this;
    }

    /**
     * Get citylocstatus
     *
     * @return string 
     */
    public function getCitylocstatus()
    {
        return $this->citylocstatus;
    }
}