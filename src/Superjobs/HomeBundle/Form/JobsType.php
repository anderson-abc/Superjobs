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
            ->add('Categories', 'entity', array(
                    'class'    => 'SuperjobsHomeBundle:Category',
                    'property' => 'name',
                    'expanded' => true,
                    'multiple' => true
                  ))
            ->add('type')
            ->add('company')
            ->add('logo', 'file', array('label' => 'Company logo', 'required' => false))
            ->add('url', 'url')
            ->add('location')
            ->add('description', 'textarea', array(
                    'attr' => array(
                        'class' => 'tinymce',
                        'data-theme' => 'bbcode' // Skip it if you want to use default theme
                    )
                ))
            ->add('skills')
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
