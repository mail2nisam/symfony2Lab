<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PageName
 */
class PageName
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $pagename
     */
    private $pagename;

    /**
     * @var string $pagekeyword
     */
    private $pagekeyword;

    /**
     * @var integer $contentid
     */
    private $contentid;


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
     * Set pagename
     *
     * @param string $pagename
     * @return PageName
     */
    public function setPagename($pagename)
    {
        $this->pagename = $pagename;
    
        return $this;
    }

    /**
     * Get pagename
     *
     * @return string 
     */
    public function getPagename()
    {
        return $this->pagename;
    }

    /**
     * Set pagekeyword
     *
     * @param string $pagekeyword
     * @return PageName
     */
    public function setPagekeyword($pagekeyword)
    {
        $this->pagekeyword = $pagekeyword;
    
        return $this;
    }

    /**
     * Get pagekeyword
     *
     * @return string 
     */
    public function getPagekeyword()
    {
        return $this->pagekeyword;
    }

    /**
     * Set contentid
     *
     * @param integer $contentid
     * @return PageName
     */
    public function setContentid($contentid)
    {
        $this->contentid = $contentid;
    
        return $this;
    }

    /**
     * Get contentid
     *
     * @return integer 
     */
    public function getContentid()
    {
        return $this->contentid;
    }
}