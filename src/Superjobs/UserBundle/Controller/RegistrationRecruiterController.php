<?php

namespace Superjobs\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationRecruiterController extends Controller
{
    public function registerAction()
    {
        return $this->render('SuperjobsUserBundle:Registration:recruiter.form.html.twig');
    }
}