<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\SubscribedDealTypes
 */
class SubscribedDealTypes
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $subscid
     */
    private $subscid;

    /**
     * @var string $dealtypekey
     */
    private $dealtypekey;


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
     * Set subscid
     *
     * @param integer $subscid
     * @return SubscribedDealTypes
     */
    public function setSubscid($subscid)
    {
        $this->subscid = $subscid;
    
        return $this;
    }

    /**
     * Get subscid
     *
     * @return integer 
     */
    public function getSubscid()
    {
        return $this->subscid;
    }

    /**
     * Set dealtypekey
     *
     * @param string $dealtypekey
     * @return SubscribedDealTypes
     */
    public function setDealtypekey($dealtypekey)
    {
        $this->dealtypekey = $dealtypekey;
    
        return $this;
    }

    /**
     * Get dealtypekey
     *
     * @return string 
     */
    public function getDealtypekey()
    {
        return $this->dealtypekey;
    }
}