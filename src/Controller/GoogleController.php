<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Conponent\HttpFoundation\JsonResponse;
use Symfony\Conponent\HttpFoundation\Request;

class GoogleController extends AbstractController
{
    #[Route('/google', name: 'app_google')]
    public function connectAction(ClientRegistry $clientRegistry)
    {
        return $clientRegistry
        ->getClient('google')
        ->redirect();
    }
}

 


