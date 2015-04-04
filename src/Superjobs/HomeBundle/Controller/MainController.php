<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $jobs = $em->getRepository("SuperjobsHomeBundle:Jobs")->findAll();
             
        return $this->render('SuperjobsHomeBundle:Main:index.html.twig', array(
            'jobs'=>$jobs
                ));
    }
}
