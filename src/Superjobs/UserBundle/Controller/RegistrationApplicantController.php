<?php

namespace Superjobs\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationApplicantController extends Controller
{
    public function registerAction()
    {
//        return $this->render('SuperjobsUserBundle:Default:Registration/Applicant/applicant.form.html.twig');
        return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('Superjobs\UserBundle\Entity\Applicant');
    }
}