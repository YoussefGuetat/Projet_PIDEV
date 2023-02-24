<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\Evenement1Type;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
#[Route('/evenement')]
class EvenementController extends AbstractController
{
    #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('back/GestionEvent/event-list.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }
    #[Route('/front', name: 'app_evenement_front', methods: ['GET'])]
    public function front(EvenementRepository $evenementRepository): Response
    {
        return $this->render('front/GestionEvent/evenement.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvenementRepository $evenementRepository): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(Evenement1Type::class, $evenement);
        $form->handleRequest($request);
        $filesystem = new Filesystem();
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('photo')->getData();
            $formData = $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $evenementRepository->save($evenement, true);
            $destination = 'eventphoto/photo'.strval($evenement->getId()).'.png';
            $evenement->setPhoto($destination);
            $filesystem->copy($sourcePath,$destination);
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionEvent/create-an-event.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement): Response
    {
        return $this->render('back/GestionEvent/event-detail.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        $form = $this->createForm(Evenement1Type::class, $evenement);
        $form->handleRequest($request);
        $filesystem = new Filesystem();
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('photo')->getData();
            $formData = $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $evenementRepository->save($evenement, true);
            $destination = 'eventphoto/photo'.strval($evenement->getId()).'.png';
            $evenement->setPhoto($destination);
            $filesystem->copy($sourcePath,$destination);
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionEvent/create-an-event.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_evenement_delete')]
    public function delete(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
            $evenementRepository->remove($evenement, true);
        

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }
}
