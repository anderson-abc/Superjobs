<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Superjobs\HomeBundle\Entity\Jobs;
use Superjobs\HomeBundle\Form\JobsType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class RecruiterController extends Controller {
	public function introAction() {
		return $this->render ( 'SuperjobsHomeBundle:Recruiter:intro.html.twig' );
	}
	public function addAction(Request $request) {
		if (false === $this->get ( 'security.authorization_checker' )->isGranted ( 'ROLE_RECRUITER' )) {
			throw new AccessDeniedException ();
		} else {
			$em = $this->getDoctrine ()->getManager ();
			$Jobs = new Jobs ();
			$form = $this->createForm ( new JobsType (), $Jobs );
			
			$request = $this->getRequest ();
			
			if ($request->isMethod ( 'Post' )) {
				$form->bind ( $request );
				if ($form->isValid ()) {
					
					$user = $this->getUser ()->getId ();
					$logo = "NULL";
					if ($file = $form ['logo']->getData ()) {
						// $logo = $file->getClientOriginalName();
						$logo = md5 ( uniqid () ) . '.' . $file->guessExtension ();
						$upload_dir = $this->container->getParameter ( 'kernel.root_dir' ) . '/../web/upload';
						$file->move ( $upload_dir, $logo );
					}
					
					// Getters
					$Jobs = $form->getData ();
					$type = implode ( ",", $request->request->get ( 'type' ) );
					$category = implode ( ",", $request->request->get ( 'category' ) );
					$skills = implode ( ",", $request->request->get ( 'skills' ) );
					$price = $request->request->get ( 'price' );
					// Setters
					$Jobs->setIsCreated ( 'true' );
					$Jobs->setIdUser ( $user );
					$Jobs->setLogo ( $logo );
					$Jobs->setType ( $type );
					$Jobs->setCategories ( $category );
					$Jobs->setSkills ( $skills );
					$Jobs->setPrice ( $price );
					
					// Insert into DB
					$em->persist ( $Jobs );
					$em->flush ();
					
					$this->get ( 'session' )->getFlashBag ()->add ( 'success', 'Votre offre à était créer avec success !' );
					return $this->redirect ( $this->generateUrl ( 'superjobs_home_homepage'));
            }
        }
        return $this->render('SuperjobsHomeBundle:Recruiter:add.html.twig',
            array('form' => $form->createView()));
        }
    }


}
