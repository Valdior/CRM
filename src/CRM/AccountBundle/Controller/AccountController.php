<?php

namespace CRM\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRMAccountBundle:Account:index.html.twig');
    }
}
