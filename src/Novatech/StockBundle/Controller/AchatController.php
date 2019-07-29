<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Novatech\StockBundle\Controller;

use Novatech\StockBundle\Form\FactureEditType;
use Novatech\StockBundle\Form\RemiseType;
use Novatech\StockBundle\Form\TvaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse ;
use Novatech\StockBundle\Entity\Stock;
use Novatech\StockBundle\Entity\Achat;
use Novatech\StockBundle\Entity\Facture;
use Novatech\InformationBundle\Entity\Information;
use Novatech\ClientBundle\Entity\Client;
use Novatech\StockBundle\Form\AchatType;
use Novatech\StockBundle\Form\AddAchatType;
use Novatech\StockBundle\Form\FactureType;
use Novatech\StockBundle\Form\FactureTvaType;
use Novatech\StockBundle\Form\RapportAllVenteType;
use Novatech\StockBundle\Form\RapportVenteByUserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateInterval;
use DateTime;
/**
 * Description of AchatController
 *
 * @author rmag
 */
class AchatController extends Controller {
    
//Fonction qui renvoie la liste des devis      
    public function listeAchatAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $devisListe = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->getAllDevis();
           $result = 0;
           return $this->render('StockBundle:Achat:listeAchat.html.twig', array('result'=>$result,'devisListe' => $devisListe));
       }

//Fonction d'ajout d'un devis
    public function addAchatAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        $achat = new Achat(); 
        $facture = new Facture(); 
        $form = $this->createForm(AddAchatType::class, $achat);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $dataAchat = $request->request->get($form->getName());


           // $dataFacture = $request->request->get($formFacture->getName());
            //return new JsonResponse($dataFacture['tva']);

            $date       = new \DateTime;
            $debutNum   = $date->format('Ym');
            $lastIdFacture = $em->getRepository('StockBundle:Facture')->getLastId();
            if(!$lastIdFacture){
                $lastIdFacture = array('0' => array('id' => 0));
            }
            $lastId= $lastIdFacture[0]['id']+1;
            $referenceFacture = $debutNum.$lastId;
            $idTva = $dataAchat['facture']['tva'];
            $tva = $em->getRepository('StockBundle:Tva')->findOneById($idTva);
            $facture
                ->setStatut(3)
                ->setReferenceFacture($referenceFacture)
                ->setOffre($dataAchat['facture']['offre'])
                ->setTva($tva)
                ->setDateFacture($date)
                ->setDateOperationFacture(new \Datetime(date('d-m-Y')))
            ;
            $em->persist($facture);
            if ($em) {
                $quantiteAchat = $dataAchat['quantiteAchat'];
                $stock = $dataAchat['stock'];
                $stockProduit = $em->getRepository('StockBundle:Stock')->findOneById($stock);
                $achat
                ->setQuantiteAchat($quantiteAchat)
                ->setFacture($facture)
                ->setPrixAchat($stockProduit->getPrixProduit());
                $em->persist($achat);
                $em->flush();
                if ($em) {
                    $idFacture = $facture->getId();
                    $url = $this->generateUrl('produitachat_ajouter', array('idFacture' => $idFacture));
                    return $this->redirect($url);
                }
            }
        }
        else {
            $result = 3;
        }
        return $this->render('StockBundle:Achat:ajouterAchat.html.twig', array('result'=>$result, 'form' => $form -> createView()));
    }

