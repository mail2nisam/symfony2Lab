<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealRequestOptions
 */
class DealRequestOptions
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
     * @var string $dealrequestoptionname
     */
    private $dealrequestoptionname;

    /**
     * @var string $dealrequestoptioncerttitle
     */
    private $dealrequestoptioncerttitle;

    /**
     * @var float $dealrequestoptionregularprice
     */
    private $dealrequestoptionregularprice;

    /**
     * @var float $dealrequestoptiondealprice
     */
    private $dealrequestoptiondealprice;

    /**
     * @var integer $dealrequestoptionquantity
     */
    private $dealrequestoptionquantity;

    /**
     * @var string $dealquantityunlimited
     */
    private $dealquantityunlimited;

    /**
     * @var string $dealrequestoptionstatus
     */
    private $dealrequestoptionstatus;

    /**
     * @var string $dealrequestoptiondefault
     */
    private $dealrequestoptiondefault;


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
     * @return DealRequestOptions
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
     * Set dealrequestoptionname
     *
     * @param string $dealrequestoptionname
     * @return DealRequestOptions
     */
    public function setDealrequestoptionname($dealrequestoptionname)
    {
        $this->dealrequestoptionname = $dealrequestoptionname;
    
        return $this;
    }

    /**
     * Get dealrequestoptionname
     *
     * @return string 
     */
    public function getDealrequestoptionname()
    {
        return $this->dealrequestoptionname;
    }

    /**
     * Set dealrequestoptioncerttitle
     *
     * @param string $dealrequestoptioncerttitle
     * @return DealRequestOptions
     */
    public function setDealrequestoptioncerttitle($dealrequestoptioncerttitle)
    {
        $this->dealrequestoptioncerttitle = $dealrequestoptioncerttitle;
    
        return $this;
    }

    /**
     * Get dealrequestoptioncerttitle
     *
     * @return string 
     */
    public function getDealrequestoptioncerttitle()
    {
        return $this->dealrequestoptioncerttitle;
    }

    /**
     * Set dealrequestoptionregularprice
     *
     * @param float $dealrequestoptionregularprice
     * @return DealRequestOptions
     */
    public function setDealrequestoptionregularprice($dealrequestoptionregularprice)
    {
        $this->dealrequestoptionregularprice = $dealrequestoptionregularprice;
    
        return $this;
    }

    /**
     * Get dealrequestoptionregularprice
     *
     * @return float 
     */
    public function getDealrequestoptionregularprice()
    {
        return $this->dealrequestoptionregularprice;
    }

    /**
     * Set dealrequestoptiondealprice
     *
     * @param float $dealrequestoptiondealprice
     * @return DealRequestOptions
     */
    public function setDealrequestoptiondealprice($dealrequestoptiondealprice)
    {
        $this->dealrequestoptiondealprice = $dealrequestoptiondealprice;
    
        return $this;
    }

    /**
     * Get dealrequestoptiondealprice
     *
     * @return float 
     */
    public function getDealrequestoptiondealprice()
    {
        return $this->dealrequestoptiondealprice;
    }

    /**
     * Set dealrequestoptionquantity
     *
     * @param integer $dealrequestoptionquantity
     * @return DealRequestOptions
     */
    public function setDealrequestoptionquantity($dealrequestoptionquantity)
    {
        $this->dealrequestoptionquantity = $dealrequestoptionquantity;
    
        return $this;
    }

    /**
     * Get dealrequestoptionquantity
     *
     * @return integer 
     */
    public function getDealrequestoptionquantity()
    {
        return $this->dealrequestoptionquantity;
    }

    /**
     * Set dealquantityunlimited
     *
     * @param string $dealquantityunlimited
     * @return DealRequestOptions
     */
    public function setDealquantityunlimited($dealquantityunlimited)
    {
        $this->dealquantityunlimited = $dealquantityunlimited;
    
        return $this;
    }

    /**
     * Get dealquantityunlimited
     *
     * @return string 
     */
    public function getDealquantityunlimited()
    {
        return $this->dealquantityunlimited;
    }

    /**
     * Set dealrequestoptionstatus
     *
     * @param string $dealrequestoptionstatus
     * @return DealRequestOptions
     */
    public function setDealrequestoptionstatus($dealrequestoptionstatus)
    {
        $this->dealrequestoptionstatus = $dealrequestoptionstatus;
    
        return $this;
    }

    /**
     * Get dealrequestoptionstatus
     *
     * @return string 
     */
    public function getDealrequestoptionstatus()
    {
        return $this->dealrequestoptionstatus;
    }

    /**
     * Set dealrequestoptiondefault
     *
     * @param string $dealrequestoptiondefault
     * @return DealRequestOptions
     */
    public function setDealrequestoptiondefault($dealrequestoptiondefault)
    {
        $this->dealrequestoptiondefault = $dealrequestoptiondefault;
    
        return $this;
    }

    /**
     * Get dealrequestoptiondefault
     *
     * @return string 
     */
    public function getDealrequestoptiondefault()
    {
        return $this->dealrequestoptiondefault;
    }
}