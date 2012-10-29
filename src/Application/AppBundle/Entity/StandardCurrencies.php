<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\StandardCurrencies
 */
class StandardCurrencies
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $standardcurrencyname
     */
    private $standardcurrencyname;

    /**
     * @var string $standardcurrencycode
     */
    private $standardcurrencycode;

    /**
     * @var string $standardcurrencysymbolleft
     */
    private $standardcurrencysymbolleft;

    /**
     * @var string $standardcurrencysymbolright
     */
    private $standardcurrencysymbolright;


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
     * Set standardcurrencyname
     *
     * @param string $standardcurrencyname
     * @return StandardCurrencies
     */
    public function setStandardcurrencyname($standardcurrencyname)
    {
        $this->standardcurrencyname = $standardcurrencyname;
    
        return $this;
    }

    /**
     * Get standardcurrencyname
     *
     * @return string 
     */
    public function getStandardcurrencyname()
    {
        return $this->standardcurrencyname;
    }

    /**
     * Set standardcurrencycode
     *
     * @param string $standardcurrencycode
     * @return StandardCurrencies
     */
    public function setStandardcurrencycode($standardcurrencycode)
    {
        $this->standardcurrencycode = $standardcurrencycode;
    
        return $this;
    }

    /**
     * Get standardcurrencycode
     *
     * @return string 
     */
    public function getStandardcurrencycode()
    {
        return $this->standardcurrencycode;
    }

    /**
     * Set standardcurrencysymbolleft
     *
     * @param string $standardcurrencysymbolleft
     * @return StandardCurrencies
     */
    public function setStandardcurrencysymbolleft($standardcurrencysymbolleft)
    {
        $this->standardcurrencysymbolleft = $standardcurrencysymbolleft;
    
        return $this;
    }

    /**
     * Get standardcurrencysymbolleft
     *
     * @return string 
     */
    public function getStandardcurrencysymbolleft()
    {
        return $this->standardcurrencysymbolleft;
    }

    /**
     * Set standardcurrencysymbolright
     *
     * @param string $standardcurrencysymbolright
     * @return StandardCurrencies
     */
    public function setStandardcurrencysymbolright($standardcurrencysymbolright)
    {
        $this->standardcurrencysymbolright = $standardcurrencysymbolright;
    
        return $this;
    }

    /**
     * Get standardcurrencysymbolright
     *
     * @return string 
     */
    public function getStandardcurrencysymbolright()
    {
        return $this->standardcurrencysymbolright;
    }
}