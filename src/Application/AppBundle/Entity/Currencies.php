<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Currencies
 */
class Currencies
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $currencyname
     */
    private $currencyname;

    /**
     * @var string $currencycode
     */
    private $currencycode;

    /**
     * @var string $currencysymbolleft
     */
    private $currencysymbolleft;

    /**
     * @var string $currencysymbolright
     */
    private $currencysymbolright;

    /**
     * @var integer $currencydecimalplaces
     */
    private $currencydecimalplaces;

    /**
     * @var float $currencyvalue
     */
    private $currencyvalue;

    /**
     * @var string $currencydefault
     */
    private $currencydefault;

    /**
     * @var string $currencytype
     */
    private $currencytype;

    /**
     * @var string $currencyactive
     */
    private $currencyactive;

    /**
     * @var string $currencystatus
     */
    private $currencystatus;


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
     * Set currencyname
     *
     * @param string $currencyname
     * @return Currencies
     */
    public function setCurrencyname($currencyname)
    {
        $this->currencyname = $currencyname;
    
        return $this;
    }

    /**
     * Get currencyname
     *
     * @return string 
     */
    public function getCurrencyname()
    {
        return $this->currencyname;
    }

    /**
     * Set currencycode
     *
     * @param string $currencycode
     * @return Currencies
     */
    public function setCurrencycode($currencycode)
    {
        $this->currencycode = $currencycode;
    
        return $this;
    }

    /**
     * Get currencycode
     *
     * @return string 
     */
    public function getCurrencycode()
    {
        return $this->currencycode;
    }

    /**
     * Set currencysymbolleft
     *
     * @param string $currencysymbolleft
     * @return Currencies
     */
    public function setCurrencysymbolleft($currencysymbolleft)
    {
        $this->currencysymbolleft = $currencysymbolleft;
    
        return $this;
    }

    /**
     * Get currencysymbolleft
     *
     * @return string 
     */
    public function getCurrencysymbolleft()
    {
        return $this->currencysymbolleft;
    }

    /**
     * Set currencysymbolright
     *
     * @param string $currencysymbolright
     * @return Currencies
     */
    public function setCurrencysymbolright($currencysymbolright)
    {
        $this->currencysymbolright = $currencysymbolright;
    
        return $this;
    }

    /**
     * Get currencysymbolright
     *
     * @return string 
     */
    public function getCurrencysymbolright()
    {
        return $this->currencysymbolright;
    }

    /**
     * Set currencydecimalplaces
     *
     * @param integer $currencydecimalplaces
     * @return Currencies
     */
    public function setCurrencydecimalplaces($currencydecimalplaces)
    {
        $this->currencydecimalplaces = $currencydecimalplaces;
    
        return $this;
    }

    /**
     * Get currencydecimalplaces
     *
     * @return integer 
     */
    public function getCurrencydecimalplaces()
    {
        return $this->currencydecimalplaces;
    }

    /**
     * Set currencyvalue
     *
     * @param float $currencyvalue
     * @return Currencies
     */
    public function setCurrencyvalue($currencyvalue)
    {
        $this->currencyvalue = $currencyvalue;
    
        return $this;
    }

    /**
     * Get currencyvalue
     *
     * @return float 
     */
    public function getCurrencyvalue()
    {
        return $this->currencyvalue;
    }

    /**
     * Set currencydefault
     *
     * @param string $currencydefault
     * @return Currencies
     */
    public function setCurrencydefault($currencydefault)
    {
        $this->currencydefault = $currencydefault;
    
        return $this;
    }

    /**
     * Get currencydefault
     *
     * @return string 
     */
    public function getCurrencydefault()
    {
        return $this->currencydefault;
    }

    /**
     * Set currencytype
     *
     * @param string $currencytype
     * @return Currencies
     */
    public function setCurrencytype($currencytype)
    {
        $this->currencytype = $currencytype;
    
        return $this;
    }

    /**
     * Get currencytype
     *
     * @return string 
     */
    public function getCurrencytype()
    {
        return $this->currencytype;
    }

    /**
     * Set currencyactive
     *
     * @param string $currencyactive
     * @return Currencies
     */
    public function setCurrencyactive($currencyactive)
    {
        $this->currencyactive = $currencyactive;
    
        return $this;
    }

    /**
     * Get currencyactive
     *
     * @return string 
     */
    public function getCurrencyactive()
    {
        return $this->currencyactive;
    }

    /**
     * Set currencystatus
     *
     * @param string $currencystatus
     * @return Currencies
     */
    public function setCurrencystatus($currencystatus)
    {
        $this->currencystatus = $currencystatus;
    
        return $this;
    }

    /**
     * Get currencystatus
     *
     * @return string 
     */
    public function getCurrencystatus()
    {
        return $this->currencystatus;
    }
}