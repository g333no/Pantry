<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/calendar-events' => [[['_route' => 'api_calendar_events', '_controller' => 'App\\Controller\\Api\\CalendarController::events'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/prodotto' => [[['_route' => 'app_prodotto_index', '_controller' => 'App\\Controller\\ProdottoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prodotto/new' => [[['_route' => 'app_prodotto_new', '_controller' => 'App\\Controller\\ProdottoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/scadenze' => [[['_route' => 'app_scadenze_index', '_controller' => 'App\\Controller\\ScadenzeController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
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
                .'|/prodotto/(?'
                    .'|([^/]++)(?'
                        .'|(*:193)'
                        .'|/(?'
                            .'|fragment(*:213)'
                            .'|edit(*:225)'
                            .'|delete(*:239)'
                        .')'
                    .')'
                    .'|delete\\-(?'
                        .'|all(*:263)'
                        .'|selected(*:279)'
                    .')'
                    .'|([^/]++)/notifications(*:310)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'app_prodotto_show', '_controller' => 'App\\Controller\\ProdottoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'app_prodotto_fragment', '_controller' => 'App\\Controller\\ProdottoController::fragment'], ['id'], ['GET' => 0], null, false, false, null]],
        225 => [[['_route' => 'app_prodotto_edit', '_controller' => 'App\\Controller\\ProdottoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        239 => [[['_route' => 'app_prodotto_delete', '_controller' => 'App\\Controller\\ProdottoController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        263 => [[['_route' => 'app_prodotto_delete_all', '_controller' => 'App\\Controller\\ProdottoController::deleteAll'], [], ['POST' => 0], null, false, false, null]],
        279 => [[['_route' => 'app_prodotto_delete_selected', '_controller' => 'App\\Controller\\ProdottoController::deleteSelected'], [], ['POST' => 0], null, false, false, null]],
        310 => [
            [['_route' => 'app_prodotto_notifications', '_controller' => 'App\\Controller\\ProdottoController::updateNotifications'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
