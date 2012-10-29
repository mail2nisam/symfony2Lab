<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UserApi
 */
class UserApi
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var string $userapikey
     */
    private $userapikey;

    /**
     * @var string $apikeytitle
     */
    private $apikeytitle;

    /**
     * @var string $apiusertype
     */
    private $apiusertype;

    /**
     * @var string $apiuserstatus
     */
    private $apiuserstatus;

    /**
     * @var \DateTime $apiusercreateddate
     */
    private $apiusercreateddate;


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
     * Set userid
     *
     * @param integer $userid
     * @return UserApi
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
     * Set userapikey
     *
     * @param string $userapikey
     * @return UserApi
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
     * Set apikeytitle
     *
     * @param string $apikeytitle
     * @return UserApi
     */
    public function setApikeytitle($apikeytitle)
    {
        $this->apikeytitle = $apikeytitle;
    
        return $this;
    }

    /**
     * Get apikeytitle
     *
     * @return string 
     */
    public function getApikeytitle()
    {
        return $this->apikeytitle;
    }

    /**
     * Set apiusertype
     *
     * @param string $apiusertype
     * @return UserApi
     */
    public function setApiusertype($apiusertype)
    {
        $this->apiusertype = $apiusertype;
    
        return $this;
    }

    /**
     * Get apiusertype
     *
     * @return string 
     */
    public function getApiusertype()
    {
        return $this->apiusertype;
    }

    /**
     * Set apiuserstatus
     *
     * @param string $apiuserstatus
     * @return UserApi
     */
    public function setApiuserstatus($apiuserstatus)
    {
        $this->apiuserstatus = $apiuserstatus;
    
        return $this;
    }

    /**
     * Get apiuserstatus
     *
     * @return string 
     */
    public function getApiuserstatus()
    {
        return $this->apiuserstatus;
    }

    /**
     * Set apiusercreateddate
     *
     * @param \DateTime $apiusercreateddate
     * @return UserApi
     */
    public function setApiusercreateddate($apiusercreateddate)
    {
        $this->apiusercreateddate = $apiusercreateddate;
    
        return $this;
    }

    /**
     * Get apiusercreateddate
     *
     * @return \DateTime 
     */
    public function getApiusercreateddate()
    {
        return $this->apiusercreateddate;
    }
}