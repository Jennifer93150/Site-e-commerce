<?php

namespace App\Form;

use App\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label'=>'Titre de l\'adresse',
                'attr'=>[
                    'placeholder'=>'Donnez un titre à votre addresse'
                ]
            ])
            ->add('firstname',TextType::class, [
                'label'=>'Prénom',
                'attr'=>[
                    'placeholder'=>'Entrez votre prénom'
                ]
            ])
            ->add('lastname',TextType::class, [
                'label'=>'Nom',
                'attr'=>[
                    'placeholder'=>'Entrez votre nom'
                ]
            ])
            ->add('address',TextType::class, [
                'label'=>'Adresse',
                'attr'=>[
                    'placeholder'=>'Entrez votre addresse'
                ]
            ])
            ->add('postal',TextType::class, [
                'label'=>'Code postal',
                'attr'=>[
                    'placeholder'=>'Entrez votre cp'
                ]
            ])
            ->add('city',TextType::class, [
                'label'=>'Ville',
                'attr'=>[
                    'placeholder'=>'Entrez votre ville'
                ]
            ])
            ->add('country',CountryType::class, [
                'label'=>'Pays',
                'attr'=>[
                    'placeholder'=>'Entrez votre pays'
                ]
            ])
            ->add('phone',TelType::class, [
                'label'=>'Numéro de téléphone',
                'attr'=>[
                    'placeholder'=>'Votre numéro'
                ]
            ])
            ->add('submit',SubmitType::class, [
                'label'=>'Valider',
                'attr'=>[
                    'class'=>'btn form-button'
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class,
        ]);
    }
}
