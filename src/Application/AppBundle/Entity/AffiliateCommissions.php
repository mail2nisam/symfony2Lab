<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateCommissions
 */
class AffiliateCommissions
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
     * @var float $commissionamount
     */
    private $commissionamount;

    /**
     * @var float $commissionpercent
     */
    private $commissionpercent;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var string $status
     */
    private $status;

    /**
     * @var \DateTime $createddate
     */
    private $createddate;

    /**
     * @var \DateTime $lastupdatedate
     */
    private $lastupdatedate;

    /**
     * @var string $level
     */
    private $level;


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
     * @return AffiliateCommissions
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
     * @return AffiliateCommissions
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
     * @return AffiliateCommissions
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
     * Set commissionamount
     *
     * @param float $commissionamount
     * @return AffiliateCommissions
     */
    public function setCommissionamount($commissionamount)
    {
        $this->commissionamount = $commissionamount;
    
        return $this;
    }

    /**
     * Get commissionamount
     *
     * @return float 
     */
    public function getCommissionamount()
    {
        return $this->commissionamount;
    }

    /**
     * Set commissionpercent
     *
     * @param float $commissionpercent
     * @return AffiliateCommissions
     */
    public function setCommissionpercent($commissionpercent)
    {
        $this->commissionpercent = $commissionpercent;
    
        return $this;
    }

    /**
     * Get commissionpercent
     *
     * @return float 
     */
    public function getCommissionpercent()
    {
        return $this->commissionpercent;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return AffiliateCommissions
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
     * Set status
     *
     * @param string $status
     * @return AffiliateCommissions
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     * @return AffiliateCommissions
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

    /**
     * Set lastupdatedate
     *
     * @param \DateTime $lastupdatedate
     * @return AffiliateCommissions
     */
    public function setLastupdatedate($lastupdatedate)
    {
        $this->lastupdatedate = $lastupdatedate;
    
        return $this;
    }

    /**
     * Get lastupdatedate
     *
     * @return \DateTime 
     */
    public function getLastupdatedate()
    {
        return $this->lastupdatedate;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return AffiliateCommissions
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }
}