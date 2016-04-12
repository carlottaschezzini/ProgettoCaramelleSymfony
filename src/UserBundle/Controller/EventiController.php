<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventiController extends Controller
{
    public function EventAction()
    {
        return $this->render('UserBundle:Eventi:event.html.twig', array(
            // ...
        ));
    }

}
