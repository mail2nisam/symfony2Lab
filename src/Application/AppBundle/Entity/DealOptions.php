<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealOptions
 */
class DealOptions
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
     * @var string $dealoptionname
     */
    private $dealoptionname;

    /**
     * @var string $dealoptioncerttitle
     */
    private $dealoptioncerttitle;

    /**
     * @var float $dealoptionregularprice
     */
    private $dealoptionregularprice;

    /**
     * @var float $dealoptiondealprice
     */
    private $dealoptiondealprice;

    /**
     * @var string $dealoptionquantity
     */
    private $dealoptionquantity;

    /**
     * @var string $dealquantityunlimited
     */
    private $dealquantityunlimited;

    /**
     * @var string $dealoptionstatus
     */
    private $dealoptionstatus;

    /**
     * @var string $dealoptiondefault
     */
    private $dealoptiondefault;


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
     * @return DealOptions
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
     * Set dealoptionname
     *
     * @param string $dealoptionname
     * @return DealOptions
     */
    public function setDealoptionname($dealoptionname)
    {
        $this->dealoptionname = $dealoptionname;
    
        return $this;
    }

    /**
     * Get dealoptionname
     *
     * @return string 
     */
    public function getDealoptionname()
    {
        return $this->dealoptionname;
    }

    /**
     * Set dealoptioncerttitle
     *
     * @param string $dealoptioncerttitle
     * @return DealOptions
     */
    public function setDealoptioncerttitle($dealoptioncerttitle)
    {
        $this->dealoptioncerttitle = $dealoptioncerttitle;
    
        return $this;
    }

    /**
     * Get dealoptioncerttitle
     *
     * @return string 
     */
    public function getDealoptioncerttitle()
    {
        return $this->dealoptioncerttitle;
    }

    /**
     * Set dealoptionregularprice
     *
     * @param float $dealoptionregularprice
     * @return DealOptions
     */
    public function setDealoptionregularprice($dealoptionregularprice)
    {
        $this->dealoptionregularprice = $dealoptionregularprice;
    
        return $this;
    }

    /**
     * Get dealoptionregularprice
     *
     * @return float 
     */
    public function getDealoptionregularprice()
    {
        return $this->dealoptionregularprice;
    }

    /**
     * Set dealoptiondealprice
     *
     * @param float $dealoptiondealprice
     * @return DealOptions
     */
    public function setDealoptiondealprice($dealoptiondealprice)
    {
        $this->dealoptiondealprice = $dealoptiondealprice;
    
        return $this;
    }

    /**
     * Get dealoptiondealprice
     *
     * @return float 
     */
    public function getDealoptiondealprice()
    {
        return $this->dealoptiondealprice;
    }

    /**
     * Set dealoptionquantity
     *
     * @param string $dealoptionquantity
     * @return DealOptions
     */
    public function setDealoptionquantity($dealoptionquantity)
    {
        $this->dealoptionquantity = $dealoptionquantity;
    
        return $this;
    }

    /**
     * Get dealoptionquantity
     *
     * @return string 
     */
    public function getDealoptionquantity()
    {
        return $this->dealoptionquantity;
    }

    /**
     * Set dealquantityunlimited
     *
     * @param string $dealquantityunlimited
     * @return DealOptions
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
     * Set dealoptionstatus
     *
     * @param string $dealoptionstatus
     * @return DealOptions
     */
    public function setDealoptionstatus($dealoptionstatus)
    {
        $this->dealoptionstatus = $dealoptionstatus;
    
        return $this;
    }

    /**
     * Get dealoptionstatus
     *
     * @return string 
     */
    public function getDealoptionstatus()
    {
        return $this->dealoptionstatus;
    }

    /**
     * Set dealoptiondefault
     *
     * @param string $dealoptiondefault
     * @return DealOptions
     */
    public function setDealoptiondefault($dealoptiondefault)
    {
        $this->dealoptiondefault = $dealoptiondefault;
    
        return $this;
    }

    /**
     * Get dealoptiondefault
     *
     * @return string 
     */
    public function getDealoptiondefault()
    {
        return $this->dealoptiondefault;
    }
}