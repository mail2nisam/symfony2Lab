<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AffiliateToSubscribers
 */
class AffiliateToSubscribers
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $bulkid
     */
    private $bulkid;

    /**
     * @var string $subscemailid
     */
    private $subscemailid;

    /**
     * @var string $contactphone
     */
    private $contactphone;

    /**
     * @var string $confirmstatus
     */
    private $confirmstatus;

    /**
     * @var \DateTime $updateddate
     */
    private $updateddate;


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
     * Set bulkid
     *
     * @param integer $bulkid
     * @return AffiliateToSubscribers
     */
    public function setBulkid($bulkid)
    {
        $this->bulkid = $bulkid;
    
        return $this;
    }

    /**
     * Get bulkid
     *
     * @return integer 
     */
    public function getBulkid()
    {
        return $this->bulkid;
    }

    /**
     * Set subscemailid
     *
     * @param string $subscemailid
     * @return AffiliateToSubscribers
     */
    public function setSubscemailid($subscemailid)
    {
        $this->subscemailid = $subscemailid;
    
        return $this;
    }

    /**
     * Get subscemailid
     *
     * @return string 
     */
    public function getSubscemailid()
    {
        return $this->subscemailid;
    }

    /**
     * Set contactphone
     *
     * @param string $contactphone
     * @return AffiliateToSubscribers
     */
    public function setContactphone($contactphone)
    {
        $this->contactphone = $contactphone;
    
        return $this;
    }

    /**
     * Get contactphone
     *
     * @return string 
     */
    public function getContactphone()
    {
        return $this->contactphone;
    }

    /**
     * Set confirmstatus
     *
     * @param string $confirmstatus
     * @return AffiliateToSubscribers
     */
    public function setConfirmstatus($confirmstatus)
    {
        $this->confirmstatus = $confirmstatus;
    
        return $this;
    }

    /**
     * Get confirmstatus
     *
     * @return string 
     */
    public function getConfirmstatus()
    {
        return $this->confirmstatus;
    }

    /**
     * Set updateddate
     *
     * @param \DateTime $updateddate
     * @return AffiliateToSubscribers
     */
    public function setUpdateddate($updateddate)
    {
        $this->updateddate = $updateddate;
    
        return $this;
    }

    /**
     * Get updateddate
     *
     * @return \DateTime 
     */
    public function getUpdateddate()
    {
        return $this->updateddate;
    }
}