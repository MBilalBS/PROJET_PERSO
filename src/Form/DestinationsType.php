<?php

namespace App\Form;

use App\Entity\Destinations;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DestinationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom_de_la_destination')
            ->add('Description')
            ->add('Pays')
            ->add('Ville')
            ->add('Autres_informations')
            ->add('Coordones_geographiques')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Destinations::class,
        ]);
    }
}
