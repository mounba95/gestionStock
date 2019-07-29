<?php

namespace Novatech\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Novatech\StockBundle\Entity\Tva;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TvaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tva',EntityType::class,
                array('class' => 'StockBundle:Tva',
                    'placeholder'=>'Veuillez choisir la tva'));
    }
}
