<?php

namespace CRM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('fos_user_security_login'));
    }
}

