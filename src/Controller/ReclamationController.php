<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use  Symfony\Component\Serializer\Normalizer\NormaliserInterface;
use  Symfony\Component\Serializer\Annotation\Groups;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\UtilisateurRepository;


#[Route('/reclamation')]
class ReclamationController extends AbstractController
{      
    //metier pagination :
    
   


     //fin pagination 
       

     //metier tri :






     //fin tri 

      //metier recherche avancée :
 
         
 

     //fin recherche avancée 

     //metier historique :




     //fin historique 

    //JSON

    #[Route("/allreclamations", name: "list")]
    public function getReclamations(ReclamationRepository $repo, NormalizerInterface $normalizer)
    {
        $reclamations = $repo->findAll();
        $reclamationsNormalises = $normalizer->normalize($reclamations, 'json',['groups'=>"reclamations"]);
        $json = json_encode($reclamationsNormalises);
        return new Response($json);
    }
   #[Route("/Reclamation/{id}", name: "Reclamation")]

   public function ReclamationId($id, NormaliserInterface $normalizer,ReclamationRepository $repo ) 
   {
         $Reclamation = $repo->find($id);
         $ReclamationNormalises = $normalizer->normalize($Reclamation, 'json',['groups'=>"reclamations"]);
         return new Response(json_encode(ReclamationNormalises));


   }
   


   #[Route("addReclamationJSON/new", name: "addReclamationJSON")]
 
   public function addReclamationJSON(Request $req, NormalizerInterface $Normalizer , EntityManagerInterface $entityManager  )

   {

         $em = $this->getDoctrine()->getManager();
         $Reclamation = new Reclamation();
         $Reclamation->setDate($req->get('dateRec'));
         $Reclamation->setSujet($req->get('sujet'));
         $Reclamation->setContenu($req->get('contenu'));
         $Reclamation->setEtat($req->get('etat'));
         $em->persist($Reclamation);
         $em->flush();

         $jsonContent =  $Normalizer->normalize($Reclamation, 'json',['groups'=>"reclamations"]);
         return new Response(json_encode($jsonContent));

         
   }

   #[Route("updateReclamationJSON/new" , name: "updateReclamationJSON")]
 
   public function updateReclamationJSON(Request $req ,$idc, NormalizerInterface $Normalizer,EntityManagerInterface $entityManager )

   {

         $em = $this->getDoctrine()->getManager();
         $Reclamation = $em->getRepository(Reclamation::class)->find($id);
         $Reclamation->setDate($req->get('dateRec'));
         $Reclamation->setSujet($req->get('sujet'));
         $Reclamation->setContenu($req->get('contenu'));
         $Reclamation->setEtat($req->get('etat'));
         $em->persist($Reclamation);
         $em->flush();

         $jsonContent =  $Normalizer->normalize($Reclamation, 'json',['groups'=>"reclamations"]);
         return new Response("Reclamation update successfuly". json_encode($jsonContent));

         
   }
   
   #[Route("deleteReclamationJSON/new", name: "updateReclamationJSON")]
 
   public function deleteReclamationJSON(Request $req,$id, NormalizerInterface $Normalizer,EntityManagerInterface $entityManager   )

   {
        
          $em = $this->getDoctrine()->getManager();
          $Reclamation = $em->getRepository(Reclamation::class)->find($id);
          $em->remove($Reclamation);
          $em->flush(); 
          
          $jsonContent =  $Normalizer->normalize($Reclamation, 'json',['groups'=>"reclamations"]);
          return new Response("Reclamation deleted successfuly". json_encode($jsonContent));
 



   }

    //FinJson
    
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(
        ReclamationRepository $reclamationRepository,
        Request $request, 
        PaginatorInterface $paginator
        ,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        $data=$reclamationRepository->findAll();

        $reclamation=$paginator->paginate(
            $data,
            $request->query->getInt('page',1),
            6
        );

        return $this->render('back/GestionReclamation/index.html.twig', [
            'reclamations' => $reclamation,
            'utilisateur' => $utilisateur
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ReclamationRepository $reclamationRepository): Response
    { $date = new \DateTime('now');
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setDateRec($date);
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionReclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('back/GestionReclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    

    #[Route('/ordnom', name: 'order_By_Rec', methods: ['GET'])]
    public function Torder_By_NomJSON( ReclamationRepository $reclamationRepository)
    {
      
        return $this->render('back/GestionReclamation/index.html.twig', [
            'reclamation' => $reclamationRepository->order_By_Rec(),
        ]);
        
    }

    

   


    #[Route('/reclamation/TriPAB', name: 'app_tri_D')]
    public function TriD(ReclamationRepository $repository,Request $request,)
    {
      
            $reclamation = $repository->orderBysujetDESC();
            
        return $this->render("back/GestionReclamation/index.html.twig", array('reclamation' => $reclamation));
    }

    

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamationRepository->save($reclamation, true);

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('back/GestionReclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, ReclamationRepository $reclamationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $reclamationRepository->remove($reclamation, true);
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
