<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/utilisateur' => [[['_route' => 'app_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UtilisateurController::profile'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\UtilisateurController::landing'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\UtilisateurController::login'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'app_signup', '_controller' => 'App\\Controller\\UtilisateurController::sigup'], null, null, null, false, false, null]],
        '/changepwd' => [[['_route' => 'app_changepwd', '_controller' => 'App\\Controller\\UtilisateurController::changemdp'], null, null, null, false, false, null]],
        '/modifierpro' => [[['_route' => 'app_modifierpro', '_controller' => 'App\\Controller\\UtilisateurController::modifierpro'], null, null, null, false, false, null]],
        '/forget' => [[['_route' => 'app_forget', '_controller' => 'App\\Controller\\UtilisateurController::forget'], null, null, null, false, false, null]],
        '/resetpwd' => [[['_route' => 'app_resetpwd', '_controller' => 'App\\Controller\\UtilisateurController::resetpwd'], null, null, null, false, false, null]],
        '/dashLog' => [[['_route' => 'app_dashLog', '_controller' => 'App\\Controller\\UtilisateurController::dashLog'], null, null, null, false, false, null]],
        '/dashForget' => [[['_route' => 'app_dashForget', '_controller' => 'App\\Controller\\UtilisateurController::dashForget'], null, null, null, false, false, null]],
        '/dashReset' => [[['_route' => 'app_dashReset', '_controller' => 'App\\Controller\\UtilisateurController::dashReset'], null, null, null, false, false, null]],
        '/dashListe' => [[['_route' => 'app_dashListe', '_controller' => 'App\\Controller\\UtilisateurController::dashListe'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
