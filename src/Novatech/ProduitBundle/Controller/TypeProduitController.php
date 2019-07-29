<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Novatech\ProduitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Novatech\ProduitBundle\Entity\TypeProduit;
use Novatech\ProduitBundle\Form\TypeProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of TypeProduitController
 *
 * @author rmag
 */
class TypeProduitController extends Controller {
    
//Fonction qui renvoie la liste des typeProduit      
    public function listeTypeProduitAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $typeProduitListe = $this->getDoctrine()->getManager()->getRepository('ProduitBundle:TypeProduit')->findAll();
           $result = 0;
           return $this->render('ProduitBundle:TypeProduit:listeTypeProduit.html.twig', array('result'=>$result,'typeProduitListe' => $typeProduitListe));
       }
//Fonction d'ajout d'un typeProduit
    public function addTypeProduitAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        $typeProduit = new TypeProduit();     
        $form = $this->createForm(TypeProduitType::class, $typeProduit);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $data = $request->request->get($form->getName());
            $nomType = $data['nomType'];
            $descriptionType = $data['descriptionType'];
            if ($em->getRepository('ProduitBundle:TypeProduit')->findOneBynomType($nomType)) {
                $result = 1;   
            }else{
                $typeProduit
                        ->setDescriptionType($descriptionType)
                        ->setNomType($nomType);
                $em->persist($typeProduit);
                $em->flush();
                unset($typeProduit);
                unset($form);
                $typeProduit = new TypeProduit();
                $form = $this->createForm(TypeProduitType::class, $typeProduit);
                if ($em) {
                    $result = 2;                
                } else {
                    $result = 3;
                }
        }
        } else {
            $result = 4;
        }
        return $this->render('ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig', array('result'=>$result, 'form' => $form -> createView()));
    }

//Fonction pour la modification d'un typeProduit
    public function editTypeProduitAction(Request $request, TypeProduit $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(TypeProduitType::class, $id);
        $typeProduitListe = $this->getDoctrine()->getManager()->getRepository('ProduitBundle:TypeProduit')->findAll();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();
            if ($em) {
                $result = 2; 
                unset($typeProduit);
                return $this->render('ProduitBundle:TypeProduit:listeTypeProduit.html.twig', array(
            'result' => $result,'typeProduitListe' => $typeProduitListe ,'form' =>$form->createView()));                
            } else {
                $result = 3;
            }
 
        }
        return $this->render('ProduitBundle:TypeProduit:ajouterTypeProduit.html.twig', array(
            'result' => $result,'typeProduitListe' => $typeProduitListe ,'form' =>$form->createView()));
    }

//Fonction pour la suppresion d'un typeProduit
    public function deleteTypeProduitAction(TypeProduit $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $em-> remove($id);
        $em-> flush();
        
        if ($em) {
            return $this->redirectToRoute('localite_typeProduit_liste');            
        }
                
    }

    //Detail de type produit
    public function detailTypeProduitAction(TypeProduit $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $idType = $id->getId();
        $nomType = $id->getNomType();
        $result = 0;
        $listeProduit = $em->getRepository('ProduitBundle:TypeProduit')->getAllProduitByTypeProduitId($idType);
        return $this->render('ProduitBundle:TypeProduit:detailTypeProduit.html.twig', array(
            'result' => $result,'typeProduitListe' => $listeProduit, 'nomType'=>$nomType));
    }
}
