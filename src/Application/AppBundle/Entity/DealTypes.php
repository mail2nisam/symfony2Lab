<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealTypes
 */
class DealTypes
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $dealtypename
     */
    private $dealtypename;

    /**
     * @var string $dealtypedescription
     */
    private $dealtypedescription;

    /**
     * @var string $paymentcollection
     */
    private $paymentcollection;

    /**
     * @var string $certficategenerate
     */
    private $certficategenerate;

    /**
     * @var integer $dealtypeposition
     */
    private $dealtypeposition;

    /**
     * @var string $dealtypestatus
     */
    private $dealtypestatus;

    /**
     * @var string $isfeatured
     */
    private $isfeatured;

    /**
     * @var integer $featuredlink
     */
    private $featuredlink;

    /**
     * @var string $dealtypekey
     */
    private $dealtypekey;

    /**
     * @var string $lockedstatus
     */
    private $lockedstatus;


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
     * Set dealtypename
     *
     * @param string $dealtypename
     * @return DealTypes
     */
    public function setDealtypename($dealtypename)
    {
        $this->dealtypename = $dealtypename;
    
        return $this;
    }

    /**
     * Get dealtypename
     *
     * @return string 
     */
    public function getDealtypename()
    {
        return $this->dealtypename;
    }

    /**
     * Set dealtypedescription
     *
     * @param string $dealtypedescription
     * @return DealTypes
     */
    public function setDealtypedescription($dealtypedescription)
    {
        $this->dealtypedescription = $dealtypedescription;
    
        return $this;
    }

    /**
     * Get dealtypedescription
     *
     * @return string 
     */
    public function getDealtypedescription()
    {
        return $this->dealtypedescription;
    }

    /**
     * Set paymentcollection
     *
     * @param string $paymentcollection
     * @return DealTypes
     */
    public function setPaymentcollection($paymentcollection)
    {
        $this->paymentcollection = $paymentcollection;
    
        return $this;
    }

    /**
     * Get paymentcollection
     *
     * @return string 
     */
    public function getPaymentcollection()
    {
        return $this->paymentcollection;
    }

    /**
     * Set certficategenerate
     *
     * @param string $certficategenerate
     * @return DealTypes
     */
    public function setCertficategenerate($certficategenerate)
    {
        $this->certficategenerate = $certficategenerate;
    
        return $this;
    }

    /**
     * Get certficategenerate
     *
     * @return string 
     */
    public function getCertficategenerate()
    {
        return $this->certficategenerate;
    }

    /**
     * Set dealtypeposition
     *
     * @param integer $dealtypeposition
     * @return DealTypes
     */
    public function setDealtypeposition($dealtypeposition)
    {
        $this->dealtypeposition = $dealtypeposition;
    
        return $this;
    }

    /**
     * Get dealtypeposition
     *
     * @return integer 
     */
    public function getDealtypeposition()
    {
        return $this->dealtypeposition;
    }

    /**
     * Set dealtypestatus
     *
     * @param string $dealtypestatus
     * @return DealTypes
     */
    public function setDealtypestatus($dealtypestatus)
    {
        $this->dealtypestatus = $dealtypestatus;
    
        return $this;
    }

    /**
     * Get dealtypestatus
     *
     * @return string 
     */
    public function getDealtypestatus()
    {
        return $this->dealtypestatus;
    }

    /**
     * Set isfeatured
     *
     * @param string $isfeatured
     * @return DealTypes
     */
    public function setIsfeatured($isfeatured)
    {
        $this->isfeatured = $isfeatured;
    
        return $this;
    }

    /**
     * Get isfeatured
     *
     * @return string 
     */
    public function getIsfeatured()
    {
        return $this->isfeatured;
    }

    /**
     * Set featuredlink
     *
     * @param integer $featuredlink
     * @return DealTypes
     */
    public function setFeaturedlink($featuredlink)
    {
        $this->featuredlink = $featuredlink;
    
        return $this;
    }

    /**
     * Get featuredlink
     *
     * @return integer 
     */
    public function getFeaturedlink()
    {
        return $this->featuredlink;
    }

    /**
     * Set dealtypekey
     *
     * @param string $dealtypekey
     * @return DealTypes
     */
    public function setDealtypekey($dealtypekey)
    {
        $this->dealtypekey = $dealtypekey;
    
        return $this;
    }

    /**
     * Get dealtypekey
     *
     * @return string 
     */
    public function getDealtypekey()
    {
        return $this->dealtypekey;
    }

    /**
     * Set lockedstatus
     *
     * @param string $lockedstatus
     * @return DealTypes
     */
    public function setLockedstatus($lockedstatus)
    {
        $this->lockedstatus = $lockedstatus;
    
        return $this;
    }

    /**
     * Get lockedstatus
     *
     * @return string 
     */
    public function getLockedstatus()
    {
        return $this->lockedstatus;
    }
}