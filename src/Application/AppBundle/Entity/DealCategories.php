<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealCategories
 */
class DealCategories
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $dealcategoryname
     */
    private $dealcategoryname;

    /**
     * @var string $dealcategorydescription
     */
    private $dealcategorydescription;

    /**
     * @var string $dealcategorykey
     */
    private $dealcategorykey;

    /**
     * @var integer $dealcategoryparent
     */
    private $dealcategoryparent;

    /**
     * @var string $dealcategorystatus
     */
    private $dealcategorystatus;

    /**
     * @var integer $dealcategorysortorder
     */
    private $dealcategorysortorder;

    /**
     * @var string $dealcategoryimage
     */
    private $dealcategoryimage;


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
     * Set dealcategoryname
     *
     * @param string $dealcategoryname
     * @return DealCategories
     */
    public function setDealcategoryname($dealcategoryname)
    {
        $this->dealcategoryname = $dealcategoryname;
    
        return $this;
    }

    /**
     * Get dealcategoryname
     *
     * @return string 
     */
    public function getDealcategoryname()
    {
        return $this->dealcategoryname;
    }

    /**
     * Set dealcategorydescription
     *
     * @param string $dealcategorydescription
     * @return DealCategories
     */
    public function setDealcategorydescription($dealcategorydescription)
    {
        $this->dealcategorydescription = $dealcategorydescription;
    
        return $this;
    }

    /**
     * Get dealcategorydescription
     *
     * @return string 
     */
    public function getDealcategorydescription()
    {
        return $this->dealcategorydescription;
    }

    /**
     * Set dealcategorykey
     *
     * @param string $dealcategorykey
     * @return DealCategories
     */
    public function setDealcategorykey($dealcategorykey)
    {
        $this->dealcategorykey = $dealcategorykey;
    
        return $this;
    }

    /**
     * Get dealcategorykey
     *
     * @return string 
     */
    public function getDealcategorykey()
    {
        return $this->dealcategorykey;
    }

    /**
     * Set dealcategoryparent
     *
     * @param integer $dealcategoryparent
     * @return DealCategories
     */
    public function setDealcategoryparent($dealcategoryparent)
    {
        $this->dealcategoryparent = $dealcategoryparent;
    
        return $this;
    }

    /**
     * Get dealcategoryparent
     *
     * @return integer 
     */
    public function getDealcategoryparent()
    {
        return $this->dealcategoryparent;
    }

    /**
     * Set dealcategorystatus
     *
     * @param string $dealcategorystatus
     * @return DealCategories
     */
    public function setDealcategorystatus($dealcategorystatus)
    {
        $this->dealcategorystatus = $dealcategorystatus;
    
        return $this;
    }

    /**
     * Get dealcategorystatus
     *
     * @return string 
     */
    public function getDealcategorystatus()
    {
        return $this->dealcategorystatus;
    }

    /**
     * Set dealcategorysortorder
     *
     * @param integer $dealcategorysortorder
     * @return DealCategories
     */
    public function setDealcategorysortorder($dealcategorysortorder)
    {
        $this->dealcategorysortorder = $dealcategorysortorder;
    
        return $this;
    }

    /**
     * Get dealcategorysortorder
     *
     * @return integer 
     */
    public function getDealcategorysortorder()
    {
        return $this->dealcategorysortorder;
    }

    /**
     * Set dealcategoryimage
     *
     * @param string $dealcategoryimage
     * @return DealCategories
     */
    public function setDealcategoryimage($dealcategoryimage)
    {
        $this->dealcategoryimage = $dealcategoryimage;
    
        return $this;
    }

    /**
     * Get dealcategoryimage
     *
     * @return string 
     */
    public function getDealcategoryimage()
    {
        return $this->dealcategoryimage;
    }
}