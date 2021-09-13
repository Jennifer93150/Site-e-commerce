<?php

namespace App\Controller;

use App\Classe\Mail;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderCancelController extends AbstractController
{
    private $entityManager;
    # Appel Doctrine afin de recup les entités
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager =  $entityManager;
    }

    /**
     * @Route("/compte/commande/erreur/{stripeSessionId}", name="order_cancel")
     */
    public function index($stripeSessionId): Response
    {
        $order = $this->entityManager->getRepository(Order::class)->findOneByStripeSessionId($stripeSessionId);
        
        # Si order n'existe pas ou que user de la order ne correspond pas à celui connecté redirection vers accueil
        if(!$order || $order->getUser() != $this->getUser())
        {
            return $this->redirectToRoute('home');
        }

        # Envoyer mail si echec paiement
        $content = "Bonjour ".$order->getUser()->getFirstname().", nous sommes désolés mais le paiement de votre commande n°" .$order->getReference()." a été refusé.";
        $mail = new Mail;
        #        mail que user à entré, nom du user,
        $mail->send($order->getUser()->getEmail(), $order->getUser()->getFirstname(), 'Message de confirmation d\'échec de commande', $content);

        return $this->render('order_cancel/index.html.twig', [
            'order'=>$order
        ]);
    }
}
