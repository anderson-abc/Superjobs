<?php

namespace Superjobs\HomeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class JobsType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
//                ->add('id_user')
                ->add('title')
                ->add('Categories')
                ->add('type', 'choice', array(
                    'choices' => array('CDI' => 'CDI', 'CDD' => 'CDD', 'Stage' => 'Stage'),
                    'choices_as_values' => true,
                        )
                )
                ->add('company')
                ->add('logo', 'file', array('required' => false, 'label' => 'Company Logo (Image)', 'data_class' => null))
                ->add('url')
                ->add('location')
                ->add('salary')
                ->add('description', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->add('skills')
                ->add('emailCV')
                ->add('token')
                ->add('isPublic')
                ->add('isCreated')
                ->add('expiresAt')
                ->add('createdAt')
                ->add('updatedAt')
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Superjobs\HomeBundle\Entity\Jobs'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'superjobs_homebundle_jobs';
    }

}
