<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $jobs = $em->getRepository("SuperjobsHomeBundle:Jobs")->findBy(   
                                array(), 
                                array('id' => 'DESC')
                );
        
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $jobs,
            $request->query->get('page', 1)/*page number*/,
            5/*limit per page*/
        );
             
        return $this->render('SuperjobsHomeBundle:Main:index.html.twig', array(
            'pagination' => $pagination
                ));
    }
}
