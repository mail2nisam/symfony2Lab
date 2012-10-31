<?php

namespace Application\userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationuserBundle:Default:index.html.twig', array('name' => $name));
    }
}
