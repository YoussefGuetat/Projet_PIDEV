<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Entity\Ticket;
use App\Entity\Utilisateur;
use App\Form\TicketType;
use App\Repository\EvenementRepository;
use App\Repository\TicketRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf as Dompdf ;
use Dompdf\Options as Options ;
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
use Doctrine\Persistence\ManagerRegistry;
use Mpdf\Mpdf;
use Endroid\QrCode\Writer\WriterInterface;
use BaconQrCode\Common\ErrorCorrectionLevel;

#[Route('/ticket')]
class TicketController extends AbstractController
{
    #[Route('/', name: 'app_ticket_index', methods: ['GET'])]
    public function index(TicketRepository $ticketRepository): Response
    {
        return $this->render('back/GestionEvent/Ticket-list.html.twig', [
            'tickets' => $ticketRepository->findAll(),
        ]);
    }

    #[Route('/new/{id}', name: 'app_ticket_new')]
    public function new(Request $request, TicketRepository $ticketRepository,Evenement $evenement): Response
    {
           $ticket = new Ticket();
            $form = $this->createForm(TicketType::class, $ticket);
            $form->handleRequest($request);
            $ticket->setEvenements($evenement);
            $ticket->setReference(strval($evenement->getId())."-".strval($evenement->getId()));
            $ticket->setDateReservation(new \DateTime('now'));
            $ticketRepository->save($ticket, true);
            if($form->isSubmitted())
           {
            return $this->redirectToRoute('app_ticket_show', ['id' => $ticket->getId()], Response::HTTP_SEE_OTHER);
           }
            return $this->renderForm('front/GestionEvent/Ticket.html.twig', [
                'ticket' => $ticket,
                'form' => $form,
            ]);

    }

    #[Route('/{id}', name: 'app_ticket_show', methods: ['GET'])]
    public function show(Ticket $ticket): Response
    {
        return $this->render('front/GestionEvent/Ticket-show.html.twig', [
            'ticket' => $ticket,
        ]);
    }
    
    #[Route('/Pdf/{id}', name: 'app_ticket_Pdf')]
    public function generatePdf(TicketRepository $Repository,$id,Ticket $ticket): Response
    {
        // Instantiate the Mpdf class with default constructor settings
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [120, 100], // Set the PDF format to match the ticket size
            'margin_top' => 0,
            'margin_bottom' => 0,
            'margin_left' => 0,
            'margin_right' => 0,
        ]);
        // Retrieve the Ticket object from the repository
        $ticket = $Repository->find($id);

        $imagePath = $this->getParameter('kernel.project_dir').'/public/front/images/looo.png';
        // Generate the HTML content of the PDF using a Twig template
        $ticket = $Repository->find($id);
        $html = $this->renderView('front/GestionEvent/pdf.html.twig', [
            'ticket' => $ticket,
            'imagePath' => $imagePath,
            
        ]);

        // Write the HTML content to the PDF
        $mpdf->WriteHTML($html);


        // Output the PDF as a response
        return new Response($mpdf->Output('ticket.pdf', 'D'), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="ticket.pdf"',
        ]);
    }
    
   
    #[Route('/{id}', name: 'app_ticket_delete', methods: ['POST'])]
    public function delete(Request $request, Ticket $ticket, TicketRepository $ticketRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->request->get('_token'))) {
            $ticketRepository->remove($ticket, true);
        }

        return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/QrCode/{id}', name: 'app_QrCode')]
    public function qrCode(ManagerRegistry $doctrine, $id, TicketRepository $ticket)
    {
        return $this->render("front/GestionEvent/QR.html.twig", ['id' => $id]);
    }

    #[Route('/QrCode/generate/{id}', name: 'app_qr_codes')]
    public function qrGenerator(ManagerRegistry $doctrine, $id, TicketRepository $ticket)
    {
        $em = $doctrine->getManager();
        $res = $ticket->find($id);
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
       
 
    }
    
}



