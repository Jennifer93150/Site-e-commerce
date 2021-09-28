<?php

namespace App\Classe;

#use App\Entity\Size;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Cart
{
    private $session;
    # pr acces au service de session (injection dependance)
    public function __construct(SessionInterface $session)
    {
        # Var $session que je vais utiliser ds les fonction suivantes
        $this->session = $session;
    }

    public function get()
    {
        return $this->session->get('cart');
        
    }

    # Fonction recupération panier ds sa globalité
    public function getFull($productRepo)
    {
        # On "fabrique" les données
        $dataCart = [];
        /* Maintenant ce que je veux c'est remplir datacart avec les données des produits que doctrine ira recup ds la bdd
       comme $this->get() est un array dont la structure ressemble à array:1 [▼ id 1 => qté 3] alors je dois boucler dessus de la meme manière*/
        # Si l'objet panier existe (j'impose cette condition sinon une erreur s'affiche quand le panier est vide car il boucle sur rien (pas de pdt))
        if($this->get()){
            # Alors boucle sur mes produits
            foreach($this->get() as $id => $quantity){
                #$product = $this->entityManager->getRepository(Product::class)->findOneById($id);
                $product = $productRepo->find($id);
                #$size = $this->entityManager->getRepository(Size::class)->findOneByAge($id);
                
                # Condition qui empechera un user d'ajouter n'importe quel id d'1 pdt qui n'existe pas
                # ce qui va se passer : le code va ajouter cet id dans le tableau qui associe produit et quantity de la session et rediriger vers mon panier mais le produit n'existant pas il affichera des erreurs coté twig
                # Si le produit n'existe pas ds la bdd
                if(!$product){
                    # Alors supprime le
                    $this->delete($id);
                    # Et continue
                    continue;
                }
                $dataCart[] = [
                    "product" => $product,
                    #"age"=>$size,
                    "quantity" => $quantity
                ];
               
            }
        }
        # Je retourne cette var pour l'utiliser dans le twig du CartController
        return $dataCart;
    }

    # Création d'un panier dans la session
    # Fonction ajout que j'appelle dans le controller
    public function add($id)
    {
        // On récupère le panier grace à la superGlobale $Session du navigateur
        $cart = $this->session->get("cart", []);
        
        # Si panier contient déjà id du pdt en question ajouter 1
        if(!empty($cart[$id])){
            $cart[$id]++;
        # Sinon initialiser à 1
        }else{
            $cart[$id] = 1;
        }

        // On sauvegarde dans la session
        $this->session->set("cart", $cart);
    }

    # Retirer un produit
    public function decrease($id)
    {
        # On récupère le panier actuel
        $cart = $this->session->get("cart", []);

        # Si id du pdt existant 
        if(!empty($cart[$id])){
            # Et Si cet id sup à 1
            if($cart[$id] > 1){
                # Alors retire en 1
                $cart[$id]--;
            }else{
                # Sinon retire le pdt
                unset($cart[$id]);
            }
        }

        # On sauvegarde dans la session
        $this->session->set("cart", $cart);
    }

    # Suppression de tous les produits identiques d'une meme ligne
    public function delete($id)
    {
        # On récupère le panier actuel
        $cart = $this->session->get("cart", []);

        # Si id produit ds panier 
        if(!empty($cart[$id])){
            # Alors supprime le
            unset($cart[$id]);
        }

        # On sauvegarde dans la session
        $this->session->set("cart", $cart);

    }

    public function remove()
    {
        return $this->session->remove('cart');
    }
}