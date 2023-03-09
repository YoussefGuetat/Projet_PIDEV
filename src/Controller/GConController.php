<?php

namespace App\Controller;

use Google\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class GConController extends AbstractController
{
 /**
     * @Route("/google-auth", name="google_auth")
     */
    public function authenticate(Request $request): RedirectResponse
    {
        // Create a new Google API client
        $client = new Client();
        $client->setApplicationName('Sabd_Box');
        $client->setClientId('281402456594-loo023i3p2s447ob7miar563o9ra755k.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri($this->generateUrl('google_auth', [], UrlGeneratorInterface::ABSOLUTE_URL));
        $client->addScope(\Google_Service_Oauth2::USERINFO_EMAIL);
        
        // If the "code" parameter is present in the request, exchange it for an access token
        if ($request->query->has('code')) {
            $client->fetchAccessTokenWithAuthCode($request->query->get('code'));
            $accessToken = $client->getAccessToken();
            // Save the access token in the session or database for later use
            $this->get('session')->set('google_access_token', $accessToken);
            // Redirect to the dashboard or wherever you want the user to go after authentication
            return $this->redirectToRoute('app_acceuil');
        } else {
            // If the "code" parameter is not present, redirect the user to Google for authentication
            $authUrl = $client->createAuthUrl();
            return new RedirectResponse($authUrl);
        }
    }
}
