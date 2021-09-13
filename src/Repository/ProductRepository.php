<?php

namespace App\Repository;

use App\Classe\Search;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * Requete qui recupere produits en fonction de la recherche ds filtre de user
     * @return Product[] Returns an array of Product objects
     */
    public function findWithSearch(Search $search)
    {
        $query= $this->createQueryBuilder('p')# On commence la query avec la table Produit
            ->select('c','p')# selectionne c=category et p= produit
            ->join('p.category', 'c')# jointure entre category de produit et entity category
        ;
        # Si des categories sont selectionnées ds filtre
        if(!empty($search->categories)){
            # alors reprend la query et dedans tu ajoutes un andWhere
            $query = $query
            ->andWhere('c.id IN (:categories)')# Où j'ai besoin que les id de mes categories soient ds liste categories que j'envoi en paramatre ds mon objet search
            ->setParameter('categories', $search->categories);# je dis ce qu'est la var categories
        }

        # Si saisie ds input string du filtre 
        if(!empty($search->string)){
            # alors reprend la query et dedans tu ajoutes un andWhere
            $query = $query
            ->andWhere('p.name LIKE :string')# le nom du produit correspond-il a l'input saisi
            ->setParameter('string', "%$search->string%");# je dis ce qu'est la var string ("%%"= recherche partielle)
        }

        # filtre prix a mettre en place affiche uniqt le prix choisi pas prix en dessous 
        if(!empty($search->max)){
            # alors reprend la query et dedans tu ajoutes un andWhere
            $query = $query
            ->andWhere('p.price LIKE :max')
            ->setParameter('max', "%$search->max%");
        }
        # execution, création de la query et retourne les resultats
        return $query->getQuery()->getResult();

    }
    

    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
