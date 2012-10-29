<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateWidgetDetails
 */
class AffiliateWidgetDetails
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $widgetname
     */
    private $widgetname;

    /**
     * @var string $widgetdealcategories
     */
    private $widgetdealcategories;

    /**
     * @var string $widgetcities
     */
    private $widgetcities;

    /**
     * @var string $widgettype
     */
    private $widgettype;

    /**
     * @var string $affiliatedealsizeid
     */
    private $affiliatedealsizeid;

    /**
     * @var integer $affiliateuserid
     */
    private $affiliateuserid;

    /**
     * @var integer $languageid
     */
    private $languageid;

    /**
     * @var string $affiliatewidgetcontenttype
     */
    private $affiliatewidgetcontenttype;

    /**
     * @var string $widgetcolors
     */
    private $widgetcolors;

    /**
     * @var \DateTime $affiliatewidgetcreateddate
     */
    private $affiliatewidgetcreateddate;

    /**
     * @var string $affiliatewidgetotherdealtypes
     */
    private $affiliatewidgetotherdealtypes;

    /**
     * @var string $widgetscrolling
     */
    private $widgetscrolling;

    /**
     * @var string $widgetFormat
     */
    private $widgetFormat;

    /**
     * @var string $widgetstatus
     */
    private $widgetstatus;


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
     * Set widgetname
     *
     * @param string $widgetname
     * @return AffiliateWidgetDetails
     */
    public function setWidgetname($widgetname)
    {
        $this->widgetname = $widgetname;
    
        return $this;
    }

    /**
     * Get widgetname
     *
     * @return string 
     */
    public function getWidgetname()
    {
        return $this->widgetname;
    }

    /**
     * Set widgetdealcategories
     *
     * @param string $widgetdealcategories
     * @return AffiliateWidgetDetails
     */
    public function setWidgetdealcategories($widgetdealcategories)
    {
        $this->widgetdealcategories = $widgetdealcategories;
    
        return $this;
    }

    /**
     * Get widgetdealcategories
     *
     * @return string 
     */
    public function getWidgetdealcategories()
    {
        return $this->widgetdealcategories;
    }

    /**
     * Set widgetcities
     *
     * @param string $widgetcities
     * @return AffiliateWidgetDetails
     */
    public function setWidgetcities($widgetcities)
    {
        $this->widgetcities = $widgetcities;
    
        return $this;
    }

    /**
     * Get widgetcities
     *
     * @return string 
     */
    public function getWidgetcities()
    {
        return $this->widgetcities;
    }

    /**
     * Set widgettype
     *
     * @param string $widgettype
     * @return AffiliateWidgetDetails
     */
    public function setWidgettype($widgettype)
    {
        $this->widgettype = $widgettype;
    
        return $this;
    }

    /**
     * Get widgettype
     *
     * @return string 
     */
    public function getWidgettype()
    {
        return $this->widgettype;
    }

    /**
     * Set affiliatedealsizeid
     *
     * @param string $affiliatedealsizeid
     * @return AffiliateWidgetDetails
     */
    public function setAffiliatedealsizeid($affiliatedealsizeid)
    {
        $this->affiliatedealsizeid = $affiliatedealsizeid;
    
        return $this;
    }

    /**
     * Get affiliatedealsizeid
     *
     * @return string 
     */
    public function getAffiliatedealsizeid()
    {
        return $this->affiliatedealsizeid;
    }

    /**
     * Set affiliateuserid
     *
     * @param integer $affiliateuserid
     * @return AffiliateWidgetDetails
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
     * Set languageid
     *
     * @param integer $languageid
     * @return AffiliateWidgetDetails
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;
    
        return $this;
    }

    /**
     * Get languageid
     *
     * @return integer 
     */
    public function getLanguageid()
    {
        return $this->languageid;
    }

    /**
     * Set affiliatewidgetcontenttype
     *
     * @param string $affiliatewidgetcontenttype
     * @return AffiliateWidgetDetails
     */
    public function setAffiliatewidgetcontenttype($affiliatewidgetcontenttype)
    {
        $this->affiliatewidgetcontenttype = $affiliatewidgetcontenttype;
    
        return $this;
    }

    /**
     * Get affiliatewidgetcontenttype
     *
     * @return string 
     */
    public function getAffiliatewidgetcontenttype()
    {
        return $this->affiliatewidgetcontenttype;
    }

    /**
     * Set widgetcolors
     *
     * @param string $widgetcolors
     * @return AffiliateWidgetDetails
     */
    public function setWidgetcolors($widgetcolors)
    {
        $this->widgetcolors = $widgetcolors;
    
        return $this;
    }

    /**
     * Get widgetcolors
     *
     * @return string 
     */
    public function getWidgetcolors()
    {
        return $this->widgetcolors;
    }

    /**
     * Set affiliatewidgetcreateddate
     *
     * @param \DateTime $affiliatewidgetcreateddate
     * @return AffiliateWidgetDetails
     */
    public function setAffiliatewidgetcreateddate($affiliatewidgetcreateddate)
    {
        $this->affiliatewidgetcreateddate = $affiliatewidgetcreateddate;
    
        return $this;
    }

    /**
     * Get affiliatewidgetcreateddate
     *
     * @return \DateTime 
     */
    public function getAffiliatewidgetcreateddate()
    {
        return $this->affiliatewidgetcreateddate;
    }

    /**
     * Set affiliatewidgetotherdealtypes
     *
     * @param string $affiliatewidgetotherdealtypes
     * @return AffiliateWidgetDetails
     */
    public function setAffiliatewidgetotherdealtypes($affiliatewidgetotherdealtypes)
    {
        $this->affiliatewidgetotherdealtypes = $affiliatewidgetotherdealtypes;
    
        return $this;
    }

    /**
     * Get affiliatewidgetotherdealtypes
     *
     * @return string 
     */
    public function getAffiliatewidgetotherdealtypes()
    {
        return $this->affiliatewidgetotherdealtypes;
    }

    /**
     * Set widgetscrolling
     *
     * @param string $widgetscrolling
     * @return AffiliateWidgetDetails
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

    /**
     * Set widgetFormat
     *
     * @param string $widgetFormat
     * @return AffiliateWidgetDetails
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
     * Set widgetstatus
     *
     * @param string $widgetstatus
     * @return AffiliateWidgetDetails
     */
    public function setWidgetstatus($widgetstatus)
    {
        $this->widgetstatus = $widgetstatus;
    
        return $this;
    }

    /**
     * Get widgetstatus
     *
     * @return string 
     */
    public function getWidgetstatus()
    {
        return $this->widgetstatus;
    }
}