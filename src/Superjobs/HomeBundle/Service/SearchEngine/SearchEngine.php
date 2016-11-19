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
    WHERE j.description like :pattern 
    order by j.updatedAt desc  '
                )->setParameter('pattern', '%' . $pattern . '%');

        try {
            $theJobs = $query->getResult();
            return $theJobs;
        } catch (DoctrineORMNoResultException $e) {
            return false;
        }
    }

    function searchByCompany($pattern) {

        $query = $this->em->createQuery(
                        'SELECT j 
    FROM SuperjobsHomeBundle:Jobs j
    WHERE j.company like :pattern 
    order by j.updatedAt desc  '
                )->setParameter('pattern', '%' . $pattern . '%');

        try {
            $theJobs = $query->getResult();
            return $theJobs;
        } catch (DoctrineORMNoResultException $e) {
            return false;
        }
    }

    function getCompanyList() {

        $query = $this->em->createQuery(
                'SELECT j.company 
    FROM SuperjobsHomeBundle:Jobs j
    order by j.company desc  '
        );

        try {
            $theresults = $query->getResult();
            return $theresults;
        } catch (DoctrineORMNoResultException $e) {
            return false;
        }
    }

}
