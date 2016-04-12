<?php

namespace LogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
        return $this->render('LogBundle:Login:index.html.twig', array(
            // ...
        ));
    }

    public function passwAction()
    {
        return $this->render('LogBundle:Login:passw.html.twig', array(
            // ...
        ));
    }

}
