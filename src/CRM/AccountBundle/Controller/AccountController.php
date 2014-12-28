<?php

namespace CRM\AccountBundle\Controller;

use CRM\AccountBundle\Entity\Account;
use CRM\AccountBundle\Form\AccountType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AccountController extends Controller
{
    // Affichage de la page index des clients
    public function indexAction()
    {
        return $this->render('CRMAccountBundle:Account:index.html.twig');
    }
    
    // Affichage du formulaire pour ajouter un nouveau client
    public function addAction(Request $request)
    {
        $account = new Account();
        
        $form = $this->get('form.factory')->create(new AccountType(), $account);        
        
        if ($form->handleRequest($request)->isValid()) 
        {
            $account->setCreationUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Client bien enregistrée.');

            return $this->redirect($this->generateUrl('crm_account_home'));
        }
        else
        {
            $request->getSession()->getFlashBag()->add('danger', 'Erreur, client non enregistrée.');
        }
        
        return $this->render('CRMAccountBundle:Account:add.html.twig', array(
                                'form' => $form->createView(),
                            ));
    }
    
    public function voirAction(Account $account)
    {
        
    }
    
    public function newAccountsAction()
    {
        $accounts = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('CRMAccountBundle:Account')
                         ->findNewAccounts(30);
        
        return $this->render('CRMAccountBundle:Account:newAccounts.html.twig', array(
                                'accounts' => $accounts,
                            ));
    }
    
    public function listAccountsJsonAction()
    {        
        $repository = $this->getDoctrine()
                            ->getManager()
                            ->getRepository('CRMAccountBundle:Account');

        $accounts = $repository->getAllAccounts();

        return new JsonResponse($accounts);
    }
}
