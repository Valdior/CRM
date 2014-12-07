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
            ->add('adresse',    'text')
            ->add('contact',    'text')
            ->add('tVA',        'text')
            ->add('siteWeb',    'url')
            ->add('phone',      'text')
            ->add('fAX',        'text')
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
