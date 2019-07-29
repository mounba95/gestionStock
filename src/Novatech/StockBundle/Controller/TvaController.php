<?php

namespace Novatech\StockBundle\Controller;

use Novatech\StockBundle\Entity\Tva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tva controller.
 *
 */
class TvaController extends Controller
{
    /**
     * Lists all tva entities.
     *
     */
    public function indexAction()
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();

        $tvas = $em->getRepository('StockBundle:Tva')->findAll();

        return $this->render('tva/index.html.twig', array(
            'tvas' => $tvas,
        ));
    }

    /**
     * Creates a new tva entity.
     *
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $tva = new Tva();
        $form = $this->createForm('Novatech\StockBundle\Form\TvaFormType', $tva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tva);
            $em->flush();

            return $this->redirectToRoute('tva_show', array('id' => $tva->getId()));
        }

        return $this->render('tva/new.html.twig', array(
            'tva' => $tva,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tva entity.
     *
     */
    public function showAction(Tva $tva)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $deleteForm = $this->createDeleteForm($tva);

        return $this->render('tva/show.html.twig', array(
            'tva' => $tva,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tva entity.
     *
     */
    public function editAction(Request $request, Tva $tva)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $deleteForm = $this->createDeleteForm($tva);
        $editForm = $this->createForm('Novatech\StockBundle\Form\TvaFormType', $tva);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tva_edit', array('id' => $tva->getId()));
        }

        return $this->render('tva/edit.html.twig', array(
            'tva' => $tva,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tva entity.
     *
     */
    public function deleteAction(Request $request, Tva $tva)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createDeleteForm($tva);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tva);
            $em->flush();
        }

        return $this->redirectToRoute('tva_index');
    }

    /**
     * Creates a form to delete a tva entity.
     *
     * @param Tva $tva The tva entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tva $tva)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tva_delete', array('id' => $tva->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
