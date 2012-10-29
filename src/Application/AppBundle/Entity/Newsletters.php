<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\Newsletters
 */
class Newsletters
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $newsletterfromname
     */
    private $newsletterfromname;

    /**
     * @var string $newsletterfromemail
     */
    private $newsletterfromemail;

    /**
     * @var string $newslettersubject
     */
    private $newslettersubject;

    /**
     * @var string $newslettercontenthtml
     */
    private $newslettercontenthtml;

    /**
     * @var string $newslettercontenttext
     */
    private $newslettercontenttext;

    /**
     * @var string $newslettersent
     */
    private $newslettersent;

    /**
     * @var \DateTime $newslettercreatedate
     */
    private $newslettercreatedate;

    /**
     * @var \DateTime $newslettersentdate
     */
    private $newslettersentdate;


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
     * Set newsletterfromname
     *
     * @param string $newsletterfromname
     * @return Newsletters
     */
    public function setNewsletterfromname($newsletterfromname)
    {
        $this->newsletterfromname = $newsletterfromname;
    
        return $this;
    }

    /**
     * Get newsletterfromname
     *
     * @return string 
     */
    public function getNewsletterfromname()
    {
        return $this->newsletterfromname;
    }

    /**
     * Set newsletterfromemail
     *
     * @param string $newsletterfromemail
     * @return Newsletters
     */
    public function setNewsletterfromemail($newsletterfromemail)
    {
        $this->newsletterfromemail = $newsletterfromemail;
    
        return $this;
    }

    /**
     * Get newsletterfromemail
     *
     * @return string 
     */
    public function getNewsletterfromemail()
    {
        return $this->newsletterfromemail;
    }

    /**
     * Set newslettersubject
     *
     * @param string $newslettersubject
     * @return Newsletters
     */
    public function setNewslettersubject($newslettersubject)
    {
        $this->newslettersubject = $newslettersubject;
    
        return $this;
    }

    /**
     * Get newslettersubject
     *
     * @return string 
     */
    public function getNewslettersubject()
    {
        return $this->newslettersubject;
    }

    /**
     * Set newslettercontenthtml
     *
     * @param string $newslettercontenthtml
     * @return Newsletters
     */
    public function setNewslettercontenthtml($newslettercontenthtml)
    {
        $this->newslettercontenthtml = $newslettercontenthtml;
    
        return $this;
    }

    /**
     * Get newslettercontenthtml
     *
     * @return string 
     */
    public function getNewslettercontenthtml()
    {
        return $this->newslettercontenthtml;
    }

    /**
     * Set newslettercontenttext
     *
     * @param string $newslettercontenttext
     * @return Newsletters
     */
    public function setNewslettercontenttext($newslettercontenttext)
    {
        $this->newslettercontenttext = $newslettercontenttext;
    
        return $this;
    }

    /**
     * Get newslettercontenttext
     *
     * @return string 
     */
    public function getNewslettercontenttext()
    {
        return $this->newslettercontenttext;
    }

    /**
     * Set newslettersent
     *
     * @param string $newslettersent
     * @return Newsletters
     */
    public function setNewslettersent($newslettersent)
    {
        $this->newslettersent = $newslettersent;
    
        return $this;
    }

    /**
     * Get newslettersent
     *
     * @return string 
     */
    public function getNewslettersent()
    {
        return $this->newslettersent;
    }

    /**
     * Set newslettercreatedate
     *
     * @param \DateTime $newslettercreatedate
     * @return Newsletters
     */
    public function setNewslettercreatedate($newslettercreatedate)
    {
        $this->newslettercreatedate = $newslettercreatedate;
    
        return $this;
    }

    /**
     * Get newslettercreatedate
     *
     * @return \DateTime 
     */
    public function getNewslettercreatedate()
    {
        return $this->newslettercreatedate;
    }

    /**
     * Set newslettersentdate
     *
     * @param \DateTime $newslettersentdate
     * @return Newsletters
     */
    public function setNewslettersentdate($newslettersentdate)
    {
        $this->newslettersentdate = $newslettersentdate;
    
        return $this;
    }

    /**
     * Get newslettersentdate
     *
     * @return \DateTime 
     */
    public function getNewslettersentdate()
    {
        return $this->newslettersentdate;
    }
}