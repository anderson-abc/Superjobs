<?php

namespace Superjobs\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('idCategory')
            ->add('type')
            ->add('company')
            ->add('logo')
            ->add('url', 'url')
            ->add('location')
            ->add('description', 'textarea')
            ->add('skills')
            ->add('token')
            ->add('isPublic')
            ->add('isCreated')
            ->add('expiresAt')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('website')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Superjobs\HomeBundle\Entity\Jobs'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'superjobs_homebundle_jobs';
    }
}
