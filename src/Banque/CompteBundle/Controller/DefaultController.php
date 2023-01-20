<?php

namespace Banque\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CompteBundle:Default:index.html.twig');
    }
}
