<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label'=> 'Prénom',
                'constraints' => new Length([# contrainte de longueur du mdp
                'min' => 3,
                'max' => 4096,
            ]),
                'attr'=>[
                    'placeholder'=> 'Votre prénom doit comporter au min 3 caractères' 
                ]
            ])
            ->add('lastname', TextType::class, [
                'label'=> 'Nom',
                'constraints' => new Length([# contrainte de longueur du mdp
                'min' => 3,
                'max' => 4096,
            ]),
                'attr'=>[
                    'placeholder'=> 'Votre nom doit comporter au min 3 caractères' 
                ]
            ])
            ->add('email', EmailType::class, [
                'label'=> 'Email',
                'attr'=>[
                    'placeholder'=> 'Merci de saisir votre email' 
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type'=> PasswordType::class,
                'invalid_message'=> 'Le mot de passe et la confirmation doivent être identique',
                'label'=> 'Mot de passe',
                'required'=> true,
                'first_options'=>['label'=> 'Mot de passe',
                                  'attr'=>[
                                        'placeholder'=> 'Merci de saisir mot de passe' 
                ]],
                'second_options'=>['label'=>'Confirmez votre mot de passe',
                                    'attr'=>[
                                        'placeholder'=> 'Veuillez confirmer votre mot de passe' 
                ]],
                'constraints' => [
                    new Length([# contrainte de longueur du mdp
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au minimun 6 caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                
            ])
           ->add('submit', SubmitType::class, [
            'label'=> 'S\'inscrire',
            'attr' => [
                'class'=> 'form-button'
            ],
            
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
