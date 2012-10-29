<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\OrderItems
 */
class OrderItems
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var integer $dealoptionid
     */
    private $dealoptionid;

    /**
     * @var float $orderitemprice
     */
    private $orderitemprice;

    /**
     * @var integer $orderitemquantity
     */
    private $orderitemquantity;

    /**
     * @var float $orderitemsubtotal
     */
    private $orderitemsubtotal;

    /**
     * @var string $istaxable
     */
    private $istaxable;

    /**
     * @var float $orderitemtaxrate
     */
    private $orderitemtaxrate;

    /**
     * @var string $orderitemtaxdescription
     */
    private $orderitemtaxdescription;

    /**
     * @var string $ordergiveasgift
     */
    private $ordergiveasgift;

    /**
     * @var string $certificatename
     */
    private $certificatename;

    /**
     * @var string $certificateemail
     */
    private $certificateemail;

    /**
     * @var string $dealoptionname
     */
    private $dealoptionname;

    /**
     * @var string $dealoptioncerttitle
     */
    private $dealoptioncerttitle;

    /**
     * @var \DateTime $addedtime
     */
    private $addedtime;

    /**
     * @var integer $redeemslotid
     */
    private $redeemslotid;


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
     * Set orderid
     *
     * @param integer $orderid
     * @return OrderItems
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
     * Set dealid
     *
     * @param integer $dealid
     * @return OrderItems
     */
    public function setDealid($dealid)
    {
        $this->dealid = $dealid;
    
        return $this;
    }

    /**
     * Get dealid
     *
     * @return integer 
     */
    public function getDealid()
    {
        return $this->dealid;
    }

    /**
     * Set dealoptionid
     *
     * @param integer $dealoptionid
     * @return OrderItems
     */
    public function setDealoptionid($dealoptionid)
    {
        $this->dealoptionid = $dealoptionid;
    
        return $this;
    }

    /**
     * Get dealoptionid
     *
     * @return integer 
     */
    public function getDealoptionid()
    {
        return $this->dealoptionid;
    }

    /**
     * Set orderitemprice
     *
     * @param float $orderitemprice
     * @return OrderItems
     */
    public function setOrderitemprice($orderitemprice)
    {
        $this->orderitemprice = $orderitemprice;
    
        return $this;
    }

    /**
     * Get orderitemprice
     *
     * @return float 
     */
    public function getOrderitemprice()
    {
        return $this->orderitemprice;
    }

    /**
     * Set orderitemquantity
     *
     * @param integer $orderitemquantity
     * @return OrderItems
     */
    public function setOrderitemquantity($orderitemquantity)
    {
        $this->orderitemquantity = $orderitemquantity;
    
        return $this;
    }

    /**
     * Get orderitemquantity
     *
     * @return integer 
     */
    public function getOrderitemquantity()
    {
        return $this->orderitemquantity;
    }

    /**
     * Set orderitemsubtotal
     *
     * @param float $orderitemsubtotal
     * @return OrderItems
     */
    public function setOrderitemsubtotal($orderitemsubtotal)
    {
        $this->orderitemsubtotal = $orderitemsubtotal;
    
        return $this;
    }

    /**
     * Get orderitemsubtotal
     *
     * @return float 
     */
    public function getOrderitemsubtotal()
    {
        return $this->orderitemsubtotal;
    }

    /**
     * Set istaxable
     *
     * @param string $istaxable
     * @return OrderItems
     */
    public function setIstaxable($istaxable)
    {
        $this->istaxable = $istaxable;
    
        return $this;
    }

    /**
     * Get istaxable
     *
     * @return string 
     */
    public function getIstaxable()
    {
        return $this->istaxable;
    }

    /**
     * Set orderitemtaxrate
     *
     * @param float $orderitemtaxrate
     * @return OrderItems
     */
    public function setOrderitemtaxrate($orderitemtaxrate)
    {
        $this->orderitemtaxrate = $orderitemtaxrate;
    
        return $this;
    }

    /**
     * Get orderitemtaxrate
     *
     * @return float 
     */
    public function getOrderitemtaxrate()
    {
        return $this->orderitemtaxrate;
    }

    /**
     * Set orderitemtaxdescription
     *
     * @param string $orderitemtaxdescription
     * @return OrderItems
     */
    public function setOrderitemtaxdescription($orderitemtaxdescription)
    {
        $this->orderitemtaxdescription = $orderitemtaxdescription;
    
        return $this;
    }

    /**
     * Get orderitemtaxdescription
     *
     * @return string 
     */
    public function getOrderitemtaxdescription()
    {
        return $this->orderitemtaxdescription;
    }

    /**
     * Set ordergiveasgift
     *
     * @param string $ordergiveasgift
     * @return OrderItems
     */
    public function setOrdergiveasgift($ordergiveasgift)
    {
        $this->ordergiveasgift = $ordergiveasgift;
    
        return $this;
    }

    /**
     * Get ordergiveasgift
     *
     * @return string 
     */
    public function getOrdergiveasgift()
    {
        return $this->ordergiveasgift;
    }

    /**
     * Set certificatename
     *
     * @param string $certificatename
     * @return OrderItems
     */
    public function setCertificatename($certificatename)
    {
        $this->certificatename = $certificatename;
    
        return $this;
    }

    /**
     * Get certificatename
     *
     * @return string 
     */
    public function getCertificatename()
    {
        return $this->certificatename;
    }

    /**
     * Set certificateemail
     *
     * @param string $certificateemail
     * @return OrderItems
     */
    public function setCertificateemail($certificateemail)
    {
        $this->certificateemail = $certificateemail;
    
        return $this;
    }

    /**
     * Get certificateemail
     *
     * @return string 
     */
    public function getCertificateemail()
    {
        return $this->certificateemail;
    }

    /**
     * Set dealoptionname
     *
     * @param string $dealoptionname
     * @return OrderItems
     */
    public function setDealoptionname($dealoptionname)
    {
        $this->dealoptionname = $dealoptionname;
    
        return $this;
    }

    /**
     * Get dealoptionname
     *
     * @return string 
     */
    public function getDealoptionname()
    {
        return $this->dealoptionname;
    }

    /**
     * Set dealoptioncerttitle
     *
     * @param string $dealoptioncerttitle
     * @return OrderItems
     */
    public function setDealoptioncerttitle($dealoptioncerttitle)
    {
        $this->dealoptioncerttitle = $dealoptioncerttitle;
    
        return $this;
    }

    /**
     * Get dealoptioncerttitle
     *
     * @return string 
     */
    public function getDealoptioncerttitle()
    {
        return $this->dealoptioncerttitle;
    }

    /**
     * Set addedtime
     *
     * @param \DateTime $addedtime
     * @return OrderItems
     */
    public function setAddedtime($addedtime)
    {
        $this->addedtime = $addedtime;
    
        return $this;
    }

    /**
     * Get addedtime
     *
     * @return \DateTime 
     */
    public function getAddedtime()
    {
        return $this->addedtime;
    }

    /**
     * Set redeemslotid
     *
     * @param integer $redeemslotid
     * @return OrderItems
     */
    public function setRedeemslotid($redeemslotid)
    {
        $this->redeemslotid = $redeemslotid;
    
        return $this;
    }

    /**
     * Get redeemslotid
     *
     * @return integer 
     */
    public function getRedeemslotid()
    {
        return $this->redeemslotid;
    }
}