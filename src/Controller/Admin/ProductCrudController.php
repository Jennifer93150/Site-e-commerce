<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            # Dans "Créer produit" dans le dashboard coté produits je vais indiquer les inputs à afficher et en quel format
            TextField::new('name'),
            # le slug reprend le nom du produit en suppr espace, accent... donc il faut lui apporter le nom 
            SlugField::new('slug')->setTargetFieldname('name'),
            ImageField::new('illustration')
                ->setBasePath('uploads/')#dossier ds lequel chercher img
                ->setUploadDir('public/uploads/')
                ->setUploadedFileNamePattern('[randomhash].[extension]')#permet de donner un nom aleatoire aux photos,
                ->setRequired(false),
            TextField::new('subtitle'),
            TextareaField::new('description'),
            MoneyField::new('price', 'Prix')->setCurrency('EUR'),
            AssociationField::new('category')
        ];
    }
    
}
