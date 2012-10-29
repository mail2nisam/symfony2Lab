<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PaymentSettings
 */
class PaymentSettings
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $paysetgroupid
     */
    private $paysetgroupid;

    /**
     * @var string $paysetlabel
     */
    private $paysetlabel;

    /**
     * @var string $paysetkey
     */
    private $paysetkey;

    /**
     * @var string $paysettype
     */
    private $paysettype;

    /**
     * @var string $paysetoptions
     */
    private $paysetoptions;

    /**
     * @var string $paysetvalue
     */
    private $paysetvalue;

    /**
     * @var string $paysetvalidate
     */
    private $paysetvalidate;

    /**
     * @var string $paysetdescription
     */
    private $paysetdescription;

    /**
     * @var integer $paysetsortorder
     */
    private $paysetsortorder;

    /**
     * @var string $paysetvalidateerror
     */
    private $paysetvalidateerror;

    /**
     * @var string $payfieldshow
     */
    private $payfieldshow;


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
     * Set paysetgroupid
     *
     * @param integer $paysetgroupid
     * @return PaymentSettings
     */
    public function setPaysetgroupid($paysetgroupid)
    {
        $this->paysetgroupid = $paysetgroupid;
    
        return $this;
    }

    /**
     * Get paysetgroupid
     *
     * @return integer 
     */
    public function getPaysetgroupid()
    {
        return $this->paysetgroupid;
    }

    /**
     * Set paysetlabel
     *
     * @param string $paysetlabel
     * @return PaymentSettings
     */
    public function setPaysetlabel($paysetlabel)
    {
        $this->paysetlabel = $paysetlabel;
    
        return $this;
    }

    /**
     * Get paysetlabel
     *
     * @return string 
     */
    public function getPaysetlabel()
    {
        return $this->paysetlabel;
    }

    /**
     * Set paysetkey
     *
     * @param string $paysetkey
     * @return PaymentSettings
     */
    public function setPaysetkey($paysetkey)
    {
        $this->paysetkey = $paysetkey;
    
        return $this;
    }

    /**
     * Get paysetkey
     *
     * @return string 
     */
    public function getPaysetkey()
    {
        return $this->paysetkey;
    }

    /**
     * Set paysettype
     *
     * @param string $paysettype
     * @return PaymentSettings
     */
    public function setPaysettype($paysettype)
    {
        $this->paysettype = $paysettype;
    
        return $this;
    }

    /**
     * Get paysettype
     *
     * @return string 
     */
    public function getPaysettype()
    {
        return $this->paysettype;
    }

    /**
     * Set paysetoptions
     *
     * @param string $paysetoptions
     * @return PaymentSettings
     */
    public function setPaysetoptions($paysetoptions)
    {
        $this->paysetoptions = $paysetoptions;
    
        return $this;
    }

    /**
     * Get paysetoptions
     *
     * @return string 
     */
    public function getPaysetoptions()
    {
        return $this->paysetoptions;
    }

    /**
     * Set paysetvalue
     *
     * @param string $paysetvalue
     * @return PaymentSettings
     */
    public function setPaysetvalue($paysetvalue)
    {
        $this->paysetvalue = $paysetvalue;
    
        return $this;
    }

    /**
     * Get paysetvalue
     *
     * @return string 
     */
    public function getPaysetvalue()
    {
        return $this->paysetvalue;
    }

    /**
     * Set paysetvalidate
     *
     * @param string $paysetvalidate
     * @return PaymentSettings
     */
    public function setPaysetvalidate($paysetvalidate)
    {
        $this->paysetvalidate = $paysetvalidate;
    
        return $this;
    }

    /**
     * Get paysetvalidate
     *
     * @return string 
     */
    public function getPaysetvalidate()
    {
        return $this->paysetvalidate;
    }

    /**
     * Set paysetdescription
     *
     * @param string $paysetdescription
     * @return PaymentSettings
     */
    public function setPaysetdescription($paysetdescription)
    {
        $this->paysetdescription = $paysetdescription;
    
        return $this;
    }

    /**
     * Get paysetdescription
     *
     * @return string 
     */
    public function getPaysetdescription()
    {
        return $this->paysetdescription;
    }

    /**
     * Set paysetsortorder
     *
     * @param integer $paysetsortorder
     * @return PaymentSettings
     */
    public function setPaysetsortorder($paysetsortorder)
    {
        $this->paysetsortorder = $paysetsortorder;
    
        return $this;
    }

    /**
     * Get paysetsortorder
     *
     * @return integer 
     */
    public function getPaysetsortorder()
    {
        return $this->paysetsortorder;
    }

    /**
     * Set paysetvalidateerror
     *
     * @param string $paysetvalidateerror
     * @return PaymentSettings
     */
    public function setPaysetvalidateerror($paysetvalidateerror)
    {
        $this->paysetvalidateerror = $paysetvalidateerror;
    
        return $this;
    }

    /**
     * Get paysetvalidateerror
     *
     * @return string 
     */
    public function getPaysetvalidateerror()
    {
        return $this->paysetvalidateerror;
    }

    /**
     * Set payfieldshow
     *
     * @param string $payfieldshow
     * @return PaymentSettings
     */
    public function setPayfieldshow($payfieldshow)
    {
        $this->payfieldshow = $payfieldshow;
    
        return $this;
    }

    /**
     * Get payfieldshow
     *
     * @return string 
     */
    public function getPayfieldshow()
    {
        return $this->payfieldshow;
    }
}