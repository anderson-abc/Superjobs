<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Superjobs\HomeBundle\Entity\Jobs;
use Superjobs\HomeBundle\Form\JobsType;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class RecruiterController extends Controller
{
    public function introAction()
    {
        return $this->render('SuperjobsHomeBundle:Recruiter:intro.html.twig');
    }

    public function addAction(Request $request)
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

                $file = $form['logo']->getData();
                $logo = $file->getClientOriginalName();
                $dir = '/var/www/html/Superjobs/web/upload';
                $file->move($dir, $logo);

                $Jobs = $form->getData();
                $Jobs->setIsCreated('true');
                // add some staff
                $type = $request->request->get('type');
                $category = $request->request->get('category');
                $skills = $request->request->get('skills');
                
                $Jobs->setLogo($logo);
                $Jobs->setType($type);
                $Jobs->setCategories($category);
                $Jobs->setSkills($skills);
                
                $user = $this->getUser()->getId();
                $Jobs->setIdUser($user);
                
                $em->persist($Jobs);
                $em->flush();

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'Votre offre à était créer avec success !'
                );
                return $this->redirect($this->generateUrl('superjobs_home_homepage'));
            }
        }
        return $this->render('SuperjobsHomeBundle:Recruiter:add.html.twig',
            array('form' => $form->createView()));
        }
    }


}
