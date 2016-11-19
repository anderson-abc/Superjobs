<?php

namespace Superjobs\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Superjobs\HomeBundle\Entity\CVtheque;
use Superjobs\HomeBundle\Form\CVthequeType;

class ApplicantController extends Controller {

    public function introAction() {
        return $this->render('SuperjobsHomeBundle:Applicant:intro.html.twig');
    }

    public function profileAction() {
        return $this->render('SuperjobsHomeBundle:Applicant:Profile.html.twig');
    }

    public function teamAction() {
        return $this->render('SuperjobsHomeBundle:Applicant:Team.html.twig');
    }

    public function submitCVAction($id, Request $request) {
        $job = $this->getDoctrine()->getRepository("SuperjobsHomeBundle:Jobs")->findOneBy(array('id' => $id));
        $setTo = $job->getEmailCV();
        $em = $this->getDoctrine()->getManager();

        $CVtheque = new CVtheque();
        $form = $this->createForm(new CVthequeType(), $CVtheque);

        $request = $this->getRequest();

        if ($request->isMethod('Post')) {
            $form->bind($request);
            if ($form->isValid()) {
                $firstname = $form['firstname']->getData();
                $lastname = $form['lastname']->getData();
                $emailCV = $form['email']->getData();
                $cvFile = "NULL";
                if ($file = $form ['cvFile']->getData()) {
                    
                    $cvFile = $file->getClientOriginalName();
                    $cvExt = $file->guessExtension();
                    $haystack = array('pdf', 'doc', 'docx', 'odt'); 
                    if (in_array($cvExt, $haystack)) {
                        $upload_dir = $this->container->getParameter('kernel.root_dir') . '/../web/upload';
                        $file->move($upload_dir, $cvFile);
                        $attach = $upload_dir . "/" . $cvFile;


                        $CVtheque->setFirstname($firstname);
                        $CVtheque->setLastname($lastname);
                        $CVtheque->setEmail($emailCV);
                        $CVtheque->setCvFile($cvFile);

                        // Insert into DB
                        $em->persist($CVtheque);
                        $em->flush();

                        // send email to recruiter
                        $this->sendMailer($setTo, $attach);
                    }
                }
            }
        }

        return $this->render('SuperjobsHomeBundle:Applicant:similarjobs.html.twig', array(
                    'job' => $job
        ));
    }

    public function sendMailer($setTo, $attach) {
        $message = \Swift_Message::newInstance()
                ->setSubject('Superjobs candidatures')
                ->setFrom('contact@superjobs.com')
                ->setTo($setTo)
                // Optionally add any attachments
                ->attach(\Swift_Attachment::fromPath($attach))
                ->setBody('Bonjour,<br/>\n'
                . 'Vous avez reçu une candidature a l\'offre d\'emploi sur notre site web<br/>\n'
                . 'Bonne journée<br/>\n'
                . 'L\'équipe Superjobs');


        $mailer = $this->get('mailer');

        $mailer->send($message);

        $spool = $mailer->getTransport()->getSpool();
        $transport = $this->get('swiftmailer.transport.real');

        $spool->flushQueue($transport);

        return TRUE;
    }

}
