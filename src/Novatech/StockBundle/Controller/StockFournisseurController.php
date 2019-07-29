<?php
/**
 * Created by PhpStorm.
 * User: rmag
 * Date: 02/08/18
 * Time: 09:56
 */

namespace Novatech\StockBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StockFournisseurController extends Controller
{
    public function listeApprovisionerAction() {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $approvisionerListe = $this->getDoctrine()->getManager()->getRepository('StockBundle:StockFournisseur')->findAll();
        $result = 0;
        return $this->render('StockBundle:Stock:listeApprovisioner.html.twig', array('result'=>$result,'approvisionerListe' => $approvisionerListe));
    }
}