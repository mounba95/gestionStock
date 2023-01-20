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
     * Creates a new tva entity.
     *
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $tvas = $em->getRepository('StockBundle:Tva')->findAll();
        $tva = new Tva();
        $form = $this->createForm('Novatech\StockBundle\Form\TvaFormType', $tva);
        $form->handleRequest($request);
        $result = 0;

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $request->request->get($form->getName());
            $tvaN = trim($data['tvaFacture']);
            if ($em->getRepository('StockBundle:Tva')->findOneByTvaFacture($tvaN)) {
                $result = 1;
            }else {
                $em->persist($tva);
                $em->flush();
                $result = 2;
                $tva = new Tva();
                $form = $this->createForm('Novatech\StockBundle\Form\TvaFormType', $tva);
                $tvas = $em->getRepository('StockBundle:Tva')->findAll();
                return $this->render('tva/index.html.twig', array(
                    'tvas' => $tvas,
                    'result' => $result,
                    'form' => $form->createView(),
                ));
            }
            $tvas = $em->getRepository('StockBundle:Tva')->findAll();
            return $this->render('tva/index.html.twig', array(
                'tvas' => $tvas,
                'result' => $result,
                'form' => $form->createView(),
            ));
        }

        return $this->render('tva/index.html.twig', array(
            'tvas' => $tvas,
            'result' => $result,
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
        $em = $this->getDoctrine()->getManager();
        $tvas = $em->getRepository('StockBundle:Tva')->findAll();
        $form = $this->createForm('Novatech\StockBundle\Form\TvaFormType', $tva);
        $form->handleRequest($request);
        $result = 0;

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $request->request->get($form->getName());
            $tvaN = trim($data['tvaFacture']);
            $t = $em->getRepository('StockBundle:Tva')->findOneByTvaFacture($tvaN);
            if ($t and $t->getId() != $tva->getId()) {
                $result = 1;
            }else {
                $em->persist($tva);
                $em->flush();
                return $this->redirectToRoute('tva_new');
            }
            $tvas = $em->getRepository('StockBundle:Tva')->findAll();
            return $this->render('tva/index.html.twig', array(
                'tvas' => $tvas,
                'result' => $result,
                'form' => $form->createView(),
            ));
        }

        return $this->render('tva/index.html.twig', array(
            'tvas' => $tvas,
            'result' => $result,
            'form' => $form->createView(),
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
