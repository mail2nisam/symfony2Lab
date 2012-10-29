<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\GiftEmailTemplates
 */
class GiftEmailTemplates
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $gitemailtemplatetitle
     */
    private $gitemailtemplatetitle;

    /**
     * @var string $giftemailtemplateimage
     */
    private $giftemailtemplateimage;


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
     * Set gitemailtemplatetitle
     *
     * @param string $gitemailtemplatetitle
     * @return GiftEmailTemplates
     */
    public function setGitemailtemplatetitle($gitemailtemplatetitle)
    {
        $this->gitemailtemplatetitle = $gitemailtemplatetitle;
    
        return $this;
    }

    /**
     * Get gitemailtemplatetitle
     *
     * @return string 
     */
    public function getGitemailtemplatetitle()
    {
        return $this->gitemailtemplatetitle;
    }

    /**
     * Set giftemailtemplateimage
     *
     * @param string $giftemailtemplateimage
     * @return GiftEmailTemplates
     */
    public function setGiftemailtemplateimage($giftemailtemplateimage)
    {
        $this->giftemailtemplateimage = $giftemailtemplateimage;
    
        return $this;
    }

    /**
     * Get giftemailtemplateimage
     *
     * @return string 
     */
    public function getGiftemailtemplateimage()
    {
        return $this->giftemailtemplateimage;
    }
}