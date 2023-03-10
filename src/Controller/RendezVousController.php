<?php

namespace App\Controller;
use App\Entity\Utilisateur;
use App\Entity\RendezVous;
use App\Form\RendezVousType;
use App\Repository\RendezVousRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\AnnonceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Twilio\Rest\Client;
use Dompdf\Dompdf as Dompdf ;
use Dompdf\Options as Options ;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/rendez/vous')]
class RendezVousController extends AbstractController
{
   
    #[Route('/', name: 'app_rendez_vous_index', methods: ['GET'])]
    public function index(Request $request , RendezVousRepository $rendezVousRepository, PaginatorInterface $paginator,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');

        if ($request->isXmlHttpRequest()) { // If it's an AJAX request
            $page = $request->query->getInt('page', 1);
            $rdv = $paginator->paginate(
                $rendezVousRepository->findAll(),
                $page,
                7
            );
            $html = $this->renderView('back/GestionRendezVous/RendezVous-list.html.twig', [
                'rendez_vouses' => $rdv,
                'utilisateur' => $utilisateur
            ]);
            return new JsonResponse($html);
        } else {    
            $rdv = $paginator->paginate(
                $rendezVousRepository->findAll(),
                $request->query->getInt('page', 1),
                7
            );
            return $this->render('back/GestionRendezVous/RendezVous-list.html.twig', [
                'rendez_vouses' => $rdv,
                     'utilisateur' => $utilisateur
            ]);
        }
    }

   

   
    

    #[Route('/TriR', name: 'app_post_index', methods: ['GET'])]
    public function indexxx(RendezVousRepository $rendezVousRepository,Request $request): Response
    {
  $postss=$rendezVousRepository->getPostDesc();
  
        return $this->render('back/GestionRendezVous/RendezVous-list.html.twig', [
            'posts' => $postss,
            
        ]);
    }

    #[Route('/ordnom', name: 'order_By_Rdv', methods: ['GET'])]
    public function Torder_By_NomJSON( RendezVousRepository $RendezVousRepository)
    {
      
        return $this->render('back/GestionRendezVous/RendezVous-list.html.twig', [
            'rendez_vouses' => $RendezVousRepository->order_By_Rdv(),
        ]);
        
    }

    #[Route('/ordnomm', name: 'order_By_message', methods: ['GET'])]
    public function Torder_BY_NomJSONNN( RendezVousRepository $RendezVousRepository)
    {
      
        return $this->render('back/GestionRendezVous/RendezVous-list.html.twig', [
            'rendez_vouses' => $RendezVousRepository->order_By_message(),
        ]);
        
    }

    #[Route('/sms', name: 'app_sms')]
    function envoyerSMS(RendezVousRepository $repository, Request $request)
    {
        
        
        $repository->sms();
        $this->addFlash('Danger', 'SMS envoyée avec succées');
        return $this->redirectToRoute('app_rendez_vous_index');
    }

    
    #[Route('/{id}/accept', name:'rendez_vous_accept')]
    public function acceptRendezVous(Request $request, RendezVous $rendezVous): JsonResponse
    {
        $entityManager = $this->getDoctrine()->getManager();
        $rendezVous->setEtat('accepted');
        $entityManager->flush();
        
        $response = ['success' => true];
        return new JsonResponse($response);
    }

   


    

    
   /* #[Route('/sort', name:'app_sort_ajax', methods: ['GET'], options:['expose'=true])]
    public function sortAction(RendezVousRepository $rendezVousRepository) 
    {
        $rendezVous = $this->getDoctrine()
            ->getRepository(rendezVous::class)
            ->findBy([], ['date' => 'ASC']);

        $data = [];

        foreach ($rendezVous as $rendezVous) {
            $data[] = [
                'id' => $rendezVous->getId(),
                'etat' => $rendezVous->getEtat(),
                'message' => $rendezVous->getMessage(),
                'date' => $rendezVous->getDate()->format('Y-m-d H:i:s')
            ];
        }

        return new JsonResponse($data);
    }*/

    #[Route('/new/{id}', name: 'app_rendez_vous_new', methods: ['GET', 'POST'])]
    public function new($id,Request $request, RendezVousRepository $rendezVousRepository,AnnonceRepository $annonceRepository,UtilisateurRepository $utilisateurRepository): Response
    {
        $data = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data['id'] ?? '');
        $rendezVou = new RendezVous();
        $form = $this->createForm(RendezVousType::class, $rendezVou);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rendezVou->setAnnonce($annonceRepository->find($id));
            $rendezVou->addUtilsateur($utilisateur);
            $rendezVousRepository->save($rendezVou, true);

            return $this->redirectToRoute('app_rendez_vous_show', ['id' => $rendezVou->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionRendezVous/rendez-vous.html.twig', [
            'rendez_vou' => $rendezVou,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
       
        ]);
    }

    #[Route('/{id}', name: 'app_rendez_vous_show', methods: ['GET'])]
    public function show(RendezVous $rendezVou): Response
    {
        $data = $this->get('session')->get('data', []);
        return $this->render('front/GestionRendezVous/show_RendezVous.html.twig', [
            'rendez_vou' => $rendezVou,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
            
        ]);
    }

    #[Route('/{id}/edit', name: 'app_rendez_vous_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, RendezVous $rendezVou, RendezVousRepository $rendezVousRepository): Response
    {
        $data = $this->get('session')->get('data', []);
        $form = $this->createForm(RendezVousType::class, $rendezVou);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            $rendezVousRepository->save($rendezVou, true);
            

            return $this->redirectToRoute('app_rendez_vous_show', ['id' => $rendezVou->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionRendezVous/edit_RendezVous.html.twig', [
            'rendez_vou' => $rendezVou,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }

    #[Route('/{id}', name: 'app_rendez_vous_delete', methods: ['POST'])]
    public function delete(Request $request, RendezVous $rendezVou, RendezVousRepository $rendezVousRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rendezVou->getId(), $request->request->get('_token'))) {
            $rendezVousRepository->remove($rendezVou, true);
        }

        return $this->redirectToRoute('app_rendez_vous_new', [], Response::HTTP_SEE_OTHER);
    }


    
       
    

   
    


    



    

   
}?>
