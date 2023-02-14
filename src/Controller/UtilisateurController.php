<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UtilisateurController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_utilisateur')]
    public function index(): Response
    {
        return $this->render('front/homeC.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('front/GestionUtilisateur/profile.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/', name: 'app_landing')]
    public function landing(): Response
    {
        return $this->render('front/GestionUtilisateur/home-2.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('front/GestionUtilisateur/login.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/signup', name: 'app_signup')]
    public function sigup(): Response
    {
        return $this->render('front/GestionUtilisateur/signup.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/changepwd', name: 'app_changepwd')]
    public function changemdp(): Response
    {
        return $this->render('front/GestionUtilisateur/changer_Mdp.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/modifierpro', name: 'app_modifierpro')]
    public function modifierpro(): Response
    {
        return $this->render('front/GestionUtilisateur/modifierProfile.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/forget', name: 'app_forget')]
    public function forget(): Response
    {
        return $this->render('front/GestionUtilisateur/forget-password.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/resetpwd', name: 'app_resetpwd')]
    public function resetpwd(): Response
    {
        return $this->render('front/GestionUtilisateur/reset-password.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/dashLog', name: 'app_dashLog')]
    public function dashLog(): Response
    {
        return $this->render('back/GestionUtilisateur/login.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/dashForget', name: 'app_dashForget')]
    public function dashForget(): Response
    {
        return $this->render('back/GestionUtilisateur/forgot-password.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/dashReset', name: 'app_dashReset')]
    public function dashReset(): Response
    {
        return $this->render('back/GestionUtilisateur/reset-password.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/dashListe', name: 'app_dashListe')]
    public function dashListe(): Response
    {
        return $this->render('back/GestionUtilisateur/followers.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
}
