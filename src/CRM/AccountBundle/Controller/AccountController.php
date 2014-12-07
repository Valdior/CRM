<?php

namespace CRM\AccountBundle\Controller;

use CRM\AccountBundle\Entity\Account;
use CRM\AccountBundle\Form\AccountType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    public function indexAction()
    {
        return $this->render('CRMAccountBundle:Account:index.html.twig');
    }
    
    public function addAction(Request $request)
    {
        $account = new Account();
        
        $form = $this->get('form.factory')->create(new AccountType(), $account);
        
        if ($form->handleRequest($request)->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistrée.');

            return $this->redirect($this->generateUrl('crm_account_homepage'));
        }
        else
        {
            $request->getSession()->getFlashBag()->add('danger', 'Erreur, client non enregistrée.');
        }
        
        return $this->render('CRMAccountBundle:Account:add.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
}
