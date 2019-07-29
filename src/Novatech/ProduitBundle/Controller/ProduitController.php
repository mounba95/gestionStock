<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Novatech\ProduitBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Novatech\ProduitBundle\Entity\Produit;
use Novatech\ProduitBundle\Form\ProduitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of ProduitController
 *
 * @author rmag
 */
class ProduitController extends Controller {
    
//Fonction qui renvoie la liste des produit      
    public function listeProduitAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $produitListe = $this->getDoctrine()->getManager()->getRepository('ProduitBundle:Produit')->findAll();
           $result = 0;
           return $this->render('ProduitBundle:Produit:listeProduit.html.twig', array('result'=>$result,'produitListe' => $produitListe));
       }
//Fonction d'ajout d'un produit
    public function addProduitAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        $produit = new Produit();     
        $form = $this->createForm(ProduitType::class, $produit);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $data = $request->request->get($form->getName());
            //generation de la reference du produit
            $date       = new \DateTime;
            $debutNum   = $date->format('Ym');
            $lastProduitId = $em->getRepository('ProduitBundle:Produit')->getLastId();
            if(!$lastProduitId){
                $lastProduitId = array('0' => array('id' => 0));
            }
            $lastId= $lastProduitId[0]['id']+1;
            $referenceProduit = 'PRODUIT'.$debutNum.$lastId;

            $nomProduit = $data['nomProduit'];
            $descriptionProduit = $data['descriptionProduit'];
            if ($em->getRepository('ProduitBundle:Produit')->findOneBynomProduit($nomProduit)) {
                $result = 1;   
            }else{
                $produit
                        ->setDescriptionProduit($descriptionProduit)
                        ->setReferenceProduit($referenceProduit)
                        ->setNomProduit($nomProduit);
                $em->persist($produit);
                $em->flush();
                unset($produit);
                unset($form);
                $produit = new Produit();
                $form = $this->createForm(ProduitType::class, $produit);
                if ($em) {
                    $result = 2;                
                } else {
                    $result = 3;
                }
        }
        } else {
            $result = 4;
        }
        return $this->render('ProduitBundle:Produit:ajouterProduit.html.twig', array('result'=>$result, 'form' => $form -> createView()));
    }

//Fonction pour la modification d'un produit
    public function editProduitAction(Request $request, Produit $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(ProduitType::class, $id);
        $produitListe = $this->getDoctrine()->getManager()->getRepository('ProduitBundle:Produit')->findAll();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();
            if ($em) {
                $result = 2; 
                unset($produit);
                return $this->render('ProduitBundle:Produit:listeProduit.html.twig', array(
            'result' => $result,'produitListe' => $produitListe ,'form' =>$form->createView()));                
            } else {
                $result = 3;
            }
 
        }
        return $this->render('ProduitBundle:Produit:ajouterProduit.html.twig', array(
            'result' => $result,'produitListe' => $produitListe ,'form' =>$form->createView()));
    }

//Fonction pour la suppresion d'un produit
    public function deleteProduitAction(Produit $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $em-> remove($id);
        $em-> flush();
        
        if ($em) {
            return $this->redirectToRoute('produit_liste');            
        }
                
    }       
}
