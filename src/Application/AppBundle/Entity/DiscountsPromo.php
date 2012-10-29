<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DiscountsPromo
 */
class DiscountsPromo
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $promoname
     */
    private $promoname;

    /**
     * @var string $promodescription
     */
    private $promodescription;

    /**
     * @var string $promocode
     */
    private $promocode;

    /**
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var float $promodiscount
     */
    private $promodiscount;

    /**
     * @var string $promodiscounttype
     */
    private $promodiscounttype;

    /**
     * @var float $promominorderamount
     */
    private $promominorderamount;

    /**
     * @var integer $promomaxusage
     */
    private $promomaxusage;

    /**
     * @var integer $promomaxusageperuser
     */
    private $promomaxusageperuser;

    /**
     * @var string $promoeffectondeals
     */
    private $promoeffectondeals;

    /**
     * @var \DateTime $promostartdate
     */
    private $promostartdate;

    /**
     * @var \DateTime $promoexpdate
     */
    private $promoexpdate;

    /**
     * @var string $promostatus
     */
    private $promostatus;

    /**
     * @var \DateTime $promoaddedtime
     */
    private $promoaddedtime;


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
     * Set promoname
     *
     * @param string $promoname
     * @return DiscountsPromo
     */
    public function setPromoname($promoname)
    {
        $this->promoname = $promoname;
    
        return $this;
    }

    /**
     * Get promoname
     *
     * @return string 
     */
    public function getPromoname()
    {
        return $this->promoname;
    }

    /**
     * Set promodescription
     *
     * @param string $promodescription
     * @return DiscountsPromo
     */
    public function setPromodescription($promodescription)
    {
        $this->promodescription = $promodescription;
    
        return $this;
    }

    /**
     * Get promodescription
     *
     * @return string 
     */
    public function getPromodescription()
    {
        return $this->promodescription;
    }

    /**
     * Set promocode
     *
     * @param string $promocode
     * @return DiscountsPromo
     */
    public function setPromocode($promocode)
    {
        $this->promocode = $promocode;
    
        return $this;
    }

    /**
     * Get promocode
     *
     * @return string 
     */
    public function getPromocode()
    {
        return $this->promocode;
    }

    /**
     * Set dealid
     *
     * @param integer $dealid
     * @return DiscountsPromo
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
     * Set promodiscount
     *
     * @param float $promodiscount
     * @return DiscountsPromo
     */
    public function setPromodiscount($promodiscount)
    {
        $this->promodiscount = $promodiscount;
    
        return $this;
    }

    /**
     * Get promodiscount
     *
     * @return float 
     */
    public function getPromodiscount()
    {
        return $this->promodiscount;
    }

    /**
     * Set promodiscounttype
     *
     * @param string $promodiscounttype
     * @return DiscountsPromo
     */
    public function setPromodiscounttype($promodiscounttype)
    {
        $this->promodiscounttype = $promodiscounttype;
    
        return $this;
    }

    /**
     * Get promodiscounttype
     *
     * @return string 
     */
    public function getPromodiscounttype()
    {
        return $this->promodiscounttype;
    }

    /**
     * Set promominorderamount
     *
     * @param float $promominorderamount
     * @return DiscountsPromo
     */
    public function setPromominorderamount($promominorderamount)
    {
        $this->promominorderamount = $promominorderamount;
    
        return $this;
    }

    /**
     * Get promominorderamount
     *
     * @return float 
     */
    public function getPromominorderamount()
    {
        return $this->promominorderamount;
    }

    /**
     * Set promomaxusage
     *
     * @param integer $promomaxusage
     * @return DiscountsPromo
     */
    public function setPromomaxusage($promomaxusage)
    {
        $this->promomaxusage = $promomaxusage;
    
        return $this;
    }

    /**
     * Get promomaxusage
     *
     * @return integer 
     */
    public function getPromomaxusage()
    {
        return $this->promomaxusage;
    }

    /**
     * Set promomaxusageperuser
     *
     * @param integer $promomaxusageperuser
     * @return DiscountsPromo
     */
    public function setPromomaxusageperuser($promomaxusageperuser)
    {
        $this->promomaxusageperuser = $promomaxusageperuser;
    
        return $this;
    }

    /**
     * Get promomaxusageperuser
     *
     * @return integer 
     */
    public function getPromomaxusageperuser()
    {
        return $this->promomaxusageperuser;
    }

    /**
     * Set promoeffectondeals
     *
     * @param string $promoeffectondeals
     * @return DiscountsPromo
     */
    public function setPromoeffectondeals($promoeffectondeals)
    {
        $this->promoeffectondeals = $promoeffectondeals;
    
        return $this;
    }

    /**
     * Get promoeffectondeals
     *
     * @return string 
     */
    public function getPromoeffectondeals()
    {
        return $this->promoeffectondeals;
    }

    /**
     * Set promostartdate
     *
     * @param \DateTime $promostartdate
     * @return DiscountsPromo
     */
    public function setPromostartdate($promostartdate)
    {
        $this->promostartdate = $promostartdate;
    
        return $this;
    }

    /**
     * Get promostartdate
     *
     * @return \DateTime 
     */
    public function getPromostartdate()
    {
        return $this->promostartdate;
    }

    /**
     * Set promoexpdate
     *
     * @param \DateTime $promoexpdate
     * @return DiscountsPromo
     */
    public function setPromoexpdate($promoexpdate)
    {
        $this->promoexpdate = $promoexpdate;
    
        return $this;
    }

    /**
     * Get promoexpdate
     *
     * @return \DateTime 
     */
    public function getPromoexpdate()
    {
        return $this->promoexpdate;
    }

    /**
     * Set promostatus
     *
     * @param string $promostatus
     * @return DiscountsPromo
     */
    public function setPromostatus($promostatus)
    {
        $this->promostatus = $promostatus;
    
        return $this;
    }

    /**
     * Get promostatus
     *
     * @return string 
     */
    public function getPromostatus()
    {
        return $this->promostatus;
    }

    /**
     * Set promoaddedtime
     *
     * @param \DateTime $promoaddedtime
     * @return DiscountsPromo
     */
    public function setPromoaddedtime($promoaddedtime)
    {
        $this->promoaddedtime = $promoaddedtime;
    
        return $this;
    }

    /**
     * Get promoaddedtime
     *
     * @return \DateTime 
     */
    public function getPromoaddedtime()
    {
        return $this->promoaddedtime;
    }
}