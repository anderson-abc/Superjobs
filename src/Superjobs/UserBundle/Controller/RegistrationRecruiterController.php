<?php

namespace Superjobs\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationRecruiterController extends Controller
{
    public function registerAction()
    {
        return $this->render('IrmasoftUserBundle:Registration:recruiter.form.html.twig');
    }
}