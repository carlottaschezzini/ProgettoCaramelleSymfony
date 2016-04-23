<?php

namespace AdminBundle\Controller;

use UserBundle\Entity\Aula;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AdminBundle\Form\Type\AulaFormType;
use AdminBundle\Form\Type\SedeFormType;

class ModificaController extends Controller
{
   /**
     * @Route("/aula/new", name="aula_create")
     */
    public function modificaAction(Request $request)
    {
        $sede = new Sede();


        $form_create = $this->createForm(SedeFormType::class, $sede);

        $form_create->handleRequest($request);

        if ($form_create->isSubmitted() && $form_create->isValid()) {
            // Salvo cose.
            $sede = $form_create->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($sede);
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

   


}
