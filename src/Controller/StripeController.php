<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session as CheckoutSession;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class StripeController extends AbstractController
{
    # Fonction qui génère une SESSION STRIPE quand client clique sur payer
    /**
     * @Route("/compte/commande/create-session/{reference}", name="stripe_create_session")
     */
    public function index(EntityManagerInterface $entityManager, $reference)
    {
        $products_for_stripe = [];
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';
        #require 'vendor/autoload.php';
        #header('Content-Type: application/json');
        # J'appelle Doctrine pour recup la commande associée à la reference
        $order = $entityManager->getRepository(Order::class)->findOneByReference($reference);

        # Sécurité Si jamais pas de commande
        if(!$order){
            # Alors renvoi une erreur qui concerne la commande
            new JsonResponse(['error' => 'order']);
        }
        # ENREGISTREMENT PRODUITS DANS SESSION AVANT ENVOI VERS PAIEMENT STRIPE
        # Boucle sur données de chaque detail de commande (l'user, les produits, infos de livraison, details commande)
        foreach($order->getOrderDetails()->getValues() as $product){
            # Appel Doctrine pour recup données produit
            $product_object = $entityManager->getRepository(Product::class)->findOneByName($product->getProduct());
            # j'entre les produits ds le array pour la checkout_session
            $products_for_stripe[]=[
                'price_data' => [
                    'currency'=>'eur',
                    'unit_amount'=> $product->getPrice(),
                    'product_data'=>[
                        'name'=> $product->getProduct(),
                        'images'=> [$YOUR_DOMAIN."/uploads/".$product_object->getIllustration()],
                    ],
                ],
                'quantity' => $product->getQuantity(),
            ];
        }
        # ENREGISTREMENT TRANSPORTEUR DANS SESSION AVANT ENVOI VERS PAIEMENT STRIPE
        $products_for_stripe[]=[
            'price_data' => [
                'currency'=>'eur',
                'unit_amount'=> $order->getCarrierPrice(),
                'product_data'=>[
                    'name'=> $order->getCarrierName(),
                    'images'=> [$YOUR_DOMAIN],# Ajouter une img ou icone transporteur (colissimo...)
                ],
            ],
            'quantity' => 1,
        ];

        # Enregistre APIKEY (Test)
        Stripe::setApiKey('sk_test_51JVFJfLAcmw2xXj9AhV0wM3WXVKX98wlTUGuem4zSmc33IDfmqWE7uRcx6W5ac76er784uED3TVmQuIORht055oB00SA1pngSH');

        $checkout_session = CheckoutSession::create([
            'customer_email'=>$this->getUser()->getEmail(),
        'line_items' => [[
            $products_for_stripe
        ]],
        'payment_method_types' => [
            'card',
        ],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/compte/commande/merci/{CHECKOUT_SESSION_ID}',
        'cancel_url' => $YOUR_DOMAIN . '/compte/commande/erreur/{CHECKOUT_SESSION_ID}',
        ]);

        # Appel la propriété stripesessionid a qui j'attribue la session id qui vient d'ê crée juste au dessus
             # Afin qu'elle soit enregistrée en bdd
        $order->setStripeSessionId($checkout_session->id);
        $entityManager->flush();


        #header("HTTP/1.1 303 See Other");
        #header("Location: " . $checkout_session->url);

        # là je vais avoir besoin de renvoyer du Json
            # Pr ca j'appelle le service de symfony JsonResponse
            # Afin de renvoyer l'id de la session de verification de stripe
        $response =  new JsonResponse(['id' => $checkout_session->id]);
        return $response;
    }
}
