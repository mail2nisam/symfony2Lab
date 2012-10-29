<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealImpressions
 */
class DealImpressions
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
     * @var string $visitoridlist
     */
    private $visitoridlist;

    /**
     * @var integer $thumbviewcount
     */
    private $thumbviewcount;

    /**
     * @var \DateTime $visitdate
     */
    private $visitdate;


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
     * @return DealImpressions
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
     * Set visitoridlist
     *
     * @param string $visitoridlist
     * @return DealImpressions
     */
    public function setVisitoridlist($visitoridlist)
    {
        $this->visitoridlist = $visitoridlist;
    
        return $this;
    }

    /**
     * Get visitoridlist
     *
     * @return string 
     */
    public function getVisitoridlist()
    {
        return $this->visitoridlist;
    }

    /**
     * Set thumbviewcount
     *
     * @param integer $thumbviewcount
     * @return DealImpressions
     */
    public function setThumbviewcount($thumbviewcount)
    {
        $this->thumbviewcount = $thumbviewcount;
    
        return $this;
    }

    /**
     * Get thumbviewcount
     *
     * @return integer 
     */
    public function getThumbviewcount()
    {
        return $this->thumbviewcount;
    }

    /**
     * Set visitdate
     *
     * @param \DateTime $visitdate
     * @return DealImpressions
     */
    public function setVisitdate($visitdate)
    {
        $this->visitdate = $visitdate;
    
        return $this;
    }

    /**
     * Get visitdate
     *
     * @return \DateTime 
     */
    public function getVisitdate()
    {
        return $this->visitdate;
    }
}