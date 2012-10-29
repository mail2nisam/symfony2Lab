<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateVisits
 */
class AffiliateVisits
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $affiliateuserid
     */
    private $affiliateuserid;

    /**
     * @var integer $visitorid
     */
    private $visitorid;

    /**
     * @var integer $widgetid
     */
    private $widgetid;

    /**
     * @var string $visittype
     */
    private $visittype;


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
     * Set affiliateuserid
     *
     * @param integer $affiliateuserid
     * @return AffiliateVisits
     */
    public function setAffiliateuserid($affiliateuserid)
    {
        $this->affiliateuserid = $affiliateuserid;
    
        return $this;
    }

    /**
     * Get affiliateuserid
     *
     * @return integer 
     */
    public function getAffiliateuserid()
    {
        return $this->affiliateuserid;
    }

    /**
     * Set visitorid
     *
     * @param integer $visitorid
     * @return AffiliateVisits
     */
    public function setVisitorid($visitorid)
    {
        $this->visitorid = $visitorid;
    
        return $this;
    }

    /**
     * Get visitorid
     *
     * @return integer 
     */
    public function getVisitorid()
    {
        return $this->visitorid;
    }

    /**
     * Set widgetid
     *
     * @param integer $widgetid
     * @return AffiliateVisits
     */
    public function setWidgetid($widgetid)
    {
        $this->widgetid = $widgetid;
    
        return $this;
    }

    /**
     * Get widgetid
     *
     * @return integer 
     */
    public function getWidgetid()
    {
        return $this->widgetid;
    }

    /**
     * Set visittype
     *
     * @param string $visittype
     * @return AffiliateVisits
     */
    public function setVisittype($visittype)
    {
        $this->visittype = $visittype;
    
        return $this;
    }

    /**
     * Get visittype
     *
     * @return string 
     */
    public function getVisittype()
    {
        return $this->visittype;
    }
}