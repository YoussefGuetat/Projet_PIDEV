<?php

namespace App\Controller;

use App\Entity\Contrat;
use App\Entity\RendezVous;
use App\Form\ContratType;
use App\Repository\ContratRepository;
use App\Repository\RendezVousRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;


#[Route('/contrat')]
class ContratController extends AbstractController
{
    #[Route('/', name: 'app_contrat_index', methods: ['GET'])]
    public function index(ContratRepository $contratRepository): Response
    {
        return $this->render('back/GestionRendezVous/Contrat-list.html.twig', [
            'contrats' => $contratRepository->findAll(),
        ]);
    }
    
    #[Route('/new', name: 'app_contrat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ContratRepository $contratRepository  ): Response
    {
        $contrat = new Contrat();

        $contrat->setdateContart(new \DateTime('now'));
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);
        $filesystem = new Filesystem();

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('image')->getData();
            $formData = $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $contratRepository->save($contrat, true);
            $destination = 'contratimage/image'.strval($contrat->getId()).'.png';
            $contrat->setimage($destination);
            $filesystem->copy($sourcePath,$destination);
            $contratRepository->save($contrat, true);

            return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionRendezVous/create-contrat.html.twig', [
            'contrat' => $contrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_show', methods: ['GET'])]
    public function show(Contrat $contrat): Response
    {
        return $this->render('back/GestionRendezVous/Contrat-details.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    #[Route('/front/{id}', name: 'app_contrat_show', methods: ['GET'])]
    public function show1(Contrat $contrat): Response
    {
        return $this->render('front/GestionRendezVous/Contrat.html.twig', [
            'contrat' => $contrat,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_contrat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contrat $contrat, ContratRepository $contratRepository): Response
    {
        $form = $this->createForm(ContratType::class, $contrat);
        $form->handleRequest($request);
        $filesystem = new Filesystem();


        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('image')->getData();
            $formData = $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $contratRepository->save($contrat, true);
            $destination = 'contratimage/image'.strval($contrat->getId()).'.png';
            $contrat->setimage($destination);
            $filesystem->copy($sourcePath,$destination);
            $contratRepository->save($contrat, true);

            return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionRendezVous/Contrat-modifie.html.twig', [
            'contrat' => $contrat,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_delete', methods: ['POST'])]
    public function delete(Request $request, Contrat $contrat, ContratRepository $contratRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contrat->getId(), $request->request->get('_token'))) {
            $contratRepository->remove($contrat, true);
        }

        return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
    }      
}
