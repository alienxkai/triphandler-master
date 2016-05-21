<?php

namespace Platform\EditorialBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoryid', 'entity', array(
                'class'    => 'Platform\EditorialBundle\Entity\Category',
                'property' => 'title'))
            ->add('title','text')
            ->add('description','textarea')
            ->add('seotitle','text')
            ->add('metadescription','textarea')
            ->add('htmlcontent','textarea')
            ->add('metaopengraph','text')
            ->add('metaopengraphtitle','text')
            ->add('imagebox1', 'entity', array(
                'class'    => 'Platform\CoreBundle\Entity\Media',
                'property' => 'title')
            )
            ->add('imagebox2', 'entity', array(
                'class'    => 'Platform\CoreBundle\Entity\Media',
                'property' => 'title')
            )
            ->add('imagebox3', 'entity', array(
                'class'    => 'Platform\CoreBundle\Entity\Media',
                'property' => 'title')
            )
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Platform\EditorialBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'platform_editorial_bundle_article_type';
    }
}