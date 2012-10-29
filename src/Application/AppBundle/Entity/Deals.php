<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Deals
 */
class Deals
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $dealtypeid
     */
    private $dealtypeid;

    /**
     * @var integer $businessid
     */
    private $businessid;

    /**
     * @var string $istaxable
     */
    private $istaxable;

    /**
     * @var integer $taxclassid
     */
    private $taxclassid;

    /**
     * @var float $taxrate
     */
    private $taxrate;

    /**
     * @var string $dealkey
     */
    private $dealkey;

    /**
     * @var string $dealtitle
     */
    private $dealtitle;

    /**
     * @var string $dealcertificatetitle
     */
    private $dealcertificatetitle;

    /**
     * @var string $dealfineprint
     */
    private $dealfineprint;

    /**
     * @var string $dealhighlights
     */
    private $dealhighlights;

    /**
     * @var string $dealdescription
     */
    private $dealdescription;

    /**
     * @var string $dealreviews
     */
    private $dealreviews;

    /**
     * @var string $certificateinstructions
     */
    private $certificateinstructions;

    /**
     * @var string $dealmetatitle
     */
    private $dealmetatitle;

    /**
     * @var string $dealmetadescription
     */
    private $dealmetadescription;

    /**
     * @var string $dealmetakeywords
     */
    private $dealmetakeywords;

    /**
     * @var string $dealbusinesslocations
     */
    private $dealbusinesslocations;

    /**
     * @var integer $dealtimezone
     */
    private $dealtimezone;

    /**
     * @var \DateTime $dealstarttime
     */
    private $dealstarttime;

    /**
     * @var \DateTime $dealendtime
     */
    private $dealendtime;

    /**
     * @var integer $dealminbuylimit
     */
    private $dealminbuylimit;

    /**
     * @var integer $dealmaxgiftbuy
     */
    private $dealmaxgiftbuy;

    /**
     * @var integer $dealmaxbuylimit
     */
    private $dealmaxbuylimit;

    /**
     * @var integer $dealminqntyreqtotipp
     */
    private $dealminqntyreqtotipp;

    /**
     * @var \DateTime $dealexpirydate
     */
    private $dealexpirydate;

    /**
     * @var float $dealcommissionrate
     */
    private $dealcommissionrate;

    /**
     * @var string $dealuseglobalcommision
     */
    private $dealuseglobalcommision;

    /**
     * @var string $dealcommissiontype
     */
    private $dealcommissiontype;

    /**
     * @var float $dealservicefee
     */
    private $dealservicefee;

    /**
     * @var string $dealshownosbought
     */
    private $dealshownosbought;

    /**
     * @var string $dealshowdealtipped
     */
    private $dealshowdealtipped;

    /**
     * @var string $dealonlineredemption
     */
    private $dealonlineredemption;

    /**
     * @var string $dealimage
     */
    private $dealimage;

    /**
     * @var integer $dealpriority
     */
    private $dealpriority;

    /**
     * @var string $dealstatus
     */
    private $dealstatus;

    /**
     * @var string $inventorytracklevel
     */
    private $inventorytracklevel;

    /**
     * @var \DateTime $dealcreateddate
     */
    private $dealcreateddate;

    /**
     * @var \DateTime $dealtippeddate
     */
    private $dealtippeddate;

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
     * Set dealtypeid
     *
     * @param integer $dealtypeid
     * @return Deals
     */
    public function setDealtypeid($dealtypeid)
    {
        $this->dealtypeid = $dealtypeid;
    
        return $this;
    }

    /**
     * Get dealtypeid
     *
     * @return integer 
     */
    public function getDealtypeid()
    {
        return $this->dealtypeid;
    }

    /**
     * Set businessid
     *
     * @param integer $businessid
     * @return Deals
     */
    public function setBusinessid($businessid)
    {
        $this->businessid = $businessid;
    
        return $this;
    }

    /**
     * Get businessid
     *
     * @return integer 
     */
    public function getBusinessid()
    {
        return $this->businessid;
    }

    /**
     * Set istaxable
     *
     * @param string $istaxable
     * @return Deals
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
     * Set taxclassid
     *
     * @param integer $taxclassid
     * @return Deals
     */
    public function setTaxclassid($taxclassid)
    {
        $this->taxclassid = $taxclassid;
    
        return $this;
    }

    /**
     * Get taxclassid
     *
     * @return integer 
     */
    public function getTaxclassid()
    {
        return $this->taxclassid;
    }

    /**
     * Set taxrate
     *
     * @param float $taxrate
     * @return Deals
     */
    public function setTaxrate($taxrate)
    {
        $this->taxrate = $taxrate;
    
        return $this;
    }

    /**
     * Get taxrate
     *
     * @return float 
     */
    public function getTaxrate()
    {
        return $this->taxrate;
    }

    /**
     * Set dealkey
     *
     * @param string $dealkey
     * @return Deals
     */
    public function setDealkey($dealkey)
    {
        $this->dealkey = $dealkey;
    
        return $this;
    }

    /**
     * Get dealkey
     *
     * @return string 
     */
    public function getDealkey()
    {
        return $this->dealkey;
    }

    /**
     * Set dealtitle
     *
     * @param string $dealtitle
     * @return Deals
     */
    public function setDealtitle($dealtitle)
    {
        $this->dealtitle = $dealtitle;
    
        return $this;
    }

    /**
     * Get dealtitle
     *
     * @return string 
     */
    public function getDealtitle()
    {
        return $this->dealtitle;
    }

    /**
     * Set dealcertificatetitle
     *
     * @param string $dealcertificatetitle
     * @return Deals
     */
    public function setDealcertificatetitle($dealcertificatetitle)
    {
        $this->dealcertificatetitle = $dealcertificatetitle;
    
        return $this;
    }

    /**
     * Get dealcertificatetitle
     *
     * @return string 
     */
    public function getDealcertificatetitle()
    {
        return $this->dealcertificatetitle;
    }

    /**
     * Set dealfineprint
     *
     * @param string $dealfineprint
     * @return Deals
     */
    public function setDealfineprint($dealfineprint)
    {
        $this->dealfineprint = $dealfineprint;
    
        return $this;
    }

    /**
     * Get dealfineprint
     *
     * @return string 
     */
    public function getDealfineprint()
    {
        return $this->dealfineprint;
    }

    /**
     * Set dealhighlights
     *
     * @param string $dealhighlights
     * @return Deals
     */
    public function setDealhighlights($dealhighlights)
    {
        $this->dealhighlights = $dealhighlights;
    
        return $this;
    }

    /**
     * Get dealhighlights
     *
     * @return string 
     */
    public function getDealhighlights()
    {
        return $this->dealhighlights;
    }

    /**
     * Set dealdescription
     *
     * @param string $dealdescription
     * @return Deals
     */
    public function setDealdescription($dealdescription)
    {
        $this->dealdescription = $dealdescription;
    
        return $this;
    }

    /**
     * Get dealdescription
     *
     * @return string 
     */
    public function getDealdescription()
    {
        return $this->dealdescription;
    }

    /**
     * Set dealreviews
     *
     * @param string $dealreviews
     * @return Deals
     */
    public function setDealreviews($dealreviews)
    {
        $this->dealreviews = $dealreviews;
    
        return $this;
    }

    /**
     * Get dealreviews
     *
     * @return string 
     */
    public function getDealreviews()
    {
        return $this->dealreviews;
    }

    /**
     * Set certificateinstructions
     *
     * @param string $certificateinstructions
     * @return Deals
     */
    public function setCertificateinstructions($certificateinstructions)
    {
        $this->certificateinstructions = $certificateinstructions;
    
        return $this;
    }

    /**
     * Get certificateinstructions
     *
     * @return string 
     */
    public function getCertificateinstructions()
    {
        return $this->certificateinstructions;
    }

    /**
     * Set dealmetatitle
     *
     * @param string $dealmetatitle
     * @return Deals
     */
    public function setDealmetatitle($dealmetatitle)
    {
        $this->dealmetatitle = $dealmetatitle;
    
        return $this;
    }

    /**
     * Get dealmetatitle
     *
     * @return string 
     */
    public function getDealmetatitle()
    {
        return $this->dealmetatitle;
    }

    /**
     * Set dealmetadescription
     *
     * @param string $dealmetadescription
     * @return Deals
     */
    public function setDealmetadescription($dealmetadescription)
    {
        $this->dealmetadescription = $dealmetadescription;
    
        return $this;
    }

    /**
     * Get dealmetadescription
     *
     * @return string 
     */
    public function getDealmetadescription()
    {
        return $this->dealmetadescription;
    }

    /**
     * Set dealmetakeywords
     *
     * @param string $dealmetakeywords
     * @return Deals
     */
    public function setDealmetakeywords($dealmetakeywords)
    {
        $this->dealmetakeywords = $dealmetakeywords;
    
        return $this;
    }

    /**
     * Get dealmetakeywords
     *
     * @return string 
     */
    public function getDealmetakeywords()
    {
        return $this->dealmetakeywords;
    }

    /**
     * Set dealbusinesslocations
     *
     * @param string $dealbusinesslocations
     * @return Deals
     */
    public function setDealbusinesslocations($dealbusinesslocations)
    {
        $this->dealbusinesslocations = $dealbusinesslocations;
    
        return $this;
    }

    /**
     * Get dealbusinesslocations
     *
     * @return string 
     */
    public function getDealbusinesslocations()
    {
        return $this->dealbusinesslocations;
    }

    /**
     * Set dealtimezone
     *
     * @param integer $dealtimezone
     * @return Deals
     */
    public function setDealtimezone($dealtimezone)
    {
        $this->dealtimezone = $dealtimezone;
    
        return $this;
    }

    /**
     * Get dealtimezone
     *
     * @return integer 
     */
    public function getDealtimezone()
    {
        return $this->dealtimezone;
    }

    /**
     * Set dealstarttime
     *
     * @param \DateTime $dealstarttime
     * @return Deals
     */
    public function setDealstarttime($dealstarttime)
    {
        $this->dealstarttime = $dealstarttime;
    
        return $this;
    }

    /**
     * Get dealstarttime
     *
     * @return \DateTime 
     */
    public function getDealstarttime()
    {
        return $this->dealstarttime;
    }

    /**
     * Set dealendtime
     *
     * @param \DateTime $dealendtime
     * @return Deals
     */
    public function setDealendtime($dealendtime)
    {
        $this->dealendtime = $dealendtime;
    
        return $this;
    }

    /**
     * Get dealendtime
     *
     * @return \DateTime 
     */
    public function getDealendtime()
    {
        return $this->dealendtime;
    }

    /**
     * Set dealminbuylimit
     *
     * @param integer $dealminbuylimit
     * @return Deals
     */
    public function setDealminbuylimit($dealminbuylimit)
    {
        $this->dealminbuylimit = $dealminbuylimit;
    
        return $this;
    }

    /**
     * Get dealminbuylimit
     *
     * @return integer 
     */
    public function getDealminbuylimit()
    {
        return $this->dealminbuylimit;
    }

    /**
     * Set dealmaxgiftbuy
     *
     * @param integer $dealmaxgiftbuy
     * @return Deals
     */
    public function setDealmaxgiftbuy($dealmaxgiftbuy)
    {
        $this->dealmaxgiftbuy = $dealmaxgiftbuy;
    
        return $this;
    }

    /**
     * Get dealmaxgiftbuy
     *
     * @return integer 
     */
    public function getDealmaxgiftbuy()
    {
        return $this->dealmaxgiftbuy;
    }

    /**
     * Set dealmaxbuylimit
     *
     * @param integer $dealmaxbuylimit
     * @return Deals
     */
    public function setDealmaxbuylimit($dealmaxbuylimit)
    {
        $this->dealmaxbuylimit = $dealmaxbuylimit;
    
        return $this;
    }

    /**
     * Get dealmaxbuylimit
     *
     * @return integer 
     */
    public function getDealmaxbuylimit()
    {
        return $this->dealmaxbuylimit;
    }

    /**
     * Set dealminqntyreqtotipp
     *
     * @param integer $dealminqntyreqtotipp
     * @return Deals
     */
    public function setDealminqntyreqtotipp($dealminqntyreqtotipp)
    {
        $this->dealminqntyreqtotipp = $dealminqntyreqtotipp;
    
        return $this;
    }

    /**
     * Get dealminqntyreqtotipp
     *
     * @return integer 
     */
    public function getDealminqntyreqtotipp()
    {
        return $this->dealminqntyreqtotipp;
    }

    /**
     * Set dealexpirydate
     *
     * @param \DateTime $dealexpirydate
     * @return Deals
     */
    public function setDealexpirydate($dealexpirydate)
    {
        $this->dealexpirydate = $dealexpirydate;
    
        return $this;
    }

    /**
     * Get dealexpirydate
     *
     * @return \DateTime 
     */
    public function getDealexpirydate()
    {
        return $this->dealexpirydate;
    }

    /**
     * Set dealcommissionrate
     *
     * @param float $dealcommissionrate
     * @return Deals
     */
    public function setDealcommissionrate($dealcommissionrate)
    {
        $this->dealcommissionrate = $dealcommissionrate;
    
        return $this;
    }

    /**
     * Get dealcommissionrate
     *
     * @return float 
     */
    public function getDealcommissionrate()
    {
        return $this->dealcommissionrate;
    }

    /**
     * Set dealuseglobalcommision
     *
     * @param string $dealuseglobalcommision
     * @return Deals
     */
    public function setDealuseglobalcommision($dealuseglobalcommision)
    {
        $this->dealuseglobalcommision = $dealuseglobalcommision;
    
        return $this;
    }

    /**
     * Get dealuseglobalcommision
     *
     * @return string 
     */
    public function getDealuseglobalcommision()
    {
        return $this->dealuseglobalcommision;
    }

    /**
     * Set dealcommissiontype
     *
     * @param string $dealcommissiontype
     * @return Deals
     */
    public function setDealcommissiontype($dealcommissiontype)
    {
        $this->dealcommissiontype = $dealcommissiontype;
    
        return $this;
    }

    /**
     * Get dealcommissiontype
     *
     * @return string 
     */
    public function getDealcommissiontype()
    {
        return $this->dealcommissiontype;
    }

    /**
     * Set dealservicefee
     *
     * @param float $dealservicefee
     * @return Deals
     */
    public function setDealservicefee($dealservicefee)
    {
        $this->dealservicefee = $dealservicefee;
    
        return $this;
    }

    /**
     * Get dealservicefee
     *
     * @return float 
     */
    public function getDealservicefee()
    {
        return $this->dealservicefee;
    }

    /**
     * Set dealshownosbought
     *
     * @param string $dealshownosbought
     * @return Deals
     */
    public function setDealshownosbought($dealshownosbought)
    {
        $this->dealshownosbought = $dealshownosbought;
    
        return $this;
    }

    /**
     * Get dealshownosbought
     *
     * @return string 
     */
    public function getDealshownosbought()
    {
        return $this->dealshownosbought;
    }

    /**
     * Set dealshowdealtipped
     *
     * @param string $dealshowdealtipped
     * @return Deals
     */
    public function setDealshowdealtipped($dealshowdealtipped)
    {
        $this->dealshowdealtipped = $dealshowdealtipped;
    
        return $this;
    }

    /**
     * Get dealshowdealtipped
     *
     * @return string 
     */
    public function getDealshowdealtipped()
    {
        return $this->dealshowdealtipped;
    }

    /**
     * Set dealonlineredemption
     *
     * @param string $dealonlineredemption
     * @return Deals
     */
    public function setDealonlineredemption($dealonlineredemption)
    {
        $this->dealonlineredemption = $dealonlineredemption;
    
        return $this;
    }

    /**
     * Get dealonlineredemption
     *
     * @return string 
     */
    public function getDealonlineredemption()
    {
        return $this->dealonlineredemption;
    }

    /**
     * Set dealimage
     *
     * @param string $dealimage
     * @return Deals
     */
    public function setDealimage($dealimage)
    {
        $this->dealimage = $dealimage;
    
        return $this;
    }

    /**
     * Get dealimage
     *
     * @return string 
     */
    public function getDealimage()
    {
        return $this->dealimage;
    }

    /**
     * Set dealpriority
     *
     * @param integer $dealpriority
     * @return Deals
     */
    public function setDealpriority($dealpriority)
    {
        $this->dealpriority = $dealpriority;
    
        return $this;
    }

    /**
     * Get dealpriority
     *
     * @return integer 
     */
    public function getDealpriority()
    {
        return $this->dealpriority;
    }

    /**
     * Set dealstatus
     *
     * @param string $dealstatus
     * @return Deals
     */
    public function setDealstatus($dealstatus)
    {
        $this->dealstatus = $dealstatus;
    
        return $this;
    }

    /**
     * Get dealstatus
     *
     * @return string 
     */
    public function getDealstatus()
    {
        return $this->dealstatus;
    }

    /**
     * Set inventorytracklevel
     *
     * @param string $inventorytracklevel
     * @return Deals
     */
    public function setInventorytracklevel($inventorytracklevel)
    {
        $this->inventorytracklevel = $inventorytracklevel;
    
        return $this;
    }

    /**
     * Get inventorytracklevel
     *
     * @return string 
     */
    public function getInventorytracklevel()
    {
        return $this->inventorytracklevel;
    }

    /**
     * Set dealcreateddate
     *
     * @param \DateTime $dealcreateddate
     * @return Deals
     */
    public function setDealcreateddate($dealcreateddate)
    {
        $this->dealcreateddate = $dealcreateddate;
    
        return $this;
    }

    /**
     * Get dealcreateddate
     *
     * @return \DateTime 
     */
    public function getDealcreateddate()
    {
        return $this->dealcreateddate;
    }

    /**
     * Set dealtippeddate
     *
     * @param \DateTime $dealtippeddate
     * @return Deals
     */
    public function setDealtippeddate($dealtippeddate)
    {
        $this->dealtippeddate = $dealtippeddate;
    
        return $this;
    }

    /**
     * Get dealtippeddate
     *
     * @return \DateTime 
     */
    public function getDealtippeddate()
    {
        return $this->dealtippeddate;
    }

    /**
     * Set shippingstatus
     *
     * @param string $shippingstatus
     * @return Deals
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