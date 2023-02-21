<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\AdminType;
use App\Form\UtilisateurType;
use App\Form\PhotoFormType;
use App\Form\ChangePasswordType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Doctrine\ORM\EntityManagerInterface;

class UtilisateurController extends AbstractController
{
    #[Route('/zz', name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_utilisateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);

            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }
  
    #[Route('/editU/{id}', name: 'app_editU', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateurRepository->save($utilisateur, true);
            $id = $utilisateur->getId();
            return $this->redirectToRoute('app_profile',['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionUtilisateur/modifierProfile.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }

    #[Route('/z{id}', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $utilisateurRepository->remove($utilisateur, true);
        }

        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/acceuil', name: 'app_acceuil')]
    public function index1(): Response
    {
        $data = $this->get('session')->get('data', []);
        return $this->render('front/homeC.html.twig', [
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }
    #[Route('/profile/{id}', name: 'app_profile')]
    public function profile(Utilisateur $utilisateur): Response
    {
        $data = $this->get('session')->get('data', []);
        return $this->render('front/GestionUtilisateur/profile.html.twig', [
            'utilisateur' => $utilisateur,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
        ]);
    }
    #[Route('/', name: 'app_landing')]
    public function landing(): Response
    {
        return $this->render('front/GestionUtilisateur/home-2.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/loginn', name: 'app_loginn')]
    public function loginn(): Response
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
    #[Route('/changepwd/{id}', name: 'app_changepwd')]
    public function changemdp(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository,UserPasswordEncoderInterface $passwordEncoder): Response
    {      
        $form = $this->createFormBuilder()
        ->add('currentPassword', PasswordType::class, [
            'label' => 'Ancien mot de passe',
        ])
        ->add('newPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'Veuillez saisir un nouveau mot de passe',
            'first_options'  => ['label' => 'nouveau password'],
            'second_options' => ['label' => 'confirme nouveau password'],
        ])
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $currentPassword = $data['currentPassword'];
        $newPassword = $data['newPassword'];
        if ($passwordEncoder->isPasswordValid($utilisateur, $currentPassword)) {
            $encodedPassword = $passwordEncoder->encodePassword($utilisateur, $newPassword);
            $utilisateur->setPassword($encodedPassword);
            $utilisateurRepository->save($utilisateur, true);
            $id = $utilisateur->getId();
            return $this->redirectToRoute('app_profile',['id' => $id], Response::HTTP_SEE_OTHER);
        } else {
            $form->addError(new FormError('The current password is incorrect.'));
        }
        }


        return $this->renderForm('front/GestionUtilisateur/changer_Mdp.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }
    #[Route('/forget', name: 'app_forget')]
    public function forget(Request $request ,UtilisateurRepository $utilisateurRepository,MailerInterface $mailer): Response
    {
        $form = $this->createFormBuilder()
        ->add('email')
        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateur = $utilisateurRepository->findOneBy(['email' => $form->get('email')->getData()]);
            if($utilisateur !== null){
                $bytes = random_bytes(16);
                $token = bin2hex($bytes);
                $utilisateur->setToken($token);
                $utilisateurRepository->save($utilisateur, true);
                $resetUrl = $this->generateUrl('app_resetpwd', ['token' => $token], UrlGeneratorInterface::ABSOLUTE_URL);
                $email = (new Email())
                ->from('guetat1youssef@gmail.com')
                ->to($utilisateur->getEmail())
                ->subject('forget-password')
                ->text($resetUrl)
                ->html('<p>See Twig integration for better HTML integration!</p>');
    
            $mailer->send($email);
            }
            return $this->redirectToRoute('app_forget',[], Response::HTTP_SEE_OTHER);
        }
        return $this->render('front/GestionUtilisateur/forget-password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/resetpwd', name: 'app_resetpwd')]
    public function resetpwd(Request $request,UtilisateurRepository $utilisateurRepository,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $utilisateur = $utilisateurRepository->findOneBy(['token' => $request->query->get('token')]);
        $form = $this->createFormBuilder()
        ->add('newPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'Veuillez saisir un nouveau mot de passe',
            'first_options'  => ['label' => 'nouveau mot de passe'],
            'second_options' => ['label' => 'confirme nouveau mot de passe'],
        ])
        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $newPassword = $data['newPassword'];
                $encodedPassword = $passwordEncoder->encodePassword($utilisateur, $newPassword);
                $utilisateur->setPassword($encodedPassword);
                $utilisateur->setToken(null);
                $utilisateurRepository->save($utilisateur, true);
                $id = $utilisateur->getId();
                return $this->redirectToRoute('app_login',[], Response::HTTP_SEE_OTHER);
            }
        return $this->render('front/GestionUtilisateur/reset-password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/photo/{id}', name: 'app_photo')]
    public function photo(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository): Response
    {      
        $form = $this->createForm(PhotoFormType::class, $utilisateur);
        $form->handleRequest($request);
        $data = $this->get('session')->get('data', []);
        $filesystem = new Filesystem();

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('photo')->getData();
            $formData =  $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $destinationPath = 'userphotos/photo'.strval($data['id'] ?? '').'.png';
            $utilisateur->setPhoto($destinationPath);
            $filesystem->copy($sourcePath, $destinationPath);
            $utilisateurRepository->save($utilisateur, true);
            $id = $utilisateur->getId();
            return $this->redirectToRoute('app_profile',['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionUtilisateur/changephoto.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
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
    public function dashListe(UtilisateurRepository $utilisateurRepository,Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $data = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data['id'] ?? '');
        $user = new Utilisateur();
        $form = $this->createForm(AdminType::class, $user);
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

            return $this->redirectToRoute('app_dashListe',[], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('back/GestionUtilisateur/followers.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
            'utilisateur' => $utilisateur,
            'registrationForm' => $form->createView(),
        ]);
    }
    #[Route('/profilDetail/{id}', name: 'app_profilDetail')]
    public function dashprofiledetail(Utilisateur $utilisateur): Response
    {
        return $this->render('back/GestionUtilisateur/profile1.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
    #[Route('/monprofil', name: 'app_monprofil')]
    public function dashmonprofile(Request $request,UtilisateurRepository $repo,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $data = $this->get('session')->get('data', []);
        $utilisateur = $repo->find($data['id'] ?? '');

        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        $form1 = $this->createForm(PhotoFormType::class, $utilisateur);
        $form1->handleRequest($request);

        $form2 = $this->createFormBuilder()
        ->add('currentPassword', PasswordType::class, [
            'label' => 'Ancien mot de passe',
        ])
        ->add('newPassword', RepeatedType::class, [
            'type' => PasswordType::class,
            'invalid_message' => 'Veuillez saisir un nouveau mot de passe',
            'first_options'  => ['label' => 'nouveau password'],
            'second_options' => ['label' => 'confirme nouveau password'],
        ])
        ->getForm();
        $form2->handleRequest($request);


        if ($isModalOpen = strpos($request->getRequestUri(), '#modifier-modal') !== false){
            if ($form->isSubmitted() && $form->isValid()) {
                $repo->save($utilisateur, true);
                $id = $utilisateur->getId();
                return $this->redirectToRoute('app_monprofil',[], Response::HTTP_SEE_OTHER);
            } 
        }

        if ($isModalOpen = strpos($request->getRequestUri(), '#mdp-modal') !== false){
        if ($form2->isSubmitted() && $form2->isValid()) {
            $data = $form2->getData();
            $currentPassword = $data['currentPassword'];
            $newPassword = $data['newPassword'];
            if ($passwordEncoder->isPasswordValid($utilisateur, $currentPassword)) {
                $encodedPassword = $passwordEncoder->encodePassword($utilisateur, $newPassword);
                $utilisateur->setPassword($encodedPassword);
                $repo->save($utilisateur, true);
                $id = $utilisateur->getId();
                return $this->redirectToRoute('app_profile',['id' => $id], Response::HTTP_SEE_OTHER);
            } else {
                $form2->addError(new FormError('The current password is incorrect.'));
            }
            }
        }

        $filesystem = new Filesystem();
        if ($form1->isSubmitted() && $form1->isValid()) {
            $uploadedFile = $form1->get('photo')->getData();
            $formData =  $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $destinationPath = 'userphotos/photo'.strval($data['id'] ?? '').'.png';
            $utilisateur->setPhoto($destinationPath);
            $filesystem->copy($sourcePath, $destinationPath);
            $repo->save($utilisateur, true);
            $id = $utilisateur->getId();
            return $this->redirectToRoute('app_monprofil',[], Response::HTTP_SEE_OTHER);
        }
 
        return $this->render('back/GestionUtilisateur/profile.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
            'form1' => $form1->createView(),
            'form2' => $form2->createView(),
        ]);
    }
    #[Route('/dashActif/{id}', name: 'app_dashActif')]
    public function dashActif(Utilisateur $utilisateur,UtilisateurRepository $repo): Response
    {
        $utilisateur->setIsActif(true);
        $repo->save($utilisateur, true);
        return $this->render('back/GestionUtilisateur/profile1.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
    #[Route('/dashBloq/{id}', name: 'app_dashBloq')]
    public function dashBloq(Utilisateur $utilisateur,UtilisateurRepository $repo): Response
    {
        $utilisateur->setIsActif(false);
        $repo->save($utilisateur, true);
        return $this->render('back/GestionUtilisateur/profile1.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
   

}
