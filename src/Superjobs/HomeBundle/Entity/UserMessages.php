<?php

namespace Superjobs\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserMessages
 *
 * @ORM\Table(name="user_messages")
 * @ORM\Entity
 */
class UserMessages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="fromIdUser", type="integer", nullable=true)
     */
    private $fromiduser;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="toIdUser", type="integer", nullable=true)
     */
    private $toiduser;



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
     * Set fromiduser
     *
     * @param integer $fromiduser
     * @return UserMessages
     */
    public function setFromiduser($fromiduser)
    {
        $this->fromiduser = $fromiduser;

        return $this;
    }

    /**
     * Get fromiduser
     *
     * @return integer 
     */
    public function getFromiduser()
    {
        return $this->fromiduser;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return UserMessages
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set toiduser
     *
     * @param integer $toiduser
     * @return UserMessages
     */
    public function setToiduser($toiduser)
    {
        $this->toiduser = $toiduser;

        return $this;
    }

    /**
     * Get toiduser
     *
     * @return integer 
     */
    public function getToiduser()
    {
        return $this->toiduser;
    }
}
