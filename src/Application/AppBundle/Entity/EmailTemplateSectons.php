<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\EmailTemplateSectons
 */
class EmailTemplateSectons
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $sectionname
     */
    private $sectionname;

    /**
     * @var string $sectionuniquestring
     */
    private $sectionuniquestring;

    /**
     * @var integer $languageid
     */
    private $languageid;

    /**
     * @var string $sectioncontent
     */
    private $sectioncontent;

    /**
     * @var string $sectionstatus
     */
    private $sectionstatus;


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
     * Set sectionname
     *
     * @param string $sectionname
     * @return EmailTemplateSectons
     */
    public function setSectionname($sectionname)
    {
        $this->sectionname = $sectionname;
    
        return $this;
    }

    /**
     * Get sectionname
     *
     * @return string 
     */
    public function getSectionname()
    {
        return $this->sectionname;
    }

    /**
     * Set sectionuniquestring
     *
     * @param string $sectionuniquestring
     * @return EmailTemplateSectons
     */
    public function setSectionuniquestring($sectionuniquestring)
    {
        $this->sectionuniquestring = $sectionuniquestring;
    
        return $this;
    }

    /**
     * Get sectionuniquestring
     *
     * @return string 
     */
    public function getSectionuniquestring()
    {
        return $this->sectionuniquestring;
    }

    /**
     * Set languageid
     *
     * @param integer $languageid
     * @return EmailTemplateSectons
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

    /**
     * Set sectioncontent
     *
     * @param string $sectioncontent
     * @return EmailTemplateSectons
     */
    public function setSectioncontent($sectioncontent)
    {
        $this->sectioncontent = $sectioncontent;
    
        return $this;
    }

    /**
     * Get sectioncontent
     *
     * @return string 
     */
    public function getSectioncontent()
    {
        return $this->sectioncontent;
    }

    /**
     * Set sectionstatus
     *
     * @param string $sectionstatus
     * @return EmailTemplateSectons
     */
    public function setSectionstatus($sectionstatus)
    {
        $this->sectionstatus = $sectionstatus;
    
        return $this;
    }

    /**
     * Get sectionstatus
     *
     * @return string 
     */
    public function getSectionstatus()
    {
        return $this->sectionstatus;
    }
}