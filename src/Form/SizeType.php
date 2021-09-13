<?php 
// src/Form/ArticleType.php
namespace App\Form;

use App\Classe\Search;
use App\Entity\Category;
use App\Entity\Size;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class SizeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
            ->add('age',EntityType::class, [
                'label' => false,
                'required' => true,
                'class' => Size::class, #pour afficher les category
                'expanded'=> true,#liste de checkbox
                'multiple' => false
            ])
        ;
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Size::class, 
            'method'=> 'GET', #on veut que les données passe par url pr que user puisse partager une recherche
            'csrf_protection'=> false # je desactive la protection parce qu'on est ds un form de recherche dc inutile
        ]);
    }

    #par defaut il va tt mettre ds un tableau searchdata on ne veut pas ca on veut une url propre, alors je retourne un string vide
    public function getBlockPrefix()
    {
        return '';
    }
}