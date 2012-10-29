<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\TaxClasses
 */
class TaxClasses
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $taxclassname
     */
    private $taxclassname;

    /**
     * @var string $taxclassdescription
     */
    private $taxclassdescription;

    /**
     * @var string $taxclassstatus
     */
    private $taxclassstatus;


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
     * Set taxclassname
     *
     * @param string $taxclassname
     * @return TaxClasses
     */
    public function setTaxclassname($taxclassname)
    {
        $this->taxclassname = $taxclassname;
    
        return $this;
    }

    /**
     * Get taxclassname
     *
     * @return string 
     */
    public function getTaxclassname()
    {
        return $this->taxclassname;
    }

    /**
     * Set taxclassdescription
     *
     * @param string $taxclassdescription
     * @return TaxClasses
     */
    public function setTaxclassdescription($taxclassdescription)
    {
        $this->taxclassdescription = $taxclassdescription;
    
        return $this;
    }

    /**
     * Get taxclassdescription
     *
     * @return string 
     */
    public function getTaxclassdescription()
    {
        return $this->taxclassdescription;
    }

    /**
     * Set taxclassstatus
     *
     * @param string $taxclassstatus
     * @return TaxClasses
     */
    public function setTaxclassstatus($taxclassstatus)
    {
        $this->taxclassstatus = $taxclassstatus;
    
        return $this;
    }

    /**
     * Get taxclassstatus
     *
     * @return string 
     */
    public function getTaxclassstatus()
    {
        return $this->taxclassstatus;
    }
}