<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModificaController extends Controller
{
    public function modificaAction()
    {
        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            // ...
        ));
    }

}