//Ajouter produit du stock à un devis
    //Fonction d'ajout d'un devis
    public function addProduitAchatAction(Request $request, Facture $idFacture) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $achat = new Achat(); 
        $facture = $em->getRepository('StockBundle:Facture')->findOneById($idFacture);
    
        if (is_null($idFacture->getClient())) {
        $nomClient = "null"; 
        }else{
        $nomClient = $idFacture->getClient()->getNomClient();
        }
        $referenceFacture = $facture->getReferenceFacture();
        $form = $this->createForm(AchatType::class, $achat);
        $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idFacture);
        $montant = 0;
        $montantTTC = 0;
        $montantTva = 0;
        $montantRemise = 0;
        $nouveauMontantTotal = 0;
        $montantTotal = 0;
        $remise = $facture->getRemise();
        $tva = $facture->getTva()->getTvaFacture();

            foreach ($produitAchatListe as $value) {
                $montant = $value['prixProduit'] * $value['quantiteAchat'];
                $montantTotal += $montant;

            //return new JsonResponse($montantTotal);
                }
                if ($remise){
                    $montantRemise = ($montantTotal * $remise)/100;
                    $nouveauMontantTotal = $montantTotal - $montantRemise;
                    if ($tva ==100){
                        $montantTTC = $nouveauMontantTotal + $montantTva;
                    }else{
                        $montantTva = ($nouveauMontantTotal*$tva)/100;
                        $montantTTC = $nouveauMontantTotal + $montantTva;
                    }
                }else{
                    if ($tva == 100){
                        $montantTTC = $montantTotal + $montantTva;
                    }else{
                        $montantTva = ($montantTotal*$tva)/100;
                        $montantTTC = $montantTotal + $montantTva;
                    }
                }

        //$produitAchatListe = $em->getRepository('StockBundle:Achat')->findAll();
       //return new Response($montantTva);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $dataAchat = $request->request->get($form->getName());
            //return new Response($referenceFacture);

                $quantiteAchat = $dataAchat['quantiteAchat'];
                $idStock = $dataAchat['stock'];
                //return new JsonResponse($stock);
                //$idStock = $stock->getId();
                $stockExistant = $em->getRepository('StockBundle:Stock')->findOneById($idStock);
               
                if ($em->getRepository('StockBundle:Achat')->existAchat($idFacture, $idStock)) {
                    $idAchat = $em->getRepository('StockBundle:Achat')->getAchatByIdStockAndIdFacture($idFacture, $idStock);
                    
                    $achat = $em->getRepository('StockBundle:Achat')->findOneById($idAchat[0]);
                    $ancienQuantiteAchat = $achat->getQuantiteAchat();
                    $nouvelleQuantiteAchat = $quantiteAchat + $ancienQuantiteAchat ;
                    $achat->setQuantiteAchat($nouvelleQuantiteAchat)
                    ->setPrixAchat($stockExistant->getPrixProduit());
                    //return new JsonResponse($quantiteAchat);
                    $em->persist($achat);
                    $em->flush();
                    $achat = new Achat();

                   //return new JsonResponse($montantTva);

                    $form = $this->createForm(AchatType::class, $achat);
                    $produitAchat = $em->getRepository('StockBundle:Achat')->getProduitAchat($idFacture);
                    //recharge des données et nouveau calcul
                    $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idFacture);
                    $montant = 0;
                    $montantTTC = 0;
                    $montantTva = 0;
                    $montantRemise = 0;
                    $nouveauMontantTotal = 0;
                    $montantTotal = 0;
                    $remise = $facture->getRemise();
                    $tva = $facture->getTva()->getTvaFacture();
                    foreach ($produitAchatListe as $value) {
                        $montant = $value['prixProduit'] * $value['quantiteAchat'];
                        $montantTotal += $montant;

                        //return new JsonResponse($montantTotal);
                    }
                    if ($remise){
                        $montantRemise = ($montantTotal * $remise)/100;
                        $nouveauMontantTotal = $montantTotal - $montantRemise;
                        if ($tva ==100){
                            $montantTTC = $nouveauMontantTotal + $montantTva;
                        }else{
                            $montantTva = ($nouveauMontantTotal*$tva)/100;
                            $montantTTC = $nouveauMontantTotal + $montantTva;
                        }
                    }else{
                        if ($tva == 100){
                            $montantTTC = $montantTotal + $montantTva;
                        }else{
                            $montantTva = ($montantTotal*$tva)/100;
                            $montantTTC = $montantTotal + $montantTva;
                        }
                    }

                    return $this->render('StockBundle:Achat:ajouterProduitAchat.html.twig', array('produitAchatListe'=>$produitAchat,'referenceFacture'=>$referenceFacture, 'idFacture'=>$idFacture->getId(),'nomClient'=>$nomClient,'montantTotal'=>$montantTotal,'montantTva'=>$montantTva,'montantTTC'=>$montantTTC,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise,'tva'=>$tva,'form' => $form -> createView()));
                }
                $stockProduit = $em->getRepository('StockBundle:Stock')->findOneById($idStock);
                $achat
                ->setQuantiteAchat($quantiteAchat)
                ->setFacture($facture)
                ->setPrixAchat($stockProduit->getPrixProduit());
                $em->persist($achat);
                $em->flush();
                $achat = new Achat();
                $form = $this->createForm(AchatType::class, $achat);
            $produitAchat = $em->getRepository('StockBundle:Achat')->getProduitAchat($idFacture);

            $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idFacture);
            $montant = 0;
            $montantTTC = 0;
            $montantTva = 0;
            $montantRemise = 0;
            $nouveauMontantTotal = 0;
            $montantTotal = 0;
            $remise = $facture->getRemise();
            $tva = $facture->getTva()->getTvaFacture();
            foreach ($produitAchatListe as $value) {
                $montant = $value['prixProduit'] * $value['quantiteAchat'];
                $montantTotal += $montant;

                //return new JsonResponse($montantTotal);
            }
            if ($remise){
                $montantRemise = ($montantTotal * $remise)/100;
                $nouveauMontantTotal = $montantTotal - $montantRemise;
                if ($tva ==100){
                    $montantTTC = $nouveauMontantTotal + $montantTva;
                }else{
                    $montantTva = ($nouveauMontantTotal*$tva)/100;
                    $montantTTC = $nouveauMontantTotal + $montantTva;
                }
            }else{
                if ($tva == 100){
                    $montantTTC = $montantTotal + $montantTva;
                }else{
                    $montantTva = ($montantTotal*$tva)/100;
                    $montantTTC = $montantTotal + $montantTva;
                }
            }
            return $this->render('StockBundle:Achat:ajouterProduitAchat.html.twig', array('produitAchatListe'=>$produitAchat,'referenceFacture'=>$referenceFacture, 'idFacture'=>$idFacture->getId(),'nomClient'=>$nomClient,'montantTotal'=>$montantTotal,'montantTva'=>$montantTva,'montantTTC'=>$montantTTC,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise, 'tva'=>$tva,'form' => $form -> createView()));
            }
        else {
            $result = 3;
        }
       // return new JsonResponse($montantTva);
        return $this->render('StockBundle:Achat:ajouterProduitAchat.html.twig', array('produitAchatListe'=>$produitAchatListe,'referenceFacture'=>$referenceFacture, 'idFacture'=>$idFacture->getId(),'nomClient'=>$nomClient,'montantTotal'=>$montantTotal,'montantTva'=>$montantTva ,'montantTTC'=>$montantTTC,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise, 'tva'=>$tva, 'form' => $form -> createView()));
    }


//Fonction pour la modification d'un devis
    public function editAchatAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        //return new JsonResponse($request->get('id'));
        $facture = $em->getRepository('StockBundle:Facture')->findOneById($request->get('id'));
        $form = $this->createForm(FactureEditType::class, $facture);
        $devisListe = $em->getRepository('StockBundle:Achat')->findAll();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($facture);
            $em->flush();
            if ($em) {

                return $this->redirectToRoute('achat_liste', array('result' => $result));

            } else {
                $result = 3;
            }
 
        }
        return $this->render('StockBundle:Facture:modifierAchat.html.twig', array(
            'result' => $result,'devisListe' => $devisListe ,'form' =>$form->createView()));
    }


//Add client to facture
    public function ajoutClientFactureAction(Request $request, Facture $idFacture)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('StockBundle:Facture')->findOneById($idFacture);
        if (!$facture) {
            
        }
       // return new JsonResponse($facture->getId());
        $referenceFacture = $facture->getReferenceFacture();
        //$client = $facture->getClient();
        $form = $this->createForm(FactureType::class, $facture);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->persist($facture);
            $em->flush($facture);
            if ($em) {
                   return $this->redirectToRoute('produitachat_ajouter', array('idFacture' => $facture->getId()));
               }   
        }
         return $this->render('StockBundle:Achat:ajouterClientFacture.html.twig', array('form' =>$form->createView()));

    }

    //Ajout d'une remise
    public function ajoutremiseFactureAction(Request $request, Facture $idFacture){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('StockBundle:Facture')->findOneById($idFacture);
        if (!$facture) {

        }
        // return new JsonResponse($facture->getId());
        $referenceFacture = $facture->getReferenceFacture();
        //$client = $facture->getClient();
        $form = $this->createForm(RemiseType::class, null);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $data = $request->request->get($form->getName());
            $remise = $data['remise'];
            $facture->setRemise($remise);
            $em->persist($facture);
            $em->flush($facture);
            if ($em) {
                return $this->redirectToRoute('produitachat_ajouter', array('idFacture' => $facture->getId()));
            }
        }
        return $this->render('StockBundle:Achat:ajouterRemiseFacture.html.twig', array('form' =>$form->createView()));

    }


    //Modifier d'une remise
    public function ajouttvaFactureAction(Request $request, Facture $idFacture){
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('StockBundle:Facture')->findOneById($idFacture);
        if (!$facture) {

        }
        // return new JsonResponse($facture->getId());
        $referenceFacture = $facture->getReferenceFacture();
        //$client = $facture->getClient();
        $form = $this->createForm(TvaType::class, null);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $data = $request->request->get($form->getName());
            $tvaId = $data['tva'];
            $tva = $em->getRepository('StockBundle:Tva')->findOneById($tvaId);
            $facture->setTva($tva);
            $em->persist($facture);
            $em->flush($facture);
            if ($em) {
                return $this->redirectToRoute('produitachat_ajouter', array('idFacture' => $facture->getId()));
            }
        }
        return $this->render('StockBundle:Achat:ajouterTvaFacture.html.twig', array('form' =>$form->createView()));

    }

