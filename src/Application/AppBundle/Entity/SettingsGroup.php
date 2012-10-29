<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\SettingsGroup
 */
class SettingsGroup
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $settingsgrouplabel
     */
    private $settingsgrouplabel;

    /**
     * @var string $settingsgroupdescription
     */
    private $settingsgroupdescription;

    /**
     * @var string $settingsgroupkey
     */
    private $settingsgroupkey;

    /**
     * @var integer $settingsgroupsortorder
     */
    private $settingsgroupsortorder;


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
     * Set settingsgrouplabel
     *
     * @param string $settingsgrouplabel
     * @return SettingsGroup
     */
    public function setSettingsgrouplabel($settingsgrouplabel)
    {
        $this->settingsgrouplabel = $settingsgrouplabel;
    
        return $this;
    }

    /**
     * Get settingsgrouplabel
     *
     * @return string 
     */
    public function getSettingsgrouplabel()
    {
        return $this->settingsgrouplabel;
    }

    /**
     * Set settingsgroupdescription
     *
     * @param string $settingsgroupdescription
     * @return SettingsGroup
     */
    public function setSettingsgroupdescription($settingsgroupdescription)
    {
        $this->settingsgroupdescription = $settingsgroupdescription;
    
        return $this;
    }

    /**
     * Get settingsgroupdescription
     *
     * @return string 
     */
    public function getSettingsgroupdescription()
    {
        return $this->settingsgroupdescription;
    }

    /**
     * Set settingsgroupkey
     *
     * @param string $settingsgroupkey
     * @return SettingsGroup
     */
    public function setSettingsgroupkey($settingsgroupkey)
    {
        $this->settingsgroupkey = $settingsgroupkey;
    
        return $this;
    }

    /**
     * Get settingsgroupkey
     *
     * @return string 
     */
    public function getSettingsgroupkey()
    {
        return $this->settingsgroupkey;
    }

    /**
     * Set settingsgroupsortorder
     *
     * @param integer $settingsgroupsortorder
     * @return SettingsGroup
     */
    public function setSettingsgroupsortorder($settingsgroupsortorder)
    {
        $this->settingsgroupsortorder = $settingsgroupsortorder;
    
        return $this;
    }

    /**
     * Get settingsgroupsortorder
     *
     * @return integer 
     */
    public function getSettingsgroupsortorder()
    {
        return $this->settingsgroupsortorder;
    }
}