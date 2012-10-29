<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealRequestToCategory
 */
class DealRequestToCategory
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
     * @var integer $dealcategoryid
     */
    private $dealcategoryid;


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
     * @return DealRequestToCategory
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
     * Set dealcategoryid
     *
     * @param integer $dealcategoryid
     * @return DealRequestToCategory
     */
    public function setDealcategoryid($dealcategoryid)
    {
        $this->dealcategoryid = $dealcategoryid;
    
        return $this;
    }

    /**
     * Get dealcategoryid
     *
     * @return integer 
     */
    public function getDealcategoryid()
    {
        return $this->dealcategoryid;
    }
    /**
     * @var integer $dealtocategoryid
     */
    private $dealtocategoryid;


    /**
     * Set dealtocategoryid
     *
     * @param integer $dealtocategoryid
     * @return DealRequestToCategory
     */
    public function setDealtocategoryid($dealtocategoryid)
    {
        $this->dealtocategoryid = $dealtocategoryid;
    
        return $this;
    }

    /**
     * Get dealtocategoryid
     *
     * @return integer 
     */
    public function getDealtocategoryid()
    {
        return $this->dealtocategoryid;
    }
}