<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\HttpClient\HttpClient;

class AppCustomAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';
    public const LOGIN_ROUTE2 = 'app_dashLog';

    public function __construct(private UrlGeneratorInterface $urlGenerator)
    {
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');

        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {


        $user = $token->getUser();
        $data = ['nom' => $user->getNom(), 'prenom' => $user->getPrenom(), 'id' => $user->getId()];
        $request->getSession()->set('data', $data);
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        $refererUrl = $request->headers->get('referer');
        if ($request->isMethod('POST')) {
            // Verify the reCAPTCHA
            $recaptchaResponse = $request->request->get('g-recaptcha-response');
            $client = HttpClient::create();
            $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
                'body' => [
                    'secret' => '6LfqXqYkAAAAAOTgEaN78ErHe7JPI1xeyiGHLWsJ',
                    'response' => $recaptchaResponse,
                ],
            ]);
            $data = json_decode($response->getContent(), true);
            if (!$data['success']) {
                // The reCAPTCHA was not successful
                $message = ['errorC' => "merci de verifier Captcha"];
                    if (strpos($refererUrl, $this->urlGenerator->generate(self::LOGIN_ROUTE)) !== false) {
                        return new RedirectResponse($this->urlGenerator->generate('app_login',$message));
                    } else {
                        return new RedirectResponse($this->urlGenerator->generate('app_dashLog',$message));
                    }
            }

            if ($data['success']) {

                if ($user->isIsActif()) {
                    if (strpos($refererUrl, $this->urlGenerator->generate(self::LOGIN_ROUTE)) !== false) {
                        return new RedirectResponse($this->urlGenerator->generate('app_acceuil'));
                    } else {
                        if ($user->getRole() == "Admin" || $user->getRole() == "Super_Admin")
                            return new RedirectResponse($this->urlGenerator->generate('app_monprofil'));
                        else
                            return new RedirectResponse($this->urlGenerator->generate('app_acceuil'));
                    }
                } 
                else {
                    return new RedirectResponse($this->urlGenerator->generate('app_404'));
                }
            }
        }
    }

    protected function getLoginUrl(Request $request): string
    {

        $refererUrl = $request->headers->get('referer');
        if (strpos($refererUrl, $this->urlGenerator->generate(self::LOGIN_ROUTE)) !== false) {
            return $this->urlGenerator->generate(self::LOGIN_ROUTE);
        } else {
            return $this->urlGenerator->generate(self::LOGIN_ROUTE2);
        }
    }
}
