<?php

namespace userManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('userManagerBundle:Default:index.html.twig');
    }
}
