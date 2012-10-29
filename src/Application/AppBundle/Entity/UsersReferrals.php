<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UsersReferrals
 */
class UsersReferrals
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $referedby
     */
    private $referedby;

    /**
     * @var integer $referedto
     */
    private $referedto;

    /**
     * @var string $purchasestatus
     */
    private $purchasestatus;

    /**
     * @var float $referralamount
     */
    private $referralamount;

    /**
     * @var string $referralstatus
     */
    private $referralstatus;

    /**
     * @var \DateTime $referalregactivedate
     */
    private $referalregactivedate;

    /**
     * @var \DateTime $lastactdate
     */
    private $lastactdate;


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
     * Set referedby
     *
     * @param integer $referedby
     * @return UsersReferrals
     */
    public function setReferedby($referedby)
    {
        $this->referedby = $referedby;
    
        return $this;
    }

    /**
     * Get referedby
     *
     * @return integer 
     */
    public function getReferedby()
    {
        return $this->referedby;
    }

    /**
     * Set referedto
     *
     * @param integer $referedto
     * @return UsersReferrals
     */
    public function setReferedto($referedto)
    {
        $this->referedto = $referedto;
    
        return $this;
    }

    /**
     * Get referedto
     *
     * @return integer 
     */
    public function getReferedto()
    {
        return $this->referedto;
    }

    /**
     * Set purchasestatus
     *
     * @param string $purchasestatus
     * @return UsersReferrals
     */
    public function setPurchasestatus($purchasestatus)
    {
        $this->purchasestatus = $purchasestatus;
    
        return $this;
    }

    /**
     * Get purchasestatus
     *
     * @return string 
     */
    public function getPurchasestatus()
    {
        return $this->purchasestatus;
    }

    /**
     * Set referralamount
     *
     * @param float $referralamount
     * @return UsersReferrals
     */
    public function setReferralamount($referralamount)
    {
        $this->referralamount = $referralamount;
    
        return $this;
    }

    /**
     * Get referralamount
     *
     * @return float 
     */
    public function getReferralamount()
    {
        return $this->referralamount;
    }

    /**
     * Set referralstatus
     *
     * @param string $referralstatus
     * @return UsersReferrals
     */
    public function setReferralstatus($referralstatus)
    {
        $this->referralstatus = $referralstatus;
    
        return $this;
    }

    /**
     * Get referralstatus
     *
     * @return string 
     */
    public function getReferralstatus()
    {
        return $this->referralstatus;
    }

    /**
     * Set referalregactivedate
     *
     * @param \DateTime $referalregactivedate
     * @return UsersReferrals
     */
    public function setReferalregactivedate($referalregactivedate)
    {
        $this->referalregactivedate = $referalregactivedate;
    
        return $this;
    }

    /**
     * Get referalregactivedate
     *
     * @return \DateTime 
     */
    public function getReferalregactivedate()
    {
        return $this->referalregactivedate;
    }

    /**
     * Set lastactdate
     *
     * @param \DateTime $lastactdate
     * @return UsersReferrals
     */
    public function setLastactdate($lastactdate)
    {
        $this->lastactdate = $lastactdate;
    
        return $this;
    }

    /**
     * Get lastactdate
     *
     * @return \DateTime 
     */
    public function getLastactdate()
    {
        return $this->lastactdate;
    }
}