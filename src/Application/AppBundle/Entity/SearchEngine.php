<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\SearchEngine
 */
class SearchEngine
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $searchenginename
     */
    private $searchenginename;

    /**
     * @var string $searchengineurl
     */
    private $searchengineurl;

    /**
     * @var string $searchparameter
     */
    private $searchparameter;


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
     * Set searchenginename
     *
     * @param string $searchenginename
     * @return SearchEngine
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
     * Set searchengineurl
     *
     * @param string $searchengineurl
     * @return SearchEngine
     */
    public function setSearchengineurl($searchengineurl)
    {
        $this->searchengineurl = $searchengineurl;
    
        return $this;
    }

    /**
     * Get searchengineurl
     *
     * @return string 
     */
    public function getSearchengineurl()
    {
        return $this->searchengineurl;
    }

    /**
     * Set searchparameter
     *
     * @param string $searchparameter
     * @return SearchEngine
     */
    public function setSearchparameter($searchparameter)
    {
        $this->searchparameter = $searchparameter;
    
        return $this;
    }

    /**
     * Get searchparameter
     *
     * @return string 
     */
    public function getSearchparameter()
    {
        return $this->searchparameter;
    }
}