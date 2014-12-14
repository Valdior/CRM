<?php

namespace CRM\AccountBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AccountType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',       'text')
            ->add('adresse',    'text', array('required' => false))
            ->add('contact',    'text', array('required' => false))
            ->add('tVA',        'text', array('required' => false))
            ->add('siteWeb',    'url', array('required' => false))
            ->add('phone',      'text', array('required' => false))
            ->add('fAX',        'text', array('required' => false))
            ->add('save',       'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CRM\AccountBundle\Entity\Account'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crm_accountbundle_account';
    }
}
