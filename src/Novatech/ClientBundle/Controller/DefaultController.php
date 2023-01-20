<?php

namespace Novatech\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse ;

class DefaultController extends Controller
{

    public function accueilAction(){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $data = $this->getDoctrine()->getManager()->getRepository('StockBundle:Achat')->getProduitVendus();
        $dataT = $this->getDoctrine()->getManager()->getRepository('StockBundle:Achat')->getTypeProduitVendus();
        //return new JsonResponse($data);
        return $this->render('ClientBundle:Default:tableaubord.html.twig', array('data'=>$data, 'dataType' => $dataT));
    }
}
