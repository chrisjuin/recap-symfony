<?php

namespace CJ\commBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CJcommBundle:Default:index.html.twig');
    }
}
