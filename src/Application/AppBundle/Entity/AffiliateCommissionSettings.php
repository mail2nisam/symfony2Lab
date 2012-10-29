<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateCommissionSettings
 */
class AffiliateCommissionSettings
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $affiliateuserid
     */
    private $affiliateuserid;

    /**
     * @var string $enablesalescommission
     */
    private $enablesalescommission;

    /**
     * @var string $firstpurchasecommissiontype
     */
    private $firstpurchasecommissiontype;

    /**
     * @var float $firstpurchasecommissionvalue
     */
    private $firstpurchasecommissionvalue;

    /**
     * @var string $recurringpurchasecommissiontype
     */
    private $recurringpurchasecommissiontype;

    /**
     * @var float $recurringpurchasecommissionvalue
     */
    private $recurringpurchasecommissionvalue;

    /**
     * @var string $enabletiercommission
     */
    private $enabletiercommission;

    /**
     * @var integer $tiercommissionlevel
     */
    private $tiercommissionlevel;

    /**
     * @var string $tiercommissiontype
     */
    private $tiercommissiontype;

    /**
     * @var float $tiercommissionvalue
     */
    private $tiercommissionvalue;

    /**
     * @var string $subscriptioncommission
     */
    private $subscriptioncommission;

    /**
     * @var float $subscriptioncommissionamount
     */
    private $subscriptioncommissionamount;

    /**
     * @var string $registrationcommission
     */
    private $registrationcommission;

    /**
     * @var float $registrationcommissionamount
     */
    private $registrationcommissionamount;

    /**
     * @var string $bulksubscriberimport
     */
    private $bulksubscriberimport;

    /**
     * @var float $bulksubscriberimportcommission
     */
    private $bulksubscriberimportcommission;

    /**
     * @var string $bulkuserimport
     */
    private $bulkuserimport;

    /**
     * @var float $bulkuserimportcommission
     */
    private $bulkuserimportcommission;


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
     * Set affiliateuserid
     *
     * @param integer $affiliateuserid
     * @return AffiliateCommissionSettings
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
     * Set enablesalescommission
     *
     * @param string $enablesalescommission
     * @return AffiliateCommissionSettings
     */
    public function setEnablesalescommission($enablesalescommission)
    {
        $this->enablesalescommission = $enablesalescommission;
    
        return $this;
    }

    /**
     * Get enablesalescommission
     *
     * @return string 
     */
    public function getEnablesalescommission()
    {
        return $this->enablesalescommission;
    }

    /**
     * Set firstpurchasecommissiontype
     *
     * @param string $firstpurchasecommissiontype
     * @return AffiliateCommissionSettings
     */
    public function setFirstpurchasecommissiontype($firstpurchasecommissiontype)
    {
        $this->firstpurchasecommissiontype = $firstpurchasecommissiontype;
    
        return $this;
    }

    /**
     * Get firstpurchasecommissiontype
     *
     * @return string 
     */
    public function getFirstpurchasecommissiontype()
    {
        return $this->firstpurchasecommissiontype;
    }

    /**
     * Set firstpurchasecommissionvalue
     *
     * @param float $firstpurchasecommissionvalue
     * @return AffiliateCommissionSettings
     */
    public function setFirstpurchasecommissionvalue($firstpurchasecommissionvalue)
    {
        $this->firstpurchasecommissionvalue = $firstpurchasecommissionvalue;
    
        return $this;
    }

    /**
     * Get firstpurchasecommissionvalue
     *
     * @return float 
     */
    public function getFirstpurchasecommissionvalue()
    {
        return $this->firstpurchasecommissionvalue;
    }

    /**
     * Set recurringpurchasecommissiontype
     *
     * @param string $recurringpurchasecommissiontype
     * @return AffiliateCommissionSettings
     */
    public function setRecurringpurchasecommissiontype($recurringpurchasecommissiontype)
    {
        $this->recurringpurchasecommissiontype = $recurringpurchasecommissiontype;
    
        return $this;
    }

    /**
     * Get recurringpurchasecommissiontype
     *
     * @return string 
     */
    public function getRecurringpurchasecommissiontype()
    {
        return $this->recurringpurchasecommissiontype;
    }

    /**
     * Set recurringpurchasecommissionvalue
     *
     * @param float $recurringpurchasecommissionvalue
     * @return AffiliateCommissionSettings
     */
    public function setRecurringpurchasecommissionvalue($recurringpurchasecommissionvalue)
    {
        $this->recurringpurchasecommissionvalue = $recurringpurchasecommissionvalue;
    
        return $this;
    }

    /**
     * Get recurringpurchasecommissionvalue
     *
     * @return float 
     */
    public function getRecurringpurchasecommissionvalue()
    {
        return $this->recurringpurchasecommissionvalue;
    }

    /**
     * Set enabletiercommission
     *
     * @param string $enabletiercommission
     * @return AffiliateCommissionSettings
     */
    public function setEnabletiercommission($enabletiercommission)
    {
        $this->enabletiercommission = $enabletiercommission;
    
        return $this;
    }

    /**
     * Get enabletiercommission
     *
     * @return string 
     */
    public function getEnabletiercommission()
    {
        return $this->enabletiercommission;
    }

    /**
     * Set tiercommissionlevel
     *
     * @param integer $tiercommissionlevel
     * @return AffiliateCommissionSettings
     */
    public function setTiercommissionlevel($tiercommissionlevel)
    {
        $this->tiercommissionlevel = $tiercommissionlevel;
    
        return $this;
    }

    /**
     * Get tiercommissionlevel
     *
     * @return integer 
     */
    public function getTiercommissionlevel()
    {
        return $this->tiercommissionlevel;
    }

    /**
     * Set tiercommissiontype
     *
     * @param string $tiercommissiontype
     * @return AffiliateCommissionSettings
     */
    public function setTiercommissiontype($tiercommissiontype)
    {
        $this->tiercommissiontype = $tiercommissiontype;
    
        return $this;
    }

    /**
     * Get tiercommissiontype
     *
     * @return string 
     */
    public function getTiercommissiontype()
    {
        return $this->tiercommissiontype;
    }

    /**
     * Set tiercommissionvalue
     *
     * @param float $tiercommissionvalue
     * @return AffiliateCommissionSettings
     */
    public function setTiercommissionvalue($tiercommissionvalue)
    {
        $this->tiercommissionvalue = $tiercommissionvalue;
    
        return $this;
    }

    /**
     * Get tiercommissionvalue
     *
     * @return float 
     */
    public function getTiercommissionvalue()
    {
        return $this->tiercommissionvalue;
    }

    /**
     * Set subscriptioncommission
     *
     * @param string $subscriptioncommission
     * @return AffiliateCommissionSettings
     */
    public function setSubscriptioncommission($subscriptioncommission)
    {
        $this->subscriptioncommission = $subscriptioncommission;
    
        return $this;
    }

    /**
     * Get subscriptioncommission
     *
     * @return string 
     */
    public function getSubscriptioncommission()
    {
        return $this->subscriptioncommission;
    }

    /**
     * Set subscriptioncommissionamount
     *
     * @param float $subscriptioncommissionamount
     * @return AffiliateCommissionSettings
     */
    public function setSubscriptioncommissionamount($subscriptioncommissionamount)
    {
        $this->subscriptioncommissionamount = $subscriptioncommissionamount;
    
        return $this;
    }

    /**
     * Get subscriptioncommissionamount
     *
     * @return float 
     */
    public function getSubscriptioncommissionamount()
    {
        return $this->subscriptioncommissionamount;
    }

    /**
     * Set registrationcommission
     *
     * @param string $registrationcommission
     * @return AffiliateCommissionSettings
     */
    public function setRegistrationcommission($registrationcommission)
    {
        $this->registrationcommission = $registrationcommission;
    
        return $this;
    }

    /**
     * Get registrationcommission
     *
     * @return string 
     */
    public function getRegistrationcommission()
    {
        return $this->registrationcommission;
    }

    /**
     * Set registrationcommissionamount
     *
     * @param float $registrationcommissionamount
     * @return AffiliateCommissionSettings
     */
    public function setRegistrationcommissionamount($registrationcommissionamount)
    {
        $this->registrationcommissionamount = $registrationcommissionamount;
    
        return $this;
    }

    /**
     * Get registrationcommissionamount
     *
     * @return float 
     */
    public function getRegistrationcommissionamount()
    {
        return $this->registrationcommissionamount;
    }

    /**
     * Set bulksubscriberimport
     *
     * @param string $bulksubscriberimport
     * @return AffiliateCommissionSettings
     */
    public function setBulksubscriberimport($bulksubscriberimport)
    {
        $this->bulksubscriberimport = $bulksubscriberimport;
    
        return $this;
    }

    /**
     * Get bulksubscriberimport
     *
     * @return string 
     */
    public function getBulksubscriberimport()
    {
        return $this->bulksubscriberimport;
    }

    /**
     * Set bulksubscriberimportcommission
     *
     * @param float $bulksubscriberimportcommission
     * @return AffiliateCommissionSettings
     */
    public function setBulksubscriberimportcommission($bulksubscriberimportcommission)
    {
        $this->bulksubscriberimportcommission = $bulksubscriberimportcommission;
    
        return $this;
    }

    /**
     * Get bulksubscriberimportcommission
     *
     * @return float 
     */
    public function getBulksubscriberimportcommission()
    {
        return $this->bulksubscriberimportcommission;
    }

    /**
     * Set bulkuserimport
     *
     * @param string $bulkuserimport
     * @return AffiliateCommissionSettings
     */
    public function setBulkuserimport($bulkuserimport)
    {
        $this->bulkuserimport = $bulkuserimport;
    
        return $this;
    }

    /**
     * Get bulkuserimport
     *
     * @return string 
     */
    public function getBulkuserimport()
    {
        return $this->bulkuserimport;
    }

    /**
     * Set bulkuserimportcommission
     *
     * @param float $bulkuserimportcommission
     * @return AffiliateCommissionSettings
     */
    public function setBulkuserimportcommission($bulkuserimportcommission)
    {
        $this->bulkuserimportcommission = $bulkuserimportcommission;
    
        return $this;
    }

    /**
     * Get bulkuserimportcommission
     *
     * @return float 
     */
    public function getBulkuserimportcommission()
    {
        return $this->bulkuserimportcommission;
    }
}