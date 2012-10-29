<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Cities
 */
class Cities
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $countryid
     */
    private $countryid;

    /**
     * @var integer $stateid
     */
    private $stateid;

    /**
     * @var string $cityname
     */
    private $cityname;

    /**
     * @var string $province
     */
    private $province;

    /**
     * @var integer $timezoneid
     */
    private $timezoneid;

    /**
     * @var string $citykeyid
     */
    private $citykeyid;

    /**
     * @var string $citylat
     */
    private $citylat;

    /**
     * @var string $citylng
     */
    private $citylng;

    /**
     * @var string $citylogoimage
     */
    private $citylogoimage;

    /**
     * @var string $citybgimage
     */
    private $citybgimage;

    /**
     * @var string $citystatus
     */
    private $citystatus;

    /**
     * @var string $citycampaignlistid
     */
    private $citycampaignlistid;


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
     * Set countryid
     *
     * @param integer $countryid
     * @return Cities
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;
    
        return $this;
    }

    /**
     * Get countryid
     *
     * @return integer 
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set stateid
     *
     * @param integer $stateid
     * @return Cities
     */
    public function setStateid($stateid)
    {
        $this->stateid = $stateid;
    
        return $this;
    }

    /**
     * Get stateid
     *
     * @return integer 
     */
    public function getStateid()
    {
        return $this->stateid;
    }

    /**
     * Set cityname
     *
     * @param string $cityname
     * @return Cities
     */
    public function setCityname($cityname)
    {
        $this->cityname = $cityname;
    
        return $this;
    }

    /**
     * Get cityname
     *
     * @return string 
     */
    public function getCityname()
    {
        return $this->cityname;
    }

    /**
     * Set province
     *
     * @param string $province
     * @return Cities
     */
    public function setProvince($province)
    {
        $this->province = $province;
    
        return $this;
    }

    /**
     * Get province
     *
     * @return string 
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set timezoneid
     *
     * @param integer $timezoneid
     * @return Cities
     */
    public function setTimezoneid($timezoneid)
    {
        $this->timezoneid = $timezoneid;
    
        return $this;
    }

    /**
     * Get timezoneid
     *
     * @return integer 
     */
    public function getTimezoneid()
    {
        return $this->timezoneid;
    }

    /**
     * Set citykeyid
     *
     * @param string $citykeyid
     * @return Cities
     */
    public function setCitykeyid($citykeyid)
    {
        $this->citykeyid = $citykeyid;
    
        return $this;
    }

    /**
     * Get citykeyid
     *
     * @return string 
     */
    public function getCitykeyid()
    {
        return $this->citykeyid;
    }

    /**
     * Set citylat
     *
     * @param string $citylat
     * @return Cities
     */
    public function setCitylat($citylat)
    {
        $this->citylat = $citylat;
    
        return $this;
    }

    /**
     * Get citylat
     *
     * @return string 
     */
    public function getCitylat()
    {
        return $this->citylat;
    }

    /**
     * Set citylng
     *
     * @param string $citylng
     * @return Cities
     */
    public function setCitylng($citylng)
    {
        $this->citylng = $citylng;
    
        return $this;
    }

    /**
     * Get citylng
     *
     * @return string 
     */
    public function getCitylng()
    {
        return $this->citylng;
    }

    /**
     * Set citylogoimage
     *
     * @param string $citylogoimage
     * @return Cities
     */
    public function setCitylogoimage($citylogoimage)
    {
        $this->citylogoimage = $citylogoimage;
    
        return $this;
    }

    /**
     * Get citylogoimage
     *
     * @return string 
     */
    public function getCitylogoimage()
    {
        return $this->citylogoimage;
    }

    /**
     * Set citybgimage
     *
     * @param string $citybgimage
     * @return Cities
     */
    public function setCitybgimage($citybgimage)
    {
        $this->citybgimage = $citybgimage;
    
        return $this;
    }

    /**
     * Get citybgimage
     *
     * @return string 
     */
    public function getCitybgimage()
    {
        return $this->citybgimage;
    }

    /**
     * Set citystatus
     *
     * @param string $citystatus
     * @return Cities
     */
    public function setCitystatus($citystatus)
    {
        $this->citystatus = $citystatus;
    
        return $this;
    }

    /**
     * Get citystatus
     *
     * @return string 
     */
    public function getCitystatus()
    {
        return $this->citystatus;
    }

    /**
     * Set citycampaignlistid
     *
     * @param string $citycampaignlistid
     * @return Cities
     */
    public function setCitycampaignlistid($citycampaignlistid)
    {
        $this->citycampaignlistid = $citycampaignlistid;
    
        return $this;
    }

    /**
     * Get citycampaignlistid
     *
     * @return string 
     */
    public function getCitycampaignlistid()
    {
        return $this->citycampaignlistid;
    }
}