//Fonction pour la suppresion d'un devis
    public function removeProduitAchatAction($idAchat) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $achat = $this->getDoctrine()->getManager()->getRepository('StockBundle:Achat')->findOneById($idAchat);
        $idFacture = $achat->getFacture()->getId();
        //return new JsonResponse($idFacture);
        $em = $this->getDoctrine()->getManager();
        $em-> remove($achat);
        $em-> flush();
        
        if ($em) {
            return $this->redirectToRoute('produitachat_ajouter', array('idFacture' => $idFacture ));
        }
                
    }

    //Fonction pour voir detail devis
    public function imprimerDevisAction(Request $request, Facture $idFacture){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $achat = new Achat();
        $facture = $em->getRepository('StockBundle:Facture')->findOneById($idFacture);
        $information = $em->getRepository('InformationBundle:Information')->findOneById(1);
        if (is_null($idFacture->getClient())) {
            $client = "null";
        }else{
            $client = $idFacture->getClient();
        }
        $referenceFacture = $facture->getReferenceFacture();
        $form = $this->createForm(AchatType::class, $achat);
        $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idFacture);
        $montant = 0;
        $montantTTC = 0;
        $montantTva = 0;
        $montantRemise = 0;
        $nouveauMontantTotal = 0;
        $montantTotal = 0;
        $remise = $facture->getRemise();
        $tva = $facture->getTva()->getTvaFacture();
        foreach ($produitAchatListe as $value) {
            $montant = $value['prixProduit'] * $value['quantiteAchat'];
            $montantTotal += $montant;

            //return new JsonResponse($montantTotal);
        }
        if ($remise){
            $montantRemise = ($montantTotal * $remise)/100;
            $nouveauMontantTotal = $montantTotal - $montantRemise;
            if ($tva ==100){
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }else{
                $montantTva = ($nouveauMontantTotal*$tva)/100;
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }
        }else{
            if ($tva == 100){
                $montantTTC = $montantTotal + $montantTva;
            }else{
                $montantTva = ($montantTotal*$tva)/100;
                $montantTTC = $montantTotal + $montantTva;
            }
        }
        $montantTTCLettre = $this->cvnbst($montantTTC);
        //return new JsonResponse($montantTTCLettre);
        return $this->render('StockBundle:Achat:devis.html.twig', array('montantTTCLettre'=>$montantTTCLettre,'produitAchatListe'=>$produitAchatListe,'facture'=>$facture, 'idFacture'=>$idFacture->getId(),'client'=>$client,'montantTotal'=>$montantTotal,'information'=>$information,'montantTva'=>$montantTva ,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise,'montantTTC'=>$montantTTC, 'tva'=>$tva, 'form' => $form -> createView()));

    }

    //Fonction pour voir detail devis
    
    public function supprimerfactureAction($idFacture){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $facture =$em->getRepository('StockBundle:Facture')->findOneById($idFacture);
        $em->remove($facture);
        $em->flush();
        if ($em){
            return $this->redirectToRoute('achat_liste');
        }
    }
//Partie vente ****************************************************************************************************************************************************
//
public function listeVenteAction() {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    if($user = $this->getUser()){
        $user = $user = $this->getUser();
    }else{
        $result = 1;
    }
    $devisListe = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allVenteByUser($user->getId());
       $result = 0;
       return $this->render('StockBundle:Vente:listeVente.html.twig', array('result'=>$result,'devisListe' => $devisListe));
   }
//Ajouter vente ******************************************************************************************************************************************************
public function addVenteAction(Request $request) {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $result = 0;
    $achat = new Achat(); 
    $facture = new Facture(); 
    $quantiteStockProduit = 0;
    $quantiteAchat = 0;
    $form = $this->createForm(AddAchatType::class, $achat);
    if($user = $this->getUser()){
        $user = $user = $this->getUser();
    }else{
        $result = 1;
    }
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $dataAchat = $request->request->get($form->getName());


       // $dataFacture = $request->request->get($formFacture->getName());
        //return new JsonResponse($dataFacture['tva']);

        $date       = new \DateTime;
        $debutNum   = $date->format('Ym');
        $lastIdFacture = $em->getRepository('StockBundle:Facture')->getLastId();
        if(!$lastIdFacture){
            $lastIdFacture = array('0' => array('id' => 0));
        }
        $lastId= $lastIdFacture[0]['id']+1;
        $referenceFacture = $debutNum.$lastId;
        $idTva = $dataAchat['facture']['tva'];
        $tva = $em->getRepository('StockBundle:Tva')->findOneById($idTva);
        $facture
            ->setStatut(0)
            ->setReferenceFacture($referenceFacture)
            ->setOffre($dataAchat['facture']['offre'])
            ->setTva($tva)
            ->setDateFacture($date)
            ->setDateOperationFacture(new \Datetime(date('d-m-Y')))
            ->setUser($user)
        ;
        $em->persist($facture);
        if ($em) {
            $quantiteAchat = $dataAchat['quantiteAchat'];
            $stock = $dataAchat['stock'];
            //Verification du stock
            $stockProduit = $em->getRepository('StockBundle:Stock')->findOneById($stock);
            $quantiteStockProduit = $stockProduit->getQuantiteProduit();
            if($quantiteAchat > $quantiteStockProduit){
                $result = 4;
            }else {
                    $achat
                ->setQuantiteAchat($quantiteAchat)
                ->setFacture($facture)
                ->setPrixAchat($stockProduit->getPrixProduit())
                ;
                $em->persist($achat);
                $em->flush();
                if ($em) {
                    $idFacture = $facture->getId();
                    $url = $this->generateUrl('produitvente_ajouter', array('idVente' => $idFacture));
                    return $this->redirect($url);
                }
            }
        }
    }
    else {
        $result = 3;
    }
    return $this->render('StockBundle:Vente:ajouterVente.html.twig', array('result'=>$result, 'quantiteDemande' =>$quantiteAchat, 'quantiteDisponible'=>$quantiteStockProduit ,'form' => $form -> createView()));
}

