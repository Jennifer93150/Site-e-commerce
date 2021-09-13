<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Entity\ResetPassword;
use App\Entity\User;
use App\Form\ResetPasswordType;
use App\Repository\ResetPasswordRepository;
use App\Repository\UserRepository;
use DateTime;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    # Fonction création demande de reinitialisation du mdp
    /**
     * @Route("/mot-de-passe-oublie", name="reset_password")
     */
    public function index(Request $request, UserRepository $userRepo): Response
    {
        # Afin eviter que le user déjà cô arrive sur cette page 
        # Si user déjà cô 
        if($this->getUser()){# Redirection vers accueil
            return $this->redirectToRoute('home');
        }

        # Request qui stocke ce qu'on lui envoi (email) permet de recup 
        # le contenu d'un attribut d'un input (<input type="email" value="" name="email", ici le name)
        if($request->get('email')){
            # Recup user grace à l'email qui vient d'être saisi
            $user =  $userRepo->findOneByEmail($request->get('email'));
            if($user){
                # 1 J'enregistre la demande de mdp oublié avec user, token, date
                # De cette facon on peut tracer les demandes des user pr mettre à jr leur mdp
                $reset_password = new ResetPassword();
                $reset_password->setUser($user);
                $reset_password->setToken(uniqid());
                $reset_password->setCreatedAt(new DateTimeImmutable());
                # Envoi à la bdd
                $em = $this->getDoctrine()->getManager();
                $em->persist($reset_password);
                $em->flush();
                
                # 2 Envoi d'un mail avec lien pr mettre à jr mdp 
                # param: nom de route (path), array $parameters = [], int $referenceType = UrlGeneratorInterface::ABSOLUTE_PATH
                $url = $this->generateUrl('update_password', [
                    'token'=> $reset_password->getToken()
                ]);

                #$domaine = "localhost:8000/";
                # Envoyer mail au client pr confirmer sa commande
                $linkPwd= "Bonjour, veuillez cliquez sur le lien suivant pour <a class='link-primary' href='".$url."'>réinitialiser votre mot de passe</a>";
                $mail = new Mail;
                #        mail que user à entré, nom du user,
                $mail->send($user->getEmail(), $user->getFullName(), 'Réinitialisation de votre mot de passe', $linkPwd);

                $this->addFlash('success', 'Vous allez recevoir un mail vous permettant de réinitialiser votre mot de passe.');
            }else{
                $this->addFlash('error', 'Cette adresse est inconnue.');
            }
        }
        return $this->render('reset_password/index.html.twig');
    }

    # fonction reinitailisation mdp
    /**
     * @Route("/mot-de-passe-oublie/{token}", name="update_password")
     */
    public function update(Request $request,  UserPasswordHasherInterface $passwordEncoder, ResetPasswordRepository $resetPasswordRepo, $token)
    {
        # Recuperation du token dans l'entité 
        $reset_password = $resetPasswordRepo->findOneByToken($token);
        # Si pas de demande de reinitialisation redirection
        if(!$reset_password){
            return $this->redirectToRoute('reset_password');
        }

        # Verification si le createdAt < à moins de 1h 
        # Instanciation d'un nouvel objet Datetime
        $now = new DateTime();
        # Si heure actuelle est sup à l'heure de la demande de reinit. à qui on ajoute +1h grace à modify: modifie l'heure
        if($now > $reset_password->getCreatedAt()->modify('+ 1 hour')){
            # Alors affiche msg que le lien à expiré
            $this->addFlash('notice', 'Votre demande de mot de passe a expiré, veuillez renouveller votre demande.');
            return $this->redirectToRoute('reset_password');
        }

        # Initialisation du Formulaire
        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);
        # Si form bon et validé
        if ($form->isSubmitted() && $form->isValid()) {
            # Recupération du mdp saisi ds input grace à getData()
            $new_pwd = $form->get('new_password')->getData();
            # Encodage mdp
            $reset_password->getUser()->setPassword(
                $passwordEncoder->hashPassword($reset_password->getUser(), $new_pwd)
            );
            # Envoi à la bdd
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            # Msg succes
            $this->addFlash('success', 'Votre mot de passe a bien été modifié.');
            return $this->redirectToRoute('app_login');

        }
        # Rendu de la page
        return $this->render('reset_password/update_password.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
