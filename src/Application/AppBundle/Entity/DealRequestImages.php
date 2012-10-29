<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealRequestImages
 */
class DealRequestImages
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $dealrequestid
     */
    private $dealrequestid;

    /**
     * @var string $dealrequestimage
     */
    private $dealrequestimage;

    /**
     * @var integer $dealrequestmagepriority
     */
    private $dealrequestmagepriority;

    /**
     * @var string $dealrequestimagestatus
     */
    private $dealrequestimagestatus;


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
     * Set dealrequestid
     *
     * @param integer $dealrequestid
     * @return DealRequestImages
     */
    public function setDealrequestid($dealrequestid)
    {
        $this->dealrequestid = $dealrequestid;
    
        return $this;
    }

    /**
     * Get dealrequestid
     *
     * @return integer 
     */
    public function getDealrequestid()
    {
        return $this->dealrequestid;
    }

    /**
     * Set dealrequestimage
     *
     * @param string $dealrequestimage
     * @return DealRequestImages
     */
    public function setDealrequestimage($dealrequestimage)
    {
        $this->dealrequestimage = $dealrequestimage;
    
        return $this;
    }

    /**
     * Get dealrequestimage
     *
     * @return string 
     */
    public function getDealrequestimage()
    {
        return $this->dealrequestimage;
    }

    /**
     * Set dealrequestmagepriority
     *
     * @param integer $dealrequestmagepriority
     * @return DealRequestImages
     */
    public function setDealrequestmagepriority($dealrequestmagepriority)
    {
        $this->dealrequestmagepriority = $dealrequestmagepriority;
    
        return $this;
    }

    /**
     * Get dealrequestmagepriority
     *
     * @return integer 
     */
    public function getDealrequestmagepriority()
    {
        return $this->dealrequestmagepriority;
    }

    /**
     * Set dealrequestimagestatus
     *
     * @param string $dealrequestimagestatus
     * @return DealRequestImages
     */
    public function setDealrequestimagestatus($dealrequestimagestatus)
    {
        $this->dealrequestimagestatus = $dealrequestimagestatus;
    
        return $this;
    }

    /**
     * Get dealrequestimagestatus
     *
     * @return string 
     */
    public function getDealrequestimagestatus()
    {
        return $this->dealrequestimagestatus;
    }
}