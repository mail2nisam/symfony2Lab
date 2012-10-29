<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliatePerformance
 */
class AffiliatePerformance
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $affvisitorid
     */
    private $affvisitorid;

    /**
     * @var integer $affiliateuserid
     */
    private $affiliateuserid;

    /**
     * @var integer $actionid
     */
    private $actionid;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var \DateTime $createddate
     */
    private $createddate;


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
     * Set affvisitorid
     *
     * @param integer $affvisitorid
     * @return AffiliatePerformance
     */
    public function setAffvisitorid($affvisitorid)
    {
        $this->affvisitorid = $affvisitorid;
    
        return $this;
    }

    /**
     * Get affvisitorid
     *
     * @return integer 
     */
    public function getAffvisitorid()
    {
        return $this->affvisitorid;
    }

    /**
     * Set affiliateuserid
     *
     * @param integer $affiliateuserid
     * @return AffiliatePerformance
     */
    public function setAffiliateuserid($affiliateuserid)
    {
        $this->affiliateuserid = $affiliateuserid;
    
        return $this;
    }

    /**
     * Get affiliateuserid
     *
     * @return integer 
     */
    public function getAffiliateuserid()
    {
        return $this->affiliateuserid;
    }

    /**
     * Set actionid
     *
     * @param integer $actionid
     * @return AffiliatePerformance
     */
    public function setActionid($actionid)
    {
        $this->actionid = $actionid;
    
        return $this;
    }

    /**
     * Get actionid
     *
     * @return integer 
     */
    public function getActionid()
    {
        return $this->actionid;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return AffiliatePerformance
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     * @return AffiliatePerformance
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    
        return $this;
    }

    /**
     * Get createddate
     *
     * @return \DateTime 
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }
}