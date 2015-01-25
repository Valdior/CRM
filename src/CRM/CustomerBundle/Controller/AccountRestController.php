<?php

namespace CRM\CustomerBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AccountRestController extends Controller
{
    /**
     * 
     * @param type $username
     * 
     * @View(serializerGroups={"Default","Details"})
     */
    public function getAccountsAction()
    {
        $Accounts = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('CRMCustomerBundle:Account')
                     ->findAll();     
        
        return $Accounts;
    }
}
