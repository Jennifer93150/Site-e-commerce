<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Classe\Mail;
use App\Entity\Order;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderSuccessController extends AbstractController
{
    /**
     * @Route("/compte/commande/merci/{stripeSessionId}", name="order_validate")
     */
    public function index(Cart $cart, $stripeSessionId, OrderRepository $orderRepo): Response
    {
        #$order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);
        $order = $orderRepo->findOneByStripeSessionId($stripeSessionId);
        
        # Si order n'existe pas ou que user de la order ne correspond pas à celui connecté redirection vers accueil
        if(!$order || $order->getUser() != $this->getUser())
        {
            return $this->redirectToRoute('home');
        }
        
        # Modifier le statut (propriété isPaid) de la commande en mettant 1 si pas deja payé
        # Si commande n'est PAS encore VALIDEE
        if(!$order->getIsPaid())
        {
            # Je vide le panier
            $cart->remove();
            # Je modifie statut paiement à payé
            $order->setIsPaid(1);
            # Insertion dans la BDD
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            # Envoyer mail au client pr confirmer sa commande
            $content = "Bonjour ".$order->getUser()->getFirstname().", nous vous remercions pour votre commande n°" .$order->getReference().". Votre colis sera livré par ".$order->getCarrierName()." à l'adresse ".$order->getDelivery(). ".";
            $mail = new Mail;
            #        mail que user à entré, nom du user,
            $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Message de confirmation de commande', $content);
        }
        
        return $this->render('order_success/index.html.twig',[
            'order'=>$order,
        ]);
    }
}
