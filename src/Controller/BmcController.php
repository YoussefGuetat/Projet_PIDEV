<?php

namespace App\Controller;

use App\Entity\Bmc;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Form\BmcType;
use App\Repository\BmcRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UtilisateurRepository;

#[Route('/bmc')]
class BmcController extends AbstractController
{
    #[Route('/', name: 'app_bmc_index', methods: ['GET'])]
    public function index(BmcRepository $bmcRepository): Response
    {
        return $this->render('front/GestionAnnonce/tableaubmc.html.twig', [
            'bmcs' => $bmcRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bmc_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BmcRepository $bmcRepository): Response
    {
        $data = $this->get('session')->get('data', []);
        $bmc = new Bmc();
        $form = $this->createForm(BmcType::class, $bmc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bmcRepository->save($bmc, true);

            return $this->redirectToRoute('app_annonce_index_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionAnnonce/bmc.html.twig', [
            'bmc' => $bmc,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }

    #[Route('/{id}', name: 'app_bmc_show', methods: ['GET'])]
    public function show(Bmc $bmc): Response
    {
        $data = $this->get('session')->get('data', []);
        return $this->render('front/GestionAnnonce/tableaubmc.html.twig', [
            'bmc' => $bmc,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }


    #######################################################################################
    #[Route('/{id}/print', name: 'pdf', methods: ['POST'])]
public function printbmc(Bmc $bmc): Response
    {
         // Render the view to HTML
         $html = $this->renderView('front/GestionAnnonce/pdf.html.twig', [
            'title' => 'My PDF',
            'bmc' => $bmc,
            
        ]);

        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Load the HTML into the Dompdf instance
        $dompdf->loadHtml($html);

        // Set the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF
        $dompdf->render();

        // Generate the response containing the PDF
        $response = new Response($dompdf->output());
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment;filename="bmc_' . $bmc->getId() . '.pdf"');

        return $response;
    }

############################################################################################################
    #[Route('/annonce/back/bmc/{id}', name: 'app_bmc_show_back', methods: ['GET'])]
    public function showback(Bmc $bmc,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        return $this->render('back/GestionAnnonce/bmc.html.twig', [
            'bmc' => $bmc,
            'utilisateur' => $utilisateur
        ]);
    }
 


    #[Route('/{id}/edit', name: 'app_bmc_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bmc $bmc, BmcRepository $bmcRepository): Response
    {
        $form = $this->createForm(BmcType::class, $bmc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bmcRepository->save($bmc, true);

            return $this->redirectToRoute('app_bmc_show_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionAnnonce/bmc.html.twig', [
            'bmc' => $bmc,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bmc_delete', methods: ['POST'])]
    public function delete(Request $request, Bmc $bmc, BmcRepository $bmcRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bmc->getId(), $request->request->get('_token'))) {
            $bmcRepository->remove($bmc, true);
        }

        return $this->redirectToRoute('app_bmc_new', [], Response::HTTP_SEE_OTHER);
    }
}
