<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\TaxRates
 */
class TaxRates
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $taxclassid
     */
    private $taxclassid;

    /**
     * @var integer $geozoneid
     */
    private $geozoneid;

    /**
     * @var float $taxrate
     */
    private $taxrate;

    /**
     * @var integer $taxpriority
     */
    private $taxpriority;

    /**
     * @var string $taxdescription
     */
    private $taxdescription;


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
     * Set taxclassid
     *
     * @param integer $taxclassid
     * @return TaxRates
     */
    public function setTaxclassid($taxclassid)
    {
        $this->taxclassid = $taxclassid;
    
        return $this;
    }

    /**
     * Get taxclassid
     *
     * @return integer 
     */
    public function getTaxclassid()
    {
        return $this->taxclassid;
    }

    /**
     * Set geozoneid
     *
     * @param integer $geozoneid
     * @return TaxRates
     */
    public function setGeozoneid($geozoneid)
    {
        $this->geozoneid = $geozoneid;
    
        return $this;
    }

    /**
     * Get geozoneid
     *
     * @return integer 
     */
    public function getGeozoneid()
    {
        return $this->geozoneid;
    }

    /**
     * Set taxrate
     *
     * @param float $taxrate
     * @return TaxRates
     */
    public function setTaxrate($taxrate)
    {
        $this->taxrate = $taxrate;
    
        return $this;
    }

    /**
     * Get taxrate
     *
     * @return float 
     */
    public function getTaxrate()
    {
        return $this->taxrate;
    }

    /**
     * Set taxpriority
     *
     * @param integer $taxpriority
     * @return TaxRates
     */
    public function setTaxpriority($taxpriority)
    {
        $this->taxpriority = $taxpriority;
    
        return $this;
    }

    /**
     * Get taxpriority
     *
     * @return integer 
     */
    public function getTaxpriority()
    {
        return $this->taxpriority;
    }

    /**
     * Set taxdescription
     *
     * @param string $taxdescription
     * @return TaxRates
     */
    public function setTaxdescription($taxdescription)
    {
        $this->taxdescription = $taxdescription;
    
        return $this;
    }

    /**
     * Get taxdescription
     *
     * @return string 
     */
    public function getTaxdescription()
    {
        return $this->taxdescription;
    }
}