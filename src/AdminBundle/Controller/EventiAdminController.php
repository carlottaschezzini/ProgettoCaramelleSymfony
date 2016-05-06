<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventiAdminController extends Controller
{
    public function eventAdminAction()
    {

    	  $sedi = $this->getDoctrine()
        ->getRepository('UserBundle:Sede')
        ->findAll();

         $aula = $this->getDoctrine()
        ->getRepository('UserBundle:Aula')
        ->findAll();

        return $this->render('AdminBundle:EventiAdmin:event_admin.html.twig', array(
        
            'lista_sedi' => $sedi,
            'lista_aula' => $aula,
        ));
       
    }

}
