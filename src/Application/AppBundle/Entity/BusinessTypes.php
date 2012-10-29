<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessTypes
 */
class BusinessTypes
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $businesstypeparent
     */
    private $businesstypeparent;

    /**
     * @var string $businesstypestatus
     */
    private $businesstypestatus;

    /**
     * @var integer $businesstypesortorder
     */
    private $businesstypesortorder;


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
     * Set businesstypeparent
     *
     * @param integer $businesstypeparent
     * @return BusinessTypes
     */
    public function setBusinesstypeparent($businesstypeparent)
    {
        $this->businesstypeparent = $businesstypeparent;
    
        return $this;
    }

    /**
     * Get businesstypeparent
     *
     * @return integer 
     */
    public function getBusinesstypeparent()
    {
        return $this->businesstypeparent;
    }

    /**
     * Set businesstypestatus
     *
     * @param string $businesstypestatus
     * @return BusinessTypes
     */
    public function setBusinesstypestatus($businesstypestatus)
    {
        $this->businesstypestatus = $businesstypestatus;
    
        return $this;
    }

    /**
     * Get businesstypestatus
     *
     * @return string 
     */
    public function getBusinesstypestatus()
    {
        return $this->businesstypestatus;
    }

    /**
     * Set businesstypesortorder
     *
     * @param integer $businesstypesortorder
     * @return BusinessTypes
     */
    public function setBusinesstypesortorder($businesstypesortorder)
    {
        $this->businesstypesortorder = $businesstypesortorder;
    
        return $this;
    }

    /**
     * Get businesstypesortorder
     *
     * @return integer 
     */
    public function getBusinesstypesortorder()
    {
        return $this->businesstypesortorder;
    }
    /**
     * @var string $businesstypename
     */
    private $businesstypename;

    /**
     * @var string $businesstypedescription
     */
    private $businesstypedescription;


    /**
     * Set businesstypename
     *
     * @param string $businesstypename
     * @return BusinessTypes
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
     * @return BusinessTypes
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