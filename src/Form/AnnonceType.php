<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('domaine')
            ->add('image', FileType::class, [
                'label' => 'Choose a file',
                'data_class' => null,])
            ->add('dateCrea')
            ->add('statut')
            ->add('utilisateur',HiddenType::class)
            ->add('titre', SearchType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Search announcements'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Search'
            ])
            
        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
