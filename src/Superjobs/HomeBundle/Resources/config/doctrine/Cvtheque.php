<?php



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
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastename", type="string", length=255, nullable=false)
     */
    private $lastename;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="cv_file", type="string", length=255, nullable=false)
     */
    private $cvFile;


}
