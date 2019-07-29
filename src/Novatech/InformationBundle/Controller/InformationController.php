<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Novatech\InformationBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Novatech\InformationBundle\Entity\Information;
use Novatech\InformationBundle\Form\InformationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of InformationController
 *
 * @author rmag
 */
class InformationController extends Controller {

//Fonction qui renvoie la liste des information
    public function listeInformationAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $informationListe = $this->getDoctrine()->getManager()->getRepository('InformationBundle:Information')->findAll();
        $result = 0;
        return $this->render('InformationBundle:Information:listeInformation.html.twig', array('result'=>$result,'informationListe' => $informationListe));
    }
//Fonction d'ajout d'un information
    public function addInformationAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        $information = new Information();
        $form = $this->createForm(InformationType::class, $information);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $information->upload();
                           $em->persist($information);
                $em->flush();
                unset($information);
                unset($form);
                $information = new Information();
                $form = $this->createForm(InformationType::class, $information);
                if ($em) {
                    $result = 2;
                } else {
                    $result = 3;
                }
            }
             return $this->render('InformationBundle:Information:ajouterInformation.html.twig', array('result'=>$result, 'form' => $form -> createView()));
    }
//Fonction pour la modification d'un information
    public function editInformationAction(Request $request, Information $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(InformationType::class, $id);
        $informationListe = $this->getDoctrine()->getManager()->getRepository('InformationBundle:Information')->findAll();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $id->upload();
            $em->persist($id);
            $em->flush();
            if ($em) {
                $result = 2;
                unset($information);
                return $this->render('InformationBundle:Information:listeInformation.html.twig', array(
                    'result' => $result,'informationListe' => $informationListe ,'form' =>$form->createView()));
            } else {
                $result = 3;
            }

        }
        return $this->render('InformationBundle:Information:ajouterInformation.html.twig', array(
            'result' => $result,'informationListe' => $informationListe ,'form' =>$form->createView()));
    }

//Fonction pour la suppresion d'un information
    public function deleteInformationAction(Information $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $em-> remove($id);
        $em-> flush();

        if ($em) {
            return $this->redirectToRoute('information_liste');
        }

    }
}
