<?php

namespace Banque\CompteBundle\Controller;

use Banque\CompteBundle\Entity\Compte;
use Banque\CompteBundle\Entity\Operation;
use Banque\CompteBundle\Form\CompteType;
use Banque\CompteBundle\Form\OperationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class CompteController extends Controller
{
//Fonction qui renvoie la liste des compte
    public function listeCompteAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $compteListe = $this->getDoctrine()->getManager()->getRepository('CompteBundle:Compte')->findAll();
        $result = 0;
        return $this->render('CompteBundle:Compte:listeCompte.html.twig', array('result'=>$result,'compteListe' => $compteListe));
    }

    //Fonction qui renvoie la liste des compte
    public function detailCompteAction(Request $request, $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if($user = $this->getUser()){
            $user = $this->getUser();
        }else{
            $result = 1;
        }
        $em = $this->getDoctrine()->getManager();
        if ($id){
            $operation = new Operation();
            $form = $this->createForm(OperationType::class, $operation);
            $compte = $em->getRepository('CompteBundle:Compte')->findOneById($id);
            $recettes = $em->getRepository('CompteBundle:Operation')->getAllOperationByTypeAndCompte($id, 1);
            $depenses = $em->getRepository('CompteBundle:Operation')->getAllOperationByTypeAndCompte($id, 2);
            if ($compte->getEtatCompte() == 0){
                $result = 6;
            }elseif ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
                //generation de la reference du produit
                $date       = new \DateTime;
                $data = $request->request->get($form->getName());
                $sole = $compte->getSoldeCompte();
                if ($data['typeOperation'] == 1){
                    $nouveauSolde = $sole + $data['montantOperation'];
                }elseif($data['typeOperation'] == 2){
                    if ($sole >= $data['montantOperation']){
                        $nouveauSolde = $sole - $data['montantOperation'];
                    }else {
                        $result = 2;
                        return $this->render('CompteBundle:Compte:detailCompte.html.twig', array('compte' => $compte, 'recettes' => $recettes, 'depenses' => $depenses, 'form'=>$form-> createView(), 'result' =>$result));
                    }

                }
                $compte->setSoldeCompte($nouveauSolde);
                $em->persist($compte);
                $em->flush();
                if ($em){
                    $operation
                        ->setCompte($compte)
                        ->setTypeOperation($data['typeOperation'])
                        ->setDescriptionOperation($data['descriptionOperation'])
                        ->setEtatOperation(1)
                        ->setDateOperation($date)
                        ->setDateOp(new \Datetime(date('d-m-Y')))
                        ->setMontantOperation($data['montantOperation'])
                        ->setUser($user);
                    $em->persist($operation);
                    $em->flush();
                    if ($em) {
                        unset($operation);
                        unset($form);
                        $operation = new Operation();
                        $form = $this->createForm(OperationType::class, $operation);
                        $compte = $em->getRepository('CompteBundle:Compte')->findOneById($id);

                        $recettes = $em->getRepository('CompteBundle:Operation')->getAllOperationByTypeAndCompte($id, 1);
                        $depenses = $em->getRepository('CompteBundle:Operation')->getAllOperationByTypeAndCompte($id, 2);
                        $result = 3;
                        return $this->render('CompteBundle:Compte:detailCompte.html.twig', array('compte' => $compte, 'recettes' => $recettes, 'depenses' => $depenses, 'form'=>$form-> createView(), 'result' =>$result));
                    } else {
                        $result = 4;
                    }
                }

            }
            else {
                if ($request->get('result')){
                    $result = $request->get('result');
                }else{
                    $result = 5;
                }
            }

            return $this->render('CompteBundle:Compte:detailCompte.html.twig', array('compte' => $compte, 'recettes' => $recettes, 'depenses' => $depenses, 'form'=>$form-> createView(), 'result' =>$result));
        }
        return $this->redirectToRoute('compte_ajouter', array('result' => 4));
    }
//Fonction d'ajout d'un compte
    public function addCompteAction(Request $request) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $compteListe = $this->getDoctrine()->getManager()->getRepository('CompteBundle:Compte')->findAll();
        $em = $this->getDoctrine()->getManager();
        $compte = new Compte();
        $form = $this->createForm(CompteType::class, $compte);
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            //generation de la reference du produit
            $date       = new \DateTime;
            $debutNum   = $date->format('Ym');
            $lastCompteId = $em->getRepository('CompteBundle:Compte')->getLastId();
            if(!$lastCompteId){
                $lastCompteId = array('0' => array('id' => 0));
            }
            $lastId= $lastCompteId[0]['id']+1;
            $numeroCompte = '210'.$debutNum.$lastId;
            $data = $request->request->get($form->getName());
            $nomCompte = trim($data['nomCompte']);
            if ($em->getRepository('CompteBundle:Compte')->findOneBynumerCompte($numeroCompte)) {
                $result = 1;
            }else{
                $compte
                    ->setNumerCompte($numeroCompte)
                    ->setEtatCompte(0)
                    ->setDateCompte($date)
                    ->setSoldeCompte(0)
                    ->setNomCompte($nomCompte);
                $em->persist($compte);
                $em->flush();
                unset($compte);
                unset($form);
                $compte = new Compte();
                $form = $this->createForm(CompteType::class, $compte);
                if ($em) {
                    $compteListe = $this->getDoctrine()->getManager()->getRepository('CompteBundle:Compte')->findAll();
                    $result = 2;
                    return $this->render('CompteBundle:Compte:ajouterCompte.html.twig', array('result'=>$result ,'compteListe' => $compteListe,'form' => $form -> createView()));
                } else {
                    $result = 3;
                }
            }
        }
        else {
            if ($request->get('result')){
                $result = $request->get('result');
            }else{
                $result = 4;
            }
        }
        return $this->render('CompteBundle:Compte:ajouterCompte.html.twig', array('result'=>$result ,'compteListe' => $compteListe,'form' => $form -> createView()));
    }

//Fonction pour la modification d'un compte
    public function editCompteAction(Request $request, Compte $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $form = $this->createForm(CompteType::class, $id);
        $compteListe = $this->getDoctrine()->getManager()->getRepository('CompteBundle:Compte')->findAll();
        $result = 0;
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();
            return $this->redirectToRoute('compte_ajouter');
        }
        return $this->render('CompteBundle:Compte:editCompte.html.twig', array(
            'result' => $result,'compteListe' => $compteListe ,'form' =>$form->createView()));
    }

//Fonction pour la suppresion d'un compte
    public function deleteCompteAction(Compte $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $id->setEtatCompte(1);
        $em-> persist($id);
        $em-> flush();

        if ($em) {
            return $this->redirectToRoute('compte_liste', array('result' => 1));
        }

    }

    //Fonction pour la suppresion d'un compte
    public function etatCompteAction(Compte $id) {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $result = 0;
        if ($id->getEtatCompte() == 0){
            $id->setEtatCompte(1);
            $result = 6;
        }elseif ($id->getEtatCompte() == 1){
            $id->setEtatCompte(0);
            $result = 5;
        }
        $em-> persist($id);
        $em-> flush();

        if ($em) {
            return $this->redirectToRoute('compte_ajouter', array('result' => $result));
        }

    }

}
