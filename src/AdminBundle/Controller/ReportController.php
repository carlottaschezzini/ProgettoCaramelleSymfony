<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportController extends Controller
{
    public function reportAction()
    {
        return $this->render('AdminBundle:Report:report.html.twig', array(
            // ...
        ));
    }

}