//Ajouter produit a la vente ***********************************************************************************************************************************
public function addProduitVenteAction(Request $request, Facture $idVente) {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $achat = new Achat(); 
    $facture = $em->getRepository('StockBundle:Facture')->findOneById($idVente);

    if (is_null($idVente->getClient())) {
    $nomClient = "null"; 
    }else{
    $nomClient = $idVente->getClient()->getNomClient();
    }
    $referenceFacture = $facture->getReferenceFacture();
    $form = $this->createForm(AchatType::class, $achat);
    $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
    $montant = 0;
    $montantTTC = 0;
    $montantTva = 0;
    $montantRemise = 0;
    $nouveauMontantTotal = 0;
    $montantTotal = 0;
    $remise = $facture->getRemise();
    $tva = $facture->getTva()->getTvaFacture();
    $result = 0;
    $quantiteStockProduit = 0;
    $quantiteAchat = 0;

        foreach ($produitAchatListe as $value) {
            $montant = $value['prixProduit'] * $value['quantiteAchat'];
            $montantTotal += $montant;

        //return new JsonResponse($montantTotal);
            }
            if ($remise){
                $montantRemise = ($montantTotal * $remise)/100;
                $nouveauMontantTotal = $montantTotal - $montantRemise;
                if ($tva ==100){
                    $montantTTC = $nouveauMontantTotal + $montantTva;
                }else{
                    $montantTva = ($nouveauMontantTotal*$tva)/100;
                    $montantTTC = $nouveauMontantTotal + $montantTva;
                }
            }else{
                if ($tva == 100){
                    $montantTTC = $montantTotal + $montantTva;
                }else{
                    $montantTva = ($montantTotal*$tva)/100;
                    $montantTTC = $montantTotal + $montantTva;
                }
            }

    //$produitAchatListe = $em->getRepository('StockBundle:Achat')->findAll();
   //return new Response($montantTva);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $dataAchat = $request->request->get($form->getName());
        //return new Response($referenceFacture);

            $quantiteAchat = $dataAchat['quantiteAchat'];
            $idStock = $dataAchat['stock'];
            //return new JsonResponse($stock);
            //$idStock = $stock->getId();
            $stockExistant = $em->getRepository('StockBundle:Stock')->findOneById($idStock);
           
            if ($em->getRepository('StockBundle:Achat')->existAchat($idVente, $idStock)) {
                $idAchat = $em->getRepository('StockBundle:Achat')->getAchatByIdStockAndIdFacture($idVente, $idStock);
                //return new JsonResponse($idAchat);
                $achat = $em->getRepository('StockBundle:Achat')->findOneById($idAchat[0]);
                $ancienQuantiteAchat = $achat->getQuantiteAchat();
                $nouvelleQuantiteAchat = $quantiteAchat + $ancienQuantiteAchat ;
                //Verification du stock
                $stockProduit = $em->getRepository('StockBundle:Stock')->findOneById($idStock);
                $quantiteStockProduit = $stockProduit->getQuantiteProduit();
                if($nouvelleQuantiteAchat > $quantiteStockProduit){
                    $result = 4;
                }else {
                    $achat
                    ->setQuantiteAchat($nouvelleQuantiteAchat)
                    ->setPrixAchat($stockProduit->getPrixProduit())
                    
                    ;
                   
                    $em->persist($achat);
                    $em->flush();
                    $achat = new Achat();

                //return new JsonResponse($montantTva);

                    $form = $this->createForm(AchatType::class, $achat);
                    $produitAchat = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
                    //recharge des données et nouveau calcul
                    $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
                    $montant = 0;
                    $montantTTC = 0;
                    $montantTva = 0;
                    $montantRemise = 0;
                    $nouveauMontantTotal = 0;
                    $montantTotal = 0;
                    $remise = $facture->getRemise();
                    $tva = $facture->getTva()->getTvaFacture();
                    foreach ($produitAchatListe as $value) {
                        $montant = $value['prixProduit'] * $value['quantiteAchat'];
                        $montantTotal += $montant;

                        //return new JsonResponse($montantTotal);
                    }
                    if ($remise){
                        $montantRemise = ($montantTotal * $remise)/100;
                        $nouveauMontantTotal = $montantTotal - $montantRemise;
                        if ($tva ==100){
                            $montantTTC = $nouveauMontantTotal + $montantTva;
                        }else{
                            $montantTva = ($nouveauMontantTotal*$tva)/100;
                            $montantTTC = $nouveauMontantTotal + $montantTva;
                        }
                    }else{
                        if ($tva == 100){
                            $montantTTC = $montantTotal + $montantTva;
                        }else{
                            $montantTva = ($montantTotal*$tva)/100;
                            $montantTTC = $montantTotal + $montantTva;
                        }
                    }
                }
                    $produitAchat = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
                    return $this->render('StockBundle:Vente:ajouterProduitVente.html.twig', array('facture'=>$facture,'quantiteDemande' =>$nouvelleQuantiteAchat, 'quantiteDisponible'=>$quantiteStockProduit,'result'=>$result,'produitAchatListe'=>$produitAchat,'referenceFacture'=>$referenceFacture, 'idVente'=>$idVente->getId(),'nomClient'=>$nomClient,'montantTotal'=>$montantTotal,'montantTva'=>$montantTva,'montantTTC'=>$montantTTC,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise,'tva'=>$tva,'form' => $form -> createView()));
            }
            //Verification du stock
            $stockProduit = $em->getRepository('StockBundle:Stock')->findOneById($idStock);
            $quantiteStockProduit = $stockProduit->getQuantiteProduit();
                if($quantiteAchat > $quantiteStockProduit){
                    $result = 4;
                }else {
                    $achat
                    ->setQuantiteAchat($quantiteAchat)
                    ->setFacture($facture)
                    ->setPrixAchat($stockProduit->getPrixProduit());
                    $em->persist($achat);
                    $em->flush();
                    $achat = new Achat();
                    $form = $this->createForm(AchatType::class, $achat);
                    $produitAchat = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);

                    $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
                    $montant = 0;
                    $montantTTC = 0;
                    $montantTva = 0;
                    $montantRemise = 0;
                    $nouveauMontantTotal = 0;
                    $montantTotal = 0;
                    $remise = $facture->getRemise();
                    $tva = $facture->getTva()->getTvaFacture();
                    foreach ($produitAchatListe as $value) {
                        $montant = $value['prixProduit'] * $value['quantiteAchat'];
                        $montantTotal += $montant;

                        //return new JsonResponse($montantTotal);
                    }
                    if ($remise){
                        $montantRemise = ($montantTotal * $remise)/100;
                        $nouveauMontantTotal = $montantTotal - $montantRemise;
                        if ($tva ==100){
                            $montantTTC = $nouveauMontantTotal + $montantTva;
                        }else{
                            $montantTva = ($nouveauMontantTotal*$tva)/100;
                            $montantTTC = $nouveauMontantTotal + $montantTva;
                        }
                    }else{
                        if ($tva == 100){
                            $montantTTC = $montantTotal + $montantTva;
                        }else{
                            $montantTva = ($montantTotal*$tva)/100;
                            $montantTTC = $montantTotal + $montantTva;
                        }
                    }
                }
                $produitAchat = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
        return $this->render('StockBundle:Vente:ajouterProduitVente.html.twig', array('facture'=>$facture, 'result'=>$result,'quantiteDemande' =>$quantiteAchat, 'quantiteDisponible'=>$quantiteStockProduit ,'produitAchatListe'=>$produitAchat,'referenceFacture'=>$referenceFacture, 'idVente'=>$idVente->getId(),'nomClient'=>$nomClient,'montantTotal'=>$montantTotal,'montantTva'=>$montantTva,'montantTTC'=>$montantTTC,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise, 'tva'=>$tva,'form' => $form -> createView()));
    }
    else {
        $result = 3;
    }
   // return new JsonResponse($montantTva);
    return $this->render('StockBundle:Vente:ajouterProduitVente.html.twig', array('facture'=>$facture,'result'=>$result,'quantiteDemande' =>$quantiteAchat, 'quantiteDisponible'=>$quantiteStockProduit ,'produitAchatListe'=>$produitAchatListe,'referenceFacture'=>$referenceFacture, 'idVente'=>$idVente->getId(),'nomClient'=>$nomClient,'montantTotal'=>$montantTotal,'montantTva'=>$montantTva ,'montantTTC'=>$montantTTC,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise, 'tva'=>$tva, 'form' => $form -> createView()));
}


