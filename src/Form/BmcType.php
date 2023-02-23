<?php

namespace App\Form;

use App\Entity\Bmc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BmcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('partenaires_cles')
            ->add('activites_cles')
            ->add('ressources_cles')
            ->add('proposition_valeur')
            ->add('relations_client')
            ->add('canaux')
            ->add('segments_marche')
            ->add('couts')
            ->add('revenus')
            ->add('annonce')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bmc::class,
        ]);
    }
}
