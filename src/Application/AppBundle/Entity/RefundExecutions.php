<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\RefundExecutions
 */
class RefundExecutions
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var \DateTime $refundexecutiondate
     */
    private $refundexecutiondate;


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
     * Set refundexecutiondate
     *
     * @param \DateTime $refundexecutiondate
     * @return RefundExecutions
     */
    public function setRefundexecutiondate($refundexecutiondate)
    {
        $this->refundexecutiondate = $refundexecutiondate;
    
        return $this;
    }

    /**
     * Get refundexecutiondate
     *
     * @return \DateTime 
     */
    public function getRefundexecutiondate()
    {
        return $this->refundexecutiondate;
    }
}