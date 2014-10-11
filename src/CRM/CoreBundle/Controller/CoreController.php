<?php

namespace CRM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRMCoreBundle:Core:index.html.twig');
    }
}

