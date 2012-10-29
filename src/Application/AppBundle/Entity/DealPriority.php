<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealPriority
 */
class DealPriority
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
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var integer $dealpriority
     */
    private $dealpriority;


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
     * @return DealPriority
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
     * Set dealid
     *
     * @param integer $dealid
     * @return DealPriority
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
     * Set dealpriority
     *
     * @param integer $dealpriority
     * @return DealPriority
     */
    public function setDealpriority($dealpriority)
    {
        $this->dealpriority = $dealpriority;
    
        return $this;
    }

    /**
     * Get dealpriority
     *
     * @return integer 
     */
    public function getDealpriority()
    {
        return $this->dealpriority;
    }
}