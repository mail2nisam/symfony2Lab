<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealImages
 */
class DealImages
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
     * @var string $dealimage
     */
    private $dealimage;

    /**
     * @var integer $dealimagepriority
     */
    private $dealimagepriority;

    /**
     * @var string $dealimagestatus
     */
    private $dealimagestatus;


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
     * @return DealImages
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
     * Set dealimage
     *
     * @param string $dealimage
     * @return DealImages
     */
    public function setDealimage($dealimage)
    {
        $this->dealimage = $dealimage;
    
        return $this;
    }

    /**
     * Get dealimage
     *
     * @return string 
     */
    public function getDealimage()
    {
        return $this->dealimage;
    }

    /**
     * Set dealimagepriority
     *
     * @param integer $dealimagepriority
     * @return DealImages
     */
    public function setDealimagepriority($dealimagepriority)
    {
        $this->dealimagepriority = $dealimagepriority;
    
        return $this;
    }

    /**
     * Get dealimagepriority
     *
     * @return integer 
     */
    public function getDealimagepriority()
    {
        return $this->dealimagepriority;
    }

    /**
     * Set dealimagestatus
     *
     * @param string $dealimagestatus
     * @return DealImages
     */
    public function setDealimagestatus($dealimagestatus)
    {
        $this->dealimagestatus = $dealimagestatus;
    
        return $this;
    }

    /**
     * Get dealimagestatus
     *
     * @return string 
     */
    public function getDealimagestatus()
    {
        return $this->dealimagestatus;
    }
}