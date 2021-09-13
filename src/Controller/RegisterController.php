<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    private $entityManager;
    # Appel Doctrine afin de recup les entités
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager =  $entityManager;
    }

    /**
     * @Route("/inscription", name="register")
     */
    public function index(Request $request, UserPasswordHasherInterface $passwordEncoder): Response
    {
       
        $user = new User();
        $user->setRoles(['ROLE_USER']);
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            # recupere tte les infos 
            $user = $form->getData();
            # Recherche du mail que user vient de renseigner afin de verif si n'existe pas déjà en bdd
            $verif_email = $this->entityManager->getRepository(User::class)->findOneByEmail($user->getEmail());
            # Si adresse mail n'existe pas
            if(!$verif_email){ 
                // Alors encodage du mdp
                $user->setPassword(
                    $passwordEncoder->hashPassword($user, $form->get('password')->getData())
                );

                # Envoi à la bdd
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->flush();

                # Message de succes
                $this->addFlash('success', 'Génial, vous venez de créer un compte, connectez-vous dès maintenant !');

                # Envoi du mail de confirmation inscription
                $content = "Bonjour ".$user->getFirstname().", bienvenue sur Koababi, nous vous remercions pour la création de votre compte.";
                $mail = new Mail;
                #        mail que user à entré, nom du user,
                $mail->send($user->getEmail(), $user->getFirstname(), 'Message de confirmation d\'inscription', $content);
                
                return $this->redirectToRoute('app_login');
                
            }else{
                $this->addFlash('error', 'Désolé, cette adresse mail est déjà utilisée pour un compte.');
            }
            
        };

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
