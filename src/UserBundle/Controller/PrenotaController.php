<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Entity\Aula;

class PrenotaController extends Controller
{
    public function homeAction()
    {
        return $this->render('UserBundle:Home:home.html.twig', array(
            
        ));
    }

    public function prenconfAction()
    {
        

        return $this->render('UserBundle:Home:home.html.twig', array(
        
        ));
    }

}
