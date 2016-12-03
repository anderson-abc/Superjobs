<?php

namespace Superjobs\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\File\File;

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
            ->add('company')
            ->add('logo', 'file', array('required' => false))
//            ->add('logo', 'file', array('label' => 'Company logo', 'required' => false))
            ->add('url', 'url')
            ->add('location')
            ->add('emailCV')
            ->add('description', 'textarea', array('attr' => array('class' => 'ckeditor')))
//             ->add('captcha', 'genemu_captcha',array('mapped' => false,))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
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
