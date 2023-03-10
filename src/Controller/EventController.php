<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\Evenement1Type;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Doctrine\Persistence\ManagerRegistry;
#[Route('/event')]
class EventController extends AbstractController
{
 #[Route('/Allevenementsjson', name: 'app_Allevenementjson')]
    public function AllevenementsJson(EvenementRepository $repo,NormalizerInterface $normalizer)
    {
        $evenement=$repo->findAll();
        $evenementNormalises=$normalizer->normalize($evenement,'json',['groups' => "evenement"]);
        $json=json_encode($evenementNormalises);
        return new Response($json);
    }
    #[Route('/evenementsjson/{id}', name: 'app_evenementjson')]
    public function evenementsidJson(EvenementRepository $repo,SerializerInterface $normalizer,$id)
    {
        $evenement=$repo->find($id);
        $evenementNormalises=$normalizer->serialize($evenement,'json',['groups' => "evenement"]);
        $json=json_encode($evenementNormalises);
        return new Response($json);
    }
    #[Route('/Addevenementsjson/new', name: 'app_Addevenementjson')]
    public function AddevenementsJson(SerializerInterface $normalizer,Request $request,ManagerRegistry $mg)
    {
          $em = $mg->getManager();
     //   $em=$mg=$this->getManger();
        $evenement=new evenement();
        $evenement->setNom($request->get('nom'));
        $evenement->setObjet($request->get('objet'));
        $em->persist($evenement);
        $em->flush();

        $jsonContent=$normalizer->serialize($evenement,'json',['groups' => "evenement"]);
        return new Response(json_encode($jsonContent));
    }

    #[Route('/Upateevenementsjson', name: 'app_Updateevenementjson')]
    public function UpdateevenementsJson(NormalizerInterface $normalizer,Request $request,ManagerRegistry $mg)
    {
        $em = $mg->getManager();
        $evenement=$em->getRepository(Evenement::class)->find($request->get('id'));

        $evenement->setNom($request->get('nom'));
        $evenement->setObjet($request->get('objet'));
       
        $em->flush();

        $jsonContent=$normalizer->normalize($evenement,'json',['groups' => "evenement"]);
        return new Response("evenement mise à jour avec succés" . json_encode($jsonContent));
    }

    #[Route('/Deleteevenementsjson', name: 'app_Deleteevenementjson')]
    public function DeleteevenementsJson(NormalizerInterface $normalizer,Request $request,ManagerRegistry $mg)
    {
        $em = $mg->getManager();
        $evenement=$em->getRepository(Evenement::class)->find($request->get('id'));
        $em->remove($evenement);
        $em->flush();
        $jsonContent=$normalizer->normalize($evenement,'json',['groups' => "evenement"]);
        return new Response("evenement supprimé avec succés" . json_encode($jsonContent));
    }
    #[Route('/AllevenementsjsonTri', name: 'app_AllevenementjsonTri')]
    public function AllevenementsJsonTri(EvenementRepository $repo,NormalizerInterface $normalizer)
    {
        $evenement=$repo->orderByNbrDESC();
        $evenementNormalises=$normalizer->normalize($evenement,'json',['groups' => "evenement"]);
        $json=json_encode($evenementNormalises);
        return new Response($json);


    }
      
}