<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/calendar-events' => [[['_route' => 'api_calendar_events', '_controller' => 'App\\Controller\\Api\\CalendarController::events'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0], null, false, false, null]],
        '/prodotto' => [[['_route' => 'app_prodotto_index', '_controller' => 'App\\Controller\\ProdottoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/prodotto/new' => [[['_route' => 'app_prodotto_new', '_controller' => 'App\\Controller\\ProdottoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/scadenze' => [[['_route' => 'app_scadenze_index', '_controller' => 'App\\Controller\\ScadenzeController::index'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/prodotto/(?'
                    .'|([^/]++)(?'
                        .'|(*:31)'
                        .'|/(?'
                            .'|fragment(*:50)'
                            .'|edit(*:61)'
                            .'|delete(*:74)'
                        .')'
                    .')'
                    .'|delete\\-(?'
                        .'|all(*:97)'
                        .'|selected(*:112)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_prodotto_show', '_controller' => 'App\\Controller\\ProdottoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'app_prodotto_fragment', '_controller' => 'App\\Controller\\ProdottoController::fragment'], ['id'], ['GET' => 0], null, false, false, null]],
        61 => [[['_route' => 'app_prodotto_edit', '_controller' => 'App\\Controller\\ProdottoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        74 => [[['_route' => 'app_prodotto_delete', '_controller' => 'App\\Controller\\ProdottoController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        97 => [[['_route' => 'app_prodotto_delete_all', '_controller' => 'App\\Controller\\ProdottoController::deleteAll'], [], ['POST' => 0], null, false, false, null]],
        112 => [
            [['_route' => 'app_prodotto_delete_selected', '_controller' => 'App\\Controller\\ProdottoController::deleteSelected'], [], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
