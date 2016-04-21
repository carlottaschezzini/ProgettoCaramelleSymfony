<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function HomeAction()
    {
        return $this->render('UserBundle:Home:home.html.twig', array(
            // ...
        ));
    }

   

}
