<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\GiftCoupons
 */
class GiftCoupons
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
     * @var string $giftfromname
     */
    private $giftfromname;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var string $couponto
     */
    private $couponto;

    /**
     * @var integer $redeemedby
     */
    private $redeemedby;

    /**
     * @var string $couponmessage
     */
    private $couponmessage;

    /**
     * @var string $couponcode
     */
    private $couponcode;

    /**
     * @var float $couponamount
     */
    private $couponamount;

    /**
     * @var string $couponemailto
     */
    private $couponemailto;

    /**
     * @var string $couponstatus
     */
    private $couponstatus;

    /**
     * @var string $sendmode
     */
    private $sendmode;

    /**
     * @var integer $giftemailtemplateid
     */
    private $giftemailtemplateid;

    /**
     * @var \DateTime $couponexpiry
     */
    private $couponexpiry;

    /**
     * @var \DateTime $redeemeddate
     */
    private $redeemeddate;

    /**
     * @var string $pdfdata
     */
    private $pdfdata;


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
     * @return GiftCoupons
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
     * Set giftfromname
     *
     * @param string $giftfromname
     * @return GiftCoupons
     */
    public function setGiftfromname($giftfromname)
    {
        $this->giftfromname = $giftfromname;
    
        return $this;
    }

    /**
     * Get giftfromname
     *
     * @return string 
     */
    public function getGiftfromname()
    {
        return $this->giftfromname;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     * @return GiftCoupons
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
     * Set couponto
     *
     * @param string $couponto
     * @return GiftCoupons
     */
    public function setCouponto($couponto)
    {
        $this->couponto = $couponto;
    
        return $this;
    }

    /**
     * Get couponto
     *
     * @return string 
     */
    public function getCouponto()
    {
        return $this->couponto;
    }

    /**
     * Set redeemedby
     *
     * @param integer $redeemedby
     * @return GiftCoupons
     */
    public function setRedeemedby($redeemedby)
    {
        $this->redeemedby = $redeemedby;
    
        return $this;
    }

    /**
     * Get redeemedby
     *
     * @return integer 
     */
    public function getRedeemedby()
    {
        return $this->redeemedby;
    }

    /**
     * Set couponmessage
     *
     * @param string $couponmessage
     * @return GiftCoupons
     */
    public function setCouponmessage($couponmessage)
    {
        $this->couponmessage = $couponmessage;
    
        return $this;
    }

    /**
     * Get couponmessage
     *
     * @return string 
     */
    public function getCouponmessage()
    {
        return $this->couponmessage;
    }

    /**
     * Set couponcode
     *
     * @param string $couponcode
     * @return GiftCoupons
     */
    public function setCouponcode($couponcode)
    {
        $this->couponcode = $couponcode;
    
        return $this;
    }

    /**
     * Get couponcode
     *
     * @return string 
     */
    public function getCouponcode()
    {
        return $this->couponcode;
    }

    /**
     * Set couponamount
     *
     * @param float $couponamount
     * @return GiftCoupons
     */
    public function setCouponamount($couponamount)
    {
        $this->couponamount = $couponamount;
    
        return $this;
    }

    /**
     * Get couponamount
     *
     * @return float 
     */
    public function getCouponamount()
    {
        return $this->couponamount;
    }

    /**
     * Set couponemailto
     *
     * @param string $couponemailto
     * @return GiftCoupons
     */
    public function setCouponemailto($couponemailto)
    {
        $this->couponemailto = $couponemailto;
    
        return $this;
    }

    /**
     * Get couponemailto
     *
     * @return string 
     */
    public function getCouponemailto()
    {
        return $this->couponemailto;
    }

    /**
     * Set couponstatus
     *
     * @param string $couponstatus
     * @return GiftCoupons
     */
    public function setCouponstatus($couponstatus)
    {
        $this->couponstatus = $couponstatus;
    
        return $this;
    }

    /**
     * Get couponstatus
     *
     * @return string 
     */
    public function getCouponstatus()
    {
        return $this->couponstatus;
    }

    /**
     * Set sendmode
     *
     * @param string $sendmode
     * @return GiftCoupons
     */
    public function setSendmode($sendmode)
    {
        $this->sendmode = $sendmode;
    
        return $this;
    }

    /**
     * Get sendmode
     *
     * @return string 
     */
    public function getSendmode()
    {
        return $this->sendmode;
    }

    /**
     * Set giftemailtemplateid
     *
     * @param integer $giftemailtemplateid
     * @return GiftCoupons
     */
    public function setGiftemailtemplateid($giftemailtemplateid)
    {
        $this->giftemailtemplateid = $giftemailtemplateid;
    
        return $this;
    }

    /**
     * Get giftemailtemplateid
     *
     * @return integer 
     */
    public function getGiftemailtemplateid()
    {
        return $this->giftemailtemplateid;
    }

    /**
     * Set couponexpiry
     *
     * @param \DateTime $couponexpiry
     * @return GiftCoupons
     */
    public function setCouponexpiry($couponexpiry)
    {
        $this->couponexpiry = $couponexpiry;
    
        return $this;
    }

    /**
     * Get couponexpiry
     *
     * @return \DateTime 
     */
    public function getCouponexpiry()
    {
        return $this->couponexpiry;
    }

    /**
     * Set redeemeddate
     *
     * @param \DateTime $redeemeddate
     * @return GiftCoupons
     */
    public function setRedeemeddate($redeemeddate)
    {
        $this->redeemeddate = $redeemeddate;
    
        return $this;
    }

    /**
     * Get redeemeddate
     *
     * @return \DateTime 
     */
    public function getRedeemeddate()
    {
        return $this->redeemeddate;
    }

    /**
     * Set pdfdata
     *
     * @param string $pdfdata
     * @return GiftCoupons
     */
    public function setPdfdata($pdfdata)
    {
        $this->pdfdata = $pdfdata;
    
        return $this;
    }

    /**
     * Get pdfdata
     *
     * @return string 
     */
    public function getPdfdata()
    {
        return $this->pdfdata;
    }
}