<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\VisitorCountInfo
 */
class VisitorCountInfo
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \DateTime $date
     */
    private $date;

    /**
     * @var integer $newvisitorcount
     */
    private $newvisitorcount;

    /**
     * @var integer $returningvisitorcount
     */
    private $returningvisitorcount;

    /**
     * @var integer $returningvisitcount
     */
    private $returningvisitcount;

    /**
     * @var integer $totalvisitcount
     */
    private $totalvisitcount;


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
     * Set date
     *
     * @param \DateTime $date
     * @return VisitorCountInfo
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set newvisitorcount
     *
     * @param integer $newvisitorcount
     * @return VisitorCountInfo
     */
    public function setNewvisitorcount($newvisitorcount)
    {
        $this->newvisitorcount = $newvisitorcount;
    
        return $this;
    }

    /**
     * Get newvisitorcount
     *
     * @return integer 
     */
    public function getNewvisitorcount()
    {
        return $this->newvisitorcount;
    }

    /**
     * Set returningvisitorcount
     *
     * @param integer $returningvisitorcount
     * @return VisitorCountInfo
     */
    public function setReturningvisitorcount($returningvisitorcount)
    {
        $this->returningvisitorcount = $returningvisitorcount;
    
        return $this;
    }

    /**
     * Get returningvisitorcount
     *
     * @return integer 
     */
    public function getReturningvisitorcount()
    {
        return $this->returningvisitorcount;
    }

    /**
     * Set returningvisitcount
     *
     * @param integer $returningvisitcount
     * @return VisitorCountInfo
     */
    public function setReturningvisitcount($returningvisitcount)
    {
        $this->returningvisitcount = $returningvisitcount;
    
        return $this;
    }

    /**
     * Get returningvisitcount
     *
     * @return integer 
     */
    public function getReturningvisitcount()
    {
        return $this->returningvisitcount;
    }

    /**
     * Set totalvisitcount
     *
     * @param integer $totalvisitcount
     * @return VisitorCountInfo
     */
    public function setTotalvisitcount($totalvisitcount)
    {
        $this->totalvisitcount = $totalvisitcount;
    
        return $this;
    }

    /**
     * Get totalvisitcount
     *
     * @return integer 
     */
    public function getTotalvisitcount()
    {
        return $this->totalvisitcount;
    }
}