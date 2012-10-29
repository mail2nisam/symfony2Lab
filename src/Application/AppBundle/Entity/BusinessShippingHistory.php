<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\BusinessShippingHistory
 */
class BusinessShippingHistory
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \DateTime $activitydate
     */
    private $activitydate;

    /**
     * @var string $comment
     */
    private $comment;

    /**
     * @var string $notifycustomer
     */
    private $notifycustomer;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var string $shippingstatus
     */
    private $shippingstatus;


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
     * Set activitydate
     *
     * @param \DateTime $activitydate
     * @return BusinessShippingHistory
     */
    public function setActivitydate($activitydate)
    {
        $this->activitydate = $activitydate;
    
        return $this;
    }

    /**
     * Get activitydate
     *
     * @return \DateTime 
     */
    public function getActivitydate()
    {
        return $this->activitydate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return BusinessShippingHistory
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set notifycustomer
     *
     * @param string $notifycustomer
     * @return BusinessShippingHistory
     */
    public function setNotifycustomer($notifycustomer)
    {
        $this->notifycustomer = $notifycustomer;
    
        return $this;
    }

    /**
     * Get notifycustomer
     *
     * @return string 
     */
    public function getNotifycustomer()
    {
        return $this->notifycustomer;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     * @return BusinessShippingHistory
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    
        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set shippingstatus
     *
     * @param string $shippingstatus
     * @return BusinessShippingHistory
     */
    public function setShippingstatus($shippingstatus)
    {
        $this->shippingstatus = $shippingstatus;
    
        return $this;
    }

    /**
     * Get shippingstatus
     *
     * @return string 
     */
    public function getShippingstatus()
    {
        return $this->shippingstatus;
    }
}