<?php

namespace Superjobs\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cvtheque
 *
 * @ORM\Table(name="CVtheque")
 * @ORM\Entity
 */
class Cvtheque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=true)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=true)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cvFile", type="string", length=255, nullable=false)
     */
    private $cvfile;

    /**
     * @var \FosUser
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({/va    
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;



    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return Cvtheque
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return Cvtheque
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
     * Set lastname
     *
     * @param string $lastname
     * @return Cvtheque
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cvtheque
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
     * Set cvfile
     *
     * @param string $cvfile
     * @return Cvtheque
     */
    public function setCvfile($cvfile)
    {
        $this->cvfile = $cvfile;

        return $this;
    }

    /**
     * Get cvfile
     *
     * @return string 
     */
    public function getCvfile()
    {
        return $this->cvfile;
    }

    /**
     * Set id
     *
     * @param \Superjobs\HomeBundle\Entity\FosUser $id
     * @return Cvtheque
     */
    public function setId(\Superjobs\HomeBundle\Entity\FosUser $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return \Superjobs\HomeBundle\Entity\FosUser 
     */
    public function getId()
    {
        return $this->id;
    }
}
