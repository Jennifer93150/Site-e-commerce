<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountPasswordController extends AbstractController
{
    /*private $entityManager;
    # Appel Doctrine afin de recup les entités
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager =  $entityManager;
    }*/

    /**
     * @Route("/compte/modifier-mot-de-passe", name="account_password")
     */
    public function index(Request $request, UserPasswordHasherInterface $passwordEncoder): Response
    {
        $user= $this->getUser();

        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            #recup ancien mdp
            $old_pwd = $form->get('old_password')->getData();
            # Si le mdp est valid, prend 2 param: 1er user, 2eme mdp actuel
            # si ca renvoi true c que les mdp sont identiques
            if($passwordEncoder->isPasswordValid($user, $old_pwd)){
                # recup new mdp
                $new_pwd = $form->get('new_password')->getData();
                # hachage mdp et remplacement de l'ancien 
                $user->setPassword(
                    $passwordEncoder->hashPassword($user, $new_pwd)
                );

                # Envoi à la bdd
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                # Message de succes
                $this->addFlash('success', 'La modification de votre mot de passe a bien été prise en compte.');

            }else{
                # Message de succes
                $this->addFlash('error', 'Votre mot de passe n\'est pas le bon.');

            }

            
        }

        return $this->render('account/password.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
