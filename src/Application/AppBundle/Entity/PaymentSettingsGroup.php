<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PaymentSettingsGroup
 */
class PaymentSettingsGroup
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $paysetgrouplabel
     */
    private $paysetgrouplabel;

    /**
     * @var string $paysetgroupkey
     */
    private $paysetgroupkey;

    /**
     * @var integer $paysetgroupsortorder
     */
    private $paysetgroupsortorder;

    /**
     * @var string $paysetgroupstatus
     */
    private $paysetgroupstatus;

    /**
     * @var \DateTime $paytsetgrouplastupdated
     */
    private $paytsetgrouplastupdated;


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
     * Set paysetgrouplabel
     *
     * @param string $paysetgrouplabel
     * @return PaymentSettingsGroup
     */
    public function setPaysetgrouplabel($paysetgrouplabel)
    {
        $this->paysetgrouplabel = $paysetgrouplabel;
    
        return $this;
    }

    /**
     * Get paysetgrouplabel
     *
     * @return string 
     */
    public function getPaysetgrouplabel()
    {
        return $this->paysetgrouplabel;
    }

    /**
     * Set paysetgroupkey
     *
     * @param string $paysetgroupkey
     * @return PaymentSettingsGroup
     */
    public function setPaysetgroupkey($paysetgroupkey)
    {
        $this->paysetgroupkey = $paysetgroupkey;
    
        return $this;
    }

    /**
     * Get paysetgroupkey
     *
     * @return string 
     */
    public function getPaysetgroupkey()
    {
        return $this->paysetgroupkey;
    }

    /**
     * Set paysetgroupsortorder
     *
     * @param integer $paysetgroupsortorder
     * @return PaymentSettingsGroup
     */
    public function setPaysetgroupsortorder($paysetgroupsortorder)
    {
        $this->paysetgroupsortorder = $paysetgroupsortorder;
    
        return $this;
    }

    /**
     * Get paysetgroupsortorder
     *
     * @return integer 
     */
    public function getPaysetgroupsortorder()
    {
        return $this->paysetgroupsortorder;
    }

    /**
     * Set paysetgroupstatus
     *
     * @param string $paysetgroupstatus
     * @return PaymentSettingsGroup
     */
    public function setPaysetgroupstatus($paysetgroupstatus)
    {
        $this->paysetgroupstatus = $paysetgroupstatus;
    
        return $this;
    }

    /**
     * Get paysetgroupstatus
     *
     * @return string 
     */
    public function getPaysetgroupstatus()
    {
        return $this->paysetgroupstatus;
    }

    /**
     * Set paytsetgrouplastupdated
     *
     * @param \DateTime $paytsetgrouplastupdated
     * @return PaymentSettingsGroup
     */
    public function setPaytsetgrouplastupdated($paytsetgrouplastupdated)
    {
        $this->paytsetgrouplastupdated = $paytsetgrouplastupdated;
    
        return $this;
    }

    /**
     * Get paytsetgrouplastupdated
     *
     * @return \DateTime 
     */
    public function getPaytsetgrouplastupdated()
    {
        return $this->paytsetgrouplastupdated;
    }
}