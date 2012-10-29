<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PromotionalBanners
 */
class PromotionalBanners
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $bannertypeid
     */
    private $bannertypeid;

    /**
     * @var string $bannercaption
     */
    private $bannercaption;

    /**
     * @var string $bannerdisplaytype
     */
    private $bannerdisplaytype;

    /**
     * @var string $bannerscript
     */
    private $bannerscript;

    /**
     * @var string $bannerimage
     */
    private $bannerimage;

    /**
     * @var string $bannerswf
     */
    private $bannerswf;

    /**
     * @var string $bannerurl
     */
    private $bannerurl;

    /**
     * @var string $bannerstatus
     */
    private $bannerstatus;

    /**
     * @var \DateTime $bannercreateddate
     */
    private $bannercreateddate;


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
     * Set bannertypeid
     *
     * @param integer $bannertypeid
     * @return PromotionalBanners
     */
    public function setBannertypeid($bannertypeid)
    {
        $this->bannertypeid = $bannertypeid;
    
        return $this;
    }

    /**
     * Get bannertypeid
     *
     * @return integer 
     */
    public function getBannertypeid()
    {
        return $this->bannertypeid;
    }

    /**
     * Set bannercaption
     *
     * @param string $bannercaption
     * @return PromotionalBanners
     */
    public function setBannercaption($bannercaption)
    {
        $this->bannercaption = $bannercaption;
    
        return $this;
    }

    /**
     * Get bannercaption
     *
     * @return string 
     */
    public function getBannercaption()
    {
        return $this->bannercaption;
    }

    /**
     * Set bannerdisplaytype
     *
     * @param string $bannerdisplaytype
     * @return PromotionalBanners
     */
    public function setBannerdisplaytype($bannerdisplaytype)
    {
        $this->bannerdisplaytype = $bannerdisplaytype;
    
        return $this;
    }

    /**
     * Get bannerdisplaytype
     *
     * @return string 
     */
    public function getBannerdisplaytype()
    {
        return $this->bannerdisplaytype;
    }

    /**
     * Set bannerscript
     *
     * @param string $bannerscript
     * @return PromotionalBanners
     */
    public function setBannerscript($bannerscript)
    {
        $this->bannerscript = $bannerscript;
    
        return $this;
    }

    /**
     * Get bannerscript
     *
     * @return string 
     */
    public function getBannerscript()
    {
        return $this->bannerscript;
    }

    /**
     * Set bannerimage
     *
     * @param string $bannerimage
     * @return PromotionalBanners
     */
    public function setBannerimage($bannerimage)
    {
        $this->bannerimage = $bannerimage;
    
        return $this;
    }

    /**
     * Get bannerimage
     *
     * @return string 
     */
    public function getBannerimage()
    {
        return $this->bannerimage;
    }

    /**
     * Set bannerswf
     *
     * @param string $bannerswf
     * @return PromotionalBanners
     */
    public function setBannerswf($bannerswf)
    {
        $this->bannerswf = $bannerswf;
    
        return $this;
    }

    /**
     * Get bannerswf
     *
     * @return string 
     */
    public function getBannerswf()
    {
        return $this->bannerswf;
    }

    /**
     * Set bannerurl
     *
     * @param string $bannerurl
     * @return PromotionalBanners
     */
    public function setBannerurl($bannerurl)
    {
        $this->bannerurl = $bannerurl;
    
        return $this;
    }

    /**
     * Get bannerurl
     *
     * @return string 
     */
    public function getBannerurl()
    {
        return $this->bannerurl;
    }

    /**
     * Set bannerstatus
     *
     * @param string $bannerstatus
     * @return PromotionalBanners
     */
    public function setBannerstatus($bannerstatus)
    {
        $this->bannerstatus = $bannerstatus;
    
        return $this;
    }

    /**
     * Get bannerstatus
     *
     * @return string 
     */
    public function getBannerstatus()
    {
        return $this->bannerstatus;
    }

    /**
     * Set bannercreateddate
     *
     * @param \DateTime $bannercreateddate
     * @return PromotionalBanners
     */
    public function setBannercreateddate($bannercreateddate)
    {
        $this->bannercreateddate = $bannercreateddate;
    
        return $this;
    }

    /**
     * Get bannercreateddate
     *
     * @return \DateTime 
     */
    public function getBannercreateddate()
    {
        return $this->bannercreateddate;
    }
}