<?php

namespace Novatech\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Novatech\ProduitBundle\Entity\Stock;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class AddAchatType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('quantiteAchat')
            ->add('facture',FactureTvaType::class)
            ->add('stock',EntityType::class,
                array('class' => 'StockBundle:Stock',
                    'placeholder'=>'Veuillez choisir le produit'));
               
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Novatech\StockBundle\Entity\Achat'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'novatech_stockbundle_achat';
    }


}
