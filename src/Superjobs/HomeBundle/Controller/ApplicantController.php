<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApplicantController extends Controller
{
    public function profileAction()
    {             
        return $this->render('SuperjobsHomeBundle:Applicant:Profile.html.twig');
    }
    public function teamAction()
    {             
        return $this->render('SuperjobsHomeBundle:Applicant:Team.html.twig');
    }
}
