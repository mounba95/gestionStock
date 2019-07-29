<?php

namespace Novatech\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Novatech\ClientBundle\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RapportAllVenteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('dateFrom',DateType::class, array('label' => 'Date livraison',
        'widget' => 'single_text',
        'required' => false))
        ->add('dateTo',DateType::class, array('label' => 'Date livraison',
        'widget' => 'single_text',
        'required' => false));
        ;
    } 

}
