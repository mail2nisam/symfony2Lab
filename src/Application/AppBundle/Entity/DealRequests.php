<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealRequests
 */
class DealRequests
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
     * @var string $dealrequestkey
     */
    private $dealrequestkey;

    /**
     * @var string $dealrequestbusinesslocations
     */
    private $dealrequestbusinesslocations;

    /**
     * @var integer $dealrequesttimezone
     */
    private $dealrequesttimezone;

    /**
     * @var \DateTime $dealrequeststarttime
     */
    private $dealrequeststarttime;

    /**
     * @var \DateTime $dealrequestendtime
     */
    private $dealrequestendtime;

    /**
     * @var integer $dealrequestminbuylimit
     */
    private $dealrequestminbuylimit;

    /**
     * @var integer $dealrequestmaxbuylimit
     */
    private $dealrequestmaxbuylimit;

    /**
     * @var integer $dealrequestminqntyreqtotipp
     */
    private $dealrequestminqntyreqtotipp;

    /**
     * @var \DateTime $dealrequestexpirydate
     */
    private $dealrequestexpirydate;

    /**
     * @var string $dealrequestshownosbought
     */
    private $dealrequestshownosbought;

    /**
     * @var string $dealrequestshowdealtipped
     */
    private $dealrequestshowdealtipped;

    /**
     * @var string $dealrequestonlineredemption
     */
    private $dealrequestonlineredemption;

    /**
     * @var string $dealrequestimage
     */
    private $dealrequestimage;

    /**
     * @var \DateTime $dealrequestdate
     */
    private $dealrequestdate;

    /**
     * @var string $dealrequeststatus
     */
    private $dealrequeststatus;

    /**
     * @var integer $dealrequestmaxgiftbuy
     */
    private $dealrequestmaxgiftbuy;

    /**
     * @var string $shippingstatus
     */
    private $shippingstatus;

    /**
     * @var string $dealrequesttitle
     */
    private $dealrequesttitle;

    /**
     * @var string $dealrequestcertificatetitle
     */
    private $dealrequestcertificatetitle;

    /**
     * @var string $dealrequestfineprint
     */
    private $dealrequestfineprint;

    /**
     * @var string $dealrequesthighlights
     */
    private $dealrequesthighlights;

    /**
     * @var string $dealrequestdescription
     */
    private $dealrequestdescription;

    /**
     * @var string $dealrequestreviews
     */
    private $dealrequestreviews;

    /**
     * @var string $dealrequestcertificateinstructions
     */
    private $dealrequestcertificateinstructions;


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
     * @return DealRequests
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
     * @return DealRequests
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
     * Set dealrequestkey
     *
     * @param string $dealrequestkey
     * @return DealRequests
     */
    public function setDealrequestkey($dealrequestkey)
    {
        $this->dealrequestkey = $dealrequestkey;
    
        return $this;
    }

    /**
     * Get dealrequestkey
     *
     * @return string 
     */
    public function getDealrequestkey()
    {
        return $this->dealrequestkey;
    }

    /**
     * Set dealrequestbusinesslocations
     *
     * @param string $dealrequestbusinesslocations
     * @return DealRequests
     */
    public function setDealrequestbusinesslocations($dealrequestbusinesslocations)
    {
        $this->dealrequestbusinesslocations = $dealrequestbusinesslocations;
    
        return $this;
    }

    /**
     * Get dealrequestbusinesslocations
     *
     * @return string 
     */
    public function getDealrequestbusinesslocations()
    {
        return $this->dealrequestbusinesslocations;
    }

    /**
     * Set dealrequesttimezone
     *
     * @param integer $dealrequesttimezone
     * @return DealRequests
     */
    public function setDealrequesttimezone($dealrequesttimezone)
    {
        $this->dealrequesttimezone = $dealrequesttimezone;
    
        return $this;
    }

    /**
     * Get dealrequesttimezone
     *
     * @return integer 
     */
    public function getDealrequesttimezone()
    {
        return $this->dealrequesttimezone;
    }

    /**
     * Set dealrequeststarttime
     *
     * @param \DateTime $dealrequeststarttime
     * @return DealRequests
     */
    public function setDealrequeststarttime($dealrequeststarttime)
    {
        $this->dealrequeststarttime = $dealrequeststarttime;
    
        return $this;
    }

    /**
     * Get dealrequeststarttime
     *
     * @return \DateTime 
     */
    public function getDealrequeststarttime()
    {
        return $this->dealrequeststarttime;
    }

    /**
     * Set dealrequestendtime
     *
     * @param \DateTime $dealrequestendtime
     * @return DealRequests
     */
    public function setDealrequestendtime($dealrequestendtime)
    {
        $this->dealrequestendtime = $dealrequestendtime;
    
        return $this;
    }

    /**
     * Get dealrequestendtime
     *
     * @return \DateTime 
     */
    public function getDealrequestendtime()
    {
        return $this->dealrequestendtime;
    }

    /**
     * Set dealrequestminbuylimit
     *
     * @param integer $dealrequestminbuylimit
     * @return DealRequests
     */
    public function setDealrequestminbuylimit($dealrequestminbuylimit)
    {
        $this->dealrequestminbuylimit = $dealrequestminbuylimit;
    
        return $this;
    }

    /**
     * Get dealrequestminbuylimit
     *
     * @return integer 
     */
    public function getDealrequestminbuylimit()
    {
        return $this->dealrequestminbuylimit;
    }

    /**
     * Set dealrequestmaxbuylimit
     *
     * @param integer $dealrequestmaxbuylimit
     * @return DealRequests
     */
    public function setDealrequestmaxbuylimit($dealrequestmaxbuylimit)
    {
        $this->dealrequestmaxbuylimit = $dealrequestmaxbuylimit;
    
        return $this;
    }

    /**
     * Get dealrequestmaxbuylimit
     *
     * @return integer 
     */
    public function getDealrequestmaxbuylimit()
    {
        return $this->dealrequestmaxbuylimit;
    }

    /**
     * Set dealrequestminqntyreqtotipp
     *
     * @param integer $dealrequestminqntyreqtotipp
     * @return DealRequests
     */
    public function setDealrequestminqntyreqtotipp($dealrequestminqntyreqtotipp)
    {
        $this->dealrequestminqntyreqtotipp = $dealrequestminqntyreqtotipp;
    
        return $this;
    }

    /**
     * Get dealrequestminqntyreqtotipp
     *
     * @return integer 
     */
    public function getDealrequestminqntyreqtotipp()
    {
        return $this->dealrequestminqntyreqtotipp;
    }

    /**
     * Set dealrequestexpirydate
     *
     * @param \DateTime $dealrequestexpirydate
     * @return DealRequests
     */
    public function setDealrequestexpirydate($dealrequestexpirydate)
    {
        $this->dealrequestexpirydate = $dealrequestexpirydate;
    
        return $this;
    }

    /**
     * Get dealrequestexpirydate
     *
     * @return \DateTime 
     */
    public function getDealrequestexpirydate()
    {
        return $this->dealrequestexpirydate;
    }

    /**
     * Set dealrequestshownosbought
     *
     * @param string $dealrequestshownosbought
     * @return DealRequests
     */
    public function setDealrequestshownosbought($dealrequestshownosbought)
    {
        $this->dealrequestshownosbought = $dealrequestshownosbought;
    
        return $this;
    }

    /**
     * Get dealrequestshownosbought
     *
     * @return string 
     */
    public function getDealrequestshownosbought()
    {
        return $this->dealrequestshownosbought;
    }

    /**
     * Set dealrequestshowdealtipped
     *
     * @param string $dealrequestshowdealtipped
     * @return DealRequests
     */
    public function setDealrequestshowdealtipped($dealrequestshowdealtipped)
    {
        $this->dealrequestshowdealtipped = $dealrequestshowdealtipped;
    
        return $this;
    }

    /**
     * Get dealrequestshowdealtipped
     *
     * @return string 
     */
    public function getDealrequestshowdealtipped()
    {
        return $this->dealrequestshowdealtipped;
    }

    /**
     * Set dealrequestonlineredemption
     *
     * @param string $dealrequestonlineredemption
     * @return DealRequests
     */
    public function setDealrequestonlineredemption($dealrequestonlineredemption)
    {
        $this->dealrequestonlineredemption = $dealrequestonlineredemption;
    
        return $this;
    }

    /**
     * Get dealrequestonlineredemption
     *
     * @return string 
     */
    public function getDealrequestonlineredemption()
    {
        return $this->dealrequestonlineredemption;
    }

    /**
     * Set dealrequestimage
     *
     * @param string $dealrequestimage
     * @return DealRequests
     */
    public function setDealrequestimage($dealrequestimage)
    {
        $this->dealrequestimage = $dealrequestimage;
    
        return $this;
    }

    /**
     * Get dealrequestimage
     *
     * @return string 
     */
    public function getDealrequestimage()
    {
        return $this->dealrequestimage;
    }

    /**
     * Set dealrequestdate
     *
     * @param \DateTime $dealrequestdate
     * @return DealRequests
     */
    public function setDealrequestdate($dealrequestdate)
    {
        $this->dealrequestdate = $dealrequestdate;
    
        return $this;
    }

    /**
     * Get dealrequestdate
     *
     * @return \DateTime 
     */
    public function getDealrequestdate()
    {
        return $this->dealrequestdate;
    }

    /**
     * Set dealrequeststatus
     *
     * @param string $dealrequeststatus
     * @return DealRequests
     */
    public function setDealrequeststatus($dealrequeststatus)
    {
        $this->dealrequeststatus = $dealrequeststatus;
    
        return $this;
    }

    /**
     * Get dealrequeststatus
     *
     * @return string 
     */
    public function getDealrequeststatus()
    {
        return $this->dealrequeststatus;
    }

    /**
     * Set dealrequestmaxgiftbuy
     *
     * @param integer $dealrequestmaxgiftbuy
     * @return DealRequests
     */
    public function setDealrequestmaxgiftbuy($dealrequestmaxgiftbuy)
    {
        $this->dealrequestmaxgiftbuy = $dealrequestmaxgiftbuy;
    
        return $this;
    }

    /**
     * Get dealrequestmaxgiftbuy
     *
     * @return integer 
     */
    public function getDealrequestmaxgiftbuy()
    {
        return $this->dealrequestmaxgiftbuy;
    }

    /**
     * Set shippingstatus
     *
     * @param string $shippingstatus
     * @return DealRequests
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

    /**
     * Set dealrequesttitle
     *
     * @param string $dealrequesttitle
     * @return DealRequests
     */
    public function setDealrequesttitle($dealrequesttitle)
    {
        $this->dealrequesttitle = $dealrequesttitle;
    
        return $this;
    }

    /**
     * Get dealrequesttitle
     *
     * @return string 
     */
    public function getDealrequesttitle()
    {
        return $this->dealrequesttitle;
    }

    /**
     * Set dealrequestcertificatetitle
     *
     * @param string $dealrequestcertificatetitle
     * @return DealRequests
     */
    public function setDealrequestcertificatetitle($dealrequestcertificatetitle)
    {
        $this->dealrequestcertificatetitle = $dealrequestcertificatetitle;
    
        return $this;
    }

    /**
     * Get dealrequestcertificatetitle
     *
     * @return string 
     */
    public function getDealrequestcertificatetitle()
    {
        return $this->dealrequestcertificatetitle;
    }

    /**
     * Set dealrequestfineprint
     *
     * @param string $dealrequestfineprint
     * @return DealRequests
     */
    public function setDealrequestfineprint($dealrequestfineprint)
    {
        $this->dealrequestfineprint = $dealrequestfineprint;
    
        return $this;
    }

    /**
     * Get dealrequestfineprint
     *
     * @return string 
     */
    public function getDealrequestfineprint()
    {
        return $this->dealrequestfineprint;
    }

    /**
     * Set dealrequesthighlights
     *
     * @param string $dealrequesthighlights
     * @return DealRequests
     */
    public function setDealrequesthighlights($dealrequesthighlights)
    {
        $this->dealrequesthighlights = $dealrequesthighlights;
    
        return $this;
    }

    /**
     * Get dealrequesthighlights
     *
     * @return string 
     */
    public function getDealrequesthighlights()
    {
        return $this->dealrequesthighlights;
    }

    /**
     * Set dealrequestdescription
     *
     * @param string $dealrequestdescription
     * @return DealRequests
     */
    public function setDealrequestdescription($dealrequestdescription)
    {
        $this->dealrequestdescription = $dealrequestdescription;
    
        return $this;
    }

    /**
     * Get dealrequestdescription
     *
     * @return string 
     */
    public function getDealrequestdescription()
    {
        return $this->dealrequestdescription;
    }

    /**
     * Set dealrequestreviews
     *
     * @param string $dealrequestreviews
     * @return DealRequests
     */
    public function setDealrequestreviews($dealrequestreviews)
    {
        $this->dealrequestreviews = $dealrequestreviews;
    
        return $this;
    }

    /**
     * Get dealrequestreviews
     *
     * @return string 
     */
    public function getDealrequestreviews()
    {
        return $this->dealrequestreviews;
    }

    /**
     * Set dealrequestcertificateinstructions
     *
     * @param string $dealrequestcertificateinstructions
     * @return DealRequests
     */
    public function setDealrequestcertificateinstructions($dealrequestcertificateinstructions)
    {
        $this->dealrequestcertificateinstructions = $dealrequestcertificateinstructions;
    
        return $this;
    }

    /**
     * Get dealrequestcertificateinstructions
     *
     * @return string 
     */
    public function getDealrequestcertificateinstructions()
    {
        return $this->dealrequestcertificateinstructions;
    }
}