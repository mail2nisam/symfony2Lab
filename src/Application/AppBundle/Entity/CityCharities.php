<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CityCharities
 */
class CityCharities
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
     * @var integer $charityid
     */
    private $charityid;


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
     * @return CityCharities
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
     * Set charityid
     *
     * @param integer $charityid
     * @return CityCharities
     */
    public function setCharityid($charityid)
    {
        $this->charityid = $charityid;
    
        return $this;
    }

    /**
     * Get charityid
     *
     * @return integer 
     */
    public function getCharityid()
    {
        return $this->charityid;
    }
}