//Retirer produit dans une vente ****************************************************************************************************************

public function removeProduitVenteAction($idVente) {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $achat = $this->getDoctrine()->getManager()->getRepository('StockBundle:Achat')->findOneById($idVente);
    $idFacture = $achat->getFacture()->getId();
    //return new JsonResponse($idFacture);
    $em = $this->getDoctrine()->getManager();
    $em-> remove($achat);
    $em-> flush();
    
    if ($em) {
        return $this->redirectToRoute('produitvente_ajouter', array('idVente' => $idFacture ));
    }
            
}

//Gerer la tva d'une vente **********************************************************************************************************************************
public function ajouttvaVenteAction(Request $request, Facture $idVente){
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $facture = $em->getRepository('StockBundle:Facture')->findOneById($idVente);
    if (!$facture) {

    }
    // return new JsonResponse($facture->getId());
    $referenceFacture = $facture->getReferenceFacture();
    //$client = $facture->getClient();
    $form = $this->createForm(TvaType::class, null);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $data = $request->request->get($form->getName());
        $tvaId = $data['tva'];
        $tva = $em->getRepository('StockBundle:Tva')->findOneById($tvaId);
        $facture->setTva($tva);
        $em->persist($facture);
        $em->flush($facture);
        if ($em) {
            return $this->redirectToRoute('produitvente_ajouter', array('idVente' => $facture->getId()));
        }
    }
    return $this->render('StockBundle:Vente:ajouterTvaVente.html.twig', array('form' =>$form->createView(), 'idVente' => $facture->getId()));

}

//ajout remise vente *****************************************************************************************************************************************
public function ajoutremiseVenteAction(Request $request, Facture $idVente){
    $em = $this->getDoctrine()->getManager();
    $facture = $em->getRepository('StockBundle:Facture')->findOneById($idVente);
    if (!$facture) {

    }
    // return new JsonResponse($facture->getId());
    $referenceFacture = $facture->getReferenceFacture();
    //$client = $facture->getClient();
    $form = $this->createForm(RemiseType::class, null);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $data = $request->request->get($form->getName());
        $remise = $data['remise'];
        $facture->setRemise($remise);
        $em->persist($facture);
        $em->flush($facture);
        if ($em) {
            return $this->redirectToRoute('produitvente_ajouter', array('idVente' => $facture->getId()));
        }
    }
    return $this->render('StockBundle:Vente:ajouterRemiseVente.html.twig', array('form' =>$form->createView(), 'idVente' => $facture->getId()));

}

//Fonction d'ajout d'un client à une vente ******************************************************************************************************************
public function ajoutClientVenteAction(Request $request, Facture $idVente)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('StockBundle:Facture')->findOneById($idVente);
        if (!$facture) {
            
        }
       // return new JsonResponse($facture->getId());
        $referenceFacture = $facture->getReferenceFacture();
        //$client = $facture->getClient();
        $form = $this->createForm(FactureType::class, $facture);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->persist($facture);
            $em->flush($facture);
            if ($em) {
                   return $this->redirectToRoute('produitvente_ajouter', array('idVente' => $facture->getId()));
               }   
        }
         return $this->render('StockBundle:Vente:ajouterClientVente.html.twig', array('form' =>$form->createView() , 'idVente' => $facture->getId()));

    }


