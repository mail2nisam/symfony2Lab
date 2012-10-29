<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Languages
 */
class Languages
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $languagename
     */
    private $languagename;

    /**
     * @var string $languagecode
     */
    private $languagecode;

    /**
     * @var string $languagelcidstring
     */
    private $languagelcidstring;

    /**
     * @var string $languagelocale
     */
    private $languagelocale;

    /**
     * @var string $languageimage
     */
    private $languageimage;

    /**
     * @var integer $languagesortorder
     */
    private $languagesortorder;

    /**
     * @var string $languagestatus
     */
    private $languagestatus;

    /**
     * @var string $languagedefault
     */
    private $languagedefault;


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
     * Set languagename
     *
     * @param string $languagename
     * @return Languages
     */
    public function setLanguagename($languagename)
    {
        $this->languagename = $languagename;
    
        return $this;
    }

    /**
     * Get languagename
     *
     * @return string 
     */
    public function getLanguagename()
    {
        return $this->languagename;
    }

    /**
     * Set languagecode
     *
     * @param string $languagecode
     * @return Languages
     */
    public function setLanguagecode($languagecode)
    {
        $this->languagecode = $languagecode;
    
        return $this;
    }

    /**
     * Get languagecode
     *
     * @return string 
     */
    public function getLanguagecode()
    {
        return $this->languagecode;
    }

    /**
     * Set languagelcidstring
     *
     * @param string $languagelcidstring
     * @return Languages
     */
    public function setLanguagelcidstring($languagelcidstring)
    {
        $this->languagelcidstring = $languagelcidstring;
    
        return $this;
    }

    /**
     * Get languagelcidstring
     *
     * @return string 
     */
    public function getLanguagelcidstring()
    {
        return $this->languagelcidstring;
    }

    /**
     * Set languagelocale
     *
     * @param string $languagelocale
     * @return Languages
     */
    public function setLanguagelocale($languagelocale)
    {
        $this->languagelocale = $languagelocale;
    
        return $this;
    }

    /**
     * Get languagelocale
     *
     * @return string 
     */
    public function getLanguagelocale()
    {
        return $this->languagelocale;
    }

    /**
     * Set languageimage
     *
     * @param string $languageimage
     * @return Languages
     */
    public function setLanguageimage($languageimage)
    {
        $this->languageimage = $languageimage;
    
        return $this;
    }

    /**
     * Get languageimage
     *
     * @return string 
     */
    public function getLanguageimage()
    {
        return $this->languageimage;
    }

    /**
     * Set languagesortorder
     *
     * @param integer $languagesortorder
     * @return Languages
     */
    public function setLanguagesortorder($languagesortorder)
    {
        $this->languagesortorder = $languagesortorder;
    
        return $this;
    }

    /**
     * Get languagesortorder
     *
     * @return integer 
     */
    public function getLanguagesortorder()
    {
        return $this->languagesortorder;
    }

    /**
     * Set languagestatus
     *
     * @param string $languagestatus
     * @return Languages
     */
    public function setLanguagestatus($languagestatus)
    {
        $this->languagestatus = $languagestatus;
    
        return $this;
    }

    /**
     * Get languagestatus
     *
     * @return string 
     */
    public function getLanguagestatus()
    {
        return $this->languagestatus;
    }

    /**
     * Set languagedefault
     *
     * @param string $languagedefault
     * @return Languages
     */
    public function setLanguagedefault($languagedefault)
    {
        $this->languagedefault = $languagedefault;
    
        return $this;
    }

    /**
     * Get languagedefault
     *
     * @return string 
     */
    public function getLanguagedefault()
    {
        return $this->languagedefault;
    }
}