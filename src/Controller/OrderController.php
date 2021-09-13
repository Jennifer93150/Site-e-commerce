<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\OrderDetails;
use App\Form\OrderType;
use App\Repository\ProductRepository;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    # Function d'affichage du formulaire avec recup donnée user et panier
    /**
     * @Route("/compte/commande", name="order")
     */
    public function index(Cart $cart, ProductRepository $productRepo)
    {
        # Condition qui permet de verifier avant de commander si user a bien des addresses de livraison
        # Donc si pas adresse redirige vers ajout adresse
        if(!$this->getUser()->getAddresses()->getValues()){
            return $this->redirectToRoute('add_address');
        }
        # j'ajoute null en param car la methode creatForm attend en 2eme param une instance de la Class qui est liée au formulaire or ce form n'est pas lié à une class
        $form = $this->createForm(OrderType::class, null, [
            'user'=>$this->getUser()# ceci me permt coté formulaire de recup en option l'user 
        ]);
        # Ici je ne met pas isSubmited car je veux que la soumission et le traitement du form se fasse ds la fonction qui crée une commande

        return $this->render('order/index.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart->getFull($productRepo)
        ]);
    }

    # Function de création d'une commande apres validation formulaire précédent
    # la methods permettra d'accepter uniqt les user/requetes venant d'un post
    /**
     * @Route("/compte/commande/recapitulatif", name="order_recap", methods={"POST"})
     */
    public function add(Cart $cart, Request $request, ProductRepository $productRepo): Response
    {
        # j'ajoute null en param car la methode creatForm attend en 2eme param une instance de la Class qui est liée au formulaire or ce form n'est pas lié à une class
        $form = $this->createForm(OrderType::class, null, [
            'user'=>$this->getUser()# ceci me permt coté formulaire de recup en option l'user 
        ]);

        # Ecoute le formulaire
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
        # Enregistrer ma commande Order

            # Objet date pour avoir la date de la commande
            $date= new DateTimeImmutable(); 
            # Recup données du formulaire
                # ->getData()= sert a recup les données venant du form
            # Array de données du Transporteur selectionné
            $carriers= $form->get('carriers')->getData();
            # Array de données d'Adresse livraison selectionnée
            $delivery= $form->get('addresses')->getData();
           
            # Je selectionne les données precise ds le array Addresses
            $delivery_content = $delivery->getFirstName().' '.$delivery->getLastname();
            $delivery_content .= '<br/>'.$delivery->getPhone();

            # Le . avant = sert à la concaténation des données demandées
            $delivery_content .= '<br/>'.$delivery->getAddress();
            $delivery_content .= '<br/>'.$delivery->getPostal().' '.$delivery->getCity();
            $delivery_content .= '<br/>'.$delivery->getCountry();

            # Instanciation nouvel objet commande
            $order = new Order();
            # J crée la reference de la commande et J'attribue l'user connecté, la date, le transporteur, le prix.... à mon objet commande
            $reference = $date->format('dmY').'-'.uniqid(); # la ref aura une date et un id unique
            $order->setReference($reference);
            $order->setUser($this->getUser());
            $order->setCreatedAt($date);
            $order->setCarrierName($carriers->getName());
            $order->setCarrierPrice($carriers->getPrice());
            $order->setDelivery($delivery_content);
            $order->setIsPaid(0);# 0 = commande non validée
            
            # J'enregistre les données
            $em = $this->getDoctrine()->getManager();
            $em->persist($order);

        # Enregistrer mes produits OrderDetails
            # pour chaque produit itere et créer nouvelle entrée dans OrderDetails
            # Puis je veux faire le lien entre order et orderDetails
            foreach($cart->getFull($productRepo) as $product){
                # Instanciation nouvel objet detail de commande
                $orderDetails = new OrderDetails();
                # J'attribue à mon detail commande les données de la commande(order), le nom, la quantité, total
                $orderDetails->setMyOrder($order);
                $orderDetails->setProduct($product['product']->getName());
                $orderDetails->setQuantity($product['quantity']);
                $orderDetails->setPrice($product['product']->getPrice());
                $orderDetails->setTotal($product['product']->getPrice() * $product['quantity']);
                # J'enregistre les données
                $em->persist($orderDetails);
            }

            # Insertion dans la BDD
            $em->flush();

            # Je met le return ici pour eviter d'avoir une erreur au cas ou on taperai le chemin directement ds url
            # l'acces à cette page doit se faire uniquement après validation du formulaire de commande 
            return $this->render('order/add.html.twig', [
                'cart' => $cart->getFull($productRepo),
                # je passe a ma vue le transporteur, adresse livraison choisi par user et la ref 
                'carrier'=> $carriers,
                'delivery'=>$delivery_content,
                'reference'=>$order->getReference(),
            ]);
        }
        # Si le form n'est pas valide redirige vers le panier
        return $this->redirectToRoute('cart');
    }


}
