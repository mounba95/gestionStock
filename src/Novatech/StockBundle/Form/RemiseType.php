<?php

namespace Novatech\StockBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Novatech\ProduitBundle\Entity\Stock;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class RemiseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('remise', IntegerType::class)
           ;
    }

}
