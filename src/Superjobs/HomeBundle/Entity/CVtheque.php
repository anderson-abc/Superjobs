<?php

namespace Superjobs\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CVtheque
 *
 * @ORM\Table(name="CVtheque")
 * @ORM\Entity()
 */
class CVtheque {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * @ORM\Column(name="cvFile", type="string", length=255)
     */
    private $cvFile;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return CVtheque
     */
    public function setIsuser($iduser) {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer
     */
    public function getIduser() {
        return $this->iduser;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return CVtheque
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return CVtheque
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return CVtheque
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set cvFile
     *
     * @param string $cvFile
     * @return CVtheque
     */
    public function setCvFile($cvFile) {
        $this->cvFile = $cvFile;

        return $this;
    }

    /**
     * Get cvFile
     *
     * @return string 
     */
    public function getCvFile() {
        return $this->cvFile;
    }

}
