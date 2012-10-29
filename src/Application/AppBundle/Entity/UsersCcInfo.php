<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UsersCcInfo
 */
class UsersCcInfo
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
     * @var string $nameoncard
     */
    private $nameoncard;

    /**
     * @var string $cardtype
     */
    private $cardtype;

    /**
     * @var string $cardnumber
     */
    private $cardnumber;

    /**
     * @var boolean $expmonth
     */
    private $expmonth;

    /**
     * @var integer $expyear
     */
    private $expyear;

    /**
     * @var \DateTime $addeddate
     */
    private $addeddate;

    /**
     * @var string $securitycode
     */
    private $securitycode;


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
     * @return UsersCcInfo
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
     * Set nameoncard
     *
     * @param string $nameoncard
     * @return UsersCcInfo
     */
    public function setNameoncard($nameoncard)
    {
        $this->nameoncard = $nameoncard;
    
        return $this;
    }

    /**
     * Get nameoncard
     *
     * @return string 
     */
    public function getNameoncard()
    {
        return $this->nameoncard;
    }

    /**
     * Set cardtype
     *
     * @param string $cardtype
     * @return UsersCcInfo
     */
    public function setCardtype($cardtype)
    {
        $this->cardtype = $cardtype;
    
        return $this;
    }

    /**
     * Get cardtype
     *
     * @return string 
     */
    public function getCardtype()
    {
        return $this->cardtype;
    }

    /**
     * Set cardnumber
     *
     * @param string $cardnumber
     * @return UsersCcInfo
     */
    public function setCardnumber($cardnumber)
    {
        $this->cardnumber = $cardnumber;
    
        return $this;
    }

    /**
     * Get cardnumber
     *
     * @return string 
     */
    public function getCardnumber()
    {
        return $this->cardnumber;
    }

    /**
     * Set expmonth
     *
     * @param boolean $expmonth
     * @return UsersCcInfo
     */
    public function setExpmonth($expmonth)
    {
        $this->expmonth = $expmonth;
    
        return $this;
    }

    /**
     * Get expmonth
     *
     * @return boolean 
     */
    public function getExpmonth()
    {
        return $this->expmonth;
    }

    /**
     * Set expyear
     *
     * @param integer $expyear
     * @return UsersCcInfo
     */
    public function setExpyear($expyear)
    {
        $this->expyear = $expyear;
    
        return $this;
    }

    /**
     * Get expyear
     *
     * @return integer 
     */
    public function getExpyear()
    {
        return $this->expyear;
    }

    /**
     * Set addeddate
     *
     * @param \DateTime $addeddate
     * @return UsersCcInfo
     */
    public function setAddeddate($addeddate)
    {
        $this->addeddate = $addeddate;
    
        return $this;
    }

    /**
     * Get addeddate
     *
     * @return \DateTime 
     */
    public function getAddeddate()
    {
        return $this->addeddate;
    }

    /**
     * Set securitycode
     *
     * @param string $securitycode
     * @return UsersCcInfo
     */
    public function setSecuritycode($securitycode)
    {
        $this->securitycode = $securitycode;
    
        return $this;
    }

    /**
     * Get securitycode
     *
     * @return string 
     */
    public function getSecuritycode()
    {
        return $this->securitycode;
    }
}