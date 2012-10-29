<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Timezones
 */
class Timezones
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $timezonename
     */
    private $timezonename;

    /**
     * @var string $timezonedetail
     */
    private $timezonedetail;

    /**
     * @var string $timezoneabbreviation
     */
    private $timezoneabbreviation;

    /**
     * @var string $timezonediff
     */
    private $timezonediff;

    /**
     * @var string $timezonediffdst
     */
    private $timezonediffdst;

    /**
     * @var string $timezonediffdefault
     */
    private $timezonediffdefault;

    /**
     * @var integer $countryid
     */
    private $countryid;

    /**
     * @var string $daylightsavingsdiff
     */
    private $daylightsavingsdiff;

    /**
     * @var string $dststartdate
     */
    private $dststartdate;

    /**
     * @var string $dstenddate
     */
    private $dstenddate;

    /**
     * @var integer $priority
     */
    private $priority;


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
     * Set timezonename
     *
     * @param string $timezonename
     * @return Timezones
     */
    public function setTimezonename($timezonename)
    {
        $this->timezonename = $timezonename;
    
        return $this;
    }

    /**
     * Get timezonename
     *
     * @return string 
     */
    public function getTimezonename()
    {
        return $this->timezonename;
    }

    /**
     * Set timezonedetail
     *
     * @param string $timezonedetail
     * @return Timezones
     */
    public function setTimezonedetail($timezonedetail)
    {
        $this->timezonedetail = $timezonedetail;
    
        return $this;
    }

    /**
     * Get timezonedetail
     *
     * @return string 
     */
    public function getTimezonedetail()
    {
        return $this->timezonedetail;
    }

    /**
     * Set timezoneabbreviation
     *
     * @param string $timezoneabbreviation
     * @return Timezones
     */
    public function setTimezoneabbreviation($timezoneabbreviation)
    {
        $this->timezoneabbreviation = $timezoneabbreviation;
    
        return $this;
    }

    /**
     * Get timezoneabbreviation
     *
     * @return string 
     */
    public function getTimezoneabbreviation()
    {
        return $this->timezoneabbreviation;
    }

    /**
     * Set timezonediff
     *
     * @param string $timezonediff
     * @return Timezones
     */
    public function setTimezonediff($timezonediff)
    {
        $this->timezonediff = $timezonediff;
    
        return $this;
    }

    /**
     * Get timezonediff
     *
     * @return string 
     */
    public function getTimezonediff()
    {
        return $this->timezonediff;
    }

    /**
     * Set timezonediffdst
     *
     * @param string $timezonediffdst
     * @return Timezones
     */
    public function setTimezonediffdst($timezonediffdst)
    {
        $this->timezonediffdst = $timezonediffdst;
    
        return $this;
    }

    /**
     * Get timezonediffdst
     *
     * @return string 
     */
    public function getTimezonediffdst()
    {
        return $this->timezonediffdst;
    }

    /**
     * Set timezonediffdefault
     *
     * @param string $timezonediffdefault
     * @return Timezones
     */
    public function setTimezonediffdefault($timezonediffdefault)
    {
        $this->timezonediffdefault = $timezonediffdefault;
    
        return $this;
    }

    /**
     * Get timezonediffdefault
     *
     * @return string 
     */
    public function getTimezonediffdefault()
    {
        return $this->timezonediffdefault;
    }

    /**
     * Set countryid
     *
     * @param integer $countryid
     * @return Timezones
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
     * Set daylightsavingsdiff
     *
     * @param string $daylightsavingsdiff
     * @return Timezones
     */
    public function setDaylightsavingsdiff($daylightsavingsdiff)
    {
        $this->daylightsavingsdiff = $daylightsavingsdiff;
    
        return $this;
    }

    /**
     * Get daylightsavingsdiff
     *
     * @return string 
     */
    public function getDaylightsavingsdiff()
    {
        return $this->daylightsavingsdiff;
    }

    /**
     * Set dststartdate
     *
     * @param string $dststartdate
     * @return Timezones
     */
    public function setDststartdate($dststartdate)
    {
        $this->dststartdate = $dststartdate;
    
        return $this;
    }

    /**
     * Get dststartdate
     *
     * @return string 
     */
    public function getDststartdate()
    {
        return $this->dststartdate;
    }

    /**
     * Set dstenddate
     *
     * @param string $dstenddate
     * @return Timezones
     */
    public function setDstenddate($dstenddate)
    {
        $this->dstenddate = $dstenddate;
    
        return $this;
    }

    /**
     * Get dstenddate
     *
     * @return string 
     */
    public function getDstenddate()
    {
        return $this->dstenddate;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return Timezones
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    
        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }
}