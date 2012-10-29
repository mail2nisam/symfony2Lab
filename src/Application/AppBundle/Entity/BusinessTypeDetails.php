<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessTypeDetails
 */
class BusinessTypeDetails
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $businesstypeid
     */
    private $businesstypeid;

    /**
     * @var integer $languageid
     */
    private $languageid;

    /**
     * @var string $businesstypename
     */
    private $businesstypename;

    /**
     * @var string $businesstypedescription
     */
    private $businesstypedescription;


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
     * Set businesstypeid
     *
     * @param integer $businesstypeid
     * @return BusinessTypeDetails
     */
    public function setBusinesstypeid($businesstypeid)
    {
        $this->businesstypeid = $businesstypeid;
    
        return $this;
    }

    /**
     * Get businesstypeid
     *
     * @return integer 
     */
    public function getBusinesstypeid()
    {
        return $this->businesstypeid;
    }

    /**
     * Set languageid
     *
     * @param integer $languageid
     * @return BusinessTypeDetails
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
     * Set businesstypename
     *
     * @param string $businesstypename
     * @return BusinessTypeDetails
     */
    public function setBusinesstypename($businesstypename)
    {
        $this->businesstypename = $businesstypename;
    
        return $this;
    }

    /**
     * Get businesstypename
     *
     * @return string 
     */
    public function getBusinesstypename()
    {
        return $this->businesstypename;
    }

    /**
     * Set businesstypedescription
     *
     * @param string $businesstypedescription
     * @return BusinessTypeDetails
     */
    public function setBusinesstypedescription($businesstypedescription)
    {
        $this->businesstypedescription = $businesstypedescription;
    
        return $this;
    }

    /**
     * Get businesstypedescription
     *
     * @return string 
     */
    public function getBusinesstypedescription()
    {
        return $this->businesstypedescription;
    }
}