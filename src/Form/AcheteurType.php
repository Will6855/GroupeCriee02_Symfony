<?php

namespace App\Form;

use App\Entity\Acheteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AcheteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomAcheteur')
            ->add('prenomAcheteur')
            ->add('adrAcheteur')
            ->add('villeAcheteur')
            ->add('cpAcheteur')
            ->add('telAcheteur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Acheteur::class,
        ]);
    }
}
