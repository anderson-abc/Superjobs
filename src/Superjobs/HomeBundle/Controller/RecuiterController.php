<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Superjobs\HomeBundle\Entity\Jobs;
use Superjobs\HomeBundle\Form\JobsType;

class RecuiterController extends Controller
{
    // la fonction intro contient deja la liste des jobs en mode bref description
    public function introAction()
    {
        return $this->render('SuperjobsHomeBundle:Recruiter:intro.html.twig');
    }

    public function addAction()
    {

        $em = $this->getDoctrine()->getManager();
    	$Jobs = new Jobs;
        $form = $this->createForm(new JobsType, $Jobs);

        $request = $this->getRequest();
		
        if ($request->isMethod('Post')) {
            $form->bind($request);

            if($form->isValid()) {

                $Jobs = $form->getData();

                // this is for sending simple email
                // $message = \Swift_Message::newInstance()
                //     ->setSubject('Hello Email')
                //     ->setFrom('amrihafedh@yahoo.fr')
                //     ->setTo($this->container->getParameter('SuperjobsHomeBundle.Jobs.add'))
                //     ->setBody($this->renderView('SuperjobsHomeBundle:Recruiter:addEmail.txt.twig', 
                //         array('add' => $Jobs)));
                // $this->get('mailer')->send($message);
                // sending email until here ...


                $em->persist($Jobs);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Votre message à bien été envoyer !'
                );
                return $this->redirect($this->generateUrl('superjobs_home_homepage'));
            }
        }

        return $this->render('SuperjobsHomeBundle:Recruiter:add.html.twig',
            array('form' => $form->createView()));

    }

    function detailsAction(){     
        $em = $this->getDoctrine()->getEntityManager();
        $job = $em->getRepository("SuperjobsHomeBundle:Jobs")->find($id);
        var_dump($job);

        return $this->render('SuperjobsHomeBundle:Recruiter:details.html.twig',
            array('job' => $job));
    }
}
