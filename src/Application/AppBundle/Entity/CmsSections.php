<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\CmsSections
 */
class CmsSections
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $sectiontitle
     */
    private $sectiontitle;

    /**
     * @var string $sectionstatus
     */
    private $sectionstatus;

    /**
     * @var string $sectiondefault
     */
    private $sectiondefault;

    /**
     * @var integer $sectionpriority
     */
    private $sectionpriority;


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
     * Set sectiontitle
     *
     * @param string $sectiontitle
     * @return CmsSections
     */
    public function setSectiontitle($sectiontitle)
    {
        $this->sectiontitle = $sectiontitle;
    
        return $this;
    }

    /**
     * Get sectiontitle
     *
     * @return string 
     */
    public function getSectiontitle()
    {
        return $this->sectiontitle;
    }

    /**
     * Set sectionstatus
     *
     * @param string $sectionstatus
     * @return CmsSections
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

    /**
     * Set sectiondefault
     *
     * @param string $sectiondefault
     * @return CmsSections
     */
    public function setSectiondefault($sectiondefault)
    {
        $this->sectiondefault = $sectiondefault;
    
        return $this;
    }

    /**
     * Get sectiondefault
     *
     * @return string 
     */
    public function getSectiondefault()
    {
        return $this->sectiondefault;
    }

    /**
     * Set sectionpriority
     *
     * @param integer $sectionpriority
     * @return CmsSections
     */
    public function setSectionpriority($sectionpriority)
    {
        $this->sectionpriority = $sectionpriority;
    
        return $this;
    }

    /**
     * Get sectionpriority
     *
     * @return integer 
     */
    public function getSectionpriority()
    {
        return $this->sectionpriority;
    }
}