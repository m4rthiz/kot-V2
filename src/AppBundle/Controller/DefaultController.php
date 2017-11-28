<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction()
    {
        return $this->render(':default/pages:contact.html.twig');
    }

    /**
     * @Route("/action", name="action")
     */
    public function actionAction()
    {
        return $this->render(':default/pages:action.html.twig');
    }

    /**
     * @Route("/agenda", name="agenda")
     */
    public function agendaAction()
    {
        return $this->render(':default/pages:agenda.html.twig');
    }


    /**
     * @Route("/credits", name="credits")
     */
    public function creditsAction()
    {
        return $this->render(':default/pages:credits.html.twig');
    }


    /**
     * @Route("/equipe", name="equipe")
     */
    public function equipeAction()
    {
        return $this->render(':default/pages:equipe.html.twig');
    }

    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentionsAction()
    {
        return $this->render(':default/pages:mentions.html.twig');
    }

    /**
     * @Route("/partenaires", name="partenaires")
     */
    public function partenairesAction()
    {
        return $this->render(':default/pages:partenaires.html.twig');
    }

    /**
     * @Route("/photos", name="photos")
     */
    public function photosAction()
    {
        return $this->render(':default/pages:photos.html.twig');
    }

    /**
     * @Route("/spectacles", name="spectacles")
     */
    public function spectaclesAction()
    {
        return $this->render(':default/pages:spectacles.html.twig');
    }

    /**
     * @Route("/video", name="video")
     */
    public function videoAction()
    {
        return $this->render(':default/pages:video.html.twig');
    }


    /**
     * @Route("/ecoutes", name="ecoutes")
     */
    public function ecoutesAction()
    {
        return $this->render(':default/pages:ecoutes.html.twig');
    }
}
