<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\RelatedProducts
 */
class RelatedProducts
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
     * @var string $relateddealid
     */
    private $relateddealid;


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
     * @return RelatedProducts
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
     * Set relateddealid
     *
     * @param string $relateddealid
     * @return RelatedProducts
     */
    public function setRelateddealid($relateddealid)
    {
        $this->relateddealid = $relateddealid;
    
        return $this;
    }

    /**
     * Get relateddealid
     *
     * @return string 
     */
    public function getRelateddealid()
    {
        return $this->relateddealid;
    }
}