<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealToCategory
 */
class DealToCategory
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
     * @return DealToCategory
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
     * @return DealToCategory
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
}