<?php

namespace App\Controller\Admin;

use App\Entity\Order;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
#use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
#use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;

class OrderCrudController extends AbstractCrudController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $em, CrudUrlGenerator $crudUrlGenerator)
    {
        $this->entityManager = $em;
        # Permet de Gérer url de redirection une fois traitement terminé 
        #$this->crudUrlGenerator = $crudUrlGenerator;
    }
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }

    # Fonction qui permet de créer des actions sur le tableau des commandes coté easyAdmin
    public function configureActions(Actions $actions): Actions
    {
        # parametre de la methode Action = 1 string $name, 2 $label = null, 3 ?string $icon = null 
        $updatePreparation = Action::new('updatePreparation', 'Préparation en cours')->linkToCrudAction('updatePreparation');
        # linkToCrudAction() = faire le lien avec la methode entre () que j'ai crée ds ce controller
        return $actions
            #->add('nom pg où afficher', 'nom action ou objet')
            ->add('detail', $updatePreparation)
            ->add('index', 'detail');# ceci créer le bouton "voir"
           
    }

    /*public function updatePreparation(AdminContext $adminContext)
    {
        # Grace a AdminContext j'accede à l'entité Order donc à la commande que je souhaite modifier
        $order = $adminContext->getEntity()->getInstance();
        $order->setState(2);
        $this->entityManager->flush();

        $this->addFlash('success', 'La modification a bien été enregistrée');
        $controller = OrderCrudController::class; 
        # Génération de l'url
        $url = $this->crudUrlGenerator->build()
            ->setController($controller)#le controller ds lequel nous sommes
            ->setAction('index')#page principale
            ->generateUrl();# génère url

        return $this->redirect($url);
        
    }*/

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setDefaultSort(['id'=>'DESC']);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            # 1er param: propriété de entity, 2eme param: nom de colonne sur easy admin
            IdField::new('id'),
            DateTimeField::new('createdAt', 'Date'),
            TextField::new('user.getFullName', 'Utilisateur'),
            TextField::new('carrierName', 'Transporteur'),
            MoneyField::new('total', 'Total des produits')->setCurrency('EUR'),
            MoneyField::new('carrierPrice',' Frais de port')->setCurrency('EUR'),
            BooleanField::new('isPaid', 'Payée'),
            /*ChoiceField::new('state', 'Statut')->setChoices([
                'Non payée'=> 0,
                'Payée'=> 1,
                'En cours de préparation'=> 2,
                'En cours de livraison'=> 3
            ]),*/
            ArrayField::new('orderDetails', 'Produits achetés')->hideOnIndex()#ceci masque les produits sur la 1ere vue du tableau ds order de easy mais pas quand on sur voir les pdts reste afficher
        ];
    }
    
}
