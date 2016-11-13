<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Superjobs\HomeBundle\Entity\Jobs;
use Superjobs\HomeBundle\Form\JobsType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class RecruiterController extends Controller {

    public function introAction() {
        return $this->render('SuperjobsHomeBundle:Recruiter:intro.html.twig');
    }

    public function addAction(Request $request) {
        $securityContext = $this->container->get('security.authorization_checker');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            // redirect register with role recruiter 
            return $this->redirect($this->generateUrl('fos_user_security_login', 
                    array('roleHierarchy' => 'ROLE_RECRUITER')));
        }
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_RECRUITER')) {
            $this->get('session')->getFlashBag()->add('Access denied', "Vous n\'avez pas le droit recruteur.");
//            throw new AccessDeniedException ();
            throw $this->createAccessDeniedException('Vous n\'avez pas le droit recruteur ');
        } else {
            $em = $this->getDoctrine()->getManager();
            $Jobs = new Jobs ();
            $form = $this->createForm(new JobsType(), $Jobs);

            $request = $this->getRequest();

            if ($request->isMethod('Post')) {
                $form->bind($request);
                if ($form->isValid()) {

                    $user = $this->getUser()->getId();
                    $logo = "NULL";
                    if ($file = $form ['logo']->getData()) {
                        // $logo = $file->getClientOriginalName();
                        $logo = md5(uniqid()) . '.' . $file->guessExtension();
                        $upload_dir = $this->container->getParameter('kernel.root_dir') . '/../web/upload';
                        $file->move($upload_dir, $logo);
                    }

                    // Getters
                    $Jobs = $form->getData();
                    $type = implode(",", $request->request->get('type'));
                    $category = implode(",", $request->request->get('category'));
                    $skills = implode(",", $request->request->get('skills'));
                    $price = $request->request->get('price');
                    $emailCV = $form['emailCV']->getData();
                    // Setters
                    $Jobs->setIsCreated('true');
                    $Jobs->setIdUser($user);
                    $Jobs->setLogo($logo);
                    $Jobs->setType($type);
                    $Jobs->setCategories($category);
                    $Jobs->setSkills($skills);
                    $Jobs->setPrice($price);
                    $Jobs->setEmailCV($emailCV);

                    // Insert into DB
                    $em->persist($Jobs);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add('success', 'Votre offre à était créer avec success !');



                    return $this->redirect($this->generateUrl('superjobs_home_homepage'));
                }
            }
            return $this->render('SuperjobsHomeBundle:Recruiter:add.html.twig', array('form' => $form->createView()));
        }
    }

}
