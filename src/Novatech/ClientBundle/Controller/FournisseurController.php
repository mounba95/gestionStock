<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Novatech\ClientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Novatech\ClientBundle\Entity\Fournisseur;
use Novatech\ClientBundle\Form\FournisseurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Numero of FournisseurController
 *
 * @author rmag
 */
class FournisseurController extends Controller {

//Fonction qui renvoie la liste des fournisseur
    public function listeFournisseurAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $fournisseurListe = $this->getDoctrine()->getManager()->getRepository('ClientBundle:Fournisseur')->getAllFournisseur();
        $result = 0;
        return $this->render('ClientBundle:Fournisseur:listeFournisseur.html.twig', array('result'=>$result,'fournisseurListe' => $fournisseurListe));
    }
//Fonction d'ajout d'un fournisseur
    public function addFournisseurAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        $fournisseur = new Fournisseur();
        $form = $this->createForm(FournisseurType::class, $fournisseur);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            //generation de la reference du produit
            $date       = new \DateTime;
            $debutNum   = $date->format('Ym');
            $lastFournisseurId = $em->getRepository('ClientBundle:Fournisseur')->getLastId();
            if(!$lastFournisseurId){
                $lastFournisseurId = array('0' => array('id' => 0));
            }
            $lastId= $lastFournisseurId[0]['id']+1;
            $referenceFournisseur = 'FSS/'.$debutNum.$lastId;
            $data = $request->request->get($form->getName());
            $numeroFournisseur = $data['numeroFournisseur'];
            if ($em->getRepository('ClientBundle:Fournisseur')->findOneBynumeroFournisseur($numeroFournisseur)) {
                $result = 1;
            }else{
                $fournisseur
                    ->setReferenceFournisseur($referenceFournisseur)
                    ->setNumeroFournisseur($numeroFournisseur)
                    ->setEtatFournisseur(0)
                    ;
                $em->persist($fournisseur);
                $em->flush();
                unset($fournisseur);
                unset($form);
                $fournisseur = new Fournisseur();
                $form = $this->createForm(FournisseurType::class, $fournisseur);
                if ($em) {
                    $result = 2;
                } else {
                    $result = 3;
                }
            }
        } else {
            $result = 4;
        }
        return $this->render('ClientBundle:Fournisseur:ajouterFournisseur.html.twig', array('result'=>$result, 'form' => $form -> createView()));
    }

//Fonction pour la modification d'un fournisseur
    public function editFournisseurAction(Request $request, Fournisseur $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(FournisseurType::class, $id);
        $fournisseurListe = $this->getDoctrine()->getManager()->getRepository('ClientBundle:Fournisseur')->findAll();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();
            if ($em) {
                $result = 2;
                unset($fournisseur);
                return $this->render('ClientBundle:Fournisseur:listeFournisseur.html.twig', array(
                    'result' => $result,'fournisseurListe' => $fournisseurListe ,'form' =>$form->createView()));
            } else {
                $result = 3;
            }

        }
        return $this->render('ClientBundle:Fournisseur:ajouterFournisseur.html.twig', array(
            'result' => $result,'fournisseurListe' => $fournisseurListe ,'form' =>$form->createView()));
    }

//Fonction pour la suppresion d'un fournisseur
    public function deleteFournisseurAction(Fournisseur $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $id->setEtatFournisseur(1);
        $em-> persist($id);
        $em-> flush();

        if ($em) {
            return $this->redirectToRoute('fournisseur_liste');
        }

    }
}
