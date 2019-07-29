<?php

namespace Novatech\InformationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InformationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomInformation')
            ->add('dg')
            ->add('adresse')
            ->add('email')
            ->add('message')
            ->add('siteweb')
            ->add('tel')
            ->add('cel')
            ->add('compteBancaire')
            ->add('codePostal')
            ->add('slogant')
            ->add('situationJuridique')
            ->add('file',FileType ::class,array('required'=>false,'attr' => array('class' => 'input-file'),'label' => 'logo de l entreprise'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Novatech\InformationBundle\Entity\Information'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'novatech_informationbundle_information';
    }


}
