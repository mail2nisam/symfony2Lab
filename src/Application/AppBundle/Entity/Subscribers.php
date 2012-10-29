<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Subscribers
 */
class Subscribers
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $subscemailid
     */
    private $subscemailid;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var string $contactphone
     */
    private $contactphone;


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
     * Set subscemailid
     *
     * @param string $subscemailid
     * @return Subscribers
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
     * Set userid
     *
     * @param integer $userid
     * @return Subscribers
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set contactphone
     *
     * @param string $contactphone
     * @return Subscribers
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
}