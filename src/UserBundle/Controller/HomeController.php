<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UserBundle\Form\Type\AulaFormType;
use UserBundle\Form\Type\SedeFormType;
use UserBundle\Entity\Aula;
use UserBundle\Entity\Sede;

class HomeController extends Controller
{
    public function HomeAction()
    {
		$sedi = $this->getDoctrine()
        ->getRepository('UserBundle:Sede')
        ->findAll();

         $aula = $this->getDoctrine()
        ->getRepository('UserBundle:Aula')
        ->findAll();

        return $this->render('UserBundle:Home:home.html.twig', array(
           
            'lista_sedi' => $sedi,
            'lista_aula' => $aula,
   )); }

   

}
