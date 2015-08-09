<?php

namespace Superjobs\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecruiterController extends Controller
{
    public function indexAction()
    {
        return $this->render('SuperjobsUserBundle:Recruiter:index.html.twig');
    }
}