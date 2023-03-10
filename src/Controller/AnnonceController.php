<?php

namespace App\Controller;
use DateTime;
use Endroid\QrCode\QrCode;
use App\Entity\Annonce;
use App\Entity\Utilisateur;
use App\Entity\Bmc;
use App\Form\AnnonceType;
use App\Repository\AnnonceRepository;
use App\Repository\BmcRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Filesystem\Filesystem;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;;
use Symfony\Component\Serializer\SerializerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\PaginatorBundle\KnpPaginatorBundle;





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
        $data = $this->get('session')->get('data', []);
        return $this->render('front/GestionAnnonce/listeAnnonces.html.twig', [
            'annonces' => $annonceRepository->findAll(),
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }


    #[Route('/backannonce', name: 'app_annonce_index_back', methods: ['GET'])]
    public function indexback(AnnonceRepository $annonceRepository,UtilisateurRepository $utilisateurRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        if ($request->isXmlHttpRequest()) { // If it's an AJAX request
            $page = $request->query->getInt('page', 1);
            $annonces = $paginator->paginate(
                $annonceRepository->findAll(),
                $page,
                3
            );
            $html = $this->renderView('back/GestionAnnonce/annonces.html.twig', [
                'annonces' => $annonces,
                'utilisateur' => $utilisateur
            ]);
            return new JsonResponse($html);
        } else {
            $annonces = $paginator->paginate(
                $annonceRepository->findAll(),
                $request->query->getInt('page', 1),
                3
            );
            return $this->render('back/GestionAnnonce/annonces.html.twig', [
                'annonces' => $annonces,
                'utilisateur' => $utilisateur
            ]);
        }
    }

    #[Route('/newannonce', name: 'app_annonce_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnnonceRepository $annonceRepository,UtilisateurRepository $repo): Response
    {
        $data = $this->get('session')->get('data', []);
        $id=$data['id'] ?? '';
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
            $annonce->setUtilisateur($repo->find($id));
            $annonceRepository->save($annonce, true);

            return $this->redirectToRoute('app_bmc_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionAnnonce/annonceentrepreneur.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }



    #[Route('/newannonceinvest', name: 'app_annonce_new_invest', methods: ['GET', 'POST'])]
    public function newinvestisseur(Request $request, AnnonceRepository $annonceRepository): Response
    {
        $data = $this->get('session')->get('data', []);
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

            return $this->redirectToRoute('app_annonce_index_front', [], Response::HTTP_SEE_OTHER);
            
        }

        return $this->renderForm('front/GestionAnnonce/annonceinvestisseur.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }




    #[Route('/{id}', name: 'app_annonce_show', methods: ['GET'])]
    public function show(Annonce $annonce,BmcRepository $repo): Response
    {
        $data = $this->get('session')->get('data', []);
        return $this->render('front/GestionAnnonce/annonceDetails.html.twig', [
            'annonce' => $annonce,
            'bmc' => $repo->findAll(),
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }



    #[Route('/back/{id}', name: 'app_annonce_show_back', methods: ['GET'])]
    public function showback(Annonce $annonce,BmcRepository $repo,UtilisateurRepository $utilisateurRepository): Response
    {
        $data1 = $this->get('session')->get('data', []);
        $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
        return $this->render('back/GestionAnnonce/annoncedetails.html.twig', [
            'annonce' => $annonce,
            'bmc' => $repo->findAll(),
            'utilisateur' => $utilisateur
        ]);
    }


    #[Route('/{id}/edit', name: 'app_annonce_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository): Response
    {
        $data = $this->get('session')->get('data', []);
        $form = $this->createForm(AnnonceType::class, $annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $annonceRepository->save($annonce, true);

            return $this->redirectToRoute('app_annonce_index_front', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('front/GestionAnnonce/annonceentrepreneur.html.twig', [
            'annonce' => $annonce,
            'form' => $form,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }

    #[Route('/{id}', name: 'app_annonce_delete_front', methods: ['POST'])]
public function delete(Request $request, Annonce $annonce, AnnonceRepository $annonceRepository, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete'.$annonce->getId(), $request->request->get('_token'))) {
        $entityManager->remove($annonce);
        $entityManager->flush();
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



##############################################----METIERS----################################################################

    #[Route('/domaine/{domaine}', name: 'app_annonce_domaine', methods: ['GET'])]
 
    public function annoncebydomaine(string $domaine): Response
{
    $data = $this->get('session')->get('data', []);
    $annonces = $this->getDoctrine()
        ->getRepository(Annonce::class)
        ->findBy(['domaine' => $domaine]);

    if (empty($annonces)) {
        // Annonce object not found
        return $this->render('front/GestionAnnonce/annonceerror.html.twig', [
            'domaine' => $domaine,
            'nom' => $data['nom'] ?? '',
            'prenom' => $data['prenom'] ?? '',
            'idp' => $data['id'] ?? '',
        ]);
    }

    return $this->render('front/GestionAnnonce/listeAnnonces.html.twig', [
        'annonces' => $annonces,
        'nom' => $data['nom'] ?? '',
        'prenom' => $data['prenom'] ?? '',
        'idp' => $data['id'] ?? '',
    ]);
}
################################-----------------STATS-------------###################################

#[Route('/backannonce/stats', name: 'app_annonce_stats', methods: ['GET'])]
public function annoncestats(UtilisateurRepository $utilisateurRepository): Response
{
    $data1 = $this->get('session')->get('data', []);
    $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
    $entityManager = $this->getDoctrine()->getManager();
    $repository = $entityManager->getRepository(Annonce::class);

    // Count total number of annonces
    $totalAnnonces = $repository->createQueryBuilder('a')
        ->select('COUNT(a.id)')
        ->getQuery()
        ->getSingleScalarResult();

    // Query for all products and group them by category
    $query = $repository->createQueryBuilder('a')
        ->select('a.domaine as domaine, COUNT(a.id) as count, COUNT(a.id) / :total * 100 as percentage')
        ->setParameter('total', $totalAnnonces)
        ->groupBy('a.domaine')
        ->getQuery();
    $annonces = $query->getResult();

    // Calculate the counts array
    $counts = [];
    foreach ($annonces as $annonce) {
        $counts[$annonce['domaine']] = $annonce['count'];
    }

    return $this->render('front/GestionAnnonce/stats.html.twig', [
        'annonces' => $annonces,
        'counts' => $counts,
        'utilisateur' => $utilisateur
    ]);
}



###################################-------------LIKE/DISLIKE-------------###########################################3

#[Route('/annonce/{id}/like', name: 'app_annonce_like', methods: ['POST'])]
public function likeAnnonce(Request $request, Annonce $annonce): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $annonce->setLikeButton($annonce->getLikeButton() + 1);

    $entityManager->persist($annonce);
    $entityManager->flush();

    return $this->redirectToRoute('app_annonce_show', ['id' => $annonce->getId()]);
}


    

#[Route('/annonce/{id}/dislike', name: 'app_annonce_dislike', methods: ['POST'])]
public function dislikeAnnonce(Request $request, Annonce $annonce): Response
{
    $entityManager = $this->getDoctrine()->getManager();

    $annonce->setDislikeButton($annonce->getDislikeButton() + 1);

    $entityManager->persist($annonce);
    $entityManager->flush();

    return $this->redirectToRoute('app_annonce_show', ['id' => $annonce->getId()]);
}





private EntityManagerInterface $entityManager;

public function __construct(EntityManagerInterface $entityManager)
{
    $this->entityManager = $entityManager;
}





#[Route('/annonce/search', name: 'app_annonce_search_form', methods: ['GET'])]
public function searchForm(Request $request , AnnonceRepository $annonceRepository): Response
{
    $data = $this->get('session')->get('data', []);
    $form = $this->createFormBuilder()
        ->setAction($this->generateUrl('app_annonce_search_results'))
        ->add('titre', TextType::class, [
            'label' => 'Titre',
            'required' => false,
            'attr' => [
                'placeholder' => 'Search by titre',
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Search',
            'attr' => [
                'class' => 'btn-primary',
            ],
        ])
        ->getForm();

    return $this->render('front/GestionAnnonce/test.html.twig', [
        'form' => $form->createView(),
        'annonces' => $annonceRepository->findAll(),
        'nom' => $data['nom'] ?? '',
        'prenom' => $data['prenom'] ?? '',
        'idp' => $data['id'] ?? '',
    ]);
}





#[Route('/annonce/search/results', name: 'app_annonce_search_results', methods: ['GET'])]
public function searchResults(Request $request, AnnonceRepository $annonceRepository): Response
{
    $data = $this->get('session')->get('data', []);
    $form = $this->createFormBuilder()
        ->add('titre', TextType::class, [
            'label' => 'Titre',
            'required' => false,
            'attr' => [
                'placeholder' => 'Search by titre',
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Search',
            'attr' => [
                'class' => 'btn-primary',
            ],
        ])
        ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $annonces = $annonceRepository->searchByTitre($data['titre']);
    } else {
        $annonces = [];
    }

    return $this->render('front/GestionAnnonce/listeAnnonces.html.twig', [
        'annonces' => $annonces,
        'searchForm' => $form->createView(),
        'nom' => $data['nom'] ?? '',
        'prenom' => $data['prenom'] ?? '',
        'idp' => $data['id'] ?? '',

    ]);
}

#[Route('/annonce/sort/{sortOrder}', name: 'app_annonce_sort', methods: ['GET'])]
public function sort(Request $request, AnnonceRepository $annonceRepository, string $sortOrder): Response
{
    $data = $this->get('session')->get('data', []);
    $annonces = $annonceRepository->findAllSortedByTitre($sortOrder);

    return $this->render('front/GestionAnnonce/listeAnnonces.html.twig', [
        'annonces' => $annonces,
        'sortOrder' => $sortOrder,
        'nom' => $data['nom'] ?? '',
        'prenom' => $data['prenom'] ?? '',
        'idp' => $data['id'] ?? '',
    ]);
}



#[Route('/back/sort/{sortOrder}', name: 'app_annonce_back_sort', methods: ['GET'])]
public function sortback(Request $request, AnnonceRepository $annonceRepository, string $sortOrder,UtilisateurRepository $utilisateurRepository): Response
{
    $data1 = $this->get('session')->get('data', []);
    $utilisateur = $utilisateurRepository->find($data1['id'] ?? '');
    $annonces = $annonceRepository->findAllSortedByTitre($sortOrder);
    
    return $this->render('back/GestionAnnonce/annonces.html.twig', [
        'annonces' => $annonces,
        'sortOrder' => $sortOrder,
        'utilisateur' => $utilisateur
    ]);
}







#################################JSON##################################################




#[Route("/json/annonces", name: "list")]
//* Dans cette fonction, nous utilisons les services NormlizeInterface et annonceRepository, 
//* avec la méthode d'injection de dépendances.
public function getannonces(AnnonceRepository $repo, SerializerInterface $serializer)
{
    $annonces = $repo->findAll();
    //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
    //* annonces en  tableau associatif simple.
    // $annoncesNormalises = $normalizer->normalize($annonces, 'json', ['groups' => "annonces"]);

    // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
    // $json = json_encode($annoncesNormalises);

    $json = $serializer->serialize($annonces, 'json', ['groups' => "annonces"]);

    //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
    return new Response($json);
}

#[Route("/json/annonce/{id}", name: "annonce")]
    public function annonceId($id, NormalizerInterface $normalizer, annonceRepository $repo)
    {
        $annonce = $repo->find($id);
        $annonceNormalises = $normalizer->normalize($annonce, 'json', ['groups' => "annonces"]);
        return new Response(json_encode($annonceNormalises));
    }


    #[Route("/json/addannonce", name: "addannonceJSON")]
    public function addannonceJSON(Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        
        $annonce = new annonce();
        $annonce->setTitre($req->get('titre') ?? '');
        $annonce->setImage($req->get('image') ?? '');
        $annonce->setStatut($req->get('statut') ?? '');
        $annonce->setDomaine($req->get('domaine') ?? '');
        $dateCrea = new DateTime($req->get('dateCrea'));
        $annonce->setDateCrea($dateCrea);
          
        $annonce->setDescription($req->get('description') ?? '');
        

        
        $em->persist($annonce);
        $em->flush();

        $jsonContent = $Normalizer->normalize($annonce, 'json', ['groups' => 'annonces']);
        return new Response(json_encode($jsonContent));
    }



    #[Route("/updateannonceJSON/{id}", name: "updateannonceJSON")]
    public function updateannonceJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(annonce::class)->find($id);
        $annonce->setTitre($req->get('titre') ?? '');
        $annonce->setImage($req->get('image') ?? '');
        $annonce->setStatut($req->get('statut') ?? '');
        $annonce->setDomaine($req->get('domaine') ?? '');
        $dateCrea = new DateTime($req->get('dateCrea'));
        $annonce->setDateCrea($dateCrea);
          
        $annonce->setDescription($req->get('description') ?? '');
        

        $em->flush();

        $jsonContent = $Normalizer->normalize($annonce, 'json', ['groups' => 'annonces']);
        return new Response("annonce updated successfully " . json_encode($jsonContent));
    }




    #[Route("/deleteannonceJSON/{id}", name: "deleteannonceJSON")]
    public function deleteannonceJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository(annonce::class)->find($id);
        $em->remove($annonce);
        $em->flush();
        $jsonContent = $Normalizer->normalize($annonce, 'json', ['groups' => 'annonces']);
        return new Response("annonce deleted successfully " . json_encode($jsonContent));
    }




}
