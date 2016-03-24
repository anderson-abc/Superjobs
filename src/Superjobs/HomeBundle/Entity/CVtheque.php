<?php

namespace Superjobs\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CVtheque
 */
class CVtheque
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastename;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $cvFile;


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
     * Set firstname
     *
     * @param string $firstname
     * @return CVtheque
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastename
     *
     * @param string $lastename
     * @return CVtheque
     */
    public function setLastename($lastename)
    {
        $this->lastename = $lastename;

        return $this;
    }

    /**
     * Get lastename
     *
     * @return string 
     */
    public function getLastename()
    {
        return $this->lastename;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return CVtheque
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set cvFile
     *
     * @param string $cvFile
     * @return CVtheque
     */
    public function setCvFile($cvFile)
    {
        $this->cvFile = $cvFile;

        return $this;
    }

    /**
     * Get cvFile
     *
     * @return string 
     */
    public function getCvFile()
    {
        return $this->cvFile;
    }
}
