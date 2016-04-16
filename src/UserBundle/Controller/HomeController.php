<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('UserBundle:Home:home.html.twig', array(
            // ...
        ));
    }

   

}
