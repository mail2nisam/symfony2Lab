<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\UrlKeys
 */
class UrlKeys
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $urlkey
     */
    private $urlkey;

    /**
     * @var string $referancetable
     */
    private $referancetable;

    /**
     * @var string $referencefield
     */
    private $referencefield;

    /**
     * @var string $referencefieldid
     */
    private $referencefieldid;


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
     * Set urlkey
     *
     * @param string $urlkey
     * @return UrlKeys
     */
    public function setUrlkey($urlkey)
    {
        $this->urlkey = $urlkey;
    
        return $this;
    }

    /**
     * Get urlkey
     *
     * @return string 
     */
    public function getUrlkey()
    {
        return $this->urlkey;
    }

    /**
     * Set referancetable
     *
     * @param string $referancetable
     * @return UrlKeys
     */
    public function setReferancetable($referancetable)
    {
        $this->referancetable = $referancetable;
    
        return $this;
    }

    /**
     * Get referancetable
     *
     * @return string 
     */
    public function getReferancetable()
    {
        return $this->referancetable;
    }

    /**
     * Set referencefield
     *
     * @param string $referencefield
     * @return UrlKeys
     */
    public function setReferencefield($referencefield)
    {
        $this->referencefield = $referencefield;
    
        return $this;
    }

    /**
     * Get referencefield
     *
     * @return string 
     */
    public function getReferencefield()
    {
        return $this->referencefield;
    }

    /**
     * Set referencefieldid
     *
     * @param string $referencefieldid
     * @return UrlKeys
     */
    public function setReferencefieldid($referencefieldid)
    {
        $this->referencefieldid = $referencefieldid;
    
        return $this;
    }

    /**
     * Get referencefieldid
     *
     * @return string 
     */
    public function getReferencefieldid()
    {
        return $this->referencefieldid;
    }
}