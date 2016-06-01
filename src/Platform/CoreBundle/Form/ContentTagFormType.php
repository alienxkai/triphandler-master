<?php

namespace Platform\CoreBundle\Form;

use Platform\CoreBundle\Repository\TagRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContentTagFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('tags', 'entity', array(
            'class' => 'PlatformCoreBundle:Tag',
            'expanded' => false,
            'multiple' => true,
            'required' => false,
            'query_builder' => function (TagRepository $repository) {
                return $repository->createQueryBuilder('u');
            },
            'property' => 'name',
            'attr' => array('class'=> 'chosen-select','data-placeholder'=> 'Choose a Country','style'=> 'width:100%;')
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Platform\EditorialBundle\Entity\Article'
            )
        );
    }

    public function getName()
    {
        return 'platform_core_bundle_content_tag_type';
    }
}