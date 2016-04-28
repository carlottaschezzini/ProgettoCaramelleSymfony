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


class ModificaController extends Controller
{
     /**
     * @Route("/aula", name="aula_list")
     */
    public function listAction()
    {
        $aule = $this->getDoctrine()->getRepository('AdminBundle:Aula')->findAll();

        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'aule' => $aule,
        ));

        $sedi = $this->getDoctrine()->getRepository('AdminBundle:Sede')->findAll();

        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'sedi' => $sedi,
        ));
    }
    
   /**
     * @Route("/aula/new", name="aula_create")
     */
    public function modificaAction(Request $request)
    {
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


        $sede = new Sede();

        $formSede = $this->createForm(SedeFormType::class, $sede);

        $formSede->handleRequest($request);

        if ($formSede->isSubmitted() && $formSede->isValid()) {
            // Salvo cose.
            $sede = $formSede->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sede);
            $em->flush();

            $this->addFlash(
                'notice',
                'Aula creata con successo'
            );
        }


        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'form' => $formAula->createView(),
            'form_sede' => $formSede->createView(),
        ));
    }

   

    /**
     * @Route("/aula/new", name="aula_create")
     */
    public function createAction(Request $request)
    {
        $aula = new Aula();

        $form = $this->createForm(AulaFormType::class, $aula);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $aula = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($aula);
            $em->flush();

            $this->addFlash(
                'notice',
                'Aula creata con successo'
            );

            return $this->redirectToRoute('aula_list');
        }


        $sede = new Sede();

        $formSede = $this->createForm(SedeFormType::class, $aula);

        $formSede->handleRequest($request);

        if ($formSede->isSubmitted() && $formSede->isValid()) {
            // Salvo cose.
            $sede = $formSede->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sede);
            $em->flush();

            $this->addFlash(
                'notice',
                'Sede creata con successo'
            );

            return $this->redirectToRoute('aula_list');
        }



        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'form' => $form->createView(),
            'form_sede' => $formSede->createView(),
        ));
    }

    /**
     * @Route("/aula/{id}", name="aula_view")
     */
    public function viewAction($id)
    {
        $aula = $this->getDoctrine()->getRepository('AppBundle:Aula')->find($id);

        if (!$aula) {
            throw new NotFoundHttpException();
        }

        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'aula' => $aula,
        ));
    }

    /**
     * @Route("/aula/{id}/edit", name="aula_edit")
     */
    public function editAction(Request $request)
    {
        $aula = $this->getDoctrine()->getRepository('AdminBundle:Aula')->find($request->get('id'));

        if (!$aula) {
            throw new NotFoundHttpException();
        }

        $form = $this->createForm(AulaFormType::class, $aula);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Salvo cose.
            $aula = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($aula);
            $em->flush();

            $this->addFlash(
                'notice',
                'Aula modificata con successo'
            );

            return $this->redirectToRoute('aula_list');
        }

        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/aula/{id}/delete", name="aula_delete")
     */
    public function deleteAction($id)
    {
        $aula = $this->getDoctrine()->getRepository('AdminBundle:Aula')->find($id);

        if (!$aula) {
            throw new NotFoundHttpException();
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($aula);
        $em->flush();

        $this->addFlash(
            'notice',
            'Aula eliminata con successo'
        );

        return $this->redirectToRoute('aula_list');
    }


}
