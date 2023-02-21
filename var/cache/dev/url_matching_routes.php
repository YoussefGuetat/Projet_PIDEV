<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/dashLog' => [[['_route' => 'app_dashLog', '_controller' => 'App\\Controller\\SecurityController::dashLog'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/logoutd' => [[['_route' => 'app_logoutd', '_controller' => 'App\\Controller\\SecurityController::logoutd'], null, null, null, false, false, null]],
        '/zz' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/acceuil' => [[['_route' => 'app_acceuil', '_controller' => 'App\\Controller\\UtilisateurController::index1'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\UtilisateurController::landing'], null, null, null, false, false, null]],
        '/loginn' => [[['_route' => 'app_loginn', '_controller' => 'App\\Controller\\UtilisateurController::loginn'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\UtilisateurController::sigup'], null, null, null, false, false, null]],
        '/forget' => [[['_route' => 'app_forget', '_controller' => 'App\\Controller\\UtilisateurController::forget'], null, null, null, false, false, null]],
        '/resetpwd' => [[['_route' => 'app_resetpwd', '_controller' => 'App\\Controller\\UtilisateurController::resetpwd'], null, null, null, false, false, null]],
        '/dashForget' => [[['_route' => 'app_dashForget', '_controller' => 'App\\Controller\\UtilisateurController::dashForget'], null, null, null, false, false, null]],
        '/dashReset' => [[['_route' => 'app_dashReset', '_controller' => 'App\\Controller\\UtilisateurController::dashReset'], null, null, null, false, false, null]],
        '/dashListe' => [[['_route' => 'app_dashListe', '_controller' => 'App\\Controller\\UtilisateurController::dashListe'], null, null, null, false, false, null]],
        '/monprofil' => [[['_route' => 'app_monprofil', '_controller' => 'App\\Controller\\UtilisateurController::dashmonprofile'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/editU/([^/]++)(*:22)'
                .'|/z([^/]++)(*:39)'
                .'|/p(?'
                    .'|rofil(?'
                        .'|e/([^/]++)(*:69)'
                        .'|Detail/([^/]++)(*:91)'
                    .')'
                    .'|hoto/([^/]++)(*:112)'
                .')'
                .'|/changepwd/([^/]++)(*:140)'
                .'|/dash(?'
                    .'|Actif/([^/]++)(*:170)'
                    .'|Bloq/([^/]++)(*:191)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:231)'
                    .'|wdt/([^/]++)(*:251)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:297)'
                            .'|router(*:311)'
                            .'|exception(?'
                                .'|(*:331)'
                                .'|\\.css(*:344)'
                            .')'
                        .')'
                        .'|(*:354)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        22 => [[['_route' => 'app_editU', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        39 => [[['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        69 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UtilisateurController::profile'], ['id'], null, null, false, true, null]],
        91 => [[['_route' => 'app_profilDetail', '_controller' => 'App\\Controller\\UtilisateurController::dashprofiledetail'], ['id'], null, null, false, true, null]],
        112 => [[['_route' => 'app_photo', '_controller' => 'App\\Controller\\UtilisateurController::photo'], ['id'], null, null, false, true, null]],
        140 => [[['_route' => 'app_changepwd', '_controller' => 'App\\Controller\\UtilisateurController::changemdp'], ['id'], null, null, false, true, null]],
        170 => [[['_route' => 'app_dashActif', '_controller' => 'App\\Controller\\UtilisateurController::dashActif'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'app_dashBloq', '_controller' => 'App\\Controller\\UtilisateurController::dashBloq'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        251 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        297 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        311 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        331 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        344 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        354 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
