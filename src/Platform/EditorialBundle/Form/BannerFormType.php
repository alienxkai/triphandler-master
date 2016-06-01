<?php

namespace Platform\EditorialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BannerFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text')
            ->add('description','textarea')
            ->add('mediaid', 'entity', array(
                'class'    => 'Platform\CoreBundle\Entity\Media',
                'property' => 'webPath')
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Platform\EditorialBundle\Entity\Banner'
        ));
    }

    public function getName()
    {
        return 'platform_editorial_bundle_banner_type';
    }
}