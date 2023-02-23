<?php

namespace App\Controller;

use App\Entity\Annonce;
use App\Entity\Bmc;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use App\Repository\BmcRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Filesystem\Filesystem;


#[Route('/annonce')]
class AnnonceController extends AbstractController
{
    #[Route('/sandbox', name: 'app_annonce_sandbox', methods: ['GET'])]
    public function sandbox(): Response
    {
        return $this->render('front/homeC.html.twig');
    }





    #[Route('/frontannonce', name: 'app_annonce_index_front', methods: ['GET'])]
    public function index(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('front/GestionAnnonce/listeAnnonces.html.twig', [
            'annonces' => $annonceRepository->findAll(),
        ]);
    }


    #[Route('/backannonce', name: 'app_annonce_index_back', methods: ['GET'])]
    public function indexback(AnnonceRepository $annonceRepository): Response
    {
        return $this->render('back/GestionAnnonce/annonces.html.twig', [
            'annonces' => $annonceRepository->findAll(),
        ]);
    }

    #[Route('/newannonce', name: 'app_annonce_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnnonceRepository $annonceRepository): Response
    {
        $annonce = new Annonce();
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);


       

        $filesystem = new Filesystem();
        if ($form->isSubmitted() && $form->isValid()) {
            $annonceRepository->save($annonce, true);


            $uploadedFile = $form->get('image')->getData();
            $formData =  $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $destinationPath = 'uploads/photo'.strval($annonce->getId()).'.png';
            $annonce->setImage($destinationPath);
            $filesystem->copy($sourcePath, $destinationPath);
        
            $annonceRepository->save($annonce, true);

            return $this->redirectToRoute('app_bmc_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionAnnonce/annonceentrepreneur.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_annonce_show', methods: ['GET'])]
    public function show(Annonce $annonce,BmcRepository $repo): Response
    {
        return $this->render('front/GestionAnnonce/annonceDetails.html.twig', [
            'annonce' => $annonce,
            'bmc' => $repo->findAll(),
        ]);
    }


    #[Route('/back/{id}', name: 'app_annonce_show_back', methods: ['GET'])]
    public function showback(Annonce $annonce,BmcRepository $repo): Response
    {
        return $this->render('back/GestionAnnonce/annoncedetails.html.twig', [
            'annonce' => $annonce,
            'bmc' => $repo->findAll(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_annonce_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository): Response
    {
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $annonceRepository->save($annonce, true);

            return $this->redirectToRoute('app_annonce_index_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionAnnonce/annonceentrepreneur.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_annonce_delete_front', methods: ['POST'])]
    public function delete(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository): Response
    {
   
        if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
            $annonceRepository->remove($annonce, true);
        }

        return $this->redirectToRoute('app_annonce_index_front', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/back/delete/{id}', name: 'app_annonce_delete_back', methods: ['POST'])]
    public function deleteback(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository): Response
    {
   
        if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
            $annonceRepository->remove($annonce, true);
        }

        return $this->redirectToRoute('app_annonce_index_back', [], Response::HTTP_SEE_OTHER);
    }





    #[Route('/domaine/{domaine}', name: 'app_annonce_domaine', methods: ['GET'])]
 
    public function annoncebydomaine(string $domaine): Response
{
    $annonces = $this->getDoctrine()
        ->getRepository(Annonce::class)
        ->findBy(['domaine' => $domaine]);

    if (empty($annonces)) {
        // Annonce object not found
        return $this->render('front/GestionAnnonce/annonceerror.html.twig', [
            'domaine' => $domaine,
        ]);
    }

    return $this->render('front/GestionAnnonce/listeAnnonces.html.twig', [
        'annonces' => $annonces,
    ]);
}



}
