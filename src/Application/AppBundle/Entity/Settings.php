<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Settings
 */
class Settings
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $settingsgroupid
     */
    private $settingsgroupid;

    /**
     * @var string $settingslabel
     */
    private $settingslabel;

    /**
     * @var string $settingskey
     */
    private $settingskey;

    /**
     * @var string $settingstype
     */
    private $settingstype;

    /**
     * @var string $settingsfieldtype
     */
    private $settingsfieldtype;

    /**
     * @var string $settingsdependants
     */
    private $settingsdependants;

    /**
     * @var string $settingsoptions
     */
    private $settingsoptions;

    /**
     * @var string $settingsvalue
     */
    private $settingsvalue;

    /**
     * @var string $settingsvalidate
     */
    private $settingsvalidate;

    /**
     * @var string $settingsvalidateerror
     */
    private $settingsvalidateerror;

    /**
     * @var string $settingsdescription
     */
    private $settingsdescription;

    /**
     * @var integer $settingssortorder
     */
    private $settingssortorder;

    /**
     * @var string $settingssecure
     */
    private $settingssecure;


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
     * Set settingsgroupid
     *
     * @param integer $settingsgroupid
     * @return Settings
     */
    public function setSettingsgroupid($settingsgroupid)
    {
        $this->settingsgroupid = $settingsgroupid;
    
        return $this;
    }

    /**
     * Get settingsgroupid
     *
     * @return integer 
     */
    public function getSettingsgroupid()
    {
        return $this->settingsgroupid;
    }

    /**
     * Set settingslabel
     *
     * @param string $settingslabel
     * @return Settings
     */
    public function setSettingslabel($settingslabel)
    {
        $this->settingslabel = $settingslabel;
    
        return $this;
    }

    /**
     * Get settingslabel
     *
     * @return string 
     */
    public function getSettingslabel()
    {
        return $this->settingslabel;
    }

    /**
     * Set settingskey
     *
     * @param string $settingskey
     * @return Settings
     */
    public function setSettingskey($settingskey)
    {
        $this->settingskey = $settingskey;
    
        return $this;
    }

    /**
     * Get settingskey
     *
     * @return string 
     */
    public function getSettingskey()
    {
        return $this->settingskey;
    }

    /**
     * Set settingstype
     *
     * @param string $settingstype
     * @return Settings
     */
    public function setSettingstype($settingstype)
    {
        $this->settingstype = $settingstype;
    
        return $this;
    }

    /**
     * Get settingstype
     *
     * @return string 
     */
    public function getSettingstype()
    {
        return $this->settingstype;
    }

    /**
     * Set settingsfieldtype
     *
     * @param string $settingsfieldtype
     * @return Settings
     */
    public function setSettingsfieldtype($settingsfieldtype)
    {
        $this->settingsfieldtype = $settingsfieldtype;
    
        return $this;
    }

    /**
     * Get settingsfieldtype
     *
     * @return string 
     */
    public function getSettingsfieldtype()
    {
        return $this->settingsfieldtype;
    }

    /**
     * Set settingsdependants
     *
     * @param string $settingsdependants
     * @return Settings
     */
    public function setSettingsdependants($settingsdependants)
    {
        $this->settingsdependants = $settingsdependants;
    
        return $this;
    }

    /**
     * Get settingsdependants
     *
     * @return string 
     */
    public function getSettingsdependants()
    {
        return $this->settingsdependants;
    }

    /**
     * Set settingsoptions
     *
     * @param string $settingsoptions
     * @return Settings
     */
    public function setSettingsoptions($settingsoptions)
    {
        $this->settingsoptions = $settingsoptions;
    
        return $this;
    }

    /**
     * Get settingsoptions
     *
     * @return string 
     */
    public function getSettingsoptions()
    {
        return $this->settingsoptions;
    }

    /**
     * Set settingsvalue
     *
     * @param string $settingsvalue
     * @return Settings
     */
    public function setSettingsvalue($settingsvalue)
    {
        $this->settingsvalue = $settingsvalue;
    
        return $this;
    }

    /**
     * Get settingsvalue
     *
     * @return string 
     */
    public function getSettingsvalue()
    {
        return $this->settingsvalue;
    }

    /**
     * Set settingsvalidate
     *
     * @param string $settingsvalidate
     * @return Settings
     */
    public function setSettingsvalidate($settingsvalidate)
    {
        $this->settingsvalidate = $settingsvalidate;
    
        return $this;
    }

    /**
     * Get settingsvalidate
     *
     * @return string 
     */
    public function getSettingsvalidate()
    {
        return $this->settingsvalidate;
    }

    /**
     * Set settingsvalidateerror
     *
     * @param string $settingsvalidateerror
     * @return Settings
     */
    public function setSettingsvalidateerror($settingsvalidateerror)
    {
        $this->settingsvalidateerror = $settingsvalidateerror;
    
        return $this;
    }

    /**
     * Get settingsvalidateerror
     *
     * @return string 
     */
    public function getSettingsvalidateerror()
    {
        return $this->settingsvalidateerror;
    }

    /**
     * Set settingsdescription
     *
     * @param string $settingsdescription
     * @return Settings
     */
    public function setSettingsdescription($settingsdescription)
    {
        $this->settingsdescription = $settingsdescription;
    
        return $this;
    }

    /**
     * Get settingsdescription
     *
     * @return string 
     */
    public function getSettingsdescription()
    {
        return $this->settingsdescription;
    }

    /**
     * Set settingssortorder
     *
     * @param integer $settingssortorder
     * @return Settings
     */
    public function setSettingssortorder($settingssortorder)
    {
        $this->settingssortorder = $settingssortorder;
    
        return $this;
    }

    /**
     * Get settingssortorder
     *
     * @return integer 
     */
    public function getSettingssortorder()
    {
        return $this->settingssortorder;
    }

    /**
     * Set settingssecure
     *
     * @param string $settingssecure
     * @return Settings
     */
    public function setSettingssecure($settingssecure)
    {
        $this->settingssecure = $settingssecure;
    
        return $this;
    }

    /**
     * Get settingssecure
     *
     * @return string 
     */
    public function getSettingssecure()
    {
        return $this->settingssecure;
    }
}