//Modifier une vente ****************************************************************************************************************************************
public function editVenteAction(Request $request) {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    //return new JsonResponse($request->get('id'));
    $facture = $em->getRepository('StockBundle:Facture')->findOneById($request->get('id'));
    $form = $this->createForm(FactureEditType::class, $facture);
    $devisListe = $em->getRepository('StockBundle:Achat')->findAll();
    $result = 0;
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($facture);
        $em->flush();
        if ($em) {

            return $this->redirectToRoute('vente_liste', array('result' => $result));

        } else {
            $result = 3;
        }

    }
    return $this->render('StockBundle:Vente:modifierVente.html.twig', array(
        'result' => $result,'devisListe' => $devisListe ,'form' =>$form->createView()));
}
// Valider une vente **************************************************************************************************************************************
public function validerVenteAction(Facture $idVente) {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
    foreach ($produitAchatListe as $value) {
        $quantiteAcheter = $value['quantiteAchat'];
        $stock = $em->getRepository('StockBundle:Stock')->findOneById($value['idStock']);
       
        if($stock){
            $quantiteStock = $stock->getQuantiteProduit();
            if ($quantiteStock >= $quantiteAcheter) {
                $nouvelleQuantiteProduit = $quantiteStock - $quantiteAcheter;
            $stock->setQuantiteProduit($nouvelleQuantiteProduit);
            $em->persist($stock);

            }else{
                return $this->render('StockBundle:Vente:pageerreurvente.html.twig', array('quantiteDemande' =>$quantiteAcheter, 'quantiteDisponible'=>$quantiteStock ,'result' => $result = 4, 'idVente'=>$idVente->getId()));
                $boucle =1;
            }
        }
        //return new JsonResponse($montantTotal);
    }
    //return new JsonResponse($boucle);
    if($em){
        $idVente->setStatut(1);
        $em->persist($idVente);
        $em->flush();
        if($em){
            $url = $this->generateUrl('vente_imprimerrecu', array('idVente' => $idVente->getId()));
            return $this->redirect($url);
        }
    }
    $url = $this->generateUrl('produitvente_ajouter', array('idVente' => $idVente->getId()));
    return $this->redirect($url);
}

// fonction d'impression d'un recu d'une vente **************************************************************************************************************
public function imprimerRecuVenteAction( Facture $idVente){
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $achat = new Achat();
    $facture = $em->getRepository('StockBundle:Facture')->findOneById($idVente);
    $information = $em->getRepository('InformationBundle:Information')->findOneById(1);
    if (is_null($idVente->getClient())) {
        $client = "null";
    }else{
        $client = $idVente->getClient();
    }
    $referenceFacture = $facture->getReferenceFacture();
    $form = $this->createForm(AchatType::class, $achat);
    $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($idVente);
    $montant = 0;
    $montantTTC = 0;
    $montantTva = 0;
    $montantRemise = 0;
    $nouveauMontantTotal = 0;
    $montantTotal = 0;
    $remise = $facture->getRemise();
    $tva = $facture->getTva()->getTvaFacture();
    foreach ($produitAchatListe as $value) {
        $montant = $value['prixProduit'] * $value['quantiteAchat'];
        $montantTotal += $montant;

        //return new JsonResponse($montantTotal);
    }
    if ($remise){
        $montantRemise = ($montantTotal * $remise)/100;
        $nouveauMontantTotal = $montantTotal - $montantRemise;
        if ($tva ==100){
            $montantTTC = $nouveauMontantTotal + $montantTva;
        }else{
            $montantTva = ($nouveauMontantTotal*$tva)/100;
            $montantTTC = $nouveauMontantTotal + $montantTva;
        }
    }else{
        if ($tva == 100){
            $montantTTC = $montantTotal + $montantTva;
        }else{
            $montantTva = ($montantTotal*$tva)/100;
            $montantTTC = $montantTotal + $montantTva;
        }
    }
    //$montantTTCLettre = $this->cvnbst($montantTTC);
    $montantTTCLettre = $montantTTC;
    //return new JsonResponse($montantTTCLettre);
    return $this->render('StockBundle:Vente:recuVente.html.twig', array('montantTTCLettre'=>$montantTTCLettre,'produitAchatListe'=>$produitAchatListe,'facture'=>$facture, 'idVente'=>$idVente->getId(),'client'=>$client,'montantTotal'=>$montantTotal,'information'=>$information,'montantTva'=>$montantTva ,'nouveauMontantTotal'=>$nouveauMontantTotal,'remise'=>$remise,'montantRemise'=>$montantRemise,'montantTTC'=>$montantTTC, 'tva'=>$tva, 'form' => $form -> createView()));
}

//Rapport vente all ******************************************************************************************************************************************
public function rapportVenteAllAction(Request $request){
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $facture = new Facture();
    $result = 0;
    $montantVente = 0;
    $form = $this->createForm(RapportAllVenteType::class, null);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $data = $request->request->get($form->getName());
        $dateFrom = $data['dateFrom'];
        $dateTo = $data['dateTo'];
        
    if ($dateFrom) {
            $dateFrom = new DateTime($dateFrom);
        }
       
    if ($dateTo) {
            $dateTo = new DateTime($dateTo);
            $dateTo->add(new DateInterval('P1D'));
        }
        $result = 1;
       
    $montant = 0;
    $montantTTC = 0;
    $montantTva = 0;
    $montantRemise = 0;
    $nouveauMontantTotal = 0;
    $montantTotal = 0;
    $venteListe = $em->getRepository('StockBundle:Facture')->getAllVenteResume($dateFrom, $dateTo);
    foreach ($venteListe as $facture) {
       
        $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($facture->getId());
        
        $remise = $facture->getRemise();
        $tva = $facture->getTva()->getTvaFacture();
        foreach ($produitAchatListe as $value) {
            $montant = $value['prixProduit'] * $value['quantiteAchat'];
            $montantTotal += $montant;

            //return new JsonResponse($montantTotal);
        }
        if ($remise){
            $montantRemise = ($montantTotal * $remise)/100;
            $nouveauMontantTotal = $montantTotal - $montantRemise;
            if ($tva ==100){
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }else{
                $montantTva = ($nouveauMontantTotal*$tva)/100;
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }
        }else{
            if ($tva == 100){
                $montantTTC = $montantTotal + $montantTva;
            }else{
                $montantTva = ($montantTotal*$tva)/100;
                $montantTTC = $montantTotal + $montantTva;
            }
        }
        $montantVente += $montantTTC;
        
    }

        //return new JsonResponse($venteListe);
        return $this->render('StockBundle:Vente:rapportallvente.html.twig', array('result'=>$result,'form' => $form->createView(),'venteListe' => $venteListe, 'montantVente' => $montantVente ));
    }
    return $this->render('StockBundle:Vente:rapportallvente.html.twig', array('result'=>$result,'form' => $form->createView(),  'montantVente' => $montantVente));
}

