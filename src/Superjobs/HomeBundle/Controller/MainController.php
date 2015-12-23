<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $jobs = $em->getRepository("SuperjobsHomeBundle:Jobs")->findBy(   
                                array(), 
                                array('id' => 'DESC')
                );
        
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                            $jobs,
                            $request->query->get('page', 1)/*page number*/,
                            11/*limit per page*/
                        );
             
        return $this->render('SuperjobsHomeBundle:Main:index.html.twig', array(
            'pagination' => $pagination
                ));
    }
    
    public function feedbackAction()
    {       
        return $this->render('SuperjobsHomeBundle:Main:feedback.html.twig');
    }
    public function contactAction()
    {       
        return $this->render('SuperjobsHomeBundle:Main:contact.html.twig');
    }
    public function faqAction()
    {       
        return $this->render('SuperjobsHomeBundle:Main:faq.html.twig');
    }
    public function pressAction()
    {       
        return $this->render('SuperjobsHomeBundle:Main:press.html.twig');
    }
    public function cguAction()
    {       
        return $this->render('SuperjobsHomeBundle:Main:cgu.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('SuperjobsHomeBundle:Main:about.html.twig');
    }
    
    function detailsAction($id, Request $request){

        $id = $request->query->get('tag');
        //$em = $this->getDoctrine()->getEntityManager();
        $job = $this->getDoctrine()->getRepository("SuperjobsHomeBundle:Jobs")->findOneBy(array('id'=>$id));
        if (!$job) {
            throw $this->createNotFoundException(
                'Ce job n\'existe plus : '.$id
            );
        }               
        return $this->render('SuperjobsHomeBundle:Main:details.html.twig',
            array('job' => $job));
    }
}
