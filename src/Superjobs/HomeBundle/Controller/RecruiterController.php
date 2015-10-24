<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Superjobs\HomeBundle\Entity\Jobs;
use Superjobs\HomeBundle\Form\JobsType;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class RecruiterController extends Controller
{
    public function introAction()
    {
        return $this->render('SuperjobsHomeBundle:Recruiter:intro.html.twig');
    }

    public function addAction()
    {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_RECRUITER')) {
            throw new AccessDeniedException();
        } else {
        $em = $this->getDoctrine()->getManager();
    	$Jobs = new Jobs;
        $form = $this->createForm(new JobsType, $Jobs);

        $request = $this->getRequest();
               
        if ($request->isMethod('Post')){
            $form->bind($request);
            if($form->isValid()){
                $Jobs = $form->getData();
                $Jobs->setIsCreated('true');

                $em->persist($Jobs);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Votre offre à était créer et sera bientôt en ligne !'
                );
                return $this->redirect($this->generateUrl('superjobs_home_homepage'));
            }
        }
        return $this->render('SuperjobsHomeBundle:Recruiter:add.html.twig',
            array('form' => $form->createView()));
        }
    }


}
