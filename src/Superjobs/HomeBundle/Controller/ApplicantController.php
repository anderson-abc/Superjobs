<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApplicantController extends Controller
{
    public function introAction()
    {             
        return $this->render('SuperjobsHomeBundle:Applicant:intro.html.twig');
    }
    public function profileAction()
    {             
        return $this->render('SuperjobsHomeBundle:Applicant:Profile.html.twig');
    }
    public function teamAction()
    {             
        return $this->render('SuperjobsHomeBundle:Applicant:Team.html.twig');
    }
    
    public function submitCVAction($id,  Request $request)
    {             
        $job = $this->getDoctrine()->getRepository("SuperjobsHomeBundle:Jobs")->findOneBy(array('id'=>$id));
        
        
        
        
        
        
        return $this->render('SuperjobsHomeBundle:Applicant:submitCV.html.twig',array(
            'job' => $job
                ));
    }
}