//Rapport vente by user ******************************************************************************************************************************************
public function rapportVenteByUserAction(Request $request){
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    $facture = new Facture();
    $result = 0;
    $montantVente = 0;
    $form = $this->createForm(RapportVenteByUserType::class, null);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
        $data = $request->request->get($form->getName());
        $dateFrom = $data['dateFrom'];
        $dateTo = $data['dateTo'];
        $idUser = $data['user'];
        //return new JsonResponse($idUser);
    if ($dateFrom) {
            $dateFrom = new DateTime($dateFrom);
        }
       
    if ($dateTo) {
            $dateTo = new DateTime($dateTo);
            $dateTo->add(new DateInterval('P1D'));
        }
        $result = 1;
       
    $montant = 0;
    $montantTTC = 0;
    $montantTva = 0;
    $montantRemise = 0;
    $nouveauMontantTotal = 0;
    $montantTotal = 0;
    $venteListe = $em->getRepository('StockBundle:Facture')->getAllVenteResumeByUser($dateFrom, $dateTo, $idUser);
    foreach ($venteListe as $facture) {
       
        $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($facture->getId());
        
        $remise = $facture->getRemise();
        $tva = $facture->getTva()->getTvaFacture();
        foreach ($produitAchatListe as $value) {
            $montant = $value['prixProduit'] * $value['quantiteAchat'];
            $montantTotal += $montant;

            //return new JsonResponse($montantTotal);
        }
        if ($remise){
            $montantRemise = ($montantTotal * $remise)/100;
            $nouveauMontantTotal = $montantTotal - $montantRemise;
            if ($tva ==100){
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }else{
                $montantTva = ($nouveauMontantTotal*$tva)/100;
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }
        }else{
            if ($tva == 100){
                $montantTTC = $montantTotal + $montantTva;
            }else{
                $montantTva = ($montantTotal*$tva)/100;
                $montantTTC = $montantTotal + $montantTva;
            }
        }
        $montantVente += $montantTTC;
        
    }

        //return new JsonResponse($venteListe);
        return $this->render('StockBundle:Vente:rapportventebyuser.html.twig', array('result'=>$result,'form' => $form->createView(),'venteListe' => $venteListe, 'montantVente' => $montantVente ));
    }
    return $this->render('StockBundle:Vente:rapportventebyuser.html.twig', array('result'=>$result,'form' => $form->createView(),  'montantVente' => $montantVente));
}

// Fonction qui retourne le nembre de vente par jours ************************* *********************************************************************************************
public function getNombreVenteParDayParUserAction() {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    if($user = $this->getUser()){
        $user = $user = $this->getUser();
    }else{
        $result = 1;
    }
    $date = new \Datetime(date('d-m-Y'));    
    $liste = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allVenteByUserByDay($user->getId());
    if ($liste) {
        $response = new Response($liste[0]['nombre']);
        return $response;
    }else{
        return new Response(0);
    }
   }

   public function getNombreVenteParDayAction() {
       $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
   
    $date = new \Datetime(date('d-m-Y'));    
    $liste = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allVenteByDay();
    if ($liste) {
        $response = new Response($liste[0]['nombre']);
        return $response;
    }else{
        return new Response(0);
    }
   }


// Fonction qui retourne le nembre de produits vendus  par jours ************************* *********************************************************************************************
public function getNombreProduitVendusParDayParUserAction() {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    if($user = $this->getUser()){
        $user = $user = $this->getUser();
    }else{
        $result = 1;
    }
    $liste = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allNombreProduitVendu($user->getId());
    if ($liste) {
        $response = new Response($liste[0]['nombre']);
        return $response;
    }else{
        return new Response(0);
    }
   }

//
public function getNombreProduitVendusParDayAction() {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
   
    $liste = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allNombreProduitVendus();
    if ($liste) {
        $response = new Response($liste[0]['nombre']);
        return $response;
    }else{
        return new Response(0);
    }
   }

// Fonction qui retourne le nembre de vente par jours ************************* *********************************************************************************************
public function getNombreAllVenteAction() {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $liste = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allVente();
    if ($liste) {
        $response = new Response($liste[0]['nombre']);
        return $response;
    }else{
        return new Response(0);
    }
   }

// fonction qui retourne le total de la vente de la journée ******************************************************************************
public function getMontantTotalVenteParDayParUserAction() {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
    if($user = $this->getUser()){
        $user = $user = $this->getUser();
    }else{
        $result = 1;
    }

    $montant = 0;
    $montantTTC = 0;
    $montantTva = 0;
    $montantRemise = 0;
    $nouveauMontantTotal = 0;
    $montantTotal = 0;
    $montantVente = 0;
    $listeVente = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allVenteProduit($user->getId());
    foreach ($listeVente as $facture) {
       
        $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($facture->getId());
        
        $remise = $facture->getRemise();
        $tva = $facture->getTva()->getTvaFacture();
        foreach ($produitAchatListe as $value) {
            $montant = $value['prixProduit'] * $value['quantiteAchat'];
            $montantTotal += $montant;

            //return new JsonResponse($montantTotal);
        }
        if ($remise){
            $montantRemise = ($montantTotal * $remise)/100;
            $nouveauMontantTotal = $montantTotal - $montantRemise;
            if ($tva ==100){
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }else{
                $montantTva = ($nouveauMontantTotal*$tva)/100;
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }
        }else{
            if ($tva == 100){
                $montantTTC = $montantTotal + $montantTva;
            }else{
                $montantTva = ($montantTotal*$tva)/100;
                $montantTTC = $montantTotal + $montantTva;
            }
        }
        $montantVente += $montantTTC;
        
    }
    

    if ($montantVente) {
        $response = new Response($montantVente);
        return $response;
    }else{
        return new Response(0);
    }
   }

// fonction qui retourne le total de la vente de la journée ******************************************************************************
public function getMontantTotalVenteParDayAction() {
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $em = $this->getDoctrine()->getManager();
  
    $montant = 0;
    $montantTTC = 0;
    $montantTva = 0;
    $montantRemise = 0;
    $nouveauMontantTotal = 0;
    $montantTotal = 0;
    $montantVente = 0;
    $listeVente = $this->getDoctrine()->getManager()->getRepository('StockBundle:Facture')->allVenteProduits();
    foreach ($listeVente as $facture) {
       
        $produitAchatListe = $em->getRepository('StockBundle:Achat')->getProduitAchat($facture->getId());
        
        $remise = $facture->getRemise();
        $tva = $facture->getTva()->getTvaFacture();
        foreach ($produitAchatListe as $value) {
            $montant = $value['prixProduit'] * $value['quantiteAchat'];
            $montantTotal += $montant;

            //return new JsonResponse($montantTotal);
        }
        if ($remise){
            $montantRemise = ($montantTotal * $remise)/100;
            $nouveauMontantTotal = $montantTotal - $montantRemise;
            if ($tva ==100){
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }else{
                $montantTva = ($nouveauMontantTotal*$tva)/100;
                $montantTTC = $nouveauMontantTotal + $montantTva;
            }
        }else{
            if ($tva == 100){
                $montantTTC = $montantTotal + $montantTva;
            }else{
                $montantTva = ($montantTotal*$tva)/100;
                $montantTTC = $montantTotal + $montantTva;
            }
        }
        $montantVente += $montantTTC;
        
    }
    

    if ($montantVente) {
        $response = new Response($montantVente);
        return $response;
    }else{
        return new Response(0);
    }
   }


