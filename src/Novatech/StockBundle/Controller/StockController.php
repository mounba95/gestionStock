<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Novatech\StockBundle\Controller;

use Novatech\StockBundle\Entity\StockFournisseur;
use Novatech\StockBundle\Form\StockFournisseurType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse ;
use Novatech\StockBundle\Entity\Stock;
use Novatech\StockBundle\Entity\Approvisioner;
use Novatech\StockBundle\Form\StockType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Description of StockController
 *
 * @author rmag
 */
class StockController extends Controller {
    
//Fonction qui renvoie la liste des stock      
    public function listeStockAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $stockListe = $this->getDoctrine()->getManager()->getRepository('StockBundle:Stock')->findAll();
           $result = 0;
           return $this->render('StockBundle:Stock:listeStock.html.twig', array('result'=>$result,'stockListe' => $stockListe));
       }
//Fonction d'ajout d'un stock
    public function addStockAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        $stock = new Stock();
        $stockFournisseur = new StockFournisseur();
        if($user = $this->getUser()){
            $user = $user = $this->getUser();
        }else{
            $result = 1;
        }

        $form = $this->createForm(StockFournisseurType::class, $stockFournisseur);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $date= new \DateTime();
            $data = $request->request->get($form->getName());
            $quantiteProduitFournisseur = $data['quantiteProduitFournisseur'];
            $idFournisseur = $data['fournisseur'];
            $fournisseur = $em->getRepository('ClientBundle:Fournisseur')->findOneById($idFournisseur);
            if (!$fournisseur){
                $result = 5;
            }
            $idProduit = $data['stock']['produit'];
            $produit = $em->getRepository('ProduitBundle:Produit')->findOneById($idProduit);
            if (!$produit){
                $result = 6;
            }
            $idP= $produit->getId();
            $stockk = $em->getRepository('StockBundle:Stock')->getStockByProduitId($idP);
            if ($stockk) {
                $idSt = $stockk[0]->getId();
                $stock = $em->getRepository('StockBundle:Stock')->findOneById($idSt);
                $quantite = $stock->getQuantiteProduit();
                               
                $quantiteStockFinale = $quantite + $quantiteProduitFournisseur;
                $stock
                    ->setQuantiteProduit($quantiteStockFinale)
                    ->setLimiteProduit($data['stock']['limiteProduit'])
                    ->setPrixProduit($data['stock']['prixProduit'])
                    ->setDateOperation($date)
                    ->setUser($user)
                ;
                $em->persist($stock);
                if ($em) {
                    $dateAp= new \DateTime();
                    $stockFournisseur
                        ->setQuantiteProduitFournisseur($quantiteProduitFournisseur)
                        ->setDateApprovisioner($dateAp)
                        ->setStock($stock)
                        ->setFournisseur($fournisseur)
                    ;
                        //return new JsonResponse($approvisioner);
                        $em->persist($stockFournisseur);
                        $em->flush();
                        if ($em) {
                            $result = 2;
                            unset($stockFournisseur);
                            unset($form);
                            $stockFournisseur = new StockFournisseur();
                            $form = $this->createForm(StockFournisseurType::class, $stockFournisseur);
                        }
                }
            }else{
                $stock
                        ->setQuantiteProduit($quantiteProduitFournisseur)
                        ->setLimiteProduit($data['stock']['limiteProduit'])
                        ->setPrixProduit($data['stock']['prixProduit'])
                        ->setDateOperation($date)
                        ->setProduit($produit)
                        ->setUser($user)
                ;
                $em->persist($stock);
                if($em){
                    $dateAp= new \DateTime();
                    $stockFournisseur
                        ->setQuantiteProduitFournisseur($quantiteProduitFournisseur)
                        ->setDateApprovisioner($dateAp)
                        ->setStock($stock)
                        ->setFournisseur($fournisseur)
                    ;
                    //return new JsonResponse($approvisioner);
                    $em->persist($stockFournisseur);
                    $em->flush();
                }
                $em->flush();
                unset($stockFournisseur);
                unset($form);
                $stockFournisseur = new StockFournisseur();
                $form = $this->createForm(StockFournisseurType::class, $stockFournisseur);
                if ($em) {
                    $result = 2;                
                } else {
                    $result = 3;
                }
        }
        } else {
            $result = 4;
        }
        return $this->render('StockBundle:Stock:ajouterStock.html.twig', array('result'=>$result, 'form' => $form -> createView()));
    }

//Fonction pour la modification d'un stock
    public function editStockAction(Request $request, Stock $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(StockType::class, $id);
        $stockListe = $this->getDoctrine()->getManager()->getRepository('StockBundle:Stock')->findAll();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();
            if ($em) {
                $result = 2; 
                unset($stock);
                return $this->render('StockBundle:Stock:listeStock.html.twig', array(
            'result' => $result,'stockListe' => $stockListe ,'form' =>$form->createView()));                
            } else {
                $result = 3;
            }
 
        }
        return $this->render('StockBundle:Stock:modifierStock.html.twig', array(
            'result' => $result,'stockListe' => $stockListe ,'form' =>$form->createView()));
    }

//Fonction pour la suppresion d'un stock
    public function deleteStockAction(Stock $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $em-> remove($id);
        $em-> flush();
        
        if ($em) {
            return $this->redirectToRoute('stock_liste');            
        }
                
    }

    //detail
    public function deltailStockAction($id){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $stock= $em->getRepository('StockBundle:Stock')->findOneById($id);
        $idProduit = $stock->getProduit();
        $produit= $em->getRepository('StockBundle:Stock')->getHistoriqueByStockId($idProduit);
        $result = 0;
        return $this->render('StockBundle:Stock:detailStock.html.twig', array('result'=>$result,'detailStock' => $produit));
    }

    //dashboard stock
    public function getNombreStockAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
            $stock  = $em->getRepository('StockBundle:Stock')->getNombreProduitStock();
//return new Response($result);
        if ($stock) {
            $response = new Response($stock[0]['nombre']);
            return $response;
        }else{
            return new Response(0);
        }
    }
/*
    public function getNombreFacturection() {

        $em = $this->getDoctrine()->getManager();
        $dateServer=date('d/m/Y H:i:s');
        $date = \  DateTime::createFromFormat('d/m/Y', trim($dateServer));
            $stock  = $em->getRepository('StockBundle:Stock')->getNombreProduitStock();
//return new Response($result);
        if ($stock) {
            $response = new Response($stock[0]['nombre']);
            return $response;
        }else{
            return new Response(0);
        }
    }*/
}
