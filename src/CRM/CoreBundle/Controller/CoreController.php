<?php

namespace CRM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        if ($this->getUser() == null) 
        {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        return $this->render('CRMCoreBundle:Core:index.html.twig');
    }
}

