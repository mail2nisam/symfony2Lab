<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\ApiAccess
 */
class ApiAccess
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $userapikey
     */
    private $userapikey;

    /**
     * @var \DateTime $lastaccess
     */
    private $lastaccess;

    /**
     * @var integer $accesscount
     */
    private $accesscount;

    /**
     * @var string $section
     */
    private $section;

    /**
     * @var \DateTime $accesstime
     */
    private $accesstime;


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
     * Set userapikey
     *
     * @param string $userapikey
     * @return ApiAccess
     */
    public function setUserapikey($userapikey)
    {
        $this->userapikey = $userapikey;
    
        return $this;
    }

    /**
     * Get userapikey
     *
     * @return string 
     */
    public function getUserapikey()
    {
        return $this->userapikey;
    }

    /**
     * Set lastaccess
     *
     * @param \DateTime $lastaccess
     * @return ApiAccess
     */
    public function setLastaccess($lastaccess)
    {
        $this->lastaccess = $lastaccess;
    
        return $this;
    }

    /**
     * Get lastaccess
     *
     * @return \DateTime 
     */
    public function getLastaccess()
    {
        return $this->lastaccess;
    }

    /**
     * Set accesscount
     *
     * @param integer $accesscount
     * @return ApiAccess
     */
    public function setAccesscount($accesscount)
    {
        $this->accesscount = $accesscount;
    
        return $this;
    }

    /**
     * Get accesscount
     *
     * @return integer 
     */
    public function getAccesscount()
    {
        return $this->accesscount;
    }

    /**
     * Set section
     *
     * @param string $section
     * @return ApiAccess
     */
    public function setSection($section)
    {
        $this->section = $section;
    
        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set accesstime
     *
     * @param \DateTime $accesstime
     * @return ApiAccess
     */
    public function setAccesstime($accesstime)
    {
        $this->accesstime = $accesstime;
    
        return $this;
    }

    /**
     * Get accesstime
     *
     * @return \DateTime 
     */
    public function getAccesstime()
    {
        return $this->accesstime;
    }
}