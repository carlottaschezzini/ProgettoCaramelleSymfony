<?php

namespace AdminBundle\Controller;

use UserBundle\Entity\Aula;
use UserBundle\Entity\Sede;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AdminBundle\Form\Type\AulaFormType;
use AdminBundle\Form\Type\SedeFormType;
use AdminBundle\Form\Type\SedeDeleteFormType;


class ModificaController extends Controller
{
    
    
   
    public function modificaAction(Request $request)
    {
        // aggiungi nuova aula //

        $aula = new Aula();

        $formAula = $this->createForm(AulaFormType::class, $aula);

        $formAula->handleRequest($request);

        if ($formAula->isSubmitted() && $formAula->isValid()) {
            // Salvo cose.
            $aula = $formAula->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($aula);
            $em->flush();

            $this->addFlash(
                'notice',
                'Aula creata con successo'
            );
        }

        // aggiungi nuova sede //


        $sede = new Sede();

        $formSede = $this->createForm(SedeFormType::class, $sede);

        $formSede->handleRequest($request);

        if ($formSede->isSubmitted() && $formSede->isValid()) {
            
            $sede = $formSede->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sede);
            $em->flush();

            $this->addFlash(
                'notice',
                'Sede creata con successo'
            );
        }

        
        // cancella sede 

        /*
        $sede = $this->getDoctrine()->getRepository('UserBundle:Sede')->findAll();


        $em = $this->getDoctrine()->getManager();
        $em->remove($sede);
        $em->flush();
        */


        // modifica sede //


        $sede = $this->getDoctrine()->getRepository('UserBundle:Sede')->findAll();

        
        $formSede1 = $this->createForm(SedeDeleteFormType::class, $sede);

        $formSede1->handleRequest($request);

        if ($formSede1->isSubmitted() && $formSede1->isValid()) {
            // Salvo cose.
            $sede = $formSede1->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sede);
            $em->flush();

            
        }

        

        // mostra sede //

        $sedi = $this->getDoctrine()
        ->getRepository('UserBundle:Sede')
        ->findAll();

        // mostra aula //

         $aula = $this->getDoctrine()
        ->getRepository('UserBundle:Aula')
        ->findAll();


        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'form' => $formAula->createView(),
            'form_sede' => $formSede->createView(),
            'form1' => $formSede1->createView(),
            'lista_sedi' => $sedi,
            'lista_aula' => $aula,
        ));
    }}

  



