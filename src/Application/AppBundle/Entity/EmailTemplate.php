<?php

namespace Application\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application\AppBundle\Entity\EmailTemplate
 */
class EmailTemplate
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $emailfromname
     */
    private $emailfromname;

    /**
     * @var string $emailfromemail
     */
    private $emailfromemail;

    /**
     * @var string $emailtemplatename
     */
    private $emailtemplatename;

    /**
     * @var string $emailsendtokey
     */
    private $emailsendtokey;

    /**
     * @var string $emailsubject
     */
    private $emailsubject;

    /**
     * @var string $emailhtml
     */
    private $emailhtml;

    /**
     * @var string $emailtext
     */
    private $emailtext;

    /**
     * @var string $editable
     */
    private $editable;


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
     * Set emailfromname
     *
     * @param string $emailfromname
     * @return EmailTemplate
     */
    public function setEmailfromname($emailfromname)
    {
        $this->emailfromname = $emailfromname;
    
        return $this;
    }

    /**
     * Get emailfromname
     *
     * @return string 
     */
    public function getEmailfromname()
    {
        return $this->emailfromname;
    }

    /**
     * Set emailfromemail
     *
     * @param string $emailfromemail
     * @return EmailTemplate
     */
    public function setEmailfromemail($emailfromemail)
    {
        $this->emailfromemail = $emailfromemail;
    
        return $this;
    }

    /**
     * Get emailfromemail
     *
     * @return string 
     */
    public function getEmailfromemail()
    {
        return $this->emailfromemail;
    }

    /**
     * Set emailtemplatename
     *
     * @param string $emailtemplatename
     * @return EmailTemplate
     */
    public function setEmailtemplatename($emailtemplatename)
    {
        $this->emailtemplatename = $emailtemplatename;
    
        return $this;
    }

    /**
     * Get emailtemplatename
     *
     * @return string 
     */
    public function getEmailtemplatename()
    {
        return $this->emailtemplatename;
    }

    /**
     * Set emailsendtokey
     *
     * @param string $emailsendtokey
     * @return EmailTemplate
     */
    public function setEmailsendtokey($emailsendtokey)
    {
        $this->emailsendtokey = $emailsendtokey;
    
        return $this;
    }

    /**
     * Get emailsendtokey
     *
     * @return string 
     */
    public function getEmailsendtokey()
    {
        return $this->emailsendtokey;
    }

    /**
     * Set emailsubject
     *
     * @param string $emailsubject
     * @return EmailTemplate
     */
    public function setEmailsubject($emailsubject)
    {
        $this->emailsubject = $emailsubject;
    
        return $this;
    }

    /**
     * Get emailsubject
     *
     * @return string 
     */
    public function getEmailsubject()
    {
        return $this->emailsubject;
    }

    /**
     * Set emailhtml
     *
     * @param string $emailhtml
     * @return EmailTemplate
     */
    public function setEmailhtml($emailhtml)
    {
        $this->emailhtml = $emailhtml;
    
        return $this;
    }

    /**
     * Get emailhtml
     *
     * @return string 
     */
    public function getEmailhtml()
    {
        return $this->emailhtml;
    }

    /**
     * Set emailtext
     *
     * @param string $emailtext
     * @return EmailTemplate
     */
    public function setEmailtext($emailtext)
    {
        $this->emailtext = $emailtext;
    
        return $this;
    }

    /**
     * Get emailtext
     *
     * @return string 
     */
    public function getEmailtext()
    {
        return $this->emailtext;
    }

    /**
     * Set editable
     *
     * @param string $editable
     * @return EmailTemplate
     */
    public function setEditable($editable)
    {
        $this->editable = $editable;
    
        return $this;
    }

    /**
     * Get editable
     *
     * @return string 
     */
    public function getEditable()
    {
        return $this->editable;
    }
}