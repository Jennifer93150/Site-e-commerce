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

class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,[
                'disabled'=> true, # empeche user de modifier ce champ 
                'label'=> 'Email',
            ])
            ->add('firstname', TextType::class,[
                'disabled'=>true,
                'label'=> 'Prénom',
            ])
            ->add('lastname', TextType::class,[
                'disabled'=>true,
                'label'=> 'Nom',
            ])
            ->add('old_password', PasswordType::class,[
                'label'=>'Mot de passe actuel',
                'mapped'=>false,
                'attr'=>[
                    'placeholder'=>'Veuillez saisir votre mot de passe actuel'
                ]
            ])
            ->add('new_password', RepeatedType::class, [
                'type'=> PasswordType::class,
                'mapped'=>false,#empeche symfony de mapper/lié cette propriété à l'entity car elle n'existe pas
                'invalid_message'=> 'Le mot de passe et la confirmation doivent être identique',
                'label'=> 'Nouveau mot de passe',
                'required'=> true,
                'first_options'=>['label'=> 'Nouveau mot de passe'],
                'second_options'=>['label'=>'Confirmez votre nouveau mot de passe'],
                'constraints' => [
                    new Length([# contrainte de longueur du mdp
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit contenir au minimun 6 caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('submit',SubmitType::class, [
                'label' => 'Valider les modifications',
                'attr' => [
                    'class'=> 'btn form-button'
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
