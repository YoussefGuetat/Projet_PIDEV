<?php

namespace App\Controller;

use App\Entity\Assist;
use App\Form\AssistType;
use App\Repository\AssistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UtilisateurRepository;

#[Route('/assist')]
class AssistController extends AbstractController
{
    #[Route('/', name: 'app_assist_index', methods: ['GET'])]
    public function index(AssistRepository $assistRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        return $this->render('back/GestionAssist/index.html.twig', [
            'assists' => $assistRepository->findAll(),
            'utilisateur' => $utilisateur
        ]);
    }

    #[Route('/new', name: 'app_assist_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AssistRepository $assistRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        $assist = new Assist();
        $form = $this->createForm(AssistType::class, $assist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $assistRepository->save($assist, true);

            return $this->redirectToRoute('app_assist_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionAssist/new.html.twig', [
            'assist' => $assist,
            'form' => $form,
            'utilisateur' => $utilisateur
        ]);
    }

    #[Route('/{id}', name: 'app_assist_show', methods: ['GET'])]
    public function show(Assist $assist,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        return $this->render('back/GestionAssist/show.html.twig', [
            'assist' => $assist,
            'utilisateur' => $utilisateur
        ]);
    }

    #[Route('/{id}/edit', name: 'app_assist_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Assist $assist, AssistRepository $assistRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        $form = $this->createForm(AssistType::class, $assist);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $assistRepository->save($assist, true);

            return $this->redirectToRoute('app_assist_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionAssist/edit.html.twig', [
            'assist' => $assist,
            'form' => $form,
            'utilisateur' => $utilisateur
        ]);
    }

    #[Route('/{id}', name: 'app_assist_delete', methods: ['POST'])]
    public function delete(Request $request, Assist $assist, AssistRepository $assistRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$assist->getId(), $request->request->get('_token'))) {
            $assistRepository->remove($assist, true);
        }

        return $this->redirectToRoute('app_assist_index', [], Response::HTTP_SEE_OTHER);
    }
}
