<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Superjobs\HomeBundle\Entity\Jobs;
use Superjobs\HomeBundle\Form\JobsType;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class RecuiterController extends Controller
{
    public function introAction()
    {
        return $this->render('SuperjobsHomeBundle:Recruiter:intro.html.twig');
    }

    public function addAction()
    {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
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
                $logo_file = $this->getRequest()->request->get('blabla');
                $form['logo']->getData()->move();

                
                // this is for sending simple email
                // $message = \Swift_Message::newInstance()
                //     ->setSubject('Hello Email')
                //     ->setFrom('amrihafedh@yahoo.fr')
                //     ->setTo($this->container->getParameter('SuperjobsHomeBundle.Jobs.add'))
                //     ->setBody($this->renderView('SuperjobsHomeBundle:Recruiter:addEmail.txt.twig', 
                //         array('add' => $Jobs)));
                // $this->get('mailer')->send($message);
                // sending email until here ...
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

    function detailsAction($id, Request $request){

        $id = $request->query->get('tag');
        //$em = $this->getDoctrine()->getEntityManager();
        $job = $this->getDoctrine()->getRepository("SuperjobsHomeBundle:Jobs")->findOneBy(array('id'=>$id));
        if (!$job) {
            throw $this->createNotFoundException(
                'Ce job n\'existe plus : '.$id
            );
        }               
        return $this->render('SuperjobsHomeBundle:Recruiter:details.html.twig',
            array('job' => $job));
    }

}
