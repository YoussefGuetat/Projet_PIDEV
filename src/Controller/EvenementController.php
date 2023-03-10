<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\Evenement1Type;
use App\Repository\EvenementRepository;
use Doctrine\ORM\Mapping\Id;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;



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
    public function front(EvenementRepository $evenementRepository, Request $request,PaginatorInterface $paginator): Response
    {
        if ($request->isXmlHttpRequest()) { // If it's an AJAX request
            $page = $request->query->getInt('page', 1);
            $events = $paginator->paginate(
                $evenementRepository->findAll(),
                $page,
                4
            );
            $html = $this->renderView('front/GestionEvent/evenement.html.twig', [
                'evenements' => $events,
            ]);
            return new JsonResponse($html);
        } else {    
            $events = $paginator->paginate(
                $evenementRepository->findAll(),
                $request->query->getInt('page', 1),
                4
            );
            return $this->render('front/GestionEvent/evenement.html.twig', [
                'evenements' => $events,
            ]);
        }
    }

    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvenementRepository $evenementRepository, MailerInterface $mailer): Response
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

           //emaaaail
            $email = (new Email())
            ->from('aymen@SandBox.com')
            ->to('Client@Client.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('voila un Nouveau Evenement')
            ->html(  $evenement->getNom().' Cest notre nouveau evenement viens nous rjoindre   ' );

            $mailer->send($email);
            

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionEvent/create-an-event.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }
    
    #[Route('/Excel/{id}', name: 'app_evenement_Excel')]
    public function exportEventAction(Evenement $evenement)
 {
    // Récupérer les données de l'événement à exporter
    $evenementData = $this->getDoctrine()->getRepository(Evenement::class)->find($evenement->getId());

    // Créer un nouveau fichier Excel
    $spreadsheet = new Spreadsheet();

    $sheet = $spreadsheet->getActiveSheet();

    // Écrire les données de l'événement dans le fichier Excel
    $sheet->setCellValue('A1', 'Nom de l\'événement');
    $sheet->setCellValue('B1', 'Date de l\'événement');
    $sheet->setCellValue('C1', 'Objet');
    $sheet->setCellValue('D1', 'Adresse');
    $sheet->setCellValue('E1', 'Description');
    $sheet->setCellValue('F1', 'Nombre de participants');

    $sheet->setCellValue('A2', $evenementData->getNom());
    $sheet->setCellValue('B2', $evenementData->getDateevent()->format('Y-m-d '));
    $sheet->setCellValue('C2', $evenementData->getObjet());
    $sheet->setCellValue('D2', $evenementData->getAdresse());
    $sheet->setCellValue('E2', $evenementData->getDescription());
    $sheet->setCellValue('F2', $evenementData->getNbrplaces());

    // Créer une réponse avec le fichier Excel
    $writer = new Xlsx($spreadsheet);

    $filename = 'event_' . $evenement->getId() . '.xlsx';

    $temp_file = tempnam(sys_get_temp_dir(), $filename);

    $writer->save($temp_file);

    $response = new BinaryFileResponse($temp_file);

    $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_ATTACHMENT, $filename);

    return $response;
    {

    }
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
    
    #[Route('/TriPAB', name: 'app_tri_D')]
    public function TriD(EvenementRepository $repository,Request $request,PaginatorInterface $paginator)
    {
        $evenement = $paginator->paginate(
            $evenement = $repository->orderByNbrDESC(),
            $request->query->getInt('page', 1),
                4);
        return $this->render("front/GestionEvent/evenement.html.twig", array("evenements" => $evenement));
    }
   
}



