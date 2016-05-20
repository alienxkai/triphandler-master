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
                'property' => 'category'))
            ->add('title','text')
            ->add('description','textarea')
            ->add('seotitle','text')
            ->add('metadescription','textarea')
            ->add('htmlcontent','textarea')
            ->add('metaopengraph','text')
            ->add('metaopengraphtitle','text')
            ->add('imagebox1','file')
            ->add('imagebox2','file')
            ->add('imagebox3','file')
            ->add('imagealt1','text')
            ->add('imagealt2','text')
            ->add('imagealt3','text')
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