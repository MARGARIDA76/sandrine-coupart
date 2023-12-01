<?php

namespace App\Form;

use App\Entity\Recipe;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Recipe1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                ]
            ])
            ->add('Description', TextType::class, [

                'label' => 'Description',
                'label_attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            ->add('Tempts_de_Preparation', TextType::class, [
                'attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            ->add('Temps_de_Repos', TextType::class, [
                'attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            ->add('Temps_de_Cuisson', TextType::class, [
                'attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            ->add('Igredients', TextType::class, [
                'attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            ->add('Etapes', TextType::class, [
                'attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            ->add('Allergenes', TextType::class, [
                'attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            ->add('Regime', TextType::class, [
                'attr' => [
                    'class' => 'form-label mt-4',
                ]
            ])
            // ->add('Recette')
            ->add('Submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recipe::class,
        ]);
    }
}
