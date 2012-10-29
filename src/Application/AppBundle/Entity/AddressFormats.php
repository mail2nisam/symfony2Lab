<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\AddressFormats
 */
class AddressFormats
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $addressformat
     */
    private $addressformat;


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
     * Set addressformat
     *
     * @param string $addressformat
     * @return AddressFormats
     */
    public function setAddressformat($addressformat)
    {
        $this->addressformat = $addressformat;
    
        return $this;
    }

    /**
     * Get addressformat
     *
     * @return string 
     */
    public function getAddressformat()
    {
        return $this->addressformat;
    }
}