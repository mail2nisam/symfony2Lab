<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\PromotionalBannersType
 */
class PromotionalBannersType
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $bannertypeposition
     */
    private $bannertypeposition;

    /**
     * @var integer $bannertypewidth
     */
    private $bannertypewidth;

    /**
     * @var integer $bannertypeheight
     */
    private $bannertypeheight;

    /**
     * @var string $bannertypestatus
     */
    private $bannertypestatus;


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
     * Set bannertypeposition
     *
     * @param string $bannertypeposition
     * @return PromotionalBannersType
     */
    public function setBannertypeposition($bannertypeposition)
    {
        $this->bannertypeposition = $bannertypeposition;
    
        return $this;
    }

    /**
     * Get bannertypeposition
     *
     * @return string 
     */
    public function getBannertypeposition()
    {
        return $this->bannertypeposition;
    }

    /**
     * Set bannertypewidth
     *
     * @param integer $bannertypewidth
     * @return PromotionalBannersType
     */
    public function setBannertypewidth($bannertypewidth)
    {
        $this->bannertypewidth = $bannertypewidth;
    
        return $this;
    }

    /**
     * Get bannertypewidth
     *
     * @return integer 
     */
    public function getBannertypewidth()
    {
        return $this->bannertypewidth;
    }

    /**
     * Set bannertypeheight
     *
     * @param integer $bannertypeheight
     * @return PromotionalBannersType
     */
    public function setBannertypeheight($bannertypeheight)
    {
        $this->bannertypeheight = $bannertypeheight;
    
        return $this;
    }

    /**
     * Get bannertypeheight
     *
     * @return integer 
     */
    public function getBannertypeheight()
    {
        return $this->bannertypeheight;
    }

    /**
     * Set bannertypestatus
     *
     * @param string $bannertypestatus
     * @return PromotionalBannersType
     */
    public function setBannertypestatus($bannertypestatus)
    {
        $this->bannertypestatus = $bannertypestatus;
    
        return $this;
    }

    /**
     * Get bannertypestatus
     *
     * @return string 
     */
    public function getBannertypestatus()
    {
        return $this->bannertypestatus;
    }
}