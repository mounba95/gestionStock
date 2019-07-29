<?php

namespace Novatech\StockBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StockType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('limiteProduit')
            ->add('prixProduit')
            ->add('datePermptionProduit',DateType::class, 
            array('widget' => 'single_text','required' => false))
            ->add('produit',EntityType::class,
            array('class' => 'ProduitBundle:Produit',
                'placeholder'=>'Veuillez choisir le produit'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Novatech\StockBundle\Entity\Stock'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'novatech_stockbundle_stock';
    }


}
