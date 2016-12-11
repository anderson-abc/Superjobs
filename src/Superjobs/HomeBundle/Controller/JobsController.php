<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Superjobs\HomeBundle\Entity\Jobs;
use Superjobs\HomeBundle\Form\JobsType;
use Superjobs\HomeBundle\Entity\Cvtheque;
use Superjobs\HomeBundle\Form\CVthequeType;

/**
 * Jobs controller.
 *
 */
class JobsController extends Controller {

    /**
     * Lists all Jobs entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SuperjobsHomeBundle:Jobs')->findAll();

        return $this->render('SuperjobsHomeBundle:Jobs:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Jobs entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Jobs();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);


        if ($form->isValid()) {
            $user = $this->getUser()->getId();
            $file = $entity->getLogo();
            $fileName = $user . '-' . time() . '.' . $file->guessExtension();
            $file->move(
                    $this->getParameter('logo_directory') . '/' . $user . '/', $fileName
            );

            $entity->setLogo($fileName);
            $entity->setIdUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('jobs_show', array('id' => $entity->getId())));
        }

        return $this->render('SuperjobsHomeBundle:Jobs:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Jobs entity.
     *
     * @param Jobs $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Jobs $entity) {
        $form = $this->createForm(new JobsType(), $entity, array(
            'action' => $this->generateUrl('jobs_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Jobs entity.
     *
     */
    public function newAction() {

        $entity = new Jobs();
        $form = $this->createCreateForm($entity);

        return $this->render('SuperjobsHomeBundle:Jobs:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Jobs entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperjobsHomeBundle:Jobs')->find($id);

        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        if ($user != 'anon.'){
            $userid = $user->getId();
        } else {
            $userid = 'anon.';
        }

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jobs entity.');
        }

        $CVtheque = new CVtheque();
        $form = $this->createForm(new CVthequeType(), $CVtheque);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SuperjobsHomeBundle:Jobs:show.html.twig', array(
                    'currentUser' => $userid,
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Jobs entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperjobsHomeBundle:Jobs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jobs entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SuperjobsHomeBundle:Jobs:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Jobs entity.
     *
     * @param Jobs $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Jobs $entity) {

        $form = $this->createForm(new JobsType(), $entity, array(
            'action' => $this->generateUrl('jobs_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Jobs entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SuperjobsHomeBundle:Jobs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Jobs entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {

            $user = $this->getUser()->getId() ? $this->getUser()->getId() : '0';
            if ($file = $entity->getLogo()) {
                $fileName = $user . '-' . time() . '.' . $file->guessExtension();
                $file->move(
                        $this->getParameter('logo_directory') . '/' . $user . '/', $fileName
                );
                $entity->setLogo($fileName);
            }
            $updatedAt = new \DateTime();
            $entity->setUpdatedAt($updatedAt);

            $em->flush();

            return $this->redirect($this->generateUrl('jobs_show', array('id' => $id)));
        }

        return $this->render('SuperjobsHomeBundle:Jobs:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Jobs entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SuperjobsHomeBundle:Jobs')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Jobs entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('jobs'));
    }

    /**
     * Creates a form to delete a Jobs entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('jobs_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
