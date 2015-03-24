<?php

namespace Acme\DistribucionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeDistribucionBundle:Default:index.html.twig', array('name' => $name));
    }
}
