<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Novatech\ClientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Novatech\ClientBundle\Entity\Client;
use Novatech\ClientBundle\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/**
 * Numero of ClientController
 *
 * @author rmag
 */
class ClientController extends Controller {
    
//Fonction qui renvoie la liste des client      
    public function listeClientAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $clientListe = $this->getDoctrine()->getManager()->getRepository('ClientBundle:Client')->getAllClient();
           $result = 0;
           return $this->render('ClientBundle:Client:listeClient.html.twig', array('result'=>$result,'clientListe' => $clientListe));
       }
//Fonction d'ajout d'un client
    public function addClientAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        $client = new Client();     
        $form = $this->createForm(ClientType::class, $client);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            //generation de la reference du produit
            $date       = new \DateTime;
            $debutNum   = $date->format('Ym');
            $lastClientId = $em->getRepository('ClientBundle:Client')->getLastId();
            if(!$lastClientId){
                $lastClientId = array('0' => array('id' => 0));
            }
            $lastId= $lastClientId[0]['id']+1;
            $referenceClient = 'CLIENT/'.$debutNum.$lastId;
            $data = $request->request->get($form->getName());
            $nomClient = $data['nomClient'];
            $numeroClient = $data['numeroClient'];
            $adresseClient = $data['adresseClient'];
            if ($em->getRepository('ClientBundle:Client')->findOneBynumeroClient($numeroClient)) {
                $result = 1;   
            }else{
                $client
                        ->setNumeroClient($numeroClient)
                        ->setEtatClient(0)
                        ->setAdresseClient($adresseClient)
                        ->setReferenceClient($referenceClient)
                        ->setNomClient($nomClient);
                $em->persist($client);
                $em->flush();
                unset($client);
                unset($form);
                $client = new Client();
                $form = $this->createForm(ClientType::class, $client);
                if ($em) {
                    $result = 2;                
                } else {
                    $result = 3;
                }
        }
        } else {
            $result = 4;
        }
        return $this->render('ClientBundle:Client:ajouterClient.html.twig', array('result'=>$result, 'form' => $form -> createView()));
    }

//Fonction pour la modification d'un client
    public function editClientAction(Request $request, Client $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(ClientType::class, $id);
        $clientListe = $this->getDoctrine()->getManager()->getRepository('ClientBundle:Client')->getAllClient();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();
            if ($em) {
                $result = 2; 
                unset($client);
                return $this->render('ClientBundle:Client:listeClient.html.twig', array(
            'result' => $result,'clientListe' => $clientListe ,'form' =>$form->createView()));                
            } else {
                $result = 3;
            }
 
        }
        return $this->render('ClientBundle:Client:ajouterClient.html.twig', array(
            'result' => $result,'clientListe' => $clientListe ,'form' =>$form->createView()));
    }

//Fonction pour la suppresion d'un client
    public function deleteClientAction(Client $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $id->setEtatClient(1);
        $em-> persist($id);
        $em-> flush();
        
        if ($em) {
            return $this->redirectToRoute('client_liste', array('result' => 1));            
        }
                
    }       
}
