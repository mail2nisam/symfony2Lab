<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\DealCertificates
 */
class DealCertificates
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $dealid
     */
    private $dealid;

    /**
     * @var integer $orderid
     */
    private $orderid;

    /**
     * @var integer $orderitemid
     */
    private $orderitemid;

    /**
     * @var integer $userid
     */
    private $userid;

    /**
     * @var string $certificatecode
     */
    private $certificatecode;

    /**
     * @var string $certificatename
     */
    private $certificatename;

    /**
     * @var string $certificateemail
     */
    private $certificateemail;

    /**
     * @var \DateTime $cercreatedate
     */
    private $cercreatedate;

    /**
     * @var \DateTime $cerexpirydate
     */
    private $cerexpirydate;

    /**
     * @var string $statusUpdatedBy
     */
    private $statusUpdatedBy;

    /**
     * @var \DateTime $statusUpdatedDate
     */
    private $statusUpdatedDate;

    /**
     * @var string $cerstatus
     */
    private $cerstatus;

    /**
     * @var string $mailsendstatus
     */
    private $mailsendstatus;

    /**
     * @var string $mailsentby
     */
    private $mailsentby;

    /**
     * @var string $certificatedata
     */
    private $certificatedata;


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
     * Set dealid
     *
     * @param integer $dealid
     * @return DealCertificates
     */
    public function setDealid($dealid)
    {
        $this->dealid = $dealid;
    
        return $this;
    }

    /**
     * Get dealid
     *
     * @return integer 
     */
    public function getDealid()
    {
        return $this->dealid;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     * @return DealCertificates
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;
    
        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer 
     */
    public function getOrderid()
    {
        return $this->orderid;
    }

    /**
     * Set orderitemid
     *
     * @param integer $orderitemid
     * @return DealCertificates
     */
    public function setOrderitemid($orderitemid)
    {
        $this->orderitemid = $orderitemid;
    
        return $this;
    }

    /**
     * Get orderitemid
     *
     * @return integer 
     */
    public function getOrderitemid()
    {
        return $this->orderitemid;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     * @return DealCertificates
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    
        return $this;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set certificatecode
     *
     * @param string $certificatecode
     * @return DealCertificates
     */
    public function setCertificatecode($certificatecode)
    {
        $this->certificatecode = $certificatecode;
    
        return $this;
    }

    /**
     * Get certificatecode
     *
     * @return string 
     */
    public function getCertificatecode()
    {
        return $this->certificatecode;
    }

    /**
     * Set certificatename
     *
     * @param string $certificatename
     * @return DealCertificates
     */
    public function setCertificatename($certificatename)
    {
        $this->certificatename = $certificatename;
    
        return $this;
    }

    /**
     * Get certificatename
     *
     * @return string 
     */
    public function getCertificatename()
    {
        return $this->certificatename;
    }

    /**
     * Set certificateemail
     *
     * @param string $certificateemail
     * @return DealCertificates
     */
    public function setCertificateemail($certificateemail)
    {
        $this->certificateemail = $certificateemail;
    
        return $this;
    }

    /**
     * Get certificateemail
     *
     * @return string 
     */
    public function getCertificateemail()
    {
        return $this->certificateemail;
    }

    /**
     * Set cercreatedate
     *
     * @param \DateTime $cercreatedate
     * @return DealCertificates
     */
    public function setCercreatedate($cercreatedate)
    {
        $this->cercreatedate = $cercreatedate;
    
        return $this;
    }

    /**
     * Get cercreatedate
     *
     * @return \DateTime 
     */
    public function getCercreatedate()
    {
        return $this->cercreatedate;
    }

    /**
     * Set cerexpirydate
     *
     * @param \DateTime $cerexpirydate
     * @return DealCertificates
     */
    public function setCerexpirydate($cerexpirydate)
    {
        $this->cerexpirydate = $cerexpirydate;
    
        return $this;
    }

    /**
     * Get cerexpirydate
     *
     * @return \DateTime 
     */
    public function getCerexpirydate()
    {
        return $this->cerexpirydate;
    }

    /**
     * Set statusUpdatedBy
     *
     * @param string $statusUpdatedBy
     * @return DealCertificates
     */
    public function setStatusUpdatedBy($statusUpdatedBy)
    {
        $this->statusUpdatedBy = $statusUpdatedBy;
    
        return $this;
    }

    /**
     * Get statusUpdatedBy
     *
     * @return string 
     */
    public function getStatusUpdatedBy()
    {
        return $this->statusUpdatedBy;
    }

    /**
     * Set statusUpdatedDate
     *
     * @param \DateTime $statusUpdatedDate
     * @return DealCertificates
     */
    public function setStatusUpdatedDate($statusUpdatedDate)
    {
        $this->statusUpdatedDate = $statusUpdatedDate;
    
        return $this;
    }

    /**
     * Get statusUpdatedDate
     *
     * @return \DateTime 
     */
    public function getStatusUpdatedDate()
    {
        return $this->statusUpdatedDate;
    }

    /**
     * Set cerstatus
     *
     * @param string $cerstatus
     * @return DealCertificates
     */
    public function setCerstatus($cerstatus)
    {
        $this->cerstatus = $cerstatus;
    
        return $this;
    }

    /**
     * Get cerstatus
     *
     * @return string 
     */
    public function getCerstatus()
    {
        return $this->cerstatus;
    }

    /**
     * Set mailsendstatus
     *
     * @param string $mailsendstatus
     * @return DealCertificates
     */
    public function setMailsendstatus($mailsendstatus)
    {
        $this->mailsendstatus = $mailsendstatus;
    
        return $this;
    }

    /**
     * Get mailsendstatus
     *
     * @return string 
     */
    public function getMailsendstatus()
    {
        return $this->mailsendstatus;
    }

    /**
     * Set mailsentby
     *
     * @param string $mailsentby
     * @return DealCertificates
     */
    public function setMailsentby($mailsentby)
    {
        $this->mailsentby = $mailsentby;
    
        return $this;
    }

    /**
     * Get mailsentby
     *
     * @return string 
     */
    public function getMailsentby()
    {
        return $this->mailsentby;
    }

    /**
     * Set certificatedata
     *
     * @param string $certificatedata
     * @return DealCertificates
     */
    public function setCertificatedata($certificatedata)
    {
        $this->certificatedata = $certificatedata;
    
        return $this;
    }

    /**
     * Get certificatedata
     *
     * @return string 
     */
    public function getCertificatedata()
    {
        return $this->certificatedata;
    }
}