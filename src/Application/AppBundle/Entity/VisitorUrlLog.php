<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\VisitorUrlLog
 */
class VisitorUrlLog
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $visitorid
     */
    private $visitorid;

    /**
     * @var string $currenturl
     */
    private $currenturl;

    /**
     * @var string $refererurl
     */
    private $refererurl;

    /**
     * @var \DateTime $visittime
     */
    private $visittime;


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
     * Set visitorid
     *
     * @param integer $visitorid
     * @return VisitorUrlLog
     */
    public function setVisitorid($visitorid)
    {
        $this->visitorid = $visitorid;
    
        return $this;
    }

    /**
     * Get visitorid
     *
     * @return integer 
     */
    public function getVisitorid()
    {
        return $this->visitorid;
    }

    /**
     * Set currenturl
     *
     * @param string $currenturl
     * @return VisitorUrlLog
     */
    public function setCurrenturl($currenturl)
    {
        $this->currenturl = $currenturl;
    
        return $this;
    }

    /**
     * Get currenturl
     *
     * @return string 
     */
    public function getCurrenturl()
    {
        return $this->currenturl;
    }

    /**
     * Set refererurl
     *
     * @param string $refererurl
     * @return VisitorUrlLog
     */
    public function setRefererurl($refererurl)
    {
        $this->refererurl = $refererurl;
    
        return $this;
    }

    /**
     * Get refererurl
     *
     * @return string 
     */
    public function getRefererurl()
    {
        return $this->refererurl;
    }

    /**
     * Set visittime
     *
     * @param \DateTime $visittime
     * @return VisitorUrlLog
     */
    public function setVisittime($visittime)
    {
        $this->visittime = $visittime;
    
        return $this;
    }

    /**
     * Get visittime
     *
     * @return \DateTime 
     */
    public function getVisittime()
    {
        return $this->visittime;
    }
}