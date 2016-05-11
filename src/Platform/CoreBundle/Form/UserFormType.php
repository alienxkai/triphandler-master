<?php

namespace Platform\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username','text')
            ->add('mail','email',array('auto_initialize' => 'false'))
            ->add('password', 'password',
                array(
                    'always_empty' => 'false'
                )
            )
            ->add('usertype', 'entity', array(
                'class'    => 'Platform\CoreBundle\Entity\Usertype',
                'property' => 'usertypename'))
            ->add('userrole','entity',array(
                'class'    => 'Platform\CoreBundle\Entity\Userrole',
                'property' => 'userrolename'
            ))
            ->add('secretquestion','text')
            ->add('secretanswer','text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Platform\CoreBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'platform_core_bundle_user_type';
    }
}