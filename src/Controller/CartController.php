<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="cart")
     */
    public function index(Cart $cart, ProductRepository $productRepo)
    {
        return $this->render('cart/index.html.twig',[
            'cart'=>$cart->getFull($productRepo)
        ]);
    }

    /**
     * @Route("/panier/ajouter/{id<\d+>}", name="add_to_cart")
     * J'appelle ma classe Cart(injection dependance) où j'ai crée ma fonction 
     */
    public function add(Cart $cart, $id)
    {
        # J'appelle ma fonction
        $cart->add($id);
        # Un msg de succes
        $this->addFlash('success', 'Votre produit a bien été ajouté !');
        # Redirection
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/panier/diminuer/{id<\d+>}", name="decrease")
     */
    public function decrease(Cart $cart, $id)
    {
        # J'appelle ma fonction
        $cart->decrease($id);
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/panier/suppression/{id<\d+>}", name="delete")
     */
    public function delete(Cart $cart, $id)
    {
        # J'appelle ma fonction
        $cart->delete($id);
        return $this->redirectToRoute('cart');
    }

    /**
     * @Route("/panier/supprimer_panier", name="remove_cart")
     */
    public function remove(Cart $cart)
    {
        # J'appelle ma fonction
        $cart->remove();
        return $this->redirectToRoute('products');
    }
}
