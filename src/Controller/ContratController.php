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
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;
use Endroid\QrCode\Label\Font\NotoSans;
use Symfony\Component\Filesystem\Filesystem;
use Dompdf\Dompdf as Dompdf ;
use Dompdf\Options as Options ;
use App\Repository\UtilisateurRepository;



#[Route('/contrat')]
class ContratController extends AbstractController
{
    #[Route('/', name: 'app_contrat_index', methods: ['GET'])]
    public function index(ContratRepository $contratRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');

        return $this->render('back/GestionRendezVous/Contrat-list.html.twig', [
            'contrats' => $contratRepository->findAll(),
            'utilisateur' => $utilisateur
        ]);
    }

    #[Route('/ordnom', name: 'order_By_Contrat', methods: ['GET'])]
    public function Torder_By_NomJSON( ContratRepository $contratRepository)
    {
      
        return $this->render('back/GestionRendezVous/contrat-list.html.twig', [
            'contrat' => $contratRepository->order_By_Contrat(),
        ]);
        
    }


    
    #[Route('/new', name: 'app_contrat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ContratRepository $contratRepository,UtilisateurRepository $utilisateurRepository,RendezVousRepository $rdvr  ): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        $id = $request->get('id');
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
            $contrat->setRendezVous($rdvr->find($id));
            $contratRepository->save($contrat, true);

            return $this->redirectToRoute('app_contrat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionRendezVous/create-contrat.html.twig', [
            'contrat' => $contrat,
            'form' => $form,
            'utilisateur' => $utilisateur
        ]);
    }

    #[Route('/{id}', name: 'app_contrat_show', methods: ['GET'])]
    public function show(Contrat $contrat , RendezVousRepository $RendezVousRepository,UtilisateurRepository $utilisateurRepository ): Response
    {
        $data = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        return $this->render('back/GestionRendezVous/Contrat-details.html.twig', [
            'contrat' => $contrat,
            'utilisateur' => $utilisateur,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
            
        ]);
    }

 
    #[Route('/front/{id}', name: 'app_contrat_show_front', methods: ['GET'])]
    public function show1(Contrat $contrat): Response
    {
        $data = $this->get('session')->get('data', []);

        return $this->render('front/GestionRendezVous/show_contrat.html.twig', [
            'contrat' => $contrat,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }


    #[Route('/Pdf/{id}', name: 'app_contrat_Pdf')]
    public function pdf(ContratRepository $Repository,$id): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Open Sans');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $contrat = $Repository->find($id);
        $html = $this->renderView('front/GestionRendezVous/contrat_pdf.html.twig', [
            'contrat' => $contrat,
           
        ]);

         

        // Add header HTML to $html variable
        $headerHtml = '<h1 style="text-align: center; color: #FFFF00;">Bienvenue chez SandBox </h1>';
        $html = $headerHtml . $html;

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A6', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        // Send the PDF to the browser
        $response = new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="votrecontrat.pdf"',
        ]);

        return $response;
    }

    #[Route('/{id}/edit', name: 'app_contrat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Contrat $contrat, ContratRepository $contratRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');

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
            'utilisateur' => $utilisateur
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

    


    /*#[Route('/QrCode/{id}', name: 'app_QrCode')]
    public function qrCode(ManagerRegistry $doctrine, $id, TicketRepository $ticket)
    {
        return $this->render("front/GestionRendezVous/QR.html.twig", ['id' => $id]);
    }

    #[Route('/QrCode/generate/{id}', name: 'app_qr_codes')]
    public function qrGenerator(ManagerRegistry $doctrine, $id, TicketRepository $ticket)
    {
        $em = $doctrine->getManager();
        $res = $ticket->find($id);
      //  $qrcode = QrCode::create($res->getNom() .  " Et le prix est: " . $res->getPrix())
        $qrcode = QrCode::create( " - Votre referencre est:". $res->getReference() . " , et vous avez: " . $res->getNbrplace() . " place")

            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));
        $writer = new PngWriter();
        return new Response($writer->write($qrcode)->getString(),
            Response::HTTP_OK,
            ['content-type' => 'image/png']
        );

    }*/


   


}
