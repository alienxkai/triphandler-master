<?php

namespace Platform\CustomerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OfferFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text')
            ->add('description','textarea')
            ->add('seotitle','text')
            ->add('metadescription','textarea')
            ->add('htmlcontent','textarea')
            ->add('price','number')
            ->add('duration','number')
            ->add('startdate',  new DateType(), array(
                'input'  => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'html5' => true
            ))
            ->add('enddate',  new DateType(), array(
                'input'  => 'datetime',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'html5' => true
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Platform\CustomerBundle\Entity\Offer'
        ));
    }

    public function getName()
    {
        return 'platform_customer_bundle_offer_type';
    }
}