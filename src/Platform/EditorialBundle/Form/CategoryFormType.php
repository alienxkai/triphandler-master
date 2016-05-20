<?php

namespace Platform\EditorialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoryFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parentid', 'entity', array(
                'class'    => 'Platform\EditorialBundle\Entity\Category',
                'property' => 'title'))
            ->add('title','text')
            ->add('description','textarea')
            ->add('seotitle','text')
            ->add('metadescription','textarea')
            ->add('orderby','number')
            ->add('status','text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Platform\EditorialBundle\Entity\Category'
        ));
    }

    public function getName()
    {
        return 'platform_editorial_bundle_category_type';
    }
}