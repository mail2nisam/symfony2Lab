<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateWidgetSize
 */
class AffiliateWidgetSize
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $affiliatedealwidthpx
     */
    private $affiliatedealwidthpx;

    /**
     * @var integer $affiliatedealheightpx
     */
    private $affiliatedealheightpx;

    /**
     * @var string $widgetFormat
     */
    private $widgetFormat;

    /**
     * @var string $widgetscrolling
     */
    private $widgetscrolling;


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
     * Set affiliatedealwidthpx
     *
     * @param integer $affiliatedealwidthpx
     * @return AffiliateWidgetSize
     */
    public function setAffiliatedealwidthpx($affiliatedealwidthpx)
    {
        $this->affiliatedealwidthpx = $affiliatedealwidthpx;
    
        return $this;
    }

    /**
     * Get affiliatedealwidthpx
     *
     * @return integer 
     */
    public function getAffiliatedealwidthpx()
    {
        return $this->affiliatedealwidthpx;
    }

    /**
     * Set affiliatedealheightpx
     *
     * @param integer $affiliatedealheightpx
     * @return AffiliateWidgetSize
     */
    public function setAffiliatedealheightpx($affiliatedealheightpx)
    {
        $this->affiliatedealheightpx = $affiliatedealheightpx;
    
        return $this;
    }

    /**
     * Get affiliatedealheightpx
     *
     * @return integer 
     */
    public function getAffiliatedealheightpx()
    {
        return $this->affiliatedealheightpx;
    }

    /**
     * Set widgetFormat
     *
     * @param string $widgetFormat
     * @return AffiliateWidgetSize
     */
    public function setWidgetFormat($widgetFormat)
    {
        $this->widgetFormat = $widgetFormat;
    
        return $this;
    }

    /**
     * Get widgetFormat
     *
     * @return string 
     */
    public function getWidgetFormat()
    {
        return $this->widgetFormat;
    }

    /**
     * Set widgetscrolling
     *
     * @param string $widgetscrolling
     * @return AffiliateWidgetSize
     */
    public function setWidgetscrolling($widgetscrolling)
    {
        $this->widgetscrolling = $widgetscrolling;
    
        return $this;
    }

    /**
     * Get widgetscrolling
     *
     * @return string 
     */
    public function getWidgetscrolling()
    {
        return $this->widgetscrolling;
    }
}