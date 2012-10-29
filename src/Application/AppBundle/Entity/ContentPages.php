<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\ContentPages
 */
class ContentPages
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $contenttitle
     */
    private $contenttitle;

    /**
     * @var string $contentmenuname
     */
    private $contentmenuname;

    /**
     * @var string $contentdescription
     */
    private $contentdescription;

    /**
     * @var string $contentmetatitle
     */
    private $contentmetatitle;

    /**
     * @var string $contentmetadescription
     */
    private $contentmetadescription;

    /**
     * @var string $contentmetakeywords
     */
    private $contentmetakeywords;

    /**
     * @var string $contentstatus
     */
    private $contentstatus;

    /**
     * @var \DateTime $contentcreateddate
     */
    private $contentcreateddate;

    /**
     * @var string $contentisbasic
     */
    private $contentisbasic;

    /**
     * @var string $contentisforsubpages
     */
    private $contentisforsubpages;

    /**
     * @var string $contenturlkey
     */
    private $contenturlkey;

    /**
     * @var integer $sectionid
     */
    private $sectionid;

    /**
     * @var integer $sortorder
     */
    private $sortorder;


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
     * Set contenttitle
     *
     * @param string $contenttitle
     * @return ContentPages
     */
    public function setContenttitle($contenttitle)
    {
        $this->contenttitle = $contenttitle;
    
        return $this;
    }

    /**
     * Get contenttitle
     *
     * @return string 
     */
    public function getContenttitle()
    {
        return $this->contenttitle;
    }

    /**
     * Set contentmenuname
     *
     * @param string $contentmenuname
     * @return ContentPages
     */
    public function setContentmenuname($contentmenuname)
    {
        $this->contentmenuname = $contentmenuname;
    
        return $this;
    }

    /**
     * Get contentmenuname
     *
     * @return string 
     */
    public function getContentmenuname()
    {
        return $this->contentmenuname;
    }

    /**
     * Set contentdescription
     *
     * @param string $contentdescription
     * @return ContentPages
     */
    public function setContentdescription($contentdescription)
    {
        $this->contentdescription = $contentdescription;
    
        return $this;
    }

    /**
     * Get contentdescription
     *
     * @return string 
     */
    public function getContentdescription()
    {
        return $this->contentdescription;
    }

    /**
     * Set contentmetatitle
     *
     * @param string $contentmetatitle
     * @return ContentPages
     */
    public function setContentmetatitle($contentmetatitle)
    {
        $this->contentmetatitle = $contentmetatitle;
    
        return $this;
    }

    /**
     * Get contentmetatitle
     *
     * @return string 
     */
    public function getContentmetatitle()
    {
        return $this->contentmetatitle;
    }

    /**
     * Set contentmetadescription
     *
     * @param string $contentmetadescription
     * @return ContentPages
     */
    public function setContentmetadescription($contentmetadescription)
    {
        $this->contentmetadescription = $contentmetadescription;
    
        return $this;
    }

    /**
     * Get contentmetadescription
     *
     * @return string 
     */
    public function getContentmetadescription()
    {
        return $this->contentmetadescription;
    }

    /**
     * Set contentmetakeywords
     *
     * @param string $contentmetakeywords
     * @return ContentPages
     */
    public function setContentmetakeywords($contentmetakeywords)
    {
        $this->contentmetakeywords = $contentmetakeywords;
    
        return $this;
    }

    /**
     * Get contentmetakeywords
     *
     * @return string 
     */
    public function getContentmetakeywords()
    {
        return $this->contentmetakeywords;
    }

    /**
     * Set contentstatus
     *
     * @param string $contentstatus
     * @return ContentPages
     */
    public function setContentstatus($contentstatus)
    {
        $this->contentstatus = $contentstatus;
    
        return $this;
    }

    /**
     * Get contentstatus
     *
     * @return string 
     */
    public function getContentstatus()
    {
        return $this->contentstatus;
    }

    /**
     * Set contentcreateddate
     *
     * @param \DateTime $contentcreateddate
     * @return ContentPages
     */
    public function setContentcreateddate($contentcreateddate)
    {
        $this->contentcreateddate = $contentcreateddate;
    
        return $this;
    }

    /**
     * Get contentcreateddate
     *
     * @return \DateTime 
     */
    public function getContentcreateddate()
    {
        return $this->contentcreateddate;
    }

    /**
     * Set contentisbasic
     *
     * @param string $contentisbasic
     * @return ContentPages
     */
    public function setContentisbasic($contentisbasic)
    {
        $this->contentisbasic = $contentisbasic;
    
        return $this;
    }

    /**
     * Get contentisbasic
     *
     * @return string 
     */
    public function getContentisbasic()
    {
        return $this->contentisbasic;
    }

    /**
     * Set contentisforsubpages
     *
     * @param string $contentisforsubpages
     * @return ContentPages
     */
    public function setContentisforsubpages($contentisforsubpages)
    {
        $this->contentisforsubpages = $contentisforsubpages;
    
        return $this;
    }

    /**
     * Get contentisforsubpages
     *
     * @return string 
     */
    public function getContentisforsubpages()
    {
        return $this->contentisforsubpages;
    }

    /**
     * Set contenturlkey
     *
     * @param string $contenturlkey
     * @return ContentPages
     */
    public function setContenturlkey($contenturlkey)
    {
        $this->contenturlkey = $contenturlkey;
    
        return $this;
    }

    /**
     * Get contenturlkey
     *
     * @return string 
     */
    public function getContenturlkey()
    {
        return $this->contenturlkey;
    }

    /**
     * Set sectionid
     *
     * @param integer $sectionid
     * @return ContentPages
     */
    public function setSectionid($sectionid)
    {
        $this->sectionid = $sectionid;
    
        return $this;
    }

    /**
     * Get sectionid
     *
     * @return integer 
     */
    public function getSectionid()
    {
        return $this->sectionid;
    }

    /**
     * Set sortorder
     *
     * @param integer $sortorder
     * @return ContentPages
     */
    public function setSortorder($sortorder)
    {
        $this->sortorder = $sortorder;
    
        return $this;
    }

    /**
     * Get sortorder
     *
     * @return integer 
     */
    public function getSortorder()
    {
        return $this->sortorder;
    }
}