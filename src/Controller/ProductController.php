<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Size;
use App\Form\SearchType;
use App\Form\SizeType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    # Affichage des produits
    /**
     * @Route("/produits", name="products")
     */
    public function index(Request $request, ProductRepository $productRepository)
    {
        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);
        # traitement de la requete
        # Ecoute l'entrée du formulaire soumis
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $products = $productRepository->findWithSearch($search);
        }else{
            $products = $productRepository->findAll();
        }
        
        
        return $this->render('product/index.html.twig', [
            'produits'=>$products,
            'form' => $form->createView()]);
        
    }

    # Affichage d'un produit selectionné
    /**
     * j'ajoute le parametre {slug} pour que ds url soit indiqué nom produit
     * @Route("/produit/{slug}", name="product")
     */
    public function show(Request $request, ProductRepository $productRepository, $slug)
    {
        $product = $productRepository->findOneBySlug($slug);

        # si le produit n'existe pas redirection
        if(!$product){
            return $this->redirectToRoute('products');
        }

        return $this->render('product/show.html.twig', [
            'product'=>$product,
        ]);
    }


# Création d'un form pr choix taille sur l' article (A voir)
    /*
        $size = new Size();
        #$form = $this->createForm(SizeType::class, $size);
        #$form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            # recupere tte les infos 
            $product = $form->getData();
              
            $product->setSize($form->get('size')->getData());

            # Envoi à la bdd
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

        }else{
            $this->addFlash('error', 'Veuillez sélectionner une taille.');
        }
        dans le return
        #'form' => $form->createView()
        */
}
