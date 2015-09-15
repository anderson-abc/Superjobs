<?php

namespace Superjobs\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationApplicantController extends Controller
{
    public function registerAction()
    {
        return $this->render('SuperjobsUserBundle:Registration:applicant.form.html.twig');
    }
}