<?php

namespace AdminBundle\Controller;

use UserBundle\Entity\Aula;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AdminBundle\Form\Type\AdminFormType;

class ModificaController extends Controller
{
   /**
     * @Route("/aula/new", name="aula_create")
     */
    public function modificaAction(Request $request)
    {
        $aula = new Aula();

        if (!$aula) {
            throw new NotFoundHttpException();
        }

        $form_create = $this->createForm(AdminFormType::class, $aula);

        $form_create->handleRequest($request);

        if ($form_create->isSubmitted() && $form_create->isValid()) {
            // Salvo cose.
            $aula = $form_create->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($aula);
            $em->flush();

            $this->addFlash(
                'notice',
                'Aula creata con successo'
            );

           }

        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'form' => $form_create->createView(),
        ));
    }

    /**
     * @Route("/aula", name="aula_list")
     */
    public function listAction()
    {
        $aule = $this->getDoctrine()->getRepository('AdminBundle:Aula')->findAll();

        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'aule' => $aule,
        ));
    }

    /**
     * @Route("/aula/new", name="aula_create")
     */
    public function createAction(Request $request)
    {
        $aula = new Aula();

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
                'Aula creata con successo'
            );

            return $this->redirectToRoute('aula_list');
        }

        return $this->render('AdminBundle:Modifica:modifica.html.twig', array(
            'form' => $form->createView(),
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