//fonction qui permet de convertir chiffre en lettre ********************************************************************************************************
    public function cvnbst($dateTo){
        $nb1 = Array('un','deux','trois','quatre','cinq','six','sept','huit','neuf','dix','onze','douze','treize','quatorze','quinze','seize','dix-sept','dix-huit','dix-neuf');

        $nb2 = Array('vingt','trente','quarante','cinquante','soixante','soixante','quatre-vingt','quatre-vingt');

        # Décomposition du chiffre
        # Séparation du nombre entier et des décimales
        if (preg_match("/\b,\b/i", $nombre)){
            $nombre = explode(',',$nombre);
        }else{
            $nombre = explode('.',$nombre);
        }
        $nmb = $nombre[0];

        # Décomposition du nombre entier par tranche de 3 nombre (centaine, dizaine, unitaire)
        $i=0;
        while(strlen($nmb)>0){
            $nbtmp[$i]=substr($nmb,-3);
            if( strlen($nmb)>3  ){
                $nmb=substr($nmb,0,strlen($nmb)-3);
            }else{
                $nmb='';
            }
            $i++;
        }
        $nblet='';
        ## Taitement du côté entier
        for($i=1;$i>=0;$i--){
            if(strlen(trim($nbtmp[$i]))==3){
                $ntmp=substr($nbtmp[$i],1);

                if(substr($nbtmp[$i],0,1)<>1 && substr($nbtmp[$i],0,1)<>0){
                    $nblet.=$nb1[substr($nbtmp[$i],0,1)-1];
                    if( $ntmp<>0 ){
                        $nblet.=' cent ';
                    }else{
                        $nblet.=' cents ';
                    }
                }elseif( substr($nbtmp[$i],0,1)<>0 ){
                    $nblet.='cent ';
                }

            }else{
                $ntmp=$nbtmp[$i];
            }

            if($ntmp>0 && $ntmp<20){
                if( !($i==1 && $nbtmp[$i]==1) ){
                    $nblet.=$nb1[$ntmp-1].' ';
                }
            }

            if($ntmp>=20 && $ntmp<60){
                switch(substr($ntmp,1,1)){
                    case 1 :    $sep=' et ';
                        break;
                    case 0 :    $sep='';
                        break;
                    default:    $sep='-';
                }
                $nblet.=$nb2[substr($ntmp,0,1)-2].$sep.$nb1[substr($ntmp,1,1)-1].' ';
            }

            if($ntmp>=60 && $ntmp<80){
                $nblet.=$nb2[4];
                switch(substr($ntmp,1,1)){
                    case 1 :    $sep=' et ';
                        break;
                    case 0 :    $sep='';
                        break;
                    default:    $sep='-';
                }

                if(substr($ntmp,0,1)<>7){
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)-1].' ';
                }else{
                    if(substr($ntmp,1,1)+9==9)$sep='-';
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)+9].' ';
                }

            }

            if($ntmp>=80 && $ntmp<100){
                $nblet.=$nb2[6];
                switch(substr($ntmp,1,1)){
                    case 1 :    $sep=' et ';
                        break;
                    case 0 :    $sep='';
                        break;
                    default:    $sep='-';
                }

                //if(substr($ntmp,1,1)<>0){
                if(substr($ntmp,0,1)<>9){
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)-1];
                    if(substr($ntmp,1,1)==0)$nblet.='s';
                }else{
                    if(substr($ntmp,1,1)==0)$sep='-';
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)+9];
                }
                $nblet.=' ';
                //}elseif(substr($ntmp,0,1)<>9){
                //    $nblet.='s ';
                //}else{
                //    $nblet.=' ';
                //}
            }

            if($i==1 && $nbtmp[$i]<>0){
                if($nbtmp[$i]>1){
                    $nblet.='milles ';
                }else{
                    $nblet.='mille ';
                }
            }

        }

        if( $nombre[0]>1 )$nblet.='';
        if( $nombre[0]==1 )$nblet.='';

        ## Traitement du côté décimale
        if( $nombre[0]>0 && $nombre[1]>0 )$nblet.=' virgule ';
        $ntmp=substr($nombre[1],0,2);
        if( !empty($ntmp) ){
            if($ntmp>0 && $ntmp<20){
                $nblet.=$nb1[$ntmp-1].' ';
            }

            if($ntmp>=20 && $ntmp<60){
                switch(substr($ntmp,1,1)){
                    case 1 :    $sep=' virgule ';
                        break;
                    case 0 :    $sep='';
                        break;
                    default:    $sep='-';
                }
                $nblet.=$nb2[substr($ntmp,0,1)-2].$sep.$nb1[substr($ntmp,1,1)-1].' ';
            }

            if($ntmp>=60 && $ntmp<80){
                $nblet.=$nb2[4];
                switch(substr($ntmp,1,1)){
                    case 1 :    $sep=' virgule ';
                        break;
                    case 0 :    $sep='';
                        break;
                    default:    $sep='-';
                }

                if(substr($ntmp,0,1)<>7){
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)-1].' ';
                }else{
                    if(substr($ntmp,1,1)+9==9)$sep='-';
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)+9].' ';
                }

            }

            if($ntmp>=80 && $ntmp<100){
                $nblet.=$nb2[6];
                switch(substr($ntmp,1,1)){
                    case 0 :    $sep='';
                        break;
                    default:    $sep='-';
                }

                if(substr($ntmp,0,1)<>9){
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)-1];
                    if(substr($ntmp,1,1)==0)$nblet.='s';
                }else{
                    if(substr($ntmp,1,1)==0)$sep='-';
                    $nblet.=$sep.$nb1[substr($ntmp,1,1)+9];
                }
                $nblet.=' ';

            }

            if($ntmp<>0 && !empty($ntmp) ){
                if($ntmp>1){
                    $nblet.='francs ';
                }else{
                    $nblet.='francs ';
                }
            }
        }

        return $nblet;

    }
}

