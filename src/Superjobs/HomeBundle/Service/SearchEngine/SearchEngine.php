<?php

namespace Superjobs\HomeBundle\Service\SearchEngine;

use Doctrine\ORM\EntityManager;

/**
 * Description of SearchEngine
 *
 * @author ubuntu
 */
class SearchEngine {

    private $em = null;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    function searchExpress($pattern) {
        
        $query = $this->em->createQuery(
                        'SELECT j 
    FROM SuperjobsHomeBundle:Jobs j
    WHERE j.description like :pattern '
                )->setParameter('pattern', '%' . $pattern . '%');

        try {
            $theJobs = $query->getResult();
            return $theJobs;
        } catch (DoctrineORMNoResultException $e) {
            return false;
        }
    }
}
