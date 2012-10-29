<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessToTypes
 */
class BusinessToTypes
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $businessid
     */
    private $businessid;

    /**
     * @var integer $businesstypeid
     */
    private $businesstypeid;


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
     * Set businessid
     *
     * @param integer $businessid
     * @return BusinessToTypes
     */
    public function setBusinessid($businessid)
    {
        $this->businessid = $businessid;
    
        return $this;
    }

    /**
     * Get businessid
     *
     * @return integer 
     */
    public function getBusinessid()
    {
        return $this->businessid;
    }

    /**
     * Set businesstypeid
     *
     * @param integer $businesstypeid
     * @return BusinessToTypes
     */
    public function setBusinesstypeid($businesstypeid)
    {
        $this->businesstypeid = $businesstypeid;
    
        return $this;
    }

    /**
     * Get businesstypeid
     *
     * @return integer 
     */
    public function getBusinesstypeid()
    {
        return $this->businesstypeid;
    }
}