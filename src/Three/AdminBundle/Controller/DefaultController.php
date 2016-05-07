<?php

namespace Three\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ThreeAdminBundle:Default:index.html.twig');
    }
}
