<?php

namespace Platform\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text')
            ->add('description','textarea')
            ->add('seoname','text')
            ->add('metadescription','textarea')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Platform\CustomerBundle\Entity\Client'
        ));
    }

    public function getName()
    {
        return 'platform_customer_bundle_client_type';
    }
}