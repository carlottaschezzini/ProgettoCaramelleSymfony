<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PrenotaController extends Controller
{
    public function confprenAction()
    {
        return $this->render('UserBundle:Prenota:confpren.html.twig', array(
            // ...
        ));
    }

    public function prenconfAction()
    {
        return $this->render('UserBundle:Prenota:prenconf.html.twig', array(
            // ...
        ));
    }

}
