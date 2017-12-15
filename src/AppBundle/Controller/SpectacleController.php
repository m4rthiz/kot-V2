<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Spectacle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Spectacle controller.
 *
 * @Route("admin/spectacle")
 */
class SpectacleController extends Controller
{
    /**
     * Lists all spectacle entities.
     *
     * @Route("/", name="admin_spectacle_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $spectacles = $em->getRepository('AppBundle:Spectacle')->findAll();

        return $this->render('spectacle/index.html.twig', array(
            'spectacles' => $spectacles,
        ));
    }

    /**
     * Creates a new spectacle entity.
     *
     * @Route("/new", name="admin_spectacle_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $spectacle = new Spectacle();
        $form = $this->createForm('AppBundle\Form\SpectacleType', $spectacle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($spectacle);
            $em->flush();

            return $this->redirectToRoute('admin_spectacle_show', array('id' => $spectacle->getId()));
        }

        return $this->render('spectacle/new.html.twig', array(
            'spectacle' => $spectacle,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a spectacle entity.
     *
     * @Route("/{id}", name="admin_spectacle_show")
     * @Method("GET")
     */
    public function showAction(Spectacle $spectacle)
    {
        $deleteForm = $this->createDeleteForm($spectacle);

        return $this->render('spectacle/show.html.twig', array(
            'spectacle' => $spectacle,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing spectacle entity.
     *
     * @Route("/{id}/edit", name="admin_spectacle_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Spectacle $spectacle)
    {
        $deleteForm = $this->createDeleteForm($spectacle);
        $editForm = $this->createForm('AppBundle\Form\SpectacleType', $spectacle);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_spectacle_edit', array('id' => $spectacle->getId()));
        }

        return $this->render('spectacle/edit.html.twig', array(
            'spectacle' => $spectacle,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a spectacle entity.
     *
     * @Route("/{id}", name="admin_spectacle_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Spectacle $spectacle)
    {
        $form = $this->createDeleteForm($spectacle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($spectacle);
            $em->flush();
        }

        return $this->redirectToRoute('admin_spectacle_index');
    }

    /**
     * Creates a form to delete a spectacle entity.
     *
     * @param Spectacle $spectacle The spectacle entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Spectacle $spectacle)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_spectacle_delete', array('id' => $spectacle->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
