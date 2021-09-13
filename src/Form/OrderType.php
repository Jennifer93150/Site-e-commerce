<?php

namespace App\Form;

use App\Entity\Address;
use App\Entity\Carrier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        # pour n'afficher que les adresses de l'utilisateur connecté et pas celles des autres je recup user des options
        # options est un tableau 
        $user = $options['user'];# recup user des options pr le mettre ds var $user
        $builder
            ->add('addresses', EntityType::class, [
                'label'=> false,
                'required'=> true,
                'class'=> Address::class,
                'choices'=> $user->getAddresses(),# là j'utilise ma var $user pour obtenir mes adresses associées
                'multiple'=> false,# oblige un choix unique
                'expanded'=> true, # mais avec des buttons radio
                
            ])
            ->add('carriers', EntityType::class, [
                'label'=> 'Choisissez votre transporteur',
                'required'=> true,
                'class'=> Carrier::class,
                'multiple'=> false,# oblige un choix unique
                'expanded'=> true, # mais avec des buttons radio
            ])
            ->add('submit', SubmitType::class, [
                'label'=> 'Valider ma commande',
                'attr'=> [
                    'class' => 'btn form-button'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'user'=> []# me permet de pouvoir l'utiliser coté vue, ds array se trouvera les adresses associées à user
        ]);
    }
}
