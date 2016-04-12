<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventiAdminController extends Controller
{
    public function eventAdminAction()
    {
        return $this->render('AdminBundle:EventiAdmin:event_admin.html.twig', array(
            // ...
        ));
    }

}
