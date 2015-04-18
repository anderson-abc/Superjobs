<?php

namespace Superjobs\UserBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="fos_group")
 * @ORM\Entity
 */
class Groups extends BaseGroup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
