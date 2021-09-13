<?php

namespace App\Controller;

use App\Classe\Cart;
use App\Entity\Address;
use App\Form\AddressType;
use App\Repository\AddressRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountAddressController extends AbstractController
{
    /**
     * @Route("/compte/adresse", name="account_address")
     */
    public function index(): Response
    {
        return $this->render('account_address/index.html.twig');
    }

    # Fonction ajout adresse de livraison
    /**
     * @Route("/compte/ajouter-adresse", name="add_address")
     */
    public function add(Cart $cart, Request $request): Response
    {
        $address = new Address;

        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $address->setUser($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();
            # Si j'ai des produits ds mon panier
            #dd($cart->get());
            if($cart->get()){
                # alors redirige à la commande
                return $this->redirectToRoute('order');
            }else{
                # Sinon redirige vers mes adresses
                return $this->redirectToRoute('account_address');
            }
            

        }
        return $this->render('account_address/form_address.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/compte/modifier-addresse/{id}", name="edit_address")
     */
    public function edit(Request $request, EntityManagerInterface $entityManager, $id): Response
    {
        $address = $entityManager->getRepository(Address::class)->find($id);
       #$address =$this->$addressRepository->find($id);

       # Si adresse existe ou que user lié à cette adresse n'est pas diff à l'user connecté 
       if(!$address || $address->getUser() != $this->getUser()){
           # alors rediretion
           return $this->redirectToRoute('account_address');
       }
        $form = $this->createForm(AddressType::class, $address);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('account_address');
           
        }
        return $this->render('account_address/form_address.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/compte/supprimer_adresse/{id<\d+>}", name="delete_address")
     */
    public function delete(Address $address)
    {
        $em = $this->getDoctrine()->getManager();
        # Si adresse existe ou que user lié à cette adresse n'est pas diff à l'user connecté 
        if($address && $address->getUser() == $this->getUser()){
            $em->remove($address);
            $em->flush();
        }
        # Redirection
        return $this->redirectToRoute('account_address');

    }
}
