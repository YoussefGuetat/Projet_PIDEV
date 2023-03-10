<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('front/GestionUtilisateur/signup.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route(path:'/SignupUserJson', name: 'app_SignupUserJson')]
    public function SignupjsonUser(Request $req,NormalizerInterface $Normalizer, UserPasswordHasherInterface $userPasswordHasher)
    {
       $em = $this->getDoctrine()->getManager();
       $utilisateur = new Utilisateur();
       $utilisateur->setEmail($req->get('email'));
       $utilisateur->setPassword(
        $userPasswordHasher->hashPassword(
            $utilisateur,
            $req->get('password')
        )
       );
       $utilisateur->setNom($req->get('nom'));
       $utilisateur->setPrenom($req->get('prenom'));
       $utilisateur->setRole($req->get('role'));
       $utilisateur->setIsActif(true);
       $em->persist($utilisateur);
       $em->flush();
       $utilisateurNormalises = $Normalizer->normalize($utilisateur,'json',['groups' => "utilisateur"]);
       $json = json_encode($utilisateurNormalises);
       return new Response($json);
    }
}
