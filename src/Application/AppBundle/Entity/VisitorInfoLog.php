<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\VisitorInfoLog
 */
class VisitorInfoLog
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $entrypage
     */
    private $entrypage;

    /**
     * @var \DateTime $entrytime
     */
    private $entrytime;

    /**
     * @var string $exitpage
     */
    private $exitpage;

    /**
     * @var \DateTime $exittime
     */
    private $exittime;

    /**
     * @var string $useragent
     */
    private $useragent;

    /**
     * @var string $browsername
     */
    private $browsername;

    /**
     * @var string $operatingsystem
     */
    private $operatingsystem;

    /**
     * @var string $httpreferer
     */
    private $httpreferer;

    /**
     * @var string $remoteaddress
     */
    private $remoteaddress;

    /**
     * @var string $serveraddress
     */
    private $serveraddress;

    /**
     * @var string $userid
     */
    private $userid;

    /**
     * @var \DateTime $logintime
     */
    private $logintime;

    /**
     * @var \DateTime $logouttime
     */
    private $logouttime;

    /**
     * @var string $usertype
     */
    private $usertype;

    /**
     * @var string $searchkeyword
     */
    private $searchkeyword;

    /**
     * @var string $searchenginename
     */
    private $searchenginename;

    /**
     * @var integer $orderplaced
     */
    private $orderplaced;

    /**
     * @var float $orderamount
     */
    private $orderamount;

    /**
     * @var integer $donesubscribe
     */
    private $donesubscribe;

    /**
     * @var integer $donesignup
     */
    private $donesignup;

    /**
     * @var string $usersex
     */
    private $usersex;

    /**
     * @var string $userage
     */
    private $userage;

    /**
     * @var integer $pagecount
     */
    private $pagecount;

    /**
     * @var string $city
     */
    private $city;

    /**
     * @var string $country
     */
    private $country;

    /**
     * @var string $referrertype
     */
    private $referrertype;

    /**
     * @var string $referrerwebsite
     */
    private $referrerwebsite;

    /**
     * @var integer $widgetid
     */
    private $widgetid;

    /**
     * @var string $ismobileweb
     */
    private $ismobileweb;

    /**
     * @var integer $languageid
     */
    private $languageid;


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
     * Set entrypage
     *
     * @param string $entrypage
     * @return VisitorInfoLog
     */
    public function setEntrypage($entrypage)
    {
        $this->entrypage = $entrypage;
    
        return $this;
    }

    /**
     * Get entrypage
     *
     * @return string 
     */
    public function getEntrypage()
    {
        return $this->entrypage;
    }

    /**
     * Set entrytime
     *
     * @param \DateTime $entrytime
     * @return VisitorInfoLog
     */
    public function setEntrytime($entrytime)
    {
        $this->entrytime = $entrytime;
    
        return $this;
    }

    /**
     * Get entrytime
     *
     * @return \DateTime 
     */
    public function getEntrytime()
    {
        return $this->entrytime;
    }

    /**
     * Set exitpage
     *
     * @param string $exitpage
     * @return VisitorInfoLog
     */
    public function setExitpage($exitpage)
    {
        $this->exitpage = $exitpage;
    
        return $this;
    }

    /**
     * Get exitpage
     *
     * @return string 
     */
    public function getExitpage()
    {
        return $this->exitpage;
    }

    /**
     * Set exittime
     *
     * @param \DateTime $exittime
     * @return VisitorInfoLog
     */
    public function setExittime($exittime)
    {
        $this->exittime = $exittime;
    
        return $this;
    }

    /**
     * Get exittime
     *
     * @return \DateTime 
     */
    public function getExittime()
    {
        return $this->exittime;
    }

    /**
     * Set useragent
     *
     * @param string $useragent
     * @return VisitorInfoLog
     */
    public function setUseragent($useragent)
    {
        $this->useragent = $useragent;
    
        return $this;
    }

    /**
     * Get useragent
     *
     * @return string 
     */
    public function getUseragent()
    {
        return $this->useragent;
    }

    /**
     * Set browsername
     *
     * @param string $browsername
     * @return VisitorInfoLog
     */
    public function setBrowsername($browsername)
    {
        $this->browsername = $browsername;
    
        return $this;
    }

    /**
     * Get browsername
     *
     * @return string 
     */
    public function getBrowsername()
    {
        return $this->browsername;
    }

    /**
     * Set operatingsystem
     *
     * @param string $operatingsystem
     * @return VisitorInfoLog
     */
    public function setOperatingsystem($operatingsystem)
    {
        $this->operatingsystem = $operatingsystem;
    
        return $this;
    }

    /**
     * Get operatingsystem
     *
     * @return string 
     */
    public function getOperatingsystem()
    {
        return $this->operatingsystem;
    }

    /**
     * Set httpreferer
     *
     * @param string $httpreferer
     * @return VisitorInfoLog
     */
    public function setHttpreferer($httpreferer)
    {
        $this->httpreferer = $httpreferer;
    
        return $this;
    }

    /**
     * Get httpreferer
     *
     * @return string 
     */
    public function getHttpreferer()
    {
        return $this->httpreferer;
    }

    /**
     * Set remoteaddress
     *
     * @param string $remoteaddress
     * @return VisitorInfoLog
     */
    public function setRemoteaddress($remoteaddress)
    {
        $this->remoteaddress = $remoteaddress;
    
        return $this;
    }

    /**
     * Get remoteaddress
     *
     * @return string 
     */
    public function getRemoteaddress()
    {
        return $this->remoteaddress;
    }

    /**
     * Set serveraddress
     *
     * @param string $serveraddress
     * @return VisitorInfoLog
     */
    public function setServeraddress($serveraddress)
    {
        $this->serveraddress = $serveraddress;
    
        return $this;
    }

    /**
     * Get serveraddress
     *
     * @return string 
     */
    public function getServeraddress()
    {
        return $this->serveraddress;
    }

    /**
     * Set userid
     *
     * @param string $userid
     * @return VisitorInfoLog
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return string 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set logintime
     *
     * @param \DateTime $logintime
     * @return VisitorInfoLog
     */
    public function setLogintime($logintime)
    {
        $this->logintime = $logintime;
    
        return $this;
    }

    /**
     * Get logintime
     *
     * @return \DateTime 
     */
    public function getLogintime()
    {
        return $this->logintime;
    }

    /**
     * Set logouttime
     *
     * @param \DateTime $logouttime
     * @return VisitorInfoLog
     */
    public function setLogouttime($logouttime)
    {
        $this->logouttime = $logouttime;
    
        return $this;
    }

    /**
     * Get logouttime
     *
     * @return \DateTime 
     */
    public function getLogouttime()
    {
        return $this->logouttime;
    }

    /**
     * Set usertype
     *
     * @param string $usertype
     * @return VisitorInfoLog
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;
    
        return $this;
    }

    /**
     * Get usertype
     *
     * @return string 
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set searchkeyword
     *
     * @param string $searchkeyword
     * @return VisitorInfoLog
     */
    public function setSearchkeyword($searchkeyword)
    {
        $this->searchkeyword = $searchkeyword;
    
        return $this;
    }

    /**
     * Get searchkeyword
     *
     * @return string 
     */
    public function getSearchkeyword()
    {
        return $this->searchkeyword;
    }

    /**
     * Set searchenginename
     *
     * @param string $searchenginename
     * @return VisitorInfoLog
     */
    public function setSearchenginename($searchenginename)
    {
        $this->searchenginename = $searchenginename;
    
        return $this;
    }

    /**
     * Get searchenginename
     *
     * @return string 
     */
    public function getSearchenginename()
    {
        return $this->searchenginename;
    }

    /**
     * Set orderplaced
     *
     * @param integer $orderplaced
     * @return VisitorInfoLog
     */
    public function setOrderplaced($orderplaced)
    {
        $this->orderplaced = $orderplaced;
    
        return $this;
    }

    /**
     * Get orderplaced
     *
     * @return integer 
     */
    public function getOrderplaced()
    {
        return $this->orderplaced;
    }

    /**
     * Set orderamount
     *
     * @param float $orderamount
     * @return VisitorInfoLog
     */
    public function setOrderamount($orderamount)
    {
        $this->orderamount = $orderamount;
    
        return $this;
    }

    /**
     * Get orderamount
     *
     * @return float 
     */
    public function getOrderamount()
    {
        return $this->orderamount;
    }

    /**
     * Set donesubscribe
     *
     * @param integer $donesubscribe
     * @return VisitorInfoLog
     */
    public function setDonesubscribe($donesubscribe)
    {
        $this->donesubscribe = $donesubscribe;
    
        return $this;
    }

    /**
     * Get donesubscribe
     *
     * @return integer 
     */
    public function getDonesubscribe()
    {
        return $this->donesubscribe;
    }

    /**
     * Set donesignup
     *
     * @param integer $donesignup
     * @return VisitorInfoLog
     */
    public function setDonesignup($donesignup)
    {
        $this->donesignup = $donesignup;
    
        return $this;
    }

    /**
     * Get donesignup
     *
     * @return integer 
     */
    public function getDonesignup()
    {
        return $this->donesignup;
    }

    /**
     * Set usersex
     *
     * @param string $usersex
     * @return VisitorInfoLog
     */
    public function setUsersex($usersex)
    {
        $this->usersex = $usersex;
    
        return $this;
    }

    /**
     * Get usersex
     *
     * @return string 
     */
    public function getUsersex()
    {
        return $this->usersex;
    }

    /**
     * Set userage
     *
     * @param string $userage
     * @return VisitorInfoLog
     */
    public function setUserage($userage)
    {
        $this->userage = $userage;
    
        return $this;
    }

    /**
     * Get userage
     *
     * @return string 
     */
    public function getUserage()
    {
        return $this->userage;
    }

    /**
     * Set pagecount
     *
     * @param integer $pagecount
     * @return VisitorInfoLog
     */
    public function setPagecount($pagecount)
    {
        $this->pagecount = $pagecount;
    
        return $this;
    }

    /**
     * Get pagecount
     *
     * @return integer 
     */
    public function getPagecount()
    {
        return $this->pagecount;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return VisitorInfoLog
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return VisitorInfoLog
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set referrertype
     *
     * @param string $referrertype
     * @return VisitorInfoLog
     */
    public function setReferrertype($referrertype)
    {
        $this->referrertype = $referrertype;
    
        return $this;
    }

    /**
     * Get referrertype
     *
     * @return string 
     */
    public function getReferrertype()
    {
        return $this->referrertype;
    }

    /**
     * Set referrerwebsite
     *
     * @param string $referrerwebsite
     * @return VisitorInfoLog
     */
    public function setReferrerwebsite($referrerwebsite)
    {
        $this->referrerwebsite = $referrerwebsite;
    
        return $this;
    }

    /**
     * Get referrerwebsite
     *
     * @return string 
     */
    public function getReferrerwebsite()
    {
        return $this->referrerwebsite;
    }

    /**
     * Set widgetid
     *
     * @param integer $widgetid
     * @return VisitorInfoLog
     */
    public function setWidgetid($widgetid)
    {
        $this->widgetid = $widgetid;
    
        return $this;
    }

    /**
     * Get widgetid
     *
     * @return integer 
     */
    public function getWidgetid()
    {
        return $this->widgetid;
    }

    /**
     * Set ismobileweb
     *
     * @param string $ismobileweb
     * @return VisitorInfoLog
     */
    public function setIsmobileweb($ismobileweb)
    {
        $this->ismobileweb = $ismobileweb;
    
        return $this;
    }

    /**
     * Get ismobileweb
     *
     * @return string 
     */
    public function getIsmobileweb()
    {
        return $this->ismobileweb;
    }

    /**
     * Set languageid
     *
     * @param integer $languageid
     * @return VisitorInfoLog
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;
    
        return $this;
    }

    /**
     * Get languageid
     *
     * @return integer 
     */
    public function getLanguageid()
    {
        return $this->languageid;
    }
}