<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event')]
    public function index(): Response
    {
        return $this->render('back/GestionEvent/create-an-event.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    #[Route('/eventlist', name: 'app_eventlist')]
    public function index1(): Response
    {
        return $this->render('back/GestionEvent/event-list.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    #[Route('/eventdetail', name: 'app_eventdetail')]
    public function index2(): Response
    {
        return $this->render('back/GestionEvent/event-detail.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    #[Route('/Ticket', name: 'app_Ticket')]
    public function index3(): Response
    {
        return $this->render('back/GestionEvent/Ticket.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
    #[Route('/Ticketlist', name: 'app_Ticketlist')]
    public function index4(): Response
    {
        return $this->render('back/GestionEvent/Ticket-list.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
