<?php

namespace Novatech\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function accueilAction(){
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('ClientBundle:Default:tableaubord.html.twig');
    }
}
